<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/favicon.png">
    <title>Aerator IOT</title>
    <!-- chartist CSS -->
    <link href="{{url('assets/libs/chartist/dist/chartist.min.css')}}" rel="stylesheet">
    <link href="{{url('assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css')}}" rel="stylesheet">
    <!--c3 CSS -->
    <link href="{{url('assets/extra-libs/c3/c3.min.css')}}" rel="stylesheet">
    <link href="{{('css/style.css')}}" rel="stylesheet">
    <!-- This page CSS -->
    <link href="{{('css/pages/dashboard1.css')}}" rel="stylesheet">
    <!-- This page CSS -->
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="main-wrapper" id="main-wrapper">
      <!-- ============================================================== -->
      <!-- Preloader - style you can find in spinners.css -->
      <!-- ============================================================== -->
      <div class="preloader">
        <div class="loader">
          <div class="loader__figure"></div>
          <p class="loader__label">MatPress Admin</p>
        </div>
      </div>
      <!-- ============================================================== -->
      <!-- Preloader - style you can find in spinners.css -->
      <!-- ============================================================== -->
      <header class="topbar">
        <!-- ============================================================== -->
        <!-- Navbar scss in header.scss -->
        <!-- ============================================================== -->
        <nav>
          <div class="nav-wrapper">
            <!-- ============================================================== -->
            <!-- Logo you can find that scss in header.scss -->
            <!-- ============================================================== -->
            <a href="javascript:void(0)" class="brand-logo">
              <span class="icon">
                <img class="light-logo" src="../../assets/images/logo-light-icon.png" alt="logos">
                <img class="dark-logo" src="../../assets/images/logo-icon.png" alt="logos">
              </span>
              <span class="text">
                <img class="light-logo" src="../../assets/images/logo-light-text.png" alt="logos">
                <img class="dark-logo" src="../../assets/images/logo-text.png" alt="logos">
              </span>
            </a>
            <!-- ============================================================== -->
            <!-- Logo you can find that scss in header.scss -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Left topbar icon scss in header.scss -->
            <!-- ============================================================== -->
            <ul class="left">
              <li class="hide-on-med-and-down">
                <a href="javascript: void(0);" class="nav-toggle">
                  <span class="bars bar1"></span>
                  <span class="bars bar2"></span>
                  <span class="bars bar3"></span>
                </a>
              </li>
              <li class="hide-on-large-only">
                <a href="javascript: void(0);" class="sidebar-toggle">
                  <span class="bars bar1"></span>
                  <span class="bars bar2"></span>
                  <span class="bars bar3"></span>
                </a>
              </li>
            </ul>
            <!-- ============================================================== -->
            <!-- Left topbar icon scss in header.scss -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Right topbar icon scss in header.scss -->
            <!-- ============================================================== -->
            <ul class="right">
              
              <!-- ============================================================== -->
              <!-- Notification icon scss in header.scss -->
              <!-- ============================================================== -->
              <li>
                <a class="dropdown-trigger" href="javascript: void(0);" data-target="noti_dropdown"><i class="material-icons">notifications</i></a>
                <ul id="noti_dropdown" class="mailbox dropdown-content">
                  <li>
                    <div class="drop-title">Notifications</div>
                  </li>
                  <li>
                    <div class="message-center">
                      <!-- Message -->
                      <a href="#">
                        <span class="btn-floating btn-large red"><i class="material-icons">link</i></span>
                        <div class="mail-contnet">
                          <h5>Launch Admin</h5>
                          <span class="mail-desc">Just see the my new admin!</span> <span class="time">9:30 AM</span>
                        </div>
                      </a>
                      <!-- Message -->
                      <a href="#">
                        <span class="btn-floating btn-large blue"><i class="material-icons">date_range</i></span>
                        <div class="mail-contnet">
                          <h5>Event today</h5>
                          <span class="mail-desc">Just a reminder that you have event</span>
                          <span class="time">9:10 AM</span>
                        </div>
                      </a>
                      <!-- Message -->
                      <a href="#">
                        <span class="btn-floating btn-large cyan"><i class="material-icons">settings</i></span>
                        <div class="mail-contnet">
                          <h5>Settings</h5>
                          <span class="mail-desc">You can customize this template as you
                            want</span>
                          <span class="time">9:08 AM</span>
                        </div>
                      </a>
                      <!-- Message -->
                      <a href="#">
                        <span class="btn-floating btn-large green"><i class="material-icons">face</i></span>
                        <div class="mail-contnet">
                          <h5>Lily Jordan</h5>
                          <span class="mail-desc">Just see the my admin!</span>
                          <span class="time">9:02 AM</span>
                        </div>
                      </a>
                    </div>
                  </li>
                  <li>
                    <a class="center-align" href="javascript:void(0);"> <strong>Check all
                        notifications</strong> </a>
                  </li>
                </ul>
              </li>
              <!-- ============================================================== -->
              <!-- Comment topbar icon scss in header.scss -->
              <!-- ============================================================== -->
              </li>
              <!-- ============================================================== -->
              <!-- Profile icon scss in header.scss -->
              <!-- ============================================================== -->
              <li><a class="dropdown-trigger" href="javascript: void(0);" data-target="user_dropdown"><img
                    src="../../assets/images/users/2.jpg" alt="user" class="circle profile-pic"></a>
                <ul id="user_dropdown" class="mailbox dropdown-content dropdown-user">
                  <li>
                    <div class="dw-user-box">
                      <div class="u-img"><img src="../../assets/images/users/2.jpg" alt="user"></div>
                      <div class="u-text">
                        <h4>admin</h4>
                        <p>admin@gmail.com</p>
                        <a class="waves-effect waves-light btn-small red white-text">View
                          Profile</a>
                      </div>
                    </div>
                  </li>
                  <li role="separator" class="divider"></li>
                  <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}<i class="material-icons">power_settings_new</i></a></li>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form> 
                </ul>
              </li>
            </ul>
            <!-- ============================================================== -->
            <!-- Right topbar icon scss in header.scss -->
            <!-- ============================================================== -->
          </div>
        </nav>
        <!-- ============================================================== -->
        <!-- Navbar scss in header.scss -->
        <!-- ============================================================== -->
      </header>
      <!-- ============================================================== -->
      <!-- Sidebar scss in sidebar.scss -->
      <!-- ============================================================== -->
      <aside class="left-sidebar">
        <ul id="slide-out" class="sidenav">
          <li>
            <div class="user-profile" style="background-image: url(../../assets/images/user-bg.jpg);">
                <h6 class="white-text name"><i class="material-icons m-r-10">account_circle</i> <span class="hidden">{{Auth::user()->name}}</span></h6>
            </div>
          </li>
          <li>
              <li>
                <a href="{{url('home')}}" class="collapsible-header"><i class="material-icons">dashboard</i><span class="hide-menu"> Dashboard </span></a>
              </li>
              <li>      
                <a href="#" class="collapsible-header"><i class="material-icons">settings_applications</i><span class="hide-menu"> Settings
                  </span></a>
              </li>
                <li>
                  <a href="#" class="collapsible-header"><i class="material-icons">show_chart</i><span class="hide-menu"> Logs
                  </span></a>
              </li>
                <li>
                  <a href="#" class="collapsible-header"><i class="material-icons">people</i><span class="hide-menu"> Profile </span></a>
              </li>
              <!-- end -->
            </li>
          </ul>
      </aside>
      <!-- ============================================================== -->
      <!-- Sidebar scss in sidebar.scss -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Page wrapper scss in scafholding.scss -->
      <!-- ============================================================== -->
      <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Title and breadcrumb -->
        <!-- ============================================================== -->
        <div class="page-titles">
          <div class="d-flex align-items-center">
            <h5 class="font-medium m-b-0">Dashboard</h5>
            <div class="custom-breadcrumb ml-auto">
              <a href="#!" class="breadcrumb">Home</a>
              <a href="#!" class="breadcrumb">Dashboard</a>
            </div>
          </div>
        </div>
        <!-- ============================================================== -->
        <!-- Container fluid scss in scafholding.scss -->
        <!-- ============================================================== -->
        <div class="container-fluid">
          <!-- ============================================================== -->
          <!-- Sales Summery -->
          <!-- ============================================================== -->
          @yield('content')
        </div>
      </div>
