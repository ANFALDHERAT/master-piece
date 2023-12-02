
@extends('pageslayout.master')
    <!-- Header Section Start -->
    @section('content')



    <div class="offcanvas-overlay"></div>

    <!-- Page Title/Header Start -->
    <div class="page-title-section section"data-bg-image="{{ asset('assets1/images/m2.jpg') }}" style="height: 500px;" >
        <div class="container">
            <div class="row">
                <div class="col">

                    <div class="page-title">
                        <h1 class="title">Laserexperts</h1>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"  style="font-size: 25px;color: black;"><a href="/">Home</a></li>
                            <li class="breadcrumb-item"  style="font-size: 25px;color: black;"><a href="#">Laserexperts</a></li>

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
                <div class="col-lg-5 col-12 learts-mb-40">

                        <!-- <span class="product-badges">
                            <span class="hot">hot</span>
                        </span> -->


                            <img src="{{ url('/assets1/images/' . $laser->image) }}" alt="" style="height:400px;width: 400px;">
                </div>









                <div class="col-lg-5 col-6 learts-mb-40">

                                    <div class="sticky-sidebar-inner">
                                        <h3 class="product-title">{{ $laser->name }}</h3>
                                        <div class="product-ratings"  style="color: #F8796C;">
                                            <span class="stars">
                                                @for ($i = 1; $i <= $laser->average_rating; $i++)
                                                    &#9733;
                                                @endfor
                                            </span>


                                        </div>

                                        <!-- <div class="product-price">£100.00</div> -->




                                        <div class="product-description">
                                            <main class="expert-profile">
                                                <div class="expert-details">


                                                    <p>Address: {{  $laser->service_area}}</p>

                                                    <p> {{  $laser->description}}</p>





                                                </div>


                                                <!-- <p style="margin-bottom: 30px;">Welcome to the world of beauty and pampering brought to you by Hadeel Yousf, a renowned beauty expert specializing in manicure and pedicure services. With a passion for creativity and an eye for detail, Hadeel brings an unparalleled level of care and artistry to every nail session.</p> -->
                                            </main>
                    </div>

                                    </div>
                </div>

                </main>
                </div></div></div></div>
    @endsection
