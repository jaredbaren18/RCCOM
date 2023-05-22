<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Admin_Blood_Controller extends Controller
{
    //
    public function Blood()
    {
        return view('admin.blood_donation');
    }
}
