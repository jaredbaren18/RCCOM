  <title>Red Cross | Dashboard</title>
  <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
  <script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  @extends('admin.layout.layout')
  @section('admin-fun-donations')
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
            <a href="{{url('admin/donation/fund')}}">Back</a>
            <h1 class="m-0">Fund Donation Overview</h1>
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

  
    <div class="content ">
      <div class="containter-fluid p-3">
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
            <h4>Donors information</h4>
          </div>
          <div class="card-body">
          <form action="{{url('admin/donation/fund/create')}}" method="post" enctype="multipart/form-data">
            <div class="row">
              @csrf
             <div class="col-md-6">
             <div class="row">
           
              <div class="col-md-4">
                <label for="">First Name</label>
                <input type="text" name="don_fname" class="@error('don_fname') is-invalid @enderror form-control" value="{{old('don_fname')}}" placeholder="ex.Juan">
                @error('don_fname')
                <span style="color:red">{{$message}}</span>
                @enderror
              </div>
              <div class="col-md-4">
                <label for="">Middle Name</label>
                <input type="text" name="don_mname" class="@error('don_mname') is-invalid @enderror form-control" value="{{old('don_mname')}}" placeholder="ex.Dela">
                @error('don_mname')
                <span style="color:red">{{$message}}</span>
                @enderror
              </div>
              <div class="col-md-4">
                <label for="">Last Name</label>
                <input type="text" name="don_lname" class="@error('don_lname') is-invalid @enderror form-control" value="{{old('don_lname')}}" placeholder="ex.Cruz">
                @error('don_lname')
                <span style="color:red">{{$message}}</span>
                @enderror
              </div>
             </div>
             <div class="row">
              <div class="col-md-6  ">
                <label for="">Age</label>
                <input type="text" name="don_age" class="@error('don_age') is-invalid @enderror form-control" value="{{old('don_age')}}" placeholder="ex.Cruz">
                @error('don_age')
                <span style="color:red">{{$message}}</span>
                @enderror
              </div>
              <div class="col-md-6">
                <label for="">Gender</label>
                <select name="don_gender" class="@error('don_gender') is-invalid @enderror form-control" value="{{old('don_gender')}}">
                  <option value="">-select-</option>
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
                </select>
                @error('don_gender')
                <span style="color:red">{{$message}}</span>
                @enderror
              </div>
             </div>
             <div class="row">
              <div class="col-md-4">
                <label for="">Municipality</label>
                <select name="don_municipal" class="@error('don_municipal') is-invalid @enderror form-control" value="{{old('don_municipal')}}">
                  <option value="">-select-</option>
                  <option value="Puerto Galera">Puerto Galera</option>
                  <option value="San Teodoro">San Teodoro</option>
                  <option value="Baco">Baco</option>
                  <option value="Calapan">Calapan</option>
                  <option value="Naujan">Naujan</option>
                  <option value="Victoria">Victoria</option>
                  <option value="Socorro">Socorro</option>
                  <option value="Pola">Pola</option>
                  <option value="Pinamalayan">Pinamalayan</option>
                  <option value="Gloria">Gloria</option>
                  <option value="Bansud">Bansud</option>
                  <option value="Bongabong">Bongabong</option>
                  <option value="Roxas">Roxas</option>
                  <option value="Mansalay">Mansalay</option>
                  <option value="Bulalacao">Mansalay</option>
                </select>
                @error('don_municipal')
                <span style="color:red">{{$message}}</span>
                @enderror
              </div>
              <div class="col-md-4">
                <label for="">Barangay</label>
                <input type="text" name="don_barangay" class="@error('don_barangay') is-invalid @enderror form-control" value="{{old('don_barangay')}}" placeholder="ex.Dela">
                @error('don_barangay')
                <span style="color:red">{{$message}}</span>
                @enderror
              </div>
              <div class="col-md-4">
                <label for="">Email</label>
                <input type="email" name="don_email" class="@error('don_email') is-invalid @enderror form-control" value="{{old('don_email')}}" placeholder="ex.Dela">
                @error('don_email')
                <span style="color:red">{{$message}}</span>
                @enderror
              </div>
             </div>
             </div>
             <div class="col-md-6">
              <div class="row">
                <div class="col-md-4">
                  <label for="">Amount</label>
                  <input type="text" name="don_amount" class="@error('don_amount') is-invalid @enderror form-control" value="{{old('don_amount')}}" placeholder="ex.Cruz">
                  @error('don_amount')
                  <span style="color:red">{{$message}}</span>
                  @enderror
                </div>
                <div class="col-md-4">
                  <label for="">Method</label>
                  <select type="text" name="don_method" class="@error('don_method') is-invalid @enderror form-control" value="{{old('don_method')}}" >
                    <option value="">-select-</option>
                    <option value="Gcash">Gcash</option>
                    <option value="Paymaya">Paymaya</option>
                    <option value="Over the counter">Over the counter</option>
                  </select>
                  @error('don_method')
                  <span style="color:red">{{$message}}</span>
                  @enderror
                </div>
                <div class="col-md-4">
                  <label for="">Proof of Donation</label>
                  <input type="file" name="don_proof" class="@error('don_proof') is-invalid @enderror form-control" value="{{old('don_proof')}}" placeholder="ex.Cruz">
                  @error('don_proof')
                  <span style="color:red">{{$message}}</span>
                  @enderror
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <label for="">Put Notes</label>
                <textarea name="don_notes" class="form-control" cols="10" rows="4" value="{{old('don_amount')}}" placeholder="Add notes:(Optional)"></textarea>
                @error('don_notes')
                <span style="color:red">{{$message}}</span>
                @enderror
                </div>
              </div>
             </div>
            </div>
          </div>
          <div class="card-footer">
            <div class="col-md-12 mt-4 d-flex justify-content-end">
              <button type="submit" class="btn btn-success mx-2" onclick="confirmAction()">Add</button>
              <a href="{{url('admin/donation/fund')}}" class="btn btn-danger">Back</a>
              </form>
            </div>
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
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.js"></script>
  {{-- <script src="{{asset('admin/js/membership.js')}}"> --}}



  @endsection