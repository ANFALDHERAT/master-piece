
@extends('pageslayout.master')
    <!-- Header Section Start -->
    @section('content')
    <style>
        /* Define the style for rated stars */
        .rated {
            color: gold; /* Change this to your desired color */
        }
    </style>

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

    <div class="section section-padding border-bottom">
        <div class="container">
            <div class=" row learts-mb-n40">


                <div class="col-lg-3 col-12 learts-mb-40">





                            <img src="{{ $expert->image1 }}" alt="Expert Image" style="height:400px;width: 400px;">
                </div>









                <div class="col-lg-4 col-6 learts-mb-40">
                    <form action="{{ auth()->check() ? route('saveBooking') : route('login', ['url' => session('url.intended')]) }}" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{ $expert->id }}">
                        @if (!auth()->check())
                        @php
        session(['url.intended' => url()->current()]);

                        @endphp
                    @endif

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

                                                    <p>Address: {{  $expert->address}}</p>
                                                    <p> {{  $expert->description}}</p>

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

                          <!-- Include the CSRF token for security -->

                            <table style="margin-bottom: 10px;">
                                <tbody>
                                    <tr>

                                        <td>
                                            <label for="manicure">{{ $expert->service->name }}</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label for="quantity">Number Of Service </label>

                                        </td>
                                        <td>
                                            <div class="col-md-6 col-12 learts-mb-30">
                                                <div class="product-quantity" style="margin-bottom: 10px;">
                                                <span class="qty-btn minus"><i class="ti-minus"></i></span>
                                                <input type="text" name="quantity" placeholder="Quantity" required>
                                                <span class="qty-btn plus"><i class="ti-plus"></i></span>
                                            </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>

                                        <td>
                                            <label for="price">Price: {{ $expert->price }}</label>
                                        </td>

                                    </tr>

                                </tbody>
                            </table>
                            <br>
                            <label for="day">Select Day:</label>
                            <select style="width: 90%; height: 35px;" name="selected_day" id="selected_day">
                                @foreach($workingDays as $day)
                                    <option value="{{ $day }}" @if(in_array($day, $workingDays)) selected @endif>{{ $day }}</option>
                                @endforeach
                            </select>
<br>
                            <label for="time">Select Time:</label>
                            <select style="width: 90%; height: 35px;" name="selected_time" id="selected_time">
                                @foreach($workinghours as $time)
                                    <option value="{{ $time }}" @if(in_array($time, $workinghours)) selected @endif>{{ $time }}</option>
                                @endforeach
                            </select>


                            <script>
