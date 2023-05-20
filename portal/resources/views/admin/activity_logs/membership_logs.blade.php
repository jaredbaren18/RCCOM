
<title>Red Cross | Dashboard</title>
<link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
<script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
@extends('admin.layout.layout')
@section('admin-membership-logs')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <div class="preloader flex-column justify-content-center align-items-center">
    {{-- <img class="animation__shake" src="{{asset('admin/img/AdminLTELogo.png')}}" alt="AdminLTELogo" height="60" width="60"> --}}
    <h3 class="animation__shake text-red">Red Cross</h3>
  </div>
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Membership Activity Logs</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Home</a></li>
            <li class="breadcrumb-item active"><a href="{{url('admin/membership')}}">Membership</a></li>
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
     <div class="card">
      <div class="card-body">
        @php
        $c=1;
        @endphp
       <div class="row">
        <h6>Memberships Activity Information</h6>
       </div>
        @foreach($All_logs as $logs)
        <p>{{$c++}}. {{$logs->content}}.  (Date and Time: {{$logs->created_at}})</p>
        @endforeach
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
    $('#membership_logs').addClass('active');
    $('#activity_log_btn').addClass('active');
    $('#activity_logs_nav').show();
  });
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.js"></script>
{{-- <script src="{{asset('admin/js/membership.js')}}"> --}}



@endsection