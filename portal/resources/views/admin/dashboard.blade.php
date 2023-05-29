  <title>Red Cross | Dashboard</title>
  @extends('admin.layout.layout')
  @section('admin-dashaboard')
  <!-- Content Wrapper. Contains page content -->
  <div id="dash" class="content-wrapper">


    <!-- Main content -->
    <section class="content mt-5 pt-3">
      <div class="container-fluid">
        <h1>DASHBOARD</h1>
        <div class="card overflow-auto">
          <div class="card-body  ">
          <div class="row">
            <div class="col-md-4">
             <div class="row">
              <div class="col-md-12">
                <div class="card p-5 text-center bg-success">
                  <h6>Total Membership Transaction Sales</h6>
                  <h1><span id="mts"></span> <i class="	far fa-money-bill-alt"></i></h1>
                </div>
              </div>
             </div>
             <div class="row">
              <div class="col-md-6">
                <div class="card p-3 bg-primary text-center">
                  <p>Activated</p>
                  <h2> <span id="activated"></span>  <i class="fas fa-user-check"></i></h2>
                </div>
              </div>
              <div class="col-md-6">
                <div class="card p-3 bg-warning text-center">
                  <p>Applications</p>
                  <h2> <span id="pendings"></span>  <i class="	fas fa-user-clock"></i></h2>
                </div>
              </div>
             </div>
            </div>
            <div class="col-md-4">
              <div class="row">
                <div class="col-md-12">
                  <div class="card p-5 text-center bg-primary">
                    <h6>Total Charity Doanations</h6>
                    <h1><span id="ctd"></span> <i class="	far fa-money-bill-alt"></i></h1>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="card p-3 bg-primary text-center">
                    <p>Donators</p>
                    <h2> <span id="acd">100000000</span>  <i class="fas fa-user-alt"></i></h2>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="card p-3 bg-warning text-center">
                    <p>Highest Donation</p>
                    <h2> <span id="hcd">100000</span>  <i class="	fas fa-hand-holding-usd"></i></h2>
                  </div>
                </div>
               </div>
            </div>
            <div class="col-md-4">
              <div class="row">
                <div class="col-md-12">
                  <div class="card p-5 text-center bg-primary">
                    <h6>Volunteers per Municipalitys</h6>
                    <div id="volunteerbar" ></div>
                  </div>
                </div>
              </div>
  
            </div>
          </div>
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
    MembershipTS();
    MembershipAA();
    MembershipPA();
    DonationCCD();    
    DonationACD();    
    DonationHCD();    
  });

  function MembershipTS()
  {
    $.ajax({
      type: "GET",
      url: "{{url('admin/dashboard/membership-ts')}}",
      data: "data",
      dataType: "json",
      success: function (response) {
        console.log(response);
        $('#mts').text(response);
      }
    });
  }
  function MembershipAA()
  {
    $.ajax({
      type: "GET",
      url: "{{url('admin/dashboard/membership-aa')}}",
      data: "data",
      dataType: "json",
      success: function (response) {
        console.log(response);
        $('#activated').text(response);
      }
    });
  }
  function MembershipPA()
  {
    $.ajax({
      type: "GET",
      url: "{{url('admin/dashboard/membership-pa')}}",
      data: "data",
      dataType: "json",
      success: function (response) {
        console.log(response);
        $('#pendings').text(response);
      }
    });
  }
  function DonationCCD()
  {
    $.ajax({
      type: "GET",
      url: "{{url('admin/dashboard/membership-ctd')}}",
      data: "data",
      dataType: "json",
      success: function (response) {
        console.log(response);
        $('#ctd').text(response);
      }
    });
  }
  function DonationACD()
  {
    $.ajax({
      type: "GET",
      url: "{{url('admin/dashboard/membership-acd')}}",
      data: "data",
      dataType: "json",
      success: function (response) {
        console.log(response);
        $('#acd').text(response);
      }
    });
  }
  function DonationHCD()
  {
    $.ajax({
      type: "GET",
      url: "{{url('admin/dashboard/membership-hcd')}}",
      data: "data",
      dataType: "json",
      success: function (response) {
        console.log(response);
        $('#hcd').text(response);
      }
    });
  }
</script>

<script type="text/javascript">
  google.charts.load("current", {packages:["corechart"]});
  google.charts.setOnLoadCallback(drawChart);
  function drawChart() {
    var data = google.visualization.arrayToDataTable([
      ["Element", "Density", { role: "style" } ],
      ["Copper", 8.94, "#b87333"],
      ["Silver", 10.49, "silver"],
      ["Gold", 19.30, "gold"],
      ["Platinum", 21.45, "color: #e5e4e2"]
    ]);

    var view = new google.visualization.DataView(data);
    view.setColumns([0, 1,
                     { calc: "stringify",
                       sourceColumn: 1,
                       type: "string",
                       role: "annotation" },
                     2]);

    var options = {
      title: "Density of Precious Metals, in g/cm^3",
      width: 600,
      height: 400,
      bar: {groupWidth: "95%"},
      legend: { position: "none" },
    };
    var chart = new google.visualization.BarChart(document.getElementById("volunteerbar"));
    chart.draw(view, options);
}
</script>














<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.js"></script>
{{-- <script src="{{asset('admin/js/membership.js')}}"> --}}
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
      var data = google.visualization.arrayToDataTable();

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
    var data = google.visualization.arrayToDataTable();

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