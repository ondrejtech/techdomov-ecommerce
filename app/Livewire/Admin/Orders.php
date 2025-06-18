<?php

namespace App\Livewire\Admin;

use App\Models\Admin\Order;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class Orders extends Component
{
    public $order, $priceSNC, $total, $totalDPH;

    public function mount()
    {
        $orderId = request()->route('order_number');
        $this->order = Order::with('orderItems.product', 'invoice')->where('order_number', $orderId)->first();
    }

    public function render()
    {
        $this->getTotalPrice();
        return view('livewire.admin.orders');
    }

    public function getTotalPrice()
    {
        $this->priceSNC = 0;
        $this->total = 0;
        $this->totalDPH = 0;

        foreach ($this->order->orderItems as $orderItem) {
            $this->priceSNC += $orderItem->product->YourPrice * $orderItem->quantity;
            $this->total += $orderItem->product->YourPriceWithFees * $orderItem->quantity;
            $this->totalDPH += $orderItem->product->YourPriceWithFees * $orderItem->quantity;
        }

        $this->priceSNC = $this->priceSNC - ($this->priceSNC / 100 * 1.21);
        $this->total = $this->total - ($this->total / 100 * 1.21);
    }
}
