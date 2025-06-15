@extends('layouts.main')
@section('title', 'Whislist')
@section('main-container')
        <div class="overlay"></div>
        <!--Overlay-->
        <!--Page Banner Start-->
        <div class="page-banner" style="background-image: ur  l(frontend/assets//images/testimonial-bg.jpg);">
            <div class="container">
                <div class="page-banner-content text-center">
                    <h2 class="title">Wishlist</h2>
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Wishlist</li>
                    </ol>
                </div>
            </div>
        </div>
        <!--Page Banner End-->
        <!--Wishlist Start-->
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
            </div>
        </div>
        <!--Wishlist End-->
        <!--Copyright Section Start-->
        <div class="copyright-section">
            <div class="container">
                <div class="copyright-wrapper text-center d-lg-flex align-items-center justify-content-between">

                    <!--Right Start-->
                    <div class="copyright-content">
                        <p>Copyright 2022 &copy; All Rights Reserve Kngu</p>
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
    <script src="frontend/assets//js/main.js"></script>
</body>
</html>
@endsection