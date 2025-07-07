<?php

namespace App\Livewire\Frontend;

use Livewire\Component;
use App\Models\Admin\Order;
use Illuminate\Http\Request;
use App\Models\ContactPerson;
use App\Models\Admin\OrderItem;
use App\Models\Admin\ShoppingCart as Cart;

class ShoppingCart extends Component
{
    public $carts, $total, $totalDPH;

    public $orderLabel, $note, $delivery, $name, $title_name, $address, $city, $postal_code, $state, $phone, $email, $request, $contact_person_name, $proof_of_title, $street, $state_name;

    public function saveContactPerson()
    {
        $this->validate([
            'contact_person_name' => 'required|string|max:35',
            'proof_of_title' => 'nullable|string|max:50',
            'street' => 'required|string|max:35',
            'city' => 'required|string|max:35',
            'postal_code' => 'required|string|max:7',
            'state_name' => 'required|string|max:20',
            'phone' => 'required|string|max:20',
            'email' => 'required|email|max:100',
        ]);

        // Save the contact person details

        $user_id = auth()->user()->id;
        ContactPerson::create([
            'user_id' => auth()->id(),
            'contact_person_name' => $this->contact_person_name,
            'proof_of_title' => $this->proof_of_title,
            'street' => $this->street,
            'city' => $this->city,
            'postal_code' => $this->postal_code,
            'state' => $this->state_name,
            'phone' => $this->phone,
            'email' => $this->email,
        ]);

        $this->dispatch('message', [
            'text' => 'Kontaktní osoba byla úspěšně uložena.',
            'type' => 'success',
            'status' => 200,
        ]);
    }

    public function mount()
    {
        $user_id = auth()->user()->id;
        $this->carts = \App\Models\Admin\ShoppingCart::where('user_id', $user_id)->with('products')->get();
    }

    public function render()
    {
        //        dd(auth()->user());
        $this->getTotalPrice();
        return view('livewire.frontend.shopping-cart');
    }

    public function getTotalPrice()
    {
        $this->total = 0;
        $this->totalDPH = 0;
        foreach ($this->carts as $cart) {
            $this->total += $cart->products->YourPriceWithFees * $cart->quantity;
            $this->totalDPH += $cart->products->YourPriceWithFees * $cart->quantity;
        }
        $this->total = $this->total - ($this->total / 100 * 1.21);
    }

    public function createOrder(Request $request)
    {
        // Generate order number (format: YYYYMMDD+OrderCount)
        $year = date('Y');
        $date = date('md');
        $number = Order::count() + 1;  // Optimized to use count() directly
        $order_number = $year . $date . $number;  // Ensure consistent order number length

        // Validate the incoming request data
//        $this->validate([
//            'orderLabel' => 'required',
//            'delivery' => 'required',
//            'name' => 'required',
//            'address' => 'required',
//            'city' => 'required',
//            'postal_code' => 'required',
//            'state' => 'required',
//            'phone' => 'required',
//            'email' => 'required|email',  // Added email validation rule
//        ]);

        // Check if the user is authenticated
        if (auth()->check()) {
            $user_id = auth()->user()->id;

            // Create a new order record
            Order::create([
                'user_id' => $user_id,
                'order_number' => $order_number,
                'status' => 'Pending',  // Default status
            ]);

            // Create order items for each product in the cart
            foreach ($this->carts as $cart) {
                // Ensure the product exists before creating the order item
                OrderItem::create([
                    'order_number' => $order_number,
                    'ProId' => $cart->ProId,
                    'quantity' => $cart->quantity,
                    'user_id' => auth()->user()->id,
                ]);
            }
        } else {
            return redirect()->route('login')->with('error', 'You must be logged in to place an order.');
        }

        // Redirect to the order details page
        return redirect('documents/order-detail/' . $order_number);
    }

    public function delete($ProId)
    {
        $shoppingCart = Cart::where('user_id', auth()->user()->id)->where('ProId', $ProId)->first();
        $shoppingCart->delete();

        $this->dispatch('message', [
            'text' => 'Zboží bylo úspěšně odbráno z košíku',
            'type' => 'success',
            'status' => '200',
        ]);

        $this->mount();
        $this->getTotalPrice();
    }

    public function increment($ProId)
    {
        $shoppingCart = Cart::where('user_id', auth()->user()->id)->where('ProId', $ProId)->first();
        $shoppingCart->quantity += 1;
        $shoppingCart->save();
        $this->mount();
    }

    public function decrement($ProId)
    {
        $shoppingCart = Cart::where('user_id', auth()->user()->id)->where('ProId', $ProId)->first();
        $shoppingCart->quantity -= 1;
        $shoppingCart->save();
        $this->mount();
    }


}
