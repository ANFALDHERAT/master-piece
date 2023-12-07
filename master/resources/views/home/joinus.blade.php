
@extends('pageslayout.master')
    <!-- Header Section Start -->
    @section('content')
    <!-- OffCanvas Search End -->


    <div class="offcanvas-overlay">


    </div>

    <!-- Page Title/Header Start -->
    <div class="page-title-section section"data-bg-image="{{ asset('assets1/images/m2.jpg') }}" style="height: 500px;" >
        <div class="container">
            <div class="row">
                <div class="col">

                    <div class="page-title">
                        <h1 class="title">Join Us</h1>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"  style="font-size: 25px;color: black;"><a href="/">Home</a></li>
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

                        <label for="name">Name<span style="color: red">*</span>:</label>
                        <input type="text" id="name" name="name" required>
                        @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror


                        <label for="email">Email<span style="color: red">*</span>:</label>
                        <input type="email" id="email" name="email" required>
@error('email')
        <span class="text-danger">{{ $message }}</span>
    @enderror
                        <label for="password">Password<span style="color: red">*</span>:</label>
                        <input type="password" id="password" name="password" required>
                        @error('password')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror


                        <label for="phone">Phone<span style="color: red">*</span>:</label>
                        <input type="text" id="phone" name="phone" required>
                        @error('phone')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror


                        <label for="location">Location<span style="color: red">*</span>:</label>
                        <input type="text" id="location" name="location" required>
                        @error('location')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror

                        <label for="years_of_experience">Years of Experience<span style="color: red">*</span>:</label>
                        <input type="text" id="years_of_experience" name="years_of_experience" required>
                        @error('years_of_experience')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror

                        <label for="age">Age<span style="color: red">*</span>:</label>
                        <input type="text" id="age" name="age" required>
                        @error('age')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror


                        <label for="availability">Availability<span style="color: red">*</span>:</label>
                        <input type="text" id="availability" name="availability" required>
                        @error('availability')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                        <label for="working_hours">Working Hours<span style="color: red">*</span>:</label>
                        <input type="text" id="working_hours" name="working_hours" required>
                        @error('working_hours')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror


                        <label for="price">Price<span style="color: red">*</span>:</label>
                        <input type="number" id="price" name="price" required>
                        @error('price')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror

                        <label for="service_id">Specialty<span style="color: red">*</span>:</label>
                        <select id="service_id" name="service_id" required>
                            <option value="1">Makeup Artist</option>
                            <option value="2">Manicure and Pedicure Specialist</option>
                            <option value="3">Bridal Makeup Artist</option>
                            <option value="4">Henna Artist</option>
                        </select>

                        <label for="description">Description<span style="color: red">*</span>:</label>
                        <textarea id="description" name="description" rows="4" required></textarea>
                        @error('description')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror


                        <label for="cv">Upload Certificate<span style="color: red">*</span>:</label>
                        <input type="file" id="cv" name="cv" accept=".pdf" required>
                        @error('cv')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror

                        <label for="image">Upload Image<span style="color: red">*</span>:</label>

                        <input type="file" id="image" name="image" accept=".jpg, .jpeg, .png" required>
                        @error('image')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror

                        <button class="btn btn-dark btn-outline-hover-dark learts-mb-10" type="submit">Submit</button>
                    </form>

                </div>
            </section>
    </div>
    </div>
    <!-- Feature Brands Section End -->

    <!-- Brand Carousel Section Start -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <!-- Your HTML form -->
    <!-- ... your form ... -->

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
    <!-- Brand Carousel Section End -->
    @endsection
