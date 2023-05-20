<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\table_memberships_log;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Admin_Membership_Log_Controller extends Controller
{
    //
    public function Membership_Logs()
    {
        $data['All_logs']=table_memberships_log::all();
    return view('admin.activity_logs.membership_logs',$data);
    }
}
