<title>Red Cross | Dashboard</title>
<link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
<script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

@extends('admin.layout.layout')
@section('admin-volunteer')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

  
  <!-- Main content -->
  <section class="content mt-2">
    <div class="container-fluid">
      <div class="mx-auto" style="width:550px ">
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
      <div class="row">

        <div class="col-md-12  mt-2 ">
          <div class="card mx-auto" style="width:70%">
            <div class="card-body">
              <div class="col-md-12 border p-3">
               
                <h4 class=" text-center text-primary my-3 border-success border-2">Personal Information</h4>
                <div class="row">
                 <div class="d-flex justify-content-center py-5 ">
                  <img src="{{$Profile->vol_id_pic}}" class="rounded-circle " height="200px" width="200px" alt="">
                 </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <p><strong>First Name:</strong> {{$Profile->vol_fname}}</p>
                      </div>
                  <div class="col-md-4">
                    <p><strong>Middle Name:</strong> {{$Profile->vol_mname}}</p>
                      </div>
                  <div class="col-md-4">
                    <p><strong>Last Name:</strong> {{$Profile->vol_lname}}</p>
                      </div>
                </div>
                <div class="row ">
                  <div class="col-md-4">
                <p><strong>Age:</strong> {{$Profile->vol_age}}</p>
                  </div>
                  <div class="col-md-4">
                <p><strong>Gender:</strong> {{$Profile->vol_gender}}</p>
                  </div>
                  <div class="col-md-4">
                <p><strong>Birthday:</strong> {{$Profile->vol_birthday}}</p>
                  </div>
            

                </div>
                <div class="row">
                  <div class="col-md-4">
                <p><strong>Nationality:</strong> {{$Profile->vol_nationality}}</p>
                  </div>
                  <div class="col-md-4">
                <p><strong>Civil Status:</strong> {{$Profile->vol_civil_status}}</p>
                  </div>
                  <div class="col-md-4">
                <p><strong>Blood Type:</strong> {{$Profile->vol_blood_type}}</p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-3">
                    <p><strong>Email:</strong> {{$Profile->vol_email}}</p>
                      </div>
                </div>
                <h4 class="text-center text-primary my-3 border">Location & Contact</h4>
                <div class="row">
                  <div class="col-md-4">
                    <p><strong>Region:</strong> {{$Profile->vol_region}}</p>
                      </div>
                      <div class="col-md-4">
                        <p><strong>Province:</strong> {{$Profile->vol_province}}</p>
                        </div>
                      <div class="col-md-4">
                        <p><strong>Municipality:</strong> {{$Profile->vol_municipal}}</p>
                        </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <p><strong>Barangay:</strong> {{$Profile->vol_barangay}}</p>
                      </div>
                      <div class="col-md-4">
                        <p><strong>House No:</strong> {{$Profile->vol_house_no}}</p>
                        </div>
                      <div class="col-md-4">
                        <p><strong>Postal Code:</strong> {{$Profile->vol_postal_code}}</p>
                        </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <p><strong>Landline:</strong> {{$Profile->vol_landline}}</p>
                      </div>
                      <div class="col-md-4">
                        <p><strong>Contact No:</strong> {{$Profile->vol_phone_no}}</p>
                        </div>

                </div>
                <h4 class="text-center text-primary my-3 border">Profession</h4>

                <div class="row">
                  <div class="col-md-4">
                    <strong>Highest Educational Attainment?</strong>
                    <p> {{$Profile->vol_education_att}}</p>
                      </div>
                      <div class="col-md-4">
                        <strong>Are you still studying?</strong> 
                        <p>{{$Profile->vol_studying}}</p>
                        </div>
                      <div class="col-md-4">
                        <strong>School</strong> 
                        <p>{{$Profile->vol_school}}</p>
                        </div>

                </div>
                <div class="row">
                  <div class="col-md-4">
                    <strong>Course</strong>
                    <p> {{$Profile->vol_course}}</p>
                      </div>
                      <div class="col-md-4">
                        <strong>Are you still studying?</strong> 
                        <p>{{$Profile->vol_studying}}</p>
                        </div>
                      <div class="col-md-4">
                        <strong>Greade/Year Level</strong> 
                        <p>{{$Profile->vol_year_level}}</p>
                        </div>

                </div>
                <h4 class="text-center text-primary my-3 border">Volunteering PRC</h4>
                <div class="row">

                  <div class="col-md-6">
                    <strong>Have you ever been a volunteer of Philippine Red Cross before?</strong>
                    <p> {{$Profile->vol_been_volunteer}}</p>
                      </div>
                      <div class="col-md-6">
                        <strong>Are you still What Philippine Red Cross training or seminars have you completed, if any??</strong> 
                        <p>{{$Profile->vol_been_completed_redcross_seminar}}</p>
                        </div>
                

                </div>
                <div class="row">

                  <div class="col-md-6">
                    <strong>Greade/Which Philippine Red Cross Service/s would you like to be involved with?</strong> 
                    <p>{{$Profile->vol_services_like_to_involve}}</p>
                    </div>
                  <div class="col-md-6">
                    <strong>
                      Are you willing to donate blood?</strong>
                    <p> {{$Profile->vol_willing_to_donate_blood}}</p>
                      </div>

                </div>
                <div class="row">

                  <div class="col-md-6">
                    <strong>How long do you intend to be a PRC Volunteer?</strong> 
                    <p>{{$Profile->vol_long_intend_in_prc}}</p>
                    </div>
                  <div class="col-md-6">
                    <strong>What time of the day are you usually available as a PRC Volunteer?</strong>
                    <p> {{$Profile->vol_day_your_free}}</p>
                      </div>

                </div>
                <div class="row">

                  <div class="col-md-6">
                    <strong>What day of the week will you be available as a PRC Volunteer?</strong> 
                    <p>{{$Profile->vol_day_your_free}}</p>
                    </div>
                  <div class="col-md-6">
                    <strong>What time of the day are you usually available as a PRC Volunteer??</strong>
                    <p> {{$Profile->vol_time_your_free}}</p>
                      </div>

                </div>
                <div class="row">

                  <div class="col-md-6">
                    <strong>Where did you learn about the volunteering opportunities in the Philippine Red Cross?</strong> 
                    <p>{{$Profile->vol_where_get_to_know_volunteering}}</p>
                    </div>
                  <div class="col-md-6">
                    <strong>We are glad that you have shown significant interest in helping Philippine Red Cross' causes. Kindly state your reasons for wanting to volunteer with the Philippine Red Cross.</strong>
                    <p> {{$Profile->vol_reason_why_become_volunteer}}</p>
                      </div>

                </div>
                <div class="d-flex justify-content-center">
                  <a href="" class="btn btn-success">Print</a>
                  <a href="{{url('admin/volunteer/edit',['vol_id'=>$Profile->vol_id])}}" class="btn btn-warning mx-3">Edit</a>
                  <a href="{{url('admin/volunteer/delete',['vol_id'=>$Profile->vol_id])}}" class="btn btn-danger">Delete</a>
                  <a href="{{url('admin/volunteer')}}" class="btn btn-primary mx-3">Back</a>
                 </div>
              </div>
            </div>
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
    $('#volunteer').addClass('active');
  });
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.js"></script>
{{-- <script src="{{asset('admin/js/membership.js')}}"> --}}



@endsection