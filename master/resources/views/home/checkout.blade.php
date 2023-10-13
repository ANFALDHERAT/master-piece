
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
            <form action="#" class="checkout-form learts-mb-50">
                <div class="row">

                    <div class="col-md-12 col-12 learts-mb-20">
                        <label for="bdLastName"> Name <abbr class="required">*</abbr></label>
                        <input type="text" id="bdLastName">
                    </div>
                    <div class="col-12 learts-mb-20">
                        <label for="bdCompanyName">Company name (optional)</label>
                        <input type="text" id="bdCompanyName">
                    </div>

                    <div class="col-12 learts-mb-20">
                        <label for="bdAddress1">Street address <abbr class="required">*</abbr></label>
                        <input type="text" id="bdAddress1" placeholder="House number and street name">
                    </div>

                    <div class="col-12 learts-mb-20">
                        <label for="bdTownOrCity">Town / City <abbr class="required">*</abbr></label>
                        <input type="text" id="bdTownOrCity">
                    </div>


                    <div class="col-12 learts-mb-20">
                        <label for="bdPostcode">Postcode / ZIP (optional)</label>
                        <input type="text" id="bdPostcode">
                    </div>
                    <div class="col-md-6 col-12 learts-mb-20">
                        <label for="bdEmail">Email address <abbr class="required">*</abbr></label>
                        <input type="text" id="bdEmail">
                    </div>
                    <div class="col-md-6 col-12 learts-mb-30">
                        <label for="bdPhone">Phone <abbr class="required">*</abbr></label>
                        <input type="text" id="bdPhone">
                    </div>
                    <div class="col-12 learts-mb-40">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Create an account?</label>
                        </div>
                    </div>
                    <div class="col-12 learts-mb-20">
                        <label for="bdOrderNote">Order Notes (optional)</label>
                        <textarea id="bdOrderNote" placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                    </div>
                </div>
            </form>
            <div class="section-title2 text-center">
                <h2 class="title">Your order</h2>
            </div>
            <div class="row learts-mb-n30">
                <div class="col-lg-6 order-lg-2 learts-mb-30">
                    <div class="order-review">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="name">hadeel yousf</th>
                                    <th class="total">Subtotal</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="name">Manicure&nbsp; <strong class="quantity">×&nbsp;2</strong></td>
                                    <td class="total"><span>5jd</span></td>
                                </tr>
                                <tr>
                                    <td class="name">Pedicure&nbsp; <strong class="quantity">×&nbsp;1</strong></td>
                                    <td class="total"><span>5jd</span></td>
                                </tr>

                            </tbody>
                            <tfoot>
                                <tr class="subtotal">
                                    <th>Subtotal</th>
                                    <td><span>10jd</span></td>
                                </tr>
                                <tr class="total">
                                    <th>Total</th>
                                    <td><strong><span>10jd</span></strong></td>
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
                                <div class="card">
                                    <div class="card-header">
                                        <button data-bs-toggle="collapse" data-bs-target="#cashkPayments">Cash on delivery </button>
                                    </div>
                                    <div id="cashkPayments" class="collapse" data-bs-parent="#paymentMethod">
                                        <div class="card-body">
                                            <p>Pay with cash upon delivery.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
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
                        </div>
                        <div class="text-center">
                            <p class="payment-note">Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our privacy policy.</p>
                           <a href="email-template/email-order-success-two.html"> <button class="btn btn-dark btn-outline-hover-dark">place order</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Checkout Section End -->
    @endsection
