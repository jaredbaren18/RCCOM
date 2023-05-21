<title>Red Cross | Dashboard</title>
@extends('admin.layout.layout')
@section('admin-membership')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  
  <!-- Main content -->
  <section class="content">
    <div class="container">
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
     
      <!-- Small boxes (Stat box) -->
      <div class="card">
        <div class="card-header">
          <h5>Information</h5>
        </div>
   <div class="card-body">
    <div class="row">
      <div class="col-md-6">
        <div class="row">
          <div class="col-md-6">
            <p>Full Name: {{$Don_Profile->don_fname}} {{$Don_Profile->don_mname}} {{$Don_Profile->don_lname}}</p>
            <p>Age: {{$Don_Profile->don_age}}</p>
            <p>Gender: {{$Don_Profile->don_gender}}</p>
            <p>Municipality: {{$Don_Profile->don_municipal}}</p>
            <p>Barangay: {{$Don_Profile->don_barangay}}</p>
            <p>Amount: {{$Don_Profile->don_amount}}</p>
            <p>Method: {{$Don_Profile->don_method}}</p>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="row">
          <div class="col-md-12">
            
            <p>Note: {{$Don_Profile->don_notes}}</p>
            <p>Proof:</p>
            <img src="{{$Don_Profile->don_proof}}" height="200px" alt="">
          </div>
        </div>
      </div>
    </div>
   </div>
 <div class="card-footer">
  <div class="col-md-12 d-flex justify-content-end">
    <a href="{{url('admin/donation/fund/acknowledgement',['don_id'=>$Don_Profile->don_id])}}" class="btn btn-success mx-2">Send Acknowlegement</a>
    <a href="{{url('admin/donation/fund')}}" class="btn btn-danger">Back</a>
  </div>
 </div>
        </div>
          </div>

        </div>
        <!-- /.card-body -->
      </div>
      
      <!-- /.card -->
      <!-- /.row (main row) -->
    </div>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
<script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script>
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
  $(document).ready(function () {
    $('#fund-donations').addClass('active');
    $('#donationbtn').addClass('active');
    $('#donations').show();
  });
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.js"></script>
  </section>
  
  <!-- /.content -->
</div>

@endsection