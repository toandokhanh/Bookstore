@vite('resources/css/app.css')
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Admin Bookstore</title>
    <link rel="stylesheet" type="text/css" href="/admin/css/reset.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="/admin/css/text.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="/admin/css/grid.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="/admin/css/layout.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="/admin/css/nav.css" media="screen" />
    <link href="css/table/demo_page.css" rel="stylesheet" type="text/css" />
    <!-- BEGIN: load jquery -->
    <script src="/admin/js/jquery-1.6.4.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="/admin/js/jquery-ui/jquery.ui.core.min.js"></script>
    <script src="/admin/js/jquery-ui/jquery.ui.widget.min.js" type="text/javascript"></script>
    <script src="/admin/js/jquery-ui/jquery.ui.accordion.min.js" type="text/javascript"></script>
    <script src="/admin/js/jquery-ui/jquery.effects.core.min.js" type="text/javascript"></script>
    <script src="/admin/js/jquery-ui/jquery.effects.slide.min.js" type="text/javascript"></script>
    <script src="/admin/js/jquery-ui/jquery.ui.mouse.min.js" type="text/javascript"></script>
    <script src="/admin/js/jquery-ui/jquery.ui.sortable.min.js" type="text/javascript"></script>
    <script src="/admin/js/table/jquery.dataTables.min.js" type="text/javascript"></script>
    <!-- END: load jquery -->
    <script type="text/javascript" src="/admin/js/table/table.js"></script>
    <script src="/admin/js/setup.js" type="text/javascript"></script>
	 <script type="text/javascript">
        $(document).ready(function () {
            setupLeftMenu();
		    setSidebarHeight();
        });
    </script>

</head>
<body>
    <div class="container_12">
        <div class="grid_12 header-repeat">
            <div id="branding">
				<div class="floatleft middle">
                    <a href="{{ route('admin') }}">{{ view('components.application-logo-new') }}</a>

					{{-- {{-- <h1>Bookstrore</h1>
                    <br>
                    <br>
					<p>www.bookstore.com</p> --}}
				</div>
                <div class="floatright">
                    <div class="floatleft">
                        <img src="/admin/img/img-profile.jpg" alt="Profile Pic" /></div>
                    <div class="floatleft marginleft10">
                        <ul class="inline-ul floatleft">
                            <li>Xin chào {{ Auth::guard('admin')->user()->use_name; }}</li>
                            <span class="text-[#fff]">|</span>
                            <li><a href={{ route('admin-logout') }}>Đăng xuất</a></li>
                        </ul>
                    </div>
                </div>
                <div class="clear">
                </div>
            </div>
        </div>
        <div class="clear">
        </div>
        <div class="grid_12">
            <ul class="nav main">
                <li class="ic-dashboard"><a href={{ route('admin') }}><span>Bộ điều khiển</span></a> </li>
                <li class="ic-form-style"><a href={{ route('admin-profile') }}><span>Hồ sơ cá nhân</span></a></li>
				<li class="ic-typography"><a href="#chua-update"><span>Đổi mật khẩu</span></a></li>
                {{-- <li class="ic-charts"><a href=""><span>Quản trị viên Bookstore</span></a></li>   --}}
            </ul>
        </div>
        <div class="clear">
        </div>