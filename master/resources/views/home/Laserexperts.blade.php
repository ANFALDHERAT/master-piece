
@extends('pageslayout.master')
    <!-- Header Section Start -->
    @section('content')
    <div class="offcanvas-overlay"></div>

    <!-- Page Title/Header Start -->
    <div class="page-title-section section"data-bg-image="{{ asset('assets1/images/m2.jpg') }}" style="height: 500px;" >
        <div class="container">
            <div class="row">
                <div class="col">

                    <div class="page-title">
                        <h1 class="title">Laser Experts</h1>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"  style="font-size: 25px;color: black;"><a href="/">Home</a></li>
                            <li class="breadcrumb-item"  style="font-size: 25px;color: black;"><a href="#">Laser Experts</a></li>

                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="section learts-mt-70">
        <div class="container">
            <!-- Products Start -->
            <div id="shop-products" class="products isotope-grid row row-cols-xl-3 row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-1">

                <div class="grid-sizer col-1"></div>
                @foreach($experts as $expert)
                <div class="grid-item col featured">
                    <div class="expert-card">
                    <div class="product">
                        <div class="product-thumb">
                            <a href="#" class="image">
                                <img src="{{ url('/assets1/images/' . $expert->image) }}" alt="Expert Image" style="height: 230px; border-radius: 10px;width:100%">

                            </a>

                        </div>
                        <div class="product-info">
                            <h6>{{ $expert->name }}</h6>
                            <span class="rating"></span>
                            <span class="stars">
                                @for ($i = 1; $i <= $expert->average_rating; $i++)
                                    &#9733;
                                @endfor
                            </span>
                            <p class="expert-location">
                                <i class="fas fa-map-marker-alt" style="margin-bottom: 10px;color: #e66b5a;"></i> Location: {{ $expert->address }}
                            </p>
                            <div >
                                <a href="{{ route('LaserDetails.index', ['id' => $expert->id]) }}" class="btn btn-dark btn-outline-hover-dark" style="margin-top: 50px">More Detail</a>
                            </div>


                        </div>
                    </div>
                </div>
                </div>

                @endforeach



            </div>
            <!-- Products End -->
            <div class="text-center learts-mt-70" >
                {{-- <a href="#" class="btn btn-dark btn-outline-hover-dark"><i class="ti-plus"></i> More</a> --}}
            </div>
        </div>
    </div>

</div>

@endsection

    <!-- Order Tracking Section End -->

