<title>Red Cross | Dashboard</title>
@extends('admin.layout.layout')
@section('admin-membership')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

  
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
          <h3 class="card-title">Membership Information</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <div class="row">
            <div class="col-md-3">
              <!-- small box -->
              <p>Full Name: <em>{{$mem_profile->mem_fname}}  {{$mem_profile->mem_mname}} {{$mem_profile->mem_lname}}</em> </p>
              <p>Age: <em>{{$mem_profile->mem_age}}</em> </p>
              <p>Birthday: <em>{{$mem_profile->mem_birthday}}</em> </p>
              <p>Zip Code: <em>{{$mem_profile->mem_zipcode}}</em> </p>
              <p>Municipality: <em>{{$mem_profile->mem_municipal}}</em> </p>
              <p>Barangay: <em>{{$mem_profile->mem_barangay}}</em> </p>
              <p>Contact No: <em>{{$mem_profile->mem_contact_no}}</em> </p>
              <p>Email: <em>{{$mem_profile->mem_email}}</em> </p>
              </div>
              <div class="col-md-3">
                <!-- small box -->

                <p>Membership ID: <em>{{$mem_profile->mem_id_no}}</em> </p>
                <p>Type: <em>{{$mem_profile->mem_category}}</em> </p>
                <p>Status: <em>{{$mem_profile->mem_status}}</em> </p>
               @if($mem_profile->mem_status=="Declined")
               <p>Info in cancelation: <em>{{$mem_profile->mem_reason_decline}}</em> </p>
               @endif
                <p>Payment: <em>{{$mem_profile->mem_payment_method}}</em> </p>
                <p>Valid until: <em>{{$mem_profile->mem_start_at}}-{{$mem_profile->mem_end_at}}</em> </p>


                </div>
                <div class="col-md-3">
                <p>Proof of payment:</p>
                <img src="{{$mem_profile->mem_proof_payment}}" alt="payment" width="300px">

                </div>
             <!-- small box -->
          @if($mem_profile->mem_status =="Pending")
          <form id="mem_form" action="" method="POST">
            @csrf 
            <input type="hidden" name="mem_id" value="{{$mem_profile->mem_id}}">
            <input type="hidden" name="mem_email" value="{{$mem_profile->mem_email}}">
            <input type="hidden" name="mem_id_no" value="{{$mem_profile->mem_id_no}}">
            <input type="hidden" name="mem_fname" value="{{$mem_profile->mem_fname}}">
            <input type="hidden" name="mem_mname" value="{{$mem_profile->mem_mname}}">
            <input type="hidden" name="mem_lname" value="{{$mem_profile->mem_lname}}">
            <input type="hidden" name="mem_category" value="{{$mem_profile->mem_category}}">
            <input type="hidden" name="mem_price" value="{{$mem_profile->mem_price}}">
            <input type="hidden" name="incharge" value="{{session('Admin')['emp_fname'] }}{{session('Admin')['emp_mname']}} {{ session('Admin')['emp_lname']}}">
            <input type="hidden" name="decline_request_details" value="{{$mem_profile->mem_fname}} {{$mem_profile->mem_mname}} {{$mem_profile->mem_lname}}">
            <p>Put notes if you want to decline:</p>
             <textarea name="mem_reason_decline" cols="30" rows="3" placeholder="(Optional)"></textarea>   
                 
          @endif
            </div>
            <div class="card-footer d-flex justify-content-end ">
              @if($mem_profile->mem_status=="Activated")
              <a href="{{url('admin/membership/profile/delete',['mem_id'=>$mem_profile->mem_id])}}" onclick="confirmAction()" class="btn btn-danger my-2">Delete</a>
              <a href="{{url('admin/membership/profile/edit',['mem_id'=>$mem_profile->mem_id])}}" class="btn btn-primary my-2 mx-2">Edit</a>
              <a href="{{url('admin/membership/activated')}}" class="btn btn-primary my-2">Back</a>
              @elseif($mem_profile->mem_status=="Pending")
               @csrf
               <button class="btn btn-danger m-2" onclick="confirmDecline()" type="submit">Decline</button>
               <button class="btn btn-success m-2" onclick="confirmApprove()" type="submit">Approved</button>
               <a href="{{url('admin/membership/pending')}}" class="btn btn-primary">Back</a>
              </form>
              @elseif($mem_profile->mem_status=="Expired")
              <div class="">
              <a href="{{url('admin/membership/profile/edit',['mem_id'=>$mem_profile->mem_id])}}" class="btn btn-warning m-2">Renew</a>
              <a href="{{url('admin/membership/profile/delete',['mem_id'=>$mem_profile->mem_id])}}" class="btn btn-danger m-2" onclick="confirmAction()">Delete</a>
              <a href="{{url('admin/membership/expired')}}" class="btn btn-primary">Back</a></div>
            
            </div>
            @elseif($mem_profile->mem_status=="Decline")
            <div class="">
              <a href="{{url('admin/membership')}}" class="btn btn-primary m-2">Back</a></div>
              <form action="{{url('admin/membership/deleting')}}" method="post">
              @csrf 
              <input type="hidden" name="mem_id_no" value="{{$mem_profile->mem_id_no}}">
              <input type="hidden" name="incharge" value="{{session('Admin')['emp_fname'] }}{{session('Admin')['emp_mname']}} {{ session('Admin')['emp_lname']}}">
              <input type="hidden" name="decline_request_details" value="{{$mem_profile->mem_fname}} {{$mem_profile->mem_mname}} {{$mem_profile->mem_lname}}">
              <input type="submit" class="btn btn-danger m-2" value="Delete">
              <a href="{{url('admin/membership/declined')}}" class="btn btn-primary">Back</a>
        
        </form>
              @endif
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
    function confirmApprove() {
    if (confirm("Are you sure?")) {
      var form=document.getElementById("mem_form");
      var newAction = "{{url('admin/membership/profile/approve')}}"; // set the new action URL
        form.setAttribute('action',newAction); // change the form's action attribute change the form's action attribute
        form.submit(); //
      return true;
    } else {
      // Do nothing
      event.preventDefault();
      return false;
    }
  }
    function confirmDecline() {
    if (confirm("Are you sure?")) {
      var form=document.getElementById("mem_form");
      var newAction = "{{url('admin/membership/profile/decline')}}"; // set the new action URL
      form.setAttribute('action',newAction); // change the form's action attribute// hange the form's action attribute
        form.submit(); //
    } else {
      // Do nothing
      event.preventDefault();
      return false;
    }
  }
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
    $('#membership').addClass('active');
  });
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.js"></script>
  </section>
  
  <!-- /.content -->
</div>

@endsection