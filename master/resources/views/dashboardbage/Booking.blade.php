@extends('dashlayouts.master')

@section('css')
<!-- Add your CSS links here -->
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
                                <th>Service Name</th>
                                <th>Expert Name</th>
                                <th>working_hours</th>
                                <th>availability</th>
                                <th>price</th>
                                <th>quantity</th>
                                <th>User Name</th>
                                <th>User Email</th>



                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($bookings as $item)
                            <tr>
                                <td>{{ $item->name }}</td>

                                <td>{{ $item->nameExpert }}</td>
                                <td>{{ $item->working_hours }}</td>
                                <td>{{ $item->availability}}</td>
                                <td>{{ $item->price }}</td>
                                <td>{{ $item->quantity}}</td>
                                <td>{{ $item->user->name }}</td>
                                <td>{{ $item->user->email }}</td>
                                


                                <td>
                                    <form method="POST" action="{{ url('/Booking/' . $item->id) }}"
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
