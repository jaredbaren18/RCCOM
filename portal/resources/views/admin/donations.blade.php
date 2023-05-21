<title>Red Cross | Dashboard</title>
<link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
<script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
@extends('admin.layout.layout')
@section('admin-fund-donation')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <div class="preloader flex-column justify-content-center align-items-center">
    {{-- <img class="animation__shake" src="{{asset('admin/img/AdminLTELogo.png')}}" alt="AdminLTELogo" height="60" width="60"> --}}
    <h3 class="animation__shake text-red">Red Cross</h3>
  </div>

 
  <div class="content">
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
      <div class="card p-3">
        <div class="card-header">
          <a href="{{url('admin/donation/fund/add')}}" class="btn btn-primary">Add Donations</a>
        </div>
        <div class="card-body">
          <table id="donation-table">
            <thead>
            <tr>
              <th>No.</th>
              <th>ID</th>
              <th>Full Name</th>
              <th>Municipal</th>
              <th>Actions</th>
            </tr>
            </thead>
            <tbody>
              @php
              $c=1;
              @endphp
              @foreach($All as $all)
              <tr>
                <td>{{$c++}}</td>
                <td>{{$all->don_id}}</td>
                <td>{{$all->don_fname}} {{$all->don_mname}} {{$all->don_lname}}</td>
                <td>{{$all->don_municipal}}</td>
                <td><a href="{{url('admin/donation/fund/profile',['don_id'=>$all->don_id])}}" class=" btn btn-warning">View</a></td>
              </tr>
              @endforeach
            </tbody>
          </table>
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