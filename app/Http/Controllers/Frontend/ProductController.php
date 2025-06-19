<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function product_detail()
    {
        return view('layouts.inc.frontand.product-detail');
    }

    public function product_list_search(){
        return view('layouts.inc.frontand.product-detail');
    }
}
