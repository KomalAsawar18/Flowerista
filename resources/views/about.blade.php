@extends('layouts.main')
@section('title', 'About')
@section('main-container')
        <div class="overlay"></div>
        <!--Overlay-->
        <!--Page Banner Start-->
        <div class="page-banner" style="background-image: url(frontend/assets//images/testimonial-bg.jpg);">
            <div class="container">
                <div class="page-banner-content text-center">
                    <h2 class="title">About</h2>
                    <ol class="breadcrumb justify-content-center">
                        <!-- <li class="breadcrumb-item"><a href="index.html">Home</a></li> -->
                        <li class="breadcrumb-item active" aria-current="page"></li>
                    </ol>
                </div>
            </div>
        </div>
        <!--Page Banner End-->
        <!--About Start-->
        <div class="about-page-area section-padding">
            <div class="container">
                <figure>
                    <div class="about-thumb">
                        <img src="frontend/assets//images/about/about-2.jpg" alt="">
                    </div>
                    <figcaption class="about-page-content text-center">
                        <h2 class="title">We are a digital agency focused on delivering content and utility user-experiences.</h2>
                        <p>"Adapting the lake into elements, without hesitation, the shores of time are moderately scattered.Grow your perfect craft sociability to a supporting nature."</p>
                        <div class="about-signature">
                            <img src="frontend/assets//images/signature.png" alt="">
                        </div>
                    </figcaption>
                </figure>
            </div>
        </div>
        <!--About End-->
        <!--Chose Us Start-->
        <div class="chose-us-area section-padding-7">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-chose text-center">
                            <div class="chose-icon">
                                <img src="frontend/assets//images/chose-icon/Creative-Design.png" alt="">
                            </div>
                            <div class="chose-content">
                                <h3 class="title">Creative Design</h3>
                                <p>"Experience the Extraordinary Every Day! Quality You Can Trust, Results You will Love."</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-chose text-center">
                            <div class="chose-icon">
                                <img src="frontend/assets//images/chose-icon/100_-Money-Back-Guarantee.png" alt="">
                            </div>
                            <div class="chose-content">
                                <h3 class="title">100% Money Back Guarantee</h3>
                                <p>100% Money-Back Guarantee—Your Satisfaction is Assured!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-chose text-center">
                            <div class="chose-icon">
                                <img src="frontend/assets//images/chose-icon/Online-Support-247.png" alt="">
                            </div>
                            <div class="chose-content">
                                <h3 class="title">Online Support</h3>
                                <p>We are Here for You Anytime(24/7)!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Chose Us End-->
        <!--Testimonial Start-->
        <div class="testimonial-area" style="background-image: url(frontend/assets//images/testimonial-bg-2.jpg);">
            <div class="container">
                <div class="swiper-container testimonial-active">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="single-testimonial text-center">
                                <p>"Bloom Where You are Planted, and We will Help You Thrive."</p>

                                <div class="testimonial-author">
                                    <img src="frontend/assets//images/testimonial-img-1.png" alt="">
                                    <span class="author-name">Mahnoor/ CEO</span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="single-testimonial text-center">
                                <p>"Let the Fragrance of Fresh Flowers Fill Your Life."</p>

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
<!--
        <div class="brand-area">
            <div class="container">
                <div class="brand-active swiper-container">
                    <div class="swiper-wrapper">
                        <div class="single-brand swiper-slide">
                            <img src="frontend/assets//images/brand/brand-1.jpg" alt="">
                        </div>
                        <div class="single-brand swiper-slide">
                            <img src="frontend/assets//images/brand/brand-2.jpg" alt="">
                        </div>
                        <div class="single-brand swiper-slide">
                            <img src="frontend/assets//images/brand/brand-3.jpg" alt="">
                        </div>
                        <div class="single-brand swiper-slide">
                            <img src="frontend/assets//images/brand/brand-4.jpg" alt="">
                        </div>
                        <div class="single-brand swiper-slide">
                            <img src="frontend/assets//images/brand/brand-5.jpg" alt="">
                        </div>
                        <div class="single-brand swiper-slide">
                            <img src="frontend/assets//images/brand/brand-6.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
 -->
@endsection
