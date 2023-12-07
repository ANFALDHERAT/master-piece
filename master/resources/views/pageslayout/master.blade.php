<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Learts – Handmade Shop eCommerce HTML Template</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
   <!-- Shortcut Icon -->
<link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets1/images/favicon.webp') }}">

<!-- CSS
============================================ -->

<!-- Vendor CSS (Bootstrap & Icon Font) -->
<link rel="stylesheet" href="{{ asset('assets1/css/vendor/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets1/css/vendor/fontawesome.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets1/css/vendor/themify-icons.css') }}">
<link rel="stylesheet" href="{{ asset('assets1/css/vendor/customFonts.css') }}">

<!-- Plugins CSS (All Plugins Files) -->
<link rel="stylesheet" href="{{ asset('assets1/css/plugins/select2.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets1/css/plugins/perfect-scrollbar.css') }}">
<link rel="stylesheet" href="{{ asset('assets1/css/plugins/swiper.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets1/css/plugins/nice-select.css') }}">
<link rel="stylesheet" href="{{ asset('assets1/css/plugins/ion.rangeSlider.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets1/css/plugins/photoswipe.css') }}">
<link rel="stylesheet" href="{{ asset('assets1/css/plugins/photoswipe-default-skin.css') }}">
<link rel="stylesheet" href="{{ asset('assets1/css/plugins/magnific-popup.css') }}">
<link rel="stylesheet" href="{{ asset('assets1/css/plugins/slick.css') }}">

<!-- Main Style CSS -->
<link rel="stylesheet" href="{{ asset('assets1/css/style.css') }}">
    <style>

.faq {
    margin-bottom: 50px;
    font-family: 'Arial', sans-serif; /* Use your desired font family */
    font-size: 25px;


}

.faq h4.question {

    color: #666;
    margin: 0;
    cursor: pointer;
    background-color: #F5F5F5;
    padding: 20px;
}

.faq p.answer {
    margin-top: 10px;
    color: #F8796C;
    display: none; /* Hide answer text by default */

}

.faq:hover p.answer {
    display: block; /* Show answer text on hover */
}
        .home-slider {
    position: relative;
    width: 100%;

    overflow: hidden;
}

.full-screen-image {
    width: 100%;
    height: 700px;
    object-fit: cover; /* This ensures the image covers the entire container */
}
.beautiful-background {
    background-color: #F5F5F5;
    padding: 50px 0;
    margin-bottom: 100px;
}

.beautiful-title {
    font-family: Modesty;
    font-size: 80px;
    font-weight: 400;
    margin-bottom: 20px;
    color: #F8796C;
}

.sub-title {
    font-size: 28px;
    font-weight: 600;
    color: #333;
    margin-bottom: 30px;
}

