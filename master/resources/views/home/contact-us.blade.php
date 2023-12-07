
@extends('pageslayout.master')
    <!-- Header Section Start -->
    @section('content')
    <!-- OffCanvas Search End -->
    <!-- OffCanvas Search End -->

    <div class="offcanvas-overlay"></div>

    <!-- Page Title/Header Start -->
    <div class="page-title-section section"data-bg-image="{{ asset('assets1/images/m2.jpg') }}" style="height: 500px;" >
        <div class="container">
            <div class="row">
                <div class="col">

                    <div class="page-title">
                        <h1 class="title">Contact us</h1>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item" style="font-size: 25px;color: black;"><a href="index-2.html">Home</a></li>
                            <li class="breadcrumb-item active" style="font-size: 25px;color: black;">Contact us</li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Page Title/Header End -->

    <!-- Contact Information & Map Section Start -->
    <div class="section section-padding">
        <div class="container">
            <!-- Section Title Start -->
            <div class="section-title2 text-center">
                <h2 class="title" style="color: #F8796C; margin-bottom: 35px;">Keep in touch with us</h2>
                <p>Stay Connected with Us! Have questions or need assistance? Feel free to reach out to our team. We're here to ensure your beauty experience with our expert professionals at home is exceptional. Drop us a message, and we'll get back to you promptly!</p>
            </div>
            <!-- Section Title End -->

            <!-- Contact Information Start -->
            <div class="row learts-mb-n30">
                <!-- <div class="col-lg-4 col-md-6 col-12 learts-mb-30">
                    <div class="contact-info">
                        <h4 class="title">ADDRESS</h4>
                        <span class="info"><i class="icon fas fa-map-marker-alt"></i> 1800 Abbot Kinney Blvd. Unit D & E Venice</span>
                    </div>
                </div> -->
                <div class="col-lg-12 col-md-6 col-12 learts-mb-30">
                    <div class="contact-info" >
                        <h4 class="title" style="align-items: center;">CONTACT</h4>
                        {{-- <span class="info"><i class="icon fas fa-phone-alt"></i> Mobile: (+88) – 1990 – 6886 <br> Hotline: 1800 – 1102</span> --}}
                        <span class="info"><i class="icon far fa-envelope"></i> Mail: <a href="#">contact@leartsstore.com</a></span>
                    </div>
                </div>

            </div>
            <!-- Contact Information End -->

            <!-- Contact Map Start -->
            <!-- <div class="row learts-mt-60">
                <div class="col">
                    <iframe class="contact-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2136.986005919501!2d-73.9685579655238!3d40.75862446708152!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c258e4a1c884e5%3A0x24fe1071086b36d5!2sThe%20Atrium!5e0!3m2!1sen!2sbd!4v1585132512970!5m2!1sen!2sbd" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div> -->
            <!-- Contact Map End -->

        </div>
    </div>
    <!-- Contact Information & Map Section End -->

    <!-- Contact Form Section Start -->
    <div class="section section-padding pt-0">
        <div class="container">
            <!-- Section Title Start -->
            <div class="section-title2 text-center">
                <h2 class="title">Send a message</h2>
            </div>
            <!-- Section Title End -->

            <div class="row">
                <div class="col-lg-8 col-12 mx-auto">
                    <div class="contact-form">
                        <form action="{{ route('contactus.store') }}" id="contact-form" method="POST">
                            @csrf
                            <div class="row learts-mb-n30">
                                <div class="col-md-6 col-12 learts-mb-30"><input type="text" placeholder="Your Name *" name="name"></div>
                                <div class="col-md-6 col-12 learts-mb-30"><input type="email" placeholder="Email *" name="email"></div>
                                <div class="col-12 learts-mb-30"><textarea name="message" placeholder="Message"></textarea></div>
                                <div class="col-12 text-center learts-mb-30"><button class="btn btn-dark btn-outline-hover-dark" type="submit">Submit</button></div>
                            </div>
                        </form>
                        {{-- <p class="form-messege"></p> --}}
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Contact Form Section End -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
        @if(session('success'))
            Swal.fire({
                icon: 'success',
                title: 'Success',
                text: '{{ session('success') }}',
                showConfirmButton: false,
                timer: 3000
            });
        @elseif(session('error'))
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: '{{ session('error') }}',
                showConfirmButton: false,
                timer: 3000
            });
        @endif
    </script>
    @endsection
