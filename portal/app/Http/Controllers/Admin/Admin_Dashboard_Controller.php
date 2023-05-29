<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Admin_Dashboard_Controller extends Controller
{
    //

    public function Dashboard()
    {
        return view('admin.dashboard');
    }
    public function Membership_Sales()
    {
        $ac=DB::table('table_memberships')->where('mem_status','Activated')->sum('mem_price');
        $pa=DB::table('table_memberships')->where('mem_status','Expired')->sum('mem_price');
        $data=$ac+$pa
;        return response()->json($data);
    }
    public function Membership_Activated_Count()
    {
        $data=DB::table('table_memberships')->where('mem_status','Activated')->count();
        return response()->json($data);
    }
    public function Membership_Pending_Count()
    {
        $data=DB::table('table_memberships')->where('mem_status','Pending')->count();
        return response()->json($data);
    }
    public function Charity_Total_Donations()
    {
        $data=DB::table('table_donations')->where('don_status','Validated')->sum('don_amount');
        return response()->json($data);
    }
    public function Active_Charity_Donators()
    {
        $data=DB::table('table_donations')->where('don_status','Validated')->count();
        return response()->json($data);
    }
    public function Highest_Charity_Donations()
    {
        $data=DB::table('table_donations')->where('don_status','Validated')->max('don_amount');
        return response()->json($data);
    }


}