.beautiful-text {
    font-size: 20px;
    line-height: 1.6;
    color: #555;
}

        .hero {
        background-image: url('background-image.jpg');
        background-size: cover;
        color: #fff;
        text-align: center;
        padding: 5rem 0;
    }

    .hero h1 {
        font-size: 3rem;
        margin-bottom: 1rem;
    }

    .hero p {
        font-size: 1.2rem;
        margin-bottom: 2rem;
    }

    .cta-button {
        background-color: #e74c3c;
        color: #fff;
        padding: 0.5rem 1.5rem;
        border: none;
        text-decoration: none;
        font-weight: bold;
        transition: background-color 0.3s ease;
    }

    .cta-button:hover {
        background-color: #c0392b;
    }

    /* Center list styles */
    .center-list {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 2rem;
        padding: 2rem;
    }

    .center {
        border: 1px solid #ccc;
        padding: 1.5rem;
        text-align: center;
        width: 300px;
        transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
    }

    .center:hover {
        transform: scale(1.05);
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }

    .center img {
        max-width: 100%;
        height: auto;
        margin-bottom: 1rem;
    }

    .contact-button {
        background-color: #3498db;
        color: #fff;
        padding: 0.3rem 1rem;
        text-decoration: none;
        border-radius: 3px;
        display: inline-block;
        margin-top: 1rem;
    }

    /* About section styles */
    .about {
        background-color: #f5f5f5;
        text-align: center;
        padding: 4rem 0;
    }

    .about h2 {
        font-size: 2rem;
        margin-bottom: 1rem;
    }

    .about p {
        font-size: 1.1rem;
        margin-bottom: 2rem;
    }

    .learn-more-button {
        background-color: #27ae60;
        color: #fff;
        padding: 0.3rem 1.5rem;
        text-decoration: none;
        border-radius: 3px;
        display: inline-block;
        font-weight: bold;
        transition: background-color 0.3s ease;
    }

    .learn-more-button:hover {
        background-color: #219955;
    }


     .expert-card {
        height: 550px;
         background-color: #fff;
         border: 1px solid #ddd;
         border-radius: 10px; /* Increased border radius for a softer look */
         box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
         overflow: hidden;
         transition: transform 0.3s, box-shadow 0.3s;
         margin-bottom: 20px; /* Increased margin between expert cards */
         padding:20px; /* Added padding to create more space inside the card */

     }

     .expert-card:hover {
         transform: translateY(-5px);
         box-shadow: 0px 5px 20px rgba(0, 0, 0, 0.2);
     }

     .expert-thumb img {
         width:200px;


     }


     .expert h6.title {
         margin: 10px 0;
         color: #F8796C;
         font-size: 20px; /* Increased font size */
     }

     .expert-rating {
         color: #F8796C;
         margin-bottom: 8px; /* Adjusted margin for rating */
     }

     .stars {
         color: #F8796C;
         font-size: 18px;
     }

     .expert-description {
         color: #666;
         margin-bottom: 15px; /* Increased margin for description */
         font-size: 16px; /* Adjusted font size */
     }

     .expert-buttons {
         display: flex;
         justify-content: space-between;
         align-items: center; /* Center buttons vertically */
     }

     .expert-button {
         background-color: #F8796C;
         color: #fff;
         padding: 8px 15px; /* Adjusted padding for buttons */
         border-radius: 5px; /* Adjusted border radius for buttons */
         text-decoration: none;
         transition: background-color 0.3s;
         flex-grow: 1;
         text-align: center;

     }

     .expert-button:last-child {
         margin-left: 10px; /* Added margin between buttons */
     }

     .expert-button:hover {
         background-color: #e66b5a;
         color: white;
     }

     .gold-star {
    color: gold; /* Change the color to gold */
}

    </style>







</head>

