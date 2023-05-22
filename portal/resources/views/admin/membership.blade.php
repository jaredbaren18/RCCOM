<title>Red Cross | Dashboard</title>
<link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
<script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
@extends('admin.layout.layout')
@section('admin-membership')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

  <!-- Main content -->
  <section class="content mt-5 pt-3">
    <div class="container-fluid">

      <!-- Small boxes (Stat box) -->

      <div class="col-md-12">
        <div class="card membership">
        </div>
      </div>
      <div class="col-md-12">
        <div class="row">
          <div class="col-md-5">
            <div class="card">
              <div class="card-body">
                  
              </div>
            </div>
          </div>
          <div class="col-md-5">

          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header text-left d-flex flex-row">
         <a href="{{url('admin/membership/create-new')}}" class="btn btn-primary">New Membership</a>
          <div class="dropdown">
            <button class="btn btn-primary dropdown-toggle mx-3" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             Filter
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="{{url('admin/membership')}}">Overview</a>
              <a class="dropdown-item" href="{{url('admin/membership/activated')}}">Activated</a>
              <a class="dropdown-item" href="{{url('admin/membership/pending')}}">Pending</a>
              <a class="dropdown-item" href="{{url('admin/membership/declined')}}">Declined</a>
              <a class="dropdown-item" href="{{url('admin/membership/expired')}}">Expired</a>
            </div>
          </div>
          
          {{-- <a href="{{url('admin/membership/addnew')}}" class="btn btn-primary text-left">New Membership</a>      --}}
        </div>
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
              @foreach($All as $all)
           @php
              $no+=1;
           @endphp
        <tr>
          <td>{{$no++}}</td>
          <td>{{$all->mem_id_no}}</td>
          <td>{{$all->mem_fname}} {{$all->mem_mname}} {{$all->mem_lname}}</td>
          <td>{{$all->mem_municipal}}</td>
          <td>{{$all->mem_status}}</td>
          <td><a href="{{url('admin/membership/profile',['mem_id'=>$all->mem_id])}}"class="btn btn-success">View</a></td>
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
<script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
  google.charts.load('current', {'packages':['bar']});
  google.charts.setOnLoadCallback(drawChart);

  function drawChart() {
   
  }
</script>






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