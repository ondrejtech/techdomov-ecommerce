<?php

namespace App\Http\Controllers\Frontend\Root;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function view()
    {
        return view('layouts.inc.frontand.view-root-category');
    }
}
