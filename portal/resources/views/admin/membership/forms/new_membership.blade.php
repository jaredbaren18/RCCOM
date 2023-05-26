<title>Red Cross | Dashboard</title>
<link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">

 
@extends('admin.layout.layout')
@section('admin-membership')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

  
  <!-- Main content -->
  <section class="content mt-2">
    <div class="container-fluid">
      <div class="mx-auto mt-5 pt-3" style="width:550px ">
        @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show text-center" role="alert" style="width:550px">
          <strong>{{session('success')}}</strong> 
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        
        @elseif(session('failed'))
        <div class="alert alert-danger alert-dismissible fade show text-center" role="alert" style="width:550px">
          <strong>{{session('failed')}}</strong> 
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        
        @endif
      </div>
     <div class="col-md-12">
      <div class="card new-membership">

      </div>
     </div>
      <!-- Small boxes (Stat box) -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Complete the form</h3>
        </div>
        <!-- /.card-header -->
        
        <div class="card-body">
          <div class="row">
            <div class="col-md-8">
              <h5>Personal Information</h5>
              <div class="">
              @if(!session('mem_profile'))
              <form action="" id="mem_create_form" method="post"  enctype="multipart/form-data">
                @csrf
              <div class="row">
                
                        <div class="col-md-4">
                          <p>First Name</p>
                          <input type="text" name="mem_fname" value="{{old('mem_fname')}}" placeholder="ex.Juan" autocomplete="on" class="form-control p-1 my-1 @error('mem_fname') is-invalid @enderror" >
                        @error('mem_fname')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                      </div>
                        <div class="col-md-4">
                          <p>Middle Name</p>
                          <input type="text" name="mem_mname" value="{{old('mem_mname')}}" placeholder="ex.Dela" autocomplete="on" class="form-control p-1 my-1 @error('mem_mname') is-invalid @enderror" >
                        @error('mem_mname')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                      </div>
                        <div class="col-md-4">
                        <p>Last Name</p>
                        <input type="text" name="mem_lname" value="{{old('mem_lname')}}"  placeholder="ex.Cruz" autocomplete="on" class="form-control p-1 my-1 @error('mem_lname') is-invalid @enderror" >
                      @error('mem_lname')
                      <span class="text-danger">{{$message}}</span>
                      @enderror
                    </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <p>Age</p>
                    <input type="text" name="mem_age" placeholder="ex.22" value="{{old('mem_age')}}" autocomplete="on" class="form-control p-1 my-1 @error('mem_age') is-invalid @enderror" >
                  @error('mem_age')
                  <span class="text-danger">{{$message}}</span>
                  @enderror
                </div>
                <div class="col-md-4">
                  <p>Gender</p>
                  <select name="mem_gender" value="{{old('mem_gender')}}" class="form-control p-1 my-1 @error('mem_gender') is-invalid @enderror">
                    <option value="">-Select-</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                  </select>
                @error('mem_gender')
                <span class="text-danger">{{$message}}</span>
                @enderror
              </div>
              <div class="col-md-4">
                <p>Birthday</p>
                <input type="date" name="mem_birthday" value="{{old('mem_birthday')}}" placeholder="ex.Cruz" autocomplete="on" class="form-control p-1 my-1 @error('mem_birthday') is-invalid @enderror" >
              @error('mem_birthday')
              <span class="text-danger">{{$message}}</span>
              @enderror
            </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <p>Zip Code</p>
                    <input type="text" name="mem_zipcode" value="{{old('mem_zipcode')}}" placeholder="ex.5200" autocomplete="on" class="form-control p-1 my-1 @error('mem_zipcode') is-invalid @enderror" >
                  @error('mem_zipcode')
                  <span class="text-danger">{{$message}}</span>
                  @enderror
                </div>
                <div class="col-md-4">
                  <p>Barangay</p>
                  <input type="text" name="mem_barangay" value="{{old('mem_barangay')}}" placeholder="ex.Kalinisan" autocomplete="on" class="form-control p-1 my-1 @error('mem_barangay') is-invalid @enderror" >
                @error('mem_barangay')
                <span class="text-danger">{{$message}}</span>
                @enderror
              </div>
              <div class="col-md-4">
                <p>Municipal</p>
                <input type="text" name="mem_municipal" value="{{old('mem_municipal')}}" placeholder="ex.Katwiran" autocomplete="on" class="form-control p-1 my-1 @error('mem_municipal') is-invalid @enderror" >
              @error('mem_municipal')
              <span class="text-danger">{{$message}}</span>
              @enderror
            </div>
                </div>
                <div class="row">
                  
                  <div class="col-md-4">
                    <p>Blood Type</p>
                   <select name="mem_blood_type" value="{{old('mem_blood_type')}}" class="form-control p-1 my-1 @error('mem_blood_type') is-invalid @enderror">
                    <option value="">-Select-</option>
                    <option value="A+">A+</option>
                    <option value="A-">A-</option>
                    <option value="B+">B+</option>
                    <option value="B-">B-</option>
                    <option value="O+">O+</option>
                    <option value="O-">O-</option>
                    <option value="AB+">AB+</option>
                    <option value="AB-">AB-</option>
                   </select>
                  @error('mem_blood_type')
                  <span class="text-danger">{{$message}}</span>
                  @enderror
                </div>
                <div class="col-md-4">
                  <p>Phone Number</p>
                  <input type="text" name="mem_contact_no" value="{{old('mem_contact_no')}}" placeholder="ex.09123914811" autocomplete="on" class="form-control p-1 my-1 @error('mem_contact_no') is-invalid @enderror" >
                @error('mem_contact_no')
                <span class="text-danger">{{$message}}</span>
                @enderror
              </div>
              <div class="col-md-4">
                <p>Email</p>
                <input type="text" name="mem_email" value="{{old('mem_email')}}" placeholder="ex.juandelacruz@company.com" autocomplete="on" class="form-control p-1 my-1 @error('mem_email') is-invalid @enderror" >
              @error('mem_email')
              <span class="text-danger">{{$message}}</span>
              @enderror
            </div>
                </div>
                 
             </div>
          
          </div>
          <div class="col-md-4">
            <h5>Membership Details</h5>
          <div class="row">
            <div class="col-md-6">
              <p>Membership ID No.</p>
              <input type="text" name="mem_id_no" value="{{old('mem_id_no')}}" placeholder="ex.CE123" autocomplete="on" class="form-control p-1 my-1 @error('mem_id_no') is-invalid @enderror" >
            @error('mem_id_no')
            <span class="text-danger">{{$message}}</span>
            @enderror
          </div>
          <div class="col-md-6">
            <p>Insurance Category</p>
            <select name="mem_category" value="{{old('mem_category')}}" class="form-control p-1 my-1 @error('mem_category') is-invalid @enderror">
            <option value="">-Select-</option>
            <option value="Classic">Classic</option>
            <option value="Bronze">Bronze</option>
            <option value="Silver">Silver</option>
            <option value="Gold">Gold</option>
            <option value="Platinum">Platinum</option>
            <option value="Senior">Senior</option>
            <option value="Senior Plus">Senior Plus</option>
          </select>
          @error('mem_category')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>
          </div>
          <div class="row">
           
          @php
           $mem_status = "Activated";
          $start = new DateTime();
          $mem_start_at = $start->format('Y-m-d H:i:s');
          $expiration_date = strtotime('1 year', $start->getTimestamp());
          $end = new DateTime("@$expiration_date");
          $mem_end_at = $end->format('Y-m-d H:i:s');
          $end->format('Y-m-d H:i:s');
          @endphp
          <input type="hidden" name="mem_status" value="{{$mem_status}}">
          <input type="hidden" name="mem_start_at" value="{{$mem_start_at}}">
          <input type="hidden" name="mem_end_at" value="{{$mem_end_at}}">
          <div class="col-md-4">
            <p>Price:</p>
            <input type="text" name="mem_price" placeholder="ex.85"value="{{old('mem_price')}}" autocomplete="on" class="form-control p-1 my-1 @error('mem_price') is-invalid @enderror" >
          @error('mem_price')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>
          <div class="col-md-4">
            <p>Payment method</p>
           <select name="mem_payment_method" value="{{old('mem_payment_method')}}" class="form-control p-1 my-1 @error('mem_payment_method') is-invalid @enderror">
          <option value="">-Select-</option>
          <option value="Over the counter">Over the counter</option>
          <option value="Gcash">Gcash</option>
          <option value="Paymaya">Paymaya</option>
          </select>
          @error('mem_payment_method')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>
        <div class="col-md-4">
          <p>Assisted By:</p>
          <input type="text" name="mem_assisted_by" value="{{session('Admin')['emp_fname']}} {{session('Admin')['emp_mname']}} {{session('Admin')['emp_lname']}}{{old('mem_assisted_by')}}" placeholder="" value="{{session('Admin')['emp_fname']}} {{session('Admin')['emp_mname']}} {{session('Admin')['emp_lname']}}" autocomplete="on" class="form-control p-1 my-1 @error('mem_assisted_by') is-invalid @enderror" >
        @error('mem_assisted_by')
        <span class="text-danger">{{$message}}</span>
        @enderror
      </div> 
          </div>
          <div class="col-md-12">
            <p>Proof of payment</p>
            <input type="file" name="mem_proof_payment" value="{{old('mem_proof_payment')}}" class="form-control p-1 my-1 @error('mem_proof_payment') is-invalid @enderror" >
          @error('mem_proof_payment')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 mt-4 d-flex justify-content-end">
           <button type="submit" class="btn btn-success mx-2" onclick="confirmCreate()">Confirm</button>
           <a href="{{url('admin/membership/activated')}}" class="btn btn-danger">Cancel</a>
           </form>












           {{-- UPDATE FORM  --}}
              @elseif(session('mem_profile')->mem_status=="Activated")
              <form action="" method="post" id="mem_update_profile"  enctype="multipart/form-data">
                 @csrf
               <div class="row">
                 
                         <div class="col-md-4">
                          <input type="hidden" name="mem_id" value="{{session('mem_profile')->mem_id}}">
                           <p>First Name</p>
                           <input type="text" name="mem_fname" value="{{session('mem_profile')->mem_fname}}" placeholder="ex.Juan" autocomplete="on" class="form-control p-1 my-1 @error('mem_fname') is-invalid @enderror" >
                         @error('mem_fname')
                         <span class="text-danger">{{$message}}</span>
                         @enderror
                       </div>
                         <div class="col-md-4">
                           <p>Middle Name</p>
                           <input type="text" name="mem_mname" value="{{session('mem_profile')->mem_mname}}" placeholder="ex.Dela" autocomplete="on" class="form-control p-1 my-1 @error('mem_mname') is-invalid @enderror" >
                         @error('mem_mname')
                         <span class="text-danger">{{$message}}</span>
                         @enderror
                       </div>
                         <div class="col-md-4">
                         <p>Last Name</p>
                         <input type="text" name="mem_lname" value="{{session('mem_profile')->mem_lname}}"  placeholder="ex.Cruz" autocomplete="on" class="form-control p-1 my-1 @error('mem_lname') is-invalid @enderror" >
                       @error('mem_lname')
                       <span class="text-danger">{{$message}}</span>
                       @enderror
                     </div>
                 </div>
                 <div class="row">
                   <div class="col-md-4">
                     <p>Age</p>
                     <input type="text" name="mem_age" placeholder="ex.22" value="{{session('mem_profile')->mem_age}}" autocomplete="on" class="form-control p-1 my-1 @error('mem_age') is-invalid @enderror" >
                   @error('mem_age')
                   <span class="text-danger">{{$message}}</span>
                   @enderror
                 </div>
                 <div class="col-md-4">
                   <p>Gender</p>
                   <select name="mem_gender" value="{{session('mem_profile')->mem_gender}}" class="form-control p-1 my-1 @error('mem_gender') is-invalid @enderror">
                    <option value="{{session('mem_profile')->mem_gender}}">{{session('mem_profile')->mem_gender}}</option>
                     <option value="">-Select-</option>
                     <option value="Male">Male</option>
                     <option value="Female">Female</option>
                   </select>
                 @error('mem_gender')
                 <span class="text-danger">{{$message}}</span>
                 @enderror
               </div>
               <div class="col-md-4">
                 <p>Birthday</p>
                 <input type="date" name="mem_birthday" value="{{session('mem_profile')->mem_birthday}}" placeholder="ex.Cruz" autocomplete="on" class="form-control p-1 my-1 @error('mem_birthday') is-invalid @enderror" >
               @error('mem_birthday')
               <span class="text-danger">{{$message}}</span>
               @enderror
             </div>
                 </div>
                 <div class="row">
                   <div class="col-md-4">
                     <p>Zip Code</p>
                     <input type="text" name="mem_zipcode" value="{{session('mem_profile')->mem_zipcode}}" placeholder="ex.5200" autocomplete="on" class="form-control p-1 my-1 @error('mem_zipcode') is-invalid @enderror" >
                   @error('mem_zipcode')
                   <span class="text-danger">{{$message}}</span>
                   @enderror
                 </div>
                 <div class="col-md-4">
                   <p>Barangay</p>
                   <input type="text" name="mem_barangay" value="{{session('mem_profile')->mem_barangay}}" placeholder="ex.Kalinisan" autocomplete="on" class="form-control p-1 my-1 @error('mem_barangay') is-invalid @enderror" >
                 @error('mem_barangay')
                 <span class="text-danger">{{$message}}</span>
                 @enderror
               </div>
               <div class="col-md-4">
                 <p>Municipal</p>
                 <input type="text" name="mem_municipal" value="{{session('mem_profile')->mem_municipal}}" placeholder="ex.Katwiran" autocomplete="on" class="form-control p-1 my-1 @error('mem_municipal') is-invalid @enderror" >
               @error('mem_municipal')
               <span class="text-danger">{{$message}}</span>
               @enderror
             </div>
                 </div>
                 <div class="row">
                   
                   <div class="col-md-4">
                     <p>Blood Type</p>
                    <select name="mem_blood_type" value="{{session('mem_profile')->mem_blood_type}}" class="form-control p-1 my-1 @error('mem_blood_type') is-invalid @enderror">
                      <option value="{{session('mem_profile')->mem_blood_type}}">{{session('mem_profile')->mem_blood_type}}</option>
                     <option value="">-Select-</option>
                     <option value="A+">A+</option>
                     <option value="A-">A-</option>
                     <option value="B+">B+</option>
                     <option value="A-">A-</option>
                     <option value="O+">O+</option>
                     <option value="A-">A-</option>
                     <option value="AB+">AB+</option>
                     <option value="AB-">AB-</option>
                    </select>
                   @error('mem_blood_type')
                   <span class="text-danger">{{$message}}</span>
                   @enderror
                 </div>
                 <div class="col-md-4">
                   <p>Phone Number</p>
                   <input type="text" name="mem_contact_no" value="{{session('mem_profile')->mem_contact_no}}" placeholder="ex.09123914811" autocomplete="on" class="form-control p-1 my-1 @error('mem_contact_no') is-invalid @enderror" >
                 @error('mem_contact_no')
                 <span class="text-danger">{{$message}}</span>
                 @enderror
               </div>
               <div class="col-md-4">
                 <p>Email</p>
                 <input type="text" name="mem_email" value="{{session('mem_profile')->mem_email}}" placeholder="ex.juandelacruz@company.com" autocomplete="on" class="form-control p-1 my-1 @error('mem_email') is-invalid @enderror" >
               @error('mem_email')
               <span class="text-danger">{{$message}}</span>
               @enderror
             </div>
                 </div>
                  
              </div>
           
           </div>
           <div class="col-md-4">
             <h5>Membership Details</h5>
           <div class="row">
             <div class="col-md-6">
               <p>Membership ID No.</p>
               <input type="text" name="mem_id_no" value="{{session('mem_profile')->mem_id_no}}" placeholder="ex.CE123" autocomplete="on" class="form-control p-1 my-1 @error('mem_id_no') is-invalid @enderror" >
             @error('mem_id_no')
             <span class="text-danger">{{$message}}</span>
             @enderror
           </div>
           <div class="col-md-6">
             <p>Insurance Category</p>
             <select name="mem_category" value="{{session('mem_profile')->mem_category}}" class="form-control p-1 my-1 @error('mem_category') is-invalid @enderror">
              <option value="{{session('mem_profile')->mem_category}}">{{session('mem_profile')->mem_category}}</option>
             <option value="">-Select-</option>
             <option value="Classic">Classic</option>
             <option value="Bronze">Bronze</option>
             <option value="Silver">Silver</option>
             <option value="Gold">Gold</option>
             <option value="Platinum">Platinum</option>
             <option value="Senior">Senior</option>
             <option value="Senior Plus">Senior Plus</option>
           </select>
           @error('mem_category')
           <span class="text-danger">{{$message}}</span>
           @enderror
         </div>
           </div>
           <div class="row">
            
           @php
            $mem_status = "Activated";
           $start = new DateTime();
           $mem_start_at = $start->format('Y-m-d H:i:s');
           $expiration_date = strtotime('1 year', $start->getTimestamp());
           $end = new DateTime("@$expiration_date");
           $mem_end_at = $end->format('Y-m-d H:i:s');
           $end->format('Y-m-d H:i:s');
           @endphp
           <input type="hidden" name="mem_status" value="{{session('mem_profile')->mem_status}}">
           <input type="hidden" name="mem_start_at" value="{{session('mem_profile')->mem_start_at}}">
           <input type="hidden" name="mem_end_at" value="{{session('mem_profile')->mem_end_at}}">
           <div class="col-md-4">
             <p>Price:</p>
             <input type="text" name="mem_price" placeholder="ex.85"value="{{old('mem_price')}} {{session('mem_profile')->mem_price}}"  autocomplete="on" class="form-control p-1 my-1 @error('mem_price') is-invalid @enderror" >
           @error('mem_price')
           <span class="text-danger">{{$message}}</span>
           @enderror
         </div>
           <div class="col-md-4">
             <p>Payment method</p>
            <select name="mem_payment_method" value="{{session('mem_profile')->mem_payment_method}}" class="form-control p-1 my-1 @error('mem_payment_method') is-invalid @enderror">
              <option value="{{session('mem_profile')->mem_payment_method}}">{{session('mem_profile')->mem_payment_method}}</option>
           <option value="">-Select-</option>
           <option value="Over the counter">Over the counter</option>
           <option value="Gcash">Gcash</option>
           <option value="Paymaya">Paymaya</option>
           </select>
           @error('mem_payment_method')
           <span class="text-danger">{{$message}}</span>
           @enderror
         </div>
         <div class="col-md-4">
           <p>Current assessor By:</p>
           <input type="text" name="mem_assisted_by" value="{{session('Admin')['emp_fname']}} {{session('Admin')['emp_mname']}} {{session('Admin')['emp_lname']}}{{old('mem_assisted_by')}}" placeholder="" value="{{session('Admin')['emp_fname']}} {{session('Admin')['emp_mname']}} {{session('Admin')['emp_lname']}}" autocomplete="on" class="form-control p-1 my-1 @error('mem_assisted_by') is-invalid @enderror" >
         @error('mem_assisted_by')
         <span class="text-danger">{{$message}}</span>
         @enderror
       </div>
       
           </div>
           <div class="col-md-12">
            <p>Last assessor: {{session('mem_profile')->mem_assisted_by}}</p>
             <p>Proof of payment</p>
             <img src="{{session('mem_profile')->mem_proof_payment}}" height="100px" alt="">
             <input type="file" name="mem_proof_payment" value="{{Storage::url(session('mem_profile')->mem_proof_payment)}}" class="form-control p-1 my-1 @error('mem_proof_payment') is-invalid @enderror" >
           @error('mem_proof_payment')
           <span class="text-danger">{{$message}}</span>
           @enderror
         </div>
           </div>
         </div>
         <div class="row">
           <div class="col-md-12 mt-4 d-flex justify-content-end">
            <button type="submit" class="btn btn-success mx-2" onclick="confirmUpdate()">Update</button>
            <a href="{{url('admin/membership/profile',['mem_id'=>session('mem_profile')->mem_id])}}" class="btn btn-danger mx-2">Cancel</a>
            <a href="{{url('admin/membership/profile',['mem_id'=>session('mem_profile')->mem_id])}}" class="btn btn-primary">Back</a>

            </form>












              @elseif(session('mem_profile')->mem_status=="Expired")
              <form action="" method="post" id="mem_renew_profile"  enctype="multipart/form-data">
                 @csrf
               <div class="row">
                 
                         <div class="col-md-4">
                          <input type="hidden" name="mem_id" value="{{session('mem_profile')->mem_id}}">
                           <p>First Name</p>
                           <input type="text" name="mem_fname" value="{{session('mem_profile')->mem_fname}}" placeholder="ex.Juan" autocomplete="on" class="form-control p-1 my-1 @error('mem_fname') is-invalid @enderror" >
                         @error('mem_fname')
                         <span class="text-danger">{{$message}}</span>
                         @enderror
                       </div>
                         <div class="col-md-4">
                           <p>Middle Name</p>
                           <input type="text" name="mem_mname" value="{{session('mem_profile')->mem_mname}}" placeholder="ex.Dela" autocomplete="on" class="form-control p-1 my-1 @error('mem_mname') is-invalid @enderror" >
                         @error('mem_mname')
                         <span class="text-danger">{{$message}}</span>
                         @enderror
                       </div>
                         <div class="col-md-4">
                         <p>Last Name</p>
                         <input type="text" name="mem_lname" value="{{session('mem_profile')->mem_lname}}"  placeholder="ex.Cruz" autocomplete="on" class="form-control p-1 my-1 @error('mem_lname') is-invalid @enderror" >
                       @error('mem_lname')
                       <span class="text-danger">{{$message}}</span>
                       @enderror
                     </div>
                 </div>
                 <div class="row">
                   <div class="col-md-4">
                     <p>Age</p>
                     <input type="text" name="mem_age" placeholder="ex.22" value="{{session('mem_profile')->mem_age}}" autocomplete="on" class="form-control p-1 my-1 @error('mem_age') is-invalid @enderror" >
                   @error('mem_age')
                   <span class="text-danger">{{$message}}</span>
                   @enderror
                 </div>
                 <div class="col-md-4">
                   <p>Gender</p>
                   <select name="mem_gender" value="{{session('mem_profile')->mem_gender}}" class="form-control p-1 my-1 @error('mem_gender') is-invalid @enderror">
                    <option value="{{session('mem_profile')->mem_gender}}">{{session('mem_profile')->mem_gender}}</option>
                     <option value="">-Select-</option>
                     <option value="Male">Male</option>
                     <option value="Female">Female</option>
                   </select>
                 @error('mem_gender')
                 <span class="text-danger">{{$message}}</span>
                 @enderror
               </div>
               <div class="col-md-4">
                 <p>Birthday</p>
                 <input type="date" name="mem_birthday" value="{{session('mem_profile')->mem_birthday}}" placeholder="ex.Cruz" autocomplete="on" class="form-control p-1 my-1 @error('mem_birthday') is-invalid @enderror" >
               @error('mem_birthday')
               <span class="text-danger">{{$message}}</span>
               @enderror
             </div>
                 </div>
                 <div class="row">
                   <div class="col-md-4">
                     <p>Zip Code</p>
                     <input type="text" name="mem_zipcode" value="{{session('mem_profile')->mem_zipcode}}" placeholder="ex.5200" autocomplete="on" class="form-control p-1 my-1 @error('mem_zipcode') is-invalid @enderror" >
                   @error('mem_zipcode')
                   <span class="text-danger">{{$message}}</span>
                   @enderror
                 </div>
                 <div class="col-md-4">
                   <p>Barangay</p>
                   <input type="text" name="mem_barangay" value="{{session('mem_profile')->mem_barangay}}" placeholder="ex.Kalinisan" autocomplete="on" class="form-control p-1 my-1 @error('mem_barangay') is-invalid @enderror" >
                 @error('mem_barangay')
                 <span class="text-danger">{{$message}}</span>
                 @enderror
               </div>
               <div class="col-md-4">
                 <p>Municipal</p>
                 <input type="text" name="mem_municipal" value="{{session('mem_profile')->mem_municipal}}" placeholder="ex.Katwiran" autocomplete="on" class="form-control p-1 my-1 @error('mem_municipal') is-invalid @enderror" >
               @error('mem_municipal')
               <span class="text-danger">{{$message}}</span>
               @enderror
             </div>
                 </div>
                 <div class="row">
                   
                   <div class="col-md-4">
                     <p>Blood Type</p>
                    <select name="mem_blood_type" value="{{session('mem_profile')->mem_blood_type}}" class="form-control p-1 my-1 @error('mem_blood_type') is-invalid @enderror">
                      <option value="{{session('mem_profile')->mem_blood_type}}">{{session('mem_profile')->mem_blood_type}}</option>
                     <option value="">-Select-</option>
                     <option value="A+">A+</option>
                     <option value="A-">A-</option>
                     <option value="B+">B+</option>
                     <option value="A-">A-</option>
                     <option value="O+">O+</option>
                     <option value="A-">A-</option>
                     <option value="AB+">AB+</option>
                     <option value="AB-">AB-</option>
                    </select>
                   @error('mem_blood_type')
                   <span class="text-danger">{{$message}}</span>
                   @enderror
                 </div>
                 <div class="col-md-4">
                   <p>Phone Number</p>
                   <input type="text" name="mem_contact_no" value="{{session('mem_profile')->mem_contact_no}}" placeholder="ex.09123914811" autocomplete="on" class="form-control p-1 my-1 @error('mem_contact_no') is-invalid @enderror" >
                 @error('mem_contact_no')
                 <span class="text-danger">{{$message}}</span>
                 @enderror
               </div>
               <div class="col-md-4">
                 <p>Email</p>
                 <input type="text" name="mem_email" value="{{session('mem_profile')->mem_email}}" placeholder="ex.juandelacruz@company.com" autocomplete="on" class="form-control p-1 my-1 @error('mem_email') is-invalid @enderror" >
               @error('mem_email')
               <span class="text-danger">{{$message}}</span>
               @enderror
             </div>
                 </div>
                  
              </div>
           
           </div>
           <div class="col-md-4">
             <h5>Membership Details</h5>
           <div class="row">
             <div class="col-md-6">
               <p>Membership ID No.</p>
               <input type="text" name="mem_id_no" value="{{session('mem_profile')->mem_id_no}}" placeholder="ex.CE123" autocomplete="on" class="form-control p-1 my-1 @error('mem_id_no') is-invalid @enderror" >
             @error('mem_id_no')
             <span class="text-danger">{{$message}}</span>
             @enderror
           </div>
           <div class="col-md-6">
             <p>Insurance Category</p>
             <select name="mem_category" value="{{session('mem_profile')->mem_category}}" class="form-control p-1 my-1 @error('mem_category') is-invalid @enderror">
              <option value="{{session('mem_profile')->mem_category}}">{{session('mem_profile')->mem_category}}</option>
             <option value="">-Select-</option>
             <option value="Classic">Classic</option>
             <option value="Bronze">Bronze</option>
             <option value="Silver">Silver</option>
             <option value="Gold">Gold</option>
             <option value="Platinum">Platinum</option>
             <option value="Senior">Senior</option>
             <option value="Senior Plus">Senior Plus</option>
           </select>
           @error('mem_category')
           <span class="text-danger">{{$message}}</span>
           @enderror
         </div>
           </div>
           <div class="row">
            
           @php
           $start = new DateTime();
           $mem_start_at = $start->format('Y-m-d H:i:s');
           $expiration_date = strtotime('1 year', $start->getTimestamp());
           $end = new DateTime("@$expiration_date");
           $mem_end_at = $end->format('Y-m-d H:i:s');
           $end->format('Y-m-d H:i:s');
           @endphp
           <input type="hidden" name="mem_status" value="{{session('mem_profile')->mem_status}}">
           <input type="hidden" name="mem_start_at" value="{{session('mem_profile')->mem_start_at}}">
           <input type="hidden" name="mem_end_at" value="{{session('mem_profile')->mem_end_at}}">
           <div class="col-md-4">
             <p>Price:</p>
             <input type="text" name="mem_price" placeholder="ex.85"value="{{session('mem_profile')->mem_price}}"  autocomplete="on" class="form-control p-1 my-1 @error('mem_price') is-invalid @enderror" >
           @error('mem_price')
           <span class="text-danger">{{$message}}</span>
           @enderror
         </div>
           <div class="col-md-4">
             <p>Payment method</p>
            <select name="mem_payment_method" value="{{session('mem_profile')->mem_payment_method}}" class="form-control p-1 my-1 @error('mem_payment_method') is-invalid @enderror">
              <option value="{{session('mem_profile')->mem_payment_method}}">{{session('mem_profile')->mem_payment_method}}</option>
           <option value="">-Select-</option>
           <option value="Over the counter">Over the counter</option>
           <option value="Gcash">Gcash</option>
           <option value="Paymaya">Paymaya</option>
           </select>
           @error('mem_payment_method')
           <span class="text-danger">{{$message}}</span>
           @enderror
         </div>
         <div class="col-md-4">
           <p>Current assessor By:</p>
           <input type="text" name="mem_assisted_by" value="{{session('Admin')['emp_fname']}} {{session('Admin')['emp_mname']}} {{session('Admin')['emp_lname']}}{{old('mem_assisted_by')}}" placeholder="" value="{{session('Admin')['emp_fname']}} {{session('Admin')['emp_mname']}} {{session('Admin')['emp_lname']}}" autocomplete="on" class="form-control p-1 my-1 @error('mem_assisted_by') is-invalid @enderror" >
         @error('mem_assisted_by')
         <span class="text-danger">{{$message}}</span>
         @enderror
       </div>
       
           </div>
           <div class="col-md-12">
            <p>Last assessor: {{session('mem_profile')->mem_assisted_by}}</p>
             <p>Proof of payment</p>
             <img src="{{session('mem_profile')->mem_proof_payment}}" height="100px" alt="">
             <input type="file" name="mem_proof_payment" value="{{Storage::url(session('mem_profile')->mem_proof_payment)}}" class="form-control p-1 my-1 @error('mem_proof_payment') is-invalid @enderror" >
           @error('mem_proof_payment')
           <span class="text-danger">{{$message}}</span>
           @enderror
         </div>
           </div>
         </div>
         <div class="row">
           <div class="col-md-12 mt-4 d-flex justify-content-end">
            <button type="submit" class="btn btn-success mx-2" onclick="confirmRenew()">Re-New</button>
            <a href="{{url('admin/membership/profile',['mem_id'=>session('mem_profile')->mem_id])}}" class="btn btn-danger">Cancel</a>
            <a href="{{url('admin/membership/profile',['mem_id'=>session('mem_profile')->mem_id])}}" class="btn btn-primary">Back</a>
     
            </form>
              @endif

              
            </div>
          </div>
        </div>
        <!-- /.card-body -->
      </div>
      
      <!-- /.card -->
      <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
  </section>
  
  <!-- /.content -->
