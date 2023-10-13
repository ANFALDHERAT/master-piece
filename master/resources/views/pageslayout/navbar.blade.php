<div class="header-section section section-fluid bg-white d-none d-xl-block">
    <div class="container">
        <div class="row align-items-center">

            <!-- Header Logo Start -->
            <div class="col-auto">
                <div class="header-logo">
                    <a href="index-2.html"  ><h1  style="font-size: 50px;color:#F8796C">AYSEL</h1></a>
                </div>
            </div>
            <!-- Header Logo End -->

            <!-- Search Start -->
            <div class="col">
                <nav class="site-main-menu site-main-menu-left menu-height-100">
                    <ul>
                        <li ><a href="index-2.html"><span class="menu-text">Home</span></a>
                            </li>
                        <li class="has-children"><a href="#"><span class="menu-text">services</span></a>
                            <ul class="sub-menu " >
                                <li >

                                    <ul>
                                        <li><a href="medical.html"><span class="menu-text">a Medical beauty centers</span></a></li>
                                        <li><a href="Laser experts.html"><span class="menu-text">Laser experts</span></a></li>

                                    </ul>
                                </li>

                            </ul>
                        </li>
                        <li ><a href="about-us.html"><span class="menu-text">About us</span></a>

                        </li>
                        <li ><a href="contact-us.html"><span class="menu-text">Contact us</span></a>

                        </li>
                        <li ><a href="joinus.html"><span class="menu-text">Join our team</span></a>

                        </li>
                    </ul>
                    </nav>
                </div>

                <!-- Login and Register Section -->
                <div class="col-auto ml-auto">
                    @if (Auth::check())
                    <div class="d-flex align-items-center">
                        <a href="{{ route('profile.edit', [Auth::user()]) }}" class="menu-text">{{ Auth::user()->name }}</a>
                        <form method="POST" style="display: inline-block" action="{{ route('logout') }}">
                            @csrf
                            <a href="{{ route('logout') }}" class="btn btn-primary py-2 px-lg-2 rounded-0 d-none d-lg-block ml-2"
                               style="font-size: 17px; color: white ;margin-left:20px"
                               onclick="event.preventDefault(); this.closest('form').submit();">
                               {{ __('Log Out') }}
                               <i class="fa fa-arrow-right ms-3"></i>
                            </a>
                        </form>
                    </div>
                    @else
                    <div class="d-flex align-items-center">
                        <a href="/login" class="btn btn-primary py-2 px-lg-2 rounded-0 d-none d-lg-block ml-2" style="font-size: 17px; color: white;margin-right:20px">
                            Login <i class="fa fa-arrow-right " ></i>
                        </a>
                      <a href="/register" >
                             <i class="fas fa-user-plus" style="color: #F8796C;margin-right:5px"></i>Register
                        </a>
                    </div>
                    @endif

        </div>
            </div>
            <!-- Search End -->

            <!-- Search Start -->
            {{-- <div class="col-auto d-none d-xl-block">
                <div class="header2-search">
                    <form action="#">
                        <input type="text" placeholder="Search...">
                        <button class="btn"><i class="fas fa-search"></i></button>
                    </form>
                </div>
            </div> --}}
            <!-- Search End -->

            <!-- Header Tools Start -->
            <div class="col-auto">
                <div class="header-tools justify-content-end">

                    {{-- <i class="far fa-user"></i> --}}

                    {{-- <div class="header-wishlist">
                        <a href="#offcanvas-wishlist" class="offcanvas-toggle"><span class="wishlist-count">3</span><i class="far fa-heart"></i></a>
                    </div>
                    <div class="header-cart">
                        <a href="#offcanvas-cart" class="offcanvas-toggle"><span class="cart-count">3</span><i class="fas fa-shopping-cart"></i></a>
                    </div> --}}
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
                    <a href="index-2.html" ><h1 style="font-size: 50px;color:#F8796C">AYSEL</h1></a>
                </div>
            </div>
            <!-- Header Logo End -->

            <!-- Search Start -->
            <div class="col-auto me-auto">
                <nav class="site-main-menu site-main-menu-left menu-height-100 justify-content-center">
                    <ul>
                        <li ><a href="index-2.html"><span class="menu-text">Home</span></a>
                            </li>
                        <li class="has-children"><a href="#"><span class="menu-text">services</span></a>
                            <ul class="sub-menu mega-menu">
                                <li>
                                    <a href="#" class="mega-menu-title"><span class="menu-text">SHOP PAGES</span></a>
                                    <ul>
                                        <li><a href="shop.html"><span class="menu-text">Shop No Sidebar</span></a></li>
                                        <li><a href="shop-left-sidebar.html"><span class="menu-text">Shop Left Sidebar</span></a></li>

                                    </ul>
                                </li>

                            </ul>
                        </li>
                        <li ><a href="about-us.html"><span class="menu-text">About us</span></a>

                        </li>
                        <li ><a href="contact-us.html"><span class="menu-text">Contact us</span></a>

                        </li>
                        <li ><a href="joinus.html"><span class="menu-text">Join our team</span></a>

                        </li>

                    </ul>
                </nav>
            </div>
            <!-- Search End -->

            <!-- Search Start -->
            <div class="col-auto d-none d-xl-block">
                <div class="header2-search">
                    <form action="#">
                        <input type="text" placeholder="Search...">
                        <button class="btn"><i class="fas fa-search"></i></button>
                    </form>
                </div>
            </div>
            <!-- Search End -->

            <!-- Header Tools Start -->
            <div class="col-auto">
                <div class="header-tools justify-content-end">
                    <div class="header-login d-none d-sm-block">
                        <a href="colorlib-regform-7/login.html"><i class="far fa-user"></i></a>
                    </div>
                    <div class="header-search d-none d-sm-block d-xl-none">
                        <a href="#offcanvas-search" class="offcanvas-toggle"><i class="fas fa-search"></i></a>
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
                    <a href="index.html"><img src="assets1/images/logo/logo-2.webp" alt="Learts Logo"></a>
                </div>
            </div>
            <!-- Header Logo End -->

            <!-- Header Tools Start -->
            <div class="col-auto">
                <div class="header-tools justify-content-end">
                    <div class="header-login d-none d-sm-block">
                       <a href="colorlib-regform-7/login.html"><i class="far fa-user"></i></a>
                    </div>
                    <div class="header-search d-none d-sm-block">
                        <a href="#offcanvas-search" class="offcanvas-toggle"><i class="fas fa-search"></i></a>
                    </div>
                    <div class="header-wishlist d-none d-sm-block">
                        <a href="#offcanvas-wishlist" class="offcanvas-toggle"><span class="wishlist-count">3</span><i class="far fa-heart"></i></a>
                    </div>
                    <div class="header-cart">
                        <a href="#offcanvas-cart" class="offcanvas-toggle"><span class="cart-count">3</span><i class="fas fa-shopping-cart"></i></a>
                    </div>
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
                    <a href="index.html"><img src="assets1/images/logo/logo-2.webp" alt="Learts Logo"></a>
                </div>
            </div>
            <!-- Header Logo End -->

            <!-- Header Tools Start -->
            <div class="col-auto">
                <div class="header-tools justify-content-end">
                    <div class="header-login d-none d-sm-block">
                        <a href="colorlib-regform-7/login.html"><i class="far fa-user"></i></a>
                    </div>
                    <div class="header-search d-none d-sm-block">
                        <a href="#offcanvas-search" class="offcanvas-toggle"><i class="fas fa-search"></i></a>
                    </div>
                    <div class="header-wishlist d-none d-sm-block">
                        <a href="#offcanvas-wishlist" class="offcanvas-toggle"><span class="wishlist-count">3</span><i class="far fa-heart"></i></a>
                    </div>
                    <div class="header-cart">
                        <a href="#offcanvas-cart" class="offcanvas-toggle"><span class="cart-count">3</span><i class="fas fa-shopping-cart"></i></a>
                    </div>
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
<div id="offcanvas-search" class="offcanvas offcanvas-search">
    <div class="inner">
        <div class="offcanvas-search-form">
            <button class="offcanvas-close">×</button>
            <form action="#">
                <div class="row mb-n3">
                    <div class="col-lg-8 col-12 mb-3"><input type="text" placeholder="Search Products..."></div>
                    <div class="col-lg-4 col-12 mb-3">
                        <select class="search-select select2-basic">
                            <option value="0">All Categories</option>
                            <option value="kids-babies">Kids &amp; Babies</option>
                            <option value="home-decor">Home Decor</option>
                            <option value="gift-ideas">Gift ideas</option>
                            <option value="kitchen">Kitchen</option>
                            <option value="toys">Toys</option>
                            <option value="kniting-sewing">Kniting &amp; Sewing</option>
                            <option value="pots">Pots</option>
                        </select>
                    </div>
                </div>
            </form>
        </div>
        <p class="search-description text-body-light mt-2"> <span># Type at least 1 character to search</span> <span># Hit enter to search or ESC to close</span></p>

    </div>