<body>


    <div class="header-section section section-fluid bg-white d-none d-xl-block">
        <div class="container">
            <div class="row align-items-center">

                <!-- Header Logo Start -->
                <div class="col-auto">
                    <div class="header-logo">
                        <a href=""  ><h1  style="font-size: 50px;color:#F8796C">AYSEL</h1></a>
                    </div>
                </div>
                <!-- Header Logo End -->

                <!-- Search Start -->
                <div class="col">
                    <nav class="site-main-menu site-main-menu-left menu-height-100">
                        <ul>
                            <li ><a href="/"><span class="menu-text">Home</span></a>
                                </li>
                            <li class="has-children"><a href="#"><span class="menu-text">services</span></a>
                                <ul class="sub-menu " >
                                    <li >

                                        <ul>
                                            <li><a href="/medical"><span class="menu-text">a Medical beauty centers</span></a></li>
                                            <li><a href="/Laserexperts"><span class="menu-text">Laser experts</span></a></li>

                                        </ul>
                                    </li>

                                </ul>
                            </li>
                            <li ><a href="/aboutus"><span class="menu-text">About us</span></a>

                            </li>
                            <li ><a href="/contact-us"><span class="menu-text">Contact us</span></a>

                            </li>
                            <li ><a href="/join-us"><span class="menu-text">Join our team</span></a>

                            </li>
                        </ul>
                        </nav>
                    </div>
                    <div class="col-auto d-none d-xl-block">
                        <div class="header2-search">
                            {{-- <form action="{{ route('search') }}" method="GET">
                                <input type="text" id="searchInput" placeholder="Search...">
                                <button onclick="search()">Search</button>
                            </form> --}}
                        </div>
                    </div>

                    <!-- Login and Register Section -->
                    <div class="col-auto ml-auto">
                        @if (Auth::check())
                        <div class="d-flex align-items-center">
                            <a href="{{ route('profile.edit', [Auth::user()]) }}" class="menu-text" style="color: #F8796C;margin-right:5px">{{ Auth::user()->name }}</a>
                            <form method="POST" style="display: inline-block" action="{{ route('logout') }}">
                                @csrf
                                <a href="{{ route('logout') }}" class="btn btn-primary py-2 px-lg-2 rounded-0 d-none d-lg-block ml-2"
                                   style="font-size: 17px; color: white;margin-right:20px;background-color:#F8796C;border:none ;margin-left:20px"
                                   onclick="event.preventDefault(); this.closest('form').submit();">
                                   {{ __('Log Out') }}
                                   <i class="fa fa-arrow-right ms-3"></i>
                                </a>
                            </form>
                        </div>
                        @else
                        <div class="d-flex align-items-center">
                            <a href="/login" class="btn btn-primary py-2 px-lg-2 rounded-0 d-none d-lg-block ml-2" style="font-size: 17px; color: white;margin-right:20px;background-color:#F8796C;border:none">
                                Login <i class="fa fa-arrow-right " ></i>
                            </a>
                          <a href="/register" style="color: #F8796C">
                                 <i class="fas fa-user-plus" style="color: #F8796C;margin-right:5px"></i>Register
                            </a>
                        </div>
                        @endif

            </div>
                </div>



                <!-- Header Tools End -->

            </div>
        </div>

    </div>
    <!-- Header Section End -->

    <!-- Header Section Start -->
    <div class="sticky-header section bg-white section-fluid d-none d-xl-block">
        <div class="container">
            <div class="row align-items-center">

                <!-- Header Logo Start -->
                <div class="col-xl-auto col">
                    <div class="header-logo">
                        <a href="/" ><h1 style="font-size: 50px;color:#F8796C">AYSEL</h1></a>
                    </div>
                </div>
                <!-- Header Logo End -->

                <!-- Search Start -->
                <div class="col-auto me-auto">
                    <nav class="site-main-menu site-main-menu-left menu-height-100 justify-content-center">
                        <ul>
                            <li ><a href="/"><span class="menu-text">Home</span></a>
                                </li>
                                <li class="has-children"><a href="#"><span class="menu-text">services</span></a>
                                    <ul class="sub-menu " >
                                        <li >

                                            <ul>
                                                <li><a href="/medical"><span class="menu-text">a Medical beauty centers</span></a></li>
                                                <li><a href="/Laserexperts"><span class="menu-text">Laser experts</span></a></li>

                                            </ul>
                                        </li>

                                    </ul>
                                </li>
                            <li ><a href="/aboutus"><span class="menu-text">About us</span></a>

                            </li>
                            <li ><a href="/contact-us"><span class="menu-text">Contact us</span></a>

                            </li>
                            <li ><a href="/join-us"><span class="menu-text">Join our team</span></a>

                            </li>

                        </ul>
                    </nav>
                </div>
                <!-- Search End -->
                {{-- <div class="col-auto d-none d-xl-block">
                    <div class="header2-search">
                        <form action="#">
                            <input type="text" placeholder="Search...">
                            <button class="btn"><i class="fas fa-search"></i></button>
                        </form>
                    </div>
                </div> --}}
                <!-- Search Start -->

                <!-- Search End -->

                <!-- Header Tools Start -->
                <div class="col-auto ml-auto">
                    @if (Auth::check())
                    <div class="d-flex align-items-center">
                        <a href="{{ route('profile.edit', [Auth::user()]) }}" class="menu-text" style="color: #F8796C;margin-right:5px">{{ Auth::user()->name }}</a>
                        <form method="POST" style="display: inline-block" action="{{ route('logout') }}">
                            @csrf
                            <a href="{{ route('logout') }}" class="btn btn-primary py-2 px-lg-2 rounded-0 d-none d-lg-block ml-2"
                               style="font-size: 17px; color: white;margin-right:20px;background-color:#F8796C;border:none ;margin-left:20px"
                               onclick="event.preventDefault(); this.closest('form').submit();">
                               {{ __('Log Out') }}
                               <i class="fa fa-arrow-right ms-3"></i>
                            </a>
                        </form>
                    </div>
                    @else
                    <div class="d-flex align-items-center">
                        <a href="/login" class="btn btn-primary py-2 px-lg-2 rounded-0 d-none d-lg-block ml-2" style="font-size: 17px; color: white;margin-right:20px;background-color:#F8796C;border:none">
                            Login <i class="fa fa-arrow-right " ></i>
                        </a>
                      <a href="/register" style="color: #F8796C">
                             <i class="fas fa-user-plus" style="color: #F8796C;margin-right:5px"></i>Register
                        </a>
                    </div>
                    @endif

        </div>
            </div>
                        {{-- <div class="header-wishlist d-none d-sm-block">
                            <a href="#offcanvas-wishlist" class="offcanvas-toggle"><span class="wishlist-count">3</span><i class="far fa-heart"></i></a>
                        </div>
                        <div class="header-cart">
                            <a href="#offcanvas-cart" class="offcanvas-toggle"><span class="cart-count">3</span><i class="fas fa-shopping-cart"></i></a>
                        </div> --}}
                        <div class="mobile-menu-toggle d-xl-none">
                            <a href="#" class="offcanvas-toggle">
                                <svg viewBox="0 0 800 600">
                                    <path d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200" class="top"></path>
                                    <path d="M300,320 L540,320" class="middle"></path>
                                    <path d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190" class="bottom" transform="translate(480, 320) scale(1, -1) translate(-480, -318) "></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Header Tools End -->

            </div>
        </div>

    </div>
    <!-- Header Section End -->
    <!-- Mobile Header Section Start -->
    <div class="mobile-header bg-white section d-xl-none">
        <div class="container">
            <div class="row align-items-center">

                <!-- Header Logo Start -->
                <div class="col">
                    <div class="header-logo">
                        <a href="/" ><h1 style="font-size: 50px;color:#F8796C">AYSEL</h1></a>
                    </div>
                </div>
                <!-- Header Logo End -->

                <!-- Header Tools Start -->
                <div class="col-auto">
                    <div class="header-tools justify-content-end">
                        <div class="header-login d-none d-sm-block">
                           <a href="colorlib-regform-7/login.html"><i class="far fa-user"></i></a>
                        </div>
                        {{-- <div class="header-search d-none d-sm-block">
                            <a href="#offcanvas-search" class="offcanvas-toggle"><i class="fas fa-search"></i></a>
                        </div> --}}
                        {{-- <div class="header-wishlist d-none d-sm-block">
                            <a href="#offcanvas-wishlist" class="offcanvas-toggle"><span class="wishlist-count">3</span><i class="far fa-heart"></i></a>
                        </div> --}}
                        {{-- <div class="header-cart">
                            <a href="#offcanvas-cart" class="offcanvas-toggle"><span class="cart-count">3</span><i class="fas fa-shopping-cart"></i></a>
                        </div> --}}
                        <div class="mobile-menu-toggle">
                            <a href="#offcanvas-mobile-menu" class="offcanvas-toggle">
                                <svg viewBox="0 0 800 600">
                                    <path d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200" class="top"></path>
                                    <path d="M300,320 L540,320" class="middle"></path>
                                    <path d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190" class="bottom" transform="translate(480, 320) scale(1, -1) translate(-480, -318) "></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Header Tools End -->

            </div>
        </div>
    </div>
    <!-- Mobile Header Section End -->

    <!-- Mobile Header Section Start -->
    <div class="mobile-header sticky-header bg-white section d-xl-none">
        <div class="container">
            <div class="row align-items-center">

                <!-- Header Logo Start -->
                <div class="col">
                    <div class="header-logo">
                        <a href="/" ><h1 style="font-size: 50px;color:#F8796C">AYSEL</h1></a>
                    </div>
                </div>
                <!-- Header Logo End -->

                <!-- Header Tools Start -->
                <div class="col-auto">
                    <div class="header-tools justify-content-end">
                        <div class="header-login d-none d-sm-block">
                            <a href="colorlib-regform-7/login.html"><i class="far fa-user"></i></a>
                        </div>
                        {{-- <div class="header-search d-none d-sm-block">
                            <a href="" class="offcanvas-toggle"><i class="fas fa-search"></i></a>
                        </div> --}}
                        {{-- <div class="header-wishlist d-none d-sm-block">
                            <a href="" class="offcanvas-toggle"><span class="wishlist-count">3</span><i class="far fa-heart"></i></a>
                        </div> --}}
                        {{-- <div class="header-cart">
                            <a href="" class="offcanvas-toggle"><span class="cart-count">3</span><i class="fas fa-shopping-cart"></i></a>
                        </div> --}}
                        <div class="mobile-menu-toggle">
                            <a href="#offcanvas-mobile-menu" class="offcanvas-toggle">
                                <svg viewBox="0 0 800 600">
                                    <path d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200" class="top"></path>
                                    <path d="M300,320 L540,320" class="middle"></path>
                                    <path d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190" class="bottom" transform="translate(480, 320) scale(1, -1) translate(-480, -318) "></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Header Tools End -->

            </div>
        </div>
    </div>
    <!-- Mobile Header Section End -->
    <!-- OffCanvas Search Start -->

    <!-- OffCanvas Search End -->

    <!-- OffCanvas Wishlist Start -->

    <!-- OffCanvas Wishlist End -->

    <!-- OffCanvas Cart Start -->


    <!-- OffCanvas Search Start -->
    <div id="offcanvas-mobile-menu" class="offcanvas offcanvas-mobile-menu">
        <div class="inner customScroll">

            <div class="offcanvas-menu">
                <ul>
                    <li><a href="/"><span class="menu-text">Home</span></a>
                    </li>

                    <li class="has-children"><a href="#"><span class="menu-text">services</span></a>
                        <ul class="sub-menu mega-menu">
                            <li>
                                <a href="#" class="mega-menu-title"><span class="menu-text">SHOP PAGES</span></a>
                                <ul>
                                    <li><a href=""><span class="menu-text">Shop No Sidebar</span></a></li>
                                    <li><a href="/Laserexperts"><span class="menu-text">Laser experts</span></a></li>

                                </ul>
                            </li>

                        </ul>
                    </li>
                    <li ><a href="/aboutus"><span class="menu-text">About us</span></a>

                    </li>
                    <li ><a href="/contact-us"><span class="menu-text">Contact us</span></a>

                    </li>
                    <li ><a href="/join-us"><span class="menu-text">Join our team</span></a>

                    </li>

                </ul>

            </div>
            <div class="col-auto ml-auto">
                @if (Auth::check())
                <div class="d-flex align-items-center">
                    <a href="{{ route('profile.edit', [Auth::user()]) }}" class="menu-text" style="color: #F8796C;margin-right:5px">{{ Auth::user()->name }}</a>
                    <form method="POST" style="display: inline-block" action="{{ route('logout') }}">
                        @csrf
                        <a href="{{ route('logout') }}" class="btn btn-primary py-2 px-lg-2 rounded-0 d-none d-lg-block ml-2"
                           style="font-size: 17px; color: white;margin-right:20px;background-color:#F8796C;border:none ;margin-left:20px"
                           onclick="event.preventDefault(); this.closest('form').submit();">
                           {{ __('Log Out') }}
                           <i class="fa fa-arrow-right ms-3"></i>
                        </a>
                    </form>
                </div>
                @else
                <div class="d-flex align-items-center">
                    <a href="/login" class="btn btn-primary py-2 px-lg-2 rounded-0 d-none d-lg-block ml-2" style="font-size: 17px; color: white;margin-right:20px;background-color:#F8796C;border:none">
                        Login <i class="fa fa-arrow-right " ></i>
                    </a>
                  <a href="/register" style="color: #F8796C">
                         <i class="fas fa-user-plus" style="color: #F8796C;margin-right:5px"></i>Register
                    </a>
                </div>
                @endif

    </div>
        </div>

        </div>
    </div>
{{--
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}

    </div>
@endif --}}

    @yield('content')





