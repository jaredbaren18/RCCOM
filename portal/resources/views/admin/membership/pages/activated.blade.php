<title>Red Cross | Dashboard</title>
<link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
<script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
@extends('admin.layout.layout')
@section('admin-membership-activated')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <a href="{{url('admin/membership')}}">Back</a>
          <h1 class="m-0">Activated Memberships</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Home</a></li>
            <li class="breadcrumb-item active"><a href="{{url('admin/membership')}}">Membership</a></li>
            <li class="breadcrumb-item active"><a href="{{url('admin/membership/activated')}}">Activated</a></li>

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
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-info">
            <div class="inner">
              <h3>{{$Sales}}</h3>

              <p>Sales</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-success">
            <div class="inner">
              <h3>{{$Activated_Count}}<sup style="font-size: 20px"></sup></h3>

              <p>Activated</p>
            </div>
            <div class="icon">
              <i class="ion ion-person"></i>
            </div>
            <a href="{{url('admin/membership/activated')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-warning">
            <div class="inner">
              <h3>{{$Pending}}</h3>

              <p>Pending</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="{{url('admin/membership/pending')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-danger">
            <div class="inner">
              <h3>{{$Expired}}</h3>

              <p>Expired</p>
            </div>
            <div class="icon">
              <i class="ion ion-person"></i>
            </div>
            <a href="{{url('admin/membership/expired')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- Small boxes (Stat box) -->
      <div class="card">
        <div class="card-header text-left d-flex flex-row">
          <a href="{{url('admin/membership/create-new')}}" class="btn btn-primary">New Membership</a>
          <div class="dropdown">
            <button class="btn btn-primary dropdown-toggle mx-3" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             Activated
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="{{url('/admin/membership')}}">Overview</a>
              <a class="dropdown-item" href="{{url('admin/membership/pending')}}">Pending</a>
              <a class="dropdown-item" href="{{url('admin/membership/declined')}}">Declined</a>
              <a class="dropdown-item" href="{{url('admin/membership/expired')}}">Expired</a>
            </div>
          </div>
          
          {{-- <a href="{{url('admin/membership/addnew')}}" class="btn btn-primary text-left">New Membership</a>      --}}
        </div>
        @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>{{session('success')}}</strong> 
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        
        @elseif(session('failed'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>{{session('failed')}}</strong> 
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        
        @endif
        <!-- /.card-header -->
        <div class="card-body overflow-auto">
          
          <table id="membership-table">
            <thead>
            <tr>
              <th>No.</th>
              <th>Membership ID</th>
              <th>Name</th>
              <th>Municipal</th>
              <th>Status</th>
              <th>Actions</th>
            </tr>
            </thead>
            <tbody> 
              @php
                  $no=1;
              @endphp
              @foreach($Activated as $activated)
           @php
              $no+=1;
           @endphp
        <tr>
          <td>{{$no++}}</td>
          <td>{{$activated->mem_id_no}}</td>
          <td>{{$activated->mem_fname}} {{$activated->mem_mname}} {{$activated->mem_lname}}</td>
          <td>{{$activated->mem_municipal}}</td>
          <td>{{$activated->mem_status}}</td>
          <td><a href="{{url('admin/membership/profile',['mem_id'=>$activated->mem_id])}}"class="btn btn-success">View</a></td>

        </tr>
              @endforeach
            </tbody>
            <tfoot>
            <tr>

            </tr>
            </tfoot>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
    </div><!-- /.container-fluid -->



  </section>
  <!-- /.content -->
</div>
<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
<script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script>
  $(document).ready(function () {
    $('#membership').addClass('active');
  });
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.js"></script>
{{-- <script src="{{asset('admin/js/membership.js')}}"> --}}


@endsection