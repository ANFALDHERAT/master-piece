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
      Edit Service
    </div>
    <div class="card-body">
        <form action="{{ url('Service/' .$data->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method("PATCH")
            <input type="hidden" name="id" value="{{ $data->id }}" id="id">
            <label>Name</label><br>
            <input type="text" name="name" value="{{ $data->name}}" id="address" class="form-control"><br>
            <span>@error('name'){{$message}} @enderror</span><br><br>

            <label>Description</label><br>
            <input type="text" name="description" value="{{ $data->description}}"   id="description" class="form-control"><br>
            <span>@error('description'){{$message}} @enderror</span><br><br>

            @if ($data->image)
            <img src="{{ asset('assets/img/' . $data->image) }}" alt="Existing Image" width="100" height="100"><br>
            @endif
        <!-- Allow uploading a new image -->
            <input type="file" name="image" id="image" accept="image/*" class="form-control"><br>
            <span>@error('image'){{$message}} @enderror</span><br><br>


            <label>Select Category</label><br>
            <select name="category_id" id="category_id" class="form-control">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" {{ $category->id == $data->category_id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
            <span>@error('category_id'){{ $message }}@enderror</span><br><br>

            <label>Select Beauty Expert</label><br>
            <select name="expert_id" id="expert_id" class="form-control">
                @foreach ($experts as $expert)
                    <option value="{{ $expert->id }}" {{ $expert->id == $data->expert_id ? 'selected' : '' }}>
                        {{ $expert->name }}
                    </option>
                @endforeach
            </select>
            <span>@error('expert_id'){{ $message }}@enderror</span><br><br>


            <input type="submit" value="Update" class="btn btn-success"><br>
        </form>
    </div>


@endsection
