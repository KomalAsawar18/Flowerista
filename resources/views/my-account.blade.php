@extends('layouts.main')
@section('title', 'My Account')
@section('main-container')
        <div class="overlay"></div>
        <!--Overlay-->

        <!--Page Banner Start-->
        <div class="page-banner" style="background-image: url(frontend/assets//images/testimonial-bg.jpg);">
            <div class="container">
                <div class="page-banner-content text-center">
                    <h2 class="title">My Account</h2>
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">My Account</li>
                    </ol>
                </div>
            </div>
        </div>
        <!--Page Banner End-->

        <!--My Account Start-->
        <div class="register-page section-padding-5">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-md-4">
                        <div class="my-account-menu mt-30">
                            <ul class="nav account-menu-list flex-column">
                                <li>
                                    <a class="active" data-bs-toggle="pill" href="#pills-dashboard"><i class="fa fa-tachometer"></i> Dashboard</a>
                                </li>
                                <li>
                                    <a data-bs-toggle="pill" href="#pills-order"><i class="fa fa-shopping-cart"></i> Order</a>
                                </li>
                                <li>
                                    <a data-bs-toggle="pill" href="#pills-download"><i class="fa fa-cloud-download"></i> Download</a>
                                </li>
                                <li>
                                    <a data-bs-toggle="pill" href="#pills-payment"><i class="fa fa-credit-card"></i> Payment Method</a>
                                </li>
                                <li>
                                    <a data-bs-toggle="pill" href="#pills-address"><i class="fa fa-map-marker"></i> Address</a>
                                </li>
                                <li>
                                    <a data-bs-toggle="pill" href="#pills-account"><i class="fa fa-user"></i> Account Details</a>
                                </li>
                                <li>
                                    <a href="login.html"><i class="fa fa-sign-out"></i> Logout</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-8 col-md-8">
                        <div class="tab-content my-account-tab mt-30" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-dashboard">
                                <div class="my-account-dashboard account-wrapper">
                                    <h4 class="account-title">Dashboard</h4>
                                    <div class="welcome-dashboard">
                                        <p>Hello, <strong>Alex Tuntuni</strong> (If Not <strong>Tuntuni !</strong> <a href="login.html">Logout</a> )</p>
                                    </div>
                                    <p class="mt-25">From your account dashboard. you can easily check & view your recent orders, manage your shipping and billing addresses and edit your password and account details.</p>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-order">
                                <div class="my-account-order account-wrapper">
                                    <h4 class="account-title">Orders</h4>
                                    <div class="account-table text-center mt-30 table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th class="no">No</th>
                                                    <th class="name">Name</th>
                                                    <th class="date">Date</th>
                                                    <th class="status">Status</th>
                                                    <th class="total">Total</th>
                                                    <th class="action">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Mostarizing Oil</td>
                                                    <td>Aug 22, 2022</td>
                                                    <td>Pending</td>
                                                    <td>$100</td>
                                                    <td><a href="#">View</a></td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Katopeno Altuni</td>
                                                    <td>July 22, 2022</td>
                                                    <td>Approved</td>
                                                    <td>$45</td>
                                                    <td><a href="#">View</a></td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Murikhete Paris</td>
                                                    <td>June 22, 2022</td>
                                                    <td>On Hold</td>
                                                    <td>$99</td>
                                                    <td><a href="#">View</a></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-download">
                                <div class="my-account-download account-wrapper">
                                    <h4 class="account-title">Download</h4>
                                    <div class="account-table text-center mt-30 table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th class="name">Product</th>
                                                    <th class="date">Date</th>
                                                    <th class="status">Expire</th>
                                                    <th class="action">Download</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Mostarizing Oil</td>
                                                    <td>Aug 22, 2022</td>
                                                    <td>Yes</td>
                                                    <td><a href="#">Download File</a></td>
                                                </tr>
                                                <tr>
                                                    <td>Katopeno Altuni</td>
                                                    <td>July 22, 2022</td>
                                                    <td>Never</td>
                                                    <td><a href="#">Download File</a></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-payment">
                                <div class="my-account-payment account-wrapper">
                                    <h4 class="account-title">Payment Method</h4>
                                    <p class="mt-30">You Can't Saved Your Payment Method yet.</p>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-address">
                                <div class="my-account-address account-wrapper">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h4 class="account-title">Billing address</h4>
                                            <div class="account-address mt-30">
                                                <h6 class="name">Alex Tuntuni</h6>
                                                <p>1355 Market St, Suite 900 <br> San Francisco, CA 94103</p>
                                                <p>Mobile: (123) 456-7890</p>
                                                <a class="btn btn-primary" href="#"><i class="fa fa-edit"></i> Edit Address</a>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <h4 class="account-title">Shipping address</h4>
                                            <div class="account-address mt-30">
                                                <h6 class="name">Alex Tuntuni</h6>
                                                <p>1355 Market St, Suite 900 <br> San Francisco, CA 94103</p>
                                                <p>Mobile: (123) 456-7890</p>
                                                <a class="btn btn-primary" href="#"><i class="fa fa-edit"></i> Edit Address</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-account">
                                <div class="my-account-details account-wrapper">
                                    <h4 class="account-title">Account Details</h4>

                                    <div class="account-details">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="single-form">
                                                    <input type="text" placeholder="First Name">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="single-form">
                                                    <input type="text" placeholder="Last Name">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="single-form">
                                                    <input type="text" placeholder="Display Name">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="single-form">
                                                    <input type="text" placeholder="Email address">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="single-form">
                                                    <h5 class="title">Password change</h5>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="single-form">
                                                    <input type="password" placeholder="Current Password">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="single-form">
                                                    <input type="password" placeholder="New Password">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="single-form">
                                                    <input type="password" placeholder="Confirm Password">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="single-form">
                                                    <button class="btn btn-primary">Save Change</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--My Account End-->
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


<!-- Mirrored from htmldemo.net/kngu/my-account.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 21 Nov 2024 15:55:17 GMT -->
</html>
@endsection
