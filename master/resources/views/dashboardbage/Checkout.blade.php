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
                                <th>Expert Name</th>
                                <th>User Name</th>
                                <th>User Email</th>
                                <th>User Phone</th>
                                <th>User Address</th>
                                <th>Payment</th>
                                <th>Notes</th>
                                <th>Service Name</th>
                                <th>Service Type</th>
                                <th>Service Price</th>
                                <th>Total Amount</th>
                                <th>Payment Method</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($bookings as $item)
                            <tr>
                                <td>{{ $item->expert->name }}</td>
                                <td>{{ $item->user->name }}</td>
                                <td>{{ $item->user->email }}</td>
                                <td>{{ $item->user->phone }}</td>
                                <td>{{ $item->user->address }}</td>
                                <td>{{ $item->payment }}</td>
                                <td>{{ $item->notes }}</td>
                                <td>{{ $item->booking->service->name }}</td>
                                <td>{{ $item->booking->servicePrice->type }}</td>
                                <td>{{ $item->booking->servicePrice->price }}</td>
                                <td>{{ $item->total_amount }}</td>
                                <td>{{ $item->payment_method }}</td>
                                <td>
                                    <form method="POST" action="{{ url('/Checkout/' . $item->id) }}"
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
