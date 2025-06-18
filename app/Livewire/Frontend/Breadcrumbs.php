<?php

namespace App\Livewire\Frontend;

use App\Models\Admin\SuperCategory;
use Livewire\Component;

class Breadcrumbs extends Component
{
    public $breadcrumbs = [];

    public function mount()
    {
        $rootName = SuperCategory::where('SuperCategoryCode', request()->route('RootCategoryCode'))->first();
        $this->breadcrumbs[] = $rootName->SuperCategoryName;
        $this->breadcrumbs[] = request()->route('SuperCategoryName');
        $this->breadcrumbs[] = request()->route('CategoryName');
//        dd($this->breadcrumbs);
    }

    public function render()
    {
        return view('livewire.frontend.breadcrumbs');
    }
}
