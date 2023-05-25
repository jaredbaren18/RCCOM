<?php

use App\Http\Controllers\Admin\Admin_Appointment_Controller;
use App\Http\Controllers\Admin\Admin_Blood_Controller;
use App\Http\Controllers\Admin\Admin_Dashboard_Controller;
use App\Http\Controllers\Admin\Admin_Donation_Controller;
use App\Http\Controllers\Admin\Admin_Employees_Controller;
use App\Http\Controllers\Admin\Admin_Membership_Controller;
use App\Http\Controllers\Admin\Admin_Membership_Log_Controller;
use App\Http\Controllers\Admin\Admin_RTC_Controller;
use App\Http\Controllers\Admin\Admin_Volunteer_Controller;
use App\Http\Controllers\Auth\AuthUserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::prefix('/auth')->namespace('App\Http\Controllers\Auth')->group(function(){
    Route::get('signin',[AuthUserController::class,'Login']);
    Route::get('signup',[AuthUserController::class,'Sign_Up']);
    Route::get('logout',[AuthUserController::class,'Logout']);
    Route::view('forgot-password','auth/forgot-password');
    Route::post('loggingin',[AuthUserController::class,'Signin']);
    Route::post('register',[AuthUserController::class,'Register']);
    Route::get('verify/{token}',[AuthUserController::class,'Verify_account']);

});

Route::prefix('/admin')->namespace('App\Http\Controllers\Admin')->group(function(){

   
    // DASHBOARD 
    Route::get('dashboard',[Admin_Dashboard_Controller::class,'Dashboard']);
    Route::get('active-acounts',[Admin_Membership_Controller::class,'Memership_Bar_Chart']);


    // MEMBERSHIPS 
    Route::get('membership',[Admin_Membership_Controller::class,'Overview']);

    Route::get('membership/profile/{mem_id}',[Admin_Membership_Controller::class,'Mem_Profile']);
    Route::get('membership/profile/delete/{mem_id}',[Admin_Membership_Controller::class,'Delete_Membership_Account']);
    Route::get('membership/profile/edit/{mem_id}',[Admin_Membership_Controller::class,'Edit_Membership_Account']);
    Route::post('membership/profile/update',[Admin_Membership_Controller::class,'Update_Membership_Account']);
    Route::post('membership/profile/renew',[Admin_Membership_Controller::class,'Renew_Membership_Account']);
    Route::post('membership/profile/decline',[Admin_Membership_Controller::class,'Decline_Membership_Account']);
    Route::post('membership/profile/approve',[Admin_Membership_Controller::class,'Approve_Membership_Account']);



    


    Route::get('membership/activated',[Admin_Membership_Controller::class,'Activated']);
    Route::get('membership/expired',[Admin_Membership_Controller::class,'Expired']);
    Route::get('membership/pending',[Admin_Membership_Controller::class,'Pending']);
    Route::get('membership/declined',[Admin_Membership_Controller::class,'Decline']);
    Route::view('membership/create-new','admin.membership.forms.new_membership');
    Route::post('membership/deleting',[Admin_Membership_Controller::class,'Deleting_Membership']);
    Route::post('membership/create-membership',[Admin_Membership_Controller::class,'Submit_Membership']);

    // APPOINTMENTS 
    Route::get('appointment',[Admin_Appointment_Controller::class,'Appointment_Setter']);
    Route::post('appointment/create',[Admin_Appointment_Controller::class,'Create_Appointment']);
    Route::get('appointment/finish/{app_id}',[Admin_Appointment_Controller::class,'Finish_Appointment']);
    Route::get('appointment/profile/{app_id}',[Admin_Appointment_Controller::class,'Appointment_Details']);
    Route::get('appointment/proceed/{app_id}',[Admin_Appointment_Controller::class,'Proceed_Appointment']);
    Route::get('appointment/delete/{app_id}',[Admin_Appointment_Controller::class,'Delete_Appointment']);
    Route::get('appointment/approve/{app_id}',[Admin_Appointment_Controller::class,'Approved_Appointment']);
    Route::post('appointment/update',[Admin_Appointment_Controller::class,'Update_Appointment']);
    Route::post('appointment/decline',[Admin_Appointment_Controller::class,'Decline_Appointment']);


    // EMPLOYEES 
    Route::get('employees',[Admin_Employees_Controller::class,'Overview']);
    Route::get('employees/admin',[Admin_Employees_Controller::class,'Administrator']);
    Route::get('employees/staff',[Admin_Employees_Controller::class,'Staff']);




    // FUND DONATIONS 
    Route::get('donation/fund',[Admin_Donation_Controller::class,'Overview']);
    Route::view('donation/fund/add','admin.fund_donation.forms.new_donation');
    Route::post('donation/fund/create',[Admin_Donation_Controller::class,'Add_Donation']);
    Route::get('donation/fund/profile/{don_id}',[Admin_Donation_Controller::class,'Donator_Info']);
    Route::get('donation/fund/acknowledgement/{don_id}',[Admin_Donation_Controller::class,'Donation_Acknowledgement']);



    Route::get('donation/blood',[Admin_Blood_Controller::class,'Blood']);


    // MEMBERSHIP LOGS 
    Route::get('membership/activity/logs',[Admin_Membership_Log_Controller::class,'Membership_Logs']);

    // VOLUNTEERS 
    Route::get('volunteer',[Admin_Volunteer_Controller::class,'Volunteer']);
    Route::view('volunteer/add','admin.volunteers.forms.volunteer_form');
    Route::post('volunteer/create',[Admin_Volunteer_Controller::class,'Create_Volunteer']);
    Route::get('volunteer/profile/{vol_id}',[Admin_Volunteer_Controller::class,'Vol_Profile']);
    Route::get('volunteer/edit/{vol_id}',[Admin_Volunteer_Controller::class,'Vol_Edit']);
    Route::post('volunteer/update',[Admin_Volunteer_Controller::class,'Vol_Update']);
    Route::get('volunteer/delete/{vol_id}',[Admin_Volunteer_Controller::class,'Vol_Delete']);

    Route::get('chat',[Admin_RTC_Controller::class,'RTC']);
});

Route::post('send-chat',[Admin_RTC_Controller::class,'Send_Chat']);
Route::get('conversation',[Admin_RTC_Controller::class,'Conversations']);
Route::get('user-chat',[Admin_RTC_Controller::class,'Messages']);
Route::get('admin-chat',[Admin_RTC_Controller::class,'AdminMessages']);
Route::get('chat/{u_id}',[Admin_RTC_Controller::class,'Messenger']);
Route::view('/','user.home');

Route::view('/','user/home');
Route::view('/home','user/userhome');

Route::view('/profile','user/profile');
Route::view('/membership','user.membership');


