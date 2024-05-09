<!DOCTYPE html>
<html lang="en">

<head>

    <title>@yield('title')</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="shortcut icon" href="{{ asset('client/favicon.ico') }}">

    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800&family=Open+Sans:wght@300;400;600;700;800&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('client/vendor/font-awesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('client/vendor/hs-mega-menu/dist/hs-mega-menu.min.css') }}">
    <link rel="stylesheet" href="{{ asset('client/vendor/dzsparallaxer/dzsparallaxer.css') }}">
    <link rel="stylesheet" href="{{ asset('client/vendor/cubeportfolio/css/cubeportfolio.min.css') }}">
    <link rel="stylesheet" href="{{ asset('client/vendor/aos/dist/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('client/vendor/slick-carousel/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('client/vendor/fancybox/dist/jquery.fancybox.css') }}">

    <link rel="stylesheet" href="{{ asset('client/css/theme.css') }}">

</head>

<body class="home-v5">

    <header id="header" class="header left-aligned-navbar"
        data-hs-header-options="{
            &quot;fixMoment&quot;: 1000,
            &quot;fixEffect&quot;: &quot;slide&quot;
        }">
        <div class="header-section header-white-nav-links bg-dark-1">
            <div id="logoAndNav" class="container px-md-6 px-xl-7 px-wd-6">

                <nav class="js-mega-menu navbar navbar-expand-xl py-0 position-static justify-content-start">

                    <button type="button" class="navbar-toggler btn btn-icon btn-sm rounded-circle mr-2d"
                        aria-label="Toggle navigation" aria-expanded="false" aria-controls="navBar"
                        data-toggle="collapse" data-target="#navBar">
                        <span class="navbar-toggler-default">
                            <svg width="14" height="14" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                <path fill="currentColor"
                                    d="M17.4,6.2H0.6C0.3,6.2,0,5.9,0,5.5V4.1c0-0.4,0.3-0.7,0.6-0.7h16.9c0.3,0,0.6,0.3,0.6,0.7v1.4C18,5.9,17.7,6.2,17.4,6.2z M17.4,14.1H0.6c-0.3,0-0.6-0.3-0.6-0.7V12c0-0.4,0.3-0.7,0.6-0.7h16.9c0.3,0,0.6,0.3,0.6,0.7v1.4C18,13.7,17.7,14.1,17.4,14.1z" />
                            </svg>
                        </span>
                        <span class="navbar-toggler-toggled">
                            <svg width="14" height="14" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                <path fill="currentColor"
                                    d="M11.5,9.5l5-5c0.2-0.2,0.2-0.6-0.1-0.9l-1-1c-0.3-0.3-0.7-0.3-0.9-0.1l-5,5l-5-5C4.3,2.3,3.9,2.4,3.6,2.6l-1,1 C2.4,3.9,2.3,4.3,2.5,4.5l5,5l-5,5c-0.2,0.2-0.2,0.6,0.1,0.9l1,1c0.3,0.3,0.7,0.3,0.9,0.1l5-5l5,5c0.2,0.2,0.6,0.2,0.9-0.1l1-1 c0.3-0.3,0.3-0.7,0.1-0.9L11.5,9.5z" />
                            </svg>
                        </span>
                    </button>


                    <div class="hs-unfold d-none d-xl-block">
                        <a class="js-hs-unfold-invoker mr-4" href="javascript:;"
                            data-hs-unfold-options="{
                                &quot;target&quot;: &quot;#sidebarContent&quot;,
                                &quot;type&quot;: &quot;css-animation&quot;,
                                &quot;animationIn&quot;: &quot;fadeInLeft&quot;,
                                &quot;animationOut&quot;: &quot;fadeOutLeft&quot;,
                                &quot;hasOverlay&quot;: &quot;rgba(55, 125, 255, 0.1)&quot;,
                                &quot;smartPositionOff&quot;: true
                            }"><svg
                                xmlns="http://www.w3.org/2000/svg" width="16" height="13" style="fill: #97979f;">
                                {{-- <path
                                    d="M0 13L0 11.4 16 11.4 16 13 0 13ZM0 5.7L16 5.7 16 7.3 0 7.3 0 5.7ZM0 0L16 0 16 1.6 0 1.6 0 0Z">
                                </path> --}}
                            </svg>
                        </a>
                    </div>


                    <a class="navbar-brand w-auto mr-xl-5 mr-wd-8" aria-label="Vodi">
                        <svg version="1.1" width="103" height="40px" style="fill: #fff;">
                            <g>
                                <path class="vodi-svg0"
                                    d="M72.8,12.7c0-2.7,0-1.8,0-4.4c0-0.9,0-1.8,0-2.8C73,3,74.7,1.4,77,1.4c2.3,0,4.1,1.8,4.2,4.2c0,1,0,2.1,0,3.1
                                c0,6.5,0,9.4,0,15.9c0,4.7-1.7,8.8-5.6,11.5c-4.5,3.1-9.3,3.5-14.1,0.9c-4.7-2.5-7.1-6.7-7-12.1c0.1-7.8,6.3-13.6,14.1-13.2
                                c0.7,0,1.4,0.2,2.1,0.3C71.3,12.2,72,12.4,72.8,12.7z M67.8,19.8c-2.9,0-5.2,2.2-5.2,5c0,2.9,2.3,5.3,5.2,5.3
                                c2.8,0,5.2-2.4,5.2-5.2C73,22.2,70.6,19.8,67.8,19.8z
                                M39.9,38.6c-7.3,0-13.3-6.1-13.3-13.5c0-7.5,5.9-13.4,13.4-13.4c7.5,0,13.4,6,13.4,13.5
                                C53.4,32.6,47.4,38.6,39.9,38.6z M39.9,30.6c3.2,0,5.6-2.3,5.6-5.6c0-3.2-2.3-5.5-5.5-5.5c-3.2,0-5.6,2.2-5.6,5.4
                                C34.4,28.2,36.7,30.6,39.9,30.6z
                                M14.6,27c0.6-1.4,1.1-2.6,1.6-3.8c1.2-2.9,2.5-5.8,3.7-8.8c0.7-1.7,2-2.8,4-2.7c3,0,4.9,2.6,3.8,5.4
                                c-0.5,1.3-1.2,2.6-1.8,3.9c-2.4,5-4.9,10-7.3,15c-0.8,1.6-2,2.6-3.9,2.6c-2,0-3.3-0.8-4.2-2.6c-2.7-5.6-5.3-11.1-8-16.7
                                c-0.3-0.7-0.6-1.3-0.9-2c-0.8-1.8-0.3-3.7,1.1-4.8c1.5-1.2,4-1.3,5.3,0c0.7,0.6,1.2,1.5,1.6,2.3C11.3,18.8,12.9,22.7,14.6,27z
                                M90.9,25.1c0,3.1,0,6.2,0,9.4c0,1.9-1.2,3.4-2.9,4c-1.7,0.5-3.5,0-4.5-1.6c-0.5-0.8-0.8-1.8-0.8-2.6
                                c-0.1-6.1-0.1-11.3,0-17.5c0-2.2,1.5-3.9,3.5-4.2c2.1-0.3,4.1,0.9,4.7,2.9c0.1,0.5,0.2,1.1,0.2,1.6C90.9,20,90.9,22.1,90.9,25.1
                                C90.9,25.1,90.9,25.1,90.9,25.1z
                                M90.2,4.7L86,2.3c-1.3-0.8-3,0.2-3,1.7v4.8c0,1.5,1.7,2.5,3,1.7l4.2-2.4C91.5,7.4,91.5,5.5,90.2,4.7z"></path>
                            </g>
                        </svg>
                    </a>


                    <div id="navBar" class="collapse navbar-collapse order-1 order-xl-0">
                        <div class="navbar-body header-abs-top-inner">
                            <ul class="navbar-nav">

                                <li class="hs-has-mega-menu navbar-nav-item">
                                    <a id="homeMegaMenu" class="hs-mega-menu-invoker py-xl-3d line-height-lg nav-link font-secondary" href="{{ route('home') }}" aria-haspopup="true" aria-expanded="false">Trang chủ</a>
                                </li>

                                <li class="hs-has-mega-menu navbar-nav-item">
                                    <a id="moviesMegaMenu" class="hs-mega-menu-invoker py-xl-3d line-height-lg nav-link font-secondary" href="{{ route('frontend.movies') }}" aria-haspopup="true" aria-expanded="false">Danh sách phim</a>




                                </li>

                                <li class="hs-has-sub-menu navbar-nav-item">
                                    <a id="blogMegaMenu" class="hs-mega-menu-invoker py-xl-3d line-height-lg nav-link font-secondary" href="{{ route('blogs') }}" aria-haspopup="true" aria-expanded="false" aria-labelledby="blogSubMenu">Bài viết</a>
                                </li>



                            </ul>
                        </div>
                    </div>

                    <div class="d-flex align-items-center ml-auto">
                        {{-- <form class="d-none d-xl-block">
                            <label class="sr-only">Tìm kiếm</label>
                            <div class="input-group">
                                <input type="email"
                                    class="search-form-control form-control py-2 pl-4 min-width-250 rounded-pill bg-transparent border-gray-5400 min-w-370"
                                    name="email" id="searchproduct-item" placeholder="Tìm kiếm..."
                                    aria-label="Search..." aria-describedby="searchProduct1" required>
                                <div class="input-group-append position-absolute top-0 bottom-0 right-0  z-index-4">
                                    <button class="d-flex py-2 px-3 border-0 bg-transparent align-items-center"
                                        type="button" id="searchProduct1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                            style="fill: #4e5567;">
                                            <path
                                                d="M7 0C11-0.1 13.4 2.1 14.6 4.9 15.5 7.1 14.9 9.8 13.9 11.4 13.7 11.7 13.6 12 13.3 12.2 13.4 12.5 14.2 13.1 14.4 13.4 15.4 14.3 16.3 15.2 17.2 16.1 17.5 16.4 18.2 16.9 18 17.5 17.9 17.6 17.9 17.7 17.8 17.8 17.2 18.3 16.7 17.8 16.4 17.4 15.4 16.4 14.3 15.4 13.3 14.3 13 14.1 12.8 13.8 12.5 13.6 12.4 13.5 12.3 13.3 12.2 13.3 12 13.4 11.5 13.8 11.3 14 10.7 14.4 9.9 14.6 9.2 14.8 8.9 14.9 8.6 14.9 8.3 14.9 8 15 7.4 15.1 7.1 15 6.3 14.8 5.6 14.8 4.9 14.5 2.7 13.6 1.1 12.1 0.4 9.7 0 8.7-0.2 7.1 0.2 6 0.3 5.3 0.5 4.6 0.9 4 1.8 2.4 3 1.3 4.7 0.5 5.2 0.3 5.7 0.2 6.3 0.1 6.5 0 6.8 0.1 7 0ZM7.3 1.5C7.1 1.6 6.8 1.5 6.7 1.5 6.2 1.6 5.8 1.7 5.4 1.9 3.7 2.5 2.6 3.7 1.9 5.4 1.7 5.8 1.7 6.2 1.6 6.6 1.4 7.4 1.6 8.5 1.8 9.1 2.4 11.1 3.5 12.3 5.3 13 5.9 13.3 6.6 13.5 7.5 13.5 7.7 13.5 7.9 13.5 8.1 13.5 8.6 13.4 9.1 13.3 9.6 13.1 11.2 12.5 12.4 11.4 13.1 9.8 13.6 8.5 13.6 6.6 13.1 5.3 12.2 3.1 10.4 1.5 7.3 1.5Z">
                                            </path>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </form> --}}
                        <div class="d-inline-flex ml-md-5">
                            <ul class="d-flex list-unstyled mb-0 align-items-center">
                                <li class="col d-xl-none position-static px-2">

                                    <div class="hs-unfold mr-2 position-static">
                                        <a class="js-hs-unfold-invoker btn btn-icon btn-ghost-secondary nav-link"
                                            href="javascript:;"
                                            data-hs-unfold-options="{
                                                &quot;target&quot;: &quot;#searchClassic&quot;,
                                                &quot;type&quot;: &quot;css-animation&quot;,
                                                &quot;animationIn&quot;: &quot;slideInUp&quot;
                                            }">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                style="fill: #ffffff;">
                                                <path
                                                    d="M7 0C11-0.1 13.4 2.1 14.6 4.9 15.5 7.1 14.9 9.8 13.9 11.4 13.7 11.7 13.6 12 13.3 12.2 13.4 12.5 14.2 13.1 14.4 13.4 15.4 14.3 16.3 15.2 17.2 16.1 17.5 16.4 18.2 16.9 18 17.5 17.9 17.6 17.9 17.7 17.8 17.8 17.2 18.3 16.7 17.8 16.4 17.4 15.4 16.4 14.3 15.4 13.3 14.3 13 14.1 12.8 13.8 12.5 13.6 12.4 13.5 12.3 13.3 12.2 13.3 12 13.4 11.5 13.8 11.3 14 10.7 14.4 9.9 14.6 9.2 14.8 8.9 14.9 8.6 14.9 8.3 14.9 8 15 7.4 15.1 7.1 15 6.3 14.8 5.6 14.8 4.9 14.5 2.7 13.6 1.1 12.1 0.4 9.7 0 8.7-0.2 7.1 0.2 6 0.3 5.3 0.5 4.6 0.9 4 1.8 2.4 3 1.3 4.7 0.5 5.2 0.3 5.7 0.2 6.3 0.1 6.5 0 6.8 0.1 7 0ZM7.3 1.5C7.1 1.6 6.8 1.5 6.7 1.5 6.2 1.6 5.8 1.7 5.4 1.9 3.7 2.5 2.6 3.7 1.9 5.4 1.7 5.8 1.7 6.2 1.6 6.6 1.4 7.4 1.6 8.5 1.8 9.1 2.4 11.1 3.5 12.3 5.3 13 5.9 13.3 6.6 13.5 7.5 13.5 7.7 13.5 7.9 13.5 8.1 13.5 8.6 13.4 9.1 13.3 9.6 13.1 11.2 12.5 12.4 11.4 13.1 9.8 13.6 8.5 13.6 6.6 13.1 5.3 12.2 3.1 10.4 1.5 7.3 1.5Z">
                                                </path>
                                            </svg>
                                        </a>
                                        <div id="searchClassic"
                                            class="hs-unfold-content dropdown-menu w-100 border-0 rounded-0 px-3 mt-0 right-0 left-0 mt-n2">
                                            <form class="input-group input-group-sm input-group-merge">
                                                <input type="text"
                                                    class="form-control search-form-control rounded-pill"
                                                    placeholder="Search..." aria-label="Search...">
                                                <div class="input-group-append">
                                                    <button type="button" class="btn">
                                                        <i class="fas fa-search"></i>
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                </li>

                                <li class="col pr-xl-0 px-2 px-sm-3">

                                    <div class="hs-unfold">
                                        @if(Auth::check())
                                            <div class="dropdown">
                                                <div class="">
                                                    @if(Auth::check())
                                                    <div class="dropdown">
                                                        <!-- Thay đổi id của dropdown invoker để tránh trùng lặp -->
                                                        <a id="userDropdownInvoker" class="  dropdown-toggle py-4 position-relative d-flex align-items-center" href="javascript:;">
                                                            <!-- Hiển thị tên người dùng thay vì avatar -->
                                                            {{ Auth::user()->username }}
                                                        </a>
                                                        <div id="userDropdownMenu" class="" style="position: absolute; background: white; "  >
                                                            <style>
                                                                #userDropdownMenu {
                                                                    opacity: 0 ;
                                                                }
                                                            </style>
                                                            <a href="{{ route('user.tickets') }}" class="dropdown-item">Vé đã mua</a>

                                                          <form id="logoutForm" action="{{ route('logout') }}" method="POST">
                                                            @csrf
                                                            <button type="submit" class="dropdown-item">Đăng xuất</button>
                                                        </form>
                                                        </div>
                                                    </div>
                                                @else
                                                    <a href="{{ route('login') }}">Đăng nhập</a>
                                                    <a href="{{ route('register') }}">Đăng ký</a>
                                                @endif

                                                <script>
                                                    document.addEventListener("DOMContentLoaded", function() {
                                                        // Lấy thẻ a invoker và dropdown menu
                                                        const dropdownInvoker = document.getElementById('userDropdownInvoker');
                                                        const dropdownMenu = document.getElementById('userDropdownMenu');

                                                        // Thêm sự kiện click vào thẻ a invoker
                                                        dropdownInvoker.addEventListener('click', function() {
                                                            // Kiểm tra xem dropdown menu đã hiển thị hay chưa
                                                            const isMenuVisible = dropdownMenu.style.opacity === '0';
console.log(isMenuVisible)
                                                            // Nếu dropdown menu đã hiển thị, ẩn nó đi; nếu chưa, hiển thị
                                                            if (isMenuVisible) {
                                                                dropdownMenu.style.opacity = '1';
                                                            } else {
                                                                dropdownMenu.style.opacity = '0 ';
                                                            }
                                                        });


                                                    });
                                                </script>



                                            </div>
                                        @else
                                            <a href="{{ route('login') }}">Đăng nhập</a>
                                            <a href="{{ route('register') }}">Đăng ký</a>
                                        @endif
                                    </div>

                                    </div>
                                    <script>
                                        document.addEventListener('DOMContentLoaded', function() {
                                            // Lấy thẻ avatar
                                            var avatar = document.querySelector('.js-hs-unfold-invoker');

                                            // Lấy modal
                                            var modal = document.getElementById('loginModal');

                                            // Xử lý sự kiện click vào avatar
                                            avatar.addEventListener('click', function(event) {
                                                event.preventDefault(); // Ngăn chặn hành động mặc định của thẻ <a>

                                                // Hiển thị modal
                                                modal.classList.add('show');
                                                modal.style.display = 'block !impo';
                                            });
                                        });
                                    </script>


                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>

            </div>
        </div>
    </header>

    @yield('content')





    <footer class>
        <div class="bg-gray-4000">
            <div class="container px-md-6 px-xl-7 px-wd-6">
                <div class="d-flex flex-wrap align-items-center pt-6 pb-3d border-bottom mb-7 border-gray-4100">
                    <a href="#" class="mb-4 mb-md-0 mr-auto">
                        <svg version="1.1" width="92" height="40px">
                            <g fill="#fff">
                                <path class="vodi-svg0"
                                    d="M72.8,12.7c0-2.7,0-1.8,0-4.4c0-0.9,0-1.8,0-2.8C73,3,74.7,1.4,77,1.4c2.3,0,4.1,1.8,4.2,4.2c0,1,0,2.1,0,3.1
                                c0,6.5,0,9.4,0,15.9c0,4.7-1.7,8.8-5.6,11.5c-4.5,3.1-9.3,3.5-14.1,0.9c-4.7-2.5-7.1-6.7-7-12.1c0.1-7.8,6.3-13.6,14.1-13.2
                                c0.7,0,1.4,0.2,2.1,0.3C71.3,12.2,72,12.4,72.8,12.7z M67.8,19.8c-2.9,0-5.2,2.2-5.2,5c0,2.9,2.3,5.3,5.2,5.3
                                c2.8,0,5.2-2.4,5.2-5.2C73,22.2,70.6,19.8,67.8,19.8z
                                M39.9,38.6c-7.3,0-13.3-6.1-13.3-13.5c0-7.5,5.9-13.4,13.4-13.4c7.5,0,13.4,6,13.4,13.5
                                C53.4,32.6,47.4,38.6,39.9,38.6z M39.9,30.6c3.2,0,5.6-2.3,5.6-5.6c0-3.2-2.3-5.5-5.5-5.5c-3.2,0-5.6,2.2-5.6,5.4
                                C34.4,28.2,36.7,30.6,39.9,30.6z
                                M14.6,27c0.6-1.4,1.1-2.6,1.6-3.8c1.2-2.9,2.5-5.8,3.7-8.8c0.7-1.7,2-2.8,4-2.7c3,0,4.9,2.6,3.8,5.4
                                c-0.5,1.3-1.2,2.6-1.8,3.9c-2.4,5-4.9,10-7.3,15c-0.8,1.6-2,2.6-3.9,2.6c-2,0-3.3-0.8-4.2-2.6c-2.7-5.6-5.3-11.1-8-16.7
                                c-0.3-0.7-0.6-1.3-0.9-2c-0.8-1.8-0.3-3.7,1.1-4.8c1.5-1.2,4-1.3,5.3,0c0.7,0.6,1.2,1.5,1.6,2.3C11.3,18.8,12.9,22.7,14.6,27z
                                M90.9,25.1c0,3.1,0,6.2,0,9.4c0,1.9-1.2,3.4-2.9,4c-1.7,0.5-3.5,0-4.5-1.6c-0.5-0.8-0.8-1.8-0.8-2.6
                                c-0.1-6.1-0.1-11.3,0-17.5c0-2.2,1.5-3.9,3.5-4.2c2.1-0.3,4.1,0.9,4.7,2.9c0.1,0.5,0.2,1.1,0.2,1.6C90.9,20,90.9,22.1,90.9,25.1
                                C90.9,25.1,90.9,25.1,90.9,25.1z
                                M90.2,4.7L86,2.3c-1.3-0.8-3,0.2-3,1.7v4.8c0,1.5,1.7,2.5,3,1.7l4.2-2.4C91.5,7.4,91.5,5.5,90.2,4.7z"></path>
                            </g>
                        </svg>
                    </a>
                    <ul class="list-unstyled mx-n3 mb-0 d-flex flex-wrap align-items-center">
                        <li class="px-3">
                            <a href="" class="text-gray-1300 d-flex flex-wrap align-items-center"><i
                                    class="fab fa-facebook-f fa-inverse"></i> <span
                                    class="ml-2">Facebook</span></a>
                        </li>
                        <li class="px-3">
                            <a href="" class="text-gray-1300 d-flex flex-wrap align-items-center"><i
                                    class="fab fa-google-plus-g fa-inverse"></i> <span
                                    class="ml-2">Google+</span></a>
                        </li>
                       
                        
                    </ul>
                </div>
                <div class="row pb-5">
                    <div class="col-md mb-5 mb-md-0">
                        <h4 class="font-size-18 font-weight-medium mb-4 text-gray-4200">Danh mục phim</h4>
                        <ul class="column-count-2 v2 list-unstyled mb-0">
                            <li class="py-1d">
                                <a class="h-g-white" href="">Hành động</a>
                            </li>
                            <li class="py-1d">
                                <a class="h-g-white" href="">Khám phá</a>
                            </li>
                            <li class="py-1d">
                                <a class="h-g-white" href="">Hoạt hình</a>
                            </li>
                            <li class="py-1d">
                                <a class="h-g-white" href="">Hài</a>
                            </li>
                            <li class="py-1d">
                                <a class="h-g-white" href="">Crime</a>
                            </li>
                            <li class="py-1d">
                                <a class="h-g-white" href="">Drama</a>
                            </li>
                            <li class="py-1d">
                                <a class="h-g-white" href="">Huyền ảo</a>
                            </li>
                            <li class="py-1d">
                                <a class="h-g-white" href="">Kinh dị</a>
                            </li>
                            <li class="py-1d">
                                <a class="h-g-white" href="">Mystrey</a>
                            </li>
                            <li class="py-1d">
                                <a class="h-g-white" href="">Lãng mạng</a>
                            </li>
                        </ul>
                    </div>


                </div>
            </div>
        </div>
        <div class="bg-gray-4300">
            <div class="container px-md-6 px-xl-7 px-wd-6s">
                <div class="text-center d-md-flex flex-wrap align-items-center py-3">
                    <div class="font-size-13 text-gray-1300 mb-2 mb-md-0">Copyright © 2024, Vodi. All Rights Reserved
                    </div>
                    <a href="" class="font-size-13 h-g-white ml-md-auto">Privacy Policy</a>
                </div>
            </div>
        </div>
    </footer>



    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <button type="button" class="close position-absolute top-0 right-0 z-index-2 mt-3 mr-3"
                    data-dismiss="modal" aria-label="Close">
                    <svg aria-hidden="true" class="mb-0" width="14" height="14" viewBox="0 0 18 18"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill="currentColor"
                            d="M11.5,9.5l5-5c0.2-0.2,0.2-0.6-0.1-0.9l-1-1c-0.3-0.3-0.7-0.3-0.9-0.1l-5,5l-5-5C4.3,2.3,3.9,2.4,3.6,2.6l-1,1 C2.4,3.9,2.3,4.3,2.5,4.5l5,5l-5,5c-0.2,0.2-0.2,0.6,0.1,0.9l1,1c0.3,0.3,0.7,0.3,0.9,0.1l5-5l5,5c0.2,0.2,0.6,0.2,0.9-0.1l1-1 c0.3-0.3,0.3-0.7,0.1-0.9L11.5,9.5z" />
                    </svg>
                </button>

                <div class="modal-body">
                    <form class="js-validate">

                        <div id="login">

                            <div class="text-center mb-7">
                                <h3 class="mb-0">Sign In to Vodi</h3>
                                <p>Login to manage your account.</p>
                            </div>


                            <div class="js-form-message mb-4">
                                <label class="input-label">Email</label>
                                <div class="input-group input-group-sm mb-2">
                                    <input type="email" class="form-control" name="email" id="signinEmail"
                                        placeholder="Email" aria-label="Email" required
                                        data-msg="Please enter a valid email address.">
                                </div>
                            </div>


                            <div class="js-form-message mb-3">
                                <label class="input-label">Password</label>
                                <div class="input-group input-group-sm mb-2">
                                    <input type="password" class="form-control" name="password"
                                        id="signinPassword" placeholder="Password" aria-label="Password" required
                                        data-msg="Your password is invalid. Please try again.">
                                </div>
                            </div>

                            <div class="d-flex justify-content-end mb-4">
                                <a class="js-animation-link small link-underline" href="javascript:;"
                                    data-hs-show-animation-options="{
                                        &quot;targetSelector&quot;: &quot;#forgotPassword&quot;,
                                        &quot;groupName&quot;: &quot;idForm&quot;
                                    }">Forgot
                                    Password?
                                </a>
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-sm btn-primary btn-block">Sign In</button>
                            </div>
                            <div class="text-center mb-3">
                                <span class="divider divider-xs divider-text">OR</span>
                            </div>
                            <a class="btn btn-sm btn-ghost-secondary btn-block mb-2" href="#">
                                <span class="d-flex justify-content-center align-items-center">
                                    <i class="fab fa-google mr-2"></i>
                                    Sign In with Google
                                </span>
                            </a>
                            <div class="text-center">
                                <span class="small text-muted">Do not have an account?</span>
                                <a class="js-animation-link small font-weight-bold" href="javascript:;"
                                    data-hs-show-animation-options="{
                                        &quot;targetSelector&quot;: &quot;#signup&quot;,
                                        &quot;groupName&quot;: &quot;idForm&quot;
                                    }">Sign
                                    Up
                                </a>
                            </div>
                        </div>

                        <div id="signup" style="display: none; opacity: 0;">

                            <div class="text-center mb-7">
                                <h3 class="mb-0">Create your account</h3>
                                <p>Fill out the form to get started.</p>
                            </div>


                            <div class="js-form-message mb-4">
                                <label class="input-label">Email</label>
                                <div class="input-group input-group-sm mb-2">
                                    <input type="email" class="form-control" name="email" id="signupEmail"
                                        placeholder="Email" aria-label="Email" required
                                        data-msg="Please enter a valid email address.">
                                </div>
                            </div>


                            <div class="js-form-message mb-4">
                                <label class="input-label">Password</label>
                                <div class="input-group input-group-sm mb-2">
                                    <input type="password" class="form-control" name="password"
                                        id="signupPassword" placeholder="Password" aria-label="Password" required
                                        data-msg="Your password is invalid. Please try again.">
                                </div>
                            </div>


                            <div class="js-form-message mb-4">
                                <label class="input-label">Confirm Password</label>
                                <div class="input-group input-group-sm mb-2">
                                    <input type="password" class="form-control" name="confirmPassword"
                                        id="signupConfirmPassword" placeholder="Confirm Password"
                                        aria-label="Confirm Password" required
                                        data-msg="Password does not match the confirm password.">
                                </div>
                            </div>

                            <div class="mb-3">
                                <button type="submit" class="btn btn-sm btn-primary btn-block">Sign Up</button>
                            </div>
                            <div class="text-center mb-3">
                                <span class="divider divider-xs divider-text">OR</span>
                            </div>
                            <a class="btn btn-sm btn-ghost-secondary btn-block mb-2" href="#">
                                <span class="d-flex justify-content-center align-items-center">
                                    <i class="fab fa-google mr-2"></i>
                                    Sign Up with Google
                                </span>
                            </a>
                            <div class="text-center">
                                <span class="small text-muted">Already have an account?</span>
                                <a class="js-animation-link small font-weight-bold" href="javascript:;"
                                    data-hs-show-animation-options="{
                                        &quot;targetSelector&quot;: &quot;#login&quot;,
                                        &quot;groupName&quot;: &quot;idForm&quot;
                                    }">Sign
                                    In
                                </a>
                            </div>
                        </div>


                        <div id="forgotPassword" style="display: none; opacity: 0;">

                            <div class="text-center mb-7">
                                <h3 class="mb-0">Recover password</h3>
                                <p>Instructions will be sent to you.</p>
                            </div>


                            <div class="js-form-message">
                                <label class="sr-only" for="recoverEmail">Your email</label>
                                <div class="input-group input-group-sm mb-2">
                                    <input type="email" class="form-control" name="email" id="recoverEmail"
                                        placeholder="Your email" aria-label="Your email" required
                                        data-msg="Please enter a valid email address.">
                                </div>
                            </div>

                            <div class="mb-3">
                                <button type="submit" class="btn btn-sm btn-primary btn-block">Recover
                                    Password</button>
                            </div>
                            <div class="text-center mb-4">
                                <span class="small text-muted">Remember your password?</span>
                                <a class="js-animation-link small font-weight-bold" href="javascript:;"
                                    data-hs-show-animation-options="{
                                        &quot;targetSelector&quot;: &quot;#login&quot;,
                                        &quot;groupName&quot;: &quot;idForm&quot;
                                    }">Login
                                </a>
                            </div>
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </div>


    <aside id="sidebarContent" class="hs-unfold-content sidebar sidebar-left off-canvas-menu dark">
        <div class="sidebar-scroller">
            <div class="sidebar-container">
                <div class="sidebar-footer-offset" style="padding-bottom: 7rem;">

                    <div class="d-flex justify-content-end align-items-center py-2 px-4 border-bottom">

                        <a class="navbar-brand mr-auto" href="../home/index.html" aria-label="Vodi">
                            <svg version="1.1" width="103" height="40px">
                                <linearGradient id="vodi-gr" x1="0%" y1="0%" x2="100%"
                                    y2="0%">
                                    <stop offset="0" style="stop-color:#2A4999"></stop>
                                    <stop offset="1" style="stop-color:#2C9CD4"></stop>
                                </linearGradient>
                                <g class="vodi-gr">
                                    <path class="vodi-svg0"
                                        d="M72.8,12.7c0-2.7,0-1.8,0-4.4c0-0.9,0-1.8,0-2.8C73,3,74.7,1.4,77,1.4c2.3,0,4.1,1.8,4.2,4.2c0,1,0,2.1,0,3.1
                                    c0,6.5,0,9.4,0,15.9c0,4.7-1.7,8.8-5.6,11.5c-4.5,3.1-9.3,3.5-14.1,0.9c-4.7-2.5-7.1-6.7-7-12.1c0.1-7.8,6.3-13.6,14.1-13.2
                                    c0.7,0,1.4,0.2,2.1,0.3C71.3,12.2,72,12.4,72.8,12.7z M67.8,19.8c-2.9,0-5.2,2.2-5.2,5c0,2.9,2.3,5.3,5.2,5.3
                                    c2.8,0,5.2-2.4,5.2-5.2C73,22.2,70.6,19.8,67.8,19.8z
                                    M39.9,38.6c-7.3,0-13.3-6.1-13.3-13.5c0-7.5,5.9-13.4,13.4-13.4c7.5,0,13.4,6,13.4,13.5
                                    C53.4,32.6,47.4,38.6,39.9,38.6z M39.9,30.6c3.2,0,5.6-2.3,5.6-5.6c0-3.2-2.3-5.5-5.5-5.5c-3.2,0-5.6,2.2-5.6,5.4
                                    C34.4,28.2,36.7,30.6,39.9,30.6z
                                    M14.6,27c0.6-1.4,1.1-2.6,1.6-3.8c1.2-2.9,2.5-5.8,3.7-8.8c0.7-1.7,2-2.8,4-2.7c3,0,4.9,2.6,3.8,5.4
                                    c-0.5,1.3-1.2,2.6-1.8,3.9c-2.4,5-4.9,10-7.3,15c-0.8,1.6-2,2.6-3.9,2.6c-2,0-3.3-0.8-4.2-2.6c-2.7-5.6-5.3-11.1-8-16.7
                                    c-0.3-0.7-0.6-1.3-0.9-2c-0.8-1.8-0.3-3.7,1.1-4.8c1.5-1.2,4-1.3,5.3,0c0.7,0.6,1.2,1.5,1.6,2.3C11.3,18.8,12.9,22.7,14.6,27z
                                    M90.9,25.1c0,3.1,0,6.2,0,9.4c0,1.9-1.2,3.4-2.9,4c-1.7,0.5-3.5,0-4.5-1.6c-0.5-0.8-0.8-1.8-0.8-2.6
                                    c-0.1-6.1-0.1-11.3,0-17.5c0-2.2,1.5-3.9,3.5-4.2c2.1-0.3,4.1,0.9,4.7,2.9c0.1,0.5,0.2,1.1,0.2,1.6C90.9,20,90.9,22.1,90.9,25.1
                                    C90.9,25.1,90.9,25.1,90.9,25.1z
                                    M90.2,4.7L86,2.3c-1.3-0.8-3,0.2-3,1.7v4.8c0,1.5,1.7,2.5,3,1.7l4.2-2.4C91.5,7.4,91.5,5.5,90.2,4.7z">
                                    </path>
                                </g>
                            </svg>
                        </a>

                        <div class="hs-unfold">
                            <a class="js-hs-unfold-invoker btn btn-icon btn-xs btn-soft-secondary"
                                href="javascript:;"
                                data-hs-unfold-options="{
                                    &quot;target&quot;: &quot;#sidebarContent&quot;,
                                    &quot;type&quot;: &quot;css-animation&quot;,
                                    &quot;animationIn&quot;: &quot;fadeInLeft&quot;,
                                    &quot;animationOut&quot;: &quot;fadeOutLeft&quot;,
                                    &quot;hasOverlay&quot;: &quot;rgba(55, 125, 255, 0.1)&quot;,
                                    &quot;smartPositionOff&quot;: true
                                }">
                                <svg width="10" height="10" viewBox="0 0 18 18"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill="currentColor"
                                        d="M11.5,9.5l5-5c0.2-0.2,0.2-0.6-0.1-0.9l-1-1c-0.3-0.3-0.7-0.3-0.9-0.1l-5,5l-5-5C4.3,2.3,3.9,2.4,3.6,2.6l-1,1 C2.4,3.9,2.3,4.3,2.5,4.5l5,5l-5,5c-0.2,0.2-0.2,0.6,0.1,0.9l1,1c0.3,0.3,0.7,0.3,0.9,0.1l5-5l5,5c0.2,0.2,0.6,0.2,0.9-0.1l1-1 c0.3-0.3,0.3-0.7,0.1-0.9L11.5,9.5z" />
                                </svg>
                            </a>
                        </div>
                    </div>


                    <div class="scrollbar sidebar-body">
                        <div class="sidebar-content py-4">

                            <div class>
                                <div id="sidebarNavExample3" class="collapse show navbar-collapse">

                                    <div class="sidebar-body_inner">
                                        <div class="position-relative">
                                            <a class="dropdown-nav-link dropdown-toggle dropdown-toggle-collapse"
                                                href="javascript:;" role="button" data-toggle="collapse"
                                                aria-expanded="false" aria-controls="sidebarNav1Collapse"
                                                data-target="#sidebarNav1Collapse">
                                                Home
                                            </a>
                                            <div id="sidebarNav1Collapse" class="collapse"
                                                data-parent="#sidebarNavExample3">
                                                <div id="sidebarNav1"
                                                    class="navbar-nav align-items-start flex-column">
                                                    <a class="dropdown-item" href="../home/index.html">Home v1</a>
                                                    <a class="dropdown-item" href="../home/home-v2.html">Home v2</a>
                                                    <a class="dropdown-item" href="../home/home-v3.html">Home v3</a>
                                                    <a class="dropdown-item" href="../home/home-v4.html">Home v4</a>
                                                    <a class="dropdown-item" href="../home/home-v5.html">Home v5</a>
                                                    <a class="dropdown-item" href="../home/home-v6.html">Home v6 -
                                                        Vodi Prime (Light)</a>
                                                    <a class="dropdown-item" href="../home/home-v7.html">Home v7 -
                                                        Vodi Prime (Dark)</a>
                                                    <a class="dropdown-item" href="../home/home-v8.html">Home v8 -
                                                        Vodi Stream</a>
                                                    <a class="dropdown-item" href="../home/home-v9.html">Home v9 -
                                                        Vodi Tube (Light)</a>
                                                    <a class="dropdown-item" href="../home/home-v10.html">Home v10 -
                                                        Vodi Tube (Dark)</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="position-relative">
                                            <a class="dropdown-nav-link dropdown-toggle dropdown-toggle-collapse"
                                                href="javascript:;" role="button" data-toggle="collapse"
                                                aria-expanded="false" aria-controls="sidebarNav2Collapse"
                                                data-target="#sidebarNav2Collapse">
                                                Archive Pages
                                            </a>
                                            <div id="sidebarNav2Collapse" class="collapse"
                                                data-parent="#sidebarNavExample3">
                                                <div id="sidebarNav2"
                                                    class="navbar-nav align-items-start flex-column">
                                                    <a class="dropdown-item"
                                                        href="#">Movies</a>
                                                    <a class="dropdown-item" href="../archive/tv-shows.html">TV
                                                        Shows</a>
                                                    <a class="dropdown-item"
                                                        href="../archive/videos.html">Videos</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="position-relative">
                                            <a class="dropdown-nav-link dropdown-toggle dropdown-toggle-collapse"
                                                href="javascript:;" data-target="#sidebarNav2One" role="button"
                                                data-toggle="collapse" aria-expanded="false"
                                                aria-controls="sidebarNav2One">
                                                Single Movies
                                            </a>
                                            <div id="sidebarNav2One" class="navbar-nav flex-column collapse"
                                                data-parent="#sidebarNav2">
                                                <a class="dropdown-item"
                                                    href="../single-movies/single-movies-v1.html">Movie v1</a>
                                                <a class="dropdown-item"
                                                    href="../single-movies/single-movies-v2.html">Movie v2</a>
                                                <a class="dropdown-item"
                                                    href="../single-movies/single-movies-v3.html">Movie v3</a>
                                                <a class="dropdown-item"
                                                    href="../single-movies/single-movies-v4.html">Movie v4</a>
                                                <a class="dropdown-item"
                                                    href="../single-movies/single-movies-v5.html">Movie v5</a>
                                                <a class="dropdown-item"
                                                    href="../single-movies/single-movies-v6.html">Movie v6</a>
                                                <a class="dropdown-item"
                                                    href="../single-movies/single-movies-v7.html">Movie v7</a>
                                            </div>
                                        </div>
                                        <div class="position-relative">
                                            <a class="dropdown-nav-link dropdown-toggle dropdown-toggle-collapse"
                                                href="javascript:;" data-target="#sidebarNav2Two" role="button"
                                                data-toggle="collapse" aria-expanded="false"
                                                aria-controls="sidebarNav2Two">
                                                Single Videos
                                            </a>
                                            <div id="sidebarNav2Two" class="navbar-nav flex-column collapse"
                                                data-parent="#sidebarNav2">
                                                <a class="dropdown-item"
                                                    href="../single-video/single-video-v1.html">Video v1</a>
                                                <a class="dropdown-item"
                                                    href="../single-video/single-video-v2.html">Video v2</a>
                                                <a class="dropdown-item"
                                                    href="../single-video/single-video-v3.html">Video v3</a>
                                                <a class="dropdown-item"
                                                    href="../single-video/single-video-v4.html">Video v4</a>
                                                <a class="dropdown-item"
                                                    href="../single-video/single-video-v5.html">Video v5</a>
                                                <a class="dropdown-item"
                                                    href="../single-video/single-video-v6.html">Video v6</a>
                                            </div>
                                        </div>
                                        <div class="position-relative">
                                            <a class="dropdown-nav-link dropdown-toggle dropdown-toggle-collapse"
                                                href="javascript:;" role="button" data-toggle="collapse"
                                                aria-expanded="false" aria-controls="sidebarNav3Collapse"
                                                data-target="#sidebarNav3Collapse">
                                                Single Episodes
                                            </a>
                                            <div id="sidebarNav3Collapse" class="collapse"
                                                data-parent="#sidebarNavExample3">
                                                <div id="sidebarNav3"
                                                    class="navbar-nav align-items-start flex-column">
                                                    <a class="dropdown-item"
                                                        href="../single-episodes/single-episodes-v1.html">Episode
                                                        v1</a>
                                                    <a class="dropdown-item"
                                                        href="../single-episodes/single-episodes-v2.html">Episode
                                                        v2</a>
                                                    <a class="dropdown-item"
                                                        href="../single-episodes/single-episodes-v3.html">Episode
                                                        v3</a>
                                                    <a class="dropdown-item"
                                                        href="../single-episodes/single-episodes-v4.html">Episode
                                                        v4</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="position-relative">
                                            <a class="dropdown-nav-link dropdown-toggle dropdown-toggle-collapse"
                                                href="javascript:;" data-target="#sidebarNav3One" role="button"
                                                data-toggle="collapse" aria-expanded="false"
                                                aria-controls="sidebarNav3One">
                                                Other Pages
                                            </a>
                                            <div id="sidebarNav3One" class="navbar-nav flex-column collapse"
                                                data-parent="#sidebarNav3">
                                                <a class="dropdown-item" href="../other/landing-v1.html">Landing
                                                    v1</a>
                                                <a class="dropdown-item" href="../other/landing-v2.html">Landing
                                                    v2</a>
                                                <a class="dropdown-item" href="../other/coming-soon.html">Coming
                                                    Soon</a>
                                                <a class="dropdown-item"
                                                    href="../single-tv-show/single-tv-show.html">Single TV Show</a>
                                            </div>
                                        </div>
                                        <div class="position-relative">
                                            <a class="dropdown-nav-link dropdown-toggle dropdown-toggle-collapse"
                                                href="javascript:;" data-target="#sidebarNav3Two" role="button"
                                                data-toggle="collapse" aria-expanded="false"
                                                aria-controls="sidebarNav3Two">
                                                Blog Pages
                                            </a>
                                            <div id="sidebarNav3Two" class="navbar-nav flex-column collapse"
                                                data-parent="#sidebarNav3">
                                                <a class="dropdown-item" href="../blog/blog.html">Blog</a>
                                                <a class="dropdown-item" href="../blog/blog-single.html">Single
                                                    Blog</a>
                                            </div>
                                        </div>
                                        <div class="position-relative">
                                            <a class="dropdown-nav-link dropdown-toggle dropdown-toggle-collapse"
                                                href="javascript:;" role="button" data-toggle="collapse"
                                                aria-expanded="false" aria-controls="sidebarNav4Collapse"
                                                data-target="#sidebarNav4Collapse">
                                                Static Pages
                                            </a>
                                            <div id="sidebarNav4Collapse" class="collapse"
                                                data-parent="#sidebarNavExample3">
                                                <div id="sidebarNav4"
                                                    class="navbar-nav align-items-start flex-column">
                                                    <a class="dropdown-item" href="../static/contact.html">Contact
                                                        Us</a>
                                                    <a class="dropdown-item" href="../static/404.html">404</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="position-relative">
                                            <a class="dropdown-nav-link dropdown-toggle dropdown-toggle-collapse"
                                                href="javascript:;" data-target="#sidebarNav4One" role="button"
                                                data-toggle="collapse" aria-expanded="false"
                                                aria-controls="sidebarNav4One">
                                                Docs
                                            </a>
                                            <div id="sidebarNav4One" class="navbar-nav flex-column collapse"
                                                data-parent="#sidebarNav4">
                                                <a class="dropdown-item"
                                                    href="../../documentation/index.html">Documentation</a>
                                                <a class="dropdown-item"
                                                    href="../../snippets/index.html">Snippets</a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </aside>



    <a class="js-go-to go-to position-fixed" href="javascript:;" style="visibility: hidden;"
        data-hs-go-to-options="{
            &quot;offsetTop&quot;: 700,
            &quot;position&quot;: {
                &quot;init&quot;: {
                    &quot;right&quot;: 15
                },
                &quot;show&quot;: {
                    &quot;bottom&quot;: 15
                },
                &quot;hide&quot;: {
                    &quot;bottom&quot;: -15
                }
            }
        }">
        <i class="fas fa-angle-up"></i>
    </a>

    <script src="{{ asset('client/vendor/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('client/vendor/jquery-migrate/dist/jquery-migrate.min.js') }}"></script>
    <script src="{{ asset('client/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('client/vendor/hs-header/dist/hs-header.min.js') }}"></script>
    <script src="{{ asset('client/vendor/hs-go-to/dist/hs-go-to.min.js') }}"></script>
    <script src="{{ asset('client/vendor/hs-unfold/dist/hs-unfold.min.js') }}"></script>
    <script src="{{ asset('client/vendor/hs-mega-menu/dist/hs-mega-menu.min.js') }}"></script>
    <script src="{{ asset('client/vendor/hs-show-animation/dist/hs-show-animation.min.js') }}"></script>
    <script src="{{ asset('client/vendor/hs-sticky-block/dist/hs-sticky-block.min.js') }}"></script>
    <script src="{{ asset('client/vendor/hs-counter/dist/hs-counter.min.js') }}"></script>
    <script src="{{ asset('client/vendor/appear.js') }}"></script>
    <script src="{{ asset('client/vendor/cubeportfolio/js/jquery.cubeportfolio.min.js') }}"></script>
    <script src="{{ asset('client/vendor/jquery-validation/dist/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('client/vendor/dzsparallaxer/dzsparallaxer.js') }}"></script>
    <script src="{{ asset('client/vendor/aos/dist/aos.js') }}"></script>
    <script src="{{ asset('client/vendor/slick-carousel/slick/slick.js') }}"></script>
    <script src="{{ asset('client/vendor/fancybox/dist/jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset('client/vendor/jquery-countdown/dist/jquery.countdown.min.js') }}"></script>

    <script src="{{ asset('client/js/hs.core.js') }}"></script>
    <script src="{{ asset('client/js/hs.validation.js') }}"></script>
    <script src="{{ asset('client/js/hs.cubeportfolio.js') }}"></script>
    <script src="{{ asset('client/js/hs.slick-carousel.js') }}"></script>
    <script src="{{ asset('client/js/hs.fancybox.js') }}"></script>
    <script src="{{ asset('client/js/hs.countdown.js') }}"></script>


    <script>
        $(document).on('ready', function() {
            // initialization of header
            var header = new HSHeader($('#header')).init();

            // initialization of mega menu
            var megaMenu = new HSMegaMenu($('.js-mega-menu'), {
                desktop: {
                    position: 'left'
                }
            }).init();

            // initialization of fancybox
            $('.js-fancybox').each(function() {
                var fancybox = $.HSCore.components.HSFancyBox.init($(this));
            });

            // initialization of countdowns
            $('.js-countdown').each(function() {
                var countdown = $.HSCore.components.HSCountdown.init($(this));
            });

            // initialization of unfold
            var unfold = new HSUnfold('.js-hs-unfold-invoker').init();

            // initialization of slick carousel
            $('.js-slick-carousel').each(function() {
                var slickCarousel = $.HSCore.components.HSSlickCarousel.init($(this));
            });

            // initialization of form validation
            $('.js-validate').each(function() {
                $.HSCore.components.HSValidation.init($(this), {
                    rules: {
                        confirmPassword: {
                            equalTo: '#signupPassword'
                        }
                    }
                });
            });

            // initialization of show animations
            $('.js-animation-link').each(function() {
                var showAnimation = new HSShowAnimation($(this)).init();
            });

            // initialization of counter
            $('.js-counter').each(function() {
                var counter = new HSCounter($(this)).init();
            });

            // initialization of sticky block
            var cbpStickyFilter = new HSStickyBlock($('#cbpStickyFilter'));

            // initialization of cubeportfolio
            $('.cbp').each(function() {
                var cbp = $.HSCore.components.HSCubeportfolio.init($(this), {
                    layoutMode: 'grid',
                    filters: '#filterControls',
                    displayTypeSpeed: 0
                });
            });

            $('.cbp').on('initComplete.cbp', function() {
                // update sticky block
                cbpStickyFilter.update();

                // initialization of aos
                AOS.init({
                    duration: 650,
                    once: true
                });
            });

            $('.cbp').on('filterComplete.cbp', function() {
                // update sticky block
                cbpStickyFilter.update();

                // initialization of aos
                AOS.init({
                    duration: 650,
                    once: true
                });
            });

            $('.cbp').on('pluginResize.cbp', function() {
                // update sticky block
                cbpStickyFilter.update();
            });

            // animated scroll to cbp container
            $('#cbpStickyFilter').on('click', '.cbp-filter-item', function(e) {
                $('html, body').stop().animate({
                    scrollTop: $('#demoExamplesSection').offset().top
                }, 200);
            });

            // initialization of go to
            $('.js-go-to').each(function() {
                var goTo = new HSGoTo($(this)).init();
            });
        });
    </script>


</body>

</html>
