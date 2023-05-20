<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\table_employees;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Admin_Employees_Controller extends Controller
{
    //
    public function Overview()
    {
        $data['All']=table_employees::all();
        return view('admin.all_users.employees.employees',$data);
    }
    public function Administrator()
    {
        $data['Administrator']=DB::table('table_employees')->where('emp_position','Administrator')->get();
        return view('admin.all_users.employees.pages.admin',$data);
    }
    public function Staff()
    {
        $data['Staff']=DB::table('table_employees')->where('emp_position','Staff')->get();
        return view('admin.all_users.employees.pages.staff',$data);
    }
}
