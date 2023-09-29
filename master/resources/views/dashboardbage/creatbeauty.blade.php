@extends('dashlayouts.master')

@section('css')
<link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,500;1,600;1,700;1,800;1,900&display=swap">

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap">


    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/font-awesome.css') }}">

    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/flag-icon.css') }}">

    <!-- Liner icon -->
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">

    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendors/bootstrap.css') }}">

    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
@endsection

@section('content')
<br><br><br><br><br><br><br><br><br>
<div class="card" style="margin: 20px">
    <div class="card-header">
        Add new Beaty Expert
    </div>
    <div class="card-body">
      <form action="{{ url('/BeautyExpert') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <label>Name</label><br>
        <input type="text" name="name" id="name" class="form-control"><br>

        <span>@error('name'){{$message}} @enderror</span><br><br>

        <label>Email</label><br>
        <input type="email" name="email" id="email" class="form-control">
        <span>@error('email'){{$message}} @enderror</span><br><br>

        <label>address</label><br>
        <input type="text" name="address" id="address" class="form-control">
        <span>@error('address'){{$message}} @enderror</span><br><br>

        <label>phone</label><br>
        <input type="tel" name="phone" id="phone" class="form-control">
        <span>@error('phone'){{$message}} @enderror</span><br><br>

        <label>password</label><br>
        <input type="password" name="password" id="password" class="form-control">
        <span>@error('password'){{$message}} @enderror</span><br><br>

        <label>availability</label><br>
        <input type="text" name="availability" id="availability" class="form-control">
        <span>@error('availability'){{$message}} @enderror</span><br><br>

        <label>service_area</label><br>
        <input type="text" name="service_area" id="service_area" class="form-control">
        <span>@error('service_area'){{$message}} @enderror</span><br><br>

        <label>services_offered</label><br>
        <input type="text" name="services_offered" id="services_offered" class="form-control">
        <span>@error('services_offered'){{$message}} @enderror</span><br><br>

        <label>description</label><br>
        <input type="text" name="description" id="description" class="form-control">
        <span>@error('description'){{$message}} @enderror</span><br><br>

        <label>average_rating</label><br>
        <input type="number" name="average_rating" id="average_rating" class="form-control">
        <span>@error('average_rating'){{$message}} @enderror</span><br><br>


        <label for="image1">Upload Image 1:</label>
        <input type="file" id="image1" name="image1" accept="image/*" ><br>
        <span>@error('image1'){{$message}} @enderror</span><br><br>

        <label for="image2">Upload Image 2:</label>
        <input type="file" id="image2" name="image2" accept="image/*" ><br>
        <span>@error('image2'){{$message}} @enderror</span><br><br>

        <label for="image3">Upload Image 3:</label>
        <input type="file" id="image3" name="image3" accept="image/*" ><br>
        <span>@error('image3'){{$message}} @enderror</span><br><br>

        <label for="image4">Upload Image 4:</label>
        <input type="file" id="image4" name="image4" accept="image/*" ><br>
        <span>@error('image4'){{$message}} @enderror</span><br><br>

        <label for="image5">Upload Image 5:</label>
        <input type="file" id="image5" name="image5" accept="image/*" ><br>
        <span>@error('image5'){{$message}} @enderror</span><br><br>
        <input type="submit" value="Save" class="btn " style="background-color: #F8796C"><br>
      </form>

    </div>
</div>
@endsection
