<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function vendor_page()
    {
        return view('layouts.inc.frontand.panel-navigator-vendor');
    }

    public function product_index()
    {
        return view('layouts.inc.frontand.product-index-list');
    }

    public function searchViaManufacturer()
    {
        return view('layouts.inc.frontand.search-via-manufacturer');
    }
}
