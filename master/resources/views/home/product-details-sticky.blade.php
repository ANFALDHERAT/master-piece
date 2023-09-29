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
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.webp">

    <!-- CSS
	============================================ -->

    <!-- Vendor CSS (Bootstrap & Icon Font) -->
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/vendor/fontawesome.min.css">
    <link rel="stylesheet" href="assets/css/vendor/themify-icons.css">
    <link rel="stylesheet" href="assets/css/vendor/customFonts.css">

    <!-- Plugins CSS (All Plugins Files) -->
    <link rel="stylesheet" href="assets/css/plugins/select2.min.css">
    <link rel="stylesheet" href="assets/css/plugins/perfect-scrollbar.css">
    <link rel="stylesheet" href="assets/css/plugins/swiper.min.css">
    <link rel="stylesheet" href="assets/css/plugins/nice-select.css">
    <link rel="stylesheet" href="assets/css/plugins/ion.rangeSlider.min.css">
    <link rel="stylesheet" href="assets/css/plugins/photoswipe.css">
    <link rel="stylesheet" href="assets/css/plugins/photoswipe-default-skin.css">
    <link rel="stylesheet" href="assets/css/plugins/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/plugins/slick.css">

    <!-- Main Style CSS -->
    <!-- <link rel="stylesheet" href="assets/css/style.css"> -->

    <!-- Use the minified version files listed below for better performance and remove the files listed above -->
    <!-- <link rel="stylesheet" href="assets/css/vendor/vendor.min.css">
    <link rel="stylesheet" href="assets/css/plugins/plugins.min.css"> -->
    <link rel="stylesheet" href="assets/css/style.min.css">
<style>
    
.booking-form {
    background-color: #f9f9f9;
    border: 1px solid #ddd;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
}

.booking-form h3 {
    margin-top: 0;
    color: #F8796C;
    font-size: 24px;
}

.booking-form form {
    display: flex;
    flex-direction: column;
}

.booking-form label {
    
    margin-bottom: 8px;
}

.booking-form input[type="date"],
.booking-form input[type="time"] {
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ddd;
    border-radius: 5px;
}

.booking-form button {
    background-color: #F8796C;
    color: white;
    border: none;
    padding: 12px;
    cursor: pointer;
    border-radius: 5px;
    font-size: 16px;
    transition: background-color 0.3s;
}

.booking-form button:hover {
    background-color: #e66b5a;
}

</style>
</head>

