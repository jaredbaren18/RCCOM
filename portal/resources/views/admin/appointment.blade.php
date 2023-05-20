<title>Red Cross | Dashboard</title>
<link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
<script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
@extends('admin.layout.layout')
@section('admin-appointment')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Appointments Overview</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Home</a></li>
            <li class="breadcrumb-item active"><a href="{{url('admin/membership')}}">Appointments</a></li>
            <li class="breadcrumb-item active"><a href="{{url('admin/membership')}}">Overview</a></li>

          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  
  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card appointment"></div>
        </div>
      </div>
      <div class="card">
        <div class="col-md-12">
          <a href="" class="pg"><img id="pg" src="{{asset('admin/images/pg.jpg')}}" alt=""></a>
        </div>
        <div class="card-header text-left d-flex flex-row">
         <a href="{{url('admin/appointment/set')}}" class="btn btn-primary">Set Appointement</a>
          <div class="dropdown">
            <button class="btn btn-primary dropdown-toggle mx-3" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             Filter
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="{{url('admin/appointment')}}">Overview</a>
              <a class="dropdown-item" href="{{url('admin/appointment/approved')}}">Approved</a>
              <a class="dropdown-item" href="{{url('admin/appointment/pending')}}">Pending</a>
              <a class="dropdown-item" href="{{url('admin/appointment/ongoing')}}">On Going</a>
              <a class="dropdown-item" href="{{url('admin/appointment/finish')}}">Done</a>
              <a class="dropdown-item" href="{{url('admin/appointment/declined')}}">Decline</a>
            </div>
          </div>
          
        </div>
        <div class="card-body">
          <div class="row">
            @unless($All)
            <p>May record.</p>
 
            @else
           <p> No scheduled appointments</p>
            @endempty

          </div>
        </div>
        <div class="card-footer">

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
  });
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.js"></script>
{{-- <script src="{{asset('admin/js/membership.js')}}"> --}}



@endsection