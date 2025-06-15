@extends('layouts.main')
@section('title', 'Blog')
@section('main-container')
<div class="overlay"></div>
        <!--Overlay-->
        <!--Page Banner Start-->
    <div class="page-banner" style="background-image: url(frontend/assets//images/testimonial-bg.jpg);">
        <div class="container">
                <div class="page-banner-content text-center">
                    <h2 class="title">Blog</h2>
                    <ol class="breadcrumb justify-content-center">
                        <!-- <li class="breadcrumb-item"><a href="index.html">Home</a></li> -->
                        <li class="breadcrumb-item active" aria-current="page">Blog</li>
                    </ol>
                </div>
            </div>
        </div>
        <!--Page Banner End-->
        <!--Blog Start-->
        <div class="blog-page section-padding-7">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <!-- <div class="single-blog"> -->
                            <!-- <div class="blog-image">
                                <a href="blog-single-right-sidebar.html"><img src="frontend/assets//images/blog/blog-01.jpg" alt=""></a>
                            </div> -->
                            <!-- <div class="blog-content">
                                <h4 class="title"><a href="blog-single-right-sidebar.html">Flower Beauty</a></h4>
                                <div class="articles-date">
                                    <p>By <span>  Shopify Team HasTheme /  August 12, 2022</span></p>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidid...</p>

                                <div class="blog-footer">
                                    <a class="more" href="blog-single-right-sidebar.html">Continue Reading</a>
                                    <p class="comment-count"><i class="icon-message-circle"></i> 0</p>
                                </div> -->
                            <!-- </div> -->
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-blog">
                            <div class="swiper-container blog-gallery">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <a href="blog-single-right-sidebar.html"><img src="frontend/assets//images/blog/blog-02.jpg" alt=""></a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a href="blog-single-right-sidebar.html"><img src="frontend/assets//images/blog/blog-11.jpg" alt=""></a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a href="blog-single-right-sidebar.html"><img src="frontend/assets//images/blog/blog-10.jpg" alt=""></a>
                                    </div>
                                </div>
                                <!-- Add Arrows -->
                                <div class="blog-gallery-next"><i class="fa fa-angle-right"></i></div>
                                <div class="blog-gallery-prev"><i class="fa fa-angle-left"></i></div>
                            </div>
                            <!-- <div class="blog-content">
                                <h4 class="title"><a href="blog-single-right-sidebar.html">Flower Beauty</a></h4>
                                <div class="articles-date">
                                    <p>By <span>  Shopify Team HasTheme /  August 12, 2022</span></p>
                                </div> -->
                                <p>"Flowers Are the Poetry of the Earth—Let us Write a Story Together."</p>

                                <!-- <div class="blog-footer">
                                    <a class="more" href="blog-single-right-sidebar.html">Continue Reading</a>
                                    <p class="comment-count"><i class="icon-message-circle"></i> 0</p>
                                </div> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-blog">
                            <!-- <div class="blog-image">
                                <a href="blog-single-right-sidebar.html"><img src="frontend/assets//images/blog/blog-03.jpg" alt=""></a>
                            </div> -->
                            <div class="blog-content">
                                <h4 class="title"><a href="blog-single-right-sidebar.html">Flower Beauty</a></h4>
                                <div class="articles-date">
                                    <p>By <span>  Shopify Team / November 12, 2024</span></p>
                                </div>
                                <p>"Every Flower is a Soul Blossoming in Nature."</p>

                                <div class="blog-footer">
                                    <a class="more" href="blog-single-right-sidebar.html">Continue Reading</a>
                                    <p class="comment-count"><i class="icon-message-circle"></i> 0</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-blog">
                            <div class="blog-embed">
                                <div class="ratio ratio-16x9">
                                    <iframe src="https://www.youtube.com/embed/ryUxrFUk6MY" title="YouTube video" allowfullscreen></iframe>
                                </div>
                            </div>
                            <div class="blog-content">
                                <h4 class="title"><a href="blog-single-right-sidebar.html">Flower Beauty</a></h4>
                                <div class="articles-date">
                                    <p>By <span>  Shopify Team / November 12, 2024</span></p>
                                </div>
                                <p>"Petals That Brighten Your Day."</p>

                                <div class="blog-footer">
                                    <a class="more" href="blog-single-right-sidebar.html">Continue Reading</a>
                                    <p class="comment-count"><i class="icon-message-circle"></i> 0</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-blog">
                            <div class="blog-image">
                                <a href="blog-single-right-sidebar.html"><img src="frontend/assets//images/blog/blog-05.jpg" alt=""></a>
                            </div>
                            <div class="blog-content">
                                <h4 class="title"><a href="blog-single-right-sidebar.html">Flower Beauty</a></h4>
                                <div class="articles-date">
                                    <p>By <span>  Shopify Team / November 12, 20242</span></p>
                                </div>
                                <p>"Fresh Flowers, Fresh Smiles."</p>

                                <div class="blog-footer">
                                    <a class="more" href="blog-single-right-sidebar.html">Continue Reading</a>
                                    <p class="comment-count"><i class="icon-message-circle"></i> 0</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-lg-4 col-md-6">
                        <div class="single-blog">
                            <div class="blog-embed">
                                <div class="ratio ratio-16x9">
                                    <iframe src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/users/182537870&amp;color=%23ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;show_teaser=true&amp;visual=true" title="YouTube video" allowfullscreen></iframe>
                                </div>
                            </div> -->
                            <!-- <div class="blog-content">
                                <h4 class="title"><a href="blog-single-right-sidebar.html">Flower Beauty</a></h4>
                                <div class="articles-date">
                                    <p>By <span>  Shopify Team HasTheme /  August 12, 2022</span></p>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidid...</p> -->

                                <!-- <div class="blog-footer">
                                    <a class="more" href="blog-single-right-sidebar.html">Continue Reading</a>
                                    <p class="comment-count"><i class="icon-message-circle"></i> 0</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-blog">
                            <div class="blog-image">
                                <a href="blog-single-right-sidebar.html"><img src="frontend/assets//images/blog/blog-07.jpg" alt=""></a>
                            </div>
                            <div class="blog-content">
                                <h4 class="title"><a href="blog-single-right-sidebar.html">Flower Beauty</a></h4>
                                <div class="articles-date">
                                    <p>By <span>  Shopify Team HasTheme /  August 12, 2022</span></p>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidid...</p>

                                <div class="blog-footer">
                                    <a class="more" href="blog-single-right-sidebar.html">Continue Reading</a>
                                    <p class="comment-count"><i class="icon-message-circle"></i> 0</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-blog">
                            <div class="blog-image">
                                <a href="blog-single-right-sidebar.html"><img src="frontend/assets//images/blog/blog-08.jpg" alt=""></a>
                            </div>
                            <div class="blog-content">
                                <h4 class="title"><a href="blog-single-right-sidebar.html">Flower Beauty</a></h4>
                                <div class="articles-date">
                                    <p>By <span>  Shopify Team HasTheme /  August 12, 2022</span></p>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidid...</p>

                                <div class="blog-footer">
                                    <a class="more" href="blog-single-right-sidebar.html">Continue Reading</a>
                                    <p class="comment-count"><i class="icon-message-circle"></i> 0</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-blog">
                            <div class="blog-image">
                                <a href="blog-single-right-sidebar.html"><img src="frontend/assets//images/blog/blog-09.jpg" alt=""></a>
                            </div>
                            <div class="blog-content">
                                <h4 class="title"><a href="blog-single-right-sidebar.html">Flower Beauty</a></h4>
                                <div class="articles-date">
                                    <p>By <span>  Shopify Team HasTheme /  August 12, 2022</span></p>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidid...</p>

                                <div class="blog-footer">
                                    <a class="more" href="blog-single-right-sidebar.html">Continue Reading</a>
                                    <p class="comment-count"><i class="icon-message-circle"></i> 0</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
 -->
                <!--Pagination Start-->
                <div class="page-pagination">
                    <ul class="pagination justify-content-center">
                        <li class="page-item"><a class="page-link prev" href="#">Prev</a></li>
                        <li class="page-item"><a class="page-link active" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link next" href="#">Next</a></li>
                    </ul>
                </div>
                <!--Pagination End-->
            </div>
        <!--Blog End-->
@endsection
