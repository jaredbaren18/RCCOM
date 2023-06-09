<title>Red Cross | Dashboard</title>
<link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
<script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

@extends('admin.layout.layout')
@section('admin-volunteer')
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
        <div class="col-md-12 ">
        <div class="card volunteer"></div>
        </div>
      </div>
      <div class="col-md-12  ">
        <div class="card bg-danger">
          <div class="card-body ">
            <div class="row">
              <div class="col-md-6 text-center">
                <h3 class="">Overall Registered Volunteer</h3>
                <h1>{{$Volunteers_Count}}</h1>
              </div>
              <div class="col-md-6 text-center">
                <h3 class="">Pending Applications</h3>
                <h1>{{$Pendings_Count}}</h1>
              </div>
            </div>
          </div>
        </div>
      </div>


      <div class="row">
        <div class="col-md-7">
         <div class="card">
          <div class="card-header text-center">
            <h4>Municipalities</h4>
    
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-md-12">
                <table id="volunteer-table-activated">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Municipal</th>
                      <th>Name</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($Activated as $activated)
                        <tr>
                          <td>{{$activated->vol_id}}</td>
                          <td>{{$activated->vol_municipal}}</td>
                          <td>{{$activated->vol_fname}} {{$activated->vol_mname}} {{$activated->vol_lname}}</td>
                          <td><a href="{{url('admin/volunteer/profile',['vol_id'=>$activated->vol_id])}}" class="btn btn-warning">View</a></td>
                        </tr>
      
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
         </div>


        </div>
        <div class="col-md-5">
          <div class="card">
            <div class="card-header text-center">
            <h5>Request Applications</h5>
            </div>
            <div class="card-body">
              <table id="volunteer-table">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Municipal</th>
                    <th>Name</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($Pending as $pending)
                      <tr>
                        <td>{{$pending->vol_id}}</td>
                        <td>{{$pending->vol_municipal}}</td>
                        <td>{{$pending->vol_fname}} {{$pending->vol_mname}} {{$pending->vol_lname}}</td>
                          <td><a href="{{url('admin/volunteer/profile',['vol_id'=>$pending->vol_id])}}" class="btn btn-warning">View</a></td>
                      </tr>
    
                  @endforeach
                </tbody>
              </table>
            </div>
           </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 d-flex justify-content-end fixed-bottom my-3">
          <a href="{{url('admin/volunteer/add')}}" class=" btn btn-primary mx-2">Add Volunteer</a>
          <button type="button" class="btn btn-success">Export</button>
          <button type="button" class="btn btn-success mx-2">Print</button>
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