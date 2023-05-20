<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\table_try_table;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;


class trycontroller extends Controller
{
    //
    public function display()
    {
        $data['Payments']=DB::table('table_try')->get();
        return view('try',$data);
    }
    public function Trysend(Request $request)
{
    $rule=[
        'tryfile'=>'required|image|image|mimes:jpeg,png,jpg,gif|max:25000'
    ];
    $message=[
        'tryfile.required'=>'Try mo lang ng try'
    ];
    $validator=Validator::make($request->all(),$rule,$message);
    if($validator->fails())
    {
        return redirect()->back()->withErrors($validator)->with('failed','ulet');
    }
    $trytable= new table_try_table();
    // $filename=mt_rand(100000,999999);
    $path=$request->file('tryfile')->store('public/payment');
    $trytable->tryfile=Storage::url($path);
    $success=$trytable->save();
    if($success)
    {
        return redirect()->back()->with('success','success upload');
    }
    else
    {
        return redirect()->back()->with('failed','failed upload');
    }

}
}
