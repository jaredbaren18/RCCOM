  <title>Red Cross | Dashboard</title>
  @extends('admin.layout.layout')
  @section('admin-dashaboard')
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
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="card overflow-auto">
          <div class="card-body  ">
            <div id="overall" style="height: 500px"></div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="card">
              <div class="card-body">
              <h5>Fun Donations</h5>
              <div id="fund_donations" style=" height: 300px;"></div>
            </div>
          </div>
        </div>
        
        <div class="col-md-6">
          <div class="card">
            <div class="card-body">
              <h5>Blood Donations</h5>
              <div id="blood_donations" style=" height: 300px;"></div>
              </div>
             </div>
          </div>
        </div>


        <div class="row">
          <div class="col-md-6">
            <div class="card">
              <div class="card-body">
            <h5>Blood Donations</h5>
                
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="card">
              <div class="card-body">
                <h5>Membership Overview</h5>

              </div>
            </div>
          </div>
        </div>

          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-7 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
            <!-- /.card -->

        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
<script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script>
  $(document).ready(function () {
    $('#dashboard').addClass('active');
  });
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.js"></script>
{{-- <script src="{{asset('admin/js/membership.js')}}"> --}}
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
      var data = google.visualization.arrayToDataTable(@json($Municipality_Fund_Donors));

      var options = {
        title: 'Donations Analytics',
        curveType: 'function',
        legend: { position: 'bottom' }
      };

      var chart = new google.visualization.LineChart(document.getElementById('overall'));

      chart.draw(data, options);
    }
  </script>






<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
  google.charts.load("current", {packages:["corechart"]});
  google.charts.setOnLoadCallback(drawChart);
  function drawChart() {
    var data = google.visualization.arrayToDataTable(@json($Municipality_Donors));

    var options = {
      title: 'Municipality Donors',
      pieHole: 0.4,
    };

    var chart = new google.visualization.PieChart(document.getElementById('fund_donations'));
    chart.draw(data, options);
  }
</script>




<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
  google.charts.load("current", {packages:["corechart"]});
  google.charts.setOnLoadCallback(drawChart);
  function drawChart() {
    var data = google.visualization.arrayToDataTable([
      ['Task', 'Hours per Day'],
      ['Work',     11],
      ['Eat',      2],
      ['Commute',  2],
      ['Watch TV', 2],
      ['Sleep',    7]
    ]);

    var options = {
      title: 'Top fund minicipality donators',
      pieHole: 0.4,
    };

    var chart = new google.visualization.PieChart(document.getElementById('blood_donations'));
    chart.draw(data, options);
  }
</script>

    <!-- /.content -->
  </div>
  @endsection