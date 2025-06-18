<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Admin\Order;

class MyOrders extends Component
{

    public $orders, $count;

    public function mount()
    {
        $this->orders = Order::with(['user','invoice'])->where('user_id', auth()->user()->id)->get();
        $this->count = $this->orders->count();
    }

    public function render()
    {
        return view('livewire.admin.my-orders',[
            'orders' => $this->orders,
        ]);
    }
}