</div>
<!-- OffCanvas Search End -->

<!-- OffCanvas Wishlist Start -->
<div id="offcanvas-wishlist" class="offcanvas offcanvas-wishlist">
    <div class="inner">
        <div class="head">
            <span class="title">Wishlist</span>
            <button class="offcanvas-close">×</button>
        </div>
        <div class="body customScroll">
            <ul class="minicart-product-list">
                <li>
                    <a href="product-details.html" class="image"><img src="assets1/images/product/cart-product-1.webp" alt="Cart product Image"></a>
                    <div class="content">
                        <a href="product-details.html" class="title">Walnut Cutting Board</a>
                        <span class="quantity-price">1 x <span class="amount">$100.00</span></span>
                        <a href="#" class="remove">×</a>
                    </div>
                </li>
                <li>
                    <a href="product-details.html" class="image"><img src="assets1/images/product/cart-product-2.webp" alt="Cart product Image"></a>
                    <div class="content">
                        <a href="product-details.html" class="title">Lucky Wooden Elephant</a>
                        <span class="quantity-price">1 x <span class="amount">$35.00</span></span>
                        <a href="#" class="remove">×</a>
                    </div>
                </li>
                <li>
                    <a href="product-details.html" class="image"><img src="assets1/images/product/cart-product-3.webp" alt="Cart product Image"></a>
                    <div class="content">
                        <a href="product-details.html" class="title">Fish Cut Out Set</a>
                        <span class="quantity-price">1 x <span class="amount">$9.00</span></span>
                        <a href="#" class="remove">×</a>
                    </div>
                </li>
            </ul>
        </div>
        <div class="foot">
            <div class="buttons">
                <a href="wishlist.html" class="btn btn-dark btn-hover-primary">view wishlist</a>
            </div>
        </div>
    </div>
