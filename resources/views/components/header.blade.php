<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Basic -->
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">

	    <!-- Mobile Metas -->
	    <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ Config::get('constants.general.site_name') }}</title>

	    <!-- Bootstrap CSS -->
	    <link rel="stylesheet" href="../css/bootstrap.min.css">
	    <!-- Site CSS -->
	    <link rel="stylesheet" href="../css/style.css">
	    <!-- Responsive CSS -->
	    <link rel="stylesheet" href="../css/responsive.css">
	    <!-- color -->
        <link id="changeable-colors" rel="stylesheet" href="../css/colors/orange.css" />
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	    <!-- Modernizer -->
	    <script src="../js/modernizer.js"></script>

    </head>

	<body>
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v8.0" nonce="HkhwBKfv"></script>
    
    <div id="loader">
        <div id="status"></div>
    </div>
    <div id="site-header">
    
        <header id="header" class="header-block-top">
            <div class="container">
                <div class="row">
                    <div class="main-menu">
                        <!-- navbar -->
                        <nav class="navbar navbar-default" id="mainNav">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <div class="logo">
                                    <a class="navbar-brand js-scroll-trigger logo-header" href="#">
                                        <img src="../images/logo.png" alt="">
                                    </a>
                                </div>
                            </div>
                            <div id="navbar" class="navbar-collapse collapse">
                                <ul class="nav navbar-nav navbar-right">
                                    <li class="active"><a href="{{ route('home') }}#banner">Trang chủ</a></li>
                                    <li><a href="{{ route('home') }}#about">Câu chuyện</a></li>
									<li><a href="{{ route('home') }}#saleoff">Khuyến mãi</a></li>
                                    <li><a href="{{ route('home') }}#reservation">Đặt món</a></li>
                                    <li><a href="{{ route('home') }}#our_team">Cảm nhận Thực khách</a></li>
                                    <li>
                                        <a class="nav_corner" style="color: lightyellow;" href="{!! route('changeLanguage', ['en']) !!}">EN /</a>
                                        <a class="nav_corner" style="color: lightyellow;" href="{!! route('changeLanguage', ['vi']) !!}">VI</a>
                                    </li>
                                    <li>
                                    @if (Auth::check())
                                    <li>
                                        <a class="nav_corner2" href="#">{{ auth()->user()->user_name }}</a>
                                    </li>
                                    <li class="nav-item dropdown nav_corner3">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }} <span class="caret"></span>
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                        </div>
                                    </li>
                                    @else
                                        <a style="color: lightyellow;" href="{!! route('login') !!}">Login</a>
                                    @endif
                                    </li>
                                </ul>
                            </div>
                            <!-- end nav-collapse -->
                        </nav>
                        <!-- end navbar -->
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container-fluid -->
        </header>
        <!-- end header -->
    </div>
	<!-- end site-header -->

                                
    