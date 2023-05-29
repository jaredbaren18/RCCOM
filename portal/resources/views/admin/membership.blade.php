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
          <div class="col-md-4">
            <div class="card bg-primary">
              <div class="card-body "><p>Transaction Sales</p>
              <h3 id="ts"></h3>
              </div>
            </div>
          </div>
          <div class="col-md-2">
            <div class="card bg-success">
              <div class="card-body"><p>Activated Accounts</p>
                <h6 id="ac"></h6>
              </div>

            </div>
          </div>
          <div class="col-md-2">
            <div class="card bg-warning">
              <div class="card-body">
                <p>Pending Applications</p>
                <h6 id="pa"></h6>
              </div>
            </div>
          </div>
          <div class="col-md-2">
            <div class="card bg-warning">
              <div class="card-body">
                <p>Expired Accounts</p>
                <h6 id="ea"></h6>
              </div>
            </div>
          </div>
          <div class="col-md-2">
            <div class="card bg-danger">
              <div class="card-body">
                <p>Declined Applications</p>
                <h6 id="da"></h6>
              </div>
            </div>
          </div>

        </div>
      </div>
      <div class="row mb-2">
        <div class="col-md-12">
          <button id="btn-all" type="button" class="p-2 bg-success border-light px-5 active">All</button>        
          <button id="btn-activated" class="p-2 bg-primary border-light px-4">Activated</button>        
          <button id="btn-pending" class="p-2 bg-primary border-light px-4">Pending</button>        
          <button id="btn-expired" class="p-2 bg-primary border-light px-4">Expired</button>        
          <button id="btn-declined" class="p-2 bg-primary border-light px-4">Declined</button> 
        </div>
      </div>
      <div id="all" class="card">
     
        <div class="card-body overflow-auto">
          <table id="membership-all" >