<div class="footer2-section section section-padding">
    <div class="container">
        <div class="row learts-mb-n40">

            <div class="col-lg-6 learts-mb-40">
                <div class="widget-about">
                   <h1 style="color: #F8796C;margin-bottom: 40px;">AYSEL</h1>
                    <p>With Aysel, an unforgettable beauty experience.</p>
                </div>
            </div>

            <div class="col-lg-4 learts-mb-40">
                <div class="row">
                    <div class="col">
                        <ul class="widget-list">
                            <li><a href="/aboutus">About us</a></li>

                            <li><a href="/contact-us">Contact</a></li>
                            <li><a href="/join-us">Join our team</a></li>
                        </ul>
                    </div>

                </div>
            </div>

            <div class="col-lg-2 learts-mb-40">
                <ul class="widget-list">
                    {{-- <li> <i class="fab fa-twitter"></i> <a href="https://www.twitter.com/">Twitter</a></li> --}}
                    <li> <i class="fab fa-facebook-f"></i> <a href="https://www.facebook.com/anfal.dherat?mibextid=kFxxJD">Facebook</a></li>
                    <li> <i class="fab fa-instagram"></i> <a href="https://www.instagram.com/">Instagram</a></li>
                    {{-- <li> <i class="fab fa-youtube"></i> <a href="https://www.youtube.com/">Youtube</a></li> --}}
                </ul>
            </div>

        </div>
    </div>
