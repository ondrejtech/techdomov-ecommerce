<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SuperCategoryController extends Controller
{
    public function index()
    {
        return view('layouts.inc.frontand.view-super-category');
    }
}
