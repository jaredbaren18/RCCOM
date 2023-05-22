<title>Red Cross | Dashboard</title>
<link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
<script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
@extends('admin.layout.layout')
@section('admin-appointment-setter')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
 
  
  <!-- Main content -->
  <section class="content mt-5 pt-3">
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
      <div class="row">
        <div class="col-md-12 ">
          <div class="card appointment"></div>
        </div>
      </div>
      <div id="appointments-card" class="col-md-12">
        <div class="card">
          <div class="card-header text-center bg-success"><h5>Scheduled Appointments</h5></div>
          <div class="card-body">
            <div class="row">
              <div class="col-md-12 text-center">
               
                
                @forelse($Ongoing as $ongoing)
                <h6 class="text-danger">Ongoing Appointment</h6>
              @if($ongoing->app_gender=="Male")
              <a href="{{url('admin/appointment/profile',['app_id'=>$ongoing->app_id])}}" class="nav-link text-primary"><h3>Mr. {{$ongoing->app_fname}} {{$ongoing->app_mname}} {{$ongoing->app_lname}} of {{$ongoing->app_municipal}}</h3></a>
              {{$ongoing->app_time}}
              @elseif($ongoing->app_gender=="Female")
              <a href="{{url('admin/appointment/profile',['app_id'=>$ongoing->app_id])}}" class="nav-link text-primary"><h3>Ms. {{$ongoing->app_fname}} {{$ongoing->app_mname}} {{$ongoing->app_lname}} of {{$ongoing->app_municipal}}</h3></a>
              {{$ongoing->app_time}}
              @endif
              @empty
              <h6 class="text-danger">Ongoing Appointment</h6>
              <p>No  ongoing meethings as of now.</p>
              @endforelse
              </div>
            </div>
            <div class="row mt-3">
              <div class="col-md-8 text-center">
                <div class="row">
                  <div class="col-md-12">
                    <div class="card">
                      <div class="card-header">
                        <h6 class="text-success">Next Appointment</h6>
                      </div>
                      <div class="card-body">
                        
                        @forelse($Next as $next)
                        @if($next->app_gender=="Male")
                        <div class="d-flex justify-content-center pt-2">
                          <h4><a href="{{url('admin/appointment/profile',['app_id'=>$next->app_id])}}" class="nav-link text-secondary"><p>Mr.{{$next->app_lname}} of {{$next->app_municipal}}</p></a></h4>
                         ( {{$next->app_time}})
                         </div>
                        @elseif($next->app_gender=="Female")
                       <div class="d-flex justify-content-center pt-2">
                        <h4><a href="{{url('admin/appointment/profile',['app_id'=>$next->app_id])}}" class="nav-link text-secondary"><p>Ms.{{$next->app_lname}} of {{$next->app_municipal}}</p></a></h4>
                       ( {{$next->app_time}})
                       </div>
                        @endif
                        <a href="{{url('admin/appointment/proceed',['app_id'=>$next->app_id])}}" class="btn btn-success">Proceed</a>
                        @empty
                        <p>No approved appointments</p>
                           @endforelse
                      </div>
                    </div>
                  </div>
                </div>
              
                <div class="row">
                  <div class="col-md-12">
                    <div class="card">
                      <div class="card-header">
                        <h6 class="text-success">Pending Appointment Request</h6>
                      </div>
                      <div class="card-body">
                        
                       
                        <table id="appointment-table" class="overflow-auto">
                      <thead>
                        <tr>
                          <th>Date</th>
                          <th>Time</th>
                          <th>Name</th>
                          <th>Action</th>
                         </tr>
                      </thead>
                 <tbody>
                  @foreach($Approved as $app)
                  <tr>
                   <td>{{$app->app_date}}</td>
                   <td>{{$app->app_time}}</td>
                   <td>{{$app->app_fname}} {{$app->app_mname}} <{{$app->app_lname}}/td>
                   <td><a href="{{url('admin/appointment/profile',['app_id'=>$app->app_id])}}" class="btn btn-warning">View</a></td>
                  </tr>
                   @endforeach
                 </tbody>
                        </table>
                          
                      </div>
                    </div>
                  </div>
                </div>
              
              </div>
              <div class="col-md-4 text-center overflow-auto">
                <div class="card">
                  <div class="card-header">
                    <h6 class="text-primary">Waiting</h6>
                  </div>
                  <div class="card-body">
                    
                    @forelse($Waiting as $wait)
                    @if($wait->app_gender=="Male")
                    <div class="d-flex justify-content-center">
                      <a href="{{url('admin/appointment/profile',['app_id'=>$wait->app_id])}}" class="nav-link text-secondary"><p>Mr.{{$wait->app_lname}} of {{$wait->app_municipal}}</p></a>
                     </div>
                    @elseif($wait->app_gender=="Female")
                   <div class="d-flex justify-content-center">
                    <a href="{{url('admin/appointment/profile',['app_id'=>$wait->app_id])}}" class="nav-link text-secondary"><p>Ms.{{$wait->app_lname}} of {{$wait->app_municipal}}</p></a>
                   </div>
                    @endif
                    @empty
                    <p>No approved appointments</p>
                       @endforelse
                  </div>
                  <div id="waiting-footer" class="card-footer">
                    <button id="create-btn" class="btn btn-primary ">Set Appointment</button>
                  </div>
                </div>
            </div>
            </div>
         
          </div>

        </div>
      </div>
      <div id="create-form" class="col-md-5 d-none">
        <div class="card">
          <div class="card-header">
            <h4>Create Meeting</h4>
          </div>
          <div class="card-body">
            <form action="{{url('admin/appointment/create')}}" method="post">
            <div class="row">
              @csrf

              <input type="hidden" value="{{session('Admin')['emp_id_no']}}" name="emp_id_no">
              <input type="hidden" value=" {{session('Admin')['emp_role']}} {{session('Admin')['emp_mname']}} {{session('Admin')['emp_lname']}} " name="app_assisted_by">
              <div class="col-md-4">
                <label for="">First Name</label>
                <input type="text" name="app_fname" value="{{old('app_fname')}}" class="@error('app_fname') is-invalid @enderror form-control" placeholder="ex.Juan">
                @error('app_fname')
                <span class="text-danger">{{$message}}</span>
                @enderror 
              </div>
              <div class="col-md-4">
                <label for="">Middle Name</label>
                <input type="text" name="app_mname" value="{{old('app_mname')}}" class="@error('app_mname') is-invalid @enderror form-control"  placeholder="ex.Dela">
                @error('app_mname')
                <span class="text-danger">{{$message}}</span>
                @enderror
              </div>
              <div class="col-md-4">
                <label for="">Last Name</label>
                <input type="text" name="app_lname" value="{{old('app_lname')}}" class="@error('app_lname') is-invalid @enderror form-control" placeholder="ex.Cruz">
                @error('app_lname')
                <span class="text-danger">{{$message}}</span>
                @enderror
              </div>
            </div>
            <div class="row">
              <div class="col-md-3">
                <label for="">Age</label>
                <input type="text" name="app_age" value="{{old('app_age')}}" class="@error('app_age') is-invalid @enderror form-control"  placeholder="ex.20">
                @error('app_age')
                <span class="text-danger">{{$message}}</span>
                @enderror
              </div>
              <div class="col-md-3">
                <label for="">Gender</label>
                <select type="text" name="app_gender" value="{{old('app_gender')}}" class="@error('app_gender') is-invalid @enderror form-control">
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
                <select name="app_municipal" class="@error('app_municipal') is-invalid @enderror form-control" value="{{old('app_municipal')}}">
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
                <input type="text" name="app_barangay" value="{{old('app_barangay')}}" class="@error('app_barangay') is-invalid @enderror form-control"  placeholder="ex.Kalinisan">
                @error('app_barangay')
                <span class="text-danger">{{$message}}</span>
                @enderror
              </div>

            </div>
            <div class="row">
              <div class="col-md-3">
                <label for="">Purpose</label>
                <select name="app_purpose" id="purpose" class="@error('app_purpose') is-invalid @enderror form-control" value="{{old('app_purpose')}}">
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
                <input type="date" name="app_date" value="YYYY-MM-DD" class="@error('app_date') is-invalid @enderror form-control"  placeholder="ex.Dela">
                @error('app_date')
                <span class="text-danger">{{$message}}</span>
                @enderror
              </div>
              <div class="col-md-3">
                <label for="">Time</label>
                <select type="text" name="app_time" value="{{old('app_time')}}" class="@error('app_time') is-invalid @enderror form-control">
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
                <select type="text" name="app_status" value="{{old('app_status')}}" class="@error('app_status') is-invalid @enderror form-control">
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
                <textarea name="app_other_reason" class="form-control"  cols="10" rows="5"></textarea>
              </div>
            </div>

          </div>
          <div class="card-footer ">
            <div class="row">
              <div class="col-md-12 d-flex justify-content-end">
                <button type="submit" class="btn btn-success px-5">Set now!</button>
                <a href="" id="close-btn" class="px-5 mx-2 btn btn-danger">Close</a>
              </div>
            </div>
          
          </div>
        </form>
        </div>
      </div>
      
     </div>
     <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header text-center bg-secondary">
            <h5>Accomplish & Unaccomplish Meetings</h5>
          </div>
          <div class="card-body">
              
            <table id="appointment-table-meetings">
              <thead>
                <tr>
                  <th>Date</th>
                  <th>Time</th>
                  <th>Name</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($Meetings as $meet)
                <tr>
                  <td>{{$meet->app_date}}</td>
                  <td>{{$meet->app_time}}</td>
                  <td>{{$meet->app_fname}} {{$meet->app_mname}} {{$meet->app_lname}}</td>
                  @if($meet->app_status=="Done")
                  <td class="text-success">{{$meet->app_status}}</td>
                  @else
                  <td class="text-danger">{{$meet->app_status}}</td>
                  @endif
                  <td><a href="{{url('admin/appointment/profile',['app_id'=>$meet->app_id])}}" class="btn btn-secondary">Details</a></td>
                </tr>
                @endforeach
              </tbody>
            </table>
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


  });


</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.js"></script>
{{-- <script src="{{asset('admin/js/membership.js')}}"> --}}



@endsection