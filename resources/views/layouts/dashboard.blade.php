<!DOCTYPE html>
<html lang="en">


<!-- index.html  21 Nov 2019 03:44:50 GMT -->

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>E-waste Dashboard</title>
    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets2/css/app.min.css') }}">
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('assets2/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets2/css/components.css') }}">
    <!-- Custom style CSS -->
    <link rel="stylesheet" href="{{ asset('assets2/css/custom.css') }}">
    {{-- <link rel='shortcut icon' type='image/x-icon' href='assets2/img/favicon.ico' /> --}}
</head>

<body>
    <div class="loader"></div>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar sticky">
                <div class="form-inline mr-auto">
                    <ul class="navbar-nav mr-3">
                        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg
									collapse-btn">
                                <i data-feather="align-justify"></i></a></li>
                        <li><a href="#" class="nav-link nav-link-lg fullscreen-btn">
                                <i data-feather="maximize"></i>
                            </a></li>
                        <li>
                            <form class="form-inline mr-auto">
                                <div class="search-element">
                                    <input class="form-control" type="search" placeholder="Search" aria-label="Search"
                                        data-width="200">
                                    <button class="btn" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </form>
                        </li>
                    </ul>
                </div>
                <ul class="navbar-nav navbar-right">


                    <li class="dropdown"><a href="#" data-toggle="dropdown"
                            class="nav-link dropdown-toggle nav-link-lg nav-link-user"> <img alt="image"
                                src="https://ui-avatars.com/api/?name={{ Auth::user()->name }}"
                                class="user-img-radious-style"> <span class="d-sm-none d-lg-inline-block"></span></a>
                        <div class="dropdown-menu dropdown-menu-right pullDown">
                            <div class="dropdown-title">Hello {{ Auth::user()->name }}</div>
                            <a href="{{ route('profile.show') }}" class="dropdown-item has-icon"> <i
                                    class="far
										fa-user"></i> Profile
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>

                            <form action="{{ route('logout') }}" method="POST" id="logout-form">@csrf</form>
                        </div>
                    </li>
                </ul>
            </nav>
            <div class="main-sidebar sidebar-style-2">
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand">
                        <a href="{{ route('dashboard') }}">
                            <span class="logo-name">E-Waste</span>
                        </a>
                    </div>
                    <ul class="sidebar-menu">
                        <li class="menu-header">Main</li>
                        <li class="dropdown active">
                            <a href="{{ route('dashboard') }}" class="nav-link">
                                <i data-feather="monitor"></i><span>Dashboard</span>
                            </a>
                        </li>
                        @if (Auth::user()->user_type == 'normal_user')
                            <li class="dropdown">
                                <a href="{{ route('register.item') }}" class="nav-link">
                                    <i data-feather="monitor"></i><span>Register Item</span>
                                </a>
                            </li>
                        @endif

                        @if (Auth::user()->user_type == 'official_user')
                            <li class="dropdown">
                                <a href="{{ route('verify.item') }}" class="nav-link">
                                    <i data-feather="monitor"></i><span>Verify item</span>
                                </a>
                            </li>
                        @endif



                    </ul>
                </aside>
            </div>
            <!-- Main Content -->
            {{ $slot }}

        </div>
    </div>
    <!-- General JS Scripts -->
    <script src="{{ asset('assets2/js/app.min.js') }}"></script>
    <!-- JS Libraies -->
    <script src="{{ asset('assets2/bundles/apexcharts/apexcharts.min.js') }}"></script>
    <!-- Page Specific JS File -->
    <script src="{{ asset('assets2/js/page/index.js') }}"></script>
    <!-- Template JS File -->
    <script src="{{ asset('assets2/js/scripts.js') }}"></script>
    <!-- Custom JS File -->
    <script src="{{ asset('assets2/js/custom.js') }}"></script>
</body>


<!-- index.html  21 Nov 2019 03:47:04 GMT -->

</html>