<body>

    <!-- Header Section Start -->
    <div class="header-section section section-fluid bg-white d-none d-xl-block">
        <div class="container">
            <div class="row align-items-center">

                <!-- Header Logo Start -->
                <div class="col-auto">
                    <div class="header-logo">
                        <a href="index-2.html"  ><h1 style="font-size: 50px;color:#F8796C">AYSEL</h1></a>
                    </div>
                </div>
                <!-- Header Logo End -->

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
                        <div class="header-login">
                            <a href="my-account.html"><i class="far fa-user"></i></a>
                        </div>
                        <div class="header-wishlist">
                            <a href="#offcanvas-wishlist" class="offcanvas-toggle"><span class="wishlist-count">3</span><i class="far fa-heart"></i></a>
                        </div>
                        <div class="header-cart">
                            <a href="#offcanvas-cart" class="offcanvas-toggle"><span class="cart-count">3</span><i class="fas fa-shopping-cart"></i></a>
                        </div>
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
                        <a href="my-account.html"><i class="far fa-user"></i></a>
                    </div>
                    <div class="header-search d-none d-sm-block d-xl-none">
                        <a href="#offcanvas-search" class="offcanvas-toggle"><i class="fas fa-search"></i></a>
                    </div>
                    <div class="header-wishlist d-none d-sm-block">
                        <a href="#offcanvas-wishlist" class="offcanvas-toggle"><span class="wishlist-count">3</span><i class="far fa-heart"></i></a>
                    </div>
                    <div class="header-cart">
                        <a href="#offcanvas-cart" class="offcanvas-toggle"><span class="cart-count">3</span><i class="fas fa-shopping-cart"></i></a>
                    </div>
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
                    <a href="index.html"><img src="assets/images/logo/logo-2.webp" alt="Learts Logo"></a>
                </div>
            </div>
            <!-- Header Logo End -->

            <!-- Header Tools Start -->
            <div class="col-auto">
                <div class="header-tools justify-content-end">
                    <div class="header-login d-none d-sm-block">
                        <a href="my-account.html"><i class="far fa-user"></i></a>
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
    <!-- Header Section End -->
    <!-- Mobile Header Section Start -->
    <div class="mobile-header bg-white section d-xl-none">
        <div class="container">
            <div class="row align-items-center">

                <!-- Header Logo Start -->
                <div class="col">
                    <div class="header-logo">
                        <a href="index.html"><img src="assets/images/logo/logo-2.webp" alt="Learts Logo"></a>
                    </div>
                </div>
                <!-- Header Logo End -->

                <!-- Header Tools Start -->
                <div class="col-auto">
                    <div class="header-tools justify-content-end">
                        <div class="header-login d-none d-sm-block">
                            <a href="my-account.html"><i class="far fa-user"></i></a>
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
                        <a href="index.html"><img src="assets/images/logo/logo-2.webp" alt="Learts Logo"></a>
                    </div>
                </div>
                <!-- Header Logo End -->

                <!-- Header Tools Start -->
                <div class="col-auto">
                    <div class="header-tools justify-content-end">
                        <div class="header-login d-none d-sm-block">
                            <a href="my-account.html"><i class="far fa-user"></i></a>
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
                        <a href="product-details.html" class="image"><img src="assets/images/product/cart-product-1.webp" alt="Cart product Image"></a>
                        <div class="content">
                            <a href="product-details.html" class="title">Walnut Cutting Board</a>
                            <span class="quantity-price">1 x <span class="amount">$100.00</span></span>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                    <li>
                        <a href="product-details.html" class="image"><img src="assets/images/product/cart-product-2.webp" alt="Cart product Image"></a>
                        <div class="content">
                            <a href="product-details.html" class="title">Lucky Wooden Elephant</a>
                            <span class="quantity-price">1 x <span class="amount">$35.00</span></span>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                    <li>
                        <a href="product-details.html" class="image"><img src="assets/images/product/cart-product-3.webp" alt="Cart product Image"></a>
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
                        <a href="product-details.html" class="image"><img src="assets/images/product/cart-product-1.webp" alt="Cart product Image"></a>
                        <div class="content">
                            <a href="product-details.html" class="title">Walnut Cutting Board</a>
                            <span class="quantity-price">1 x <span class="amount">$100.00</span></span>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                    <li>
                        <a href="product-details.html" class="image"><img src="assets/images/product/cart-product-2.webp" alt="Cart product Image"></a>
                        <div class="content">
                            <a href="product-details.html" class="title">Lucky Wooden Elephant</a>
                            <span class="quantity-price">1 x <span class="amount">$35.00</span></span>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                    <li>
                        <a href="product-details.html" class="image"><img src="assets/images/product/cart-product-3.webp" alt="Cart product Image"></a>
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
                                    <li><a href="index.html"><span class="menu-text">Arts Propelled</span></a></li>
                                    <li><a href="index-2.html"><span class="menu-text">Decor Thriving</span></a></li>
                                    <li><a href="index-3.html"><span class="menu-text">Savvy Delight</span></a></li>
                                    <li><a href="index-4.html"><span class="menu-text">Perfect Escapes</span></a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><span class="menu-text">Home Group</span></a>
                                <ul class="sub-menu">
                                    <li><a href="index-5.html"><span class="menu-text">Kitchen Cozy</span></a></li>
                                    <li><a href="index-6.html"><span class="menu-text">Dreamy Designs</span></a></li>
                                    <li><a href="index-7.html"><span class="menu-text">Crispy Recipes</span></a></li>
                                    <li><a href="index-8.html"><span class="menu-text">Decoholic Chic</span></a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><span class="menu-text">Home Group</span></a>
                                <ul class="sub-menu">
                                    <li><a href="index-9.html"><span class="menu-text">Reblended Dish</span></a></li>
                                    <li><a href="index-10.html"><span class="menu-text">Craftin House</span></a></li>
                                    <li><a href="index-11.html"><span class="menu-text">Craftswork Biz</span></a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="#"><span class="menu-text">Shop</span></a>
                        <ul class="sub-menu">
                            <li>
                                <a href="#"><span class="menu-text">Shop Pages</span></a>
                                <ul class="sub-menu">
                                    <li><a href="shop.html"><span class="menu-text">Shop No Sidebar</span></a></li>
                                    <li><a href="shop-left-sidebar.html"><span class="menu-text">Shop Left Sidebar</span></a></li>
                                    <li><a href="shop-right-sidebar.html"><span class="menu-text">Shop Right Sidebar</span></a></li>
                                    <li><a href="shop-fullwidth-no-gutters.html"><span class="menu-text">Shop Fullwidth No Space</span></a></li>
                                    <li><a href="shop-fullwidth.html"><span class="menu-text">Shop Fullwidth No Sidebar</span></a></li>
                                    <li><a href="shop-fullwidth-left-sidebar.html"><span class="menu-text">Shop Fullwidth Left Sidebar</span></a></li>
                                    <li><a href="shop-fullwidth-right-sidebar.html"><span class="menu-text">Shop Fullwidth Right Sidebar</span></a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><span class="menu-text">Product Pages</span></a>
                                <ul class="sub-menu">
                                    <li><a href="product-details.html"><span class="menu-text">Basic</span></a></li>
                                    <li><a href="product-details-fullwidth.html"><span class="menu-text">Fullwidth</span></a></li>
                                    <li><a href="product-details-sticky.html"><span class="menu-text">Sticky Details</span></a></li>
                                    <li><a href="product-details-sidebar.html"><span class="menu-text">Width Sidebar</span></a></li>
                                    <li><a href="product-details-extra-content.html"><span class="menu-text">Extra Content</span></a></li>
                                    <li><a href="product-details-image-variation.html"><span class="menu-text">Variations Images</span></a></li>
                                    <li><a href="product-details-group.html"><span class="menu-text">Bought Together</span></a></li>
                                    <li><a href="product-details-360.html"><span class="menu-text">Product 360</span></a></li>
                                    <li><a href="product-details-background.html"><span class="menu-text">Product with Background</span></a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#" class="mega-menu-title"><span class="menu-text">PRODUCT & Other PAGES</span></a>
                                <ul class="sub-menu">
                                    <li><a href="shopping-cart.html"><span class="menu-text">Shopping Cart</span></a></li>
                                    <li><a href="checkout.html"><span class="menu-text">Checkout</span></a></li>
                                    <li><a href="order-tracking.html"><span class="menu-text">Order Tracking</span></a></li>
                                    <li><a href="wishlist.html"><span class="menu-text">Wishlist</span></a></li>
                                    <li><a href="login-register.html"><span class="menu-text">Customer Login</span></a></li>
                                    <li><a href="my-account.html"><span class="menu-text">My Account</span></a></li>
                                    <li><a href="lost-password.html"><span class="menu-text">Lost Password</span></a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="#"><span class="menu-text">Project</span></a>
                        <ul class="sub-menu">
                            <li><a href="portfolio-3-columns.html"><span class="menu-text">Portfolio 3 Columns</span></a></li>
                            <li><a href="portfolio-4-columns.html"><span class="menu-text">Portfolio 4 Columns</span></a></li>
                            <li><a href="portfolio-5-columns.html"><span class="menu-text">Portfolio 5 Columns</span></a></li>
                            <li><a href="portfolio-details.html"><span class="menu-text">Portfolio Details</span></a></li>
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
                        <a href="my-account.html"><i class="far fa-user"></i></a>
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
    <!-- OffCanvas Search End -->

    <div class="offcanvas-overlay"></div>

    <!-- Page Title/Header Start -->
    <div class="page-title-section section"data-bg-image="assets/images/m2.jpg" style="height: 500px;" >
        <div class="container">
            <div class="row">
                <div class="col">

                    <div class="page-title">
                        <h1 class="title">Shop</h1>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"  style="font-size: 25px;color: black;"><a href="index-2.html"><a href="index-2.html" >Home</a></li>
                            <li class="breadcrumb-item"  style="font-size: 25px;color: black;"><a href="shop.html"><a href="shop.html" >Beauty Experts</a></li>
                            <li class="breadcrumb-item active"  style="font-size: 25px;color: black;">Beauty Expert</li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Page Title/Header End -->

    <!-- Single Products Section Start -->
    <div class="section section-padding border-bottom">
        <div class="container">
            <div class=" row learts-mb-n40">

                <!-- Product Images Start -->
                <div class="col-lg-3 col-12 learts-mb-40">
                    
                        <!-- <span class="product-badges">
                            <span class="hot">hot</span>
                        </span> -->
                  
                       
                            <img src="assets/images/ma6.jfif" alt="" style="height:400px;width: 400px;">
                </div>
      
              
            
            
         


                
                
                <div class="col-lg-4 col-6 learts-mb-40">
                               
                                    <div class="sticky-sidebar-inner">
                                        <h3 class="product-title">Hadeel Yousf</h3>
                                        <div class="product-ratings"  style="color: #F8796C;">
                                            <span class="star-rating" style="color: #F8796C;">
                                                <span class="rating-active" style="width: 100%;">ratings</span>
                                            </span>
                                            <!-- <a href="#reviews" class="review-link">(<span class="count">2</span> customer reviews)</a> -->
                                        </div>
                                      
                                        <!-- <div class="product-price">£100.00</div> -->
                                        
                                        
                                        
                                        
                                        <div class="product-description">
                                            <main class="expert-profile">
                                                <div class="expert-details">
                                                  
                                                    <p>Manicure and Pedicure Specialist</p>
                                                    <p>Experience: 5+ years</p>
                                                    
                                                    <p>Available Days: Monday - Saturday</p>
                                                    <p>Working Hours: 10:00 AM - 6:00 PM</p>
                                                 
                                                    <!-- <p >price: 10 jd</p> -->
                                                   
                                                     
                                                </div>
                                                
                                                
                                                <!-- <p style="margin-bottom: 30px;">Welcome to the world of beauty and pampering brought to you by Hadeel Yousf, a renowned beauty expert specializing in manicure and pedicure services. With a passion for creativity and an eye for detail, Hadeel brings an unparalleled level of care and artistry to every nail session.</p> -->
                                            </main>
                    </div>
                 
                                    </div>
                </div>
                <div class="col-lg-5 col-6 learts-mb-40" >
                    <div class="booking-form">
                        <h3>Book an Appointment</h3>
                        <form>
                           
                            <table style="margin-bottom: 10px;">
                                <tbody>
                                    <tr>
                                        <td>
                                           
                                                <input type="checkbox" id="manicure" name="services[]" value="manicure"></td>
                                                <td><label for="manicure">Manicure:5jd</label></td>
                                           
                                        
                                        <td>
                                            <div class="product-quantity" style="margin-bottom: 10px;">
                                                <span class="qty-btn minus"><i class="ti-minus"></i></span>
                                                <input type="text" class="input-qty" name="manicure-qty" value="1">
                                                <span class="qty-btn plus"><i class="ti-plus"></i></span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                      
                                            <div class="service-option">
                                                <td><input type="checkbox" id="pedicure" name="services[]" value="pedicure"></td>
                                               <td> <label for="pedicure">Pedicure:5jd</label></td>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="product-quantity" style="margin-bottom:10px;">
                                                <span class="qty-btn minus"><i class="ti-minus"></i></span>
                                                <input type="text" class="input-qty" name="pedicure-qty" value="1">
                                                <span class="qty-btn plus"><i class="ti-plus"></i></span>
                                            </div>
                                        </td>
                                    </tr>


                                    <tr>
                                      
                                        <div class="service-option" style="margin-bottom: 5px;">
                                            <td><input type="checkbox" id="pedicure" name="services[]" value="pedicure"></td>
                                           <td> <label for="pedicure">Pedicureand manicure:15jd</label></td>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="product-quantity" style="margin-bottom: 10px;">
                                            <span class="qty-btn minus"><i class="ti-minus"></i></span>
                                            <input type="text" class="input-qty" name="pedicure-qty" value="1">
                                            <span class="qty-btn plus"><i class="ti-plus"></i></span>
                                        </div>
                                    </td>
                                </tr>
                                    <!-- Add more service options as needed -->
                                </tbody>
                            </table>
                            <label for="date">Select Date:</label>
                            <input type="date" id="date" name="date" required><br>
                            
                            <label for="time">Select Time:</label>
                            <input type="time" id="time" name="time" required>
                          
                            <div class="product-buttons" style="margin-left: 40px;margin-top: 25px;">
                              
                                <a href="checkout.html" class="btn btn-dark btn-outline-hover-dark" style="margin-left: 20%;"> Book Now</a>
                             
                            </div>
                         
                        </form>
                    </div>
                </main>  
                    <!-- <ul class="product-title"style="text-align: center; font-size: 30px; color: black;">
                       <a class="active" href="#tab-description" >Description</a>
                        
                        
                    </ul>
                    <div class="tab-content product-infor-tab-content">
                        <div class="tab-pane fade show active" id="tab-description">
                            <div class="row">
                                <div class="col-lg-10 col-12 mx-auto">
                                    <p>Hadeel's manicure services are a blend of precision and elegance. From classic French tips to modern nail art trends, she creates designs that reflect your personality and style. Whether you're looking for a subtle and professional look or something bold and artistic, Hadeel's expertise ensures your nails are a masterpiece.</p>
                                    <p>
                                        Hadeel takes the time to understand your preferences and desires before crafting her nail artistry. Every session begins with a personalized consultation, ensuring that your nail designs align with your lifestyle and occasions.</p>
                                </div>
                            </div>
                        </div>
                    </div>-->
                
                
                </div> 
                <!-- <div class="col-lg-4 col-6 learts-mb-40">
                    <div class="section section-padding pt-0">
                        <div class="container">
                        
                
                                <div class="col learts-mb-50">
                                    <div class="instafeed instafeed-carousel instafeed-carousel2">
                                     
                                            <img src="assets/images/g1.jfif" alt="instagram image" style="height: 250px;width: 400px;" />
                                          
                                       
                                            <img src="assets/images/g2.jfif" alt="instagram image" style="height: 250px;width: 400px;"/>
                                           
                                       
                                            <img src="assets/images/g5.jfif" alt="instagram image" style="height: 250px;width: 400px;" />
                                           
                                       
                                      
                                       
                                            <img src="assets/images/g4.jfif" alt="instagram image" style="height: 250px;width: 400px;"/>
                                            
                                     
                                        
                                            <img src="assets/images/g3.png" alt="instagram image" style="height: 250px;width: 400px;"/>
                                            
                                        
                                    </div>
                                </div>
                
                            </div>
                
                        </div>
                    </div> -->
                
           
                   
               
                    <!-- <div class="col-lg-9 col-6 learts-mb-40" style="margin-top: 100px;margin-left: 15%;">
                  <div class="booking-form">
                        <h3 style="margin-bottom: 30px;">Book an Appointment</h3>
                        <form>
                            <table>
                                <tbody>
                                    <tr>
                                        <td ><span ><b>number of serviece</b></span></td>
                                        <td class="value">
                                            <div class="product-quantity">
                                                <span class="qty-btn minus"><i class="ti-minus"></i></span>
                                                <input type="text" class="input-qty" value="1">
                                                <span class="qty-btn plus"><i class="ti-plus"></i></span>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table> <br>

                            <div class="product-variations" >
                                <label for="service-type" >Choose Service Type:</label>
                                <select id="service-type" name="service-type">
                                    <option value="manicure">Manicure    5jd</option>
                                    <option value="pedicure">Pedicure    5jd</option>
                                    <option value="both">Manicure and Pedicure      10jd</option>
                                </select>
                            </div>
                            <label for="date">Select Date:</label>
                            <input type="date" id="date" name="date" required><br>
                            
                            <label for="time">Select Time:</label>
                            <input type="time" id="time" name="time" required>
                          
                            <div class="product-buttons" style="margin-left: 40px;margin-top: 25px;">
                              
                                <a href="checkout.html" class="btn btn-dark btn-outline-hover-dark"> Book Now</a>
                             
                            </div>
                         
                        </form>
                    </div>
                </main>  
                    </div> -->
                 
                <!-- Product Images End -->

                <!-- Product Summery Start -->
               
                               
                            <!-- </div> -->
                          
                           

                          
                            <!-- <div class="product-brands">
                                <span class="title">Brands</span>
                                <div class="brands">
                                    <a href="#"><img src="assets/images/brands/brand-1.webp" alt=""></a>
                                    <a href="#"><img src="assets/images/brands/brand-6.webp" alt=""></a>
                                </div>
                            </div>
                            <div class="product-meta">
                                <table>
                                    <tbody>
                                        <tr>
                                            <td class="label"><span>SKU</span></td>
                                            <td class="value">040404</td>
                                        </tr>
                                        <tr>
                                            <td class="label"><span>Category</span></td>
                                            <td class="value">
                                                <ul class="product-category">
                                                    <li><a href="#">Kitchen</a></li>
                                                    <li><a href="#">Kniting & Sewing</a></li>
                                                    <li><a href="#">Pots</a></li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="label"><span>Tags</span></td>
                                            <td class="value">
                                                <ul class="product-tags">
                                                    <li><a href="#">handmade</a></li>
                                                    <li><a href="#">learts</a></li>
                                                    <li><a href="#">mug</a></li>
                                                    <li><a href="#">product</a></li>
                                                    <li><a href="#">learts</a></li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="label"><span>Share on</span></td>
                                            <td class="va">
                                                <div class="product-share">
                                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                                    <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                                    <a href="#"><i class="fab fa-pinterest"></i></a>
                                                    <a href="#"><i class="far fa-envelope"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table> -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Product Summery End -->

            </div>
        </div>

    </div>

    <div class="section section-padding">
        <div class="container">

            <!-- Section Title Start -->
            <div class="section-title2 text-center">
                <h2 class="title" style="color: #F8796C;">Garllery</h2>
            </div>
            <!-- Section Title End -->

            <!-- Products Start -->
            <div class="product-carousel">

                <div class="col">
                    <div class="product">
                        <div class="product-thumb">
                            <a href="product-details.html" class="image">
                                <!-- <span class="product-badges">
                                    <span class="onsale">-13%</span>
                                </span> -->
                                <img src="assets/images/d2.jfif" alt="Product Image" style="height: 370px;">
                                <img class="image-hover " src="assets/images/d2.jfif" alt="Product Image" style="height: 370px;">
                            </a>
                            <a href="wishlist.html" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
                        </div>
                        <div class="product-info">
                            <!-- <h6 class="title"><a href="product-details.html">Blue and white plaid nails  -->
                            </a></h6>
                            <!-- <span class="price">
                                 <span class="old">10jd</span> 
                            <span class="new">10jd</span>
                            </span> -->
                            <!-- <div class="product-buttons">
                                <a href="#quickViewModal" data-bs-toggle="modal" class="product-button hintT-top" data-hint="Quick View"><i class="fas fa-search"></i></a>
                                <a href="#" class="product-button hintT-top" data-hint="Add to Cart"><i class="fas fa-shopping-cart"></i></a>
                                <a href="#" class="product-button hintT-top" data-hint="Compare"><i class="fas fa-random"></i></a>
                            </div> -->
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="product">
                        <div class="product-thumb">
                            <a href="product-details.html" class="image">
                                <img src="assets/images/d3.jfif" alt="Product Image" style="height: 370px;">
                                <img class="image-hover " src="assets/images/d3.jfif" alt="Product Image" style="height: 370px;">
                            </a>
                            <a href="wishlist.html" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
                        </div>
                        <div class="product-info">
                            <!-- <h6 class="title"><a href="product-details.html">burgundy and gold nails</a></h6> -->
                            <!-- <span class="price">
                               10jd
                            </span> -->
                            <!-- <div class="product-buttons">
                                <a href="#quickViewModal" data-bs-toggle="modal" class="product-button hintT-top" data-hint="Quick View"><i class="fas fa-search"></i></a>
                                <a href="#" class="product-button hintT-top" data-hint="Add to Cart"><i class="fas fa-shopping-cart"></i></a>
                                <a href="#" class="product-button hintT-top" data-hint="Compare"><i class="fas fa-random"></i></a>
                            </div> -->
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="product">
                        <div class="product-thumb">
                            <!-- <span class="product-badges">
                                <span class="hot">hot</span>
                            </span> -->
                            <a href="product-details.html" class="image">
                                <img src="assets/images/d4.jfif" alt="Product Image" style="height: 370px;">
                                <img class="image-hover " src="assets/images/d4.jfif" alt="Product Image" style="height: 370px;">
                            </a>
                            <a href="wishlist.html" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
                        </div>
                        <div class="product-info">
                            <!-- <h6 class="title"><a href="product-details.html">Cute jewel and pink floral nail art
                            </a></h6>
                            <span class="price">
                               10jd
                            </span>
                            <div class="product-buttons">
                                <a href="#quickViewModal" data-bs-toggle="modal" class="product-button hintT-top" data-hint="Quick View"><i class="fas fa-search"></i></a>
                                <a href="#" class="product-button hintT-top" data-hint="Add to Cart"><i class="fas fa-shopping-cart"></i></a>
                                <a href="#" class="product-button hintT-top" data-hint="Compare"><i class="fas fa-random"></i></a>
                            </div>-->
                        </div> 
                    </div>
                </div>

                <div class="col">
                    <div class="product">
                        <div class="product-thumb">
                            <a href="product-details.html" class="image">
                                <!-- <span class="product-badges">
                                    <span class="onsale">-27%</span>
                                </span> -->
                                <img src="assets/images/d5.jfif" alt="Product Image" style="height: 370px;">
                                <img class="image-hover " src="assets/images/d5.jfif" alt="Product Image" style="height: 370px;">
                            </a>
                            <a href="wishlist.html" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
                        </div>
                        <div class="product-info">
                            <!-- <h6 class="title"><a href="product-details.html">Warm golden hues </a></h6>
                            <span class="price">
                             
                            <span class="new">10jd</span>
                            </span>
                            <div class="product-buttons">
                                <a href="#quickViewModal" data-bs-toggle="modal" class="product-button hintT-top" data-hint="Quick View"><i class="fas fa-search"></i></a>
                                <a href="#" class="product-button hintT-top" data-hint="Add to Cart"><i class="fas fa-shopping-cart"></i></a>
                                <a href="#" class="product-button hintT-top" data-hint="Compare"><i class="fas fa-random"></i></a>
                            </div> -->
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="product">
                        <div class="product-thumb">
                            <a href="product-details.html" class="image">
                                <img src="assets/images/d2.jfif" alt="Product Image"  style="height: 370px;">
                                <img class="image-hover " src="assets/images/d2.jfif" alt="Product Image"  style="height: 370px;">
                            </a>
                            <a href="wishlist.html" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
                            
                        </div>
                        <div class="product-info">
                           
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="product">
                        <div class="product-thumb">
                            <a href="product-details.html" class="image">
                                <img src="assets/images/d1.jfif" alt="Product Image"  style="height: 370px;">
                                <img class="image-hover " src="assets/images/d1.jfif" alt="Product Image"  style="height: 370px;">
                            </a>
                            <a href="wishlist.html" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i class="far fa-heart"></i></a>
                        </div>
                        <div class="product-info">
                         
                        </div>
                    </div>
                </div>

                
                    </div>
                </div>

            </div>
            <!-- Products End -->

        </div>
   
    <!-- Single Products Section End -->

    <!-- Single Products Infomation Section Start -->
    <div class="section section-padding border-bottom">
        <div class="container">

            <ul class="nav product-info-tab-list">
                <li><a class="active" data-bs-toggle="tab" href="#tab-description">Description</a></li>
              
                <li><a data-bs-toggle="tab" href="#tab-reviews">Reviews </a></li>
            </ul>
            <div class="tab-content product-infor-tab-content">
                <div class="tab-pane fade show active" id="tab-description">
                    <div class="row">
                        <div class="col-lg-10 col-12 mx-auto">
                            <p>Hadeel Yousf is a skilled and dedicated Manicure and Pedicure Specialist who is passionate about providing exceptional nail care services. With a keen eye for detail and a commitment to client satisfaction, Hadeel brings a personalized touch to each service she offers.</p>
                            <p>Hadeel Yousf's dedication to the art of nail care and her commitment to enhancing her clients' appearance and confidence make her a sought-after Manicure and Pedicure Specialist. Her warm demeanor, expertise, and creative touch create a memorable and rejuvenating experience for everyone seeking her services.</p>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="tab-pwb_tab">
                    <div class="row learts-mb-n30">
                        <div class="col-12 learts-mb-30">
                            <div class="row learts-mb-n10">
                                <div class="col-lg-2 col-md-3 col-12 learts-mb-10"><img src="assets/images/testimonial-1.jpg" alt=""></div>
                                <div class="col learts-mb-10">
                                    <p>We’ve worked with numerous industries and famous fashion brands around the world. We have also created tremendous impacts on fashion manufacturing and online sales. When we partner with an eCommerce agency, we connect every activity to set the trend and win customers’ trust. We make sure our customers are always happy with our products.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 learts-mb-30">
                            <div class="row learts-mb-n10">
                                <div class="col-lg-2 col-md-3 col-12 learts-mb-10"><img src="assets/images/brands/brand-6.webp" alt=""></div>
                                <div class="col learts-mb-10">
                                    <p>We have recently started over a brand’s Facebook Ad campaign, and on average we have received a 409% return on our investment. Thanks to some Facebook retargeting campaigns, the number is reaching up to 777%! We have set an example for other brands about how digital marketing has helped to skyrocket the sales in the fashion industry.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="tab-additional_information">
                    <div class="row">
                        <div class="col-lg-8 col-md-10 col-12 mx-auto">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <tbody>
                                        <tr>
                                            <td>Size</td>
                                            <td>Large, Medium, Small</td>
                                        </tr>
                                        <tr>
                                            <td>Color</td>
                                            <td>Black, White</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="tab-reviews">
                    <div class="product-review-wrapper">
                        <span class="title">3 reviews </span>
                        <ul class="product-review-list">
                            <li>
                                <div class="product-review">
                                    <div class="thumb"><img src="assets/images/testimonial-1.jpg" alt=""></div>
                                    <div class="content">
                                        <div class="ratings">
                                            <span class="star-rating">
                                                <span class="rating-active" style="width: 100%;">ratings</span>
                                            </span>
                                        </div>
                                        <div class="meta">
                                            <h5 class="title">Edna Watson</h5>
                                            <span class="date">November 27, 2020</span>
                                        </div>
                                        <p>Thanks for always keeping your WordPress themes up to date. Your level of support and dedication is second to none.</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="product-review">
                                    <div class="thumb"><img src="assets/images/testimonial-2.jpg" alt=""></div>
                                    <div class="content">
                                        <div class="ratings">
                                            <span class="star-rating">
                                                <span class="rating-active" style="width: 80%;">ratings</span>
                                            </span>
                                        </div>
                                        <div class="meta">
                                            <h5 class="title">Scott James</h5>
                                            <span class="date">November 27, 2020</span>
                                        </div>
                                        <p>Thanks for always keeping your WordPress themes up to date. Your level of support and dedication is second to none.</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="product-review">
                                    <div class="thumb"><img src="assets/images/testimonial-3.jpg" alt=""></div>
                                    <div class="content">
                                        <div class="ratings">
                                            <span class="star-rating">
                                                <span class="rating-active" style="width: 60%;">ratings</span>
                                            </span>
                                        </div>
                                        <div class="meta">
                                            <h5 class="title">Owen Christ</h5>
                                            <span class="date">November 27, 2020</span>
                                        </div>
                                        <p>Good Product!</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <span class="title">Add a review</span>
                        <div class="review-form">
                            <p class="note">Your email address will not be published. Required fields are marked *</p>
                            <form action="#">
                                <div class="row learts-mb-n30">
                                    <div class="col-md-6 col-12 learts-mb-30"><input type="text" placeholder="Name *"></div>
                                    <div class="col-md-6 col-12 learts-mb-30"><input type="email" placeholder="Email *"></div>
                                    <div class="col-12 learts-mb-10">
                                        <div class="form-rating">
                                            <span class="title">Your rating</span>
                                            <span class="rating"><span class="star"></span></span>
                                        </div>
                                    </div>
                                    <div class="col-12 learts-mb-30"><textarea placeholder="Your Review *"></textarea></div>
                                    <div class="col-12 text-center learts-mb-30"><button class="btn btn-dark btn-outline-hover-dark">Submit</button></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div></div>
    <!-- Single Products Infomation Section End -->

    <!-- Recommended Products Section Start -->
   
    <!-- Recommended Products Section End -->

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
                                <li><a href="#">About us</a></li>
                                <li><a href="#">Store location</a></li>
                                <li><a href="#">Contact</a></li>
                                <li><a href="#">Orders</a></li>
                            </ul>
                        </div>
                        <div class="col">
                            <ul class="widget-list">
                                <li><a href="#">Returns</a></li>
                                <li><a href="#">Support Policy</a></li>
                                <li><a href="#">Size Guide</a></li>
                                <li><a href="#">FAQs</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 learts-mb-40">
                    <ul class="widget-list">
                        <li> <i class="fab fa-twitter"></i> <a href="https://www.twitter.com/">Twitter</a></li>
                        <li> <i class="fab fa-facebook-f"></i> <a href="https://www.facebook.com/">Facebook</a></li>
                        <li> <i class="fab fa-instagram"></i> <a href="https://www.instagram.com/">Instagram</a></li>
                        <li> <i class="fab fa-youtube"></i> <a href="https://www.youtube.com/">Youtube</a></li>
                    </ul>
                </div>

            </div>
        </div>
    </div>

    <div class="footer2-copyright section">
        <div class="container">
            <p class="copyright text-center">&copy; 2023 learts. All Rights Reserved</p>
        </div>
    </div>
    <!-- Modal -->
    <div class="quickViewModal modal fade" id="quickViewModal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <button class="close" data-bs-dismiss="modal">&times;</button>
                <div class="row learts-mb-n30">

                    <!-- Product Images Start -->
                    <div class="col-lg-6 col-12 learts-mb-30">
                        <div class="product-images">
                            <div class="product-gallery-slider-quickview">
                                <div class="product-zoom" data-image="assets/images/product/single/1/product-zoom-1.webp">
                                    <img src="assets/images/product/single/1/product-1.webp" alt="">
                                </div>
                                <div class="product-zoom" data-image="assets/images/product/single/1/product-zoom-2.webp">
                                    <img src="assets/images/product/single/1/product-2.webp" alt="">
                                </div>
                                <div class="product-zoom" data-image="assets/images/product/single/1/product-zoom-3.webp">
                                    <img src="assets/images/product/single/1/product-3.webp" alt="">
                                </div>
                                <div class="product-zoom" data-image="assets/images/product/single/1/product-zoom-4.webp">
                                    <img src="assets/images/product/single/1/product-4.webp" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Product Images End -->

                    <!-- Product Summery Start -->
                    <div class="col-lg-6 col-12 overflow-hidden position-relative learts-mb-30">
                        <div class="product-summery customScroll">
                            <div class="product-ratings">
                                <span class="star-rating">
                                <span class="rating-active" style="width: 100%;">ratings</span>
                                </span>
                                <a href="#reviews" class="review-link">(<span class="count">3</span> customer reviews)</a>
                            </div>
                            <h3 class="product-title">Cleaning Dustpan & Brush</h3>
                            <div class="product-price">£38.00 – £50.00</div>
                            <div class="product-description">
                                <p>Easy clip-on handle – Hold the brush and dustpan together for storage; the dustpan edge is serrated to allow easy scraping off the hair without entanglement. High-quality bristles – no burr damage, no scratches, thick and durable, comfortable to remove dust and smaller particles.</p>
                            </div>
                            <div class="product-variations">
                                <table>
                                    <tbody>
                                        <tr>
                                            <td class="label"><span>Size</span></td>
                                            <td class="value">
                                                <div class="product-sizes">
                                                    <a href="#">Large</a>
                                                    <a href="#">Medium</a>
                                                    <a href="#">Small</a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="label"><span>Color</span></td>
                                            <td class="value">
                                                <div class="product-colors">
                                                    <a href="#" data-bg-color="#000000"></a>
                                                    <a href="#" data-bg-color="#ffffff"></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="label"><span>Quantity</span></td>
                                            <td class="value">
                                                <div class="product-quantity">
                                                    <span class="qty-btn minus"><i class="ti-minus"></i></span>
                                                    <input type="text" class="input-qty" value="1">
                                                    <span class="qty-btn plus"><i class="ti-plus"></i></span>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="product-buttons">
                                <a href="#" class="btn btn-icon btn-outline-body btn-hover-dark"><i class="far fa-heart"></i></a>
                                <a href="#" class="btn btn-dark btn-outline-hover-dark"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                                <a href="#" class="btn btn-icon btn-outline-body btn-hover-dark"><i class="fas fa-random"></i></a>
                            </div>
                            <div class="product-brands">
                                <span class="title">Brands</span>
                                <div class="brands">
                                    <a href="#"><img src="assets/images/brands/brand-3.webp" alt=""></a>
                                    <a href="#"><img src="assets/images/brands/brand-8.webp" alt=""></a>
                                </div>
                            </div>
                            <div class="product-meta mb-0">
                                <table>
                                    <tbody>
                                        <tr>
                                            <td class="label"><span>SKU</span></td>
                                            <td class="value">0404019</td>
                                        </tr>
                                        <tr>
                                            <td class="label"><span>Category</span></td>
                                            <td class="value">
                                                <ul class="product-category">
                                                    <li><a href="#">Kitchen</a></li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="label"><span>Tags</span></td>
                                            <td class="value">
                                                <ul class="product-tags">
                                                    <li><a href="#">handmade</a></li>
                                                    <li><a href="#">learts</a></li>
                                                    <li><a href="#">mug</a></li>
                                                    <li><a href="#">product</a></li>
                                                    <li><a href="#">learts</a></li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="label"><span>Share on</span></td>
                                            <td class="va">
                                                <div class="product-share">
                                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                                    <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                                    <a href="#"><i class="fab fa-pinterest"></i></a>
                                                    <a href="#"><i class="far fa-envelope"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- Product Summery End -->

                </div>
            </div>
        </div>
    </div>
    <!-- Root element of PhotoSwipe. Must have class pswp. -->
    <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

        <!-- Background of PhotoSwipe. 
         It's a separate element as animating opacity is faster than rgba(). -->
        <div class="pswp__bg"></div>

        <!-- Slides wrapper with overflow:hidden. -->
        <div class="pswp__scroll-wrap">

            <!-- Container that holds slides. 
            PhotoSwipe keeps only 3 of them in the DOM to save memory.
            Don't modify these 3 pswp__item elements, data is added later on. -->
            <div class="pswp__container">
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
            </div>

            <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
            <div class="pswp__ui pswp__ui--hidden">

                <div class="pswp__top-bar">

                    <!--  Controls are self-explanatory. Order can be changed. -->

                    <div class="pswp__counter"></div>

                    <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>

                    <button class="pswp__button pswp__button--share" title="Share"></button>

                    <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>

                    <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>

                    <div class="pswp__preloader">
                        <div class="pswp__preloader__icn">
                            <div class="pswp__preloader__cut">
                                <div class="pswp__preloader__donut"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                    <div class="pswp__share-tooltip"></div>
                </div>

                <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
                </button>

                <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
                </button>

                <div class="pswp__caption">
                    <div class="pswp__caption__center"></div>
                </div>

            </div>

        </div>

    </div>

    <!-- JS
