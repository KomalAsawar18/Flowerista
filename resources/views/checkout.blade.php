@extends('layouts.main')
@section('title', 'Checkout')
@section('main-container')
        <div class="overlay"></div>
        <!--Overlay-->

        <!--Page Banner Start-->
        <div class="page-banner" style="background-image: url(frontend/assets//images/testimonial-bg.jpg);">
            <div class="container">
                <div class="page-banner-content text-center">
                    <h2 class="title">Checkout</h2>
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                    </ol>
                </div>
            </div>
        </div>
        <!--Page Banner End-->

        <!--Register Start-->
        <div class="checkout-page section-padding-5">
            <div class="container">
                <div class="checkout-info mt-30">
                    <p class="info-header error"><i class="fa fa-exclamation-circle"></i> <strong>Error:</strong> Username is required.</p>
                </div>

                <div class="checkout-info mt-30">
                    <p class="info-header"> <i class="fa fa-exclamation-circle"></i> Returning customer? <a data-bs-toggle="collapse" href="#login">Click here to login</a></p>

                    <div class="collapse" id="login">
                        <div class="card-body">
                            <p>If you have shopped with us before, please enter your details in the boxes below. If you are a new customer, please proceed to the Billing & Shipping section.</p>
                            <form action="#">

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="single-form">
                                            <label>Username or email *</label>
                                            <input type="email">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="single-form">
                                            <label>Password</label>
                                            <input type="password">
                                        </div>
                                    </div>
                                </div>

                                <div class="single-form d-flex align-items-center">
                                    <button class="btn btn-primary">Login</button>
                                    <div class="cus-checkbox">
                                        <input type="checkbox" id="remember">
                                        <label for="remember"><span></span> Remember Me</label>
                                    </div>
                                </div>
                                <div class="forget">
                                    <a href="#">Lost Your Password</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="checkout-info mt-30">
                    <p class="info-header"> <i class="fa fa-exclamation-circle"></i> Have a coupon? <a data-bs-toggle="collapse" href="#coupon">Click here to enter your code</a></p>

                    <div class="collapse" id="coupon">
                        <div class="card-body">
                            <form action="#">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="single-form">
                                            <input type="email" placeholder="Coupon code">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="single-form">
                                            <button class="btn btn-primary">Login</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <form action="#">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="checkout-form mt-30">

                                <div class="checkout-title">
                                    <h4 class="title">Billing details</h4>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="single-form">
                                            <label>First name *</label>
                                            <input type="text">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="single-form">
                                            <label>Last name *</label>
                                            <input type="text">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="single-form">
                                            <label>Company name</label>
                                            <input type="text">
                                        </div>
                                    </div>
                                    {{-- <div class="col-sm-12">
                                        <div class="single-select2">
                                            <label>Country *</label>

                                            <div class="form-select2">
                                                <select class="select2">
                                                    <option value="0">Select a country…</option>
                                                    <option value="1">Bangladesh</option>
                                                    <option value="2">Canada</option>
                                                    <option value="3">Colombia</option>
                                                    <option value="4">Indonesia</option>
                                                    <option value="5">Italy</option>
                                                    <option value="6">Pakistan</option>
                                                    <option value="7">Turkey</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div> --}}
                                    <div class="col-sm-12">
                                        <div class="single-form">
                                            <label>Street address *</label>
                                            <input type="text" placeholder="House number and street name">
                                            <input type="text" placeholder="Apartment, suite, unit etc. (optional)">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="single-form">
                                            <label>Town / City *</label>
                                            <input type="text">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="single-select2">
                                            <label>District *</label>

                                            <div class="form-select2">
                                                <select class="select2">
                                                    <option value="">Select an option…</option>
                                                    <option value="BAG">Bagerhat</option>
                                                    <option value="BAN">Bandarban</option>
                                                    <option value="BAR">Barguna</option>
                                                    <option value="PAT">Patuakhali</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="single-form">
                                            <label>Postcode / ZIP</label>
                                            <input type="text">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="single-form">
                                            <label>Phone *</label>
                                            <input type="text">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="single-form">
                                            <label>Email address *</label>
                                            <input type="text">
                                        </div>
                                    </div>
                                </div>

                                <div class="cus-checkbox checkout-checkbox">
                                    <input type="checkbox" id="account">
                                    <label for="account"><span></span> Create an account?</label>
                                </div>

                                <div class="checkout-account">
                                    <div class="single-form">
                                        <label>Create account Password *</label>
                                        <input type="password" placeholder="Password">
                                    </div>
                                </div>

                                <div class="cus-checkbox checkout-checkbox">
                                    <input type="checkbox" id="shipping">
                                    <label for="shipping"><span></span> Ship to a different address?</label>
                                </div>

                                <div class="checkout-shipping">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="single-form">
                                                <label>First name *</label>
                                                <input type="text">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="single-form">
                                                <label>Last name *</label>
                                                <input type="text">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="single-form">
                                                <label>Company name</label>
                                                <input type="text">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            {{-- <div class="single-select2">
                                                <label>Country *</label>

                                                <div class="form-select2">
                                                    <select class="select2">
                                                        <option value="0">Select a country…</option>
                                                        <option value="1">Bangladesh</option>
                                                        <option value="2">Canada</option>
                                                        <option value="3">Colombia</option>
                                                        <option value="4">Indonesia</option>
                                                        <option value="5">Italy</option>
                                                        <option value="6">Pakistan</option>
                                                        <option value="7">Turkey</option>
                                                    </select>
                                                </div>
                                            </div> --}}
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="single-form">
                                                <label>Street address *</label>
                                                <input type="text" placeholder="House number and street name">
                                                <input type="text" placeholder="Apartment, suite, unit etc. (optional)">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="single-form">
                                                <label>Town / City *</label>
                                                <input type="text">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="single-select2">
                                                <label>District *</label>

                                                <div class="form-select2">
                                                    <select class="select2">
                                                        <option value="">Select an option…</option>
                                                        <option value="BAG">Bagerhat</option>
                                                        <option value="BAN">Bandarban</option>
                                                        <option value="BAR">Barguna</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="single-form">
                                                <label>Postcode / ZIP</label>
                                                <input type="text">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="single-form">
                                                <label>Phone *</label>
                                                <input type="text">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="single-form">
                                                <label>Email address *</label>
                                                <input type="text">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="single-form checkout-note">
                                    <label>Order notes</label>
                                    <textarea placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="checkout-review-order mt-30">
                                <div class="checkout-title">
                                    <h4 class="title">Your Order</h4>
                                </div>

                                <div class="checkout-review-order-table table-responsive mt-15">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th class="Product-name">Product</th>
                                                <th class="Product-price">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="Product-name">
                                                    <p>Bodysuit With Long Sleeves × 1</p>
                                                </td>
                                                <td class="Product-price">
                                                    <p>£150.00</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="Product-name">
                                                    <p>Classic Polo Shirt × 1</p>
                                                </td>
                                                <td class="Product-price">
                                                    <p>£150.00</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="Product-name">
                                                    <p>Trousers With Side Stripe × 1</p>
                                                </td>
                                                <td class="Product-price">
                                                    <p>£150.00</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="Product-name">
                                                    <p>Biker Jacket × 1</p>
                                                </td>
                                                <td class="Product-price">
                                                    <p>£150.00</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td class="Product-name">
                                                    <p>Subtotal</p>
                                                </td>
                                                <td class="Product-price">
                                                    <p>£150.00</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="Product-name">
                                                    <p>Shipping</p>
                                                </td>
                                                <td class="Product-price">
                                                    <ul class="shipping-list">
                                                        <li class="cus-radio">
                                                            <input type="radio" name="shipping" id="radio1" checked>
                                                            <label for="radio1"><span></span> Flat Rate</label>
                                                        </li>
                                                        <li class="cus-radio">
                                                            <input type="radio" name="shipping" id="radio2">
                                                            <label for="radio2"><span></span> Free Shipping</label>
                                                        </li>
                                                        <li class="cus-radio">
                                                            <input type="radio" name="shipping" id="radio3">
                                                            <label for="radio3"><span></span> Local Pickup</label>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="Product-name">
                                                    <p>Total</p>
                                                </td>
                                                <td class="total-price">
                                                    <p>£600.00</p>
                                                </td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>

                                <div class="checkout-payment">
                                    <ul>
                                        <li>
                                            <div class="single-payment">
                                                <div class="payment-radio cus-radio">
                                                    <input type="radio" name="radio" id="bank">
                                                    <label for="bank"><span></span> Direct bank transfer </label>

                                                    <div class="payment-details">
                                                        <p>Please send a Check to Store name with Store Street, Store Town, Store State, Store Postcode, Store Country.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="single-payment">
                                                <div class="payment-radio cus-radio">
                                                    <input type="radio" name="radio" id="check">
                                                    <label for="check"><span></span> Check payments </label>

                                                    <div class="payment-details">
                                                        <p>Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="single-payment">
                                                <div class="payment-radio cus-radio">
                                                    <input type="radio" name="radio" id="cash" checked="checked">
                                                    <label for="cash"><span></span> Cash on Delivery</label>

                                                    <div class="payment-details">
                                                        <p>Pay with cash upon delivery.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="single-payment">
                                                <div class="payment-radio cus-radio">
                                                    <input type="radio" name="radio" id="paypal">
                                                    <label for="paypal"><span></span> Paypal <img class="payment" src="frontend/assets//images/payment-2.png" alt=""> <a href="#">What is PayPal?</a></label>

                                                    <div class="payment-details">
                                                        <p>Pay via PayPal; you can pay with your credit card if you don’t have a PayPal account.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>

                                    <div class="checkout-btn">
                                        <a class="btn btn-primary btn-block" href="#">Place Order</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!--Register End-->
        <!--Copyright Section Start-->
        <div class="copyright-section">
            <div class="container">
                <div class="copyright-wrapper text-center d-lg-flex align-items-center justify-content-between">

                    <!--Right Start-->
                    <div class="copyright-content">
                        <p>Copyright 2024 &copy; All Rights Reserved Kngu</p>
                    </div>
                    <!--Right End-->

                    <!--Right Start-->
                    <div class="copyright-payment">
                        <img src="frontend/assets//images/payment.png" alt="">
                    </div>
                    <!--Right End-->

                </div>
            </div>
        </div>
        <!--Copyright Section End-->


        <!--Back To Start-->
        <a href="#" class="back-to-top">
            <i class="fa fa-angle-double-up"></i>
        </a>
        <!--Back To End-->

    </div>

    <!-- JS
    ============================================ -->

    <!-- Modernizer JS -->
    <script src="frontend/assets//js/vendor/modernizr-3.6.0.min.js"></script>
    <!-- jQuery JS -->
    <script src="frontend/assets//js/vendor/jquery-3.3.1.min.js"></script>
    <!-- Bootstrap JS -->
    <!-- <script src="frontend/assets//js/vendor/popper.min.js"></script>
    <script src="frontend/assets//js/vendor/bootstrap.min.js"></script> -->

    <!-- Plugins JS -->
    <!-- <script src="frontend/assets//js/plugins/swiper-bundle.min.js"></script>
    <script src="frontend/assets//js/plugins/jquery.countdown.min.js"></script>
    <script src="frontend/assets//js/plugins/jquery.elevateZoom.min.js"></script>
    <script src="frontend/assets//js/plugins/select2.min.js"></script>
    <script src="frontend/assets//js/plugins/ajax-contact.js"></script> -->


    <!--====== Use the minified version files listed below for better performance and remove the files listed above ======-->
    <script src="frontend/assets//js/plugins.min.js"></script>

    <!-- Main JS -->
    <script src="frontend/assets//js/main.js"></script>

</body>
</html>
@endsection