all
            
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
          <td><button type="button" class="btn-all-view btn btn-warning" data-data-id="{{$all->mem_id}}"> <i class="far fa-id-card"></i> View</button></td>
        </tr>
              @endforeach
            </tbody>
            <tfoot>
            <tr>

            </tr>
            </tfoot>
          </table>

         
        </div>

      </div>
      <div id="activated" class="card d-none">
        <div class="card-body overflow-auto">
           {{-- ACTIVATED  --}}
  
           <table id="membership-activated">
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
          <td><button type="button" class="btn-all-view btn btn-warning" data-data-id="{{$activated->mem_id}}"> <i class="far fa-id-card"></i> View</button></td>
          </tr>
                @endforeach
              </tbody>
              <tfoot>
              <tr>
  
              </tr>
              </tfoot>
            </table>
  
        
        </div>
        
      </div>
      <div id="pending" class="card d-none">
        <div class="card-body overflow-auto">
              {{-- PENDING  --}}
              <table id="membership-pending">
                  
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
                    @foreach($Pending as $pending)
                 @php
                    $no+=1;
                 @endphp
              <tr>
                <td>{{$no++}}</td>
                <td>{{$pending->mem_id_no}}</td>
                <td>{{$pending->mem_fname}} {{$pending->mem_mname}} {{$pending->mem_lname}}</td>
                <td>{{$pending->mem_municipal}}</td>
                <td>{{$pending->mem_status}}</td>
                <td><button type="button" class="btn-all-view btn btn-warning" data-data-id="{{$pending->mem_id}}"> <i class="far fa-id-card"></i> View</button></td>
              </tr>
                    @endforeach
                  </tbody>
                  <tfoot>
                  <tr>
      
                  </tr>
                  </tfoot>
                </table>
      
        </div>
      </div>


      <div id="expired" class="card d-none">
        <div class="card-body overflow-auto">
          
                {{-- EXPIRED  --}}
   
                <table id="membership-expired">
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
                      @foreach($Expired as $expired)
                   @php
                      $no+=1;
                   @endphp
                <tr>
                  <td>{{$no++}}</td>
                  <td>{{$expired->mem_id_no}}</td>
                  <td>{{$expired->mem_fname}} {{$expired->mem_mname}} {{$expired->mem_lname}}</td>
                  <td>{{$expired->mem_municipal}}</td>
                  <td>{{$expired->mem_status}}</td>
                  <td><button type="button" class="btn-all-view btn btn-warning" data-data-id="{{$expired->mem_id}}"> <i class="far fa-id-card"></i> View</button></td>
                </tr>
                      @endforeach
                    </tbody>
                    <tfoot>
                    <tr>
        
                    </tr>
                    </tfoot>
                  </table>
        
        </div>
      </div>
      <div id="declined" class="card d-none">
        <div class="card-body overflow-auto">
          
                  {{-- DECLINED  --}}
                  <table id="membership-declined">
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
                        @foreach($Declined as $declined)
                     @php
                        $no+=1;
                     @endphp
                  <tr>
                    <td>{{$no++}}</td>
                    <td>{{$declined->mem_id_no}}</td>
                    <td>{{$declined->mem_fname}} {{$declined->mem_mname}} {{$declined->mem_lname}}</td>
                    <td>{{$declined->mem_municipal}}</td>
                    <td>{{$declined->mem_status}}</td>
                    <td><button type="button" class="btn-all-view btn btn-warning" data-data-id="{{$declined->mem_id}}"> <i class="far fa-id-card"></i> View</button></td>
                  </tr>
                        @endforeach
                      </tbody>
                      <tfoot>
                      <tr>
          
                      </tr>
                      </tfoot>
                    </table>
        </div>
      </div>



      <div class="modal fade" data-bs-backdrop="static" id="member_profile" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
          <div class="modal-content">
  
            <div class="modal-body">
        
              <div class="card">
                <div class="card-header text-center">
                  <h3 class="text-primary ">Membership Information</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <div id="mem_info" class="row">
                    <div class="col-md-4">
                      <!-- small box -->
                      <p>Full Name: <span id="fulln"> </span></p>
                      <p>Age: <span id="age"></span> </p>
                      <p>Age: <span id="age"></span> </p>
                      <p>Gender: <span id="gender"></span> </p>
                      <p>Blood type: <span id="bloodtype"></span> </p>
                      <p>Birthday: <span id="bd"></span></p>
                      <p>Zip Code: <span id="zc"> </span></p>
                      <p>Municipality: <span id="mun"></span></p>
                      <p>Barangay: <span id="brgy"></span></p>
                      <p>Contact No: <span id="cn"> </span></p>
                      <p>Email: <span id="email"> </span></p>
                      </div>
                      <div class="col-md-4">

                        <p>Membership ID: <span id="memno">  </span></p> 
                        <p>Type: <span id="type"> </span></p> 
                        <p>Price: <span id="memprice"> </span></p> 
                        <p>Status: <span id="status">  </span></p> 
                        <p id="rfc" class="d-none">Info in cancelation:  <span id="ic"> </span></p>
                        <p>Payment: <span id="payment"></span></p> 
                        <p>Validity: <span id="validity"></em> </span></p> 
                        <p>In charge: <span id="assistedby"></em> </span></p> 
        
        
                        </div>
                        <div class="col-md-4">
                        <span>Proof of payment:</span>
                        <img id="ppayment" src="" alt="payment" width="200px">
        
                        </div>
                    </div>
                </div>




            </div>
            <div id="mem_info_btns" class="modal-footer">
              <button id="editbtn" class="btn btn-warning block"><i class="fas fa-user-edit"></i> Edit</a>
              <button id="approvebtn" class="btn btn-success d-none btn-btn-">
                <span id="spinner" class="spinner-border spinner-border-sm d-none" role="status" aria-hidden="true"></span>
                <i class="fas fa-user-plus"></i> Approve</button>
              <button id="declinebtn" class="btn btn-danger d-none"><i class="fas fa-user-times"></i> Decline</a>
              <button id="closebtn" type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            </div>
     
          </div>
        </div>
      </div>
    
    </div>
      <div class="modal fade" id="imageview" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
  
            <div class="modal-body">
              <img id="viewppayment" class="img-fluid" src="" alt="payment" width="1000px">
          </div>
        </div>
      </div>
    </div>


      <div class="modal fade" id="reasonmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm modal-dialog-centered">
          <div class="modal-content">
  
            <div class="modal-body">
             <form id="declineForm">
              @csrf
             <div class="row">
              <div class="col-md-12">
                <input type="hidden" id="declineid" name="mem_id">
                <textarea name="mem_reason_decline" class="form-control" placeholder="State yout reason..." cols="30" rows="5"></textarea>
              </div>
              <div class="row mt-3">
                <div class="col-md-12 d-flex justify-content-end">
             
                <button id="confirmdecline" type="submit" class="btn btn-danger">
                  <span id="declinespinner" class="spinner-border spinner-border-sm d-none" role="status" aria-hidden="true"></span>
                   <i class="fas fa-user-alt-slash"></i> Confirm</button>
                  <button id="canceldecline" class="btn btn-success mx-2"> <i class="	fas fa-user-clock"></i> Cancel</button>
                </div>
              </div>
             </div>
             </form>
          </div>
        </div>
      </div>
    </div>


    </div>
      <div class="modal fade" id="messagemodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered ">
          <div class="modal-content">
  
            <div class="modal-body text-center bg-info">
              <div class="row">
                <div class="col-md-12 text-center">
                  <h5 class="text-light" id="message"></h5>
                </div>
               </div>
              <div class="row mt-3">
                <div class="col-md-12 d-flex justify-content-center">
                  <button  class="btn btn-success" id="okbtn">OK</button>
                </div>
               </div>
          </div>
        </div>
      </div>
    </div>
    </div>
   


    <div class="row">
      <div class="col-md-12 d-flex justify-content-end fixed-bottom my-3">
        <a href="{{url('admin/membership/create-new')}}" class="btn btn-primary mx-2">New Membership</a>
        <button type="button" class="btn btn-success">Export</button>
        <button type="button" class="btn btn-success mx-2">Print</button>
      </div>
     </div>


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

        $('#btn-all').click(function (e) { 
          e.preventDefault();
          $('#all').addClass('block');
          $('#all').removeClass('d-none');
          $('#activated').addClass('d-none');
          $('#activated').removeClass('block');
          $('#pending').addClass('d-none');
          $('#pending').removeClass('block');
          $('#expired').addClass('d-none');
          $('#expired').removeClass('block');
          $('#declined').addClass('d-none');
          $('#declined').removeClass('block');

          $('#btn-all').addClass('bg-success');
          $('#btn-all').removeClass('bg-primary');
          $('#btn-activated').addClass('bg-primary');
          $('#btn-activated').removeClass('bg-success');
          $('#btn-pending').addClass('bg-primary');
          $('#btn-pending').removeClass('bg-success');
          $('#btn-expired').addClass('bg-primary');
          $('#btn-expired').removeClass('bg-success');
          $('#btn-declined').addClass('bg-primary');
          $('#btn-declined').removeClass('bg-success');
        });
        $('#btn-activated').click(function (e) { 
          e.preventDefault();
          $('#all').addClass('d-none');
          $('#all').removeClass('block');
          $('#activated').addClass('block');
          $('#activated').removeClass('d-none');
          $('#pending').addClass('d-none');
          $('#pending').removeClass('block');
          $('#expired').addClass('d-none');
          $('#expired').removeClass('block');
          $('#declined').addClass('d-none');
          $('#declined').removeClass('block');

          $('#btn-all').addClass('bg-primary');
          $('#btn-all').removeClass('bg-success');
          $('#btn-activated').addClass('bg-success');
          $('#btn-activated').removeClass('bg-primary');
          $('#btn-pending').addClass('bg-primary');
          $('#btn-pending').removeClass('bg-success');
          $('#btn-expired').addClass('bg-primary');
          $('#btn-expired').removeClass('bg-success');
          $('#btn-declined').addClass('bg-primary');
          $('#btn-declined').removeClass('bg-success');

        });
        $('#btn-pending').click(function (e) { 
          e.preventDefault();
          $('#all').addClass('d-none');
          $('#all').removeClass('block');
          $('#activated').addClass('d-none');
          $('#activated').removeClass('block');
          $('#pending').addClass('block');
          $('#pending').removeClass('d-none');
          $('#expired').addClass('d-none');
          $('#expired').removeClass('block');
          $('#declined').addClass('d-none');
          $('#declined').removeClass('block');

          $('#btn-all').addClass('bg-primary');
          $('#btn-all').removeClass('bg-success');
          $('#btn-activated').addClass('bg-primary');
          $('#btn-activated').removeClass('bg-success');
          $('#btn-pending').addClass('bg-success');
          $('#btn-pending').removeClass('bg-primary');
          $('#btn-expired').addClass('bg-primary');
          $('#btn-expired').removeClass('bg-success');
          $('#btn-declined').addClass('bg-primary');
          $('#btn-declined').removeClass('bg-success');
        });
        $('#btn-expired').click(function (e) { 
          e.preventDefault();
          $('#all').addClass('d-none');
          $('#all').removeClass('block');
          $('#activated').addClass('d-none');
          $('#activated').removeClass('block');
          $('#pending').addClass('d-none');
          $('#pending').removeClass('block');
          $('#expired').addClass('block');
          $('#expired').removeClass('d-none');
          $('#declined').addClass('d-none');
          $('#declined').removeClass('block');

          $('#btn-all').addClass('bg-primary');
          $('#btn-all').removeClass('bg-success');
          $('#btn-activated').addClass('bg-primary');
          $('#btn-activated').removeClass('bg-success');
          $('#btn-pending').addClass('bg-primary');
          $('#btn-pending').removeClass('bg-success');
          $('#btn-expired').addClass('bg-success');
          $('#btn-expired').removeClass('bg-primary');
          $('#btn-declined').addClass('bg-primary');
          $('#btn-declined').removeClass('bg-success');
        });
        $('#btn-declined').click(function (e) { 
          e.preventDefault();
          $('#all').addClass('d-none');
          $('#all').removeClass('block');
          $('#activated').addClass('d-none');
          $('#activated').removeClass('block');
          $('#pending').addClass('d-none');
          $('#pending').removeClass('block');
          $('#expired').addClass('d-none');
          $('#expired').removeClass('block');
          $('#declined').addClass('block');
          $('#declined').removeClass('d-none');

          $('#btn-all').addClass('bg-primary');
          $('#btn-all').removeClass('bg-success');
          $('#btn-activated').addClass('bg-primary');
          $('#btn-activated').removeClass('bg-success');
          $('#btn-pending').addClass('bg-primary');
          $('#btn-pending').removeClass('bg-success');
          $('#btn-expired').addClass('bg-primary');
          $('#btn-expired').removeClass('bg-success');
          $('#btn-declined').addClass('bg-success');
          $('#btn-declined').removeClass('bg-primary');
        });
        $('#closebtn').click(function (e) { 
          e.preventDefault();
          localStorage.removeItem('mem_id');
          $('#member_profile').modal('show');
        });
        if(localStorage.getItem('mem_id'))
        {
          $.ajax({
            type: "GET",
            url: "/admin/membership/profile/"+localStorage.getItem('mem_id'),
            data: "data",
            dataType: "json",
            success: function (response) {
              var data=response;
             
              if(response.mem_status=="Activated")
             {
              $('#edit_mem_profile').data('data-id',data.mem_id);
              $('#member_profile').modal('show');
              $('#fulln').text(data.mem_fname+" "+data.mem_mname+" "+data.mem_lname);
              $('#assistedby').text(data.mem_assisted_by);
              $('#age').text(data.mem_age);
              $('#bd').text(data.mem_birthday);
              $('#edit_bloodtype').text(data.mem_blood_type);
              $('#zc').text(data.mem_zipcode);
              $('#mun').text(data.mem_municipal);
              $('#brgy').text(data.mem_barangay);
              $('#cn').text(data.mem_contact_no);
              $('#email').text(data.mem_email);
              $('#memno').text(data.mem_id_no);
              $('#type').text(data.mem_category);
              $('#status').text(data.mem_status);
              $('#memprice').text(data.mem_price);
              $('#payment').text(data.mem_payment_method);
              $('#assistedby').text(data.mem_assisted_by);
              $('#mem_price').text(data.mem_payment_method);
              $('#validity').text(data.mem_start_at+"-"+data.mem_end_at);
              $('#ppayment').attr('src',data.mem_proof_payment);  
              $('#rfc').addClass('d-none');
              $('#rfc').removeClass('block')

              $('#editbtn').addClass('block');
              $('#editbtn').removeClass('d-none');
              $('#approvebtn').addClass('d-none');
              $('#approvebtn').removeClass('block');
              $('#approvebtn').addClass('d-none');
              $('#approvebtn').removeClass('block');
             }
             else if(response.mem_status=="Pending")
             {
              $('#edit_mem_profile').data('data-id',data.mem_id);
              $('#member_profile').modal('show');
              $('#fulln').text(data.mem_fname+" "+data.mem_mname+" "+data.mem_lname);
              $('#assistedby').text(data.mem_assisted_by);
              $('#age').text(data.mem_age);
              $('#bd').text(data.mem_birthday);
              $('#edit_bloodtype').text(data.mem_blood_type);
              $('#zc').text(data.mem_zipcode);
              $('#mun').text(data.mem_municipal);
              $('#brgy').text(data.mem_barangay);
              $('#cn').text(data.mem_contact_no);
              $('#email').text(data.mem_email);
              $('#memno').text(data.mem_id_no);
              $('#type').text(data.mem_category);
              $('#status').text(data.mem_status);
              $('#memprice').text(data.mem_price);
              $('#payment').text(data.mem_payment_method);
              $('#assistedby').text(data.mem_assisted_by);
              $('#mem_price').text(data.mem_payment_method);
              $('#validity').text(data.mem_start_at+"-"+data.mem_end_at);
              $('#ppayment').attr('src',data.mem_proof_payment);  
              $('#approvebtn').data('data-id',data.mem_id);  
              $('#declinebtn').data('data-id',data.mem_id);  
              $('#rfc').addClass('d-none');
              $('#rfc').removeClass('block')

              $('#editbtn').addClass('d-none');
              $('#editbtn').removeClass('block');
              $('#approvebtn').addClass('block');
              $('#approvebtn').removeClass('d-none');
              $('#declinebtn').addClass('block');
              $('#declinebtn').removeClass('d-none');
             }
             else if(response.mem_status=="Expired")
             {
              $('#edit_mem_profile').data('data-id',data.mem_id);
              $('#member_profile').modal('show');
              $('#fulln').text(data.mem_fname+" "+data.mem_mname+" "+data.mem_lname);
              $('#assistedby').text(data.mem_assisted_by);
              $('#age').text(data.mem_age);
              $('#bd').text(data.mem_birthday);
              $('#edit_bloodtype').text(data.mem_blood_type);
              $('#zc').text(data.mem_zipcode);
              $('#mun').text(data.mem_municipal);
              $('#brgy').text(data.mem_barangay);
              $('#cn').text(data.mem_contact_no);
              $('#email').text(data.mem_email);
              $('#memno').text(data.mem_id_no);
              $('#type').text(data.mem_category);
              $('#status').text(data.mem_status);
              $('#memprice').text(data.mem_price);
              $('#payment').text(data.mem_payment_method);
              $('#assistedby').text(data.mem_assisted_by);
              $('#mem_price').text(data.mem_payment_method);
              $('#validity').text(data.mem_start_at+"-"+data.mem_end_at);
              $('#ppayment').attr('src',data.mem_proof_payment);  
              $('#rfc').addClass('d-none');
              $('#rfc').removeClass('block')

              $('#editbtn').addClass('d-none');
              $('#editbtn').removeClass('block');
              $('#approvebtn').addClass('d-none');
              $('#approvebtn').removeClass('block');
              $('#declinebtn').addClass('d-none');
              $('#declinebtn').removeClass('block');
             }
             else if(response.mem_status=="Declined")
             {
              $('#edit_mem_profile').data('data-id',data.mem_id);
              $('#member_profile').modal('show');
              $('#fulln').text(data.mem_fname+" "+data.mem_mname+" "+data.mem_lname);
              $('#assistedby').text(data.mem_assisted_by);
              $('#age').text(data.mem_age);
              $('#bd').text(data.mem_birthday);
              $('#edit_bloodtype').text(data.mem_blood_type);
              $('#zc').text(data.mem_zipcode);
              $('#mun').text(data.mem_municipal);
              $('#brgy').text(data.mem_barangay);
              $('#cn').text(data.mem_contact_no);
              $('#email').text(data.mem_email);
              $('#memno').text(data.mem_id_no);
              $('#type').text(data.mem_category);
              $('#status').text(data.mem_status);
              $('#memprice').text(data.mem_price);
              $('#payment').text(data.mem_payment_method);
              $('#assistedby').text(data.mem_assisted_by);
              $('#mem_price').text(data.mem_payment_method);
              $('#validity').text(data.mem_start_at+"-"+data.mem_end_at);
              $('#ppayment').attr('src',data.mem_proof_payment);  
              $('#rfc').addClass('block');
              $('#rfc').removeClass('d-none');
              $('#ic').text(data.mem_reason_decline);

              $('#editbtn').addClass('d-none');
              $('#editbtn').removeClass('block');
              $('#approvebtn').addClass('d-none');
              $('#approvebtn').removeClass('block');
              $('#declinebtn').addClass('d-none');
              $('#declinebtn').removeClass('block');
             }
            }
          });
        }
        $('#closedecline').click(function (e) { 
          e.preventDefault();
          $('#reasonmodal').modal('hide');
          
        });


        allviewbtn();
        editmembership();
        viewPayment();
        declineView();
        approvedForm();
        closemessage();
        declineForm();




        membershipts(); 
        membershipac();
        membershippa();
        membershipea();
        membershipda();
      });

      function membershipts()
      {
        $.ajax({
          type: "GET",
          url: "{{url('admin/membership/sales')}}",
          data: "data",
          dataType: "json",
          success: function (response) {
            console.log(response);
            $('#ts').text(response);
          }
        });
      }
      function membershipac()
      {
        $.ajax({
          type: "GET",
          url: "{{url('admin/membership/active-accounts')}}",
          data: "data",
          dataType: "json",
          success: function (response) {
            console.log(response);
            $('#ac').text(response);
          }
        });
      }
      function membershippa()
      {
        $.ajax({
          type: "GET",
          url: "{{url('admin/membership/pending-accounts')}}",
          data: "data",
          dataType: "json",
          success: function (response) {
            console.log(response);
            $('#pa').text(response);
          }
        });
      }
      function membershipea()
      {
        $.ajax({
          type: "GET",
          url: "{{url('admin/membership/expired-accounts')}}",
          data: "data",
          dataType: "json",
          success: function (response) {
            console.log(response);
            $('#ea').text(response);
          }
        });
      }
      function membershipda()
      {
        $.ajax({
          type: "GET",
          url: "{{url('admin/membership/declined-accounts')}}",
          data: "data",
          dataType: "json",
          success: function (response) {
            console.log(response);
            $('#da').text(response);
          }
        });
      }


      function allviewbtn()
      {
        $('.btn-all-view').click(function (e) { 
          e.preventDefault();
          var id=$(this).data('data-id');
          localStorage.removeItem('mem_id')
          localStorage.setItem('mem_id',id)
   
          $.ajax({
            type: "GET",
            url: "/admin/membership/profile/"+localStorage.getItem('mem_id'),
            data: "data",
            dataType: "json",
            success: function (response) {
              var data=response;
             if(response.mem_status=="Activated")
             {

              $('#edit_mem_profile').data('data-id',data.mem_id);
              $('#member_profile').modal('show');
              $('#fulln').text(data.mem_fname+" "+data.mem_mname+" "+data.mem_lname);
              $('#assistedby').text(data.mem_assisted_by);
              $('#age').text(data.mem_age);
              $('#bd').text(data.mem_birthday);
              $('#edit_bloodtype').text(data.mem_blood_type);
              $('#zc').text(data.mem_zipcode);
              $('#mun').text(data.mem_municipal);
              $('#brgy').text(data.mem_barangay);
              $('#cn').text(data.mem_contact_no);
              $('#email').text(data.mem_email);
              $('#memno').text(data.mem_id_no);
              $('#type').text(data.mem_category);
              $('#status').text(data.mem_status);
              $('#memprice').text(data.mem_price);
              $('#payment').text(data.mem_payment_method);
              $('#assistedby').text(data.mem_assisted_by);
              $('#mem_price').text(data.mem_payment_method);
              $('#validity').text(data.mem_start_at+"-"+data.mem_end_at);
              $('#ppayment').attr('src',data.mem_proof_payment);  
              $('#rfc').addClass('d-none');
              $('#rfc').removeClass('block')


              $('#editbtn').addClass('block');
              $('#editbtn').removeClass('d-none');
              $('#approvebtn').addClass('d-none');
              $('#approvebtn').removeClass('block');
              $('#declinebtn').addClass('d-none');
              $('#declinebtn').removeClass('block');
             }
             else if(response.mem_status=="Pending")
             {
              $('#edit_mem_profile').data('data-id',data.mem_id);
              $('#member_profile').modal('show');
              $('#fulln').text(data.mem_fname+" "+data.mem_mname+" "+data.mem_lname);
              $('#assistedby').text(data.mem_assisted_by);
              $('#age').text(data.mem_age);
              $('#bd').text(data.mem_birthday);
              $('#edit_bloodtype').text(data.mem_blood_type);
              $('#zc').text(data.mem_zipcode);
              $('#mun').text(data.mem_municipal);
              $('#brgy').text(data.mem_barangay);
              $('#cn').text(data.mem_contact_no);
              $('#email').text(data.mem_email);
              $('#memno').text(data.mem_id_no);
              $('#type').text(data.mem_category);
              $('#status').text(data.mem_status);
              $('#memprice').text(data.mem_price);
              $('#payment').text(data.mem_payment_method);
              $('#assistedby').text(data.mem_assisted_by);
              $('#mem_price').text(data.mem_payment_method);
              $('#validity').text(data.mem_start_at+"-"+data.mem_end_at);
              $('#ppayment').attr('src',data.mem_proof_payment);  
              $('#approvebtn').data('data-id',data.mem_id); 
              $('#declinebtn').data('data-id',data.mem_id);  
              $('#rfc').addClass('d-none');
              $('#rfc').removeClass('block')


              $('#editbtn').addClass('d-none');
              $('#editbtn').removeClass('block');
              $('#approvebtn').addClass('block');
              $('#approvebtn').removeClass('d-none');
              $('#declinebtn').addClass('block');
              $('#declinebtn').removeClass('d-none');
             }
             else if(response.mem_status=="Expired")
             {
              $('#edit_mem_profile').data('data-id',data.mem_id);
              $('#member_profile').modal('show');
              $('#fulln').text(data.mem_fname+" "+data.mem_mname+" "+data.mem_lname);
              $('#assistedby').text(data.mem_assisted_by);
              $('#age').text(data.mem_age);
              $('#bd').text(data.mem_birthday);
              $('#edit_bloodtype').text(data.mem_blood_type);
              $('#zc').text(data.mem_zipcode);
              $('#mun').text(data.mem_municipal);
              $('#brgy').text(data.mem_barangay);
              $('#cn').text(data.mem_contact_no);
              $('#email').text(data.mem_email);
              $('#memno').text(data.mem_id_no);
              $('#type').text(data.mem_category);
              $('#status').text(data.mem_status);
              $('#memprice').text(data.mem_price);
              $('#payment').text(data.mem_payment_method);
              $('#assistedby').text(data.mem_assisted_by);
              $('#mem_price').text(data.mem_payment_method);
              $('#validity').text(data.mem_start_at+"-"+data.mem_end_at);
              $('#ppayment').attr('src',data.mem_proof_payment);
              $('#rfc').addClass('d-none');
              $('#rfc').removeClass('block');  

              $('#editbtn').addClass('d-none');
              $('#editbtn').removeClass('block');
              $('#approvebtn').addClass('d-none');
              $('#approvebtn').removeClass('block');
              $('#declinebtn').addClass('d-none');
              $('#declinebtn').removeClass('block');
             }
             else if(response.mem_status=="Declined")
             {
              $('#edit_mem_profile').data('data-id',data.mem_id);
              $('#member_profile').modal('show');
              $('#fulln').text(data.mem_fname+" "+data.mem_mname+" "+data.mem_lname);
              $('#assistedby').text(data.mem_assisted_by);
              $('#age').text(data.mem_age);
              $('#bd').text(data.mem_birthday);
              $('#edit_bloodtype').text(data.mem_blood_type);
              $('#zc').text(data.mem_zipcode);
              $('#mun').text(data.mem_municipal);
              $('#brgy').text(data.mem_barangay);
              $('#cn').text(data.mem_contact_no);
              $('#email').text(data.mem_email);
              $('#memno').text(data.mem_id_no);
              $('#type').text(data.mem_category);
              $('#status').text(data.mem_status);
              $('#memprice').text(data.mem_price);
              $('#payment').text(data.mem_payment_method);
              $('#assistedby').text(data.mem_assisted_by);
              $('#mem_price').text(data.mem_payment_method);
              $('#rfc').addClass('block');
              $('#rfc').removeClass('d-none');
              $('#ic').text(data.mem_reason_decline);
              $('#validity').text(data.mem_start_at+"-"+data.mem_end_at);
              $('#ppayment').attr('src',data.mem_proof_payment);  

              $('#editbtn').addClass('d-none');
              $('#editbtn').removeClass('block');
              $('#approvebtn').addClass('d-none');
              $('#approvebtn').removeClass('block');
              $('#declinebtn').addClass('d-none');
              $('#declinebtn').removeClass('block');
             }
            }
          });
        });

      
      }
      function editmembership()
      {
        $('#editbtn').click(function (e) { 
            e.preventDefault();
            $.ajax({
              type: "GET",
              url: "/admin/membership/profile/edit/"+localStorage.getItem('mem_id'),
              data: "data",
              dataType: "json",
              success: function (response) {
                window.location.href="{{url('admin/membership/create-new')}}";
              }
            });
          });
      }

      function viewPayment()
      {
        $('#ppayment').click(function (e) { 
          e.preventDefault();
          var srcurl=$(this).attr('src');
          $('#viewppayment').attr('src',srcurl);
          $('#imageview').modal('show');
        });
      }


      function declineView()
      {
        $('#declinebtn').click(function (e) { 
          e.preventDefault();
          var id=$(this).data('data-id');
          $('#declineid').val(id);
          $('#reasonmodal').modal('show');
        });
      }
      function approvedForm()
      {
       $('#approvebtn').click(function (e) { 
        e.preventDefault();
        var id=$(this).data('data-id');
        var spinner=$('#spinner');
        spinner.addClass('block');
        spinner.removeClass('d-none');
        $.ajax({
            type: "GET",
            url: "/admin/membership/profile/approve/"+id,
            data: "data",
            dataType: "json",
            success: function (response) {
              spinner.addClass('d-none');
              spinner.removeClass('block');

            $('#message').text(response.message);
              $('#messagemodal').modal('show');
              membershipts();
             setTimeout(() => {
              window.location.href="{{url('admin/membership')}}";
             }, 1000);
           
            }
          });
       });
      }
      function closemessage()
      {
        $('#okbtn').click(function (e) { 
          e.preventDefault();
          $('#messagemodal').modal('hide');

        });
      }

      function declineForm()
      {
        $('#declineForm').submit(function (e) { 
          e.preventDefault();
          $('#declinespinner').addClass('block');
          $('#declinespinner').removeClass('d-none');
          
          var formData = new FormData(this);
          $.ajax({
            type: "POST",
            url: "{{url('admin/membership/profile/decline')}}",
            data: formData,
            processData: false,
            contentType: false,
            success: function (response) {
            if(response.status==200)
            {
              $('#declinespinner').addClass('d-none');
              $('#declinespinner').removeClass('block');
              $('#message').text(response.message);
              $('#messagemodal').modal('show');
             setTimeout(() => {
              window.location.href="{{url('admin/membership')}}";
             }, 1000);

            }
            else
            {
              $('#declinespinner').addClass('d-none');
              $('#declinespinner').removeClass('block');
              $('#message').text(response.message);
              $('#messagemodal').modal('show');
            }
            
            }
          });
          
          
        });
        $('#canceldecline').click(function (e) { 
          e.preventDefault();
          $('#reasonmodal').modal('hide');
        });
      }
      
    </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.js"></script>
{{-- <script src="{{asset('admin/js/membership.js')}}"> --}}


@endsection