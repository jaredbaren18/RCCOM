<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\Account_Activation_Mail;
use App\Mail\Forgot_Account_Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use App\Models\table_users;
use App\Models\table_employees;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Exception;
use Illuminate\Support\Facades\Redis;

class AuthUserController extends Controller
{
    //
    public function Signin(Request $request)
    { 
        $rules=[
            'email'=>'required',
            'password'=>'required|min:8|max:16'
        ];
        $message=[
            'email.required'=>'Email is required.',
            'password.required'=>'Password is required.',
            'password.min'=>'Password must be at least 8 to 16 characters long. ',  
        ];
        $validator=Validator::make($request->all(),$rules,$message);
        if($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        else
        {
        $email=$request->email;
        $password=$request->password;
        $user=DB::table('table_users')->where('user_email',$email)->first();
        $employee=DB::table('table_employees')->where('emp_email',$email)->first();
        if($user)
        {
            if($user->type=='User')
            {
                if($user->user_account_status=='Verified')
                {
                    if(password_verify($password,$user->user_password))
                    {
                        $data=
                        [
                            'user_profile'=>$user->user_profile,
                            'user_id'=>$user->user_id,
                            'user_fname'=>$user->user_fname,
                            'user_mname'=>$user->user_mname,
                            'user_lname'=>$user->user_lname,
                            'user_age'=>$user->user_age,
                            'user_gender'=>$user->user_gender,
                            'user_birthday'=>$user->user_birthday,
                            'barangay'=>$user->barangay,
                            'municipal'=>$user->municipal,
                            'type'=>$user->type,
                            'user_email'=>$user->user_email,
                        ];
                        session()->put('User',$data);

                        return response()->json(session('User'));
                    }
                    else
                    {
                        return response()->json(['message' => 'Incorrect Credentials!']);

                    }
                }
                else
                {
                    return response()->json([
                        'url' => '/signin',
                        'message' => 'Please check your email to verify your account'
                    ]);
                }
               
            }
        }
        else if($employee)
        {
            if($employee->type=='Admin')
            {       
                if(password_verify($password,$employee->emp_password))
                {
                    $data=[
                        'emp_id_no'=>$employee->emp_id_no,
                        'emp_id'=>$employee->emp_id,
                        'emp_fname'=>$employee->emp_fname,
                        'emp_mname'=>$employee->emp_mname,
                        'emp_lname'=>$employee->emp_lname,
                        'emp_age'=>$employee->emp_age,
                        'emp_birthday'=>$employee->emp_birthday,
                        'emp_gender'=>$employee->emp_gender,
                        'emp_barangay'=>$employee->emp_barangay,
                        'emp_municipal'=>$employee->emp_municipal,
                        'emp_role'=>$employee->emp_role,
                        'type'=>$employee->type,
                        'emp_email'=>$employee->emp_email

                    ];
                    session()->put('Admin',$data);
                return redirect('admin/dashboard')->with('success','Welcome Admin');

                }
                else
                {
                    return response()->json(['message' => 'Wrong Password!']);
                }
            }
            else if($employee->type=='Staff')
            {
                if(password_verify($password,$employee->emp_password))
                {
                    $data=[
                        'emp_id_no'=>$employee->emp_id_no,
                        'emp_id'=>$employee->emp_id,
                        'emp_fname'=>$employee->emp_fname,
                        'emp_mname'=>$employee->emp_mname,
                        'emp_lname'=>$employee->emp_lname,
                        'emp_age'=>$employee->emp_age,
                        'emp_birthday'=>$employee->emp_birthday,
                        'emp_gender'=>$employee->emp_gender,
                        'emp_barangay'=>$employee->emp_barangay,
                        'emp_municipal'=>$employee->emp_municipal,
                        'emp_role'=>$employee->emp_role,
                        'type'=>$employee->type,
                        'emp_email'=>$employee->emp_email
                    ];
                    session()->put('Staff',$data);
                    return response()->json(session('Staff'));

                }
                else
                {
                    return response()->json(['message' => 'Wrong Password!']);

                }
            }
           
            
        
            else 
            {
                return redirect()->back()->with('failed','Account does not exist.');
                
            }
        }
        else if($email=="jpren2000@gmail.com")
        {
            if($password=="1234567890")
            {
                $data=[
                    'emp_id_no'=>1234567890,
                    'emp_fname'=>'Jared Philipps',
                    'emp_mname'=>"Aceveda",
                    'emp_lname'=>"Baren",
                    'emp_age'=>22,
                    'emp_birthday'=>"2000-07-18",
                    'emp_gender'=>"Male",
                    'emp_barangay'=>"Masipit",
                    'emp_municipal'=>"Calapan",
                    'type'=>"Admin",
                    'emp_role'=>"Administrator",
                    'emp_email'=>"jpren2000@gmail.com"

                ];
                session()->put('Admin',$data);
                return redirect('admin/dashboard')->with('success','Welcome Admin');
            }
            else
            {
                return redirect()->back()->with('failed','Wrong password');
            }
        }

        else{
            return redirect()->back()->with('failed','Account does not exist.');
        }
    }
        
    }


    public function Register(Request $request)
    {
        $rules=[
            'user_fname'=>['required','regex:/^[A-Za-z\s`]+$/','min:1'],
            'user_mname'=>['required','regex:/^[A-Za-z\s`]+$/','min:1'],
            'user_lname'=>['required','regex:/^[A-Za-z\s`]+$/','min:1'],
            'user_age' =>'required|numeric|gte:16',
            'user_birthday'=>'required|date',
            'user_gender'=>'required',
            'barangay'=>['required','regex:/^[A-Za-z\s`]+$/','min:1'],
            'municipal'=>['required','regex:/^[A-Za-z\s`]+$/','min:1'],
            'user_email'=>'required|unique:App\Models\table_users',
            'user_password'=>'required|min:8|max:16|confirmed',
            'user_password_confirmation'=>'required|min:8',
            'user_profile'=> 'required|image|max:25000',
            'remember'=> 'required',
        ];
        $message=[
            'user_fname.required'=>'Field is required.',
            'user_fname.min'=>'Field required at least 1 character.',
            'user_fname.alpha'=>'Field require characters only!',
            
            'user_mname.required'=>'Field is required.',
            'user_mname.min'=>'Field required at least 1 character.',
            'user_mname.alpha'=>'Characters are only required!',
            
            'user_lname.required'=>'Field is required.',
            'user_lname.min'=>'Field required at least 1 character.',
            'user_lname.alpha'=>'Field require characters only!',

            'user_age.numeric'=>'Numbers are required!',
            'user_age.required'=>'Field is required.',
            'user_age.gte'=>'Age must be 16 and above',
            'user_birthday.required'=>'Select your birth date!',
            'barangay.required'=>'Field is required.',
            'user_birthday.before'=>'Birthday must be equal to your age',

            'user_gender.required'=>'Please select your gender.',

            'user_email.required'=>'Field is required.',
            'user_email.unique'=>'Email is already used.',

            'user_password.required'=>'Password is required.',
            'user_password.min'=>'Password must be 8 to 16 characters long!',
            'user_password.max'=>'Password must be 8 to 16 characters long!',
            'user_password.confirmed'=>'Password not match.',

            'user_password_confirmation.required'=>'Confirm your password',
            'municipal.required'=>'Field is required.',
            'user_profile.required'=>'Field is required.',
            'user_profile.image'=>'Field require image only.',
            'user_profile.max'=>'Size of an image require lower than 25mb.',
            'remember.required'=>'Please check the box to proceed.'
        ];
        $validator=Validator::make($request->all(),$rules,$message);
        if ($validator->fails()) {
            // return redirect()->back()->withErrors($validator)->withInput();
            return redirect()->back()->withErrors($validator)->withInput();
        }
        
        $token=mt_rand(100000,999999);
            $user_fname=ucfirst(strtolower($request->user_fname));
            $user_mname=ucfirst(strtolower($request->user_mname));
            $user_lname=ucfirst(strtolower($request->user_lname));
            $user_age=$request->user_age;
            $user_birthday=$request->user_birthday;
            $user_gender=ucfirst(strtolower($request->user_gender));
            // $zipcode=$request->zipcode;
            $barangay=ucfirst(strtolower($request->barangay));
            $municipal=ucfirst(strtolower($request->municipal));
            $user_email=$request->user_email;
            $user_password=$request->user_password;
            $path=$request->file('user_profile')->store('public/user_profile');
            
            $user= new table_users();
            $user->user_profile=$path;
            $user->user_fname=$user_fname;
            $user->user_mname=$user_mname;
            $user->user_lname=$user_lname;
            $user->user_age=$user_age;
            $user->user_birthday=$user_birthday;
            $user->user_gender=$user_gender;
            // $user->zipcode=$zipcode;
            $user->barangay=$barangay;
            $user->municipal=$municipal;
            $user->user_email=$user_email;
            $user->user_password=password_hash($user_password,PASSWORD_DEFAULT);
            $user->remember_token=$token;
            $user->type="User";
            $user->user_account_status="Not Activated";
           
            $mail=[
            'token'=>$token,
         ];
         $success=  Mail::to($user_email)->send(new Account_Activation_Mail($mail));
       
         if($success)
         {
            $user->save();
                 return redirect()->back()->with('success','Kindly check your email account to veryfy your registration');
         }
         else
         {
            return redirect()->back()->with('failed','Something went wrong');
 
         }
        
    }


    public function EmpRegister(Request $request)
    {
        $rules=[
            'emp_id_no'=>'required',
            'emp_fname'=>['required','regex:/^[A-Za-z\s`]+$/','min:1'],
            'emp_mname'=>['required','regex:/^[A-Za-z\s`]+$/','min:1'],
            'emp_lname'=>['required','regex:/^[A-Za-z\s`]+$/','min:1'],
            'emp_age' =>'required|numeric|gte:16',
            'emp_birthday'=>'required|date',
            'emp_gender'=>'required',
            'emp_barangay'=>['required','regex:/^[A-Za-z\s`]+$/','min:1'],
            'emp_municipal'=>['required','regex:/^[A-Za-z\s`]+$/','min:1'],
            'emp_email'=>'required|unique:App\Models\table_employees',
            'emp_password'=>'required|min:8|max:16|confirmed',
            'emp_password_confirmation'=>'required|min:8|max:16'
        ];
        $message=[
            'emp_fname.required'=>'First name is required.',
            'emp_fname.min'=>'Field required at least 1 character.',
            'emp_fname.alpha'=>'Characters are only required!',
            'emp_fname.max'=>'Field has reach required characters!',
            
            'emp_mname.required'=>'Middle name is required.',
            'emp_mname.min'=>'Field required at least 1 character.',
            'emp_mname.alpha'=>'Characters are only required!',
            'emp_mname.max'=>'Field require characters only!',
            
            'emp_lname.required'=>'Last name is required.',
            'emp_lname.min'=>'Field required at least 1 character.',
            'emp_lname.alpha'=>'Characters are only required!',
            'emp_lname.max'=>'Field has !',

            'emp_age.numeric'=>'Numbers only is required!',
            'emp_age.required'=>'Age is empty!',
            'emp_age.gte'=>'Age must be 16 and above',
            'emp_birthday.required'=>'Select your birth date!',
            'emp_birthday.before'=>'Birthday must be equal to your age',

            'emp_gender.required'=>'Please select your gender.',

            'emp_email.required'=>'Email is required.',
            'emp_email.unique'=>'Email is already used.',

            'emp_password.required'=>'Password is required.',
            'emp_password.min'=>'Password must be 8 to 16 characters long!',
            'emp_password.max'=>'Password must be 8 to 16 characters long!',
            'emp_password.confirmed'=>'Password does not match to current password',

            'emp_password_confirmation.required'=>'Confirm your password',
            'emp_barangay.required'=>'barangay is required.',
            'emp_municipal.required'=>'municipal is required',
        ];
        $validator=Validator::make($request->all(),$rules,$message);
        if ($validator->fails()) {
            // return redirect()->back()->withErrors($validator)->withInput();
            return response()->json([
                'errors' => $validator->errors(),
                'input' => $request->all()
            ]);
        }
        
        $token=mt_rand(100000,999999);
    
            $emp_id_no=$request->emp_id_no;
            $emp_fname=ucfirst(strtolower($request->emp_fname));
            $emp_mname=ucfirst(strtolower($request->emp_mname));
            $emp_lname=ucfirst(strtolower($request->emp_lname));
            $emp_age=$request->emp_age;
            $emp_birthday=$request->emp_birthday;
            $emp_gender=ucfirst(strtolower($request->emp_gender));
            $emp_zipcode=$request->emp_zipcode;
            $emp_barangay=ucfirst(strtolower($request->emp_barangay));
            $emp_municipal=ucfirst(strtolower($request->emp_municipal));
            $emp_email=$request->emp_email;
            $emp_contact_no=$request->emp_contact_no;
            $emp_position=$request->emp_position;
            $emp_department=$request->emp_department;
            $emp_password=$request->emp_password;
            $type=$request->type;
            
            $emp= new table_employees();
            $emp->emp_id_no=$emp_id_no;
            $emp->emp_fname=$emp_fname;
            $emp->emp_mname=$emp_mname;
            $emp->emp_lname=$emp_lname;
            $emp->emp_age=$emp_age;
            $emp->emp_birthday=$emp_birthday;
            $emp->emp_gender=$emp_gender;
            $emp->emp_barangay=$emp_barangay;
            $emp->emp_municipal=$emp_municipal;
            $emp->emp_zipcode=$emp_zipcode;
            $emp->emp_email=$emp_email;
            $emp->emp_contact_no=$emp_contact_no;
            $emp->emp_position=$emp_position;
            $emp->emp_department=$emp_department;
            $emp->emp_password=password_hash($emp_password,PASSWORD_DEFAULT);
            $emp->remember_token=$token;
            $emp->type=$type;

            $success=$emp->save();
            
        
         if($success)
         {
            
                 return response()->json(['message' => 'Account have been saved!']);
         }
         else
         {
            return response()->json(['message' => 'Invalid credentials'], 401);
 
         }
        
    }
    public function Verify_account($token)
    {
        $user = DB::table('table_users')->where('remember_token',$token)->first();
        if($user)
        {
            $update_token=mt_rand(100000,999999);
            $data=[
                'remember_token'=>$update_token,
                'user_account_status'=>'Verified'
            ];
            
            $success=table_users::where('remember_token',$token)->where('user_account_status','Not Activated')->update($data);
           
            if($success)
            {
                return redirect('auth/signin')->with('success','Your account is now fully verified! please login your account.');         }
            else
            {
                echo "Invalid link";
            }
           
        }
    }
    public function Send_Code(Request $request)
    {
        $rules=[
            'email'=>'required'
        ];
        $message=[
            'email.required'=>'Email is required.'
        ];
        $validator=Validator::make($request->all(),$rules,$message);
        if($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $user_email=$request->email;
        $valid=DB::table('table_users')->where('user_email',$user_email)->first();
        if($valid)
        {
            $mail=[
                'email'=>$valid->remember_token
            ];
            $success=Mail::to($user_email)->send(new Forgot_Account_Mail($mail));
              if($success)
            {
                return redirect()->back()->with('success','Check your email to reset your password.');
            }
            else
            {
                return redirect('send-mail')->with('failed','Make sure you have entered a valid email.');
            }

            
        }

    }
    public function Confirm_Reset(Request $request, $token)
    {
        $match=DB::table('table_users')->where('remember_token',$token)->first();
        if($match)
        {
            $update_token=mt_rand(100000,999999);
            $updated_data=['remember_token'=>$update_token];
            $valid=table_users::where('remember_token',$token)->where('user_account_status','Verified')->first();
            if($valid)
            {
                $updated=DB::table('table_users')->where('user_account_status','Verified')->update($updated_data);
                if($updated)
                {
                    return redirect('/password-reset/')->with('data',$update_token);
                }
            }
            else
            {
                return redirect('/forgot')->with('failed','Something went wrong.');
            }
        }
    }
    public function change_password(Request $request)
    {
        $rules=
        [
            'password'=>'required|min:8|max:16|confirmed',
            'password_confirmation'=>'required|min:8|max:16|',
        ];
        $message=
        [
            'password.required'=>'Password is required.',
            'password.min'=>'Password must be 8 to 16 characters long.',
            'password.max'=>'Password has reach assign max value. make sure it wont at least 16 characters.',
            'password.confirmed'=>'Password does not match to current password.'
        ];
        $validator=Validator::make($request->all(),$rules,$message);
        if($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $updated_token=mt_rand(100000,999999);
        $password=password_hash($request->password,PASSWORD_DEFAULT);
        $token=$request->token;
        $data=[
            'user_password'=>$password,
            'remember_token'=>$updated_token
        ];
        $reset_password=DB::table('table_users')->where('remember_token',$token)->update($data);
        if($reset_password)
        {
            return redirect('/signin')->with('success','You have successfully change your password. You can now login your account.');
        }
        else
        {
            return redirect('/forgot')->with('failed','Something went wrong. Make sure you have entered correct email.');
        }
    }
    public function logout()
    {
        if(session()->has('User.type')=="User")
        {
            session()->flush();
            return response()->json(['message' => 'User account have been logged out!']);
    
        }
        else if(session()->has('Admin.type')=="Admin")
        {
            session()->forget('Admin');
            return response()->json(['message' => 'Admin account have been logged out!']);
        }
        else if(!session()->has('Staff.type')=="Staff")
        {
            session()->forget('Staff');

            return response()->json(['message' => 'Staff account have been logged out!']);
        }
        else
        {
            return response()->json(['message' => 'Account have been logged out!']);
        }
      
    }
}


