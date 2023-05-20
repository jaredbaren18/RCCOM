<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\table_appointments;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class Admin_Appointment_Controller extends Controller
{
    //
    public function Overview()
    {
        $data['All'] = table_appointments::all();
        return view('admin.appointment', $data);
    }
    public function Appointment_Setter()
    {
        $data['Ongoing'] = DB::table('table_appointments')->where('app_status', 'Ongoing')->limit(1)->get();
        $data['Next'] = DB::table('table_appointments')->where('app_status', 'Approved')->limit(1)->get();
        $data['Waiting'] = DB::table('table_appointments')->where('app_status', 'Approved')->skip(1)->take(10)->get();
        $data['Approved'] = DB::table('table_appointments')->where('app_status', 'Pending')->get();
        $data['Meetings'] = DB::table('table_appointments')->whereNotIn('app_status', ['Pending', 'Approved', 'Ongoing'])->get();
        $data['Slots'] = DB::table('table_appointments')->select('app_date')->get();
        return view('admin.appointment.forms.set_appointment', $data);
    }
    public function Approved_Appointment($app_id)
    {
        $find = DB::table('table_appointments')->where('app_id', $app_id)->first();
        if ($find) {
            $data = [
                'app_status' => 'Approved',
                'app_assisted_by' => session('Admin')['emp_role'] . " " . session('Admin')['emp_fname'] . " " . session('Admin')['emp_mname'] . " " . session('Admin')['emp_lname'],
                'emp_id_no' => session('Admin')['emp_id_no']
            ];
            $updated = DB::table('table_appointments')->where('app_id', $app_id)->update($data);
            if ($updated) {
                return redirect('admin/appointment')->with('success', 'Approved Succesfull');
            } else {
                return redirect()->back()->with('failed', 'Failed to approved due to unkown error.');
            }
        } else {

            return redirect()->back()->with('failed', 'Id not found');
        }
    }
    public function Appointment_Details($app_id)
    {
        $data['Profile'] = DB::table('table_appointments')->where('app_id', $app_id)->first();
        return view('admin.appointment.pages.profile', $data);
    }
    public function Finish_Appointment($app_id)
    {
        $done = [
            'app_status' => 'Done',
            'app_assisted_by' => session('Admin')['emp_fname'] . " " . session('Admin')['emp_mname'] . " " . session('Admin')['emp_lname'],
            'emp_id_no' => session('Admin')['emp_id_no'],
        ];
        $updated = DB::table('table_appointments')->where('app_id', $app_id)->update($done);
        if ($updated) {
            return redirect()->back()->with('success', 'Meeting Accomplish');
        }
    }
    public function Delete_Appointment($app_id)
    {
        $deleted = DB::table('table_appointments')->where('app_id', $app_id)->delete();
        if ($deleted) {
            return redirect('admin/appointment')->with('success', 'Appointment succesfully deleted.');
        } else {
            return redirect()->back()->with('failed', 'Failed to delete!');
        }
    }
    public function Decline_Appointment(Request $request)
    {
        $data = [
            'app_reason_decline' => $request->app_reason_decline,
            'app_status' => "Declined",
            'app_assisted_by' => session('Admin')['emp_fname'] . " " . session('Admin')['emp_mname'] . " " . session('Admin')['emp_lname'],
            'emp_id_no' => session('Admin')['emp_id_no'],
        ];
        $updated = DB::table('table_appointments')->where('app_id', $request->app_id)->update($data);
        if ($updated) {
            return redirect()->back()->with('success', 'Declined successful.');
        } else {
            return redirect()->back()->with('failed', 'Failed to update due to unknown error.');
        }
    }
    public function Update_Appointment(Request $request)
    {

        $rules = [
            'app_fname' => 'required',
            'app_mname' => 'required',
            'app_lname' => 'required',
            'app_age' => 'required',
            'app_gender' => 'required',
            'app_municipal' => 'required',
            'app_barangay' => 'required',
            'app_purpose' => 'required',
            'app_date' => 'required',
            'app_time' => 'required',
            'app_status' => 'required',
        ];
        $message = [
            'app_fname.required' => 'Required',
            'app_mname.required' => 'Required',
            'app_lname.required' => 'Required',
            'app_age.required' => 'Required',
            'app_gender.required' => 'Required',
            'app_municipal.required' => 'Required',
            'app_barangay.required' => 'Required',
            'app_purpose.required' => 'Required',
            'app_date.required' => 'Required',
            'app_time.required' => 'Required',
            'app_status.required' => 'Required',
        ];
        $validator = Validator::make($request->all(), $rules, $message);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $check = DB::table('table_appointments')->where('app_date', $request->app_date)->where('app_time', $request->app_time)->where('app_status', 'Approved')->first();
        if (!$check) {
            $ongo = DB::table('table_appointments')->where('app_status', 'Ongoing')->first();
            if ($ongo) {
                $done = [
                    'app_status' => 'Done',
                    'app_assisted_by' => session('Admin')['emp_fname'] . " " . session('Admin')['emp_mname'] . " " . session('Admin')['emp_lname'],
                    'emp_id_no' => session('Admin')['emp_id_no'],
                ];
                $to = DB::table('table_appointments')->where('app_id', $ongo->app_id)->update($done);
                if ($to) {
                    $data = [
                        'app_fname' => $request->app_fname,
                        'app_mname' => $request->app_mname,
                        'app_lname' => $request->app_lname,
                        'app_age' => $request->app_age,
                        'app_gender' => $request->app_gender,
                        'app_municipal' => $request->app_municipal,
                        'app_barangay' => $request->app_barangay,
                        'app_purpose' => $request->app_purpose,
                        'app_other_reason' => $request->app_other_reason,
                        'app_date' => $request->app_date,
                        'app_time' => $request->app_time,
                        'app_status' => $request->app_status,
                        'app_assisted_by' => $request->app_assisted_by,
                    ];
                    $updated_data = DB::table('table_appointments')->where('app_id', $request->app_id)->update($data);
                    if ($updated_data) {
                        return redirect()->back()->with('success', 'Update successful.');
                    } else {
                        return redirect()->back()->with('failed', '1');
                    }
                } else {
                    return redirect()->back()->with('failed', '2');
                }
            } else {
                $data = [
                    'app_fname' => $request->app_fname,
                    'app_mname' => $request->app_mname,
                    'app_lname' => $request->app_lname,
                    'app_age' => $request->app_age,
                    'app_gender' => $request->app_gender,
                    'app_municipal' => $request->app_municipal,
                    'app_barangay' => $request->app_barangay,
                    'app_purpose' => $request->app_purpose,
                    'app_other_reason' => $request->app_other_reason,
                    'app_date' => $request->app_date,
                    'app_time' => $request->app_time,
                    'app_status' => $request->app_status,
                    'app_assisted_by' => $request->app_assisted_by,
                ];
                $updated_data = DB::table('table_appointments')->where('app_id', $request->app_id)->update($data);
                if ($updated_data) {
                    return redirect()->back()->with('success', 'Update successful.');
                } else {
                    return redirect()->back()->with('failed', 'Nothing Change');
                }
              
            }
        } else {
            $data = [
                'app_fname' => $request->app_fname,
                'app_mname' => $request->app_mname,
                'app_lname' => $request->app_lname,
                'app_age' => $request->app_age,
                'app_gender' => $request->app_gender,
                'app_municipal' => $request->app_municipal,
                'app_barangay' => $request->app_barangay,
                'app_purpose' => $request->app_purpose,
                'app_other_reason' => $request->app_other_reason,
                'app_date' => $request->app_date,
                'app_time' => $request->app_time,
                'app_status' => $request->app_status,
                'app_assisted_by' => $request->app_assisted_by,
            ];
            $updated_data = DB::table('table_appointments')->where('app_id', $request->app_id)->update($data);
            if ($updated_data) {
                return redirect()->back()->with('success', 'Update successful.');
            } else {
                return redirect()->back()->with('failed', '4');
            }
        }
    }
    public function Proceed_Appointment($app_id)
    {
        $find = DB::table('table_appointments')->where('app_id', $app_id)->first();

        if ($find) {
            $ongo = DB::table('table_appointments')->where('app_status', 'Ongoing')->first();
            if ($ongo) {
                $done = [
                    'app_status' => 'Done',
                    'app_assisted_by' => session('Admin')['emp_fname'] . " " . session('Admin')['emp_mname'] . " " . session('Admin')['emp_lname'],
                    'emp_id_no' => session('Admin')['emp_id_no'],
                ];
                $to = DB::table('table_appointments')->where('app_id', $ongo->app_id)->update($done);
                if ($to) {
                    $proceed = [
                        'app_status' => 'Ongoing',
                        'app_assisted_by' => session('Admin')['emp_fname'] . " " . session('Admin')['emp_mname'] . " " . session('Admin')['emp_lname'],
                        'emp_id_no' => session('Admin')['emp_id_no'],
                    ];

                    $on = DB::table('table_appointments')->where('app_id', $app_id)->update($proceed);
                    if ($on) {
                        return redirect('admin/appointment')->with('success', 'Appointment is now ongoing.');
                    } else {
                        return redirect('admin/appointment')->with('failed', 'Fail to update appointment due to unkown error.');
                    }
                } else {
                    $proceed = [
                        'app_status' => 'Ongoing',
                        'app_assisted_by' => session('Admin')['emp_fname'] . " " . session('Admin')['emp_mname'] . " " . session('Admin')['emp_lname'],
                        'emp_id_no' => session('Admin')['emp_id_no'],
                    ];

                    $on = DB::table('table_appointments')->where('app_id', $app_id)->update($proceed);
                    if ($on) {
                        return redirect('admin/appointment')->with('success', 'Appointment is now ongoing.');
                    } else {
                        return redirect('admin/appointment')->with('failed', 'Fail to update appointment due to unkown error.');
                    }
                }
            } else {
                $proceed = [
                    'app_status' => 'Ongoing',
                    'app_assisted_by' => session('Admin')['emp_fname'] . " " . session('Admin')['emp_mname'] . " " . session('Admin')['emp_lname'],
                    'emp_id_no' => session('Admin')['emp_id_no'],
                ];

                $on = DB::table('table_appointments')->where('app_id', $app_id)->update($proceed);
                if ($on) {
                    return redirect('admin/appointment')->with('success', 'Appointment is now ongoing.');
                } else {
                    return redirect('admin/appointment')->with('failed', 'Fail to update appointment due to unkown error.');
                }
            }
        } else {
            return redirect('admin/appointment')->with('failed', 'ID not found');
        }
    }
    public function Create_Appointment(Request $request)
    {
        $rules = [
            'app_fname' => 'required',
            'app_mname' => 'required',
            'app_lname' => 'required',
            'app_age' => 'required',
            'app_gender' => 'required',
            'app_municipal' => 'required',
            'app_barangay' => 'required',
            'app_purpose' => 'required',
            'app_date' => 'required',
            'app_time' => 'required',
            'app_status' => 'required',
        ];
        $message = [
            'app_fname.required' => 'Required',
            'app_mname.required' => 'Required',
            'app_lname.required' => 'Required',
            'app_age.required' => 'Required',
            'app_gender.required' => 'Required',
            'app_municipal.required' => 'Required',
            'app_barangay.required' => 'Required',
            'app_purpose.required' => 'Required',
            'app_date.required' => 'Required',
            'app_time.required' => 'Required',
            'app_status.required' => 'Required',
        ];
        $validator = Validator::make($request->all(), $rules, $message);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        if ($request->app_status == "Ongoing") {
            $ongo = DB::table('table_appointments')->where('app_status', 'Ongoing')->first();
            if ($ongo) {
                $done = [
                    'app_status' => 'Done',
                    'app_assisted_by' => session('Admin')['emp_fname'] . " " . session('Admin')['emp_mname'] . " " . session('Admin')['emp_lname'],
                    'emp_id_no' => session('Admin')['emp_id_no'],
                ];
                $to = DB::table('table_appointments')->where('app_id', $ongo->app_id)->update($done);
                if ($to) {
                    $check = DB::table('table_appointments')->where('app_date', $request->app_date)->where('app_time', $request->app_time)->where('app_status', 'Approved')->first();
                    if (!$check) {
                        $app = new table_appointments();
                        $app->app_fname = $request->app_fname;
                        $app->app_mname = $request->app_mname;
                        $app->app_lname = $request->app_lname;
                        $app->app_age = $request->app_age;
                        $app->app_gender = $request->app_gender;
                        $app->app_municipal = $request->app_municipal;
                        $app->app_barangay = $request->app_barangay;
                        $app->app_purpose = $request->app_purpose;
                        $app->app_date = $request->app_date;
                        $app->app_time = $request->app_time;
                        $app->app_status = $request->app_status;
                        $app->app_assisted_by = $request->app_assisted_by;
                        $app->emp_id_no = $request->emp_id_no;
                        $success = $app->save();
                        if ($success) {
                            return redirect()->back()->with('success', 'Successfully Created');
                        } else {
                            return redirect()->back()->with('failed', 'Failed to set appointment due to unkwon error.');
                        }
                    } else {
                        return redirect()->back()->with('failed', 'Schedule is already taken.')->withInput();
                    }
                }
            } else {
                $check = DB::table('table_appointments')->where('app_date', $request->app_date)->where('app_time', $request->app_time)->where('app_status', 'Approved')->first();
                if (!$check) {
                    $app = new table_appointments();
                    $app->app_fname = $request->app_fname;
                    $app->app_mname = $request->app_mname;
                    $app->app_lname = $request->app_lname;
                    $app->app_age = $request->app_age;
                    $app->app_gender = $request->app_gender;
                    $app->app_municipal = $request->app_municipal;
                    $app->app_barangay = $request->app_barangay;
                    $app->app_purpose = $request->app_purpose;
                    $app->app_date = $request->app_date;
                    $app->app_time = $request->app_time;
                    $app->app_status = $request->app_status;
                    $app->app_assisted_by = $request->app_assisted_by;
                    $app->emp_id_no = $request->emp_id_no;
                    $success = $app->save();
                    if ($success) {
                        return redirect()->back()->with('success', 'Successfully Created');
                    } else {
                        return redirect()->back()->with('failed', 'Failed to set appointment due to unkwon error.');
                    }
                } else {
                    return redirect()->back()->with('failed', 'Schedule is already taken.')->withInput();
                }
            }
        } else {
            $check = DB::table('table_appointments')->where('app_date', $request->app_date)->where('app_time', $request->app_time)->where('app_status', 'Approved')->first();
            if (!$check) {
                $app = new table_appointments();
                $app->app_fname = $request->app_fname;
                $app->app_mname = $request->app_mname;
                $app->app_lname = $request->app_lname;
                $app->app_age = $request->app_age;
                $app->app_gender = $request->app_gender;
                $app->app_municipal = $request->app_municipal;
                $app->app_barangay = $request->app_barangay;
                $app->app_purpose = $request->app_purpose;
                $app->app_date = $request->app_date;
                $app->app_time = $request->app_time;
                $app->app_status = $request->app_status;
                $app->app_assisted_by = $request->app_assisted_by;
                $app->emp_id_no = $request->emp_id_no;
                $success = $app->save();
                if ($success) {
                    return redirect()->back()->with('success', 'Successfully Created');
                } else {
                    return redirect()->back()->with('failed', 'Failed to set appointment due to unkwon error.');
                }
            } else {
                return redirect()->back()->with('failed', 'Schedule is already taken.')->withInput();
            }
        }
    }
}