</div>

<div class="footer2-copyright section">
    <div class="container">
        <p class="copyright text-center">&copy; AYSEL. All Rights Reserved</p>
    </div>
</div>
<!-- Modal -->
<div class="quickViewModal modal fade" id="quickViewModal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <button class="close" data-bs-dismiss="modal">&times;</button>
            <div class="row learts-mb-n30">



            </div>
        </div>
    </div>
</div>

<script src="{{ URL::asset('assets1/js/vendor/modernizr-3.6.0.min.js') }}"></script>
<script src="{{ URL::asset('assets1/js/vendor/jquery-3.4.1.min.js') }}"></script>
<script src="{{ URL::asset('assets1/js/vendor/jquery-migrate-3.1.0.min.js') }}"></script>
<script src="{{ URL::asset('assets1/js/vendor/bootstrap.bundle.min.js') }}"></script>

<!-- Plugins JS -->
<script src="{{ URL::asset('assets1/js/plugins/select2.min.js') }}"></script>
<script src="{{ URL::asset('assets1/js/plugins/jquery.nice-select.min.js') }}"></script>
<script src="{{ URL::asset('assets1/js/plugins/perfect-scrollbar.min.js') }}"></script>
<script src="{{ URL::asset('assets1/js/plugins/swiper.min.js') }}"></script>
<script src="{{ URL::asset('assets1/js/plugins/slick.min.js') }}"></script>
<script src="{{ URL::asset('assets1/js/plugins/mo.min.js') }}"></script>
<script src="{{ URL::asset('assets1/js/plugins/jquery.ajaxchimp.min.js') }}"></script>
<script src="{{ URL::asset('assets1/js/plugins/jquery.countdown.min.js') }}"></script>
<script src="{{ URL::asset('assets1/js/plugins/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ URL::asset('assets1/js/plugins/isotope.pkgd.min.js') }}"></script>
<script src="{{ URL::asset('assets1/js/plugins/jquery.matchHeight-min.js') }}"></script>
<script src="{{ URL::asset('assets1/js/plugins/ion.rangeSlider.min.js') }}"></script>
<script src="{{ URL::asset('assets1/js/plugins/photoswipe.min.js') }}"></script>
<script src="{{ URL::asset('assets1/js/plugins/photoswipe-ui-default.min.js') }}"></script>
<script src="{{ URL::asset('assets1/js/plugins/jquery.zoom.min.js') }}"></script>
<script src="{{ URL::asset('assets1/js/plugins/ResizeSensor.js') }}"></script>
<script src="{{ URL::asset('assets1/js/plugins/jquery.sticky-sidebar.min.js') }}"></script>
<script src="{{ URL::asset('assets1/js/plugins/product360.js') }}"></script>
<script src="{{ URL::asset('assets1/js/plugins/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ URL::asset('assets1/js/plugins/jquery.scrollUp.min.js') }}"></script>
<script src="{{ URL::asset('assets1/js/plugins/scrollax.min.js') }}"></script>

<!-- Use the minified version files listed below for better performance and remove the files listed above -->
<script src="{{ URL::asset('assets1/js/vendor/vendor.min.js') }}"></script>
<script src="{{ URL::asset('assets1/js/plugins/plugins.min.js') }}"></script>

<!-- Main Activation JS -->
<script src="{{ URL::asset('assets1/js/main.js') }}"></script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>


<script>
    $(document).ready(function () {
        $('.product-quantity').on('click', '.minus', function () {
            var input = $(this).siblings('.input-qty');
            var value = parseInt(input.val());
            value = isNaN(value) ? 0 : value;
            if (value > 0) {
                input.val(value - 1);
            }
        });

        $('.product-quantity').on('click', '.plus', function () {
            var input = $(this).siblings('.input-qty');
            var value = parseInt(input.val());
            value = isNaN(value) ? 0 : value;
            input.val(value + 1);
        });

        // Add an event listener to submit the form when the input value changes
        $('.input-qty').on('change', function () {
            var form = $(this).closest('form');
            form.submit(); // Submit the form when the quantity changes
        });
    });
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



</body>
</html>
