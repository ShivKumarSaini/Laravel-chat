<!-- Header -->
<header>
<?php
use App\Helpers\Session as AppSession;
use App\Helpers\Helper as AppHelper;

$userLogin = AppSession::getLoginData();
?>
    <!-- Header desktop -->
    <div class="container-menu-desktop">
        <!-- Topbar -->
        <div class="top-bar">
            <div class="content-topbar flex-sb-m h-full container">
                <div class="center-top-bar">
                    <p class="text-center">Latest News</p>
                </div>
            </div>
        </div>

        <div class="wrap-menu-desktop">
            <nav class="limiter-menu-desktop container">
                
                <!-- Logo desktop -->		
                <a href="#" class="logo">
                    <!-- <img src="images/icons/logo-01.png" alt="IMG-LOGO"> -->
                </a>

                <!-- Menu desktop -->
                <div class="menu-desktop">
                    <ul class="main-menu">
                    <li><a href="{{URL('/')}}">Home</a></li>
                         <li class="{{Request::is('*all-model*') ? 'active': ''}}"><a href="{{URL('/all-model')}}" class="btn btn-grey">ALL MODELS</a></li>

                            @if (AppSession::isLogin())
                            @if($userLogin->role == 'studio')
                                <li><a href="{{URL('/studio')}}">Studios</a></li>
                            @endif
                            @if($userLogin->role == 'model')
                                <li class="{{Request::is('*live*') ? 'active': ''}}"><a href="{{URL('models/live')}}" class="btn btn-grey">Broadcast Yourself</a></li>
                                <li class="{{Request::is('*models/groupchat') ? 'active': ''}}"><a href="{{URL('/models/groupchat')}}" class="btn btn-grey">Group chat</a></li>
                            @elseif($userLogin->role == 'member')
                                <li class="{{Request::is('*blog*') ? 'active': ''}}"><a href="{{URL('blog')}}" class="btn btn-grey">Blog</a></li>

                            @endif
                            @else
                                <li class="{{Request::is('*live*') ? 'active': ''}}"><a href="{{URL('models/live')}}" class="btn btn-grey">Broadcast Yourself</a></li>
                                <li class="{{Request::is('*blog*') ? 'active': ''}}"><a href="{{URL('blog')}}" class="btn btn-grey">Blog</a></li>
                                <li class="{{Request::is('*studio*') ? 'active': ''}}"><a href="{{URL('studio')}}" class="btn btn-grey">Studios</a></li>
                            @endif
                    </ul>
                </div>	

                <!-- Icon header -->
                <div class="wrap-icon-header flex-w flex-r-m">
                    <ul class="main-menu">
                        <li>
                            <a href="shoping-cart.html">Shop</a>
                        </li>

                        <li>
                            <a href="blog.html">Login</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>	
    </div>

    <!-- Header Mobile -->
    <div class="wrap-header-mobile">
        <!-- Logo moblie -->		
        <div class="logo-mobile">
            <!-- <a href="index.html"><img src="images/icons/logo-01.png" alt="IMG-LOGO"></a> -->
        </div>

        <!-- Icon header -->
        <div class="wrap-icon-header flex-w flex-r-m m-r-15">
            <ul class="main-menu">
                <li>
                    <a href="">Shop</a>
                </li>

                <li>
                    <a href="">Login</a>
                </li>
            </ul>
        </div>

        <!-- Button show menu -->
        <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
            <span class="hamburger-box">
                <span class="hamburger-inner"></span>
            </span>
        </div>
    </div>

    <!-- Menu Mobile -->
    <div class="menu-mobile">
        <ul class="main-menu-m">
            <li class="active-menu">
                <a href="">Models</a>
            </li>

            <li>
                <a href="">Premium Videos</a>
            </li>

            <li>
                <a href="">Live Chat</a>
            </li>

            <li>
                <a href="">Featured Videos</a>
            </li>
        </ul>
    </div>
</header>