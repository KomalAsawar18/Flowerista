@extends('layouts.main')
@section('title', 'Cart')
@section('main-container')
        <div class="overlay"></div>
        <!--Overlay-->
        <!--Page Banner Start-->
        <div class="page-banner" style="background-image: url(frontend/assets//images/testimonial-bg.jpg);">
            <div class="container">
                <div class="page-banner-content text-center">
                    <h2 class="title">Your Shopping Cart</h2>
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Your Shopping Cart</li>
                    </ol>
                </div>
            </div>
        </div>
        <!--Page Banner End-->
        <!--Cart Start-->
        <div class="cart-page section-padding-5">
            <div class="container">
                <div class="cart-table table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="image">Image</th>
                                <th class="product">Product</th>
                                <th class="price">Price</th>
                                <th class="quantity">Quantity</th>
                                <th class="total">Total</th>
                                <th class="remove">Remove</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="image">
                                    <img src="frontend/assets//images/cart/cart-1.jpg" alt="">
                                </td>
                                <td class="product">
                                    <a href="shop-single.html">Rock Soapwort</a>
                                </td>
                                <td class="price">
                                    <span class="amount">$50.00</span>
                                </td>
                                <td class="quantity">
                                    <form action="#">
                                        <div class="quantity d-inline-flex">
                                            <button type="button" class="sub"><i class="ti-minus"></i></button>
                                            <input type="text" value="1" />
                                            <button type="button" class="add"><i class="ti-plus"></i></button>
                                        </div>
                                    </form>
                                </td>
                                <td class="total">
                                    <span class="total-amount">$50.00</span>
                                </td>
                                <td class="remove">
                                    <button><i class="ti-close"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td class="image">
                                    <img src="frontend/assets//images/cart/cart-2.jpg" alt="">
                                </td>
                                <td class="product">
                                    <a href="shop-single.html">Sweet Alyssum</a>
                                </td>
                                <td class="price">
                                    <span class="amount">$50.00</span>
                                </td>
                                <td class="quantity">
                                    <form action="#">
                                        <div class="quantity d-inline-flex">
                                            <button type="button" class="sub"><i class="ti-minus"></i></button>
                                            <input type="text" value="1" />
                                            <button type="button" class="add"><i class="ti-plus"></i></button>
                                        </div>
                                    </form>
                                </td>
                                <td class="total">
                                    <span class="total-amount">$50.00</span>
                                </td>
                                <td class="remove">
                                    <button><i class="ti-close"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td class="image">
                                    <img src="frontend/assets//images/cart/cart-3.jpg" alt="">
                                </td>
                                <td class="product">
                                    <a href="shop-single.html">Wild Roses</a>
                                    <span>white</span>
                                </td>
                                <td class="price">
                                    <span class="amount">$50.00</span>
                                </td>
                                <td class="quantity">
                                    <form action="#">
                                        <div class="quantity d-inline-flex">
                                            <button type="button" class="sub"><i class="ti-minus"></i></button>
                                            <input type="text" value="1" />
                                            <button type="button" class="add"><i class="ti-plus"></i></button>
                                        </div>
                                    </form>
                                </td>
                                <td class="total">
                                    <span class="total-amount">$50.00</span>
                                </td>
                                <td class="remove">
                                    <button><i class="ti-close"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="cart-btn">
                    <div class="cart-btn-left">
                        <a href="#" class="btn btn-primary">Continue Shopping</a>
                    </div>
                    <div class="cart-btn-right">
                        <a href="#" class="btn">Clear Cart</a>
                        <a href="#" class="btn">Update Cart</a>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4">
                        <div class="cart-shipping">
                            <div class="cart-title">
                                <h4 class="title">Calculate Shipping</h4>
                                <p>Estimate your shipping fee *</p>
                            </div>
                            <div class="cart-form mt-25">
                                <p>Calculate shipping</p>
                                <form action="#">
                                    {{-- <div class="single-select2">
                                        <div class="form-select2">
                                            <select class="select2">
                                                <option value="0">Select a country…</option>
                                                <option value="1">Bangladesh</option>
                                                <option value="2">Canada</option>
                                                <option value="6">Pakistan</option>
                                                <option value="7">Turkey</option>
                                            </select>
                                        </div>
                                    </div> --}}
                                    <div class="single-select2">
                                        <div class="form-select2">
                                            <select class="select2">
                                                <option value="">Select an option…</option>
                                                <option value="BAG">Bagerhat</option>
                                                <option value="BAN">Bandarban</option>
                                                <option value="SYL">Sylhet</option>
                                                <option value="TAN">Tangail</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="single-form">
                                        <input type="text" placeholder="Postcode/ziip">
                                    </div>
                                    <div class="cart-form-btn">
                                        <button class="btn btn-primary">Update totals</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="cart-coupon">
                            <div class="cart-title">
                                <h4 class="title">Coupon Code</h4>
                                <p>Enter your coupon code if you have one.</p>
                            </div>
                            <div class="cart-form mt-25">
                                <form action="#">
                                    <div class="single-form">
                                        <input type="text" placeholder="Enter your coupon code..">
                                    </div>
                                    <div class="cart-form-btn">
                                        <button class="btn btn-primary">Apply Coupon</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="cart-totals">
                            <div class="cart-title">
                                <h4 class="title">Cart totals</h4>
                            </div>
                            <div class="cart-total-table mt-25">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <p class="value">Subtotal</p>
                                            </td>
                                            <td>
                                                <p class="price">£600.00</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p class="value">Shipping</p>
                                            </td>
                                            <td>
                                                <ul class="shipping-list">
                                                    <li class="cus-radio">
                                                        <input type="radio" name="shipping" id="radio1" checked="">
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
                                            <td>
                                                <p class="value">Total</p>
                                            </td>
                                            <td>
                                                <p class="price">£600.00</p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="cart-total-btn">
                                <a href="#" class="btn btn-primary btn-block">Proceed To Checkout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Cart End-->
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
