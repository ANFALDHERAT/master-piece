
@extends('pageslayout.master')
    <!-- Header Section Start -->
    @section('content')
    <!-- OffCanvas Search End -->

    <div class="offcanvas-overlay"></div>

    <!-- Page Title/Header Start -->
    <div class="page-title-section section"data-bg-image="{{ asset('assets1/images/m2.jpg') }}" style="height: 500px;" >
        <div class="container">
            <div class="row">
                <div class="col">

                    <div class="page-title">
                        <h1 class="title">Checkout</h1>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item" style="font-size: 25px;color: black;"><a href="index-2.html">Home</a></li>
                            <li class="breadcrumb-item active" style="font-size: 25px;color: black;">Checkout</li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Page Title/Header End -->

    <!-- Checkout Section Start -->
    <div class="section section-padding">
        <div class="container">
            <div class="checkout-coupon">
                <p class="coupon-toggle">Have a coupon? <a href="#checkout-coupon-form" data-bs-toggle="collapse">Click here to enter your code</a></p>
                <div id="checkout-coupon-form" class="collapse">
                    <div class="coupon-form">
                        <p>If you have a coupon code, please apply it below.</p>
                        <form action="#" class="learts-mb-n10">
                            <input class="learts-mb-10" type="text" placeholder="Coupon code">
                            <button class="btn btn-dark btn-outline-hover-dark learts-mb-10">apply coupon</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="section-title2">
                <h2 class="title">Billing details</h2>
            </div>
            <form action="{{ route('processTransaction') }}"  method="get" class="checkout-form learts-mb-50">
                @csrf
                <div class="row">

                    <div class="col-md-12 col-12 learts-mb-20">
                        <label for="bdLastName"> Name <abbr class="required" >*</abbr></label>
                        <input type="text" id="bdLastName" value="{{ old('name', $user->name) }}">
                    </div>
                    <input  type="text" name="user_id" value="{{Auth::user()->id}}" hidden>

                    <div class="col-12 learts-mb-20">
                        <label for="bdAddress1">address <abbr class="required">*</abbr></label>
                        <input type="text" id="bdAddress1"  placeholder="House number and street name" value="{{ old('address', $user->address) }}">
                    </div>


                    <div class="col-12 learts-mb-20">
                        <label for="bdPhone">Phone <abbr class="required">*</abbr></label>
                        <input type="text" id="bdPhone" value="{{ old('phone', $user->phone) }}">
                    </div>

                    <div class="col-12 learts-mb-20">
                        <label for="bdOrderNote">Order Notes (optional)</label>
                        <textarea id="bdOrderNote" placeholder="Notes about your order"></textarea>
                    </div>
                </div>

            <div class="section-title2 text-center">
                <h2 class="title">Your order</h2>
            </div>
            <div class="row learts-mb-n30">
                <div class="col-lg-6 order-lg-2 learts-mb-30">
                    <div class="order-review">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="name">Name of Expert</th>
                                    <th class="total">Subtotal</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($bookings as $booking)
                                <tr>
                                    <td class="name">{{ $booking->nameExpert }} <strong class="quantity">× {{ $booking->quantity }}</strong></td>
                                    <td class="total"><span>{{ $booking->price }}jd</span></td>
                                </tr>
                                @endforeach

                            </tbody>
                            <tfoot>

                                <tr class="total">
                                    <th>Total</th>
                                    <td><strong><span>{{ $bookings->sum('price') }}jd</span></strong></td>
                                </tr>

                            </tfoot>
                        </table>
                    </div>
                </div>
                <div class="col-lg-6 order-lg-1 learts-mb-30">
                    <div class="order-payment">
                        <div class="payment-method">
                            <div class="accordion" id="paymentMethod">
                                <div class="card active">
                                    <div class="card-header">
                                        <button data-bs-toggle="collapse" data-bs-target="#checkPayments">Check payments</button>
                                    </div>
                                    <div id="checkPayments" class="collapse show" data-bs-parent="#paymentMethod">
                                        <div class="card-body">
                                            <p>Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="card">
                                    <div class="card-header">
                                        <button data-bs-toggle="collapse" data-bs-target="#cashkPayments">Cash on delivery </button>
                                    </div>
                                    <div id="cashkPayments" class="collapse" data-bs-parent="#paymentMethod">
                                        <div class="card-body">
                                            <p>Pay with cash upon delivery.</p>
                                        </div>
                                    </div>
                                </div> --}}
                                {{-- <div class="card">
                                    <div class="card-header">
                                        <button data-bs-toggle="collapse" data-bs-target="#payPalPayments">PayPal <img src="assets/images/others/pay-2.webp" alt=""></button>
                                    </div>
                                    <div id="payPalPayments" class="collapse" data-bs-parent="#paymentMethod">
                                        <div class="card-body">
                                            <p>Pay via PayPal; you can pay with your credit card if you don’t have a PayPal account.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        <div class="text-center">

                            <div class="modal fade" id="orderSuccessModal" tabindex="-1" role="dialog" aria-labelledby="orderSuccessModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="orderSuccessModalLabel">Order Successful</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                      Your order has been placed successfully.
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              {{-- <div class="form-group"> --}}
                                {{-- <label for="paymentMethod">Payment Method</label> --}}
                                {{-- <select id="paymentMethod" name="payment_method" class="form-control">
                                    <option value="check">Check</option>
                                    <option value="cash">Cash on Delivery</option>
                                    <option value="paypal">PayPal</option>
                                </select>
                            </div> --}}
                              <input type="hidden" name="booking_id" value="{{ $booking->id }}">
                              <input type="hidden" name="notes" value="Your order notes go here">
                              <input type="hidden" name="total_amount" value="{{ $bookings->sum('price') }}">
                              <!-- "Place Order" button -->

                              <div class="paypal-button-container">
                                <input type="image" name="submit" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif" alt="Pay with PayPal" class="paypal-logo" width="5" height="100">
                                <span class="paypal-button-label"></span>
                            </div>
                            <img alt=""  width="5" height="10" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif">
                        </div></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Checkout Section End -->
    @endsection
