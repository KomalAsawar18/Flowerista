@extends('layouts.main')
@section('title', 'Shop-single')
@section('main-container')
        <div class="overlay"></div>
        <!--Overlay-->
        <!--Page Banner Start-->
        <div class="page-banner" style="background-image: url(assets/images/testimonial-bg.jpg);">
            <div class="container">
                <div class="page-banner-content text-center">
                    <h2 class="title">Shop Single</h2>
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item"><a href="shop-grid-left-sidebar.html">Shop</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Shop Single</li>
                    </ol>
                </div>
            </div>
        </div>
        <!--Page Banner End-->

        <!--Shop Single Start-->
        <div class="shop-single-page section-padding-4">
            <div class="container">


                <!--Shop Single Start-->
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-8">
                        <div class="shop-image">
                            <div class="shop-single-preview-image">
                                <img class="product-zoom" src="assets/images/product-single/product-1.jpg" alt="">

                                <span class="sticker-new label-sale">-34%</span>
                            </div>
                            <div id="gallery_01" class="shop-single-thumb-image shop-thumb-active swiper-container">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide single-product-thumb">
                                        <a class="active" href="#" data-image="assets/images/product-single/product-1.jpg">
                                            <img src="assets/images/product-single/product-1.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="swiper-slide single-product-thumb">
                                        <a href="#" data-image="assets/images/product-single/product-2.jpg">
                                            <img src="assets/images/product-single/product-2.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="swiper-slide single-product-thumb">
                                        <a href="#" data-image="assets/images/product-single/product-3.jpg">
                                            <img src="assets/images/product-single/product-3.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="swiper-slide single-product-thumb">
                                        <a href="#" data-image="assets/images/product-single/product-4.jpg">
                                            <img src="assets/images/product-single/product-4.jpg" alt="">
                                        </a>
                                    </div>
                                </div>

                                <!-- Add Arrows -->
                                <div class="swiper-thumb-next"><i class="fa fa-angle-right"></i></div>
                                <div class="swiper-thumb-prev"><i class="fa fa-angle-left"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="shop-single-content">
                            <h3 class="title">Lity Majesty Palm</h3>
                            <span class="product-sku">SKU: <span>501</span></span>
                            <div class="product-rating">
                                <div class="rating">
                                    <div class="rating-on" style="width: 80%;"></div>
                                </div>
                                <span>No reviews</span>
                            </div>
                            <div class="thumb-price">
                                <span class="current-price">$19.00</span>
                                <span class="old-price">$29.00</span>
                                <span class="discount">-34%</span>
                            </div>
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>

                            <ul class="product-additional-information">
                                <li><button><i class="ti-ruler-pencil"></i> Size Guide</button></li>
                                <li><button><i class="fa fa-truck"></i> Shipping</button></li>
                                <li><button><i class="ti-email"></i> Ask About This product </button></li>
                            </ul>

                            <div class="product-quantity d-flex flex-wrap align-items-center">
                                <span class="quantity-title">Quantity: </span>
                                <form action="#">
                                    <div class="quantity d-flex">
                                        <button type="button" class="sub"><i class="ti-minus"></i></button>
                                        <input type="text" value="1" />
                                        <button type="button" class="add"><i class="ti-plus"></i></button>
                                    </div>
                                </form>
                            </div>

                            <div class="product-action d-flex flex-wrap">
                                <div class="action">
                                    <button class="btn btn-primary">Add to cart</button>
                                </div>
                                <div class="action">
                                    <a href="#"><i class="fa fa-heart"></i></a>
                                </div>
                            </div>

                            <div class="dynamic-checkout-button disabled">
                                <div class="checkout-checkbox">
                                    <input type="checkbox" id="disabled">
                                    <label for="disabled"><span></span> I agree with the terms and conditions </label>
                                </div>
                                <div class="checkout-btn">
                                    <button class="btn btn-primary">Buy it now</button>
                                </div>
                            </div>

                            <div class="custom-payment-options">
                                <p>Guaranteed safe checkout</p>

                                <ul class="payment-options">
                                    <li><img src="assets/images/payment-icon/payment-1.svg" alt=""></li>
                                    <li><img src="assets/images/payment-icon/payment-2.svg" alt=""></li>
                                    <li><img src="assets/images/payment-icon/payment-3.svg" alt=""></li>
                                    <li><img src="assets/images/payment-icon/payment-4.svg" alt=""></li>
                                    <li><img src="assets/images/payment-icon/payment-5.svg" alt=""></li>
                                    <li><img src="assets/images/payment-icon/payment-7.svg" alt=""></li>
                                </ul>
                            </div>

                            <div class="social-share">
                                <span class="share-title">Share:</span>
                                <ul class="social">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Shop Single End-->



                <!--Shop Single info Start-->
                <div class="shop-single-info">
                    <div class="shop-info-tab">
                        <ul class="nav justify-content-center">
                            <li class="nav-item"><a class="active" data-bs-toggle="tab" href="#tab1">Description</a></li>
                            <li class="nav-item"><a data-bs-toggle="tab" href="#tab2">Reviews</a></li>
                        </ul>
                    </div>

                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="tab1" role="tabpanel">
                            <div class="description">
                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat. <br> In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains.</p>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab2" role="tabpanel">
                            <div class="reviews">
                                <h3 class="review-title">Customer Reviews</h3>

                                <ul class="reviews-items">
                                    <li>
                                        <div class="single-review">
                                            <h6 class="name">Rosie Silva</h6>
                                            <div class="rating-date">
                                                <div class="rating">
                                                    <div class="rating-on" style="width: 80%;"></div>
                                                </div>
                                                <span class="date">Oct 20, 2022</span>
                                            </div>

                                            <p>Proin bibendum dolor vitae neque ornare, vel mollis est venenatis. Orci varius natoque penatibus et magnis dis parturient montes, nascet</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="single-review">
                                            <h6 class="name">Rosie Silva</h6>
                                            <div class="rating-date">
                                                <div class="rating">
                                                    <div class="rating-on" style="width: 80%;"></div>
                                                </div>
                                                <span class="date">Oct 20, 2022</span>
                                            </div>

                                            <p>Proin bibendum dolor vitae neque ornare, vel mollis est venenatis. Orci varius natoque penatibus et magnis dis parturient montes, nascet</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="single-review">
                                            <h6 class="name">Rosie Silva</h6>
                                            <div class="rating-date">
                                                <div class="rating">
                                                    <div class="rating-on" style="width: 80%;"></div>
                                                </div>
                                                <span class="date">Oct 20, 2022</span>
                                            </div>

                                            <p>Proin bibendum dolor vitae neque ornare, vel mollis est venenatis. Orci varius natoque penatibus et magnis dis parturient montes, nascet</p>
                                        </div>
                                    </li>
                                </ul>

                                <div class="reviews-form">
                                    <form action="#">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="single-form">
                                                    <label>Name</label>
                                                    <input type="text" placeholder="Enter your name">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="single-form">
                                                    <label>Email</label>
                                                    <input type="text" placeholder="john.smith@example.com">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="reviews-rating">
                                                    <label>Rating</label>
                                                    <ul id="rating" class="rating">
                                                        <li class="star" title='Poor' data-value='1'><i class="fa fa-star-o"></i></li>
                                                        <li class="star" title='Poor' data-value='2'><i class="fa fa-star-o"></i></li>
                                                        <li class="star" title='Poor' data-value='3'><i class="fa fa-star-o"></i></li>
                                                        <li class="star" title='Poor' data-value='4'><i class="fa fa-star-o"></i></li>
                                                        <li class="star" title='Poor' data-value='5'><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="single-form">
                                                    <label>Body of Review (1500)</label>
                                                    <textarea placeholder="Write your comments here"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="single-form">
                                                    <button class="btn btn-dark">Submit Review</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Shop Single info End-->


            </div>
        </div>
        <!--Shop Single End-->


        <!--New Product Start-->
        <div class="new-product-area section-padding-2">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-9 col-sm-11">
                        <div class="section-title text-center">
                            <h2 class="title">Related Products</h2>
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
                                            <img src="assets/images/product/product-1.jpg" alt="">
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
                                            <span class="current-price">$19.00</span>
                                            <span class="old-price">$29.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="single-product">
                                    <div class="product-image">
                                        <a href="shop-single.html">
                                            <img src="assets/images/product/product-2.jpg" alt="">
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
                                            <span class="current-price">$50.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="single-product">
                                    <div class="product-image">
                                        <a href="shop-single.html">
                                            <img src="assets/images/product/product-3.jpg" alt="">
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
                                            <span class="current-price">$39.00</span>
                                            <span class="old-price">$60.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="single-product">
                                    <div class="product-image">
                                        <a href="shop-single.html">
                                            <img src="assets/images/product/product-4.jpg" alt="">
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
                                            <span class="current-price">$79.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="single-product">
                                    <div class="product-image">
                                        <a href="shop-single.html">
                                            <img src="assets/images/product/product-5.jpg" alt="">
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
                                            <span class="current-price">$40.00</span>
                                            <span class="old-price">$85.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="single-product">
                                    <div class="product-image">
                                        <a href="shop-single.html">
                                            <img src="assets/images/product/product-6.jpg" alt="">
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
                                            <span class="current-price">$19.00</span>
                                            <span class="old-price">$21.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="single-product">
                                    <div class="product-image">
                                        <a href="shop-single.html">
                                            <img src="assets/images/product/product-7.jpg" alt="">
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
                                            <span class="current-price">$50.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="single-product">
                                    <div class="product-image">
                                        <a href="shop-single.html">
                                            <img src="assets/images/product/product-8.jpg" alt="">
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
                                            <span class="current-price">$19.00</span>
                                            <span class="old-price">$29.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="single-product">
                                    <div class="product-image">
                                        <a href="shop-single.html">
                                            <img src="assets/images/product/product-9.jpg" alt="">
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
                                            <span class="current-price">$19.00</span>
                                            <span class="old-price">$29.00</span>
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



        <!--Brand Start-->
        <div class="brand-area">
            <div class="container">
                <div class="brand-active swiper-container">
                    <div class="swiper-wrapper">
                        <div class="single-brand swiper-slide">
                            <img src="assets/images/brand/brand-1.jpg" alt="">
                        </div>
                        <div class="single-brand swiper-slide">
                            <img src="assets/images/brand/brand-2.jpg" alt="">
                        </div>
                        <div class="single-brand swiper-slide">
                            <img src="assets/images/brand/brand-3.jpg" alt="">
                        </div>
                        <div class="single-brand swiper-slide">
                            <img src="assets/images/brand/brand-4.jpg" alt="">
                        </div>
                        <div class="single-brand swiper-slide">
                            <img src="assets/images/brand/brand-5.jpg" alt="">
                        </div>
                        <div class="single-brand swiper-slide">
                            <img src="assets/images/brand/brand-6.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Brand End-->
        <!--Copyright Section Start-->
        <div class="copyright-section">
            <div class="container">
                <div class="copyright-wrapper text-center d-lg-flex align-items-center justify-content-between">

                    <!--Right Start-->
                    <div class="copyright-content">
                        <p>Copyright 2022 &copy; All Rights Reserved Kngu</p>
                    </div>
                    <!--Right End-->

                    <!--Right Start-->
                    <div class="copyright-payment">
                        <img src="assets/images/payment.png" alt="">
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
                                    <img src="assets/images/product-single/product-1.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="quick-view-content">
                                    <h4 class="product-title">Sweet Alyssum</h4>
                                    <div class="thumb-price">
                                        <span class="current-price">$19.00</span>
                                        <span class="old-price">$29.00</span>
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
    <!-- JS
    ============================================ -->

    <!-- Modernizer JS -->
    <script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <!-- jQuery JS -->
    <script src="assets/js/vendor/jquery-3.3.1.min.js"></script>
    <!-- Bootstrap JS -->
    <!-- <script src="assets/js/vendor/popper.min.js"></script>
    <script src="assets/js/vendor/bootstrap.min.js"></script> -->

    <!-- Plugins JS -->
    <!-- <script src="assets/js/plugins/swiper-bundle.min.js"></script>
    <script src="assets/js/plugins/jquery.countdown.min.js"></script>
    <script src="assets/js/plugins/jquery.elevateZoom.min.js"></script>
    <script src="assets/js/plugins/select2.min.js"></script>
    <script src="assets/js/plugins/ajax-contact.js"></script> -->


    <!--====== Use the minified version files listed below for better performance and remove the files listed above ======-->
    <script src="assets/js/plugins.min.js"></script>

    <!-- Main JS -->
    <script src="assets/js/main.js"></script>

</body>
<!-- Mirrored from htmldemo.net/kngu/shop-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 21 Nov 2024 15:55:16 GMT -->
</html>
@endsection