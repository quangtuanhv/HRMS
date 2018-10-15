<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="description" content="">
		<meta name="author" content="">

		<!-- Title -->
		<title>Neptune</title>

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="{{ asset('dist/vendor/bootstrap/css/bootstrap.min.css') }}">
		<link rel="stylesheet" href="{{ asset('dist/vendor/themify-icons/themify-icons.css') }}">
		<link rel="stylesheet" href="{{ asset('dist/vendor/font-awesome/css/font-awesome.min.css') }}">
		<link rel="stylesheet" href="{{ asset('dist/vendor/animate.css/animate.min.css') }}">
		<link rel="stylesheet" href="{{ asset('dist/vendor/jscrollpane/jquery.jscrollpane.css') }}">
		<link rel="stylesheet" href="{{ asset('dist/vendor/waves/waves.min.css') }}">
		<link rel="stylesheet" href="{{ asset('dist/vendor/chartist/chartist.min.css') }}">
		<link rel="stylesheet" href="{{ asset('dist/vendor/switchery/dist/switchery.min.css') }}">

		<!-- Neptune CSS -->
		<link rel="stylesheet" href="{{ asset('dist/css/core.css') }}">
		<script type="text/javascript" src="{{ asset('dist/js/jquery.js') }}"></script>

		<!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body class="large-sidebar fixed-sidebar fixed-header">
		<div class="wrapper">

			<!-- Preloader -->
			<div class="preloader"></div>

			<!-- Sidebar -->
			<div class="site-sidebar-overlay"></div>
			<div class="site-sidebar">
				<a class="logo" href="index.html">
					<span class="l-text">Quản lý nhân sự</span>
					
				</a>
				<div class="custom-scroll custom-scroll-light">
					<ul class="sidebar-menu">
						
						<li class="with-sub">
							<a href="{{ url('/phongban')  }}" class="waves-effect  waves-light">
								
								<span class="s-icon"><i class="ti-menu-alt"></i></span>
								<span class="s-text">Quản lý phòng ban</span>
							</a>
						</li>
						<li class="with-sub">
							<a href="{{ url('/chucvu')  }}" class="waves-effect  waves-light">
								
								<span class="s-icon"><i class="ti-view-grid"></i></span>
								<span class="s-text">Quản lý chức vụ</span>
							</a>
						</li>
						<li class="with-sub">
							<a href="{{ url('/nhanvien')  }}" class="waves-effect  waves-light">
								
								<span class="s-icon"><i class="ti-pencil-alt"></i></span>
								<span class="s-text">Quản lý nhân viên</span>
							</a>
						</li>
						
						
					</ul>
				</div>
			</div>
			
		
		

			<div class="site-content">
				<!-- Content -->
					@yield('main')	

				<!-- Footer -->
				<footer class="footer">
					<div class="container-fluid">
						Phần mềm quản lý nhân sự
					</div>
				</footer>
			</div>

		</div>

		
		<script type="text/javascript" src="{{ asset('dist/vendor/tether/js/tether.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('dist/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('dist/vendor/detectmobilebrowser/detectmobilebrowser.js') }}"></script>
		<script type="text/javascript" src="{{ asset('dist/vendor/jscrollpane/jquery.mousewheel.js') }}"></script>
		<script type="text/javascript" src="{{ asset('dist/vendor/jscrollpane/mwheelIntent.js') }}"></script>
		<script type="text/javascript" src="{{ asset('dist/vendor/jscrollpane/jquery.jscrollpane.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('dist/vendor/waves/waves.min.js') }}"></script>
	{{-- 	<script type="text/javascript" src="{{ asset('dist/vendor/chartist/chartist.min.js') }}"></script> --}}
		<script type="text/javascript" src="{{ asset('dist/vendor/switchery/dist/switchery.min.js') }}"></script>

		<!-- Neptune JS -->
		<script type="text/javascript" src="{{ asset('dist/js/app.js') }}"></script>
		{{-- <script type="text/javascript" src="{{ asset('dist/js/demo.js') }}"></script> --}}
	</body>
</html>