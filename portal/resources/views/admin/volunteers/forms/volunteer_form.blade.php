<title>Red Cross | Dashboard</title>
<link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
<script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
@extends('admin.layout.layout')
@section('admin-volunteer-form')
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
      @if(!session('Volunteer'))
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <img src="{{asset('admin/images/vbg.jpg')}}"alt="">
            <div class="card-body">
          <div class="row">
            <div class="col-md-6">
              <div class="card">
                <div class="card-header text-center">
                   Personal Information
                </div>
                <div class="card-body">
    <form action="{{url('admin/volunteer/create')}}" method="post" enctype="multipart/form-data">
      @csrf
   
                  <div class="row">
                    <div class="col-md-4">
                      <label for="">First Name</label>
                      <input type="text" name="vol_fname" value="{{old('vol_fname')}}" class="form-control @error('vol_fname') is-invalid @enderror" placeholder="ex.Juan">
                      @error('vol_fname')
                      <span class="text-danger">{{$message}}</span>
                      @enderror
                    </div>
                    <div class="col-md-4">
                      <label for="">Middle Name</label>
                      <input type="text" name="vol_mname" value="{{old('vol_mname')}}" class="form-control @error('vol_mname') is-invalid @enderror" placeholder="ex.Juan">
                      @error('vol_mname')
                      <span class="text-danger">{{$message}}</span>
                      @enderror
                    </div>
                    <div class="col-md-4">
                      <label for="">Last Name</label>
                      <input type="text" name="vol_lname" value="{{old('vol_lname')}}" class="form-control @error('vol_lname') is-invalid @enderror" placeholder="ex.Juan">
                      @error('vol_lname')
                      <span class="text-danger">{{$message}}</span>
                      @enderror
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4">
                      <label for="">Age</label>
                      <input type="text" name="vol_age" value="{{old('vol_age')}}" class="form-control @error('vol_age') is-invalid @enderror" placeholder="ex.Juan">
                      @error('vol_age')
                      <span class="text-danger">{{$message}}</span>
                      @enderror
                    </div>
                    <div class="col-md-4">
                      <label for="">Birthday</label>
                      <input type="date" name="vol_birthday" value="{{old('vol_birthday')}}" class="form-control @error('vol_birthday') is-invalid @enderror" placeholder="ex.Juan">
                      @error('vol_birthday')
                      <span class="text-danger">{{$message}}</span>
                      @enderror
                    </div>
                    <div class="col-md-4">
                      <label for="">Gender</label>
                      <select name="vol_gender" value="{{old('vol_gender')}}" class="form-control @error('vol_gender') is-invalid @enderror">
                      <option value="">-select-</option>
                      <option value="Male">Male</option>
                      <option value="Female">Female</option>
                    </select>
                      @error('vol_gender')
                      <span class="text-danger">{{$message}}</span>
                      @enderror
                    </div>
                    
                  </div>
                  <div class="row">
                    <div class="col-md-4">
                      <label for="">Nationality</label>
                      <input type="text" name="vol_nationality" value="{{old('vol_nationality')}}" class="form-control @error('vol_nationality') is-invalid @enderror" placeholder="ex.Juan">
                      @error('vol_nationality')
                      <span class="text-danger">{{$message}}</span>
                      @enderror
                    </div>
                    <div class="col-md-4">
                      <label for="">Civil Status</label>
                      <select name="vol_civil_status" value="{{old('vol_civil_status')}}" class="form-control @error('vol_civil_status') is-invalid @enderror">
                        <option value="">-select-</option>
                        <option value="Single">Single</option>
                        <option value="Married">Married</option>
                        <option value="Separated">Separated</option>
                        <option value="Widowed">Widowed</option>
                      </select>
                      @error('vol_civil_status')
                      <span class="text-danger">{{$message}}</span>
                      @enderror
                    </div>
                    <div class="col-md-4">
                      <label for="">Blood Type</label>
                     <select name="vol_blood_type" value="{{old('vol_blood_type')}}" class="form-control p-1 my-1 @error('vol_blood_type') is-invalid @enderror">
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
                    @error('vol_blood_type')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                  </div>
                    
                  </div>

                  
    
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card pb-2">
                <div class="card-header text-center">
                  Location & Contact
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-6">
                      <label for="">Region</label>
                      <input type="text" name="vol_region" value="MIMAROPA" class="form-control @error('vol_region') is-invalid @enderror">
                      @error('vol_region')
                      <span class="text-danger">{{$message}}</span>
                      @enderror
                    </div>
                    <div class="col-md-6">
                      <label for="">Province</label>
                      <input type="text" name="vol_province" value="Oriental Mindoro" class="form-control @error('vol_province') is-invalid @enderror" >
                      @error('vol_province')
                      <span class="text-danger">{{$message}}</span>
                      @enderror
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4">
                      <label for="">Municipality</label>
                      <select name="vol_municipal" class="@error('vol_municipal') is-invalid @enderror form-control" value="{{old('vol_municipal')}}">
                        <option value="">-select-</option>
                        <option value="Puerto Galera">Puerto Galera</option>
                        <option value="San Teodoro">San Teodoro</option>
                        <option value="Baco">Baco</option>
                        <option value="Calapan">Calapan</option>
                        <option value="Naujan">Naujan</option>
                        <option value="Victoria">Victoria</option>
                        <option value="Socorro">Socorro</option>
                        <option value="Pola">Pola</option>
                        <option value="Pinamalayan">Pinamalayan</option>
                        <option value="Gloria">Gloria</option>
                        <option value="Bansud">Bansud</option>
                        <option value="Bongabong">Bongabong</option>
                        <option value="Roxas">Roxas</option>
                        <option value="Mansalay">Mansalay</option>
                        <option value="Bulalacao">Mansalay</option>
                      </select>
                      @error('vol_municipal')
                      <span style="color:red">{{$message}}</span>
                      @enderror
                    </div>
                    <div class="col-md-4">
                      <label for="">Barangay</label>
                      <input type="text" name="vol_barangay" value="{{old('vol_barangay')}}" class="form-control @error('vol_barangay') is-invalid @enderror" placeholder="ex.Kalinisan">
                      @error('vol_barangay')
                      <span class="text-danger">{{$message}}</span>
                      @enderror
                    </div>
                    <div class="col-md-4">
                      <label for="">House No.</label>
                      <input type="text" name="vol_house_no" value="{{old('vol_house_no')}}" class="form-control @error('vol_house_no') is-invalid @enderror" placeholder="ex.Kalinisan">
                      @error('vol_house_no')
                      <span class="text-danger">{{$message}}</span>
                      @enderror
                    </div>
                  
                  </div>
                  <div class="row">
                    <div class="col-md-4">
                      <label for="">Postal Code</label>
                      <input type="text" name="vol_postal_code" value="{{old('vol_postal_code')}}" class="form-control @error('vol_postal_code') is-invalid @enderror" placeholder="ex.5323">
                      @error('vol_postal_code')
                      <span class="text-danger">{{$message}}</span>
                      @enderror
                    </div>
                    <div class="col-md-4">
                      <label for="">Landline</label>
                      <input type="text" name="vol_landline" value="{{old('vol_landline')}}" class="form-control @error('vol_landline') is-invalid @enderror" placeholder="(Optional)">
                      @error('vol_landline')
                      <span class="text-danger">{{$message}}</span>
                      @enderror
                    </div>
                    <div class="col-md-4">
                      <label for="">Mobile No.</label>
                      <input type="text" name="vol_phone_no" value="{{old('vol_phone_no')}}" class="form-control @error('vol_phone_no') is-invalid @enderror" placeholder="ex.09123456789">
                      @error('vol_phone_no')
                      <span class="text-danger">{{$message}}</span>
                      @enderror
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>

          <div class="row">
              <div class="col-md-6">
              <div class="card">
                <div class="card-header text-center">
                  Location & Contact
                </div>
                <div class="card-body">
                  <div class="row">
           
                    <div class="col-md-4">
                      <label for="">Guardian</label>
                      <input type="text" name="vol_guardian" value="{{old('vol_guardian')}}" class="form-control @error('vol_guardian') is-invalid @enderror" placeholder="ex.5323">
                      @error('vol_guardian')
                      <span class="text-danger">{{$message}}</span>
                      @enderror
                    </div>
                    <div class="col-md-4">
                      <label for="">Relationship</label>
                      <input type="text" name="vol_relationship" value="{{old('vol_relationship')}}" class="form-control @error('vol_relationship') is-invalid @enderror" placeholder="ex.5323">
                      @error('vol_relationship')
                      <span class="text-danger">{{$message}}</span>
                      @enderror
                    </div>
                    <div class="col-md-4">
                      <label for="">Phone No.</label>
                      <input type="text" name="vol_guardian_phone_no" class="form-control @error('vol_guardian_phone_no') is-invalid @enderror" placeholder="ex.09123456789" >
                      @error('vol_guardian_phone_no')
                      <span class="text-danger">{{$message}}</span>
                      @enderror
                    </div>
                
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <label for="">Email</label>
                      <input type="email" name="vol_email" value="{{old('vol_email')}}" class="form-control @error('vol_email') is-invalid @enderror" placeholder="ex.5323">
                      @error('vol_email')
                      <span class="text-danger">{{$message}}</span>
                      @enderror
                    </div>
                  </div>
                </div>
              </div>
          </div>
          <div class="col-md-6">
            <div class="card">
              <div class="card-header text-center">
                Profession
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-md-6">
                    <label for="">Highest Educational Attainment?</label>
                    <select type="text" name="vol_education_att" class="form-control @error('vol_education_att') is-invalid @enderror" >
                      <option value="">-select-</option>
                      <option value="Grade School Graduate">Grade School Graduate</option>
                      <option value="High School Level">High School Level</option>
                      <option value="High School Graduate">High School Graduate</option>
                      <option value="Vocational/Short Courses Graduate">Vocational/Short Courses Graduate</option>
                      <option value="College Level">College Level</option>
                      <option value="Master's Degree Holder">College Graduate</option>
                      <option value="Master's Degree Holder">Master's Degree Holder</option>
                      <option value="Doctorate Degree Holder">Doctorate Degree Holder</option>
                    </select>
                    @error('vol_education_att')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                  </div>
                  <div class="col-md-6">
                    <label for="">Are you still studying?</label>
                    <select name="vol_studying" class="@error('vol_studying') is-invalid @enderror form-control" id="">
                      <option value="">-select-</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                    </select>
                   @error('vol_studying')
                   <span class="text-danger">{{$message}}</span>
                   @enderror
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <label for="">School</label>
                    <input type="text" name="vol_school" class="form-control @error('vol_school') is-invalid @enderror" placeholder="ex.Mindoro State University" >
                    @error('vol_school')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                  </div>
                  <div class="col-md-4">
                    <label for="">Course</label>
                    <input type="text" name="vol_course" class="form-control @error('vol_course') is-invalid @enderror" placeholder="ex.BSIT" >
                    @error('vol_course')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                  </div>
                  <div class="col-md-4">
                    <label for="">Greade/Year Level</label>
                    <input type="text" name="vol_year_level" class="form-control @error('vol_year_level') is-invalid @enderror" placeholder="ex.3rd" >
                    @error('vol_year_level')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                  </div>
                </div>
              </div>
            </div>
          </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="card">
                <div class="card-header text-center">
                  Volunteering PRC
                </div>
                <div class="card-body">
               <div class="row">
                <div class="col-md-12">
                  <label for="">Have you ever been a volunteer of Philippine Red Cross before?</label>
                     <select name="vol_been_volunteer" class="@error('vol_been_volunteer') is-invalid @enderror form-control" id="">
                      <option value="">-select-</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                    </select>
                  @error('vol_been_volunteer')
                  <span class="text-danger">{{$message}}</span>
                  @enderror
              </div>
               </div>
              <div class="row">
                <div class="col-md-12">
                  <label for="">What Philippine Red Cross training or seminars have you completed, if any?</label>
                  <select name="vol_been_completed_redcross_seminar" class="form-control @error('vol_been_completed_redcross_seminar') is-invalid @enderror" >
                    <option value="">-select-</option>
                    <option value="Basic Life Support (BLS)">Basic Life Support (BLS)</option>
                    <option value="CSSR">CSSR (BLS)</option>
                    <option value="EMT">EMT</option>
                    <option value="FA">FA</option>
                    <option value="Standard First Aid (SFA)">Standard First Aid (SFA)</option>
                    <option value="WASAR">WASAR</option>
                    <option value="Basic Leadership Training">Basic Leadership Training</option>
                    <option value="Others">Others</option>
                  </select>
                  @error('vol_been_completed_redcross_seminar')
                  <span class="text-danger">{{$message}}</span>
                  @enderror
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 pb-3">
                  <label for="">Which Philippine Red Cross Service/s would you like to be involved with? </label>
                  <select name="vol_services_like_to_involve" class="form-control @error('vol_services_like_to_involve') is-invalid @enderror" >
                    <option value="">-select-</option>
                    <option value="Others">Others</option>
                    <option value="Medical Services">Medical Services</option>
                    <option value="Desaster Management">Desaster Management</option>
                    <option value="Marketing">Marketing</option>
                    <option value="Administration">Administration</option>
                    <option value="Communications">Communications</option>
                    <option value="Finance">Finance</option>
                    <option value="Education">Education</option>
                    <option value="Legal Services">Legal Services</option>
                    <option value="Blood Services">Blood Services</option>
                    
                    <option value="Social Services">Social Services</option>
                    <option value="Operations Center">Operations Center</option>
                    <option value="Community Health">Community Health</option>
                    <option value="Youth Development">Youth Development</option>
                    <option value="Advocacy/Social Media">Advocacy/Social Media</option>
                  </select>
                  @error('vol_services_like_to_involve')
                  <span class="text-danger">{{$message}}</span>
                  @enderror
                  </div>
                  <div class="col-md-12">
                    <label for="">Are you willing to donate blood?</label>
                    <select name="vol_willing_to_donate_blood" class="@error('vol_willing_to_donate_blood') is-invalid @enderror form-control" id="">
                      <option value="">-select-</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                    </select>
                    @error('vol_willing_to_donate_blood')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                  </div>
                  
              
                  <div class="col-md-12">
                    <label for="">What day of the week will you be available as a PRC Volunteer? </label>
                    <input type="text" name="vol_day_your_free" value="{{old('vol_day_your_free')}}" class="form-control @error('vol_day_your_free') is-invalid @enderror" placeholder="ex.Monday">
                    @error('vol_day_your_free')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                  </div>
                  </div>
                </div>
              </div>
              </div>
              <div class="col-md-6">
                <div class="card">
                  <div class="card-header text-center">
                    Volunteering PRC
                  </div>

                  <div class="card-body">
               
                    <div class="col-md-12">
                      <label for="">What time of the day are you usually available as a PRC Volunteer?</label>
                      <input type="text" name="vol_time_your_free" value="{{old('vol_time_your_free')}}" class="form-control @error('vol_time_your_free') is-invalid @enderror" placeholder="ex.Monday">
                      @error('vol_time_your_free')
                      <span class="text-danger">{{$message}}</span>
                      @enderror
                    </div>
                    <div class="col-md-12">
                      <label for="">How long do you intend to be a PRC Volunteer?</label>
                      <input type="text" name="vol_long_intend_in_prc" value="{{old('vol_long_intend_in_prc')}}" class="form-control @error('vol_long_intend_in_prc') is-invalid @enderror" placeholder="ex.Monday">
                      @error('vol_long_intend_in_prc')
                      <span class="text-danger">{{$message}}</span>
                      @enderror
                    </div>
                    
                    <div class="col-md-12">
                      <label for="">Where did you learn about the volunteering opportunities in the Philippine Red Cross?</label>
                      <input type="text" name="vol_where_get_to_know_volunteering" value="{{old('vol_where_get_to_know_volunteering')}}" class="form-control @error('vol_where_get_to_know_volunteering') is-invalid @enderror" placeholder="ex.Monday">
                      @error('vol_where_get_to_know_volunteering')
                      <span class="text-danger">{{$message}}</span>
                      @enderror
                    </div>
                    <div class="col-md-12">
                      <label for="">We are glad that you have shown significant interest in helping Philippine Red Cross' causes. Kindly state your reason/s for wanting to volunteer with the Philippine Red Cross.</label>
                      <textarea name="vol_reason_why_become_volunteer" id="" cols="10" rows="2" value="{{old('vol_reason_why_become_volunteer')}}" class="form-control @error('vol_reason_why_become_volunteer') is-invalid @enderror" placeholder="ex.Monday"></textarea>
                      @error('vol_reason_why_become_volunteer')
                      <span class="text-danger">{{$message}}</span>
                      @enderror
                    </div>
                    <div class="col-md-12">
                      <label for="">Upload ID Picture here!(Optional)</label>
                      <input type="file" name="vol_id_pic" class="form-control @error('vol_id_pic') is-invalid @enderror">
                      @error('vol_id_pic')
                      <span class="text-danger">{{$message}}</span>
                      @enderror
                    </div>
                    
                    

                  </div>
                </div>
              </div>

               </div>
           
               </div>
               <div class="card-footer d-flex justify-content-end">
                <button type="submit" class=" btn btn-success">Register Now</button>
                <a href="{{url('admin/volunteer')}}" class="btn btn-primary mx-2">Back</a>
               </form>
               </div>

              </div>
            </div>
          </div>








