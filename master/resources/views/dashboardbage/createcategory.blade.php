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
        Add new Category
    </div>
    <div class="card-body">
      <form action="{{ url('/category') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <label>Name</label><br>
        <input type="text" name="name" id="name" class="form-control"><br>

        <span>@error('name'){{$message}} @enderror</span><br><br>
        <label>description</label><br>
        <input type="text" name="description" id="description" class="form-control">
        <span>@error('description'){{$message}} @enderror</span><br><br>
        <td>
            @if ($item->image)
            <img src="{{ $item->image }}" alt="Image" width="100" height="100">

            @else
            No Image
            @endif
           </td>
        <input type="submit" value="Save" class="btn " style="background-color: #F8796C"><br>
      </form>

    </div>
</div>
@endsection
