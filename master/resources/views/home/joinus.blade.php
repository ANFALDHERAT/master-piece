
@extends('pageslayout.master')
    <!-- Header Section Start -->
    @section('content')
    <!-- OffCanvas Search End -->

    <div class="offcanvas-overlay"></div>

    <!-- Page Title/Header Start -->
    <div class="page-title-section section"data-bg-image="{{ asset('assets1/images/m2.jpg') }}" style="height: 500px;" >
        <div class="container">
            <div class="row">
                <div class="col">

                    <div class="page-title">
                        <h1 class="title">Join Us</h1>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"  style="font-size: 25px;color: black;"><a href="index-2.html">Home</a></li>
                            <li class="breadcrumb-item"  style="font-size: 25px;color: black;"><a href="#">join our team</a></li>

                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Page Title/Header End -->

    <!-- Feature Brands Section Start -->
    <div class="section section-padding">
        <div class="container">
            <!-- Section Title Start -->
            <section class="join-team-section">
                <div class="container">
                    <h1>Join Our Team</h1>
                    <p>We are looking for passionate and skilled beauty experts to join our team.</p>
                    <p>If you specialize in any of the following areas, we'd love to hear from you:</p>
                    <!-- <ul>
                        <li>Makeup Artist</li>
                        <li>Manicure and Pedicure Specialist</li>
                        <li>Bridal Makeup Artist</li>
                        <li>Henna Artist</li>
                    </ul>
                    <p>Join us in bringing beauty and elegance to homes everywhere.</p> -->

                    <form action="{{ route('join-us.submit') }}" method="post" class="join-form" enctype="multipart/form-data">
                        @csrf

                        <label for="name">Name:</label>
                        <input type="text" id="name" name="name" required>

                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" required>

                        <label for="phone">Phone:</label>
                        <input type="text" id="phone" name="phone" required>


                        <label for="location">Location:</label>
                        <input type="text" id="location" name="location" required>


                        <label for="years_of_experience">Years of experience:</label>
                        <input type="text" id="years_of_experience" name="years_of_experience" required>


                        <label for="age">Age</label>
                        <input type="text" id="age" name="age" required>

                        <label for="price">Price</label>
                        <input type="number" id="price" name="price" required>


                        <label for="specialty">Specialty:</label>
                        <select id="specialty" name="specialty" required>
                            <option value="Makeup Artist">Makeup Artist</option>
                            <option value="Manicure and Pedicure Specialist">Manicure and Pedicure Specialist</option>
                            <option value="Bridal Makeup Artist">Bridal Makeup Artist</option>
                            <option value="Henna Artist">Henna Artist</option>
                        </select>

                        <label for="description">Description:</label>
                        <textarea id="description" name="description" rows="4" required></textarea>

                        <label for="cv">Upload Certificate:</label>
                        <input type="file" id="cv" name="cv" accept=".pdf" required>

                        <label for="image">Upload Image:</label>
                        <input type="file" id="image" name="image" accept=".jpg, .jpeg, .png" required>

                        <button class="btn btn-dark btn-outline-hover-dark learts-mb-10">Submit</button>
                    </form>
                </div>
            </section>
    </div>
    </div>
    <!-- Feature Brands Section End -->

    <!-- Brand Carousel Section Start -->

    <!-- Brand Carousel Section End -->
    @endsection