@elseif(session('Volunteer')) 
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <img src="{{asset('admin/images/vbg.jpg')}}"alt="">
            <div class="card-body">
          <div class="row">
            <div class="col-md-6">
              <div class="card">
                <div class="card-header text-center">
                   Personal Information
                </div>
                <div class="card-body">
    <form action="{{url('admin/volunteer/update')}}" method="post" enctype="multipart/form-data">
      @csrf
                  <div class="row">
                    <input type="hidden" name="vol_id" value="{{session('Volunteer')['vol_id']}}" class="form-control @error('vol_id') is-invalid @enderror" placeholder="ex.Juan">
                    
                    <div class="col-md-4">
                      <label for="">First Name</label>
                      <input type="text" name="vol_fname" value="{{session('Volunteer')['vol_fname']}}" class="form-control @error('vol_fname') is-invalid @enderror" placeholder="ex.Juan">
                      @error('vol_fname')
                      <span class="text-danger">{{$message}}</span>
                      @enderror
                    </div>
                    <div class="col-md-4">
                      <label for="">Middle Name</label>
                      <input type="text" name="vol_mname" value="{{session('Volunteer')['vol_mname']}}" class="form-control @error('vol_mname') is-invalid @enderror" placeholder="ex.Juan">
                      @error('vol_mname')
                      <span class="text-danger">{{$message}}</span>
                      @enderror
                    </div>
                    <div class="col-md-4">
                      <label for="">Last Name</label>
                      <input type="text" name="vol_lname" value="{{session('Volunteer')['vol_lname']}}" class="form-control @error('vol_lname') is-invalid @enderror" placeholder="ex.Juan">
                      @error('vol_lname')
                      <span class="text-danger">{{$message}}</span>
                      @enderror
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4">
                      <label for="">Age</label>
                      <input type="text" name="vol_age" value="{{session('Volunteer')['vol_age']}}" class="form-control @error('vol_age') is-invalid @enderror" placeholder="ex.Juan">
                      @error('vol_age')
                      <span class="text-danger">{{$message}}</span>
                      @enderror
                    </div>
                    <div class="col-md-4">
                      <label for="">Birthday</label>
                      <input type="date" name="vol_birthday" value="{{session('Volunteer')['vol_birthday']}}" class="form-control @error('vol_birthday') is-invalid @enderror" placeholder="ex.Juan">
                      @error('vol_birthday')
                      <span class="text-danger">{{$message}}</span>
                      @enderror
                    </div>
                    <div class="col-md-4">
                      <label for="">Gender</label>
                      <select name="vol_gender" value="" class="form-control @error('vol_gender') is-invalid @enderror">
                        <option value="{{session('Volunteer')['vol_gender']}}">{{session('Volunteer')['vol_gender']}}</option>
                      <option value="">-select-</option>
                      <option value="Male">Male</option>
                      <option value="Female">Female</option>
                    </select>
                      @error('vol_gender')
                      <span class="text-danger">{{$message}}</span>
                      @enderror
                    </div>
                    
                  </div>
                  <div class="row">
                    <div class="col-md-4">
                      <label for="">Nationality</label>
                      <input type="text" name="vol_nationality" value="{{session('Volunteer')['vol_nationality']}}" class="form-control @error('vol_nationality') is-invalid @enderror" placeholder="ex.Juan">
                      @error('vol_nationality')
                      <span class="text-danger">{{$message}}</span>
                      @enderror
                    </div>
                    <div class="col-md-4">
                      <label for="">Civil Status</label>
                      <select name="vol_civil_status"  class="form-control @error('vol_civil_status') is-invalid @enderror">
                        <option value="{{session('Volunteer')['vol_civil_status']}}">{{session('Volunteer')['vol_civil_status']}}</option>
                        <option value="">-select-</option>
                        <option value="Single">Single</option>
                        <option value="Married">Married</option>
                        <option value="Separated">Separated</option>
                        <option value="Widowed">Widowed</option>
                      </select>
                      @error('vol_civil_status')
                      <span class="text-danger">{{$message}}</span>
                      @enderror
                    </div>
                    <div class="col-md-4">
                      <label for="">Blood Type</label>
                     <select name="vol_blood_type"class="form-control p-1 my-1 @error('vol_blood_type') is-invalid @enderror">
                      <option value="{{session('Volunteer')['vol_blood_type']}}">{{session('Volunteer')['vol_blood_type']}}</option>
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
                    @error('vol_blood_type')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                  </div>
                    
                  </div>

                  
    
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card pb-2">
                <div class="card-header text-center">
                  Location & Contact
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-6">
                      <label for="">Region</label>
                      <input type="text" name="vol_region" value="{{session('Volunteer')['vol_region']}}" class="form-control @error('vol_region') is-invalid @enderror">
                      @error('vol_region')
                      <span class="text-danger">{{$message}}</span>
                      @enderror
                    </div>
                    <div class="col-md-6">
                      <label for="">Province</label>
                      <input type="text" name="vol_province" value="{{session('Volunteer')['vol_province']}}" class="form-control @error('vol_province') is-invalid @enderror" >
                      @error('vol_province')
                      <span class="text-danger">{{$message}}</span>
                      @enderror
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4">
                      <label for="">Municipality</label>
                      <select name="vol_municipal" class="@error('vol_municipal') is-invalid @enderror form-control" value="{{old('vol_municipal')}}">
                        <option value="{{session('Volunteer')['vol_municipal']}}">{{session('Volunteer')['vol_municipal']}}</option>
                        <option value="">-select-</option>
                        <option value="Puerto Galera">Puerto Galera</option>
                        <option value="San Teodoro">San Teodoro</option>
                        <option value="Baco">Baco</option>
                        <option value="Calapan">Calapan</option>
                        <option value="Naujan">Naujan</option>
                        <option value="Victoria">Victoria</option>
                        <option value="Socorro">Socorro</option>
                        <option value="Pola">Pola</option>
                        <option value="Pinamalayan">Pinamalayan</option>
                        <option value="Gloria">Gloria</option>
                        <option value="Bansud">Bansud</option>
                        <option value="Bongabong">Bongabong</option>
                        <option value="Roxas">Roxas</option>
                        <option value="Mansalay">Mansalay</option>
                        <option value="Bulalacao">Mansalay</option>
                      </select>
                      @error('vol_municipal')
                      <span style="color:red">{{$message}}</span>
                      @enderror
                    </div>
                    <div class="col-md-4">
                      <label for="">Barangay</label>
                      <input type="text" name="vol_barangay" value="{{session('Volunteer')['vol_barangay']}}" class="form-control @error('vol_barangay') is-invalid @enderror" placeholder="ex.Kalinisan">
                      @error('vol_barangay')
                      <span class="text-danger">{{$message}}</span>
                      @enderror
                    </div>
                    <div class="col-md-4">
                      <label for="">House No.</label>
                      <input type="text" name="vol_house_no" value="{{session('Volunteer')['vol_house_no']}}" class="form-control @error('vol_house_no') is-invalid @enderror" placeholder="ex.Kalinisan">
                      @error('vol_house_no')
                      <span class="text-danger">{{$message}}</span>
                      @enderror
                    </div>
                  
                  </div>
                  <div class="row">
                    <div class="col-md-4">
                      <label for="">Postal Code</label>
                      <input type="text" name="vol_postal_code" value="{{session('Volunteer')['vol_postal_code']}}" class="form-control @error('vol_postal_code') is-invalid @enderror" placeholder="ex.5323">
                      @error('vol_postal_code')
                      <span class="text-danger">{{$message}}</span>
                      @enderror
                    </div>
                    <div class="col-md-4">
                      <label for="">Landline</label>
                      <input type="text" name="vol_landline" value="{{session('Volunteer')['vol_landline']}}" class="form-control @error('vol_landline') is-invalid @enderror" placeholder="(Optional)">
                      @error('vol_landline')
                      <span class="text-danger">{{$message}}</span>
                      @enderror
                    </div>
                    <div class="col-md-4">
                      <label for="">Mobile No.</label>
                      <input type="text" name="vol_phone_no" value="{{session('Volunteer')['vol_phone_no']}}" class="form-control @error('vol_phone_no') is-invalid @enderror" placeholder="ex.09123456789">
                      @error('vol_phone_no')
                      <span class="text-danger">{{$message}}</span>
                      @enderror
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>

          <div class="row">
              <div class="col-md-6">
              <div class="card">
                <div class="card-header text-center">
                  Location & Contact
                </div>
                <div class="card-body">
                  <div class="row">
           
                    <div class="col-md-4">
                      <label for="">Guardian</label>
                      <input type="text" name="vol_guardian" value="{{session('Volunteer')['vol_guardian']}}" class="form-control @error('vol_guardian') is-invalid @enderror" placeholder="ex.5323">
                      @error('vol_guardian')
                      <span class="text-danger">{{$message}}</span>
                      @enderror
                    </div>
                    <div class="col-md-4">
                      <label for="">Relationship</label>
                      <input type="text" name="vol_relationship" value="{{session('Volunteer')['vol_relationship']}}" class="form-control @error('vol_relationship') is-invalid @enderror" placeholder="ex.5323">
                      @error('vol_relationship')
                      <span class="text-danger">{{$message}}</span>
                      @enderror
                    </div>
                    <div class="col-md-4">
                      <label for="">Phone No.</label>
                      <input type="text" name="vol_guardian_phone_no" value="{{session('Volunteer')['vol_guardian_phone_no']}}" class="form-control @error('vol_guardian_phone_no') is-invalid @enderror" placeholder="ex.09123456789" >
                      @error('vol_guardian_phone_no')
                      <span class="text-danger">{{$message}}</span>
                      @enderror
                    </div>
                
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <label for="">Email</label>
                      <input type="email" name="vol_email" value="{{session('Volunteer')['vol_email']}}" class="form-control @error('vol_email') is-invalid @enderror" placeholder="ex.5323">
                      @error('vol_email')
                      <span class="text-danger">{{$message}}</span>
                      @enderror
                    </div>
                  </div>
                </div>
              </div>
          </div>
          <div class="col-md-6">
            <div class="card">
              <div class="card-header text-center">
                Profession
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-md-6">
                    <label for="">Highest Educational Attainment?</label>
                    <select type="text" name="vol_education_att" class="form-control @error('vol_education_att') is-invalid @enderror" >
                      <option value="{{session('Volunteer')['vol_education_att']}}">{{session('Volunteer')['vol_education_att']}}</option>
                      <option value="">-select-</option>
                      <option value="Grade School Graduate">Grade School Graduate</option>
                      <option value="High School Level">High School Level</option>
                      <option value="High School Graduate">High School Graduate</option>
                      <option value="Vocational/Short Courses Graduate">Vocational/Short Courses Graduate</option>
                      <option value="College Level">College Level</option>
                      <option value="Master's Degree Holder">College Graduate</option>
                      <option value="Master's Degree Holder">Master's Degree Holder</option>
                      <option value="Doctorate Degree Holder">Doctorate Degree Holder</option>
                    </select>
                    @error('vol_education_att')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                  </div>
                  <div class="col-md-6">
                    <label for="">Are you still studying?</label>
                    <select name="vol_studying" class="@error('vol_studying') is-invalid @enderror form-control" id="">
                      <option value="{{session('Volunteer')['vol_studying']}}">{{session('Volunteer')['vol_studying']}}</option>
                      <option value="">-select-</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                    </select>
                   @error('vol_studying')
                   <span class="text-danger">{{$message}}</span>
                   @enderror
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <label for="">School</label>
                    <input type="text" name="vol_school" value="{{session('Volunteer')['vol_school']}}" class="form-control @error('vol_school') is-invalid @enderror" placeholder="ex.Mindoro State University" >
                    @error('vol_school')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                  </div>
                  <div class="col-md-4">
                    <label for="">Course</label>
                    <input type="text" name="vol_course" value="{{session('Volunteer')['vol_course']}}" class="form-control @error('vol_course') is-invalid @enderror" placeholder="ex.BSIT" >
                    @error('vol_course')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                  </div>
                  <div class="col-md-4">
                    <label for="">Greade/Year Level</label>
                    <input type="text" name="vol_year_level" value="{{session('Volunteer')['vol_year_level']}}" class="form-control @error('vol_year_level') is-invalid @enderror" placeholder="ex.3rd" >
                    @error('vol_year_level')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                  </div>
                </div>
              </div>
            </div>
          </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="card">
                <div class="card-header text-center">
                  Volunteering PRC
                </div>
                <div class="card-body">
               <div class="row">
                <div class="col-md-12">
                  <label for="">Have you ever been a volunteer of Philippine Red Cross before?</label>
                     <select name="vol_been_volunteer" class="@error('vol_been_volunteer') is-invalid @enderror form-control" id="">
                      <option value="{{session('Volunteer')['vol_been_volunteer']}}">{{session('Volunteer')['vol_been_volunteer']}}</option>
                      <option value="">-select-</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                    </select>
                  @error('vol_been_volunteer')
                  <span class="text-danger">{{$message}}</span>
                  @enderror
              </div>
               </div>
              <div class="row">
                <div class="col-md-12">
                  <label for="">What Philippine Red Cross training or seminars have you completed, if any?</label>
                  <select name="vol_been_completed_redcross_seminar" class="form-control @error('vol_been_completed_redcross_seminar') is-invalid @enderror" >
                    <option value="{{session('Volunteer')['vol_been_completed_redcross_seminar']}}">{{session('Volunteer')['vol_been_completed_redcross_seminar']}}</option>
                    <option value="">-select-</option>
                    <option value="Basic Life Support (BLS)">Basic Life Support (BLS)</option>
                    <option value="CSSR">CSSR (BLS)</option>
                    <option value="EMT">EMT</option>
                    <option value="FA">FA</option>
                    <option value="Standard First Aid (SFA)">Standard First Aid (SFA)</option>
                    <option value="WASAR">WASAR</option>
                    <option value="Basic Leadership Training">Basic Leadership Training</option>
                    <option value="Others">Others</option>
                  </select>
                  @error('vol_been_completed_redcross_seminar')
                  <span class="text-danger">{{$message}}</span>
                  @enderror
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 pb-3">
                  <label for="">Which Philippine Red Cross Service/s would you like to be involved with? </label>
                  <select name="vol_services_like_to_involve" class="form-control @error('vol_services_like_to_involve') is-invalid @enderror" >
                    <option value="{{session('Volunteer')['vol_services_like_to_involve']}}">{{session('Volunteer')['vol_services_like_to_involve']}}</option>
                    <option value="">-select-</option>
                    <option value="Medical Services">Medical Services</option>
                    <option value="Desaster Management">Desaster Management</option>
                    <option value="Marketing">Marketing</option>
                    <option value="Administration">Administration</option>
                    <option value="Communications">Communications</option>
                    <option value="Finance">Finance</option>
                    <option value="Education">Education</option>
                    <option value="Legal Services">Legal Services</option>
                    <option value="Blood Services">Blood Services</option>
                    
                    <option value="Social Services">Social Services</option>
                    <option value="Operations Center">Operations Center</option>
                    <option value="Community Health">Community Health</option>
                    <option value="Youth Development">Youth Development</option>
                    <option value="Advocacy/Social Media">Advocacy/Social Media</option>
                    <option value="Others">Others</option>

                  </select>
                  @error('vol_services_like_to_involve')
                  <span class="text-danger">{{$message}}</span>
                  @enderror
                  </div>
                  <div class="col-md-12">
                    <label for="">Are you willing to donate blood?</label>
                    <select name="vol_willing_to_donate_blood" class="@error('vol_willing_to_donate_blood') is-invalid @enderror form-control" id="">
                      <option value="{{session('Volunteer')['vol_willing_to_donate_blood']}}">{{session('Volunteer')['vol_willing_to_donate_blood']}}</option>
                      <option value="">-select-</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                    </select>
                    @error('vol_willing_to_donate_blood')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                  </div>
                  
              
                  <div class="col-md-12">
                    <label for="">What day of the week will you be available as a PRC Volunteer? </label>
                    <input type="text" name="vol_day_your_free" value="{{session('Volunteer')['vol_day_your_free']}}" class="form-control @error('vol_day_your_free') is-invalid @enderror" placeholder="ex.Monday">
                    @error('vol_day_your_free')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                  </div>
                  <div class="col-md-12">
                    <label for="">What time of the day are you usually available as a PRC Volunteer?</label>
                    <input type="text" name="vol_time_your_free" value="{{session('Volunteer')['vol_time_your_free']}}" class="form-control @error('vol_time_your_free') is-invalid @enderror" placeholder="ex.Monday">
                    @error('vol_time_your_free')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                  </div>
                  <div class="col-md-12">
                    <label for="">How long do you intend to be a PRC Volunteer?</label>
                    <input type="text" name="vol_long_intend_in_prc" value="{{session('Volunteer')['vol_long_intend_in_prc']}}" class="form-control @error('vol_long_intend_in_prc') is-invalid @enderror" placeholder="ex.Monday">
                    @error('vol_long_intend_in_prc')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                  </div>
                  
                  <div class="col-md-12">
                    <label for="">Where did you learn about the volunteering opportunities in the Philippine Red Cross?</label>
                    <input type="text" name="vol_where_get_to_know_volunteering" value="{{session('Volunteer')['vol_where_get_to_know_volunteering']}}" class="form-control @error('vol_where_get_to_know_volunteering') is-invalid @enderror" placeholder="ex.Monday">
                    @error('vol_where_get_to_know_volunteering')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                  </div>
                  </div>
                </div>
              </div>
              </div>
              <div class="col-md-6">
                <div class="card">
                  <div class="card-header text-center">
                    Volunteering PRC
                  </div>

                  <div class="card-body">
               
                   
                    <div class="col-md-12">
                      <label for="">We are glad that you have shown significant interest in helping Philippine Red Cross' causes. Kindly state your reason/s for wanting to volunteer with the Philippine Red Cross.</label>
                      <input type="text" name="vol_reason_why_become_volunteer"  value="{{session('Volunteer')['vol_reason_why_become_volunteer']}}" class="form-control @error('vol_reason_why_become_volunteer') is-invalid @enderror" placeholder="ex.Monday">
                      @error('vol_reason_why_become_volunteer')
                      <span class="text-danger">{{$message}}</span>
                      @enderror
                    </div>
                    <div class="col-md-12">
                      <br>
                     <p> <strong>Existing Image</strong></p>
                      <img src="{{session('Volunteer')['vol_id_pic']}}" class="rounded-circle" height="200px" width="200px"alt="">
                    </div>
                    <div class="col-md-12">
                      <label for="">Upload ID Picture here!(Optional)</label>
                      <input type="file" name="vol_id_pic" class="form-control @error('vol_id_pic') is-invalid @enderror">
                      @error('vol_id_pic')
                      <span class="text-danger">{{$message}}</span>
                      @enderror
                    </div>
                    
                    

                  </div>
                </div>
              </div>

               </div>
           
               </div>
               <div class="card-footer d-flex justify-content-end">
                <button type="submit" class=" btn btn-success">Update</button>
                <a href="{{url('admin/volunteer/profile',['vol_id'=>session('Volunteer')['vol_id']])}}" class="btn btn-primary mx-2">Back</a>
               </form>
               </div>

              </div>
            </div>
          </div>
          @endif
              
            </div>
          </div>

  </section>
  <!-- /.content -->
</div>
<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
<script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script>
  $(document).ready(function () {
    $('#volunteer').addClass('active');
  });
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.js"></script>
{{-- <script src="{{asset('admin/js/membership.js')}}"> --}}



@endsection