$(document).ready(function() {
    $('#selected_day').change(function() {
        const selectedDay = $(this).val();
        const timeDropdown = $('#selected_time');

        // Clear previous options
        timeDropdown.empty();

        // Make an AJAX request to fetch time slots based on the selected day
        $.ajax({
            url: '/get-timeslots/' + selectedDay, // Replace with your route
            type: 'GET',
            success: function(response) {
                // Iterate through the response data and add options to the time dropdown
                response.forEach(function(time) {
                    timeDropdown.append(`<option value="${time}">${time}</option>`);
                });
            },
            error: function(xhr, status, error) {
                console.error(error);
                // Handle error (e.g., display an error message)
            }
        });
    });
});
                            </script>

                            <input type="hidden" name="expert_service_name" value="{{ $expert->service->name }}">
                    <input type="hidden" name="expert_price" value="{{ $expert->price }}">
                    <input type="hidden" name="expert_id" value="{{ $expert->id }}">
                    <input type="hidden" name="nameExpert" value="{{ $expert->name }}">


                    <div class="product-buttons" style="margin-left: 40px;margin-top: 25px;">
                        @if(auth()->check()) <!-- Check if the user is authenticated -->
                            <button type="submit" class="btn btn-dark btn-outline-hover-dark" style="margin-left: 20%;">Book Now</button>
                        @else
                        <p style="margin: 10px 0; font-weight: bold;">
                            Please <a href="{{ route('login') }}" style="color: #F56565; text-decoration: underline;">log in</a> to book an appointment.
                        </p>
                        @endif
                    </div>
                        </form>

                    </div>
                </main>

                </div>

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
                            <a href="" class="image">

                                <img src={{ $expert->image2 }} alt="Product Image" style="height: 370px;">



                                <img class="image-hover " src={{ $expert->image2 }} alt="Product Image" style="height: 370px;">
                            </a>
                            {{-- <a href="wishlist.html" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i class="far fa-heart"></i></a> --}}
                        </div>
                        <div class="product-info">

                            </a></h6>

                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="product">
                        <div class="product-thumb">
                            <a href="" class="image">
                                <img src= {{ $expert->image3 }} alt="Product Image" style="height: 370px;">
                                <img class="image-hover " src= {{ $expert->image3 }} alt="Product Image" style="height: 370px;">
                            </a>
                            {{-- <a href="wishlist.html" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i class="far fa-heart"></i></a> --}}
                        </div>
                        <div class="product-info">

                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="product">
                        <div class="product-thumb">

                            <a href="#" class="image">
                                <img src= {{ $expert->image4 }} alt="Product Image" style="height: 370px;">
                                <img class="image-hover " src= {{ $expert->image4 }} alt="Product Image" style="height: 370px;">
                            </a>
                            {{-- <a href="wishlist.html" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i class="far fa-heart"></i></a> --}}
                        </div>
                        <div class="product-info">

                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="product">
                        <div class="product-thumb">
                            <a href="" class="image">

                                <img src={{ $expert->image5 }} alt="Product Image" style="height: 370px;">
                                <img class="image-hover " src= {{ $expert->image5 }} alt="Product Image" style="height: 370px;">
                            </a>
                            {{-- <a href="wishlist.html" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i class="far fa-heart"></i></a> --}}
                        </div>
                        <div class="product-info">

                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="product">
                        <div class="product-thumb">
                            <a href="" class="image">
                                <img src= {{ $expert->image1 }} alt="Product Image"  style="height: 370px;">

                                <img class="image-hover " src={{ $expert->image1 }} alt="Product Image"  style="height: 370px;">
                            </a>
                            {{-- <a href="wishlist.html" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i class="far fa-heart"></i></a> --}}

                        </div>
                        <div class="product-info">

                        </div>
                    </div>
                </div>


                    </div>
                </div>

            </div>


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
                            <p>{{  $expert->description}}</p>

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
                        <span class="title">reviews </span>
                        <ul class="product-review-list">
                            @foreach ($expert->reviews as $review)
                            <li>
                                <div class="product-review">
                                    <div class="thumb"><img src="assets/images/default_profile_image.jpg" alt=""></div>
                                    <div class="content">
                                        <div class="ratings">
                                            <span class="star-rating">
                                                <span class="rating-active" style="width: {{ $review->rating * 20 }}%;">ratings</span>
                                            </span>
                                        </div>
                                        <div class="meta">
                                            <h5 class="title">{{ $review->user->name }}</h5>
                                            <span class="date">{{ $review->created_at->format('F j, Y') }}</span>
                                        </div>
                                        <p>{{ $review->comment }}</p>
                                    </div>
                                </div>
                            </li>
                        @endforeach


                        </ul>
                        <span class="title">Add a review</span>
                        <div class="review-form">
                            <p class="note">Your email address will not be published. Required fields are marked *</p>
                            <form action="{{ route('expert.submitReview') }}" method="POST">
                                @csrf
                                <input type="hidden" name="expert_id" value="{{ $expert->id }}">
                                <div class="row learts-mb-n30">
                                    <!-- Add your existing form fields here -->

                                    <!-- Add the new review form fields -->
                                    <div class="col-md-6 col-12 learts-mb-30"><input type="text" name="name" placeholder="Name *" required></div>
                                    <div class="col-md-6 col-12 learts-mb-30"><input type="email" name="email" placeholder="Email *" required></div>
                                    <div class="col-12 learts-mb-10">
                                        <div class="rating" id="Stars">
                                            <span class="starr" data-rating="1">★</span>
                                            <span class="starr" data-rating="2">★</span>
                                            <span class="starr" data-rating="3">★</span>
                                            <span class="starr" data-rating="4">★</span>
                                            <span class="starr" data-rating="5">★</span>
                                        </div>
                                        <input type="hidden" name="rating" id="ratingInput" value="1">
                                        </div>

                                    <div class="col-12 learts-mb-30"><textarea name="comment" id="comment" placeholder="Your Review *" rows="4" required></textarea></div>
                                    <div class="col-12 text-center learts-mb-30"><button class="btn btn-dark btn-outline-hover-dark" type="submit">Submit</button></div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div></div>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            // Add click event to stars for rating selection
            $('.starr').on('click', function() {
                const rating = $(this).attr('data-rating'); // Get the selected rating
                $('#ratingInput').val(rating); // Set the hidden input field value to the selected rating

                // Remove color from all stars
                $('.starr').removeClass('rated');

                // Apply color to the selected stars and stars before it
                $(this).prevAll().addBack().addClass('rated');
            });
        });
    </script>
@endsection

