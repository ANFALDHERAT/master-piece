
@extends('pageslayout.master')
    <!-- Header Section Start -->
    @section('content')
    <!-- Page Title/Header End -->
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

    <!-- OffCanvas Search End -->

    <div class="offcanvas-overlay"></div>

    <!-- Page Title/Header Start -->
    <div class="page-title-section section" data-bg-image="{{ asset('assets1/images/m2.jpg') }}" style="height: 550px;">

        <div class="container">
            <div class="row">
                <div class="col">

                    <div class="page-title" >
                        <h1 class="title" style="color: black;">Beauty Experts</h1>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item" style="font-size: 35px;color: black;"><a href="index-2.html">Home</a></li>
                            <li class="breadcrumb-item active" style="font-size: 35px;color: black;">Beauty Experts</li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Single Products Section Start -->
    <div class="section section-padding border-bottom">
        <div class="container">
            <div class=" row learts-mb-n40">

                <!-- Product Images Start -->
                <div class="col-lg-3 col-12 learts-mb-40">

                        <!-- <span class="product-badges">
                            <span class="hot">hot</span>
                        </span> -->



                            <img src="{{ $expert->image1 }}" alt="Expert Image" style="height:400px;width: 400px;">
                </div>









                <div class="col-lg-4 col-6 learts-mb-40">

                                    <div class="sticky-sidebar-inner">
                                        <h3 class="product-title">{{  $expert->name}}</h3>
                                        <div class="product-ratings"  style="color: #F8796C;">
                                            <span class="stars">
                                                @for ($i = 1; $i <= $expert->average_rating; $i++)
                                                    &#9733;
                                                @endfor
                                            </span>

                                            <!-- <a href="#reviews" class="review-link">(<span class="count">2</span> customer reviews)</a> -->
                                        </div>

                                        <!-- <div class="product-price">£100.00</div> -->




                                        <div class="product-description">
                                            <main class="expert-profile">
                                                <div class="expert-details">

                                                    <p>{{ $expert->service->name }} Specialist</p>
                                                    <p>Experience: {{  $expert->expertise}} years</p>

                                                    <p>Available Days: {{  $expert->availability}}</p>
                                                    <p>Working Hours: {{  $expert->working_hours}}</p>

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
                                <img src={{ asset('assets1/images/d2.jfif')}} alt="Product Image" style="height: 370px;">



                                <img class="image-hover " src={{ asset('assets1/images/d2.jfif') }} alt="Product Image" style="height: 370px;">
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
                                <img src= {{ asset('assets1/images/d3.jfif')}} alt="Product Image" style="height: 370px;">
                                <img class="image-hover " src= {{ asset('assets1/images/d3.jfif')}} alt="Product Image" style="height: 370px;">
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
                                <img src= {{ asset('assets1/images/d4.jfif')}} alt="Product Image" style="height: 370px;">
                                <img class="image-hover " src= {{ asset('assets1/images/d4.jfif')}} alt="Product Image" style="height: 370px;">
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
                                <img src={{ asset('assets1/images/d5.jfif')}} alt="Product Image" style="height: 370px;">
                                <img class="image-hover " src= {{ asset('assets1/images/d5.jfif')}} alt="Product Image" style="height: 370px;">
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
                                <img src= {{ asset('assets1/images/d2.jfif')}} alt="Product Image"  style="height: 370px;">

                                <img class="image-hover " src={{ asset('assets1/images/d2.jfif')}} alt="Product Image"  style="height: 370px;">
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
                                <img src= {{ asset('assets1/images/d1.jfif')}} alt="Product Image"  style="height: 370px;">

                                <img class="image-hover " src= {{ asset('assets1/images/d1.jfif')}} alt="Product Image"  style="height: 370px;">
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


    <!-- JS
============================================ -->

@endsection

