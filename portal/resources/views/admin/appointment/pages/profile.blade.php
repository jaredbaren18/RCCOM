<title>Red Cross | Dashboard</title>
<link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
<script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
@extends('admin.layout.layout')
@section('admin-appointment-profile')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
 
  
  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
    <div class="mx-auto" style="width:550px ">
      @if(session('success'))
      <div class="alert alert-success alert-dismissible fade show text-center" role="alert" style="width:550">
        <strong>{{session('success')}}</strong> 
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      
      @elseif(session('failed'))
      <div class="alert alert-danger alert-dismissible fade show text-center" role="alert" style="width:550">
        <strong>{{session('failed')}}</strong> 
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      
      @endif
    
    </div>
      <div id="appointments-card" class="col-md-12 mt-5">
        <div class="card mx-auto" style="width:550px ">
          <div class="card-header text-center bg-success"><h5>Appointment Details</h5></div>
          <div id="appointment-details" class="card-body">
            <div  class="row">
              <div class="col-md-12">
               <p>Meeting ID: {{$Profile->app_id}}</p>
               <p>Full Name: {{$Profile->app_fname}} {{$Profile->app_mname}} {{$Profile->app_lname}}</p>
               <p>Age: {{$Profile->app_age}}</p>
               <p>Gender: {{$Profile->app_gender}}</p>
               <p>Municipality: {{$Profile->app_municipal}}</p>
               <p>Barangay: {{$Profile->app_barangay}}</p>
               <p>Purpose: 
                 @if($Profile->app_purpose=="Others")
                 {
                   {{$Profile->app_other_reason}}
                  }
                  @else
                  {{$Profile->app_purpose}}
                  @endif
                </p>
                <p>Scheduled Date & Time: {{$Profile->app_date}} at {{$Profile->app_time}}</p>
                <p>Status: {{$Profile->app_status}}</p>
                <p>Created by: {{$Profile->app_assisted_by}}</p>
                <p>Employee ID: {{$Profile->emp_id_no}}</p>
              </div>

              <form action="{{url('admin/appointment/decline')}}" method="post">
                @csrf
               <div id="decline-form" class="d-none">
                <label for="">Write your reasons why you want to decline the request.</label>
                <input type="hidden" name="app_id" value="{{$Profile->app_id}}">
                <textarea name="app_reason_decline" class="form-control"cols="10" rows="5" placeholder="Write here..."></textarea>
               </div>
            </div>

         
          </div>
          <div id="decline-footer-form d-flex justify-content-end" class="card-footer">
            @if($Profile->app_status=="Pending")
            <button type="submit" id="btn-decline-submit" class="d-none btn btn-success">Decline</button>
            <button id="btn-cancel-decline" class="btn btn-danger mx-2 d-none">Cancel</button>
            @endif
          </form>
          </div>
          





          <div id="appointment-edit" class="card-body d-none">
            <form action="{{url('admin/appointment/update')}}" method="post">
            <div class="row">
              @csrf

              <input type="hidden" name="app_id" value="{{$Profile->app_id}}">
              <input type="hidden" value="{{session('Admin')['emp_id_no']}}" name="emp_id_no">
              <input type="hidden" value=" {{session('Admin')['emp_role']}} {{session('Admin')['emp_mname']}} {{session('Admin')['emp_lname']}} " name="app_assisted_by">
              <div class="col-md-4">
                <label for="">First Name</label>
                <input type="text" name="app_fname" value="{{$Profile->app_fname}}" class="@error('app_fname') is-invalid @enderror form-control" placeholder="ex.Juan">
                @error('app_fname')
                <span class="text-danger">{{$message}}</span>
                @enderror 
              </div>
              <div class="col-md-4">
                <label for="">Middle Name</label>
                <input type="text" name="app_mname" value="{{$Profile->app_mname}}" class="@error('app_mname') is-invalid @enderror form-control"  placeholder="ex.Dela">
                @error('app_mname')
                <span class="text-danger">{{$message}}</span>
                @enderror
              </div>
              <div class="col-md-4">
                <label for="">Last Name</label>
                <input type="text" name="app_lname" value="{{$Profile->app_lname}}" class="@error('app_lname') is-invalid @enderror form-control" placeholder="ex.Cruz">
                @error('app_lname')
                <span class="text-danger">{{$message}}</span>
                @enderror
              </div>
            </div>
            <div class="row">
              <div class="col-md-3">
                <label for="">Age</label>
                <input type="text" name="app_age" value="{{$Profile->app_age}}" class="@error('app_age') is-invalid @enderror form-control"  placeholder="ex.20">
                @error('app_age')
                <span class="text-danger">{{$message}}</span>
                @enderror
              </div>
              <div class="col-md-3">
                <label for="">Gender</label>
                <select type="text" name="app_gender" value="{{$Profile->app_gender}} class="@error('app_gender') is-invalid @enderror form-control">
                  <option value="{{$Profile->app_gender}}">{{$Profile->app_gender}}</option>
                  <option value="">-select-</option>
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
                </select>
                @error('app_gender')
                <span class="text-danger">{{$message}}</span>
                @enderror
              </div>
              <div class="col-md-3">
                <label for="">Municipality</label>
                <select name="app_municipal" class="@error('app_municipal') is-invalid @enderror form-control" value="{{$Profile->app_municipal}}">
                  <option value="{{$Profile->app_municipal}}">{{$Profile->app_municipal}}</option>
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
                @error('app_municipal')
                <span style="color:red">{{$message}}</span>
                @enderror
              </div>
              <div class="col-md-3">
                <label for="">Barangay</label>
                <input type="text" name="app_barangay" value="{{$Profile->app_barangay}}" class="@error('app_barangay') is-invalid @enderror form-control"  placeholder="ex.Kalinisan">
                @error('app_barangay')
                <span class="text-danger">{{$message}}</span>
                @enderror
              </div>

            </div>
            <div class="row">
              <div class="col-md-3">
                <label for="">Purpose</label>
                <select name="app_purpose" id="purpose" class="@error('app_purpose') is-invalid @enderror form-control" value="{{$Profile->app_purpose}}">
                  <option value="{{$Profile->app_purpose}}">{{$Profile->app_purpose}}</option>
                  <option value="">-select-</option>
                  <option value="Training">Training</option>
                  <option value="Membership">Membership</option>
                  <option value="Blood Donation">Blood Donation</option>
                  <option value="Fund Donation">Fund Donation</option>
                  <option value="Others">Others</option>
                </select>
                @error('app_purpose')
                <span style="color:red">{{$message}}</span>
                @enderror
              </div>
              <div class="col-md-3">
                <label for="">Date</label>
                <input type="date" name="app_date"value="{{$Profile->app_date}}"class="@error('app_date') is-invalid @enderror form-control"  placeholder="ex.Dela">
                @error('app_date')
                <span class="text-danger">{{$message}}</span>
                @enderror
              </div>
              <div class="col-md-3">
                <label for="">Time</label>
                <select type="text" name="app_time" value="{{$Profile->app_time}}" class="@error('app_time') is-invalid @enderror form-control">
                  <option value="{{$Profile->app_time}}">{{$Profile->app_time}}</option>
                  <option value="">-select-</option>
                  <option value="8:30 AM">8:30 AM</option>
                  <option value="9:00 AM">9:00 AM</option>
                  <option value="9:30 AM">9:30 AM</option>
                  <option value="10:00 AM">10:00 AM</option>
                  <option value="10:30 AM">10:30 AM</option>
                  <option value="11:00 AM">11:00 AM</option>
                  <option value="11:30 AM">11:30 AM</option>
                  <option value="1:00 PM">1:00 PM</option>
                  <option value="1:30 PM">1:30 PM</option>
                  <option value="2:00 PM">2:00 PM</option>
                  <option value="2:30 PM">2:30 PM</option>
                  <option value="3:00 PM">3:00 PM</option>
                  <option value="3:30 PM">3:30 PM</option>
                  <option value="4:30 PM">4:30 PM</option>
                </select>
                @error('app_time')
                <span class="text-danger">{{$message}}</span>
                @enderror
              </div>
              <div class="col-md-3">
                <label for="">Status</label>
                <select type="text" name="app_status" class="@error('app_status') is-invalid @enderror form-control">
                  <option value="{{$Profile->app_status}}">{{$Profile->app_status}}</option>
                  <option value="">-select-</option>
                  <option value="Approved">Approved</option>
                  <option value="Pending">Pending</option>
                  <option value="Ongoing">Ongoing</option>
                </select>
                @error('app_status')
                <span class="text-danger">{{$message}}</span>
                @enderror
              
              </div>
            </div>
            <div id="Others" class="row d-none" >
              <label for="">Write your purpose</label>
              <div class="col-md-12" >
                <textarea name="app_other_reason" value="{{$Profile->app_other_reason}}" class="form-control"  cols="10" rows="5"></textarea>
              </div>
            </div>

          </div>
          <div id="update-footer-form" class="card-footer">
            <div class="d-flex justify-content-end">
            @if($Profile->app_status=="Ongoing")
            <a href="{{url('admin/appointment/finish',['app_id'=>$Profile->app_id])}}" class="btn btn-success mx-3 ">Finish</a>
            <a href="{{url('admin/appointment/delete',['app_id'=>$Profile->app_id])}}" class="btn btn-danger">Delete</a>
            <a href="{{url('admin/appointment')}}" class="btn btn-primary mx-3">Back</a>
            @elseif($Profile->app_status=="Done")
            <a href="{{url('admin/appointment/delete',['app_id'=>$Profile->app_id])}}" class="btn btn-danger">Delete</a>
            <a href="{{url('admin/appointment')}}" class="btn btn-primary mx-3">Back</a>

            @elseif($Profile->app_status=="Approved")
            <button id="btn-approved-edit-appointment" class="btn btn-warning">Edit</button>
            <a href="{{url('admin/appointment/proceed',['app_id'=>$Profile->app_id])}}" id="btn-proceed" class="btn btn-success mx-3 ">Proceed</a>
            <button type="submit" id="btn-update-submit" class="d-none btn btn-success mx-2">Update</button>
            <a href="{{url('admin/appointment/delete',['app_id'=>$Profile->app_id])}}" class="btn btn-danger">Delete</a>
            <a href="{{url('admin/appointment')}}" class="btn btn-primary mx-3">Back</a>


            @elseif($Profile->app_status=="Cancelled")
            <a href="{{url('admin/appointment/delete',['app_id'=>$Profile->app_id])}}" class="btn btn-danger">Delete</a>
            <a href="{{url('admin/appointment')}}" class="btn btn-primary mx-3">Back</a>

            @elseif($Profile->app_status=="Declined")
            <a href="{{url('admin/appointment/delete',['app_id'=>$Profile->app_id])}}" class="btn btn-danger">Delete</a>
            <a href="{{url('admin/appointment')}}" class="btn btn-primary mx-3">Back</a>

            @elseif($Profile->app_status=="Pending")
            <button class="btn btn-warning" id="btn-pending-edit-appointment">Edit</button>
            <a href="{{url('admin/appointment/approve',['app_id'=>$Profile->app_id])}}" id="btn-approved" class="btn btn-success mx-3 ">Approved</a>

            <button type="submit" id="btn-update-submit" class="d-none btn btn-success">Update</button>
            <a href="{{url('admin/appointment')}}" class="btn btn-primary mx-3">Back</a>

          </form>
            <a href="" id="btn-decline" class="btn btn-danger">Decline</a>

            <button id="btn-cancel-update" class="btn btn-danger mx-2 d-none">Cancel</button>
            @endif
            </div>
         

        </div>
      </div>


    </div><!-- /.container-fluid -->



  </section>
  <!-- /.content -->
