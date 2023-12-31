

    @extends('pageslayout.master')
    <!-- Header Section Start -->
    @section('content')
    <!-- Page Title/Header End -->

    <!-- OffCanvas Wishlist End -->

    <!-- OffCanvas Cart Start -->

    <!-- OffCanvas Search End -->


<div class="offcanvas-overlay"></div>
    <!-- Page Title/Header Start -->
    <div class="page-title-section section" data-bg-image="{{ asset('assets1/images/m2.jpg') }}" style="height: 550px;">

        <div class="container">
            <div class="row">
                <div class="col">

                    <div class="page-title" >
                        <h1 class="title" style="color: black;">Beauty Experts</h1>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item" style="font-size: 35px;color: black;"><a href="index-2.html">Home</a></li>
                            <li class="breadcrumb-item active" style="font-size: 35px;color: black;">Beauty Experts</li>
                        </ul>
                    </div>

                </div>
            </div>
        </div></div>
    <!-- Page Title/Header End -->

    <!-- Shop Products Section Start -->
    {{-- <div class="section section-padding pt-0">

        <!-- Shop Toolbar Start -->
        <div class="shop-toolbar border-bottom">
            <div class="container">
                <div class="row learts-mb-n20">

                    <!-- Isotop Filter Start -->
                    <div class="col-md col-12 align-self-center learts-mb-20">
                        <div class="isotope-filter shop-product-filter" data-target="#shop-products">
                            <button class="active" data-filter="*">all</button>
                            <button data-filter=".featured">MAKEUP</button>
                            <button data-filter=".new">Manicure and Pedicure</button>
                            <button data-filter=".sales">BRIDAL MAKEUP</button>
                            <button data-filter=".sales">Henna</button>
                        </div>
                    </div>
                    <!-- Isotop Filter End -->

                    <div class="col-md-auto col-12 learts-mb-20">
                        <ul class="shop-toolbar-controls">

                            <li>
                                <div class="product-sorting">
                                    <select class="nice-select">
                                        <option value="menu_order" selected="selected">Default sorting</option>
                                        <option value="popularity">Sort by popularity</option>
                                        <option value="rating">Sort by average rating</option>
                                        <option value="date">Sort by latest</option>
                                        <option value="price">Sort by price: low to high</option>
                                        <option value="price-desc">Sort by price: high to low</option>
                                    </select>
                                </div>
                            </li>
                            <li>
                                <div class="product-column-toggle d-none d-xl-flex">
                                    <button class="toggle active hintT-top" data-hint="5 Column" data-column="5"><i class="ti-layout-grid4-alt"></i></button>
                                    <button class="toggle hintT-top" data-hint="4 Column" data-column="4"><i class="ti-layout-grid3-alt"></i></button>
                                    <button class="toggle hintT-top" data-hint="3 Column" data-column="3"><i class="ti-layout-grid2-alt"></i></button>
                                </div>
                            </li>
                            <li>
                                <a class="product-filter-toggle" href="#product-filter">Filters</a>
                            </li>

                        </ul>
                    </div>

                </div>
            </div>
        </div>
        <!-- Shop Toolbar End -->

        <!-- Product Filter Start -->
        <div id="product-filter" class="product-filter bg-light">
            <div class="container">
                <div class="row row-cols-lg-5 row-cols-md-3 row-cols-sm-2 row-cols-1 learts-mb-n30">

                    <!-- Sort by Start -->
                    <div class="col learts-mb-30">
                        <h3 class="widget-title product-filter-widget-title">Sort by</h3>
                        <ul class="widget-list product-filter-widget customScroll">
                            <li><a href="#">Popularity</a></li>
                            <li><a href="#">Average rating</a></li>
                            <li><a href="#">Newness</a></li>
                            <li><a href="#">Price: low to high</a></li>
                            <li><a href="#">Price: high to low</a></li>
                        </ul>
                    </div>
                    <!-- Sort by End -->

                    <!-- Price filter Start -->
                    <div class="col learts-mb-30">
                        <h3 class="widget-title product-filter-widget-title">Price filter</h3>
                        <ul class="widget-list product-filter-widget customScroll">
                            <li> <a href="#">All</a></li>
                            <li> <a href="#"><span class="amount"><span class="cur-symbol">£</span>0.00</span> - <span class="amount"><span class="cur-symbol">£</span>80.00</span></a></li>
                            <li> <a href="#"><span class="amount"><span class="cur-symbol">£</span>80.00</span> - <span class="amount"><span class="cur-symbol">£</span>160.00</span></a></li>
                            <li> <a href="#"><span class="amount"><span class="cur-symbol">£</span>160.00</span> - <span class="amount"><span class="cur-symbol">£</span>240.00</span></a></li>
                            <li> <a href="#"><span class="amount"><span class="cur-symbol">£</span>240.00</span> - <span class="amount"><span class="cur-symbol">£</span>320.00</span></a></li>
                            <li> <a href="#"><span class="amount"><span class="cur-symbol">£</span>320.00</span> +</a></li>
                        </ul>
                    </div>
                    <!-- Price filter End -->

                    <!-- Categories Start -->
                    <div class="col learts-mb-30">
                        <h3 class="widget-title product-filter-widget-title">Categories</h3>
                        <ul class="widget-list product-filter-widget customScroll">
                            <li><a href="#">Gift ideas</a> <span class="count">16</span></li>
                            <li><a href="#">Home Decor</a> <span class="count">16</span></li>
                            <li><a href="#">Kids &amp; Babies</a> <span class="count">6</span></li>
                            <li><a href="#">Kitchen</a> <span class="count">15</span></li>
                            <li><a href="#">Kniting &amp; Sewing</a> <span class="count">4</span></li>
                            <li><a href="#">Pots</a> <span class="count">4</span></li>
                            <li><a href="#">Toys</a> <span class="count">6</span></li>
                        </ul>
                    </div>
                    <!-- Categories End -->

                    <!-- Filters by colors Start -->
                    <div class="col learts-mb-30">
                        <h3 class="widget-title product-filter-widget-title">Filters by colors</h3>
                        <ul class="widget-colors product-filter-widget customScroll">
                            <li><a href="#" class="hintT-top" data-hint="Black"><span data-bg-color="#000000">Black</span></a></li>
                            <li><a href="#" class="hintT-top" data-hint="White"><span data-bg-color="#FFFFFF">White</span></a></li>
                            <li><a href="#" class="hintT-top" data-hint="Dark Red"><span data-bg-color="#b2483c">Dark Red</span></a></li>
                            <li><a href="#" class="hintT-top" data-hint="Flaxen"><span data-bg-color="#d5b85a">Flaxen</span></a></li>
                            <li><a href="#" class="hintT-top" data-hint="Pine"><span data-bg-color="#01796f">Pine</span></a></li>
                            <li><a href="#" class="hintT-top" data-hint="Tortilla"><span data-bg-color="#997950">Tortilla</span></a></li>
                        </ul>
                    </div>
                    <!-- Filters by colors End -->

                    <!-- Brands Start -->
                    <div class="col learts-mb-30">
                        <h3 class="widget-title product-filter-widget-title">Brands</h3>
                        <ul class="widget-list product-filter-widget customScroll">
                            <li><a href="#">Alexander</a> <span class="count">(2)</span></li>
                            <li><a href="#">Carmella</a> <span class="count">(4)</span></li>
                            <li><a href="#">Danielle</a> <span class="count">(7)</span></li>
                            <li><a href="#">Diana Day</a> <span class="count">(13)</span></li>
                            <li><a href="#">Emilia</a> <span class="count">(2)</span></li>
                            <li><a href="#">Gasmine</a> <span class="count">(15)</span></li>
                            <li><a href="#">Jack &amp; Ella</a> <span class="count">(7)</span></li>
                            <li><a href="#">Juliette</a> <span class="count">(11)</span></li>
                        </ul>
                    </div>
                    <!-- Brands End -->

                </div>
            </div>
        </div> --}}
        <div class="section learts-mt-70">
            <div class="container">
                <!-- Products Start -->
                <div id="shop-products" class="products isotope-grid row row-cols-xl-4 row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-1">
                    <div class="grid-sizer col-1"></div>

                    @foreach($experts as $expert)
                    <div class="grid-item col featured">
                        <div class="expert-card">
                            <div class="product">
                                <div class="product-thumb">
                                    <a href="{{ route('viewDetails.index', ['id' => $expert->id]) }}" class="image"></a>

                                        <img src="{{ url('/assets1/images/' . $expert->image1) }}" alt="Expert Image" style="height: 230px; border-radius: 10px;width:100%">
                                    </a>
                                    {{-- <a href="wishlist.html" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i class="far fa-heart"></i></a> --}}
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
                                    <p>
                                        Expertise:{{ $expert->expertise }}
                                     </p>
                                    <p>
                                        price:{{ $expert->price }}$
                                 </p>

                                    <div>


                                        <a href="{{ route('viewDetails.index', ['id' => $expert->id]) }}" class="btn btn-dark btn-outline-hover-dark">More Detail</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach


                <!-- Products End -->

            </div>
            {{-- <div class="text-center learts-mt-70">
                <ul class="pagination">
                    @foreach ($yourData as $item)
                        <li class="page-item">
                           {{ $yourData->links() }}

                        </li>
                    @endforeach
                </ul>
            </div> --}}
            <div class="text-center learts-mt-70">

</div>

        </div>

    </div>

    @endsection
