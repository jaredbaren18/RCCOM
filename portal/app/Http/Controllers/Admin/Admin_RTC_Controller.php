<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\table_contacts;
use App\Models\table_rtc;
use App\Models\table_users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Admin_RTC_Controller extends Controller
{
    //
    public function RTC(Request $request)
    {
        
        return view('admin.rtc');
    }
    // public function RTC_Profle(Request $request,$user_id)
    // {

    //     $find=DB::table('table_rtc')->where('u_id',$user_id)->get();
    //     return view('admin.rtc.pages');
    // }
    public function Messages()
    {
        if(session('Admin'))
        {
            $data=DB::table('table_contacts')->get();
            return response()->json($data);
        }
        elseif(session('Staff'))
        {
            $data=DB::table('table_contacts')->get();
            return response()->json($data);
        }
    }
    public function Conversations()
    {
        if(session('User'))
        {
            $data=DB::table('table_rtc')->where('u_id',session('User')['user_id'])->get();
            return response()->json($data);
        }
        elseif(session('Staff'))
        {
            $data=DB::table('table_rtc')->where('u_id',session('user'))->where('emp_id',session('Staff')['emp_id'])->get();
            return response()->json($data);
        }
        elseif(session('Admin'))
        {
            $data=DB::table('table_contacts')->get();
            return response()->json($data);
        }
        else
        {
            $data=DB::table('table_rtc')->where('u_id',session('User')['user_id'])->get();
            return response()->json($data);
        }
    }
    public function Send_Chat(Request $request)
    {
       if(session('User'))
       {
        $user=DB::table('table_rtc')->where('u_id',session('User')['user_id'])->first();
        if(!$user)
        {
           
        
            $new= new table_rtc();
            $new->message=$request->message;
            $new->u_id=session('User')['user_id'];
            $new->sendby="User";
            $new->status="Unseen";
            $sent=$new->save();
            if($sent)
            {
                $con= new table_contacts();
                $con->uid=session('User')['user_id'];
                $con->con_fname=session('User')['user_fname'];
                $con->con_lname=session('User')['user_lname'];
                $success=$con->save();
                if($success)
                {
                    return response()->json(['success'=>'Sent'],201);
                }
                
            }
            else
            {
                return response()->json(['failed'=>'Check your network connection'],422);
            }

        }
        elseif($user)
        {
            if($user->status=="Unseen")
            {
                $new= new table_rtc();
                $new->message=$request->message;
                $new->u_id=session('User')['user_id'];
                $new->sendby="User";
                $new->status="Unseen";
                $sent=$new->save();
                    if($sent)
                    {
                        return response()->json(['success'=>'Sent'],201);
                    }
                    else
                    {
                        return response()->json(['failed'=>'Check your network connection'],422);
                    }
            }
            else
            {
                $new= new table_rtc();
                $new->message=$request->message;
                $new->u_id=session('User')['user_id'];
                $new->chat_fname=session('User')['user_fname'];
                $new->chat_lname=session('User')['user_lname'];
                $new->sendby="User";
                $new->status="Unseen";
                $sent=$new->save();
                if($sent)
                {
                    return response()->json(['success'=>'Sent'],201);
                }
                else
                {
                    return response()->json(['failed'=>'Check your network connection'],422);
                }
            }



        }
       }
       elseif(session('Staff'))
       {
        $new= new table_rtc();
        $new->message=$request->message;
        $new->u_id=session('User')['user_id'];
        $new->chat_fname=session('User')['user_fname'];
        $new->chat_lname=session('User')['user_lname'];
        $new->sendby="User";
        $new->status="Unseen";
        $sent=$new->save();
        if($sent)
        {
            return response()->json(['success'=>'Sent'],201);
        }
        else
        {
            return response()->json(['failed'=>'Check your network connection'],422);
        }

       }
       elseif(session('Admin'))
       {
        $new= new table_rtc();
        $new->message=$request->message;
        $new->u_id=$request->u_id;
        $new->sendby="Admin";
        $new->status="Seen";
        $sent=$new->save();
        if($sent)
        {
            return response()->json(['success'=>'Sent'],201);
        }
        else
        {
            return response()->json(['failed'=>'Check your network connection'],422);
        }

       }

    }
}