</div>
<!-- OffCanvas Wishlist End -->

<!-- OffCanvas Cart Start -->
<div id="offcanvas-cart" class="offcanvas offcanvas-cart">
    <div class="inner">
        <div class="head">
            <span class="title">Cart</span>
            <button class="offcanvas-close">×</button>
        </div>
        <div class="body customScroll">
            <ul class="minicart-product-list">
                <li>
                    <a href="product-details.html" class="image"><img src="assets1/images/product/cart-product-1.webp" alt="Cart product Image"></a>
                    <div class="content">
                        <a href="product-details.html" class="title">Walnut Cutting Board</a>
                        <span class="quantity-price">1 x <span class="amount">$100.00</span></span>
                        <a href="#" class="remove">×</a>
                    </div>
                </li>
                <li>
                    <a href="product-details.html" class="image"><img src="assets1/images/product/cart-product-2.webp" alt="Cart product Image"></a>
                    <div class="content">
                        <a href="product-details.html" class="title">Lucky Wooden Elephant</a>
                        <span class="quantity-price">1 x <span class="amount">$35.00</span></span>
                        <a href="#" class="remove">×</a>
                    </div>
                </li>
                <li>
                    <a href="product-details.html" class="image"><img src="assets1/images/product/cart-product-3.webp" alt="Cart product Image"></a>
                    <div class="content">
                        <a href="product-details.html" class="title">Fish Cut Out Set</a>
                        <span class="quantity-price">1 x <span class="amount">$9.00</span></span>
                        <a href="#" class="remove">×</a>
                    </div>
                </li>
            </ul>
        </div>
        <div class="foot">
            <div class="sub-total">
                <strong>Subtotal :</strong>
                <span class="amount">$144.00</span>
            </div>
            <div class="buttons">
                <a href="shopping-cart.html" class="btn btn-dark btn-hover-primary">view cart</a>
                <a href="checkout.html" class="btn btn-outline-dark">checkout</a>
            </div>
            <p class="minicart-message">Free Shipping on All Orders Over $100!</p>
        </div>
    </div>
