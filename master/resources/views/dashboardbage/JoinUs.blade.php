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
<div class="container-fluid">
    <div class="row">
        <!-- Sidebar Column -->
        <div class="col-lg-2 col-md-4 col-sm-12">
            <!-- Sidebar Content Goes Here -->
        </div>

        <!-- Content Column -->
        <div class="col-lg-9 col-md-8 col-sm-12">
            <div class="card">
                @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                @endif
            </div>

            <div class="card-body">
                <div class="table-responsive table-desi">
                    <table class="table all-package table-category" id="editableTable">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>image</th>
                                <th>phone</th>

                                <th>cv</th>
                                <th>description</th>
                                <th>location</th>
                                <th>years_of_experience</th>
                                <th>age</th>
                                <th>price</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                            <tr>
                                <td>{{ $item->name}}</td>
                                <td><img src="{{ asset('storage/' . $item->image) }}" alt="Image" width="100"></td>
                                <td>{{ $item->phone }}</td>
                                <td><a href="{{ asset('storage/' . $item->cv) }}" target="_blank">View CV</a></td>
                                <td>{{ $item->description }}</td>
                                <td>{{ $item->location}}</td>
                                <td>{{ $item->years_of_experience}}</td>
                                <td>{{ $item->age}}</td>
                                <td>{{ $item->price}}</td>
                                <td>
                                    <form method="POST" action="{{ url('/JoinUs/' . $item->id) }}"
                                        style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm"
                                            onclick="return confirm('Confirm Delete?')"><i
                                                class="fa fa-trash" title="Delete"
                                                style="font-size:30px;color:red"></i></button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
