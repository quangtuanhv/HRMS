<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Chương trình quản lý nhân sự | Đồ án tốt nghiệp</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="css/fontastic.css">
    <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <!-- jQuery Circle-->
    <link rel="stylesheet" href="css/grasp_mobile_progress_circle-1.0.0.min.css">
    <!-- Custom Scrollbar-->
    <link rel="stylesheet" href="vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon.ico">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
    <script src="vendor/jquery/jquery.min.js"></script>
    @yield('header')

  </head>
  <body>
    <!-- Side Navbar -->
    <div class="preloader" style="/* display: none; */"></div>
    <nav class="side-navbar">
      <div class="side-navbar-wrapper">
        <!-- Sidebar Header    -->
        <div class="sidenav-header d-flex align-items-center justify-content-center">
          <!-- User Info-->
          <div class="sidenav-header-inner text-center"><img src="img/avatar-7.jpg" alt="person" class="img-fluid rounded-circle">
            <h2 class="h5">Nathan Andrews</h2><span>Web Developer</span>
          </div>
          <!-- Small Brand information, appears on minimized sidebar-->
          <div class="sidenav-header-logo"><a href="index.html" class="brand-small text-center"> <strong>HR</strong><strong class="text-primary">MS</strong></a></div>
        </div>
        <!-- Sidebar Navigation Menus-->
        <div class="main-menu">

          <ul id="side-main-menu" class="side-menu list-unstyled">                  
            <li><a href="{{url('/')}}"> <i class="icon-home"></i>Trang chủ</a></li>
            <li><a href="{{url('/danh-sach-nhan-vien')}}"> <i class="fa fa-user"></i>Danh sách nhân viên</a></li>
            <li><a href="charts.html"> <i class="fa fa-bar-chart"></i>Quản lý thông tin</a></li>
            <li><a href="forms.html"> <i class="icon-flask"></i>Quản lý bảo hiểm</a></li>
            <li><a href="forms.html"> <i class="icon-form"></i>Quản lý hợp đồng</a></li>
            <li><a href="tables.html"> <i class="icon-grid"></i>Quản lý lương</a></li>
            <li><a href="#manageCommon" aria-expanded="false" data-toggle="collapse"> <i class="icon-interface-windows"></i>Quản lý chung</a>
              <ul id="manageCommon" class="collapse list-unstyled ">
                <li><a href="{{url('/chuc-vu')}}">Chức vụ</a></li>
                <li><a href="{{url('/trinh-do')}}">Trình độ</a></li>
                <li><a href="{{url('/bo-phan')}}">Bộ phận</a></li>
              </ul>
            </li>
            <li><a href="{{url('/tao-moi-nhan-vien')}}"> <i class="icon-grid"></i>Tạo mới nhân viên</a></li>

          </ul>
        </div>
      </div>
    </nav>
    <div class="page">
      <!-- navbar-->
      <header class="header">
        <nav class="navbar">
          <div class="container-fluid">
            <div class="navbar-holder d-flex align-items-center justify-content-between">
              <div class="navbar-header"><a id="toggle-btn" href="#" class="menu-btn"><i class="icon-bars"> </i></a><a href="index.html" class="navbar-brand">
                  <div class="brand-text d-none d-md-inline-block"><span>Chương trình </span><strong class="text-primary">  Quản lý nhân sự</strong></div></a></div>
              
            </div>
          </div>
        </nav>
      </header>
      	@yield('main')
      <footer class="main-footer">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-6">
              <p>Your company &copy; 2017-2019</p>
            </div>
            <div class="col-sm-6 text-right">
              <p>Design by <a href="https://bootstrapious.com" class="external">Bootstrapious</a></p>
              <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions and it helps me to run Bootstrapious. Thank you for understanding :)-->
            </div>
          </div>
        </div>
      </footer>
    </div>
    <!-- JavaScript files-->
    <script src="vendor/popper.js/umd/popper.min.js"> </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="js/grasp_mobile_progress_circle-1.0.0.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/charts-home.js"></script>
    <!-- Main File-->
    <script src="js/front.js"></script>
    @yield('script')
  </body>
</html>