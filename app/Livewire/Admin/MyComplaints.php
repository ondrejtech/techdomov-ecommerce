<?php

namespace App\Livewire\Admin;
use Illuminate\Support\Facades\Auth;

use Livewire\Component;

class MyComplaints extends Component
{
    public function render()
    {
        // dd(Auth::check()); 
        return view('livewire.admin.my-complaints');
    }
}
