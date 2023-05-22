<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\Donation_Acknowledgement;
use App\Models\table_donations;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class Admin_Donation_Controller extends Controller
{
    //
    public function Overview()
    {
        $data['HD']=DB::table('table_donations')->where('don_status','Validated')->max('don_amount');
        $data['Donations']=DB::table('table_donations')->where('don_status','Validated')->sum('don_amount');
        $data['Validated']=DB::table('table_donations')->where('don_status','Validated')->get();
        $data['Pending']=DB::table('table_donations')->where('don_status','Pending')->get();
        $data['Validated_Count']=DB::table('table_donations')->where('don_status','Validated')->count();
        return view('admin.donations',$data);
    }
    public function Donator_Info($don_id)
    {
        $data['Don_Profile']=DB::table('table_donations')->where('don_id',$don_id)->first();
        return view('admin.fund_donation.pages.donations_info',$data);
    }
    public function Donation_Acknowledgement($don_id)
    {
        $find=DB::table('table_donations')->where('don_id',$don_id)->first();
        if($find)
        {
            $mail=[
                'don_fname'=>$find->don_fname,
                'don_mname'=>$find->don_mname,
                'don_lname'=>$find->don_lname,
                'don_gender'=>$find->don_gender,
                'don_amount'=>$find->don_amount,
            ];
            $sent=Mail::to($find->don_email)->send(new Donation_Acknowledgement($mail));
            if($sent)
            {
                return redirect()->back()->with('success','Acknowledgement successfully Sent');
            }
            else
            {
                return redirect()->back()->with('failed','Acknowledgement failed to send. Please try again!');
            }
        }
        else
        {
            return redirect()->back()->with('failed','Acknowledgement failed to send. Please try again!');
        }

    }
    public function Add_Donation(Request $request)
    {
        $rules=[
            'don_fname'=>'required',
            'don_mname'=>'required',
            'don_lname'=>'required',
            'don_age'=>'required',
            'don_gender'=>'required',
            'don_municipal'=>'required',
            'don_barangay'=>'required',
            'don_method'=>'required',
            'don_amount'=>'required',
            'don_email'=>'required',
            'don_proof'=>'required|image|max:25000',
        ];
        $message=[
            'don_fname.required'=>'Field is required.',
            'don_mname.required'=>'Field is required.',
            'don_lname.required'=>'Field is required.',
            'don_age.required'=>'Field is required.',
            'don_gender.required'=>'Field is required.',
            'don_municipal.required'=>'Field is required.',
            'don_barangay.required'=>'Field is required.',
            'don_method.required'=>'Field is required.',
            'don_amount.required'=>'Field is required.',
            'don_proof.required'=>'Field is required.',
            'don_email.required'=>'Field is required.',
            'don_proof.image'=>'Accepting image file only.',
        ];
        $validator=Validator::make($request->all(),$rules,$message);
        if($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $path = $request->file('don_proof')->store('public/fund_donations');
        if($path)
        {
            $donation=new table_donations();
            $donation->don_fname=$request->don_fname;
            $donation->don_mname=$request->don_mname;
            $donation->don_lname=$request->don_lname;
            $donation->don_age=$request->don_age;
            $donation->don_gender=$request->don_gender;
            $donation->don_barangay=$request->don_barangay;
            $donation->don_municipal=$request->don_municipal;
            $donation->don_amount=$request->don_amount;
            $donation->don_method=$request->don_method;
            $donation->don_email=$request->don_email;
            $donation->don_notes=$request->don_notes;
            $donation->don_status='Validated';
            $donation->don_proof=Storage::url($path);
            $success=$donation->save();
            if($success)
            {
                return redirect()->back()->with('success','Donation Successfully Inserted!, Thank you!');
            }
            else
            {
                if(Storage::exists($path))
                {           
                Storage::delete($path);
                return redirect()->back()->with('failed','Donation failed to Inserted!, Something went wrong. Please try again.');
                }
            }
        }
        else
        {
            return redirect()->back()->with('failed','Please try again. Unable to save the date due to unknown error.');
        }


    }
}