============================================ -->

    <!-- Vendors JS -->
    <script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="assets/js/vendor/jquery-3.4.1.min.js"></script>
    <script src="assets/js/vendor/jquery-migrate-3.1.0.min.js"></script>
    <script src="assets/js/vendor/bootstrap.bundle.min.js"></script>

    <!-- Plugins JS -->
    <script src="assets/js/plugins/select2.min.js"></script>
    <script src="assets/js/plugins/jquery.nice-select.min.js"></script>
    <script src="assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="assets/js/plugins/swiper.min.js"></script>
    <script src="assets/js/plugins/slick.min.js"></script>
    <script src="assets/js/plugins/mo.min.js"></script>
    <script src="assets/js/plugins/jquery.ajaxchimp.min.js"></script>
    <script src="assets/js/plugins/jquery.countdown.min.js"></script>
    <script src="assets/js/plugins/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/plugins/isotope.pkgd.min.js"></script>
    <script src="assets/js/plugins/jquery.matchHeight-min.js"></script>
    <script src="assets/js/plugins/ion.rangeSlider.min.js"></script>
    <script src="assets/js/plugins/photoswipe.min.js"></script>
    <script src="assets/js/plugins/photoswipe-ui-default.min.js"></script>
    <script src="assets/js/plugins/jquery.zoom.min.js"></script>
    <script src="assets/js/plugins/ResizeSensor.js"></script>
    <script src="assets/js/plugins/jquery.sticky-sidebar.min.js"></script>
    <script src="assets/js/plugins/product360.js"></script>
    <script src="assets/js/plugins/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/plugins/jquery.scrollUp.min.js"></script>
    <script src="assets/js/plugins/scrollax.min.js"></script>

    <!-- Use the minified version files listed below for better performance and remove the files listed above -->
    <!-- <script src="assets/js/vendor/vendor.min.js"></script>
<script src="assets/js/plugins/plugins.min.js"></script> -->

    <!-- Main Activation JS -->
    <script src="assets/js/main.js"></script>

</body>

</html>