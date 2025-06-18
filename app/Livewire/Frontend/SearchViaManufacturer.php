<?php

namespace App\Livewire\Frontend;

use App\Models\Admin\Category;
use App\Models\Admin\Product;
use Livewire\Component;

class SearchViaManufacturer extends Component
{
    public $producerName, $productsCount, $categories;

    public function mount()
    {
        $this->producerName = request()->route('ProducerName');

        $products = Product::where('ProducerName', $this->producerName)->get();

        // Získání jedinečných kategorií na základě CategoryCode
        $categoryCodes = $products->pluck('CategoryCode')->unique()->filter()->values();

        $this->categories = \App\Models\Admin\Category::whereIn('CategoryCode', $categoryCodes)->get();

        $this->productsCount = $products->count();
    }


    public function render()
    {
        return view('livewire.frontend.search-via-manufacturer');
    }
}