</div>
<!-- OffCanvas Cart End -->

<!-- OffCanvas Search Start -->
<div id="offcanvas-mobile-menu" class="offcanvas offcanvas-mobile-menu">
    <div class="inner customScroll">
        <div class="offcanvas-menu-search-form">
            <form action="#">
                <input type="text" placeholder="Search...">
                <button><i class="fas fa-search"></i></button>
            </form>
        </div>
        <div class="offcanvas-menu">
            <ul>
                <li><a href="#"><span class="menu-text">Home</span></a>
                    <ul class="sub-menu">
                        <li>
                            <a href="#"><span class="menu-text">Home Group</span></a>
                            <ul class="sub-menu">

                            </ul>
                        </li>
                        <li>
                            <a href="#"><span class="menu-text">Home Group</span></a>
                            <ul class="sub-menu">

                            </ul>
                        </li>
                        <li>
                            <a href="#"><span class="menu-text">Home Group</span></a>
                            <ul class="sub-menu">

                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="#"><span class="menu-text">Shop</span></a>
                    <ul class="sub-menu">
                        <li>
                            <a href="#"><span class="menu-text">Shop Pages</span></a>
                            <ul class="sub-menu">

                            </ul>
                        </li>
                        <li>
                            <a href="#"><span class="menu-text">Product Pages</span></a>
                            <ul class="sub-menu">

                            </ul>
                        </li>
                        <li>
                            <a href="#" class="mega-menu-title"><span class="menu-text">PRODUCT & Other PAGES</span></a>
                            <ul class="sub-menu">

                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="#"><span class="menu-text">Project</span></a>
                    <ul class="sub-menu">

                    </ul>
                </li>
                <li><a href="#"><span class="menu-text">Elements</span></a>
                    <ul class="sub-menu">
                        <li>
                            <a href="#" class="mega-menu-title"><span class="menu-text">Column One</span></a>
                            <ul class="sub-menu">
                                <li><a href="elements-products.html"><span class="menu-text">Product Styles</span></a></li>
                                <li><a href="elements-products-tabs.html"><span class="menu-text">Product Tabs</span></a></li>
                                <li><a href="elements-product-sale-banner.html"><span class="menu-text">Product & Sale Banner</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="mega-menu-title"><span class="menu-text">Column Two</span></a>
                            <ul class="sub-menu">
                                <li><a href="elements-category-banner.html"><span class="menu-text">Category Banner</span></a></li>
                                <li><a href="elements-team.html"><span class="menu-text">Team Member</span></a></li>
                                <li><a href="elements-testimonials.html"><span class="menu-text">Testimonials</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="mega-menu-title"><span class="menu-text">Column Three</span></a>
                            <ul class="sub-menu">
                                <li><a href="elements-instagram.html"><span class="menu-text">Instagram</span></a></li>
                                <li><a href="elements-map.html"><span class="menu-text">Google Map</span></a></li>
                                <li><a href="elements-icon-box.html"><span class="menu-text">Icon Box</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="mega-menu-title"><span class="menu-text">Column Four</span></a>
                            <ul class="sub-menu">
                                <li><a href="elements-buttons.html"><span class="menu-text">Buttons</span></a></li>
                                <li><a href="elements-faq.html"><span class="menu-text">FAQs / Toggles</span></a></li>
                                <li><a href="elements-brands.html"><span class="menu-text">Brands</span></a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="#"><span class="menu-text">Blog</span></a>
                    <ul class="sub-menu">
                        <li><a href="#"><span class="menu-text">Standard Layout</span></a>
                            <ul class="sub-menu">
                                <li><a href="blog-right-sidebar.html"><span class="menu-text">Right Sidebar</span></a></li>
                                <li><a href="blog-left-sidebar.html"><span class="menu-text">Left Sidebar</span></a></li>
                                <li><a href="blog-fullwidth.html"><span class="menu-text">Full Width</span></a></li>
                            </ul>
                        </li>
                        <li><a href="#"><span class="menu-text">Grid Layout</span></a>
                            <ul class="sub-menu">
                                <li><a href="blog-grid-right-sidebar.html"><span class="menu-text">Right Sidebar</span></a></li>
                                <li><a href="blog-grid-left-sidebar.html"><span class="menu-text">Left Sidebar</span></a></li>
                                <li><a href="blog-grid-fullwidth.html"><span class="menu-text">Full Width</span></a></li>
                            </ul>
                        </li>
                        <li><a href="#"><span class="menu-text">List Layout</span></a>
                            <ul class="sub-menu">
                                <li><a href="blog-list-right-sidebar.html"><span class="menu-text">Right Sidebar</span></a></li>
                                <li><a href="blog-list-left-sidebar.html"><span class="menu-text">Left Sidebar</span></a></li>
                                <li><a href="blog-list-fullwidth.html"><span class="menu-text">Full Width</span></a></li>
                            </ul>
                        </li>
                        <li><a href="#"><span class="menu-text">Masonry Layout</span></a>
                            <ul class="sub-menu">
                                <li><a href="blog-masonry-right-sidebar.html"><span class="menu-text">Right Sidebar</span></a></li>
                                <li><a href="blog-masonry-left-sidebar.html"><span class="menu-text">Left Sidebar</span></a></li>
                                <li><a href="blog-masonry-fullwidth.html"><span class="menu-text">Full Width</span></a></li>
                            </ul>
                        </li>
                        <li><a href="#"><span class="menu-text">Single Post Layout</span></a>
                            <ul class="sub-menu">
                                <li><a href="blog-details-right-sidebar.html"><span class="menu-text">Right Sidebar</span></a></li>
                                <li><a href="blog-details-left-sidebar.html"><span class="menu-text">Left Sidebar</span></a></li>
                                <li><a href="blog-details-fullwidth.html"><span class="menu-text">Full Width</span></a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="#"><span class="menu-text">Pages</span></a>
                    <ul class="sub-menu">
                        <li><a href="about-us.html"><span class="menu-text">About us</span></a></li>
                        <li><a href="about-us-2.html"><span class="menu-text">About us 02</span></a></li>
                        <li><a href="contact-us.html"><span class="menu-text">Contact us</span></a></li>
                        <li><a href="coming-soon.html"><span class="menu-text">Coming Soon</span></a></li>
                        <li><a href="404.html"><span class="menu-text">Page 404</span></a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="offcanvas-buttons">
            <div class="header-tools">
                <div class="header-login">
                    <a href="colorlib-regform-7/login.html"><i class="far fa-user"></i></a>
                </div>
                <div class="header-wishlist">
                    <a href="wishlist.html"><span>3</span><i class="far fa-heart"></i></a>
                </div>
                <div class="header-cart">
                    <a href="shopping-cart.html"><span class="cart-count">3</span><i class="fas fa-shopping-cart"></i></a>
                </div>
            </div>
        </div>
        <div class="offcanvas-social">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
        </div>
    </div>
</div>
