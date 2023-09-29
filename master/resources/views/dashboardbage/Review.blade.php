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
                                <th>User Name</th>
                                <th>Expert Name</th>
                                <th>Comment</th>
                                <th>Rating</th>
                                <th>Date Posted</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($reviews as $item)
                            <tr>
                                <td>{{ $item->user->name }}</td>
                                <td>{{ $item->expert->name }}</td>
                                <td>{{ $item->comment }}</td>
                                <td>{{ $item->rating }}</td>
                                <td>{{ $item->date_posted }}</td>
                                <td>
                                    <form method="POST" action="{{ url('/Review/' . $item->id) }}"
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
