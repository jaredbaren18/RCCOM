<title>Red Cross | Dashboard</title>
<link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
<script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
@extends('admin.layout.layout')
@section('admin-fund-donation')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">


 
  <div class="content mt-5 pt-3">
    <div class="containter-fluid">
      @if(session('success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>{{session('success')}}</strong> 
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      
      @elseif(session('failed'))
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>{{session('failed')}}</strong> 
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      
      @endif

      <div class="col-md-12">
        <div class="card">
          <img src="{{asset('admin/images/cbg.png')}}" id="CF" alt="">
        </div>
      </div>
   <div class="row">
    <div class="col-md-8">
      <div class="card px-3 ml-2">
        <div class="card-body">
          <div class="row">
            <div class="col-md-6 text-center">
                <div class="card bg-danger">
                  Total Donations
                  <h1>{{$Donations}}</h1>
                </div>
             
            </div>
            <div class="col-md-3 text-center">
              <div class="card bg-primary">
                Highest Donation
                <h1>{{$HD}}</h1>
              </div>
            </div>
            <div class="col-md-3 text-center">
            
            <div class="card bg-info text-white">
              Donators Count
            <h1>{{$Validated_Count}}</h1>
            </div>
            </div>
          
          </div>

        </div>
      </div>
      <div class="card">
        <div class="card-header text-center bg-primary text-white">
          Pending Donations
        </div>
        <div class="card-body">
          <table id="pending-donation-table">
            <thead>
            <tr>
              <th>No.</th>
              <th>Full Name</th>
              <th>Municipal</th>
              <th>Actions</th>
            </tr>
            </thead>
            <tbody>
              @foreach($Pending as $pending)
              <tr>
                <td>{{$pending->don_id}}</td>
                <td>{{$pending->don_fname}} {{$pending->don_mname}} {{$pending->don_lname}}</td>
                <td>{{$pending->don_municipal}}</td>
                <td><a href="{{url('admin/donation/fund/profile',['don_id'=>$validated->don_id])}}" class=" btn btn-warning">View</a></td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card">
        <div class="card-header text-center text-white bg-success">
          Validated Donations
        </div>
        <div class="card-body">
          <table id="donation-table">
            <thead>
            <tr>
              <th>No.</th>
              <th>Full Name</th>
              <th>Municipal</th>
              <th>Actions</th>
            </tr>
            </thead>
            <tbody>
              @foreach($Validated as $validated)
              <tr>
                <td>{{$validated->don_id}}</td>
                <td>{{$validated->don_fname}} {{$validated->don_mname}} {{$validated->don_lname}}</td>
                <td>{{$validated->don_municipal}}</td>
                <td><a href="{{url('admin/donation/fund/profile',['don_id'=>$validated->don_id])}}" class=" btn btn-warning">View</a></td>
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
      <a href="{{url('admin/donation/fund/add')}}" class="btn btn-primary d-flex justify-content-center mx-2">Add Donations</a>
      <button type="button" class="btn btn-success">Export</button>
      <button type="button" class="btn btn-success mx-2">Print</button>
      <button type="button" class="btn btn-success">More</button>
    </div>
   </div>
   
   
    </div>
  </div>



  </section>
  <!-- /.content -->
</div>
<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
<script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script>
  $(document).ready(function () {
    $('#fund-donations').addClass('active');
    $('#donationbtn').addClass('active');
    $('#donations').show();
  });
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.js"></script>
{{-- <script src="{{asset('admin/js/membership.js')}}"> --}}



@endsection