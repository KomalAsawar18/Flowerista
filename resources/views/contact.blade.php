@extends('layouts.main')
@section('title', 'Contact')
@section('main-container')

        <div class="overlay"></div>
        <!--Overlay-->

        <!--Page Banner Start-->
        <div class="page-banner" style="background-image: url(frontend/assets//images/testimonial-bg.jpg);">
            <div class="container">
                <div class="page-banner-content text-center">
                    <h2 class="title">Contact</h2>
                    <!-- <ol class="breadcrumb justify-content-center"> -->
                        <!-- <li class="breadcrumb-item"><a href="index.html">Home</a></li> -->
                        <!-- <li class="breadcrumb-item active" aria-current="page">Contact</li>
                    </ol> -->
                </div>
            </div>
        </div>
        <!--Page Banner End-->

        <!--Contact Map Start-->
        <div class="contact-map section-padding">
            <div id="contact-map">
                <iframe
                src="https://www.google.com/maps?q=Model+Town+A,+Bahawalpur&output=embed"
                style="border:0;"
                width="600"
                height="450"
                allow="fullscreen; geolocation; autoplay;"
                loading="lazy">
            </iframe>

            </div>

        </div>
        <!--Contact Map End-->

        <!--Contact Start-->
        <div class="contact-page section-padding-5">
            <div class="container">
                <div class="contact-info">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="section-title text-center">
                                <h2 class="title">Get office info</h2>
                                <p>"Get All the Information You Need About Our Office, Conveniently Available Anytime! Find Office Details, Locations, and Contact Info Easily—We're Here to Help!".</p>
                            </div>
                        </div>
                    </div>

                    <div class="contact-info-content">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="single-contact-info text-center">
                                    <i class="fa fa-fax"></i>
                                    <h4 class="title"> Address </h4>
                                    <p>Model Town-A Bahawalpur<br> Punjab,Pakistan </p>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="single-contact-info text-center">
                                    <i class="fa fa-phone"></i>
                                    <h4 class="title"> Phone Number </h4>
                                    <p><a href="tel:03002468414">03002468414 </a></p>
                                    <p><a href="tel:03136802998">03136802998 </a></p>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="single-contact-info text-center">
                                    <i class="fa fa-envelope"></i>
                                    <h4 class="title"> Email Address </h4>
                                    <p><a href="mailto:kngu@gmail.com"> kngu@gmail.com </a></p>
                                    <p><a href="mailto:KnguFlowers@gmail.com"> KnguFlowers@gmail.com </a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="contact-form">
                    <form id="contact-form" action="https://htmldemo.net/kngu/frontend/assets//php/contact.php" method="post">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="single-form">
                                    <input type="text" name="name" placeholder="Name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-form">
                                    <input type="email" name="email" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="single-form">
                                    <input type="text" name="subject" placeholder="Subject">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="single-form">
                                    <textarea name="message" placeholder="Message"></textarea>
                                </div>
                            </div>
                            <p class="form-message"></p>
                            <div class="col-md-12">
                                <div class="single-form text-center">
                                    <button class="btn btn-dark">Message Send</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!--Contact End-->
        <!--Copyright Section Start-->
        <div class="copyright-section">
            <div class="container">
                <div class="copyright-wrapper text-center d-lg-flex align-items-center justify-content-between">

                    <!--Right Start-->
                    <div class="copyright-content">
                        <p>Copyright 2024 &copy; Kngu All Rights Reserved</p>
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


<!-- Mirrored from htmldemo.net/kngu/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 21 Nov 2024 15:55:37 GMT -->
</html>
@endsection

