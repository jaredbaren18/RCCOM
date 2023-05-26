<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\table_volunteers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class Admin_Volunteer_Controller extends Controller
{
    //
    public function Volunteer()
    {
        session()->forget('Volunteer');
        $data['Volunteers_Count']=DB::table('table_volunteers')->where('vol_status','Activated')->count();
        $data['Pendings_Count']=DB::table('table_volunteers')->where('vol_status','Pending')->count();
        $data['Pending']=DB::table('table_volunteers')->where('vol_status','Pending')->get();
        $data['Activated']=DB::table('table_volunteers')->where('vol_status','Activated')->get();
        return view('admin.volunteer',$data);
    }

    public function Vol_Delete($vol_id)
    {
        $deleted=DB::table('table_volunteers')->where('vol_id',$vol_id)->delete();
        if($deleted)
        {
            return redirect('admin/volunteer')->with('success','Deleted successfully.');
        }
        else
        {
            return redirect()->back()->with('failed','Failed to delete.');
        }
    }

    public function Vol_Edit($vol_id)
    {
        $find=DB::table('table_volunteers')->where('vol_id',$vol_id)->first();
      if($find)
        {
            $data=[
                'vol_id'=>$find->vol_id,
                'vol_id_pic'=>$find->vol_id_pic,
                'vol_fname'=>$find->vol_fname,
                'vol_mname'=>$find->vol_mname,
                'vol_lname'=>$find->vol_lname,
                'vol_age'=>$find->vol_age,
                'vol_gender'=>$find->vol_gender,
                'vol_birthday'=>$find->vol_birthday,
                'vol_nationality'=>$find->vol_nationality,
                'vol_civil_status'=>$find->vol_civil_status,
                'vol_blood_type'=>$find->vol_blood_type,
                'vol_region'=>$find->vol_region,
                'vol_province'=>$find->vol_province,
                'vol_municipal'=>$find->vol_municipal,
                'vol_barangay'=>$find->vol_barangay,
                'vol_house_no'=>$find->vol_house_no,
                'vol_postal_code'=>$find->vol_postal_code,
                'vol_landline'=>$find->vol_landline,
                'vol_phone_no'=>$find->vol_phone_no,
                'vol_email'=>$find->vol_email,
                'vol_guardian'=>$find->vol_guardian,
                'vol_relationship'=>$find->vol_relationship,
                'vol_guardian'=>$find->vol_guardian,
                'vol_guardian_phone_no'=>$find->vol_guardian_phone_no,
                'vol_education_att'=>$find->vol_education_att,
                'vol_guardian'=>$find->vol_guardian,
                'vol_education_att'=>$find->vol_education_att,
                'vol_studying'=>$find->vol_studying,
                'vol_course'=>$find->vol_course,
                'vol_school'=>$find->vol_school,
                'vol_year_level'=>$find->vol_year_level,
                'vol_been_volunteer'=>$find->vol_been_volunteer,
                'vol_been_completed_redcross_seminar'=>$find->vol_been_completed_redcross_seminar,
                'vol_services_like_to_involve'=>$find->vol_services_like_to_involve,
                'vol_willing_to_donate_blood'=>$find->vol_willing_to_donate_blood,
                'vol_day_your_free'=>$find->vol_day_your_free,
                'vol_time_your_free'=>$find->vol_time_your_free,
                'vol_long_intend_in_prc'=>$find->vol_long_intend_in_prc,
                'vol_where_get_to_know_volunteering'=>$find->vol_where_get_to_know_volunteering,
                'vol_reason_why_become_volunteer'=>$find->vol_reason_why_become_volunteer,
                'vol_status'=>$find->vol_status,
                
            ];
            session()->put('Volunteer',$data);
        return view('admin.volunteers.forms.volunteer_form');

        }
            
        return view('admin.volunteers.forms.volunteer_form');
    }
    public function Vol_Update(Request $request)
    {
        if(!$request->vol_id_pic=="")
        {
        $rules=[

            'vol_id_pic'=>'required|image|max:25000',
            'vol_fname'=>'required',
            'vol_mname'=>'required',
            'vol_lname'=>'required',
            'vol_age'=>'required',
            'vol_gender'=>'required',
            'vol_birthday'=>'required',
            'vol_nationality'=>'required',
            'vol_civil_status'=>'required',
            'vol_blood_type'=>'required',
            'vol_region'=>'required',
            'vol_province'=>'required',
            'vol_municipal'=>'required',
            'vol_barangay'=>'required',
            'vol_house_no'=>'required',
            'vol_postal_code'=>'required',
            'vol_phone_no'=>'required',
            'vol_email'=>'required',
            'vol_guardian'=>'required',
            'vol_relationship'=>'required',
            'vol_guardian_phone_no'=>'required',
            'vol_education_att'=>'required',
            'vol_studying'=>'required',
            'vol_school'=>'required',
            'vol_course'=>'required',
            'vol_year_level'=>'required',
            'vol_been_volunteer'=>'required',
            'vol_been_completed_redcross_seminar'=>'required',
            'vol_services_like_to_involve'=>'required',
            'vol_willing_to_donate_blood'=>'required',
            'vol_day_your_free'=>'required',
            'vol_time_your_free'=>'required',
            'vol_long_intend_in_prc'=>'required',
            'vol_where_get_to_know_volunteering'=>'required',
        ];
        $message=[
            'vol_fname.required'=>'Required',
            'vol_fname.required'=>'Required',
            'vol_mname.required'=>'Required',
            'vol_lname.required'=>'Required',
            'vol_age.required'=>'Required',
            'vol_gender.required'=>'Required',
            'vol_birthday.required'=>'Required',
            'vol_nationality.required'=>'Required',
            'vol_civil_status.required'=>'Required',
            'vol_blood_type.required'=>'Required',
            'vol_region.required'=>'Required',
            'vol_province.required'=>'Required',
            'vol_municipal.required'=>'Required',
            'vol_barangay.required'=>'Required',
            'vol_house_no.required'=>'Required',
            'vol_postal_code.required'=>'Required',
            'vol_phone_no.required'=>'Required',
            'vol_email.required'=>'Required',
            'vol_guardian.required'=>'Required',
            'vol_relationship.required'=>'Required',
            'vol_guardian_phone_no.required'=>'Required',
            'vol_education_att.required'=>'Required',
            'vol_studying.required'=>'Required',
            'vol_course.required'=>'Required',
            'vol_school.required'=>'Required',
            'vol_year_level.required'=>'Required',
            'vol_been_volunteer.required'=>'Required',
            'vol_been_completed_redcross_seminar.required'=>'Required',
            'vol_services_like_to_involve.required'=>'Required',
            'vol_willing_to_donate_blood.required'=>'Required',
            'vol_day_your_free.required'=>'Required',
            'vol_time_your_free.required'=>'Required',
            'vol_long_intend_in_prc.required'=>'Required',
            'vol_where_get_to_know_volunteering.required'=>'Required',

        ];
        $validator= Validator::make($request->all(),$rules,$message);
        if($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput();
        }

     
            $path=$request->file('vol_id_pic')->store('public/volunteer_id');
            $data=[
                'vol_id_pic'=>Storage::url($path),
                'vol_fname'=>$request->vol_fname,
                'vol_mname'=>$request->vol_mname,
                'vol_lname'=>$request->vol_lname,
                'vol_age'=>$request->vol_age,
                'vol_gender'=>$request->vol_gender,
                'vol_birthday'=>$request->vol_birthday,
                'vol_nationality'=>$request->vol_nationality,
                'vol_civil_status'=>$request->vol_civil_status,
                'vol_blood_type'=>$request->vol_blood_type,
                'vol_region'=>$request->vol_region,
                'vol_province'=>$request->vol_province,
                'vol_municipal'=>$request->vol_municipal,
                'vol_barangay'=>$request->vol_barangay,
                'vol_house_no'=>$request->vol_house_no,
                'vol_postal_code'=>$request->vol_postal_code,
                'vol_landline'=>$request->vol_landline,
                'vol_phone_no'=>$request->vol_phone_no,
                'vol_email'=>$request->vol_email,
                'vol_guardian'=>$request->vol_guardian,
                'vol_relationship'=>$request->vol_relationship,
                'vol_guardian'=>$request->vol_guardian,
                'vol_guardian_phone_no'=>$request->vol_guardian_phone_no,
                'vol_education_att'=>$request->vol_education_att,
                'vol_guardian'=>$request->vol_guardian,
                'vol_education_att'=>$request->vol_education_att,
                'vol_studying'=>$request->vol_studying,
                'vol_course'=>$request->vol_course,
                'vol_school'=>$request->vol_school,
                'vol_year_level'=>$request->vol_year_level,
                'vol_been_volunteer'=>$request->vol_been_volunteer,
                'vol_been_completed_redcross_seminar'=>$request->vol_been_completed_redcross_seminar,
                'vol_services_like_to_involve'=>$request->vol_services_like_to_involve,
                'vol_willing_to_donate_blood'=>$request->vol_willing_to_donate_blood,
                'vol_day_your_free'=>$request->vol_day_your_free,
                'vol_time_your_free'=>$request->vol_time_your_free,
                'vol_long_intend_in_prc'=>$request->vol_long_intend_in_prc,
                'vol_where_get_to_know_volunteering'=>$request->vol_where_get_to_know_volunteering,
                'vol_reason_why_become_volunteer'=>$request->vol_reason_why_become_volunteer,
                
            ];
            $find=DB::table('table_volunteers')->where('vol_id',$request->vol_id)->first();
            if($find){
                $updated=DB::table('table_volunteers')->where('vol_id',$request->vol_id)->update($data);
                if($updated)
                {
                    return redirect()->back()->with('success','Updated successfully.');
                }
                else
                {
                    return redirect()->back()->with('failed','Updated failed.');
                }
            }
        }
        else
        {
            $data=[
                'vol_fname'=>$request->vol_fname,
                'vol_mname'=>$request->vol_mname,
                'vol_lname'=>$request->vol_lname,
                'vol_age'=>$request->vol_age,
                'vol_gender'=>$request->vol_gender,
                'vol_birthday'=>$request->vol_birthday,
                'vol_nationality'=>$request->vol_nationality,
                'vol_civil_status'=>$request->vol_civil_status,
                'vol_blood_type'=>$request->vol_blood_type,
                'vol_region'=>$request->vol_region,
                'vol_province'=>$request->vol_province,
                'vol_municipal'=>$request->vol_municipal,
                'vol_barangay'=>$request->vol_barangay,
                'vol_house_no'=>$request->vol_house_no,
                'vol_postal_code'=>$request->vol_postal_code,
                'vol_landline'=>$request->vol_landline,
                'vol_phone_no'=>$request->vol_phone_no,
                'vol_email'=>$request->vol_email,
                'vol_guardian'=>$request->vol_guardian,
                'vol_relationship'=>$request->vol_relationship,
                'vol_guardian'=>$request->vol_guardian,
                'vol_guardian_phone_no'=>$request->vol_guardian_phone_no,
                'vol_education_att'=>$request->vol_education_att,
                'vol_guardian'=>$request->vol_guardian,
                'vol_education_att'=>$request->vol_education_att,
                'vol_studying'=>$request->vol_studying,
                'vol_course'=>$request->vol_course,
                'vol_school'=>$request->vol_school,
                'vol_year_level'=>$request->vol_year_level,
                'vol_been_volunteer'=>$request->vol_been_volunteer,
                'vol_been_completed_redcross_seminar'=>$request->vol_been_completed_redcross_seminar,
                'vol_services_like_to_involve'=>$request->vol_services_like_to_involve,
                'vol_willing_to_donate_blood'=>$request->vol_willing_to_donate_blood,
                'vol_day_your_free'=>$request->vol_day_your_free,
                'vol_time_your_free'=>$request->vol_time_your_free,
                'vol_long_intend_in_prc'=>$request->vol_long_intend_in_prc,
                'vol_where_get_to_know_volunteering'=>$request->vol_where_get_to_know_volunteering,
                'vol_reason_why_become_volunteer'=>$request->vol_reason_why_become_volunteer,
                
            ];
            $find=DB::table('table_volunteers')->where('vol_id',$request->vol_id)->first();
            if($find){
                $updated=DB::table('table_volunteers')->where('vol_id',$request->vol_id)->update($data);
                if($updated)
                {
                    return redirect()->back()->with('success','Updated successfully.');
                }
                else
                {
                    return redirect()->back()->with('failed','Updated failed.');
                }
            }
        }
    }
    public function Vol_Profile($vol_id)
    {
        session()->forget('Volunteer');
        $data['Profile']=DB::table('table_volunteers')->where('vol_id',$vol_id)->first();
        return view('admin.volunteers.pages.profile',$data);
    }

    public function Create_Volunteer(Request $request)
    {
        $rules=[
            'vol_id_pic'=>'image',
            'vol_fname'=>'required',
            'vol_mname'=>'required',
            'vol_lname'=>'required',
            'vol_age'=>'required',
            'vol_gender'=>'required',
            'vol_birthday'=>'required',
            'vol_nationality'=>'required',
            'vol_civil_status'=>'required',
            'vol_blood_type'=>'required',
            'vol_region'=>'required',
            'vol_province'=>'required',
            'vol_municipal'=>'required',
            'vol_barangay'=>'required',
            'vol_house_no'=>'required',
            'vol_postal_code'=>'required',
            'vol_phone_no'=>'required',
            'vol_email'=>'required',
            'vol_guardian'=>'required',
            'vol_relationship'=>'required',
            'vol_guardian_phone_no'=>'required',
            'vol_education_att'=>'required',
            'vol_studying'=>'required',
            'vol_school'=>'required',
            'vol_course'=>'required',
            'vol_year_level'=>'required',
            'vol_been_volunteer'=>'required',
            'vol_been_completed_redcross_seminar'=>'required',
            'vol_services_like_to_involve'=>'required',
            'vol_willing_to_donate_blood'=>'required',
            'vol_day_your_free'=>'required',
            'vol_time_your_free'=>'required',
            'vol_long_intend_in_prc'=>'required',
            'vol_where_get_to_know_volunteering'=>'required',
            'vol_reason_why_become_volunteer'=>'required',
        ];
        $message=[
            'vol_id_pic.image'=>'Image file is required',
            'vol_fname.required'=>'Required',
            'vol_mname.required'=>'Required',
            'vol_lname.required'=>'Required',
            'vol_age.required'=>'Required',
            'vol_gender.required'=>'Required',
            'vol_birthday.required'=>'Required',
            'vol_nationality.required'=>'Required',
            'vol_civil_status.required'=>'Required',
            'vol_blood_type.required'=>'Required',
            'vol_region.required'=>'Required',
            'vol_province.required'=>'Required',
            'vol_municipal.required'=>'Required',
            'vol_barangay.required'=>'Required',
            'vol_house_no.required'=>'Required',
            'vol_postal_code.required'=>'Required',
            'vol_phone_no.required'=>'Required',
            'vol_email.required'=>'Required',
            'vol_guardian.required'=>'Required',
            'vol_relationship.required'=>'Required',
            'vol_guardian_phone_no.required'=>'Required',
            'vol_education_att.required'=>'Required',
            'vol_studying.required'=>'Required',
            'vol_course.required'=>'Required',
            'vol_school.required'=>'Required',
            'vol_year_level.required'=>'Required',
            'vol_been_volunteer.required'=>'Required',
            'vol_been_completed_redcross_seminar.required'=>'Required',
            'vol_services_like_to_involve.required'=>'Required',
            'vol_willing_to_donate_blood.required'=>'Required',
            'vol_day_your_free.required'=>'Required',
            'vol_time_your_free.required'=>'Required',
            'vol_long_intend_in_prc.required'=>'Required',
            'vol_where_get_to_know_volunteering.required'=>'Required',
            'vol_reason_why_become_volunteer.required'=>'Required',
        ];
        $validator= Validator::make($request->all(),$rules,$message);
        if($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        



        $path=$request->file('vol_id_pic')->store('public/volunteer_id');
        $vol= new table_volunteers();
        $vol->vol_id_pic=Storage::url($path);
        $vol->vol_fname=$request->vol_fname;
        $vol->vol_mname=$request->vol_mname;
        $vol->vol_lname=$request->vol_lname;
        $vol->vol_age=$request->vol_age;
        $vol->vol_gender=$request->vol_gender;
        $vol->vol_birthday=$request->vol_birthday;
        $vol->vol_nationality=$request->vol_nationality;
        $vol->vol_civil_status=$request->vol_civil_status;
        $vol->vol_blood_type=$request->vol_blood_type;
        $vol->vol_region=$request->vol_region;
        $vol->vol_province=$request->vol_province;
        $vol->vol_municipal=$request->vol_municipal;
        $vol->vol_barangay=$request->vol_barangay;
        $vol->vol_house_no=$request->vol_house_no;
        $vol->vol_postal_code=$request->vol_postal_code;
        $vol->vol_landline=$request->vol_landline;
        $vol->vol_phone_no=$request->vol_phone_no;
        $vol->vol_email=$request->vol_email;
        $vol->vol_guardian=$request->vol_guardian;
        $vol->vol_relationship=$request->vol_relationship;
        $vol->vol_guardian_phone_no=$request->vol_guardian_phone_no;
        $vol->vol_education_att=$request->vol_education_att;
        $vol->vol_studying=$request->vol_studying;
        $vol->vol_school=$request->vol_school;
        $vol->vol_course=$request->vol_course;
        $vol->vol_year_level=$request->vol_year_level;
        $vol->vol_been_volunteer=$request->vol_been_volunteer;
        $vol->vol_been_completed_redcross_seminar=$request->vol_been_completed_redcross_seminar;
        $vol->vol_services_like_to_involve=$request->vol_services_like_to_involve;
        $vol->vol_willing_to_donate_blood=$request->vol_willing_to_donate_blood;
        $vol->vol_day_your_free=$request->vol_day_your_free;
        $vol->vol_time_your_free=$request->vol_time_your_free;
        $vol->vol_long_intend_in_prc=$request->vol_long_intend_in_prc;
        $vol->vol_where_get_to_know_volunteering=$request->vol_where_get_to_know_volunteering;
        $vol->vol_reason_why_become_volunteer=$request->vol_reason_why_become_volunteer;
        $vol->vol_status='Activated';
        $success=$vol->save();
        if($success)
        {
            return redirect()->back()->with('success','Successfully Registered');
        }
        else
        {
            if(Storage::exists($path))
            {
                return redirect()->back()->with('failed','Failed to register');
            }
            else{
                return redirect()->back()->with('failed','Failed to register');
            }
        }
    }
}
