<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('layouts.inc.admin.register');
    }

    public function dashboard()
    {
        return view('layouts.inc.admin.dashboard');
    }

    public function orders()
    {
        return view('layouts.inc.admin.my-orders');
    }

    public function myOrdersItems()
    {
        return view('layouts.inc.admin.my-orders-items');
    }

    public function myInvoices()
    {
        return view('layouts.inc.admin.my-invoices');
    }

    public function myComplaints()
    {
        return view('layouts.inc.admin.my-complaints');
    }

    public function howComplaints()
    {
        return view('layouts.inc.admin.how-complaints');
    }

    public function createComplaintNumbers()
    {
        return view('layouts.inc.admin.create-complaint-number');
    }

    public function complaintList()
    {
        return view('layouts.inc.admin.complaint-list');
    }

    public function discrepanciesWithGoods()
    {
        return view('layouts.inc.admin.discrepancies-with-goods');
    }

    public function inconsistenciesWithForwarding()
    {
        return view('layouts.inc.admin.inconsistencies-with-forwarding');
    }

    public function claimsTechnicians()
    {
        return view('layouts.inc.admin.claims-technicians');
    }

    public function guarantees()
    {
        return view('layouts.inc.admin.guarantees');
    }

    public function complaintOrder()
    {
        return view('layouts.inc.admin.complaint-order');
    }

    public function creditNote()
    {
        return view('layouts.inc.admin.credit-note');
    }

    public function statisticsSalesByCategory()
    {
        return view('layouts.inc.admin.statistics-sales-by-category');
    }
}
