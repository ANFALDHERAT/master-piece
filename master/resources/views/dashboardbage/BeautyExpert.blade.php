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
                <a href=" {{ url('/BeautyExpert/create') }}"> <button class="btn btn-primary mb-2">Add New  Beauty Expert
                   </button></a>

                </div>

                <div class="card-body">
                    <div class="table-responsive table-desi">
                        <table class="table all-package table-category" id="editableTable">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email </th>
                                    <th>address</th>
                                    <th>phone</th>
                                    <th>password</th>
                                    <th>working_hours</th>
                                    <th>availability</th>
                                    <th>Name service</th>
                                    <th>service_area</th>
                                    <th>services_offered</th>
                                    <th>description</th>
                                    <th>average_rating </th>
                                    <th>price</th>
                                    <th>expertise</th>
                                    <th>image1</th>
                                    <th>image2</th>
                                    <th>image3</th>
                                    <th>image4</th>
                                    <th>image5</th>
                                </tr>
                            </thead>
                            <tbody>

                    @foreach ( $data as $item )
                    <tr>

                      <td>{{ $item->name }}</td>
                      <td>{{ $item->email}}</td>
                      <td>{{ $item->address}}</td>
                      <td>{{ $item->phone}}</td>
                      <td>{{ $item->password}}</td>
                      <td>{{ $item->working_hours}}</td>
                      <td>{{ $item->availability}}</td>
                      <td>{{ $item->service->name }}</td>
                      <td>{{ $item->service_area}}</td>
                      <td>{{ $item->services_offered}}</td>
                      <td>{{ $item->description}}</td>
                      <td>{{ $item->average_rating }}</td>
                      <td>{{ $item->price }}</td>
                      <td>{{ $item->expertise}}</td>

                     <td>
                      @if ($item->image1)
                      <img src="{{ $item->image1 }}" alt="Image" width="100" height="100">

                      @else
                      No Image
                      @endif
                     </td>
                     <td>
                        @if ($item->image2)
                        <img src="{{ $item->image2 }}" alt="Image" width="100" height="100">

                        @else
                        No Image
                        @endif
                       </td>
                       <td>
                        @if ($item->image3)
                        <img src="{{ $item->image3 }}" alt="Image" width="100" height="100">

                        @else
                        No Image
                        @endif
                       </td>
                       <td>
                        @if ($item->image4)
                        <img src="{{ $item->image4 }}" alt="Image" width="100" height="100">

                        @else
                        No Image
                        @endif
                       </td>
                       <td>
                        @if ($item->image5)
                        <img src="{{ $item->image5}}" alt="Image" width="100" height="100">

                        @else
                        No Image
                        @endif
                       </td>
                    <td>



                <a href="{{ url('/BeautyExpert/' . $item->id . '/edit') }}"> <button
                    class="btn  btn-sm"> <i class="fa fa-edit" title="Edit" style="font-size:30px;color:green"></i></button></a>
                    <!-- Delete Admin form (you can use a modal for confirmation) -->
                   <form method="POST" action="{{ url('/BeautyExpert' . '/' . $item->id  ) }}" style="display: inline;">
                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn  btn-sm" onclick="return confirm('Confirm Delete?')"><i class="fa fa-trash" title="Delete" style="font-size:30px;color:red"></i></button>

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
        <!-- Content Column Ends -->
    </div>
</div>
@endsection
