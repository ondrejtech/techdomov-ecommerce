<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MySettingsController extends Controller
{
    public function mySettings()
    {
        return view('layouts.inc.admin.my-settings');
    }

    public function myAccount()
    {
        return view('layouts.inc.admin.my-account');
    }

    public function gdpr()
    {
        return view('layouts.inc.admin.gpdr');
    }

    public function secured()
    {
        return view('layouts.inc.admin.secured');
    }

    public function settingsEshop()
    {
        return view('layouts.inc.admin.settings-eshop');
    }

    public function accessHistory()
    {
        return view('layouts.inc.admin.access-history');
    }

    public function overviewUsersByBranch()
    {
        return view('layouts.inc.admin.overview-users-by-branch');
    }

    public function settingsB2C()
    {
        return view('layouts.inc.admin.settings-b2c');
    }
}
