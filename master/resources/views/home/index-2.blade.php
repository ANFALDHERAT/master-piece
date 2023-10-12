
@extends('pageslayout.master')
    <!-- Header Section Start -->
    @section('content')
    <!-- OffCanvas Search End -->

    <div class="offcanvas-overlay"></div>

    <!-- Slider main container Start -->
    <div class="home2-slider swiper-container">
        <div class="swiper-wrapper">
            <div class="home2-slide-item swiper-slide" data-swiper-autoplay="3000" >
                <div class="home-slide-image" >
                    <img src="assets1/images/o1.jpg" alt="Slide One Image" class="full-screen-image" >

                    <div class="home2-slide1-product1">

                    </div>

                </div>
                <div class="home2-slide-content" style="background-color: #F8796C;padding: 30px;opacity:   0.7;" >
                    <h2 class="title" style="color: aliceblue;opacity: none;">AYSEL</h2>
                    <h3 class="title" style="color: aliceblue;">Home Beauty Experts</h3>
                    <div class="link" ><a href="shop.html" style="color: aliceblue;">shop </a></div>
                </div>
                <div class="home2-slide-pages">

                </div>
            </div>
            <div class="home2-slide-item swiper-slide" data-swiper-autoplay="3000" >
                <div class="home-slide-image" >
                    <img src="assets1/images/o6.jpg" alt="Slide One Image" class="full-screen-image" >


                </div>
                <div class="home2-slide-content" style="background-color: #F8796C;padding: 30px;opacity:   0.7;">
                    <h2 class="title" style="color: aliceblue;">AYSEL</h2>
                    <h3 class="title" style="color: aliceblue;">Home Beauty Experts</h3>
                    <div class="link" ><a href="shop.html" style="color: aliceblue;">shop </a></div>
                </div>
                <div class="home2-slide-pages">

                </div>
            </div>
            <div class="home2-slide-item swiper-slide" data-swiper-autoplay="3000" >
                <div class="home-slide-image" >
                    <img src="assets1/images/o5.jpg" alt="Slide One Image" class="full-screen-image" >




                </div>
                <div class="home2-slide-content" style="background-color: #F8796C;padding: 30px;opacity:   0.7;">
                    <h2 class="title" style="color: aliceblue;">AYSEL</h2>
                    <h3 class="title" style="color: aliceblue;">Home Beauty Experts</h3>
                    <div class="link" ><a href="shop.html" style="color: aliceblue;">shop </a></div>
                </div>
                <div class="home2-slide-pages">

                </div>
            </div>
        </div>
        <div class="home2-slider-prev swiper-button-prev"><i class="ti-angle-left"></i></div>
        <div class="home2-slider-next swiper-button-next"><i class="ti-angle-right"></i></div>
    </div>
    <!-- Slider main container End -->


    <div class="section section-padding ">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="text-left">
                        {{-- <h2 class="beautiful-title">Aysel Home</h2> --}}
                        <h5 class="sub-title" style="color: #F8796C;">Beauty Services At Home</h5>
                        <p class="" style="color: black; font-size: 25px; font-weight: 20;">
                            No more worries about work taking you away from yourself, or missing appointments due to time constraints and traffic congestion. At Aysel, we've provided the perfect solution. We bring the finest beauty experts to your doorstep, catering to all your beauty needs.
                        </p>
                        <p class="" style="color: black; font-size: 25px; font-weight: 20;">
                            Be confident that we hold the keys to beauty, committed to providing you with the comfort, relaxation, and comprehensive care you truly deserve. Every detail attended to, allowing you to captivate hearts with your exquisite and delicate elegance, as if you're a princess stepping out of fairytales.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 mx-auto text-center">
                    <img src="assets1/images/t1-3Ld6CXjwV-transformed.jpeg" alt="" style="width: 100%; height: 450px;margin-top:50px">
                </div>
            </div>
        </div>
    </div>

      <!-- About us Section Start -->