</div>
<script>
  function confirmCreate() {
    if (confirm("Are you sure?")) {
      var form=document.getElementById("mem_create_form");
      var newAction = "{{url('admin/membership/create-membership')}}"; // set the new action URL
        form.setAttribute('action',newAction); // change the form's action attribute change the form's action attribute
        form.submit(); //
      return true;
    } else {
      // Do nothing
      event.preventDefault();
      return false;
    }
  }
    function confirmUpdate() {
    if (confirm("Are you sure?")) {
      var form=document.getElementById("mem_update_profile");
      var newAction = "{{url('admin/membership/profile/update')}}"; // set the new action URL
      form.setAttribute('action',newAction); // change the form's action attribute// hange the form's action attribute
        form.submit(); //
    } else {
      // Do nothing
      event.preventDefault();
      return false;
    }
  }
    function confirmRenew() {
    if (confirm("Are you sure?")) {
      var form=document.getElementById("mem_renew_profile");
      var newAction = "{{url('admin/membership/profile/renew')}}"; // set the new action URL
      form.setAttribute('action',newAction); // change the form's action attribute// hange the form's action attribute
        form.submit(); //
    } else {
      // Do nothing
      event.preventDefault();
      return false;
    }
  }
    function confirmAction() {
    if (confirm("Are you sure?")) {
      // Delete the item
      // Add your code here to delete the item
      return true;
    } else {
      // Do nothing
      event.preventDefault();
      return false;
    }
  }
  </script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
<script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script>
  $(document).ready(function () {
    $('#membership').addClass('active');
    $('#create-new').addClass('active');
  });
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.js"></script>
{{-- <script src="{{asset('admin/js/membership.js')}}"> --}}


@endsection