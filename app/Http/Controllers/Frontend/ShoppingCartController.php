<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Admin\Order;
use App\Models\Admin\ShoppingCart;
use Illuminate\Http\Request;
use Stripe\Checkout\Session;
use App\Models\Admin\Invoice;
use Stripe\Stripe;
use Srmklive\PayPal\Services\PayPal as PayPalClient;


class ShoppingCartController extends Controller
{
    public function index()
    {
        return view('layouts.inc.frontand.shopping-cart');
    }

    public function order_detail()
    {
        return view('layouts.inc.frontand.orders');
    }

    public function checkout(Request $request)
    {
        $total = $request->totalDPH;
        $order = Order::where('order_number', $request->order_number)->first();

        Stripe::setApiKey(env('STRIPE_SECRET'));

        $session = Session::create([
            'line_items' => [
                [
                    'price_data' => [
                        'currency' => 'czk',
                        'product_data' => [
                            'name' => $order->order_number,
                        ],
                        'unit_amount' => $total * 100,
                    ],
                    'quantity' => 1,
                ]
            ],
            'mode' => 'payment',
            'success_url' => route('checkout.success', ['order_number' => $request->order_number], true),
            'cancel_url' => route('checkout.cancel', ['order_number' => $request->order_number], true),

        ]);

        return redirect($session->url);
    }

    public function success(Request $request)
    {
        //Update order status
        $order_number = $request->order_number;
        $order = Order::where('order_number', $order_number)->first();
        $order->status = 'Payment';
        $order->save();


        //Create invoice
        $invoiceCount = Invoice::count() + 1;
        $year = date('y');
        $month = date('m');
        $day = date('d');

        // Naplnění čísla nulami zleva, aby mělo vždy alespoň 3 číslice
        $invoiceNumber = 'FA' . $year . $month . $day . str_pad($invoiceCount, 3, '0', STR_PAD_LEFT);

        Invoice::create([
            'invoice_number' => $invoiceNumber,
            'order_number' => $order_number,
            'user_id' => $order->user_id,
            'status' => 'Payment',
        ]);

        // Delete payment shopping cart
        $cart = ShoppingCart::where('user_id', $order->user_id);

        if ($cart->count() > 0) {
            $cart->delete();
        }


        return redirect()->route('documents.order_detail', ['order_number' => $order_number]);

    }

    public function cancel(Request $request)
    {
        $order_number = $request->order_number;
        dd($order_number);
    }

    public function paypalPayment(Request $request)
    {

        $total = $request->totalDPH;
        $order = Order::where('order_number', $request->order_number)->first();

        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $provider->getAccessToken();

        $data = [
            "intent" => "CAPTURE",
            'application_context' => [
                "return_url" => route('checkout.paypal.success', ['order_number' => $request->order_number], true),
                "cancel_url" => route('checkout.paypal.cancel', ['order_number' => $request->order_number], true),
            ],
            "purchase_units" => [
                [
                    "amount" => [  // BYLO: "ammount"
                        "currency_code" => "CZK",
                        "value" => $total,
                    ],
                ]
            ]
        ];

        $order = $provider->createOrder($data);
        $url = collect($order['links'])->where('rel', 'approve')->first()['href'];

        return redirect()->away($url);

    }

    function paypalPaymentSuccess(Request $request)
    {
        $token = $request->token;
        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $provider->getAccessToken();

        $order = $provider->capturePaymentOrder($token);


        if (isset($order['status']) && $order['status'] == 'COMPLETED') {
            //Update order status
            //Update order status
            $order_number = $request->order_number;
            $order = Order::where('order_number', $order_number)->first();
            $order->status = 'Payment';
            $order->save();


            //Create invoice
            $invoiceCount = Invoice::count() + 1;
            $year = date('y');
            $month = date('m');
            $day = date('d');

            // Naplnění čísla nulami zleva, aby mělo vždy alespoň 3 číslice
            $invoiceNumber = 'FA' . $year . $month . $day . str_pad($invoiceCount, 3, '0', STR_PAD_LEFT);

            Invoice::create([
                'invoice_number' => $invoiceNumber,
                'order_number' => $order_number,
                'user_id' => $order->user_id,
                'status' => 'Payment',
            ]);

            // Delete payment shopping cart
            $cart = ShoppingCart::where('user_id', $order->user_id);

            if ($cart->count() > 0) {
                $cart->delete();
            }


            return redirect()->route('documents.order_detail', ['order_number' => $order_number]);

        }else{
            return redirect()->route('checkout.paypal.cancel', ['order_number' => $request->order_number])->with('error', 'Payment failed. Please try again.');
        }
    }

    public function cancelPaypal(Request $request)
    {
        $order_number = $request->order_number;
        return redirect()->route('checkout.paypal.cancel', ['order_number' => $order_number])->with('error', 'Payment cancelled. Please try again.');
    }
}