<div class="chat-windows "></div>
<!-- ============================================================== -->
<!-- Right Sidebar -->
<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- All Required js -->
<!-- ============================================================== -->
<script src="{{url('assets/libs/jquery/dist/jquery.min.js')}}"></script>
<script src="{{url('js/materialize.min.js')}}"></script>
<script src="{{url('assets/libs/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js')}}"></script>
<!-- ============================================================== -->
<!-- Apps -->
<!-- ============================================================== -->
<script src="{{url('js/app.js')}}"></script>
<script src="{{url('js/app.init.js')}}"></script>
<script src="{{url('js/app-style-switcher.js')}}"></script>
<!-- ============================================================== -->
<!-- Custom js -->
<!-- ============================================================== -->
<script src="{{url('js/custom.min.js')}}"></script>
<!-- ============================================================== -->
<!-- This page plugin js -->
<!-- ============================================================== -->
{{-- <script src="{{url('assets/libs/chartist/dist/chartist.min.js')}}"></script> --}}
{{-- <script src="{{url('assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js')}}"></script> --}}
<!--c3 JavaScript -->
{{-- <script src="{{url('assets/extra-libs/c3/d3.min.js')}}"></script> --}}
{{-- <script src="{{url('assets/extra-libs/c3/c3.min.js')}}"></script> --}}
{{-- <script src="{{url('assets/libs/chart.js/dist/Chart.min.js')}}"></script> --}}
{{-- <script src="{{url('js/pages/dashboards/dashboard1.js')}}"></script> --}}
<script src="{{url('assets/extra-libs/sparkline/sparkline.js')}}"></script>
                <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>

</body>
</html>