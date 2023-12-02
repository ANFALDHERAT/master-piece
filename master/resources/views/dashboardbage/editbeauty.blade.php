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

<div class="card" style="margin-left: 280px">
    <div class="card-header">
      Edit Beauty Expert
    </div>
    <div class="card-body">
        <form action="{{ url('BeautyExpert/' .$data->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method("PATCH")
            <input type="hidden" name="id" value="{{ $data->id }}" id="id">
            <label>Name</label><br>
            <input type="text" name="name" value="{{ $data->name}}" id="name" class="form-control"><br>
            <span>@error('name'){{$message}} @enderror</span><br><br>

            <label>Email</label><br>
            <input type="email" name="email" value="{{ $data->email}}"   id="email" class="form-control"><br>
            <span>@error('email'){{$message}} @enderror</span><br><br>

            <label>password</label><br>
            <input type="password" name="password" value="{{ $data->password}}"   id="password" class="form-control"><br>
            <span>@error('password'){{$message}} @enderror</span><br><br>


            <label>Address</label><br>
            <input type="text" name="address" value="{{ $data->address}}"   id="address" class="form-control"><br>
            <span>@error('address'){{$message}} @enderror</span><br><br>

            <label>Phone</label><br>
            <input type="number" name="phone" value="{{ $data->phone}}"   id="phone" class="form-control"><br>
            <span>@error('phone'){{$message}} @enderror</span><br><br>




            <label>working_hours</label><br>
            <input type="text" name="working_hours" value="{{ $data->working_hours}}"   id="working_hours" class="form-control"><br>
            <span>@error('working_hours'){{$message}} @enderror</span><br><br>


            <label>availability</label><br>
            <input type="text" name="availability" value="{{ $data->availability}}"   id="availability" class="form-control"><br>
            <span>@error('availability'){{$message}} @enderror</span><br><br>


            {{-- <label>Select Service</label><br>
        <select name="service_id" id="service_id" class="form-control">
            @foreach ($services as $service)
                <option value="{{ $service->id }}">{{ $service->name }}</option>
            @endforeach
        </select><br> --}}


            <label>service_area</label><br>
            <input type="text" name="service_area" value="{{ $data->service_area}}"   id="service_area" class="form-control"><br>
            <span>@error('service_area'){{$message}} @enderror</span><br><br>

            <label>services_offered</label><br>
            <input type="text" name="services_offered" value="{{ $data->services_offered}}"   id="services_offered" class="form-control"><br>
            <span>@error('services_offered'){{$message}} @enderror</span><br><br>

            <label>description</label><br>
            <input type="text" name="description" value="{{ $data->description}}"   id="description" class="form-control"><br>
            <span>@error('description'){{$message}} @enderror</span><br><br>



            <label>average_rating</label><br>
            <input type="text" name="average_rating" value="{{ $data->average_rating}}"   id="average_rating" class="form-control"><br>
            <span>@error('average_rating'){{$message}} @enderror</span><br><br>

            <label>price</label><br>
            <input type="number" name="price" value="{{ $data->price}}"   id="price" class="form-control"><br>
            <span>@error('price'){{$message}} @enderror</span><br><br>

            <label>expertise</label><br>
            <input type="text" name="expertise" value="{{ $data->expertise}}"   id="expertise" class="form-control"><br>
            <span>@error('expertise'){{$message}} @enderror</span><br><br>


            @if ($data->image1)
            <img src="{{ asset('assets/img/' . $data->image1) }}" alt="Existing Image" width="100" height="100"><br>
            @endif
        <!-- Allow uploading a new image -->
            <input type="file" name="image1" id="image" accept="image/*" class="form-control"><br>
            <span>@error('image1'){{$message}} @enderror</span><br><br>

            @if ($data->image2)
            <img src="{{ asset('assets/img/' . $data->image2) }}" alt="Existing Image" width="100" height="100"><br>
            @endif
        <!-- Allow uploading a new image -->
            <input type="file" name="image2" id="image2" accept="image/*" class="form-control"><br>
            <span>@error('image2'){{$message}} @enderror</span><br><br>

            @if ($data->image3)
            <img src="{{ asset('assets/img/' . $data->image3) }}" alt="Existing Image" width="100" height="100"><br>
            @endif
        <!-- Allow uploading a new image -->
            <input type="file" name="image3" id="image3" accept="image/*" class="form-control"><br>
            <span>@error('image3'){{$message}} @enderror</span><br><br>

            @if ($data->image4)
            <img src="{{ asset('assets/img/' . $data->image4) }}" alt="Existing Image" width="100" height="100"><br>
            @endif
        <!-- Allow uploading a new image -->
            <input type="file" name="image4" id="image4" accept="image/*" class="form-control"><br>
            <span>@error('image4'){{$message}} @enderror</span><br><br>

            @if ($data->image5)
            <img src="{{ asset('assets/img/' . $data->image5) }}" alt="Existing Image" width="100" height="100"><br>
            @endif
        <!-- Allow uploading a new image -->
            <input type="file" name="image5" id="image5" accept="image/*" class="form-control"><br>
            <span>@error('image5'){{$message}} @enderror</span><br><br>


            <input type="submit" value="Update" class="btn btn-success"><br>
        </form>
    </div>


@endsection