</div>
<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
<script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script>
  $(document).ready(function () {
    
    $('#appointment').addClass('active');
    $('#purpose').change(function (e) { 
      e.preventDefault();
      var selectother=$(this).val();
    if(selectother =="Others")
      {
        $('#Others').removeClass('d-none');
        $('#Others').addClass('block');
      }
      else
      {
        $('#Others').addClass('d-none');
      }
    });
    $('#create-btn').click(function (e) { 
      e.preventDefault();
      $('#create-form').removeClass('d-none');
      $('#appointments-card').removeClass('col-md-12');
      $('#appointments-card').addClass('col-md-7');
      $('#waiting-footer').addClass('d-none');
        $('#create-form').addClass('col-md-5 block');
    });
    $('#close-btn').click(function (e) { 
      e.preventDefault();
      $('#create-form').addClass('d-none');
      $('#appointments-card').addClass('col-md-12');
      $('#waiting-footer').removeClass('d-none');
        $('#create-form').addClass('d-none');
    });
    $('#btn-decline').click(function (e) { 
      e.preventDefault();
      $('#decline-form').removeClass('d-none');
      $('#btn-decline-submit').removeClass('d-none');
      $('#btn-decline-submit').addClass('block');
      $('#btn-cancel-decline').removeClass('d-none');
      $('#btn-cancel-decline').addClass('block');
      $('#decline-form').addClass('block');
      $('#btn-approved').addClass('d-none ');
      $('#btn-decline').addClass('d-none ');
      $('#btn-edit-appointment').addClass('d-none ');
      $('#btn-pending-edit-appointment').addClass('d-none ');
      $('#decline-footer-form').removeClass('d-none');

      
    });
    $('#btn-cancel-decline').click(function (e) { 
      e.preventDefault();
      $('#decline-form').addClass('d-none');
      $('#btn-decline-submit').addClass('d-none');
      $('#btn-cancel-decline').addClass('d-none');
      $('#btn-approved').removeClass('d-none ');
      $('#btn-decline').removeClass('d-none ');
      $('#btn-pending-edit-appointment').removeClass('d-none ');

      
    });
    $('#btn-pending-edit-appointment').click(function (e) { 
      e.preventDefault();
      $('#appointment-details').addClass('d-none');
      $('#appointment-edit').removeClass('d-none');
      $('#btn-decline').addClass('d-none ');
      $('#btn-decline-submit').addClass('d-none ');
      $('#btn-update-submit').removeClass('d-none ');
      $('#btn-update-submit').addClass('block');
      $('#btn-pending-edit-appointment').addClass('d-none ');
      $('#btn-cancel-update').addClass('block ');
      $('#btn-cancel-update').removeClass('d-none ');
      $('#btn-approved').addClass('d-none ');  
    });
    $('#btn-approved-edit-appointment').click(function (e) { 
      e.preventDefault();
      $('#appointment-details').addClass('d-none');
      $('#appointment-edit').removeClass('d-none');
      $('#btn-decline').addClass('d-none ');
      $('#btn-decline-submit').addClass('d-none ');
      $('#btn-update-submit').removeClass('d-none ');
      $('#btn-update-submit').addClass('block');
      $('#btn-pending-edit-appointment').addClass('d-none ');
      $('#btn-cancel-update').addClass('block ');
      $('#btn-cancel-update').removeClass('d-none ');
      $('#btn-approved').addClass('d-none ');  
      $('#btn-proceed').addClass('d-none ');   
    });
    $('#btn-cancel-update').click(function (e) { 
      e.preventDefault();
      $('#appointment-details').removeClass('d-none');
      $('#appointment-edit').addClass('d-none');
      $('#btn-decline').removeClass('d-none ');
      $('#btn-decline-submit').addClass('d-none ');
      $('#btn-update-submit').addClass('d-none ');
      $('#btn-pending-edit-appointment').removeClass('d-none ');
      $('#btn-cancel-update').addClass('d-none ');
      $('#btn-approved').removeClass('d-none ');  

    });
    
  });


</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.js"></script>
{{-- <script src="{{asset('admin/js/membership.js')}}"> --}}



@endsection