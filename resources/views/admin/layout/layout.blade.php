<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- CSS -->
<!-- CSS -->
<link rel="stylesheet" href="{{ asset('admin/css/bootstrap-reboot.min.css') }}">
<link rel="stylesheet" href="{{ asset('admin/css/bootstrap-grid.min.css') }}">
<link rel="stylesheet" href="{{ asset('admin/css/magnific-popup.css') }}">
<link rel="stylesheet" href="{{ asset('admin/css/jquery.mCustomScrollbar.min.css') }}">
<link rel="stylesheet" href="{{ asset('admin/css/select2.min.css') }}">
<link rel="stylesheet" href="{{ asset('admin/css/ionicons.min.css') }}">
<link rel="stylesheet" href="{{ asset('admin/css/admin.css') }}">



	<!-- Favicons -->
	<link rel="icon" type="image/png" href="icon/favicon-32x32.png" sizes="32x32">
	<link rel="apple-touch-icon" href="icon/favicon-32x32.png">

	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="Dmitry Volkov">
	<title>Admin</title>

</head>
<body>
	<!-- header -->
	<header class="header">
		<div class="header__content">
			<!-- header logo -->
			<a href="{{ route('admin.dashboard') }}" class="header__logo">
                <img src="{{ asset('admin/img/') }}" alt="Logo">

			</a>
			<!-- end header logo -->

			<!-- header menu btn -->
			<button class="header__btn" type="button">
				<span></span>
				<span></span>
				<span></span>
			</button>
			<!-- end header menu btn -->
		</div>
	</header>
	<!-- end header -->

	<!-- sidebar -->
	<div class="sidebar">
		

		<!-- sidebar user -->
		<div class="sidebar__user">
			<div class="sidebar__user-img">
				<img src="img/user.svg" alt="">
			</div>

			<div class="sidebar__user-title">
               <a href="{{ route('admin.dashboard') }}">
				<span>Role</span>
				<p>Admin</p>
			</a></div>
			
		</div>
		<!-- end sidebar user -->

		<!-- sidebar nav -->
		<div class="sidebar__nav-wrap">
			<ul class="sidebar__nav">

				<!-- collapse -->
				<li class="sidebar__nav-item">
					<a class="sidebar__nav-link" data-toggle="collapse" href="#collapseMenu" role="button" aria-expanded="false" aria-controls="collapseMenu"><i class="icon ion-ios-copy"></i> <span>Danh sách phim</span> <i class="icon ion-md-arrow-dropdown"></i></a>

					<ul class="collapse sidebar__menu" id="collapseMenu">
                        <li><a href="{{ route('admin.movies.create') }}">Thêm phim</a></li>
                        <li><a href="{{ route('admin.movies.index') }}">Danh sách</a></li>
					</ul>
				</li>
                <li class="sidebar__nav-item">
                    <a class="sidebar__nav-link" data-toggle="collapse" href="#collapseTheaters" role="button" aria-expanded="false" aria-controls="collapseTheaters">
                        <i class="icon ion-ios-home"></i>
                        <span>Danh sách rạp</span>
                        <i class="icon ion-md-arrow-dropdown"></i>
                    </a>

                    <ul class="collapse sidebar__menu" id="collapseTheaters">
                        <li><a href="{{ route('admin.theaters.create') }}">Thêm rạp </a></li>
                        <li><a href="{{ route('admin.theaters.index') }}">Danh sách</a></li>
                    </ul>
                </li>
                <li class="sidebar__nav-item">
                    <a class="sidebar__nav-link" data-toggle="collapse" href="#collapseRooms" role="button" aria-expanded="false" aria-controls="collapseRooms">
                        <i class="icon ion-ios-home"></i>
                        <span>Danh sách phòng</span>
                        <i class="icon ion-md-arrow-dropdown"></i>
                    </a>

                    <ul class="collapse sidebar__menu" id="collapseRooms">
                        <li><a href="{{ route('admin.rooms.create') }}">Thêm phòng</a></li>
                        <li><a href="{{ route('admin.rooms.index') }}">Danh sách</a></li>
                    </ul>
                </li>
                <li class="sidebar__nav-item">
                    <a class="sidebar__nav-link" data-toggle="collapse" href="#collapseSeats" role="button" aria-expanded="false" aria-controls="collapseSeats">
                        <i class="icon ion-ios-home"></i>
                        <span>Danh sách ghế</span>
                        <i class="icon ion-md-arrow-dropdown"></i>
                    </a>

                    <ul class="collapse sidebar__menu" id="collapseSeats">
                        <li><a href="{{ route('admin.seats.create') }}">Thêm ghế</a></li>
                        <li><a href="{{ route('admin.seats.index') }}">Danh sách</a></li>
                    </ul>
                </li>
                <li class="sidebar__nav-item">
                    <a class="sidebar__nav-link" data-toggle="collapse" href="#collapseFoods" role="button" aria-expanded="false" aria-controls="collapseFoods">
                        <i class="icon ion-ios-home"></i>
                        <span>Danh sách món ăn</span>
                        <i class="icon ion-md-arrow-dropdown"></i>
                    </a>

                    <ul class="collapse sidebar__menu" id="collapseFoods">
                        <li><a href="{{ route('admin.foods.create') }}">Thêm món ăn </a></li>
                        <li><a href="{{ route('admin.foods.index') }}">Danh sách</a></li>
                    </ul>
                </li>
                <li class="sidebar__nav-item">
                    <a class="sidebar__nav-link" data-toggle="collapse" href="#collapseSchedules" role="button" aria-expanded="false" aria-controls="collapseSchedules">
                        <i class="icon ion-ios-home"></i>
                        <span>Danh sách lịch chiếu</span>
                        <i class="icon ion-md-arrow-dropdown"></i>
                    </a>

                    <ul class="collapse sidebar__menu" id="collapseSchedules">
                        <li><a href="{{ route('admin.schedules.create') }}">Lên lịch chiếu</a></li>
                        <li><a href="{{ route('admin.schedules.index') }}">Danh sách</a></li>
                    </ul>
                </li>
                <li class="sidebar__nav-item">
                    <a class="sidebar__nav-link" data-toggle="collapse" href="#collapseUsers" role="button" aria-expanded="false" aria-controls="collapseUsers">
                        <i class="icon ion-ios-people"></i>
                        <span>Tài khoản người dùng</span>
                        <i class="icon ion-md-arrow-dropdown"></i>
                    </a>

                    <ul class="collapse sidebar__menu" id="collapseUsers">
                        <li><a href="{{ route('admin.users.create') }}">Thêm người dùng</a></li>
                        <li><a href="{{ route('admin.users.index') }}">Danh sách</a></li>
                    </ul>
                </li>

                <li class="sidebar__nav-item">
                    <a class="sidebar__nav-link" data-toggle="collapse" href="#collapseBlogs" role="button" aria-expanded="false" aria-controls="collapseBlogs">
                        <i class="icon ion-ios-document"></i>
                        <span>Danh sách bài viết</span>
                        <i class="icon ion-md-arrow-dropdown"></i>
                    </a>

                    <ul class="collapse sidebar__menu" id="collapseBlogs">
                        <li><a href="{{ route('admin.blogs.create') }}">Thêm bài viết</a></li>
                        <li><a href="{{ route('admin.blogs.index') }}">Danh sách</a></li>
                    </ul>
                </li>
                <li class="sidebar__nav-item">
                    <a class="sidebar__nav-link" data-toggle="collapse" href="#collapsetickets" role="button" aria-expanded="false" aria-controls="collapsetickets">
                        <i class="icon ion-ios-document"></i>
                        <span>Danh sách vé</span>
                        <i class="icon ion-md-arrow-dropdown"></i>
                    </a>

                    <ul class="collapse sidebar__menu" id="collapsetickets">
                        <li><a href="{{ route('admin.tickets.index') }}">Danh sách</a></li>
                    </ul>
                </li>
				<!-- end collapse -->
			</ul>
		</div>
		<!-- end sidebar nav -->

		<!-- sidebar copyright -->
		<div class="sidebar__copyright">© VODI, 2024.</a></div>
		<!-- end sidebar copyright -->
	</div>
	<!-- end sidebar -->

	<!-- main content -->
    @yield('content')


    	<!-- end main content -->

	<!-- JS -->
    <script src="{{ asset('admin/js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('admin/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('admin/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('admin/js/jquery.mousewheel.min.js') }}"></script>
    <script src="{{ asset('admin/js/jquery.mCustomScrollbar.min.js') }}"></script>
    <script src="{{ asset('admin/js/select2.min.js') }}"></script>
    <script src="{{ asset('admin/js/admin.js') }}"></script>

</body>
</html>
