
<style>
    <style>
    /* Adjust the sidebar width */
    .page-sidebar {
        width: 100px; /* Adjust this width as needed */
    }

    /* Adjust the content column width */

</style>

<div class="page-wrapper" >

    <!-- Page Header Start-->
    <div class="page-main-header">
        <div class="main-header-right row" >
            <div class="main-header-left d-lg-none w-auto" >
                <div class="logo-wrapper">

                </div>
            </div>
            <div class="mobile-sidebar w-auto" >
                <div class="media-body text-end switch-sm">
                    <label class="switch">
                        <a href="javascript:void(0)">
                            <i id="sidebar-toggle" data-feather="align-left"></i>
                        </a>
                    </label>


                </div>

            </div>

            <div class="nav-right col">

                <ul class="nav-menus">
                    <li style="text-align: center;margin-right:200px">
                    @include('dashlayouts.main-headerbar')

                    </li>
                    <li>
                        <a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()">
                            <i data-feather="maximize-2"></i>
                        </a>
                    </li>

                    <li class="onhover-dropdown">
                        {{-- <a class="txt-dark" href="javascript:void(0)">
                            <h6 style="color: #F8796C;">EN</h6>
                        </a> --}}
                        <ul class="language-dropdown onhover-show-div p-20">
                            <li>
                                <a href="javascript:void(0)" data-lng="en">
                                    <i class="flag-icon flag-icon-is"></i>English</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" data-lng="es">
                                    <i class="flag-icon flag-icon-um"></i>Spanish</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" data-lng="pt">
                                    <i class="flag-icon flag-icon-uy"></i>Portuguese</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" data-lng="fr">
                                    <i class="flag-icon flag-icon-nz"></i>French</a>
                            </li>
                        </ul>
                    </li>
                    {{-- <li class="onhover-dropdown">
                        <i data-feather="bell"></i>
                        <span class="badge badge-pill badge-primary pull-right notification-badge">3</span>
                        <span class="dot"></span>
                        <ul class="notification-dropdown onhover-show-div p-0">
                            <li>Notification <span class="badge badge-pill badge-primary pull-right">3</span></li>
                            <li>
                                <div class="media">
                                    <div class="media-body">
                                        <h6 class="mt-0">
                                            <span>
                                                <i class="shopping-color" data-feather="shopping-bag"></i>
                                            </span>Your order ready for Ship..!
                                        </h6>
                                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetuer.</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="media">
                                    <div class="media-body">
                                        <h6 class="mt-0 txt-success">
                                            <span>
                                                <i class="download-color font-success" data-feather="download"></i>
                                            </span>Download Complete
                                        </h6>
                                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetuer.</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="media">
                                    <div class="media-body">
                                        <h6 class="mt-0 txt-danger">
                                            <span>
                                                <i class="alert-color font-danger" data-feather="alert-circle"></i>
                                            </span>250 MB trash files
                                        </h6>
                                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetuer.</p>
                                    </div>
                                </div>
                            </li>
                            <li class="txt-dark"><a href="javascript:void(0)">All</a> notification</li>
                        </ul>
                    </li> --}}
                    {{-- <li>
                        <a href="javascript:void(0)">
                            <i class="right_side_toggle" data-feather="message-square"></i>
                            <span class="dot"></span>
                        </a>
                    </li> --}}
                    <li class="onhover-dropdown">
                        <div class="media align-items-center">
                            <img class="align-self-center pull-right img-50 blur-up lazyloaded"
                                src="{{ asset('assets/images/WhatsApp Image 2023-10-02 at 3.34.14 PM.jpeg') }}" alt="header-user" style="border-radius: 80%;">
                            <div class="dotted-animation">
                                <span class="animate-circle"></span>
                                <span class="main-circle"></span>
                            </div>
                        </div>
                        <ul class="profile-dropdown onhover-show-div p-20 profile-dropdown-hover">
                            <li>
                                <a href="/profilee/1">
                                    <i data-feather="user"></i>Edit Profile
                                </a>
                            </li>

                            <li>
                                @if (session('loginname'))
                                    <a href="{{ route('adminLogout') }}">
                            <button type="submit" class="btn btn-warning" style="width: 200px;font-size:10px">Log out</button>
                          </a>
                           @endif

                            </li>
                        </ul>
                    </li>
                </ul>
                <div class="d-lg-none mobile-toggle pull-right">
                    <i data-feather="more-horizontal"></i>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header Ends -->

    <!-- Page Body Start-->
    <div class="page-body-wrapper">

        <!-- Page Sidebar Start-->
        <div class="page-sidebar">
            <div class="main-header-left d-none d-lg-block">

            </div>
            <div class="sidebar custom-scrollbar">
                <a href="javascript:void(0)" class="sidebar-back d-lg-none d-block"><i class="fa fa-times"
                        aria-hidden="true"></i></a>
                <div class="sidebar-user">
                    {{-- <img class="img-60" src="assets/images/Anfal.png" alt="#"> --}}
                    <div>
                        <a href="index-2.html" ><h1 style="font-size: 50px;color:#F8796C">AYSEL</h1></a>
                        <!-- <p>general manager.</p> -->
                    </div>
                </div>
                <ul class="sidebar-menu">
                    <li>
                        <a class="sidebar-header" href="/homeAdmin">
                            <i data-feather="home"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>





                    <li>
                        <a class="sidebar-header" href="/Admin">
                            <i data-feather="home"></i>
                            <span>Admin</span>
                        </a>
                    </li>
                    <li>
                        <a class="sidebar-header" href="/user">
                            <i data-feather="home"></i>
                            <span>User</span>
                        </a>
                    </li>
                    <li>
                        <a class="sidebar-header" href="/BeautyExpert">
                            <i data-feather="home"></i>
                            <span>Beauty Expert</span>
                        </a>
                    </li>
                    <li>
                        <a class="sidebar-header" href="/JoinUs">
                            <i data-feather="home"></i>
                            <span>join us</span>
                        </a>
                    </li>



                    <li>
                        <a class="sidebar-header" href="javascript:void(0)">
                            <i class="fa fa-circle"></i>
                            <span>services</span>
                            <i class="fa fa-angle-right pull-right"></i>
                        </a>

                        <ul class="sidebar-submenu">
                            {{-- <li>
                                <a href="/category">
                                    <i class="fa fa-circle"></i>Category
                                </a>
                            </li> --}}

                            <li>
                                <a href="/Service">
                                    <i class="fa fa-circle"></i>services
                                </a>
                            </li>

                            {{-- <li>
                                <a href="/ServicePrice">
                                    <i class="fa fa-circle"></i>Service_Prices
                                </a>
                            </li> --}}

                            {{-- <li>
                                <a href="add-digital-product.html">
                                    <i class="fa fa-circle"></i>Add Product
                                </a>
                            </li>
--}}


                    <li>
                        <a href="/Review">
                            <i class="fa fa-circle"></i>
                            <span> Review</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li>
                <a class="sidebar-header" href="javascript:void(0)">
                    <i data-feather="archive"></i>
                    <span>Orders</span>
                    <i class="fa fa-angle-right pull-right"></i>
                </a>

                <ul class="sidebar-submenu">
                    <li>
                        <a href="/Booking">
                            <i class="fa fa-circle"></i>
                            <span>Booking</span>
                        </a>
                    </li>

                    <li>
                        <a href="/Checkout">
                            <i class="fa fa-circle"></i>
                            <span>Payment</span>
                        </a>
                    </li>

                    {{-- <li>
                        <a href="order-detail.html">
                            <i class="fa fa-circle"></i>
                            <span></span>
                        </a>
                    </li> --}}
                </ul>
            </li>


                    {{-- <li>
                        <a class="sidebar-header" href="javascript:void(0)">
                            <i data-feather="tag"></i>
                            <span>Coupons</span>
                            <i class="fa fa-angle-right pull-right"></i>
                        </a>
                        <ul class="sidebar-submenu">
                            <li>
                                <a href="coupon-list.html">
                                    <i class="fa fa-circle"></i>List Coupons
                                </a>
                            </li>
                            <li>
                                <a href="coupon-create.html">
                                    <i class="fa fa-circle"></i>Create Coupons
                                </a>
                            </li>
                        </ul>
                    </li> --}}

                    {{-- <li>
                        <a class="sidebar-header" href="javascript:void(0)">
                            <i data-feather="clipboard"></i>
                            <span>Pages</span>
                            <i class="fa fa-angle-right pull-right"></i>
                        </a>
                        <ul class="sidebar-submenu">
                            <li>
                                <a href="pages-list.html">
                                    <i class="fa fa-circle"></i>List Page
                                </a>
                            </li>
                            <li>
                                <a href="page-create.html">
                                    <i class="fa fa-circle"></i>Create Page
                                </a>
                            </li>
                        </ul>
                    </li>
 --}}


                    {{-- <li>
                        <a class="sidebar-header" href="javascript:void(0)">
                            <i data-feather="user-plus"></i>
                            <span>Users</span>
                            <i class="fa fa-angle-right pull-right"></i>
                        </a>
                        <ul class="sidebar-submenu">
                            <li>
                                <a href="user-list.html">
                                    <i class="fa fa-circle"></i>User List
                                </a>
                            </li>
                            <li>
                                <a href="create-user.html">
                                    <i class="fa fa-circle"></i>Create User
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a class="sidebar-header" href="javascript:void(0)">
                            <i data-feather="users"></i>
                            <span>Vendors</span>
                            <i class="fa fa-angle-right pull-right"></i>
                        </a>
                        <ul class="sidebar-submenu">
                            <li>
                                <a href="list-vendor.html">
                                    <i class="fa fa-circle"></i>Vendor List
                                </a>
                            </li>
                            <li>
                                <a href="create-vendors.html">
                                    <i class="fa fa-circle"></i>Create Vendor
                                </a>
                            </li>
                        </ul>
                    </li>
 --}}



                    <li>
                        <a class="sidebar-header" href="javascript:void(0)"><i
                                data-feather="settings"></i><span>Settings</span><i
                                class="fa fa-angle-right pull-right"></i></a>
                        <ul class="sidebar-submenu">
                            <li>
                                <a href="/profilee/1"><i class="fa fa-circle"></i>Profile
                                </a>
                            </li>
                        </ul>
                    </li>


                    <li>
                        @if (session('loginname'))
                        <a href="{{ route('adminLogout') }}">
                <button type="submit" class="btn " style="width: 150px;font-size:10px;background-color:white;margin-left:20px;margin-top:40px">Log out</button>
              </a>
               @endif
                    </li>
                </ul>
            </div>
        </div>
        <!-- Page Sidebar Ends-->

        <!-- Right sidebar Start-->
        <div class="right-sidebar" id="right_side_bar">
            <div>
                <div class="container p-0">
                    <div class="modal-header p-l-20 p-r-20">
                        <div class="col-sm-8 p-0">
                            <h6 class="modal-title font-weight-bold">FRIEND LIST</h6>
                        </div>
                        <div class="col-sm-4 text-end p-0">
                            <i class="me-2" data-feather="settings"></i>
                        </div>
                    </div>
                </div>
                <div class="friend-list-search mt-0">
                    <input type="text" placeholder="search friend">
                    <i class="fa fa-search"></i>
                </div>
                <div class="p-l-30 p-r-30 friend-list-name">
                    <div class="chat-box">
                        <div class="people-list friend-list">
                            <ul class="list">
                                <li class="clearfix">
                                    <img class="rounded-circle user-image blur-up lazyloaded"
                                        src="assets/images/dashboard/user.jpg" alt="">
                                    <div class="status-circle online"></div>
                                    <div class="about">
                                        <div class="name">Vincent Porter</div>
                                        <div class="status">Online</div>
                                    </div>
                                </li>
                                <li class="clearfix">
                                    <img class="rounded-circle user-image blur-up lazyloaded"
                                        src="assets/images/dashboard/user1.jpg" alt="">
                                    <div class="status-circle away"></div>
                                    <div class="about">
                                        <div class="name">Ain Chavez</div>
                                        <div class="status">28 minutes ago</div>
                                    </div>
                                </li>
                                <li class="clearfix">
                                    <img class="rounded-circle user-image blur-up lazyloaded"
                                        src="assets/images/dashboard/user2.jpg" alt="">
                                    <div class="status-circle online"></div>
                                    <div class="about">
                                        <div class="name">Kori Thomas</div>
                                        <div class="status">Online</div>
                                    </div>
                                </li>
                                <li class="clearfix">
                                    <img class="rounded-circle user-image blur-up lazyloaded"
                                        src="assets/images/dashboard/user3.jpg" alt="">
                                    <div class="status-circle online"></div>
                                    <div class="about">
                                        <div class="name">Erica Hughes</div>
                                        <div class="status">Online</div>
                                    </div>
                                </li>
                                <li class="clearfix">
                                    <img class="rounded-circle user-image blur-up lazyloaded"
                                        src="assets/images/dashboard/user3.jpg" alt="">
                                    <div class="status-circle offline"></div>
                                    <div class="about">
                                        <div class="name">Ginger Johnston</div>
                                        <div class="status">2 minutes ago</div>
                                    </div>
                                </li>
                                <li class="clearfix">
                                    <img class="rounded-circle user-image blur-up lazyloaded"
                                        src="assets/images/dashboard/user5.jpg" alt="">
                                    <div class="status-circle away"></div>
                                    <div class="about">
                                        <div class="name">Prasanth Anand</div>
                                        <div class="status">2 hour ago</div>
                                    </div>
                                </li>
                                <li class="clearfix">
                                    <img class="rounded-circle user-image blur-up lazyloaded"
                                        src="assets/images/dashboard/designer.jpg" alt="">
                                    <div class="status-circle online"></div>
                                    <div class="about">
                                        <div class="name">Hileri Jecno</div>
                                        <div class="status">Online</div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
