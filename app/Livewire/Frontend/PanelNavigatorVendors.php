<?php

namespace App\Livewire\Frontend;

use App\Models\Admin\Producer;
use Livewire\Component;

class PanelNavigatorVendors extends Component
{

    public function render()
    {
        $producers = Producer::query()
            ->select('ProducerName')
            ->orderBy('ProducerName')
            ->get()
            ->groupBy(fn($item) => strtoupper(mb_substr($item->ProducerName, 0, 1)));

        return view('livewire.frontend.panel-navigator-vendors', [
            'producers' => $producers,
        ]);
    }
}