<!-- Purecounter Section Start -->





    <!-- About us Section End -->

     <!-- Category Banner Section Start -->
     <div class="section section-padding pt-0">
        <div class="container">
            <div class="row row-cols-lg-4 row-cols-sm-2 row-cols-1 learts-mb-n40">

                @foreach($services as $service)
                <div class="col learts-mb-40">
                    <div class="category-banner4">
                        {{-- <a href="/shop?ServiceId={{ $service->id }}" class="inner"> --}}
                            <a href="{{ route('shop.index', ['id' => $service->id]) }}" class="inner">


                            <div class="image">
                                <img src="{{ asset($service->image) }}" alt="{{ $service->name }}" style="width: 300px; height: 300px;">

                            </div>
                            <div class="content" data-bg-color="#f4ede7">
                                <h3 class="title"><b>{{ $service->name }}</b></h3>
                            </div>
                        </a>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>

    <!-- Category Banner Section End -->

    <!-- Separator -->
    <div class="section">
        <div class="container">
            <hr class="m-0">
        </div>
    </div>
    <!-- Separator -->

    <!-- Product Section Start -->
    <div class="section section-padding">
        <div class="container">

            <!-- Product Tab Start -->
            <div class="row">
                <div class="col-12">
                    <ul class="title" style="text-align: center;">
                        <h1 class="title" style="margin-bottom: 50px; color: #F8796C;">The Best Beauty Experts</h1>
                    </ul>
                    <div class="prodyct-tab-content1 tab-content">
                        <div class="tab-pane fade show active" id="tab-new-sale">
                            <!-- Products Start -->
                            <div class="products row row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-1">
                                @foreach($experts as $expert)
                                    <div class="col">
                                        <div class="product">
                                            <div class="product-thumb">
                                                <a href="{{ route('shop.index', ['id' => $service->id]) }}" class="image">

                                                    <img src="{{ asset($expert->image1) }}" alt="Beauty Expert Image" style="height: 370px;">
                                                </a>

                                            </div>
                                            <div class="product-info">
                                                <h6 class="title">
                                                    <a href="">{{ $expert->name }}</a>
                                                </h6>
                                                <!-- Other expert details like description, etc. -->
                                            </div>

                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                            <!-- Products End -->
                        </div>
                    </div>
                </div>
            </div>

    <!-- Product Section End -->

    <!-- Separator -->
    <div class="section">
        <div class="container">
            <hr class="m-0">
        </div>
    </div>


    <div class="section section-padding">
        <div class="col learts-mb-40">
            <!-- Section Title Start -->
            <div class="section-title2 text-md-left text-center row justify-content-between align-items-center">


                <h1 class="title" style="

             color: #F8796C;">Frequently Asked Questions</h1>

        </div>
        <div class="container">



                    <!-- Section Title End -->
                    <div class="row">
                        <div class="col">
                            <div class="accordion" id="faq-accordion">
                                <div class="card active">
                                    <div class="card-header">
                                        <button class="btn btn-link" data-bs-toggle="collapse" data-bs-target="#faq-accordion-1">Does HOME SALON offer all kinds of Beauty Salon services?</button>
                                    </div>

                                    <div id="faq-accordion-1" class="collapse show" data-bs-parent="#faq-accordion">
                                        <div class="card-body">
                                            <p>Yes, we provide a comprehensive range of Beauty Salon services to cater to all your needs.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <button class="btn btn-link collapsed" data-bs-toggle="collapse" data-bs-target="#faq-accordion-2">How can I book salon at home?</button>
                                    </div>

                                    <div id="faq-accordion-2" class="collapse" data-bs-parent="#faq-accordion">
                                        <div class="card-body">
                                            <p>Booking a salon at home is easy. You can schedule your appointment through our website or mobile app.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <button class="btn btn-link collapsed" data-bs-toggle="collapse" data-bs-target="#faq-accordion-3"> What kind of various beauty services are available at women beauty salon?</button>
                                    </div>

                                    <div id="faq-accordion-3" class="collapse" data-bs-parent="#faq-accordion">
                                        <div class="card-body">
                                            <p> We offer a wide array of beauty services, including makeup, hair styling, skincare, and more, tailored to enhance your beauty.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <button class="btn btn-link collapsed" data-bs-toggle="collapse" data-bs-target="#faq-accordion-4">Does Home Salon provide Beauty Experts at home for makeup?</button>
                                    </div>

                                    <div id="faq-accordion-4" class="collapse" data-bs-parent="#faq-accordion">
                                        <div class="card-body">
                                            <p>Yes, Home Salon offers the convenience of Beauty Experts who provide makeup services in the comfort of your own home.</p>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <button class="btn btn-link collapsed" data-bs-toggle="collapse" data-bs-target="#faq-accordion-3"> Can I get Manicure and Pedicure services from Beauty Experts at home through Home Salon?</button>
                                        </div>

                                        <div id="faq-accordion-3" class="collapse" data-bs-parent="#faq-accordion">
                                            <div class="card-body">
                                                <p> Absolutely, Home Salon offers expert Beauty Professionals who can perform Manicure and Pedicure services in your home.</p>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <button class="btn btn-link collapsed" data-bs-toggle="collapse" data-bs-target="#faq-accordion-4">Can I avail Henna services from Beauty Experts at home through Home Salon?</button>
                                            </div>

                                            <div id="faq-accordion-4" class="collapse" data-bs-parent="#faq-accordion">
                                                <div class="card-body">
                                                    <p>Yes, Home Salon's Beauty Experts are skilled in providing Henna services in the comfort of your own home.</p>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div></div></div>

    <!-- Separator -->
    <div class="section">
        <div class="container">
            <hr class="m-0">
        </div>
    </div>
    <!-- Separator -->

    <!-- Testimonial Section Start -->
    <div class="section section-padding">
        <div class="container">

            <div class="section-title2 row justify-content-center align-items-center">
                <div class="col-md-auto col-12">
                    <!-- Section Title Start -->
                    <h1 class="title " style="
                    color: #F8796C;text-align: center;">We love our clients</h1>
                    <!-- Section Title End -->
                </div>
                <!-- <div class="col-md-auto col-12 mt-4 mt-md-0">
                    <a href="#" class="btn btn-light btn-hover-black">view all</a>
                </div> -->
            </div>

            <div class="testimonial-carousel">
                <div class="col">
                    <div class="testimonial">
                        <p>I recently discovered the AYSEL and I can't express how delighted I am with their services. This platform has truly transformed my beauty routine. </p>
                        <div class="author">
                            <img src="assets1/images/testimonial-1.jpg" alt="">
                            <div class="content">
                                <h6 class="name">Anais Coulon</h6>
                                <span class="title">Actor</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="testimonial">
                        <p>Booking an appointment through their website was a breeze. The interface is user-friendly, and I could easily choose from a range of services they offer and more. </p>
                        <div class="author">
                            <img src="assets1/images/testimonial-2.jpg" alt="">
                            <div class="content">
                                <h6 class="name">Ian Schneider</h6>
                                <span class="title">Actor</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="testimonial">
                        <p>I was also impressed with the safety measures taken by the Beauty Expert, considering the current situation. She followed all the necessary protocols to ensure a safe </p>
                        <div class="author">
                            <img src="assets1/images/testimonial-3.jpg" alt="">
                            <div class="content">
                                <h6 class="name">Florence Polla</h6>
                                <span class="title">Customer</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="testimonial">
                        <p>The Aysel has truly redefined how I experience beauty services. Their commitment to excellence, professionalism, and the convenience of at-home services make them stand out.</p>
                        <div class="author">
                            <img src="assets1/images/teacher-4.png" alt="">
                            <div class="content">
                                <h6 class="name">Sally Ramsey</h6>
                                <span class="title">Reporter</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Testimonial Section End -->

    <!-- Gallery Section Start -->
    <div class="section section-padding">
        <div class="container">
            <!-- Section Title Start -->
            <div class="section-title2 text-center">
                <h1 class="title " style="
                color: #F8796C;text-align: center;">Gallery</h1>
                <!-- Section Title End -->

            </div>
            <!-- Section Title End -->

            <div class="product-carousel">
                <div class="col">
                    <div class="product">
                        <div class="product-thumb">


                                <img src="assets1/images/g3.png" alt="Product Image" style="height: 360px;width: 270px;">



                        </div>

                    </div>
                </div>

                <div class="col">
                    <div class="product">
                        <div class="product-thumb">

                                <img src="assets1/images/d4.jfif" alt="Product Image" style="height: 360px;width: 270px;">



                        </div>

                    </div>
                </div>
                <div class="col">
                    <div class="product">
                        <div class="product-thumb">


                                <img src="assets1/images/d5.jfif" alt="Product Image" style="height: 360px;width: 270px;">



                        </div>

                    </div>
                </div>
                <div class="col">
                    <div class="product">
                        <div class="product-thumb">


                                <img src="assets1/images/g1.jfif" alt="Product Image" style="height: 360px;width: 270px;">



                        </div>

                    </div>
                </div>
                <div class="col">
                    <div class="product">
                        <div class="product-thumb">


                                <img src="assets1/images/g2.jfif" alt="Product Image" style="height: 360px;width: 270px;">



                        </div>

                    </div>
                </div>
                <div class="col">
                    <div class="product">
                        <div class="product-thumb">


                                <img src="assets1/images/d2.jfif" alt="Product Image" style="height: 360px;width: 270px;">



                        </div>

                    </div>
                </div>

            </div>

        </div>
    </div>

    @endsection





    <!-- JS
============================================ -->

    <!-- Vendors JS -->


