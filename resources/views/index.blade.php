@extends('layouts.main')
@section('title', 'About')
@section('main-container')
<div class="slider-area">
    <div class="swiper-container slider-active">
        <div class="swiper-wrapper">
                    <!--Single Slider Start-->
            <div class="single-slider swiper-slide animation-style-01" style="background-image: url(frontend/assets//images/slider/slider-1.jpg);">
                <div class="container">
                    <div class="slider-content">

                                <h2 class="main-title">Your Special Day!</h2>


                                <ul class="slider-btn">
                                    <li><a href="shop-single.html" class="btn btn-round btn-primary">Start Shopping</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--Single Slider End-->

                    <!--Single Slider Start-->
                    <div class="single-slider swiper-slide animation-style-01" style="background-image: url(frontend/assets//images/slider/slider-2.jpg);">
                        <div class="container">
                            <div class="slider-content">
                                <h5 class="sub-title">20% Off For <br> New Members</h5>
                                <h2 class="main-title">Happy Mother’s Day!</h2>
                                <p>Bouquets your mom will love!</p>

                                <ul class="slider-btn">
                                    <li><a href="shop-single.html" class="btn btn-round btn-primary">Start Shopping</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--Single Slider End-->
                </div>
                <!--Swiper Wrapper End-->

                <!-- Add Arrows -->
                <div class="swiper-next"><i class="fa fa-angle-right"></i></div>
                <div class="swiper-prev"><i class="fa fa-angle-left"></i></div>

                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>

            </div>
            <!--Swiper Container End-->
        </div>
        <!--Slider End-->



        <!--Shipping Start-->
        <div class="shipping-area section-padding-3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-shipping">
                            <div class="shipping-icon">
                                <img src="frontend/assets//images/shipping-icon/Free-Delivery.png" alt="">
                            </div>
                            <div class="shipping-content">
                                <h5 class="title">Free Delivery</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-shipping">
                            <div class="shipping-icon">
                                <img src="frontend/assets//images/shipping-icon/Online-Order.png" alt="">
                            </div>
                            <div class="shipping-content">
                                <h5 class="title">Online Order</h5>
                                <p>Don’t worry you can order Online by our Site</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-shipping">
                            <div class="shipping-icon">
                                <img src="frontend/assets//images/shipping-icon/Freshness.png" alt="">
                            </div>
                            <div class="shipping-content">
                                <h5 class="title">Freshness</h5>
                                <p>You have freshness flowers every single order</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-shipping">
                            <div class="shipping-icon">
                                <img src="frontend/assets//images/shipping-icon/Made-By-Artists.png" alt="">
                            </div>
                            <div class="shipping-content">
                                <h5 class="title">Made by Artists</h5>
                                <p>World for all made by artists orders over now</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Shipping End-->



        <!--New Product Start-->
        <div class="new-product-area section-padding-2">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-9 col-sm-11">
                        <div class="section-title text-center">
                            <h2 class="title">New Products</h2>
                            <p>A perfect blend of creativity, energy, communication, happiness and love. Let us arrange a smile for you.</p>
                        </div>
                    </div>
                </div>
                <div class="product-wrapper">
                    <div class="swiper-container product-active">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="single-product">
                                    <div class="product-image">
                                        <a href="shop-single.html">
                                            <img src="frontend/assets//images/product/product-1.jpg" alt="">
                                        </a>
                                        <span class="sticker-new soldout-title">Soldout</span>

                                        <div class="action-links">
                                            <ul>
                                                <li><a href="cart.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Add to cart"><i class="icon-shopping-bag"></i></a></li>
                                                <li><a href="compare.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Compare"><i class="icon-sliders"></i></a></li>
                                                <li><a href="wishlist.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                                                <li><a href="javascript:void(0);" data-bs-tooltip="tooltip" data-bs-placement="left" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content text-center">
                                        <div class="rating">
                                            <div class="rating-on" style="width: 80%;"></div>
                                        </div>
                                        <h4 class="product-name"><a href="shop-single.html">Spring Snowflake</a></h4>
                                        <div class="price-box">
                                            <span class="current-price">Rs.400</span>
                                            <span class="old-price">Rs.600</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="single-product">
                                    <div class="product-image">
                                        <a href="shop-single.html">
                                            <img src="frontend/assets//images/product/product-2.jpg" alt="">
                                        </a>
                                        <div class="action-links">
                                            <ul>
                                                <li><a href="cart.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Add to cart"><i class="icon-shopping-bag"></i></a></li>
                                                <li><a href="compare.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Compare"><i class="icon-sliders"></i></a></li>
                                                <li><a href="wishlist.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                                                <li><a href="javascript:void(0);" data-bs-tooltip="tooltip" data-bs-placement="left" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content text-center">
                                        <div class="rating">
                                            <div class="rating-on" style="width: 80%;"></div>
                                        </div>
                                        <h4 class="product-name"><a href="shop-single.html">Rock Soapwort</a></h4>
                                        <div class="price-box">
                                            <span class="current-price">Rs.500</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="single-product">
                                    <div class="product-image">
                                        <a href="shop-single.html">
                                            <img src="frontend/assets//images/product/product-3.jpg" alt="">
                                        </a>

                                        <span class="sticker-new label-sale">-35%</span>

                                        <div class="action-links">
                                            <ul>
                                                <li><a href="cart.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Add to cart"><i class="icon-shopping-bag"></i></a></li>
                                                <li><a href="compare.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Compare"><i class="icon-sliders"></i></a></li>
                                                <li><a href="wishlist.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                                                <li><a href="javascript:void(0);" data-bs-tooltip="tooltip" data-bs-placement="left" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-eye"></i></a></li>
                                            </ul>
                                        </div>

                                        <div class="product-countdown">
                                            <div data-countdown="2022/12/31"></div>
                                        </div>

                                    </div>
                                    <div class="product-content text-center">
                                        <div class="rating">
                                            <div class="rating-on" style="width: 80%;"></div>
                                        </div>
                                        <h4 class="product-name"><a href="shop-single.html">Scarlet Sage</a></h4>
                                        <div class="price-box">
                                            <span class="current-price">RS.300</span>
                                            <span class="old-price">Rs.600</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="single-product">
                                    <div class="product-image">
                                        <a href="shop-single.html">
                                            <img src="frontend/assets//images/product/product-4.jpg" alt="">
                                        </a>

                                        <div class="action-links">
                                            <ul>
                                                <li><a href="cart.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Add to cart"><i class="icon-shopping-bag"></i></a></li>
                                                <li><a href="compare.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Compare"><i class="icon-sliders"></i></a></li>
                                                <li><a href="wishlist.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                                                <li><a href="javascript:void(0);" data-bs-tooltip="tooltip" data-bs-placement="left" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content text-center">
                                        <div class="rating">
                                            <div class="rating-on" style="width: 80%;"></div>
                                        </div>
                                        <h4 class="product-name"><a href="shop-single.html">Foxglove Flower</a></h4>
                                        <div class="price-box">
                                            <span class="current-price">Rs.700</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="single-product">
                                    <div class="product-image">
                                        <a href="shop-single.html">
                                            <img src="frontend/assets//images/product/product-5.jpg" alt="">
                                        </a>

                                        <span class="sticker-new label-sale">-18%</span>

                                        <div class="action-links">
                                            <ul>
                                                <li><a href="cart.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Add to cart"><i class="icon-shopping-bag"></i></a></li>
                                                <li><a href="compare.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Compare"><i class="icon-sliders"></i></a></li>
                                                <li><a href="wishlist.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                                                <li><a href="javascript:void(0);" data-bs-tooltip="tooltip" data-bs-placement="left" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content text-center">
                                        <div class="rating">
                                            <div class="rating-on" style="width: 80%;"></div>
                                        </div>
                                        <h4 class="product-name"><a href="shop-single.html">Summer Savory</a></h4>
                                        <div class="price-box">
                                            <span class="current-price">RS.400</span>
                                            <span class="old-price">Rs.500</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="single-product">
                                    <div class="product-image">
                                        <a href="shop-single.html">
                                            <img src="frontend/assets//images/product/product-6.jpg" alt="">
                                        </a>

                                        <span class="sticker-new label-sale">-10%</span>

                                        <div class="action-links">
                                            <ul>
                                                <li><a href="cart.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Add to cart"><i class="icon-shopping-bag"></i></a></li>
                                                <li><a href="compare.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Compare"><i class="icon-sliders"></i></a></li>
                                                <li><a href="wishlist.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                                                <li><a href="javascript:void(0);" data-bs-tooltip="tooltip" data-bs-placement="left" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content text-center">
                                        <div class="rating">
                                            <div class="rating-on" style="width: 80%;"></div>
                                        </div>
                                        <h4 class="product-name"><a href="shop-single.html">Wild Roses</a></h4>
                                        <div class="price-box">
                                            <span class="current-price">Rs.700</span>
                                            <span class="old-price">Rs.850</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="single-product">
                                    <div class="product-image">
                                        <a href="shop-single.html">
                                            <img src="frontend/assets//images/product/product-7.jpg" alt="">
                                        </a>

                                        <div class="action-links">
                                            <ul>
                                                <li><a href="cart.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Add to cart"><i class="icon-shopping-bag"></i></a></li>
                                                <li><a href="compare.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Compare"><i class="icon-sliders"></i></a></li>
                                                <li><a href="wishlist.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                                                <li><a href="javascript:void(0);" data-bs-tooltip="tooltip" data-bs-placement="left" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content text-center">
                                        <div class="rating">
                                            <div class="rating-on" style="width: 80%;"></div>
                                        </div>
                                        <h4 class="product-name"><a href="shop-single.html">Sweet Alyssum</a></h4>
                                        <div class="price-box">
                                            <span class="current-price">Rs.500</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="single-product">
                                    <div class="product-image">
                                        <a href="shop-single.html">
                                            <img src="frontend/assets//images/product/product-8.jpg" alt="">
                                        </a>

                                        <span class="sticker-new label-sale">-34%</span>

                                        <div class="action-links">
                                            <ul>
                                                <li><a href="cart.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Add to cart"><i class="icon-shopping-bag"></i></a></li>
                                                <li><a href="compare.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Compare"><i class="icon-sliders"></i></a></li>
                                                <li><a href="wishlist.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                                                <li><a href="javascript:void(0);" data-bs-tooltip="tooltip" data-bs-placement="left" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content text-center">
                                        <div class="rating">
                                            <div class="rating-on" style="width: 80%;"></div>
                                        </div>
                                        <h4 class="product-name"><a href="shop-single.html">Lity Majesty Palm</a></h4>
                                        <div class="price-box">
                                            <span class="current-price">Rs.900</span>
                                            <span class="old-price">RS.1200</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="single-product">
                                    <div class="product-image">
                                        <a href="shop-single.html">
                                            <img src="frontend/assets//images/product/product-9.jpg" alt="">
                                        </a>

                                        <span class="sticker-new soldout-title">Soldout</span>

                                        <div class="action-links">
                                            <ul>
                                                <li><a href="cart.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Add to cart"><i class="icon-shopping-bag"></i></a></li>
                                                <li><a href="compare.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Compare"><i class="icon-sliders"></i></a></li>
                                                <li><a href="wishlist.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                                                <li><a href="javascript:void(0);" data-bs-tooltip="tooltip" data-bs-placement="left" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content text-center">
                                        <div class="rating">
                                            <div class="rating-on" style="width: 80%;"></div>
                                        </div>
                                        <h4 class="product-name"><a href="shop-single.html">Majesty Palm</a></h4>
                                        <div class="price-box">
                                            <span class="current-price">Rs.900</span>
                                            <span class="old-price">Rs.1200</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Add Arrows -->
                        <div class="swiper-next"><i class="fa fa-angle-right"></i></div>
                        <div class="swiper-prev"><i class="fa fa-angle-left"></i></div>
                    </div>
                </div>
            </div>
        </div>
        <!--New Product End-->



        <!--About Start-->
        <div class="about-area section-padding-4">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="about-image">
                            <img src="frontend/assets//images/about/about.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-content">
                            <h2 class="title">Suprise Your Valentine! Let us arrange a smile For Her.</h2>
                            <p>Where flowers are our inspiration to create lasting memories. Whatever the occasion inspiration to create lasting memories.... </p>
                            <ul>
                                <li> Hand picked just for you. </li>
                            </ul>
                            {{-- <div class="about-btn">
                                <a href="#" class="btn btn-primary btn-round">More Details</a>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--About End-->



        <!--New Product Start-->
        <div class="features-product-area section-padding-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-9 col-sm-11">
                        <div class="section-title text-center">
                            <h2 class="title">Featured Items</h2>
                            <p>A perfect blend of creativity, energy, communication, happiness and love. Let us arrange a smile for you.</p>
                        </div>
                    </div>
                </div>
                <div class="product-wrapper">
                    <div class="product-tab-menu">
                        <ul class="nav justify-content-center" role="tablist">
                            <li><a class="active" data-bs-toggle="tab" href="#tab1" role="tab">New</a></li>
                            <li><a data-bs-toggle="tab" href="#tab2" role="tab">Featured</a></li>
                            <li><a data-bs-toggle="tab" href="#tab3" role="tab">Best Sellers</a></li>
                        </ul>
                    </div>

                    <div class="tab-content product-items-tab">
                        <div class="tab-pane fade show active" id="tab1" role="tabpanel">
                            <div class="swiper-container product-active">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="single-product">
                                            <div class="product-image">
                                                <a href="shop-single.html">
                                                    <img src="frontend/assets//images/product/product-8.jpg" alt="">
                                                </a>

                                                <span class="sticker-new label-sale">-34%</span>

                                                <div class="action-links">
                                                    <ul>
                                                        <li><a href="cart.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Add to cart"><i class="icon-shopping-bag"></i></a></li>
                                                        <li><a href="compare.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Compare"><i class="icon-sliders"></i></a></li>
                                                        <li><a href="wishlist.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                                                        <li><a href="javascript:void(0);" data-bs-tooltip="tooltip" data-bs-placement="left" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content text-center">
                                                <div class="rating">
                                                    <div class="rating-on" style="width: 80%;"></div>
                                                </div>
                                                <h4 class="product-name"><a href="shop-single.html">Lity Majesty Palm</a></h4>
                                                <div class="price-box">
                                                    <span class="current-price">Rs.700</span>
                                                    <span class="old-price">Rs.900</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="single-product">
                                            <div class="product-image">
                                                <a href="shop-single.html">
                                                    <img src="frontend/assets//images/product/product-7.jpg" alt="">
                                                </a>

                                                <div class="action-links">
                                                    <ul>
                                                        <li><a href="cart.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Add to cart"><i class="icon-shopping-bag"></i></a></li>
                                                        <li><a href="compare.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Compare"><i class="icon-sliders"></i></a></li>
                                                        <li><a href="wishlist.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                                                        <li><a href="javascript:void(0);" data-bs-tooltip="tooltip" data-bs-placement="left" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content text-center">
                                                <div class="rating">
                                                    <div class="rating-on" style="width: 80%;"></div>
                                                </div>
                                                <h4 class="product-name"><a href="shop-single.html">Sweet Alyssum</a></h4>
                                                <div class="price-box">
                                                    <span class="current-price">Rs.500</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="single-product">
                                            <div class="product-image">
                                                <a href="shop-single.html">
                                                    <img src="frontend/assets//images/product/product-6.jpg" alt="">
                                                </a>

                                                <span class="sticker-new label-sale">-10%</span>

                                                <div class="action-links">
                                                    <ul>
                                                        <li><a href="cart.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Add to cart"><i class="icon-shopping-bag"></i></a></li>
                                                        <li><a href="compare.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Compare"><i class="icon-sliders"></i></a></li>
                                                        <li><a href="wishlist.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                                                        <li><a href="javascript:void(0);" data-bs-tooltip="tooltip" data-bs-placement="left" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content text-center">
                                                <div class="rating">
                                                    <div class="rating-on" style="width: 80%;"></div>
                                                </div>
                                                <h4 class="product-name"><a href="shop-single.html">Wild Roses</a></h4>
                                                <div class="price-box">
                                                    <span class="current-price">Rs.900</span>
                                                    <span class="old-price">Rs.1000</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="single-product">
                                            <div class="product-image">
                                                <a href="shop-single.html">
                                                    <img src="frontend/assets//images/product/product-5.jpg" alt="">
                                                </a>

                                                <span class="sticker-new label-sale">-18%</span>

                                                <div class="action-links">
                                                    <ul>
                                                        <li><a href="cart.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Add to cart"><i class="icon-shopping-bag"></i></a></li>
                                                        <li><a href="compare.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Compare"><i class="icon-sliders"></i></a></li>
                                                        <li><a href="wishlist.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                                                        <li><a href="javascript:void(0);" data-bs-tooltip="tooltip" data-bs-placement="left" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content text-center">
                                                <div class="rating">
                                                    <div class="rating-on" style="width: 80%;"></div>
                                                </div>
                                                <h4 class="product-name"><a href="shop-single.html">Summer Savory</a></h4>
                                                <div class="price-box">
                                                    <span class="current-price">Rs.400</span>
                                                    <span class="old-price">Rs.700</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="single-product">
                                            <div class="product-image">
                                                <a href="shop-single.html">
                                                    <img src="frontend/assets//images/product/product-1.jpg" alt="">
                                                </a>

                                                <span class="sticker-new soldout-title">Soldout</span>

                                                <div class="action-links">
                                                    <ul>
                                                        <li><a href="cart.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Add to cart"><i class="icon-shopping-bag"></i></a></li>
                                                        <li><a href="compare.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Compare"><i class="icon-sliders"></i></a></li>
                                                        <li><a href="wishlist.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                                                        <li><a href="javascript:void(0);" data-bs-tooltip="tooltip" data-bs-placement="left" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content text-center">
                                                <div class="rating">
                                                    <div class="rating-on" style="width: 80%;"></div>
                                                </div>
                                                <h4 class="product-name"><a href="shop-single.html">Spring Snowflake</a></h4>
                                                <div class="price-box">
                                                    <span class="current-price">Rs.800</span>
                                                    <span class="old-price">Rs.1100</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="single-product">
                                            <div class="product-image">
                                                <a href="shop-single.html">
                                                    <img src="frontend/assets//images/product/product-2.jpg" alt="">
                                                </a>

                                                <div class="action-links">
                                                    <ul>
                                                        <li><a href="cart.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Add to cart"><i class="icon-shopping-bag"></i></a></li>
                                                        <li><a href="compare.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Compare"><i class="icon-sliders"></i></a></li>
                                                        <li><a href="wishlist.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                                                        <li><a href="javascript:void(0);" data-bs-tooltip="tooltip" data-bs-placement="left" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content text-center">
                                                <div class="rating">
                                                    <div class="rating-on" style="width: 80%;"></div>
                                                </div>
                                                <h4 class="product-name"><a href="shop-single.html">Rock Soapwort</a></h4>
                                                <div class="price-box">
                                                    <span class="current-price">Rs.500</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="single-product">
                                            <div class="product-image">
                                                <a href="shop-single.html">
                                                    <img src="frontend/assets//images/product/product-2.jpg" alt="">
                                                </a>

                                                <span class="sticker-new label-sale">-27%</span>

                                                <div class="action-links">
                                                    <ul>
                                                        <li><a href="cart.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Add to cart"><i class="icon-shopping-bag"></i></a></li>
                                                        <li><a href="compare.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Compare"><i class="icon-sliders"></i></a></li>
                                                        <li><a href="wishlist.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                                                        <li><a href="javascript:void(0);" data-bs-tooltip="tooltip" data-bs-placement="left" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content text-center">
                                                <div class="rating">
                                                    <div class="rating-on" style="width: 80%;"></div>
                                                </div>
                                                <h4 class="product-name"><a href="shop-single.html">Rock Soapwort</a></h4>
                                                <div class="price-box">
                                                    <span class="current-price">Rs.550</span>
                                                    <span class="old-price">Rs.750</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="single-product">
                                            <div class="product-image">
                                                <a href="shop-single.html">
                                                    <img src="frontend/assets//images/product/product-9.jpg" alt="">
                                                </a>

                                                <span class="sticker-new soldout-title">Soldout</span>

                                                <div class="action-links">
                                                    <ul>
                                                        <li><a href="cart.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Add to cart"><i class="icon-shopping-bag"></i></a></li>
                                                        <li><a href="compare.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Compare"><i class="icon-sliders"></i></a></li>
                                                        <li><a href="wishlist.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                                                        <li><a href="javascript:void(0);" data-bs-tooltip="tooltip" data-bs-placement="left" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content text-center">
                                                <div class="rating">
                                                    <div class="rating-on" style="width: 80%;"></div>
                                                </div>
                                                <h4 class="product-name"><a href="shop-single.html">Majesty Palm</a></h4>
                                                <div class="price-box">
                                                    <span class="current-price">Rs.900</span>
                                                    <span class="old-price">Rs.1200</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="single-product">
                                            <div class="product-image">
                                                <a href="shop-single.html">
                                                    <img src="frontend/assets//images/product/product-5.jpg" alt="">
                                                </a>

                                                <span class="sticker-new label-sale">-18%</span>

                                                <div class="action-links">
                                                    <ul>
                                                        <li><a href="cart.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Add to cart"><i class="icon-shopping-bag"></i></a></li>
                                                        <li><a href="compare.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Compare"><i class="icon-sliders"></i></a></li>
                                                        <li><a href="wishlist.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                                                        <li><a href="javascript:void(0);" data-bs-tooltip="tooltip" data-bs-placement="left" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content text-center">
                                                <div class="rating">
                                                    <div class="rating-on" style="width: 80%;"></div>
                                                </div>
                                                <h4 class="product-name"><a href="shop-single.html">Summer Savory</a></h4>
                                                <div class="price-box">
                                                    <span class="current-price">Rs.400</span>
                                                    <span class="old-price">Rs.850</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="single-product">
                                            <div class="product-image">
                                                <a href="shop-single.html">
                                                    <img src="frontend/assets//images/product/product-4.jpg" alt="">
                                                </a>

                                                <div class="action-links">
                                                    <ul>
                                                        <li><a href="cart.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Add to cart"><i class="icon-shopping-bag"></i></a></li>
                                                        <li><a href="compare.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Compare"><i class="icon-sliders"></i></a></li>
                                                        <li><a href="wishlist.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                                                        <li><a href="javascript:void(0);" data-bs-tooltip="tooltip" data-bs-placement="left" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content text-center">
                                                <div class="rating">
                                                    <div class="rating-on" style="width: 80%;"></div>
                                                </div>
                                                <h4 class="product-name"><a href="shop-single.html">Foxglove Flower</a></h4>
                                                <div class="price-box">
                                                    <span class="current-price">Rs.890</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="single-product">
                                            <div class="product-image">
                                                <a href="shop-single.html">
                                                    <img src="frontend/assets//images/product/product-6.jpg" alt="">
                                                </a>

                                                <span class="sticker-new label-sale">-10%</span>

                                                <div class="action-links">
                                                    <ul>
                                                        <li><a href="cart.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Add to cart"><i class="icon-shopping-bag"></i></a></li>
                                                        <li><a href="compare.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Compare"><i class="icon-sliders"></i></a></li>
                                                        <li><a href="wishlist.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                                                        <li><a href="javascript:void(0);" data-bs-tooltip="tooltip" data-bs-placement="left" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content text-center">
                                                <div class="rating">
                                                    <div class="rating-on" style="width: 80%;"></div>
                                                </div>
                                                <h4 class="product-name"><a href="shop-single.html">Wild Roses</a></h4>
                                                <div class="price-box">
                                                    <span class="current-price">Rs.850</span>
                                                    <span class="old-price">Rs.990</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="single-product">
                                            <div class="product-image">
                                                <a href="shop-single.html">
                                                    <img src="frontend/assets//images/product/product-3.jpg" alt="">
                                                </a>

                                                <span class="sticker-new label-sale">-35%</span>

                                                <div class="action-links">
                                                    <ul>
                                                        <li><a href="cart.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Add to cart"><i class="icon-shopping-bag"></i></a></li>
                                                        <li><a href="compare.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Compare"><i class="icon-sliders"></i></a></li>
                                                        <li><a href="wishlist.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                                                        <li><a href="javascript:void(0);" data-bs-tooltip="tooltip" data-bs-placement="left" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>

                                                <div class="product-countdown">
                                                    <div data-countdown="2020/12/31"></div>
                                                </div>

                                            </div>
                                            <div class="product-content text-center">
                                                <div class="rating">
                                                    <div class="rating-on" style="width: 80%;"></div>
                                                </div>
                                                <h4 class="product-name"><a href="shop-single.html">Scarlet Sage</a></h4>
                                                <div class="price-box">
                                                    <span class="current-price">Rs.700</span>
                                                    <span class="old-price">Rs.850</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="single-product">
                                            <div class="product-image">
                                                <a href="shop-single.html">
                                                    <img src="frontend/assets//images/product/product-7.jpg" alt="">
                                                </a>

                                                <div class="action-links">
                                                    <ul>
                                                        <li><a href="cart.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Add to cart"><i class="icon-shopping-bag"></i></a></li>
                                                        <li><a href="compare.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Compare"><i class="icon-sliders"></i></a></li>
                                                        <li><a href="wishlist.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                                                        <li><a href="javascript:void(0);" data-bs-tooltip="tooltip" data-bs-placement="left" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content text-center">
                                                <div class="rating">
                                                    <div class="rating-on" style="width: 80%;"></div>
                                                </div>
                                                <h4 class="product-name"><a href="shop-single.html">Sweet Alyssum</a></h4>
                                                <div class="price-box">
                                                    <span class="current-price">Rs.500</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="single-product">
                                            <div class="product-image">
                                                <a href="shop-single.html">
                                                    <img src="frontend/assets//images/product/product-9.jpg" alt="">
                                                </a>

                                                <span class="sticker-new soldout-title">Soldout</span>

                                                <div class="action-links">
                                                    <ul>
                                                        <li><a href="cart.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Add to cart"><i class="icon-shopping-bag"></i></a></li>
                                                        <li><a href="compare.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Compare"><i class="icon-sliders"></i></a></li>
                                                        <li><a href="wishlist.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                                                        <li><a href="javascript:void(0);" data-bs-tooltip="tooltip" data-bs-placement="left" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content text-center">
                                                <div class="rating">
                                                    <div class="rating-on" style="width: 80%;"></div>
                                                </div>
                                                <h4 class="product-name"><a href="shop-single.html">Majesty Palm</a></h4>
                                                <div class="price-box">
                                                    <span class="current-price">Rs.900</span>
                                                    <span class="old-price">Rs.1200</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="single-product">
                                            <div class="product-image">
                                                <a href="shop-single.html">
                                                    <img src="frontend/assets//images/product/product-8.jpg" alt="">
                                                </a>

                                                <span class="sticker-new label-sale">-34%</span>

                                                <div class="action-links">
                                                    <ul>
                                                        <li><a href="cart.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Add to cart"><i class="icon-shopping-bag"></i></a></li>
                                                        <li><a href="compare.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Compare"><i class="icon-sliders"></i></a></li>
                                                        <li><a href="wishlist.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                                                        <li><a href="javascript:void(0);" data-bs-tooltip="tooltip" data-bs-placement="left" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content text-center">
                                                <div class="rating">
                                                    <div class="rating-on" style="width: 80%;"></div>
                                                </div>
                                                <h4 class="product-name"><a href="shop-single.html">Lity Majesty Palm</a></h4>
                                                <div class="price-box">
                                                    <span class="current-price">Rs.500</span>
                                                    <span class="old-price">Rs.750</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="single-product">
                                            <div class="product-image">
                                                <a href="shop-single.html">
                                                    <img src="frontend/assets//images/product/product-1.jpg" alt="">
                                                </a>

                                                <span class="sticker-new soldout-title">Soldout</span>

                                                <div class="action-links">
                                                    <ul>
                                                        <li><a href="cart.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Add to cart"><i class="icon-shopping-bag"></i></a></li>
                                                        <li><a href="compare.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Compare"><i class="icon-sliders"></i></a></li>
                                                        <li><a href="wishlist.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                                                        <li><a href="javascript:void(0);" data-bs-tooltip="tooltip" data-bs-placement="left" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content text-center">
                                                <div class="rating">
                                                    <div class="rating-on" style="width: 80%;"></div>
                                                </div>
                                                <h4 class="product-name"><a href="shop-single.html">Spring Snowflake</a></h4>
                                                <div class="price-box">
                                                    <span class="current-price">Rs.700</span>
                                                    <span class="old-price">Rs.1000</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="single-product">
                                            <div class="product-image">
                                                <a href="shop-single.html">
                                                    <img src="frontend/assets//images/product/product-9.jpg" alt="">
                                                </a>

                                                <span class="sticker-new soldout-title">Soldout</span>

                                                <div class="action-links">
                                                    <ul>
                                                        <li><a href="cart.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Add to cart"><i class="icon-shopping-bag"></i></a></li>
                                                        <li><a href="compare.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Compare"><i class="icon-sliders"></i></a></li>
                                                        <li><a href="wishlist.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                                                        <li><a href="javascript:void(0);" data-bs-tooltip="tooltip" data-bs-placement="left" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content text-center">
                                                <div class="rating">
                                                    <div class="rating-on" style="width: 80%;"></div>
                                                </div>
                                                <h4 class="product-name"><a href="shop-single.html">Majesty Palm</a></h4>
                                                <div class="price-box">
                                                    <span class="current-price">Rs.900</span>
                                                    <span class="old-price">Rs.1200</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="single-product">
                                            <div class="product-image">
                                                <a href="shop-single.html">
                                                    <img src="frontend/assets//images/product/product-8.jpg" alt="">
                                                </a>

                                                <span class="sticker-new label-sale">-34%</span>

                                                <div class="action-links">
                                                    <ul>
                                                        <li><a href="cart.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Add to cart"><i class="icon-shopping-bag"></i></a></li>
                                                        <li><a href="compare.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Compare"><i class="icon-sliders"></i></a></li>
                                                        <li><a href="wishlist.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                                                        <li><a href="javascript:void(0);" data-bs-tooltip="tooltip" data-bs-placement="left" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content text-center">
                                                <div class="rating">
                                                    <div class="rating-on" style="width: 80%;"></div>
                                                </div>
                                                <h4 class="product-name"><a href="shop-single.html">Lity Majesty Palm</a></h4>
                                                <div class="price-box">
                                                    <span class="current-price">RS.850</span>
                                                    <span class="old-price">RS.1150</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Add Arrows -->
                                <div class="swiper-next"><i class="fa fa-angle-right"></i></div>
                                <div class="swiper-prev"><i class="fa fa-angle-left"></i></div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab2" role="tabpanel">
                            <div class="swiper-container product-active">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="single-product">
                                            <div class="product-image">
                                                <a href="shop-single.html">
                                                    <img src="frontend/assets//images/product/product-2.jpg" alt="">
                                                </a>

                                                <span class="sticker-new label-sale">-27%</span>

                                                <div class="action-links">
                                                    <ul>
                                                        <li><a href="cart.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Add to cart"><i class="icon-shopping-bag"></i></a></li>
                                                        <li><a href="compare.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Compare"><i class="icon-sliders"></i></a></li>
                                                        <li><a href="wishlist.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                                                        <li><a href="javascript:void(0);" data-bs-tooltip="tooltip" data-bs-placement="left" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content text-center">
                                                <div class="rating">
                                                    <div class="rating-on" style="width: 80%;"></div>
                                                </div>
                                                <h4 class="product-name"><a href="shop-single.html">Rock Soapwort</a></h4>
                                                <div class="price-box">
                                                    <span class="current-price">Rs.500</span>
                                                    <span class="old-price">Rs.700</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="single-product">
                                            <div class="product-image">
                                                <a href="shop-single.html">
                                                    <img src="frontend/assets//images/product/product-9.jpg" alt="">
                                                </a>

                                                <span class="sticker-new soldout-title">Soldout</span>

                                                <div class="action-links">
                                                    <ul>
                                                        <li><a href="cart.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Add to cart"><i class="icon-shopping-bag"></i></a></li>
                                                        <li><a href="compare.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Compare"><i class="icon-sliders"></i></a></li>
                                                        <li><a href="wishlist.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                                                        <li><a href="javascript:void(0);" data-bs-tooltip="tooltip" data-bs-placement="left" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content text-center">
                                                <div class="rating">
                                                    <div class="rating-on" style="width: 80%;"></div>
                                                </div>
                                                <h4 class="product-name"><a href="shop-single.html">Majesty Palm</a></h4>
                                                <div class="price-box">
                                                    <span class="current-price">RS.850</span>
                                                    <span class="old-price">RS.1150</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="single-product">
                                            <div class="product-image">
                                                <a href="shop-single.html">
                                                    <img src="frontend/assets//images/product/product-6.jpg" alt="">
                                                </a>

                                                <span class="sticker-new label-sale">-10%</span>

                                                <div class="action-links">
                                                    <ul>
                                                        <li><a href="cart.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Add to cart"><i class="icon-shopping-bag"></i></a></li>
                                                        <li><a href="compare.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Compare"><i class="icon-sliders"></i></a></li>
                                                        <li><a href="wishlist.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                                                        <li><a href="javascript:void(0);" data-bs-tooltip="tooltip" data-bs-placement="left" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content text-center">
                                                <div class="rating">
                                                    <div class="rating-on" style="width: 80%;"></div>
                                                </div>
                                                <h4 class="product-name"><a href="shop-single.html">Wild Roses</a></h4>
                                                <div class="price-box">
                                                    <span class="current-price">RS.850</span>
                                                    <span class="old-price">RS.1250</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="single-product">
                                            <div class="product-image">
                                                <a href="shop-single.html">
                                                    <img src="frontend/assets//images/product/product-5.jpg" alt="">
                                                </a>

                                                <span class="sticker-new label-sale">-18%</span>

                                                <div class="action-links">
                                                    <ul>
                                                        <li><a href="cart.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Add to cart"><i class="icon-shopping-bag"></i></a></li>
                                                        <li><a href="compare.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Compare"><i class="icon-sliders"></i></a></li>
                                                        <li><a href="wishlist.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                                                        <li><a href="javascript:void(0);" data-bs-tooltip="tooltip" data-bs-placement="left" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content text-center">
                                                <div class="rating">
                                                    <div class="rating-on" style="width: 80%;"></div>
                                                </div>
                                                <h4 class="product-name"><a href="shop-single.html">Summer Savory</a></h4>
                                                <div class="price-box">
                                                    <span class="current-price">RS.450</span>
                                                    <span class="old-price">RS.850</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="single-product">
                                            <div class="product-image">
                                                <a href="shop-single.html">
                                                    <img src="frontend/assets//images/product/product-8.jpg" alt="">
                                                </a>

                                                <span class="sticker-new label-sale">-34%</span>

                                                <div class="action-links">
                                                    <ul>
                                                        <li><a href="cart.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Add to cart"><i class="icon-shopping-bag"></i></a></li>
                                                        <li><a href="compare.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Compare"><i class="icon-sliders"></i></a></li>
                                                        <li><a href="wishlist.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                                                        <li><a href="javascript:void(0);" data-bs-tooltip="tooltip" data-bs-placement="left" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content text-center">
                                                <div class="rating">
                                                    <div class="rating-on" style="width: 80%;"></div>
                                                </div>
                                                <h4 class="product-name"><a href="shop-single.html">Lity Majesty Palm</a></h4>
                                                <div class="price-box">
                                                    <span class="current-price">RS.850</span>
                                                    <span class="old-price">RS.1150</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="single-product">
                                            <div class="product-image">
                                                <a href="shop-single.html">
                                                    <img src="frontend/assets//images/product/product-7.jpg" alt="">
                                                </a>

                                                <div class="action-links">
                                                    <ul>
                                                        <li><a href="cart.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Add to cart"><i class="icon-shopping-bag"></i></a></li>
                                                        <li><a href="compare.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Compare"><i class="icon-sliders"></i></a></li>
                                                        <li><a href="wishlist.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                                                        <li><a href="javascript:void(0);" data-bs-tooltip="tooltip" data-bs-placement="left" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content text-center">
                                                <div class="rating">
                                                    <div class="rating-on" style="width: 80%;"></div>
                                                </div>
                                                <h4 class="product-name"><a href="shop-single.html">Sweet Alyssum</a></h4>
                                                <div class="price-box">
                                                    <span class="current-price">RS.500</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="single-product">
                                            <div class="product-image">
                                                <a href="shop-single.html">
                                                    <img src="frontend/assets//images/product/product-1.jpg" alt="">
                                                </a>

                                                <span class="sticker-new soldout-title">Soldout</span>

                                                <div class="action-links">
                                                    <ul>
                                                        <li><a href="cart.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Add to cart"><i class="icon-shopping-bag"></i></a></li>
                                                        <li><a href="compare.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Compare"><i class="icon-sliders"></i></a></li>
                                                        <li><a href="wishlist.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                                                        <li><a href="javascript:void(0);" data-bs-tooltip="tooltip" data-bs-placement="left" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content text-center">
                                                <div class="rating">
                                                    <div class="rating-on" style="width: 80%;"></div>
                                                </div>
                                                <h4 class="product-name"><a href="shop-single.html">Spring Snowflake</a></h4>
                                                <div class="price-box">
                                                    <span class="current-price">RS.850</span>
                                                    <span class="old-price">RS.1150</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="single-product">
                                            <div class="product-image">
                                                <a href="shop-single.html">
                                                    <img src="frontend/assets//images/product/product-2.jpg" alt="">
                                                </a>

                                                <div class="action-links">
                                                    <ul>
                                                        <li><a href="cart.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Add to cart"><i class="icon-shopping-bag"></i></a></li>
                                                        <li><a href="compare.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Compare"><i class="icon-sliders"></i></a></li>
                                                        <li><a href="wishlist.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                                                        <li><a href="javascript:void(0);" data-bs-tooltip="tooltip" data-bs-placement="left" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content text-center">
                                                <div class="rating">
                                                    <div class="rating-on" style="width: 80%;"></div>
                                                </div>
                                                <h4 class="product-name"><a href="shop-single.html">Rock Soapwort</a></h4>
                                                <div class="price-box">
                                                    <span class="current-price">RS.500</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="single-product">
                                            <div class="product-image">
                                                <a href="shop-single.html">
                                                    <img src="frontend/assets//images/product/product-7.jpg" alt="">
                                                </a>

                                                <div class="action-links">
                                                    <ul>
                                                        <li><a href="cart.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Add to cart"><i class="icon-shopping-bag"></i></a></li>
                                                        <li><a href="compare.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Compare"><i class="icon-sliders"></i></a></li>
                                                        <li><a href="wishlist.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                                                        <li><a href="javascript:void(0);" data-bs-tooltip="tooltip" data-bs-placement="left" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content text-center">
                                                <div class="rating">
                                                    <div class="rating-on" style="width: 80%;"></div>
                                                </div>
                                                <h4 class="product-name"><a href="shop-single.html">Sweet Alyssum</a></h4>
                                                <div class="price-box">
                                                    <span class="current-price">RS.500</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="single-product">
                                            <div class="product-image">
                                                <a href="shop-single.html">
                                                    <img src="frontend/assets//images/product/product-9.jpg" alt="">
                                                </a>

                                                <span class="sticker-new soldout-title">Soldout</span>

                                                <div class="action-links">
                                                    <ul>
                                                        <li><a href="cart.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Add to cart"><i class="icon-shopping-bag"></i></a></li>
                                                        <li><a href="compare.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Compare"><i class="icon-sliders"></i></a></li>
                                                        <li><a href="wishlist.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                                                        <li><a href="javascript:void(0);" data-bs-tooltip="tooltip" data-bs-placement="left" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content text-center">
                                                <div class="rating">
                                                    <div class="rating-on" style="width: 80%;"></div>
                                                </div>
                                                <h4 class="product-name"><a href="shop-single.html">Majesty Palm</a></h4>
                                                <div class="price-box">
                                                    <span class="current-price">RS.850</span>
                                                    <span class="old-price">RS.1150</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="single-product">
                                            <div class="product-image">
                                                <a href="shop-single.html">
                                                    <img src="frontend/assets//images/product/product-6.jpg" alt="">
                                                </a>

                                                <span class="sticker-new label-sale">-10%</span>

                                                <div class="action-links">
                                                    <ul>
                                                        <li><a href="cart.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Add to cart"><i class="icon-shopping-bag"></i></a></li>
                                                        <li><a href="compare.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Compare"><i class="icon-sliders"></i></a></li>
                                                        <li><a href="wishlist.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                                                        <li><a href="javascript:void(0);" data-bs-tooltip="tooltip" data-bs-placement="left" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content text-center">
                                                <div class="rating">
                                                    <div class="rating-on" style="width: 80%;"></div>
                                                </div>
                                                <h4 class="product-name"><a href="shop-single.html">Wild Roses</a></h4>
                                                <div class="price-box">
                                                    <span class="current-price">RS.1050</span>
                                                    <span class="old-price">RS.1250</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="single-product">
                                            <div class="product-image">
                                                <a href="shop-single.html">
                                                    <img src="frontend/assets//images/product/product-3.jpg" alt="">
                                                </a>

                                                <span class="sticker-new label-sale">-35%</span>

                                                <div class="action-links">
                                                    <ul>
                                                        <li><a href="cart.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Add to cart"><i class="icon-shopping-bag"></i></a></li>
                                                        <li><a href="compare.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Compare"><i class="icon-sliders"></i></a></li>
                                                        <li><a href="wishlist.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                                                        <li><a href="javascript:void(0);" data-bs-tooltip="tooltip" data-bs-placement="left" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>

                                                <div class="product-countdown">
                                                    <div data-countdown="2020/12/31"></div>
                                                </div>

                                            </div>
                                            <div class="product-content text-center">
                                                <div class="rating">
                                                    <div class="rating-on" style="width: 80%;"></div>
                                                </div>
                                                <h4 class="product-name"><a href="shop-single.html">Scarlet Sage</a></h4>
                                                <div class="price-box">
                                                    <span class="current-price">RS.450</span>
                                                    <span class="old-price">RS.650</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="single-product">
                                            <div class="product-image">
                                                <a href="shop-single.html">
                                                    <img src="frontend/assets//images/product/product-5.jpg" alt="">
                                                </a>

                                                <span class="sticker-new label-sale">-18%</span>

                                                <div class="action-links">
                                                    <ul>
                                                        <li><a href="cart.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Add to cart"><i class="icon-shopping-bag"></i></a></li>
                                                        <li><a href="compare.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Compare"><i class="icon-sliders"></i></a></li>
                                                        <li><a href="wishlist.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                                                        <li><a href="javascript:void(0);" data-bs-tooltip="tooltip" data-bs-placement="left" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content text-center">
                                                <div class="rating">
                                                    <div class="rating-on" style="width: 80%;"></div>
                                                </div>
                                                <h4 class="product-name"><a href="shop-single.html">Summer Savory</a></h4>
                                                <div class="price-box">
                                                    <span class="current-price">RS.450</span>
                                                    <span class="old-price">Rs.550</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="single-product">
                                            <div class="product-image">
                                                <a href="shop-single.html">
                                                    <img src="frontend/assets//images/product/product-4.jpg" alt="">
                                                </a>

                                                <div class="action-links">
                                                    <ul>
                                                        <li><a href="cart.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Add to cart"><i class="icon-shopping-bag"></i></a></li>
                                                        <li><a href="compare.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Compare"><i class="icon-sliders"></i></a></li>
                                                        <li><a href="wishlist.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                                                        <li><a href="javascript:void(0);" data-bs-tooltip="tooltip" data-bs-placement="left" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content text-center">
                                                <div class="rating">
                                                    <div class="rating-on" style="width: 80%;"></div>
                                                </div>
                                                <h4 class="product-name"><a href="shop-single.html">Foxglove Flower</a></h4>
                                                <div class="price-box">
                                                    <span class="current-price">RS.790</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="single-product">
                                            <div class="product-image">
                                                <a href="shop-single.html">
                                                    <img src="frontend/assets//images/product/product-9.jpg" alt="">
                                                </a>

                                                <span class="sticker-new soldout-title">Soldout</span>

                                                <div class="action-links">
                                                    <ul>
                                                        <li><a href="cart.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Add to cart"><i class="icon-shopping-bag"></i></a></li>
                                                        <li><a href="compare.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Compare"><i class="icon-sliders"></i></a></li>
                                                        <li><a href="wishlist.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                                                        <li><a href="javascript:void(0);" data-bs-tooltip="tooltip" data-bs-placement="left" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content text-center">
                                                <div class="rating">
                                                    <div class="rating-on" style="width: 80%;"></div>
                                                </div>
                                                <h4 class="product-name"><a href="shop-single.html">Majesty Palm</a></h4>
                                                <div class="price-box">
                                                    <span class="current-price">RS.850</span>
                                                    <span class="old-price">RS.1150</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="single-product">
                                            <div class="product-image">
                                                <a href="shop-single.html">
                                                    <img src="frontend/assets//images/product/product-8.jpg" alt="">
                                                </a>

                                                <span class="sticker-new label-sale">-34%</span>

                                                <div class="action-links">
                                                    <ul>
                                                        <li><a href="cart.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Add to cart"><i class="icon-shopping-bag"></i></a></li>
                                                        <li><a href="compare.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Compare"><i class="icon-sliders"></i></a></li>
                                                        <li><a href="wishlist.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                                                        <li><a href="javascript:void(0);" data-bs-tooltip="tooltip" data-bs-placement="left" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content text-center">
                                                <div class="rating">
                                                    <div class="rating-on" style="width: 80%;"></div>
                                                </div>
                                                <h4 class="product-name"><a href="shop-single.html">Lity Majesty Palm</a></h4>
                                                <div class="price-box">
                                                    <span class="current-price">RS.850</span>
                                                    <span class="old-price">RS.1150</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="single-product">
                                            <div class="product-image">
                                                <a href="shop-single.html">
                                                    <img src="frontend/assets//images/product/product-9.jpg" alt="">
                                                </a>

                                                <span class="sticker-new label-sale">-34%</span>

                                                <div class="action-links">
                                                    <ul>
                                                        <li><a href="cart.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Add to cart"><i class="icon-shopping-bag"></i></a></li>
                                                        <li><a href="compare.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Compare"><i class="icon-sliders"></i></a></li>
                                                        <li><a href="wishlist.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                                                        <li><a href="javascript:void(0);" data-bs-tooltip="tooltip" data-bs-placement="left" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content text-center">
                                                <div class="rating">
                                                    <div class="rating-on" style="width: 80%;"></div>
                                                </div>
                                                <h4 class="product-name"><a href="shop-single.html">Lity Majesty Palm</a></h4>
                                                <div class="price-box">
                                                    <span class="current-price">RS.850</span>
                                                    <span class="old-price">RS.1150</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="single-product">
                                            <div class="product-image">
                                                <a href="shop-single.html">
                                                    <img src="frontend/assets//images/product/product-1.jpg" alt="">
                                                </a>

                                                <span class="sticker-new soldout-title">Soldout</span>

                                                <div class="action-links">
                                                    <ul>
                                                        <li><a href="cart.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Add to cart"><i class="icon-shopping-bag"></i></a></li>
                                                        <li><a href="compare.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Compare"><i class="icon-sliders"></i></a></li>
                                                        <li><a href="wishlist.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                                                        <li><a href="javascript:void(0);" data-bs-tooltip="tooltip" data-bs-placement="left" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content text-center">
                                                <div class="rating">
                                                    <div class="rating-on" style="width: 80%;"></div>
                                                </div>
                                                <h4 class="product-name"><a href="shop-single.html">Spring Snowflake</a></h4>
                                                <div class="price-box">
                                                    <span class="current-price">Rs.800</span>
                                                    <span class="old-price">Rs.1150</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Add Arrows -->
                                <div class="swiper-next"><i class="fa fa-angle-right"></i></div>
                                <div class="swiper-prev"><i class="fa fa-angle-left"></i></div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab3" role="tabpanel">
                            <div class="swiper-container product-active">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="single-product">
                                            <div class="product-image">
                                                <a href="shop-single.html">
                                                    <img src="frontend/assets//images/product/product-8.jpg" alt="">
                                                </a>

                                                <span class="sticker-new label-sale">-34%</span>

                                                <div class="action-links">
                                                    <ul>
                                                        <li><a href="cart.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Add to cart"><i class="icon-shopping-bag"></i></a></li>
                                                        <li><a href="compare.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Compare"><i class="icon-sliders"></i></a></li>
                                                        <li><a href="wishlist.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                                                        <li><a href="javascript:void(0);" data-bs-tooltip="tooltip" data-bs-placement="left" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content text-center">
                                                <div class="rating">
                                                    <div class="rating-on" style="width: 80%;"></div>
                                                </div>
                                                <h4 class="product-name"><a href="shop-single.html">Lity Majesty Palm</a></h4>
                                                <div class="price-box">
                                                    <span class="current-price">Rs.800</span>
                                                    <span class="old-price">Rs.1150</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="single-product">
                                            <div class="product-image">
                                                <a href="shop-single.html">
                                                    <img src="frontend/assets//images/product/product-7.jpg" alt="">
                                                </a>

                                                <div class="action-links">
                                                    <ul>
                                                        <li><a href="cart.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Add to cart"><i class="icon-shopping-bag"></i></a></li>
                                                        <li><a href="compare.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Compare"><i class="icon-sliders"></i></a></li>
                                                        <li><a href="wishlist.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                                                        <li><a href="javascript:void(0);" data-bs-tooltip="tooltip" data-bs-placement="left" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content text-center">
                                                <div class="rating">
                                                    <div class="rating-on" style="width: 80%;"></div>
                                                </div>
                                                <h4 class="product-name"><a href="shop-single.html">Sweet Alyssum</a></h4>
                                                <div class="price-box">
                                                    <span class="current-price">Rs.500</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="single-product">
                                            <div class="product-image">
                                                <a href="shop-single.html">
                                                    <img src="frontend/assets//images/product/product-2.jpg" alt="">
                                                </a>

                                                <span class="sticker-new label-sale">-27%</span>

                                                <div class="action-links">
                                                    <ul>
                                                        <li><a href="cart.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Add to cart"><i class="icon-shopping-bag"></i></a></li>
                                                        <li><a href="compare.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Compare"><i class="icon-sliders"></i></a></li>
                                                        <li><a href="wishlist.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                                                        <li><a href="javascript:void(0);" data-bs-tooltip="tooltip" data-bs-placement="left" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content text-center">
                                                <div class="rating">
                                                    <div class="rating-on" style="width: 80%;"></div>
                                                </div>
                                                <h4 class="product-name"><a href="shop-single.html">Rock Soapwort</a></h4>
                                                <div class="price-box">
                                                    <span class="current-price">Rs.500</span>
                                                    <span class="old-price">Rs.750</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="single-product">
                                            <div class="product-image">
                                                <a href="shop-single.html">
                                                    <img src="frontend/assets//images/product/product-9.jpg" alt="">
                                                </a>

                                                <span class="sticker-new soldout-title">Soldout</span>

                                                <div class="action-links">
                                                    <ul>
                                                        <li><a href="cart.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Add to cart"><i class="icon-shopping-bag"></i></a></li>
                                                        <li><a href="compare.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Compare"><i class="icon-sliders"></i></a></li>
                                                        <li><a href="wishlist.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                                                        <li><a href="javascript:void(0);" data-bs-tooltip="tooltip" data-bs-placement="left" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content text-center">
                                                <div class="rating">
                                                    <div class="rating-on" style="width: 80%;"></div>
                                                </div>
                                                <h4 class="product-name"><a href="shop-single.html">Majesty Palm</a></h4>
                                                <div class="price-box">
                                                    <span class="current-price">Rs.950</span>
                                                    <span class="old-price">Rs.1250</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="single-product">
                                            <div class="product-image">
                                                <a href="shop-single.html">
                                                    <img src="frontend/assets//images/product/product-1.jpg" alt="">
                                                </a>

                                                <span class="sticker-new soldout-title">Soldout</span>

                                                <div class="action-links">
                                                    <ul>
                                                        <li><a href="cart.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Add to cart"><i class="icon-shopping-bag"></i></a></li>
                                                        <li><a href="compare.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Compare"><i class="icon-sliders"></i></a></li>
                                                        <li><a href="wishlist.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                                                        <li><a href="javascript:void(0);" data-bs-tooltip="tooltip" data-bs-placement="left" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content text-center">
                                                <div class="rating">
                                                    <div class="rating-on" style="width: 80%;"></div>
                                                </div>
                                                <h4 class="product-name"><a href="shop-single.html">Spring Snowflake</a></h4>
                                                <div class="price-box">
                                                    <span class="current-price">Rs.900</span>
                                                    <span class="old-price">Rs.1200</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="single-product">
                                            <div class="product-image">
                                                <a href="shop-single.html">
                                                    <img src="frontend/assets//images/product/product-2.jpg" alt="">
                                                </a>

                                                <div class="action-links">
                                                    <ul>
                                                        <li><a href="cart.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Add to cart"><i class="icon-shopping-bag"></i></a></li>
                                                        <li><a href="compare.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Compare"><i class="icon-sliders"></i></a></li>
                                                        <li><a href="wishlist.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                                                        <li><a href="javascript:void(0);" data-bs-tooltip="tooltip" data-bs-placement="left" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content text-center">
                                                <div class="rating">
                                                    <div class="rating-on" style="width: 80%;"></div>
                                                </div>
                                                <h4 class="product-name"><a href="shop-single.html">Rock Soapwort</a></h4>
                                                <div class="price-box">
                                                    <span class="current-price">Rs.500</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="single-product">
                                            <div class="product-image">
                                                <a href="shop-single.html">
                                                    <img src="frontend/assets//images/product/product-5.jpg" alt="">
                                                </a>

                                                <span class="sticker-new label-sale">-18%</span>

                                                <div class="action-links">
                                                    <ul>
                                                        <li><a href="cart.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Add to cart"><i class="icon-shopping-bag"></i></a></li>
                                                        <li><a href="compare.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Compare"><i class="icon-sliders"></i></a></li>
                                                        <li><a href="wishlist.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                                                        <li><a href="javascript:void(0);" data-bs-tooltip="tooltip" data-bs-placement="left" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content text-center">
                                                <div class="rating">
                                                    <div class="rating-on" style="width: 80%;"></div>
                                                </div>
                                                <h4 class="product-name"><a href="shop-single.html">Summer Savory</a></h4>
                                                <div class="price-box">
                                                    <span class="current-price">Rs.400</span>
                                                    <span class="old-price">Rs.750</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="single-product">
                                            <div class="product-image">
                                                <a href="shop-single.html">
                                                    <img src="frontend/assets//images/product/product-4.jpg" alt="">
                                                </a>

                                                <div class="action-links">
                                                    <ul>
                                                        <li><a href="cart.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Add to cart"><i class="icon-shopping-bag"></i></a></li>
                                                        <li><a href="compare.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Compare"><i class="icon-sliders"></i></a></li>
                                                        <li><a href="wishlist.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                                                        <li><a href="javascript:void(0);" data-bs-tooltip="tooltip" data-bs-placement="left" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content text-center">
                                                <div class="rating">
                                                    <div class="rating-on" style="width: 80%;"></div>
                                                </div>
                                                <h4 class="product-name"><a href="shop-single.html">Foxglove Flower</a></h4>
                                                <div class="price-box">
                                                    <span class="current-price">Rs.700</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="single-product">
                                            <div class="product-image">
                                                <a href="shop-single.html">
                                                    <img src="frontend/assets//images/product/product-6.jpg" alt="">
                                                </a>

                                                <span class="sticker-new label-sale">-10%</span>

                                                <div class="action-links">
                                                    <ul>
                                                        <li><a href="cart.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Add to cart"><i class="icon-shopping-bag"></i></a></li>
                                                        <li><a href="compare.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Compare"><i class="icon-sliders"></i></a></li>
                                                        <li><a href="wishlist.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                                                        <li><a href="javascript:void(0);" data-bs-tooltip="tooltip" data-bs-placement="left" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content text-center">
                                                <div class="rating">
                                                    <div class="rating-on" style="width: 80%;"></div>
                                                </div>
                                                <h4 class="product-name"><a href="shop-single.html">Wild Roses</a></h4>
                                                <div class="price-box">
                                                    <span class="current-price">Rs.750</span>
                                                    <span class="old-price">Rs.1150</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="single-product">
                                            <div class="product-image">
                                                <a href="shop-single.html">
                                                    <img src="frontend/assets//images/product/product-5.jpg" alt="">
                                                </a>

                                                <span class="sticker-new label-sale">-18%</span>

                                                <div class="action-links">
                                                    <ul>
                                                        <li><a href="cart.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Add to cart"><i class="icon-shopping-bag"></i></a></li>
                                                        <li><a href="compare.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Compare"><i class="icon-sliders"></i></a></li>
                                                        <li><a href="wishlist.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                                                        <li><a href="javascript:void(0);" data-bs-tooltip="tooltip" data-bs-placement="left" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content text-center">
                                                <div class="rating">
                                                    <div class="rating-on" style="width: 80%;"></div>
                                                </div>
                                                <h4 class="product-name"><a href="shop-single.html">Summer Savory</a></h4>
                                                <div class="price-box">
                                                    <span class="current-price">Rs.400</span>
                                                    <span class="old-price">Rs.850</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="single-product">
                                            <div class="product-image">
                                                <a href="shop-single.html">
                                                    <img src="frontend/assets//images/product/product-9.jpg" alt="">
                                                </a>

                                                <span class="sticker-new soldout-title">Soldout</span>

                                                <div class="action-links">
                                                    <ul>
                                                        <li><a href="cart.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Add to cart"><i class="icon-shopping-bag"></i></a></li>
                                                        <li><a href="compare.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Compare"><i class="icon-sliders"></i></a></li>
                                                        <li><a href="wishlist.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                                                        <li><a href="javascript:void(0);" data-bs-tooltip="tooltip" data-bs-placement="left" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content text-center">
                                                <div class="rating">
                                                    <div class="rating-on" style="width: 80%;"></div>
                                                </div>
                                                <h4 class="product-name"><a href="shop-single.html">Majesty Palm</a></h4>
                                                <div class="price-box">
                                                    <span class="current-price">Rs.900</span>
                                                    <span class="old-price">Rs.1200</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="single-product">
                                            <div class="product-image">
                                                <a href="shop-single.html">
                                                    <img src="frontend/assets//images/product/product-8.jpg" alt="">
                                                </a>

                                                <span class="sticker-new label-sale">-34%</span>

                                                <div class="action-links">
                                                    <ul>
                                                        <li><a href="cart.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Add to cart"><i class="icon-shopping-bag"></i></a></li>
                                                        <li><a href="compare.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Compare"><i class="icon-sliders"></i></a></li>
                                                        <li><a href="wishlist.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                                                        <li><a href="javascript:void(0);" data-bs-tooltip="tooltip" data-bs-placement="left" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content text-center">
                                                <div class="rating">
                                                    <div class="rating-on" style="width: 80%;"></div>
                                                </div>
                                                <h4 class="product-name"><a href="shop-single.html">Lity Majesty Palm</a></h4>
                                                <div class="price-box">
                                                    <span class="current-price">Rs.900</span>
                                                    <span class="old-price">Rs.1200</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="single-product">
                                            <div class="product-image">
                                                <a href="shop-single.html">
                                                    <img src="frontend/assets//images/product/product-7.jpg" alt="">
                                                </a>

                                                <div class="action-links">
                                                    <ul>
                                                        <li><a href="cart.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Add to cart"><i class="icon-shopping-bag"></i></a></li>
                                                        <li><a href="compare.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Compare"><i class="icon-sliders"></i></a></li>
                                                        <li><a href="wishlist.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                                                        <li><a href="javascript:void(0);" data-bs-tooltip="tooltip" data-bs-placement="left" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content text-center">
                                                <div class="rating">
                                                    <div class="rating-on" style="width: 80%;"></div>
                                                </div>
                                                <h4 class="product-name"><a href="shop-single.html">Sweet Alyssum</a></h4>
                                                <div class="price-box">
                                                    <span class="current-price">Rs.600</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="single-product">
                                            <div class="product-image">
                                                <a href="shop-single.html">
                                                    <img src="frontend/assets//images/product/product-9.jpg" alt="">
                                                </a>

                                                <span class="sticker-new soldout-title">Soldout</span>

                                                <div class="action-links">
                                                    <ul>
                                                        <li><a href="cart.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Add to cart"><i class="icon-shopping-bag"></i></a></li>
                                                        <li><a href="compare.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Compare"><i class="icon-sliders"></i></a></li>
                                                        <li><a href="wishlist.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                                                        <li><a href="javascript:void(0);" data-bs-tooltip="tooltip" data-bs-placement="left" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content text-center">
                                                <div class="rating">
                                                    <div class="rating-on" style="width: 80%;"></div>
                                                </div>
                                                <h4 class="product-name"><a href="shop-single.html">Majesty Palm</a></h4>
                                                <div class="price-box">
                                                    <span class="current-price">Rs.800</span>
                                                    <span class="old-price">Rs.600</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="single-product">
                                            <div class="product-image">
                                                <a href="shop-single.html">
                                                    <img src="frontend/assets//images/product/product-8.jpg" alt="">
                                                </a>

                                                <span class="sticker-new label-sale">-34%</span>

                                                <div class="action-links">
                                                    <ul>
                                                        <li><a href="cart.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Add to cart"><i class="icon-shopping-bag"></i></a></li>
                                                        <li><a href="compare.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Compare"><i class="icon-sliders"></i></a></li>
                                                        <li><a href="wishlist.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                                                        <li><a href="javascript:void(0);" data-bs-tooltip="tooltip" data-bs-placement="left" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content text-center">
                                                <div class="rating">
                                                    <div class="rating-on" style="width: 80%;"></div>
                                                </div>
                                                <h4 class="product-name"><a href="shop-single.html">Lity Majesty Palm</a></h4>
                                                <div class="price-box">
                                                    <span class="current-price">Rs.800</span>
                                                    <span class="old-price">Rs.1150</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="single-product">
                                            <div class="product-image">
                                                <a href="shop-single.html">
                                                    <img src="frontend/assets//images/product/product-1.jpg" alt="">
                                                </a>

                                                <span class="sticker-new soldout-title">Soldout</span>

                                                <div class="action-links">
                                                    <ul>
                                                        <li><a href="cart.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Add to cart"><i class="icon-shopping-bag"></i></a></li>
                                                        <li><a href="compare.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Compare"><i class="icon-sliders"></i></a></li>
                                                        <li><a href="wishlist.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                                                        <li><a href="javascript:void(0);" data-bs-tooltip="tooltip" data-bs-placement="left" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content text-center">
                                                <div class="rating">
                                                    <div class="rating-on" style="width: 80%;"></div>
                                                </div>
                                                <h4 class="product-name"><a href="shop-single.html">Spring Snowflake</a></h4>
                                                <div class="price-box">
                                                    <span class="current-price">Rs.950</span>
                                                    <span class="old-price">Rs.1200</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="single-product">
                                            <div class="product-image">
                                                <a href="shop-single.html">
                                                    <img src="frontend/assets//images/product/product-6.jpg" alt="">
                                                </a>

                                                <span class="sticker-new label-sale">-10%</span>

                                                <div class="action-links">
                                                    <ul>
                                                        <li><a href="cart.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Add to cart"><i class="icon-shopping-bag"></i></a></li>
                                                        <li><a href="compare.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Compare"><i class="icon-sliders"></i></a></li>
                                                        <li><a href="wishlist.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                                                        <li><a href="javascript:void(0);" data-bs-tooltip="tooltip" data-bs-placement="left" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content text-center">
                                                <div class="rating">
                                                    <div class="rating-on" style="width: 80%;"></div>
                                                </div>
                                                <h4 class="product-name"><a href="shop-single.html">Wild Roses</a></h4>
                                                <div class="price-box">
                                                    <span class="current-price">Rs.700</span>
                                                    <span class="old-price">Rs.850</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="single-product">
                                            <div class="product-image">
                                                <a href="shop-single.html">
                                                    <img src="frontend/assets//images/product/product-3.jpg" alt="">
                                                </a>

                                                <span class="sticker-new label-sale">-35%</span>

                                                <div class="action-links">
                                                    <ul>
                                                        <li><a href="cart.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Add to cart"><i class="icon-shopping-bag"></i></a></li>
                                                        <li><a href="compare.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Compare"><i class="icon-sliders"></i></a></li>
                                                        <li><a href="wishlist.html" data-bs-tooltip="tooltip" data-bs-placement="left" title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                                                        <li><a href="javascript:void(0);" data-bs-tooltip="tooltip" data-bs-placement="left" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>

                                                <div class="product-countdown">
                                                    <div data-countdown="2024/12/31"></div>
                                                </div>

                                            </div>
                                            <div class="product-content text-center">
                                                <div class="rating">
                                                    <div class="rating-on" style="width: 80%;"></div>
                                                </div>
                                                <h4 class="product-name"><a href="shop-single.html">Scarlet Sage</a></h4>
                                                <div class="price-box">
                                                    <span class="current-price">Rs.650</span>
                                                    <span class="old-price">Rs.800</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Add Arrows -->
                                <div class="swiper-next"><i class="fa fa-angle-right"></i></div>
                                <div class="swiper-prev"><i class="fa fa-angle-left"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--New Product End-->



        <!--Testimonial Start-->
        <div class="testimonial-area" style="background-image: url(frontend/assets//images/testimonial-bg.jpg);">
            <div class="container">
                <div class="swiper-container testimonial-active">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="single-testimonial text-center">
                                <p>"Blooming happiness, delivered to your door!"</p>

                                <div class="testimonial-author">
                                    <img src="frontend/assets//images/testimonial-img-1.png" alt="">
                                    <span class="author-name">Zunaisha/ COO</span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="single-testimonial text-center">
                                <p>"Say it with flowers, say it with us."</p>

                                <div class="testimonial-author">
                                    <img src="frontend/assets//images/testimonial-img-2.png" alt="">
                                    <span class="author-name">Komal / Founder</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Add Arrows -->
                    <div class="swiper-next"><i class="fa fa-angle-right"></i></div>
                    <div class="swiper-prev"><i class="fa fa-angle-left"></i></div>
                </div>
            </div>
        </div>
        <!--Testimonial End-->



        <!--Experts Start-->
        <div class="experts-area section-padding-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-9 col-sm-11">
                        <div class="section-title text-center">
                            <h2 class="title">Flower Experts</h2>
                            <p>"Petals of perfection, online and on time."A perfect blend of creativity, energy, communication, happiness and love. Let us arrange a smile for you.</p>
                        </div>
                    </div>
                </div>
                <div class="expert-wrapper">
                    <div class="row">
                        <div class="col-lg-3 col-sm-6">
                            <div class="single-expert text-center">
                                <div class="expert-image">
                                    <img src="frontend/assets//images/experts/team-1.jpg" alt="">
                                </div>
                                <div class="expert-content">
                                    <h4 class="name">Hafsa Maryam</h4>
                                    <p>Biologist</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="single-expert text-center">
                                <div class="expert-image">
                                    <img src="frontend/assets//images/experts/team-2.jpg" alt="">
                                </div>
                                <div class="expert-content">
                                    <h4 class="name">Inshrah Maryam </h4>
                                    <p>Photographer</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="single-expert text-center">
                                <div class="expert-image">
                                    <img src="frontend/assets//images/experts/team-3.jpg" alt="">
                                </div>
                                <div class="expert-content">
                                    <h4 class="name">Komal Asawar </h4>
                                    <p>Founder</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="single-expert text-center">
                                <div class="expert-image">
                                    <img src="frontend/assets//images/experts/team-4.jpg" alt="">
                                </div>
                                <div class="expert-content">
                                    <h4 class="name">Mahnoor Mudassar </h4>
                                    <p>Florist</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Experts End-->



        <!--Blog Start-->
        <div class="blog-area blog-bg section-padding-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-9 col-sm-11">
                        <div class="section-title text-center">
                            <h2 class="title">From our Blog</h2>
                            <p>"Your one-stop shop for blooming beauty."</p>
                        </div>
                    </div>
                </div>
                <div class="blog-wrapper">
                    <div class="swiper-container blog-active">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="single-blog">
                                    <div class="blog-image">
                                        <a href="blog-single-right-sidebar.html"><img src="frontend/assets//images/blog/blog-01.jpg" alt=""></a>
                                    </div>
                                    <div class="blog-content">
                                        <h4 class="title"><a href="blog-single-right-sidebar.html">Flower Beauty</a></h4>
                                        {{-- <div class="articles-date">
                                        </div> --}}
                                        <p> Fascinating facts about rare and exotic flowers.
                                            Flower-related myths, legends, and cultural stories.</p>

                                        <div class="blog-footer">
                                            <a class="more" href="blog-single-right-sidebar.html">Continue Reading</a>
                                            <p class="comment-count"><i class="icon-message-circle"></i> 0</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="single-blog">
                                    <div class="blog-image">
                                        <a href="blog-single-right-sidebar.html"><img src="frontend/assets//images/blog/blog-02.jpg" alt=""></a>
                                    </div>
                                    <div class="blog-content">
                                        <h4 class="title"><a href="blog-single-right-sidebar.html">Local Florists</a></h4>
                                        {{-- <div class="articles-date">
                                            <p>By <span>  Shopify Team HasTheme /  August 12, 2022</span></p>
                                        </div> --}}
                                        <p>Flowers for weddings, birthdays, anniversaries, and Creative centerpiece ideas for holidays and events.</p>

                                        <div class="blog-footer">
                                            <a class="more" href="blog-single-right-sidebar.html">Continue Reading</a>
                                            <p class="comment-count"><i class="icon-message-circle"></i> 0</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="single-blog">
                                    <div class="blog-image">
                                        <a href="blog-single-right-sidebar.html"><img src="frontend/assets//images/blog/blog-03.jpg" alt=""></a>
                                    </div>
                                    <div class="blog-content">
                                        <h4 class="title"><a href="blog-single-right-sidebar.html">Flower Power</a></h4>
                                        {{-- <div class="articles-date">
                                            <p>By <span>  Shopify Team HasTheme /  August 12, 2022</span></p>
                                        </div> --}}
                                        <p>Share touching stories from your customers about how flowers made their moments special.</p>

                                        <div class="blog-footer">
                                            <a class="more" href="blog-single-right-sidebar.html">Continue Reading</a>
                                            <p class="comment-count"><i class="icon-message-circle"></i> 0</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Add Arrows -->
                        <div class="swiper-next"><i class="fa fa-angle-right"></i></div>
                        <div class="swiper-prev"><i class="fa fa-angle-left"></i></div>
                    </div>
                </div>
            </div>
        </div>
        <!--Blog End-->



        <!--Newsletter Start-->
        <div class="newsletter-area section-padding-5">
            <div class="container">
                <div class="newsletter-form">
                    <div class="section-title text-center">
                        <h2 class="title">Join The Colorful Bunch!</h2>
                    </div>
                    <div class="form-wrapper">
                        <input type="text" placeholder="Your email address">
                        <button>Subscribe</button>
                        <i class="icon-mail"></i>
                    </div>
                </div>
            </div>
        </div>
        <!--Newsletter End-->



        <!--Footer Section Start-->
        <div class="footer-area">
            <div class="container">
                <div class="footer-widget-area section-padding-6">
                    <div class="row justify-content-between">

                        <!--Footer Widget Start-->
                        <div class="col-lg-4 col-md-6">
                            <div class="footer-widget">
                                <a class="footer-logo" href="#"><img src="frontend/assets//images/logo/logo-white.png" alt=""></a>
                                <div class="footer-widget-text">
                                    <p>A perfect blend of creativity, energy, communication, happiness and love. Let us arrange a smile for you. </p>
                                </div>
                                <div class="widget-social">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <!--Footer Widget End-->
                        </div>

                        <div class="col-lg-2 col-md-4 col-sm-6">
                            <div class="footer-widget">
                                <h4 class="footer-widget-title">Information</h4>

                                <div class="footer-widget-menu">
                                    <ul>
                                        <li><a href="#">Search Terms</a></li>
                                        <li><a href="#">Orders & Returns</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-2 col-md-4 col-sm-6">
                            <div class="footer-widget">
                                <h4 class="footer-widget-title">My Account</h4>

                                <div class="footer-widget-menu">
                                    <ul>
                                        <li><a href="#">Delivery</a></li>
                                        <li><a href="#">Legal Notice</a></li>
                                        <li><a href="#">Secure payment</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-2 col-md-4 col-sm-6">
                            <div class="footer-widget">
                                <h4 class="footer-widget-title">Help</h4>

                                <div class="footer-widget-menu">
                                    <ul>
                                        <li><a href="#">FAQ’s</a></li>
                                        <li><a href="#">Pricing Plans</a></li>
                                        <li><a href="#">Returns</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-2 col-md-4 col-sm-6">
                            <div class="footer-widget">
                                <h4 class="footer-widget-title">Customer Service</h4>

                                <div class="footer-widget-menu">
                                    <ul>
                                        <li><a href="#">Deliveries & Returns</a></li>
                                        <li><a href="#">Gift card</a></li>
                                        <li><a href="#">Legal Notice</a></li>
                                    </ul>
                                </div>
                            </div>

        <!--Copyright Section Start-->
        <div class="copyright-section">
            <div class="container">
                <div class="copyright-wrapper text-center d-lg-flex align-items-center justify-content-between">

                    <!--Right Start-->
                    <div class="copyright-content">
                        <p>Copyright 2024 &copy;All Rights Reserved Kngu </p>
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




        <!-- Quick View  Start-->
        <div class="modal fade" id="exampleModal">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="quick-view-image">
                                    <img src="frontend/assets//images/product-single/product-1.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="quick-view-content">
                                    <h4 class="product-title">Sweet Alyssum</h4>
                                    <div class="thumb-price">
                                        <span class="current-price">RS.850</span>
                                        <span class="old-price">RS.1150</span>
                                        <span class="discount">-34%</span>
                                    </div>
                                    <div class="product-rating">
                                        <ul class="rating-star">
                                            <li><i class="fa fa-star-o"></i></li>
                                            <li><i class="fa fa-star-o"></i></li>
                                            <li><i class="fa fa-star-o"></i></li>
                                            <li><i class="fa fa-star-o"></i></li>
                                            <li><i class="fa fa-star-o"></i></li>
                                        </ul>
                                        <span>No reviews</span>
                                    </div>
                                    <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will</p>

                                    <div class="quick-view-quantity-addcart d-flex flex-wrap">
                                        <form action="#">
                                            <div class="quantity d-inline-flex">
                                                <button type="button" class="sub"><i class="ti-minus"></i></button>
                                                <input type="text" value="1" />
                                                <button type="button" class="add"><i class="ti-plus"></i></button>
                                            </div>
                                        </form>
                                        <div class="addcart-btn">
                                            <button class="btn btn-primary">Add to cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Quick View Tags End-->


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


<!-- Mirrored from htmldemo.net/kngu/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 21 Nov 2024 15:55:01 GMT -->
</html>
@endsection

