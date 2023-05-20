  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{url('admin/dashboard')}}" class="brand-link">
      {{-- <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> --}}
      <span class="brand-text font-weight-light">RCCC</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          {{-- <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image"> --}}
        </div>
        <div class="info">
          <img src=""  alt="{{session('Admin')['emp_fname']}}  Profile" height="100px">
          <a href="#" class="d-block">{{session('Admin')['emp_fname']}} {{session('Admin')['emp_lname']}}</a>
        </div>
      </div>



      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
       
          
          <li class="nav-item">
            <a href="{{url('admin/dashboard')}}" id="dashboard" class="nav-link ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('admin/membership')}}" id="membership" class="nav-link ">
              <i class="nav-icon fa fa-heartbeat"></i>
              <p>
               Membership
              </p>
            </a>
          </li>
        
          <li class="nav-item">
            <a href="{{url('admin/appointment')}}" id="appointment" class="nav-link ">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Appointments
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('admin/volunteer')}}" id="volunteer" class="nav-link ">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Volunteers
              </p>
            </a>
            <li class="nav-item" >
              <a href="#" class="nav-link" id="donationbtn">
                <i class="nav-icon fas fa-book"></i>
                <p>
                  Donations
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview" id="donations">
                <li class="nav-item">
                  <a href="" id="blood-donations" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Blood Donations</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{url('admin/donation/fund')}}" id="fund-donations" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Fund Donations</p>
                  </a>
                </li>
     
              </ul>
            </li>
  
          <li class="nav-header">Others</li>
   
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-envelope"></i>
              <p>
                Mailbox
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/mailbox/mailbox.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Inbox</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/mailbox/compose.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Compose</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/mailbox/read-mail.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Read</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Pages
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/examples/invoice.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Home</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('admin/donations/fund')}}"  class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Donation</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/e-commerce.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Membership</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/projects.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Seminars</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link" id="allusers-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                All Users
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview " id="allusers">
              <li class="nav-item">
                <a href="{{url('admin/employees')}}" id="employees" class="nav-link">
                  <i class="fas fa-sitemap nav-icon"></i>
                  <p>Employees</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/profile.html" id="users" class="nav-link">
                  <i class="fas fa-project-diagram nav-icon"></i>
                  <p>Users</p>
                </a>
              </li>

            </ul>
          </li>
          <li class="nav-item">
            <a href="#" id="activity_log_btn" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Activity Logs
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview" id="activity_logs_nav">
              <li class="nav-item">
                <a href="{{url('admin/membership/activity/logs')}}" id="membership_logs" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Membership Log</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/profile.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Staff Log</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/e-commerce.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Users Log</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/projects.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Seminars</p>
                </a>
              </li>
            </ul>
          </li>
       
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  <script>
    
  </script>
