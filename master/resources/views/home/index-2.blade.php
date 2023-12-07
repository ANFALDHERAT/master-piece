
@extends('pageslayout.master')
    <!-- Header Section Start -->
    @section('content')
    <!-- OffCanvas Search End -->

    <div class="offcanvas-overlay"></div>

    <!-- Slider main container Start -->
    <div class="home2-slider swiper-container" style="height: 650px">
        <div class="swiper-wrapper">
            <div class="home2-slide-item swiper-slide" data-swiper-autoplay="3000" >
                <div class="home-slide-image" >
                    <img src="{{ asset('assets1/images/o1.jpg') }}" alt="Slide One Image" class="full-screen-image"  >

                    <div class="home2-slide1-product1">

                    </div>

                </div>
                <div class="home2-slide-content" style="background-color: #F8796C;padding: 30px;opacity:   0.7;" >
                    <h2 class="title" style="color: aliceblue;opacity: none;">AYSEL</h2>
                    <h3 class="title" style="color: aliceblue;">Home Beauty Experts</h3>
                    {{-- <div class="link" ><a href="shop.html" style="color: aliceblue;">shop </a></div> --}}
                </div>
                <div class="home2-slide-pages">

                </div>
            </div>
            <div class="home2-slide-item swiper-slide" data-swiper-autoplay="3000" >
                <div class="home-slide-image" >
                    <img src="{{ asset('assets1/images/o6.jpg')}}" alt="Slide One Image" class="full-screen-image" >


                </div>
                <div class="home2-slide-content" style="background-color: #F8796C;padding: 30px;opacity:   0.7;">
                    <h2 class="title" style="color: aliceblue;">AYSEL</h2>
                    <h3 class="title" style="color: aliceblue;">Home Beauty Experts</h3>
                    {{-- <div class="link" ><a href="shop.html" style="color: aliceblue;">shop </a></div> --}}
                </div>
                <div class="home2-slide-pages">

                </div>
            </div>
            <div class="home2-slide-item swiper-slide" data-swiper-autoplay="3000" >
                <div class="home-slide-image" >
                    <img src="{{ asset('assets1/images/o5.jpg')}}" alt="Slide One Image" class="full-screen-image" >




                </div>
                <div class="home2-slide-content" style="background-color: #F8796C;padding: 30px;opacity:   0.7;">
                    <h2 class="title" style="color: aliceblue;">AYSEL</h2>
                    <h3 class="title" style="color: aliceblue;">Home Beauty Experts</h3>
                    {{-- <div class="link" ><a href="shop.html" style="color: aliceblue;">shop </a></div> --}}
                </div>
                <div class="home2-slide-pages">

                </div>
            </div>
        </div>
        <div class="home2-slider-prev swiper-button-prev"><i class="ti-angle-left"></i></div>
        <div class="home2-slider-next swiper-button-next"><i class="ti-angle-right"></i></div>
    </div>
    <!-- Slider main container End -->

    <div class="section section-padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 text-center order-lg-2 order-md-2">
                    <img src="assets1/images/t1-3Ld6CXjwV-transformed.jpeg" alt="" style="width: 100%; height: 450px; margin-top: 50px;">
                </div>
                <div class="col-lg-6 col-md-6 order-lg-1 order-md-1">
                    <div class="text-left">
                        {{-- <h2 class="beautiful-title">Aysel Home</h2> --}}
                        <ul class="title" style="text-align: center;">
                            <h1 class="title" style="margin-bottom: 50px; color: #F8796C;">ABOUT AYSEL</h1>
                        </ul>
                        <p class="" style="color: black; font-size: 25px; font-weight: 20;">
                            No more worries about work taking you away from yourself, or missing appointments due to time constraints and traffic congestion. At Aysel, we've provided the perfect solution. We bring the finest beauty experts to your doorstep, catering to all your beauty needs.
                        </p>
                        <p class="" style="color: black; font-size: 25px; font-weight: 20;">
                            Be confident that we hold the keys to beauty, committed to providing you with the comfort, relaxation, and comprehensive care you truly deserve. Every detail attended to, allowing you to captivate hearts with your exquisite and delicate elegance, as if you're a princess stepping out of fairytales.
                        </p>
                    </div>
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
            <ul class="title" style="text-align: center;">
                <h1 class="title" style="margin-bottom: 50px; color: #F8796C;text-transform: uppercase;">Beauty Services</h1>
            </ul>
            <div class="row row-cols-lg-4 row-cols-sm-2 row-cols-1 learts-mb-n40">

                @foreach($services as $service)
                <div class="col learts-mb-40">
                    <div class="category-banner4">
                        {{-- <a href="/shop?ServiceId={{ $service->id }}" class="inner"> --}}
                            <a href="{{ route('shop.index', ['id' => $service->id]) }}" class="inner">


                            <div class="image">
                                <img src="{{ url('/assets1/images/' . $service->image) }}" alt="{{ $service->name }}" style="width: 300px; height: 300px;">

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
                        <h1 class="title" style="margin-bottom: 50px; color: #F8796C;text-transform: uppercase;">The Best Beauty Experts</h1>
                    </ul>
                    <div class="prodyct-tab-content1 tab-content">
                        <div class="tab-pane fade show active" id="tab-new-sale">
                            <!-- Products Start -->
                            <div class="products row row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-1">
                                @foreach($experts as $expert)
                                    <div class="col">
                                        <div class="product">
                                            <div class="product-thumb">
                                                <a href="{{ route('viewDetails.index', ['id' => $expert->id]) }}" class="image">

                                                    <img src="{{ url('/assets1/images/' . $expert->image1) }}" alt="Beauty Expert Image" style="height: 370px;">
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
                <h1 class="title" style="color: #F8796C;text-transform: uppercase;">Frequently Asked Questions</h1>
            </div>
            <div class="container">
                <!-- Section Title End -->
                <div class="row">
                    <div class="col">
                        <div class="accordion" id="faq-accordion">
                            <!-- Card 1 -->
                            <div class="card">
                                <div class="card-header">
                                    <button class="btn btn-link" data-bs-toggle="collapse" data-bs-target="#faq-accordion-1">Is it safe to get beauty services at home?</button>
                                </div>
                                <div id="faq-accordion-1" class="collapse show" data-bs-parent="#faq-accordion">
                                    <div class="card-body">
                                        <p>Yes, we prioritize safety measures during our services, ensuring a safe and hygienic experience at your home.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Card 2 -->
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

                            <!-- Card 3 -->
                            <div class="card">
                                <div class="card-header">
                                    <button class="btn btn-link collapsed" data-bs-toggle="collapse" data-bs-target="#faq-accordion-3"> Booking a salon at home is easy.</button>
                                </div>
                                <div id="faq-accordion-3" class="collapse" data-bs-parent="#faq-accordion">
                                    <div class="card-body">
                                        <p>Booking a salon at home is easy. You can schedule your appointment through our website or mobile app</p>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header">
                                    <button class="btn btn-link collapsed" data-bs-toggle="collapse" data-bs-target="#faq-accordion-5">Are your beauty experts certified?</button>
                                </div>
                                <div id="faq-accordion-5" class="collapse" data-bs-parent="#faq-accordion">
                                    <div class="card-body">
                                        <p>Yes, our beauty experts are certified professionals with expertise in various beauty services.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <button class="btn btn-link collapsed" data-bs-toggle="collapse" data-bs-target="#faq-accordion-5">Do you provide free consultations?</button>
                                </div>
                                <div id="faq-accordion-5" class="collapse" data-bs-parent="#faq-accordion">
                                    <div class="card-body">
                                        <p>Yes, we offer free consultations to discuss your beauty needs and preferences.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Additional Card 6 -->
                            <div class="card">
                                <div class="card-header">
                                    <button class="btn btn-link collapsed" data-bs-toggle="collapse" data-bs-target="#faq-accordion-6">Can I cancel or reschedule my appointment?</button>
                                </div>
                                <div id="faq-accordion-6" class="collapse" data-bs-parent="#faq-accordion">
                                    <div class="card-body">
                                        <p>Yes, you can easily cancel or reschedule your appointment through our website or app.</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
                    <h1 class="title" style="color: #F8796C; text-align: center;text-transform: uppercase;">We love our clients</h1>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="testimonial-carousel">
                @foreach($reviews as $review)
                <div class="col">
                    <div class="testimonial" style="background-color: #f5f5f5; padding: 20px; margin-bottom: 20px;width:350px;haight:500px">
                        <p>{{ $review->comment }}</p>
                        <div class="author">
                            @if($review->user)
                                <img src="{{ asset('assets1/images/Capture.PNG')}}" alt="{{ $review->user->name }}">
                                <div class="content">
                                    <h6 class="name">{{ $review->user->name }}</h6>
                                    <span class="title">{{ $review->user->title }}</span>
                                    <div class="rating">
                                        @for ($i = 1; $i <= 5; $i++)
                                            @if ($i <= $review->rating)
                                                <i class="fa fa-star gold-star"></i>
                                            @else
                                                <i class="fa fa-star-o gold-star"></i>
                                            @endif
                                        @endfor
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
                @endforeach
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
                color: #F8796C;text-align: center;">GALLERY</h1>
                <!-- Section Title End -->

            </div>
            <!-- Section Title End -->

            <div class="product-carousel">
                <div class="col">
                    <div class="product">
                        <div class="product-thumb">


                                <img src="{{ asset('assets1/images/g3.png')}}" alt="Product Image" style="height: 360px;width: 270px;">



                        </div>

                    </div>
                </div>

                <div class="col">
                    <div class="product">
                        <div class="product-thumb">

                                <img src="{{ asset('assets1/images/d4.jfif')}}" alt="Product Image" style="height: 360px;width: 270px;">



                        </div>

                    </div>
                </div>
                <div class="col">
                    <div class="product">
                        <div class="product-thumb">


                                <img src="{{ asset('assets1/images/d5.jfif')}}" alt="Product Image" style="height: 360px;width: 270px;">



                        </div>

                    </div>
                </div>
                <div class="col">
                    <div class="product">
                        <div class="product-thumb">


                                <img src="{{ asset('assets1/images/g1.jfif')}}" alt="Product Image" style="height: 360px;width: 270px;">



                        </div>

                    </div>
                </div>
                <div class="col">
                    <div class="product">
                        <div class="product-thumb">


                                <img src="{{ asset('assets1/images/g2.jfif')}}" alt="Product Image" style="height: 360px;width: 270px;">



                        </div>

                    </div>
                </div>
                <div class="col">
                    <div class="product">
                        <div class="product-thumb">


                                <img src="{{ asset('assets1/images/d2.jfif')}}" alt="Product Image" style="height: 360px;width: 270px;">



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


