<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\Membership_Activated_Mail;
use App\Models\table_memberships;
use App\Models\table_memberships_log;
use DateTime;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class Admin_Membership_Controller extends Controller
{
    //

    public function Overview()
    {
        session()->forget('mem_profile');
        $data['Sales'] = DB::table('table_memberships')->sum('mem_price');
        $data['Activated'] = DB::table('table_memberships')->where('mem_status', 'Activated')->count();
        $data['Pending'] = DB::table('table_memberships')->where('mem_status', 'Pending')->count();
        $data['Expired'] = DB::table('table_memberships')->where('mem_status', 'Expired')->count();
        $data['Declined'] = DB::table('table_memberships')->where('mem_status', 'Declined')->count();


        $data['ACM']=DB::table('table_memberships')->where('mem_status','Activated')->where('mem_category','Classic')->count();
        $data['ABM']=DB::table('table_memberships')->where('mem_status','Activated')->where('mem_category','Bronze')->count();
        $data['ASM']=DB::table('table_memberships')->where('mem_status','Activated')->where('mem_category','Silver')->count();
        $data['AGM']=DB::table('table_memberships')->where('mem_status','Activated')->where('mem_category','Gold')->count();
        $data['APM']=DB::table('table_memberships')->where('mem_status','Activated')->where('mem_category','Platinum')->count();
        $data['ASPM']=DB::table('table_memberships')->where('mem_status','Activated')->where('mem_category','Senior')->count();
        $data['ASPM']=DB::table('table_memberships')->where('mem_status','Activated')->where('mem_category','Senior Plus')->count();




        // Year 2023
        $data['Jan_23']=DB::table('table_memberships')->whereMonth('created_at',1)->whereYear('created_at',2023)->sum('mem_price');
        $data['Feb_23']=DB::table('table_memberships')->whereMonth('created_at',2)->whereYear('created_at',2023)->sum('mem_price');
        $data['Mar_23']=DB::table('table_memberships')->whereMonth('created_at',3)->whereYear('created_at',2023)->sum('mem_price');
        $data['Aprl_23']=DB::table('table_memberships')->whereMonth('created_at',4)->whereYear('created_at',2023)->sum('mem_price');
        $data['May_23']=DB::table('table_memberships')->whereMonth('created_at',5)->whereYear('created_at',2023)->sum('mem_price');
        $data['Jun_23']=DB::table('table_memberships')->whereMonth('created_at',6)->whereYear('created_at',2023)->sum('mem_price');
        $data['Jul_23']=DB::table('table_memberships')->whereMonth('created_at',7)->whereYear('created_at',2023)->sum('mem_price');
        $data['Aug_23']=DB::table('table_memberships')->whereMonth('created_at',8)->whereYear('created_at',2023)->sum('mem_price');
        $data['Sept_23']=DB::table('table_memberships')->whereMonth('created_at',9)->whereYear('created_at',2023)->sum('mem_price');
        $data['Oct_23']=DB::table('table_memberships')->whereMonth('created_at',10)->whereYear('created_at',2023)->sum('mem_price');
        $data['Nov_23']=DB::table('table_memberships')->whereMonth('created_at',11)->whereYear('created_at',2023)->sum('mem_price');
        $data['Dec_23']=DB::table('table_memberships')->whereMonth('created_at',12)->whereYear('created_at',2023)->sum('mem_price');
        

        $data['All'] = table_memberships::all();


        $data['All_memberhsips']=
        [
            ['Status','Count'],
            ['Activated',$data['Activated']],
            ['Pending',$data['Pending']],
            ['Expired',$data['Expired']],
            ['Declined',$data['Declined']],
        ];


        $data['YearLySales2023']=[
            ['Month', 'Sales per month'],
           ['January',$data['Jan_23']],
           ['February',$data['Feb_23']],
           ['March',$data['Mar_23']],
           ['April',$data['Aprl_23']],
           ['May',$data['May_23']],
           ['June',$data['Jun_23']],
           ['July',$data['Jul_23']],
           ['August',$data['Aug_23']],
           ['September',$data['Sept_23']],
           ['October',$data['Oct_23']],
           ['November',$data['Nov_23']],
           ['December',$data['Dec_23']],
        ];
        $data['Active_Memberships'] = [
            ['', 'Classic', 'Bronze','Silver','Gold','Platinum','Senior','Senior Plus'],
            ['Active Membership',$data['ACM'], $data['ABM'],$data['ASM'],$data['AGM'],$data['APM'],$data['ASM'],$data['ASPM']],
        ];
        return view('admin.membership',$data);
    }
    public function Activated()
    {
        session()->forget('mem_profile');
        $data['Sales'] = DB::table('table_memberships')->sum('mem_price');
        $data['Activated_Count'] = DB::table('table_memberships')->where('mem_status', 'Activated')->count();
        $data['Pending'] = DB::table('table_memberships')->where('mem_status', 'Pending')->count();
        $data['Expired'] = DB::table('table_memberships')->where('mem_status', 'Expired')->count();
        $data['Activated'] = DB::table('table_memberships')->where('mem_status', 'Activated')->get();

        return view('admin.membership.pages.activated', $data);
    }
    public function Expired()
    {
        session()->forget('mem_profile');
        $data['Sales'] = DB::table('table_memberships')->sum('mem_price');
        $data['Activated'] = DB::table('table_memberships')->where('mem_status', 'Activated')->count();
        $data['Pending'] = DB::table('table_memberships')->where('mem_status', 'Pending')->count();
        $data['Expired_Count'] = DB::table('table_memberships')->where('mem_status', 'Expired')->count();
        $data['Expired'] = DB::table('table_memberships')->where('mem_status', 'Expired')->get();
        $data['All'] = table_memberships::all();
        return view('admin.membership.pages.expired', $data);
    }
    public function Pending()
    {
        session()->forget('mem_profile');
        $data['Sales'] = DB::table('table_memberships')->sum('mem_price');
        $data['Activated'] = DB::table('table_memberships')->where('mem_status', 'Activated')->count();
        $data['Pending_Count'] = DB::table('table_memberships')->where('mem_status', 'Pending')->count();
        $data['Expired'] = DB::table('table_memberships')->where('mem_status', 'Expired')->count();
        $data['Pending'] = DB::table('table_memberships')->where('mem_status', 'Pending')->get();
        $data['All'] = table_memberships::all();
        return view('admin.membership.pages.pending', $data);
    }
    public function Decline()
    {
        session()->forget('mem_profile');
        $data['Sales'] = DB::table('table_memberships')->sum('mem_price');
        $data['Activated'] = DB::table('table_memberships')->where('mem_status', 'Activated')->count();
        $data['Pending'] = DB::table('table_memberships')->where('mem_status', 'Pending')->count();
        $data['Expired'] = DB::table('table_memberships')->where('mem_status', 'Expired')->count();
        $data['Declined_Count'] = DB::table('table_memberships')->where('mem_status', 'Declined')->count();
        $data['Declined'] = DB::table('table_memberships')->where('mem_status', 'Declined')->get();
        $data['All'] = table_memberships::all();
        return view('admin.membership.pages.declined', $data);
    }
    public function Mem_Profile($mem_id)
    {
        session()->forget('mem_profile');
        $data['mem_profile'] = DB::table('table_memberships')->where('mem_id', $mem_id)->first();
        return view('admin.membership.pages.mem_profile', $data);
    }
    public function Delete_Membership_Account($mem_id)
    {
        $find = DB::table('table_memberships')->where('mem_id', $mem_id)->first();
        if ($find->mem_status == "Activated") {
            $success = DB::table('table_memberships')->where('mem_id', $mem_id)->delete();
            if ($success) {
                $log = new table_memberships_log();

                if (session('Admin')) {
                    $log->content = ucfirst(session('Admin')['emp_role']) . " " . ucfirst(session(session('Admin')['emp_fname'])) . " " . ucfirst(session(session('Admin')['emp_mname'])) . " " . ucfirst(session('Admin')['emp_lname']) . " deleted membership account on ";
                    $log->save();
                }
                return redirect('admin/membership/activated')->with('success', 'Membership account has been successfully deleted.');
            } else {
                $log = new table_memberships_log();
                $log->content = ucfirst(session('emp_role')) . " " . ucfirst(session('emp_fname')) . " " . ucfirst(session('emp_mname')) . " " . ucfirst(session('emp_lname')) . " fail to delete membership account";
                $log->save();
                return redirect()->back()->with('failed', 'Membership account has been successfully deleted.');
            }
        } elseif ($find->mem_status == "Pending") {
            $success = DB::table('table_memberships')->where('mem_id', $mem_id)->delete();
            if ($success) {
                $log = new table_memberships_log();

                if (session('Admin')) {
                    $log->content = ucfirst(session('Admin')['emp_role']) . " " . ucfirst(session(session('Admin')['emp_fname'])) . " " . ucfirst(session(session('Admin')['emp_mname'])) . " " . ucfirst(session('Admin')['emp_lname']) . "deleted membership account.";
                    $log->save();
                }
                return redirect('admin/membership/pending')->with('success', 'Membership account has been deleted successfully.');
            } else {
                $log = new table_memberships_log();
                $log->content = ucfirst(session('emp_role')) . " " . ucfirst(session('emp_fname')) . " " . ucfirst(session('emp_mname')) . " " . ucfirst(session('emp_lname')) . " fail to delete membership account";
                $log->save();
                return redirect()->back()->with('failed', 'Membership account has been successfully deleted.');
            }
        } elseif ($find->mem_status == "Expired") {
            $success = DB::table('table_memberships')->where('mem_id', $mem_id)->delete();
            if ($success) {
                $log = new table_memberships_log();

                if (session('Admin')) {
                    $log->content = ucfirst(session('Admin')['emp_role']) . " " . ucfirst(session(session('Admin')['emp_fname'])) . " " . ucfirst(session(session('Admin')['emp_mname'])) . " " . ucfirst(session('Admin')['emp_lname']) . "deleted membership account.";
                    $log->save();
                }
                return redirect('admin/membership/expired')->with('success', 'Membership account has been deleted successfully.');
            } else {
                $log = new table_memberships_log();
                $log->content = ucfirst(session('emp_role')) . " " . ucfirst(session('emp_fname')) . " " . ucfirst(session('emp_mname')) . " " . ucfirst(session('emp_lname')) . "fail to delete membership account";
                $log->save();
                return redirect()->back()->with('failed', 'Membership account has been successfully deleted.');
            }
        } elseif ($find->mem_status == "Declined") {
            $success = DB::table('table_memberships')->where('mem_id', $mem_id)->delete();
            if ($success) {
                $log = new table_memberships_log();

                if (session('Admin')) {
                    $log->content = ucfirst(session('Admin')['emp_role']) . " " . ucfirst(session(session('Admin')['emp_fname'])) . " " . ucfirst(session(session('Admin')['emp_mname'])) . " " . ucfirst(session('Admin')['emp_lname']) . "deleted membership account.";
                    $log->save();
                }
                return redirect('admin/membership/declined')->with('success', 'Membership account has been deleted successfully.');
            } else {
                $log = new table_memberships_log();
                $log->content = ucfirst(session('emp_role')) . " " . ucfirst(session('emp_fname')) . " " . ucfirst(session('emp_mname')) . " " . ucfirst(session('emp_lname')) . "fail to delete membership account";
                $log->save();
                return redirect()->back()->with('failed', 'Membership account failed to delete due to unknown error.');
            }
        } elseif ($find->mem_status == "Expired") {
            $success = DB::table('table_memberships')->where('mem_id', $mem_id)->delete();
            if ($success) {
                $log = new table_memberships_log();

                if (session('Admin')) {
                    $log->content = ucfirst(session('Admin')['emp_role']) . " " . ucfirst(session(session('Admin')['emp_fname'])) . " " . ucfirst(session(session('Admin')['emp_mname'])) . " " . ucfirst(session('Admin')['emp_lname']) . "deleted expired membership account";
                    $log->save();
                }
                return redirect('admin/membership/expired')->with('success', 'Membership account has been deleted successfully.');
            } else {
                $log = new table_memberships_log();
                $log->content = ucfirst(session('emp_role')) . " " . ucfirst(session('emp_fname')) . " " . ucfirst(session('emp_mname')) . " " . ucfirst(session('emp_lname')) . "fail to delete membership account";
                $log->save();
                return redirect()->back()->with('failed', 'Membership account failed to delete due to unknown error.');
            }
        }
    }
    public function Edit_Membership_Account($mem_id)
    {
        $data = DB::table('table_memberships')->where('mem_id', $mem_id)->first();
        if ($data->mem_status == "Activated") {
            session()->put('mem_profile', $data);
            return view('admin.membership.forms.new_membership');
        } elseif ($data->mem_status == "Expired") {
            session()->put('mem_profile', $data);
            return view('admin.membership.forms.new_membership');
        }
    }
    public function Renew_Membership_Account(Request $request)
    {


        $rules = [
            'mem_id_no' => 'required',
            'mem_fname' => 'required',
            'mem_mname' => 'required',
            'mem_lname' => 'required',
            'mem_age' => 'required',
            'mem_gender' => 'required',
            'mem_birthday' => 'required',
            'mem_barangay' => 'required',
            'mem_municipal' => 'required',
            'mem_zipcode' => 'required',
            'mem_blood_type' => 'required',
            'mem_price' => ['required', 'numeric', 'regex:/^\d+(\.\d{1,2})?$/'],
            'mem_contact_no' => 'required|max:11|min:11',
            'mem_email' => 'required',
            'mem_payment_method' => 'required',
            'mem_proof_payment' => 'required|image|max:25000',
            'mem_category' => 'required',
        ];
        $message = [
            'mem_id_no.required' => 'Field is required.',
            'mem_fname.required' => 'Field is required.',
            'mem_mname.required' => 'Field is required.',
            'mem_lname.required' => 'Field is required.',
            'mem_age.required' => 'Field is required.',
            'mem_gender.required' => 'Field is required.',
            'mem_birthday.required' => 'Field is required.',
            'mem_barangay.required' => 'Field is required.',
            'mem_municipal.required' => 'Field is required.',
            'mem_zipcode.required' => 'Field is required.',
            'mem_blood_type.required' => 'Field is required.',
            'mem_contact_no.required' => 'Field is required.',
            'mem_email.required' => 'Field is required.',
            'mem_price.required' => 'Field is required.',
            'mem_price.numeric' => 'Field accepting numbers only.',
            'mem_payment_method.required' => 'Field is required.',
            'mem_proof_payment.required' => 'Field is required.',
            'mem_proof_payment.image' => 'Field accepting image only.',
            'mem_proof_payment.max' => 'Image file size less than 25mb..',
            'mem_category.required' => 'Field is required.',
        ];
        $validator = Validator::make($request->all(), $rules, $message);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $path = $request->file('mem_proof_payment')->store('public/payment');
        if($path)
        {
            $new_data = [
                'mem_id_no' => $request->mem_id_no,
                'mem_fname' => $request->mem_fname,
                'mem_mname' => $request->mem_mname,
                'mem_lname' => $request->mem_lname,
                'mem_age' => $request->mem_age,
                'mem_gender' => $request->mem_gender,
                'mem_birthday' => $request->mem_birthday,
                'mem_zipcode' => $request->mem_zipcode,
                'mem_barangay' => $request->mem_barangay,
                'mem_municipal' => $request->mem_municipal,
                'mem_blood_type' => $request->mem_blood_type,
                'mem_contact_no' => $request->mem_contact_no,
                'mem_email' => $request->mem_email,
                'mem_status' => "Activated",
                'mem_price' => $request->mem_price,
                'mem_payment_method' => $request->mem_payment_method,
                'mem_proof_payment' => Storage::url($path),
                'mem_category' => $request->mem_category,
                'mem_assisted_by' => $request->mem_assisted_by,
                'mem_start_at' => $request->mem_start_at,
                'mem_end_at' => $request->mem_end_at,
            ];
    
            $mail = [
                'mem_fname' => ucfirst($request->mem_fname),
                'mem_mname' => ucfirst($request->mem_mname),
                'mem_lname' => ucfirst($request->mem_lname),
                'mem_category' => ucfirst($request->mem_category),
                'mem_price' => ucfirst($request->mem_price),
                'mem_start_at' => $request->mem_start_at,
                'mem_end_at' => $request->mem_end_at
            ];
            $success = DB::table('table_memberships')->where('mem_id', $request->mem_id)->update($new_data);
            if($success)
            {
                $sent = Mail::to($request->mem_email)->send(new Membership_Activated_Mail($mail));
                if($sent)
                {
                    $log = new table_memberships_log();
                $log->content = session('Admin')['emp_role'] . " " . ucfirst($request->mem_assisted_by) . " Re-new membership account of " . $request->mem_fname . " " . $request->mem_lname . " " . $request->mem_category . "insurance member" . " Price:" . $request->mem_price;
                $data = DB::table('table_memberships')->where('mem_id_no', $request->mem_id_no)->first();
                session()->put('mem_profile', $data);
                $log->save();
                return redirect()->back()->with('success', 'Membership Renewal successful.');
                }
                else
                {
                return redirect()->back()->with('failed', 'Membership Renewal failed due to network error.');
    
                }
                
            }
            else
            {
                $log = new table_memberships_log();
                    $log->content = session('Admin')['emp_role'] . " " . ucfirst($request->mem_assisted_by) . " failed to renew " . $request->mem_category . "insurance member, Price:" . $request->mem_price . " due to unknow error.";
                    $log->save();
                    return redirect()->back()->with('failed', 'Nothing change');
            }
    
        }
        else
        {
            Storage::delete($path);
            DB::rollBack();
            return redirect()->back()->with('failed', 'Nothing change');
        }
      
    }
    public function Update_Membership_Account(Request $request)
    {
        $rules = [
            'mem_id_no' => 'required',
            'mem_fname' => 'required',
            'mem_mname' => 'required',
            'mem_lname' => 'required',
            'mem_age' => 'required',
            'mem_gender' => 'required',
            'mem_birthday' => 'required',
            'mem_barangay' => 'required',
            'mem_municipal' => 'required',
            'mem_zipcode' => 'required',
            'mem_blood_type' => 'required',
            'mem_price' => ['required', 'numeric', 'regex:/^\d+(\.\d{1,2})?$/'],
            'mem_contact_no' => 'required|max:11|min:11',
            'mem_email' => 'required',
            'mem_payment_method' => 'required',
            'mem_category' => 'required',
        ];
        $message = [
            'mem_id_no.required' => 'Field is required.',
            'mem_fname.required' => 'Field is required.',
            'mem_mname.required' => 'Field is required.',
            'mem_lname.required' => 'Field is required.',
            'mem_age.required' => 'Field is required.',
            'mem_gender.required' => 'Field is required.',
            'mem_birthday.required' => 'Field is required.',
            'mem_barangay.required' => 'Field is required.',
            'mem_municipal.required' => 'Field is required.',
            'mem_zipcode.required' => 'Field is required.',
            'mem_blood_type.required' => 'Field is required.',
            'mem_contact_no.required' => 'Field is required.',
            'mem_email.required' => 'Field is required.',
            'mem_price.required' => 'Field is required.',
            'mem_price.numeric' => 'Field accepting numbers only.',
            'mem_payment_method.required' => 'Field is required.',
            'mem_category.required' => 'Field is required.',
        ];
        $validator = Validator::make($request->all(), $rules, $message);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        if ($request->mem_proof_payment == "") {
            $new_data = [
                'mem_id_no' => $request->mem_id_no,
                'mem_fname' => $request->mem_fname,
                'mem_mname' => $request->mem_mname,
                'mem_lname' => $request->mem_lname,
                'mem_age' => $request->mem_age,
                'mem_gender' => $request->mem_gender,
                'mem_birthday' => $request->mem_birthday,
                'mem_zipcode' => $request->mem_zipcode,
                'mem_barangay' => $request->mem_barangay,
                'mem_municipal' => $request->mem_municipal,
                'mem_blood_type' => $request->mem_blood_type,
                'mem_contact_no' => $request->mem_contact_no,
                'mem_email' => $request->mem_email,
                'mem_status' => $request->mem_status,
                'mem_price' => $request->mem_price,
                'mem_payment_method' => $request->mem_payment_method,
                'mem_category' => $request->mem_category,
                'mem_assisted_by' => $request->mem_assisted_by,
                'mem_start_at' => $request->mem_start_at,
                'mem_end_at' => $request->mem_end_at,
            ];
            $success = DB::table('table_memberships')->where('mem_id', $request->mem_id)->update($new_data);
            if ($success) {
                $log = new table_memberships_log();
                $log->content = session('Admin')['emp_role'] . " " . ucfirst($request->mem_assisted_by) . " updated membership account of " . $request->mem_fname . " " . $request->mem_lname . " " . $request->mem_category . "insurance member" . " Price:" . $request->mem_price;
                $data = DB::table('table_memberships')->where('mem_id_no', $request->mem_id_no)->first();
                session()->put('mem_profile', $data);
                $log->save();
                return redirect()->back()->with('success', 'Insurance  updated successfully.');
            } else {
                $log = new table_memberships_log();
                $log->content = session('Admin')['emp_role'] . " " . ucfirst($request->mem_assisted_by) . " failed to updated " . $request->mem_category . "insurance member, Price:" . $request->mem_price . " due to unknow error.";
                $log->save();
                return redirect()->back()->with('failed', 'Nothing change');
            }
        } else {
            $path = $request->file('mem_proof_payment')->store('public/payment');
            $new_data = [
                'mem_id_no' => $request->mem_id_no,
                'mem_fname' => $request->mem_fname,
                'mem_mname' => $request->mem_mname,
                'mem_lname' => $request->mem_lname,
                'mem_age' => $request->mem_age,
                'mem_gender' => $request->mem_gender,
                'mem_birthday' => $request->mem_birthday,
                'mem_zipcode' => $request->mem_zipcode,
                'mem_barangay' => $request->mem_barangay,
                'mem_municipal' => $request->mem_municipal,
                'mem_blood_type' => $request->mem_blood_type,
                'mem_contact_no' => $request->mem_contact_no,
                'mem_email' => $request->mem_email,
                'mem_status' => $request->mem_status,
                'mem_price' => $request->mem_price,
                'mem_payment_method' => $request->mem_payment_method,
                'mem_proof_payment' => Storage::url($path),
                'mem_category' => $request->mem_category,
                'mem_assisted_by' => $request->mem_assisted_by,
                'mem_start_at' => $request->mem_start_at,
                'mem_end_at' => $request->mem_end_at,
            ];
            $success = DB::table('table_memberships')->where('mem_id_no', $request->mem_id_no)->update($new_data);
            if ($success) {
                $log = new table_memberships_log();
                $log->content = ucfirst($request->mem_assisted_by) . " updated membership account of" . $request->mem_fname . " " . $request->mem_lname . " " . $request->mem_category . "insurance member" . " Price:" . $request->mem_price;
                $data = DB::table('table_memberships')->where('mem_id_no', $request->mem_id_no)->first();
                session()->put('mem_profile', $data);
                $log->save();
                return redirect()->back()->with('success', 'Insurance  updated successfully.');
            } else {
                $log = new table_memberships_log();
                $log->content = ucfirst($request->mem_assisted_by) . " failed to updated " . $request->mem_category . "insurance member, Price:" . $request->mem_price . " due to unknow error.";
                $log->save();
                return redirect()->back()->with('failed', 'Nothing change.');
            }
        }
    }

    // --------------------------------------------------------------------------------------------------------------

    public function Decline_Membership_Account(Request $request)
    {
        $incharge = $request->incharge;
        $mem_reason_decline = $request->mem_reason_decline;


        if (!$request->mem_reason_decline == "") {
            $new_data = [
                'mem_reason_decline' => $request->mem_reason_decline,
                'mem_assisted_by' => $request->incharge,
                'mem_status' => 'Declined',
            ];
            $success = DB::table('table_memberships')->where('mem_id_no', $request->mem_id_no)->update($new_data);
            if ($success) {
                $decline_request_details = $request->decline_request_details;
                $log = new table_memberships_log();
                $log->content = "Admin" . $incharge . " decline " . $decline_request_details . " membership request because of this the following reason " . $mem_reason_decline;
                if ($log->save()) {
                    return redirect()->back()->with('success', 'Decline successful');
                } else {
                    return redirect()->back()->with('failed', 'failed to save log due to unkown error');
                }
            } else {
                $decline_request_details = $request->decline_request_details;
                $log = new table_memberships_log();
                $log->content = "Admin" . $incharge . " failed to decline " . $decline_request_details . " membership request because of this the following reason " . $mem_reason_decline;
                $log->save();
                return redirect()->back()->with('failed', 'Decline failed due to unknown reason.');
            }
        } else {
            $decline_request_details = $request->decline_request_details;
            $log = new table_memberships_log();
            $log->content = "Admin" . $incharge . " attemp to decline " . $decline_request_details . " membership ";
            $log->save();
            return redirect()->back()->with('failed', 'Add some notes before declining the request!');
        }
    }
    public function Approve_Membership_Account(Request $request)
    {

        $start = new DateTime();
        $mem_start_at = $start->format('Y-m-d H:i:s');
        $expiration_date = strtotime('1 year', $start->getTimestamp());
        $end = new DateTime("@$expiration_date");
        $mem_end_at = $end->format('Y-m-d H:i:s');
        $end->format('Y-m-d H:i:s');
        $incharge = $request->incharge;
        $new_data = [
            'mem_reason_decline' => $request->mem_reason_decline,
            'mem_assisted_by' => $request->incharge,
            'mem_start_at' => $mem_start_at,
            'mem_end_at' => $mem_end_at,
            'mem_status' => 'Activated',
        ];
        $mail = [
            'mem_fname' => ucfirst($request->mem_fname),
            'mem_mname' => ucfirst($request->mem_mname),
            'mem_lname' => ucfirst($request->mem_lname),
            'mem_category' => ucfirst($request->mem_category),
            'mem_price' => ucfirst($request->mem_price),
            'mem_start_at' => $mem_start_at,
            'mem_end_at' => $mem_end_at
        ];
        $sent = Mail::to($request->mem_email)->send(new Membership_Activated_Mail($mail));
        $success = DB::table('table_memberships')->where('mem_id_no', $request->mem_id_no)->update($new_data);
        try {
            if (!$sent) {
                DB::rollBack();
                return redirect('admin/membership')->with('failed', 'Email not sent, Please try again!');
            } elseif ($success) {
        $data = DB::table('table_memberships')->where('mem_id', $request->mem_id)->first();
                $log = new table_memberships_log();
                session()->put('mem_profile',$data);
                $log->content = "Admin" . $incharge . " Approved membership request";
                $log->save();
                return redirect()->back()->with('success', 'Approved successful');
            } else {
                $decline_request_details = $request->decline_request_details;
                $log = new table_memberships_log();
                $log->content = "Admin" . $incharge . " failed to activate membership account due to unkown error";
                $log->save();
                return redirect()->back()->with('failed', 'Failed due to unknown reason.');
            }
        } catch (Exception) {
            return redirect()->back()->with('failed', 'Something went wrong');
        }
    }





    public function Submit_Membership(Request $request)
    {
        $rules = [
            'mem_id_no' => 'required',
            'mem_fname' => 'required',
            'mem_mname' => 'required',
            'mem_lname' => 'required',
            'mem_age' => 'required',
            'mem_gender' => 'required',
            'mem_birthday' => 'required',
            'mem_barangay' => 'required',
            'mem_municipal' => 'required',
            'mem_zipcode' => 'required',
            'mem_blood_type' => 'required',
            'mem_price' => ['required', 'numeric', 'regex:/^\d+(\.\d{1,2})?$/'],
            'mem_contact_no' => 'required|max:11|min:11',
            'mem_email' => 'required|unique:table_memberships,mem_email',
            'mem_payment_method' => 'required',
            'mem_proof_payment' => 'required|image|max:25000',
            'mem_category' => 'required',
        ];
        $message = [
            'mem_id_no.required' => 'Field is required.',
            'mem_fname.required' => 'Field is required.',
            'mem_mname.required' => 'Field is required.',
            'mem_lname.required' => 'Field is required.',
            'mem_age.required' => 'Field is required.',
            'mem_gender.required' => 'Field is required.',
            'mem_birthday.required' => 'Field is required.',
            'mem_barangay.required' => 'Field is required.',
            'mem_municipal.required' => 'Field is required.',
            'mem_zipcode.required' => 'Field is required.',
            'mem_blood_type.required' => 'Field is required.',
            'mem_contact_no.required' => 'Field is required.',
            'mem_email.required' => 'Field is required.',
            'mem_price.required' => 'Field is required.',
            'mem_price.numeric' => 'Field accepting numbers only.',
            'mem_email.unique' => 'Email is already taken.',
            'mem_payment_method.required' => 'Field is required.',
            'mem_proof_payment.required' => 'Field is required.',
            'mem_proof_payment.image' => 'Field required image only.',
            'mem_category.required' => 'Field is required.',
        ];
        $validator = Validator::make($request->all(), $rules, $message);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $membership = new table_memberships();


        $membership->mem_id_no = $request->mem_id_no;
        $membership->mem_fname = $request->mem_fname;
        $membership->mem_mname = $request->mem_mname;
        $membership->mem_lname = $request->mem_lname;
        $membership->mem_age = $request->mem_age;
        $membership->mem_gender = $request->mem_gender;
        $membership->mem_birthday = $request->mem_birthday;
        $membership->mem_zipcode = $request->mem_zipcode;
        $membership->mem_barangay = $request->mem_barangay;
        $membership->mem_municipal = $request->mem_municipal;
        $membership->mem_blood_type = $request->mem_blood_type;
        $membership->mem_contact_no = $request->mem_contact_no;
        $membership->mem_email = $request->mem_email;
        $membership->mem_status = $request->mem_status;
        $membership->mem_price = $request->mem_price;
        $membership->mem_payment_method = $request->mem_payment_method;
        $path = $request->file('mem_proof_payment')->store('public/payment');
        $membership->mem_proof_payment = Storage::url($path);
        $membership->mem_category = $request->mem_category;
        $membership->mem_assisted_by = $request->mem_assisted_by;
        $membership->mem_start_at = $request->mem_start_at;
        $membership->mem_end_at = $request->mem_end_at;



        $mail = [
            'mem_fname' => ucfirst($request->mem_fname),
            'mem_mname' => ucfirst($request->mem_mname),
            'mem_lname' => ucfirst($request->mem_lname),
            'mem_category' => ucfirst($request->mem_category),
            'mem_price' => ucfirst($request->mem_price),
            'mem_start_at' => $request->mem_start_at,
            'mem_end_at' => $request->mem_end_at
        ];
        $sent = Mail::to($request->mem_email)->send(new Membership_Activated_Mail($mail));
        if ($sent) {
            $success = $membership->save();
            if ($success) {
                $log = new table_memberships_log();
                $log->content = ucfirst($request->mem_assisted_by) . " added " . $request->mem_category . "insurance member, Price:" . $request->mem_price;
                $log->save();
                return redirect()->back()->with('success', 'Insurance successfully added.');
            } else {
                $log = new table_memberships_log();
                $log->content = ucfirst($request->mem_assisted_by) . " failed to add " . $request->mem_category . "insurance member, Price:" . $request->mem_price . " due to unknow error.";
                $log->save();
                return redirect()->back()->with('failed', 'Something went wrong.');
            }
        } else {
            return redirect()->back()->with('failed', 'Make sure that your connected to internet.');
        }
    }
}
