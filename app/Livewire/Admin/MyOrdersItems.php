<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Admin\OrderItem;

class MyOrdersItems extends Component
{
    public $orderItems, $count;

    public function mount()
    {
        $this->orderItems = OrderItem::with('product')->where('user_id', auth()->user()->id)->get();
        $this->count = $this->orderItems->count();
    }

    public function render()
    {
        return view('livewire.admin.my-orders-items',[
            'orderItems' => $this->orderItems,
        ]);
    }
}
