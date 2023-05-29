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
        $data['All'] = table_memberships::all();
        $data['Activated'] = DB::table('table_memberships')->where('mem_status', 'Activated')->get();
        $data['Expired'] = DB::table('table_memberships')->where('mem_status', 'Expired')->get();
        $data['Pending'] = DB::table('table_memberships')->where('mem_status', 'Pending')->get();
        $data['Declined'] = DB::table('table_memberships')->where('mem_status', 'Declined')->get();


        return view('admin.membership', $data);
    }
    public function Edit_Membership_Account($mem_id)
    {
        $data = DB::table('table_memberships')->where('mem_id', $mem_id)->first();
        session()->put('mem_profile', $data);
        return response()->json($data);
    }
    public function Sales()
    {
        $data = DB::table('table_memberships')->sum('mem_price');
        return response()->json($data);

    }
    public function Active_Accounts()
    {
        $data = DB::table('table_memberships')->where('mem_status','Activated')->count();
        return response()->json($data);

    }
    public function Pending_Accounts()
    {
        $data = DB::table('table_memberships')->where('mem_status','Pending')->count();
        return response()->json($data);

    }
    public function Expired_Accounts()
    {
        $data = DB::table('table_memberships')->where('mem_status','Expired')->count();
        return response()->json($data);

    }
    public function Declined_Accounts()
    {
        $data = DB::table('table_memberships')->where('mem_status','Declined')->count();
        return response()->json($data);

    }

    public function Mem_Profile($mem_id)
    {
        $data = DB::table('table_memberships')->where('mem_id', $mem_id)->first();
        return response()->json($data);
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
            return redirect()->back()->withErrors($validator);
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
                $data = DB::table('table_memberships')->where('mem_id', $request->mem_id)->first();
                session()->put('mem_profile', $data);
                $log->save();
                return redirect()->back()->with('success', 'Update successful');
            } else {
                $log = new table_memberships_log();
                $log->content = session('Admin')['emp_role'] . " " . ucfirst($request->mem_assisted_by) . " failed to updated " . $request->mem_category . "insurance member, Price:" . $request->mem_price . " due to unknow error.";
                $log->save();
                return redirect()->back()->with('failed', 'No changes');
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
            $success = DB::table('table_memberships')->where('mem_id', $request->mem_id)->update($new_data);
            if ($success) {
                $log = new table_memberships_log();
                $log->content = ucfirst($request->mem_assisted_by) . " updated membership account of " . $request->mem_fname . " " . $request->mem_lname . " " . $request->mem_category . "insurance member" . " Price:" . $request->mem_price;
                $data = DB::table('table_memberships')->where('mem_id', $request->mem_id)->first();
                session()->put('mem_profile', $data);
                $log->save();
                return redirect()->back()->with('success', 'Update successful');
            } else {
                $log = new table_memberships_log();
                $log->content = ucfirst($request->mem_assisted_by) . " failed to updated " . $request->mem_category . "insurance member, Price:" . $request->mem_price . " due to unknow error.";
                $log->save();
                return redirect()->back()->with('failed', 'No changes');
            }
        }
    }

    // --------------------------------------------------------------------------------------------------------------

    public function Decline_Membership_Account(Request $request)
    {
        $rules=[
            'mem_reason_decline'=>'required'
        ];
        $message=[
            'mem_reason_decline.required'=>'Dont let the box empty. State your reason why?'
        ];
        $validator=Validator::make($request->all(),$rules,$message);
        if($validator->fails())
        {
            return response()->json(['message'=>'State your reson why you want to decline this request?']);
        }
        $data=[
            'mem_reason_decline'=>$request->input('mem_reason_decline'),
            'mem_status'=>'Declined'
        ];
        $updated=DB::table('table_memberships')->where('mem_id',$request->input('mem_id'))->update($data);
        if($updated)
        {    
            return response()->json(['message'=>'Decline successful.','status'=> 200],200);
        }
        else
        {
            return response()->json(['message'=>'Decline fail!'],422);

        }
    }
    public function Approve_Membership_Account($mem_id)
    {

       if(session('Admin'))
       {
        $req = DB::table('table_memberships')->where('mem_id',$mem_id)->first();

        $start = new DateTime();
        $mem_start_at = $start->format('Y-m-d H:i:s');
        $expiration_date = strtotime('1 year', $start->getTimestamp());
        $end = new DateTime("@$expiration_date");
        $mem_end_at = $end->format('Y-m-d H:i:s');
        $end->format('Y-m-d H:i:s');
        $incharge = session('Admin')['emp_role'] . " " . session('Admin')['emp_fname'] . " " . session('Admin')['emp_lname'];
        $new_data = [
            'mem_assisted_by' => session('Admin')['emp_role'] . " " . session('Admin')['emp_fname'] . " " . session('Admin')['emp_lname'],
            'mem_start_at' => $mem_start_at,
            'mem_end_at' => $mem_end_at,
            'mem_status' => 'Activated',
        ];
        $mail = [
            'mem_fname' => ucfirst($req->mem_fname),
            'mem_mname' => ucfirst($req->mem_mname),
            'mem_lname' => ucfirst($req->mem_lname),
            'mem_category' => ucfirst($req->mem_category),
            'mem_price' => ucfirst($req->mem_price),
            'mem_start_at' => $mem_start_at,
            'mem_end_at' => $mem_end_at
        ];
        $sent = Mail::to($req->mem_email)->send(new Membership_Activated_Mail($mail));
        $success = DB::table('table_memberships')->where('mem_id_no', $req->mem_id_no)->update($new_data);

        if (!$sent) {
            DB::rollBack();
            return response()->json(['message' => 'Email send failed!']);
        } elseif ($success && $sent) {
            $data = DB::table('table_memberships')->where('mem_id', $req->mem_id)->first();
            $log = new table_memberships_log();
            session()->put('mem_profile', $data);
            $log->content = "Admin" . $incharge . " Approved membership request";
            $log->save();
            return response()->json(['message' => 'Approved successful']);
        } else {
            $log = new table_memberships_log();
            $log->content = "Admin" . $incharge . " failed to activate membership account due to unkown error";
            $log->save();
            return response()->json(['message' => 'Something went wrong please try again!']);
        }
       }
       else
       {
        $req = DB::table('table_memberships')->where('mem_id',$mem_id)->first();
        $start = new DateTime();
        $mem_start_at = $start->format('Y-m-d H:i:s');
        $expiration_date = strtotime('1 year', $start->getTimestamp());
        $end = new DateTime("@$expiration_date");
        $mem_end_at = $end->format('Y-m-d H:i:s');
        $end->format('Y-m-d H:i:s');
        $incharge = session('Staff')['emp_role'] . " " . session('Staff')['emp_fname'] . " " . session('Staff')['emp_lname'];
        $new_data = [
            'mem_assisted_by' => session('Staff')['emp_role'] . " " . session('Staff')['emp_fname'] . " " . session('Staff')['emp_lname'],
            'mem_start_at' => $mem_start_at,
            'mem_end_at' => $mem_end_at,
            'mem_status' => 'Activated',
        ];
        $mail = [
            'mem_fname' => ucfirst($req->mem_fname),
            'mem_mname' => ucfirst($req->mem_mname),
            'mem_lname' => ucfirst($req->mem_lname),
            'mem_category' => ucfirst($req->mem_category),
            'mem_price' => ucfirst($req->mem_price),
            'mem_start_at' => $mem_start_at,
            'mem_end_at' => $mem_end_at
        ];
        $sent = Mail::to($req->mem_email)->send(new Membership_Activated_Mail($mail));
        $success = DB::table('table_memberships')->where('mem_id_no', $req->mem_id_no)->update($new_data);

        if (!$sent) {
            DB::rollBack();
            return response()->json(['message' => 'Email send failed!']);
        } elseif ($success && $sent) {
            $data = DB::table('table_memberships')->where('mem_id', $req->mem_id)->first();
            $log = new table_memberships_log();
            $log->content = "Admin" . $incharge . " Approved membership request";
            $log->save();
            return response()->json(['message' => 'Approved successful']);
        } else {
            $log = new table_memberships_log();
            $log->content = "Admin" . $incharge . " failed to activate membership account due to unkown error";
            $log->save();
            return response()->json(['message' => 'Something went wrong please try again!']);
        }
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
