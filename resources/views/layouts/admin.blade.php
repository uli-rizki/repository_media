<!doctype html>
<html class="no-js" lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Repository Media</title>
        <meta name="description" content="Aplikasi repositori media tugas akhir unuha">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
        <!-- Place favicon.ico in the root directory -->

        <!-- CSS here -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/animate.min.css">
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
        <link rel="stylesheet" href="assets/css/flaticon-skillgro.css">
        <link rel="stylesheet" href="assets/css/flaticon-skillgro-new.css">
        <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
        <link rel="stylesheet" href="assets/css/default-icons.css">
        <link rel="stylesheet" href="assets/css/select2.min.css">
        <link rel="stylesheet" href="assets/css/odometer.css">
        <link rel="stylesheet" href="assets/css/aos.css">
        <link rel="stylesheet" href="assets/css/plyr.css">
        <link rel="stylesheet" href="assets/css/spacing.css">
        <link rel="stylesheet" href="assets/css/tg-cursor.css">
        <link rel="stylesheet" href="assets/css/main.css">
    </head>

<body>

    <!--Preloader-->
    <div id="preloader">
        <div id="loader" class="loader">
            <div class="loader-container">
                <div class="loader-icon"><img src="assets/img/logo/preloader.svg" alt="Preloader"></div>
            </div>
        </div>
    </div>
    <!--Preloader-end -->

    <!-- Scroll-top -->
    <button class="scroll__top scroll-to-target" data-target="html">
        <i class="tg-flaticon-arrowhead-up"></i>
    </button>
    <!-- Scroll-top-end-->

    <!-- header-area -->
    @include('includes.user_header')
    <!-- header-area-end -->



    <!-- main-area -->
    <main class="main-area">
        <!-- breadcrumb-area -->
        <div class="breadcrumb__area breadcrumb__bg breadcrumb__bg-three" data-background="assets/img/bg/breadcrumb_bg.jpg">
            <div class="breadcrumb__shape-wrap">
                <img src="assets/img/others/breadcrumb_shape01.svg" alt="img" class="alltuchtopdown">
                <img src="assets/img/others/breadcrumb_shape02.svg" alt="img" data-aos="fade-right" data-aos-delay="300">
                <img src="assets/img/others/breadcrumb_shape03.svg" alt="img" data-aos="fade-up" data-aos-delay="400">
                <img src="assets/img/others/breadcrumb_shape04.svg" alt="img" data-aos="fade-down-left" data-aos-delay="400">
                <img src="assets/img/others/breadcrumb_shape05.svg" alt="img" data-aos="fade-left" data-aos-delay="400">
            </div>
        </div>
        <!-- breadcrumb-area-end -->

        <!-- dashboard-area -->
        <section class="dashboard__area section-pb-120">
            <div class="container">
                <div class="dashboard__top-wrap">
                    <div class="dashboard__top-bg" data-background="assets/img/bg/instructor_dashboard_bg.jpg"></div>
                    <div class="dashboard__instructor-info">
                        <div class="dashboard__instructor-info-left">
                            <div class="thumb">
                                <img src="assets/img/courses/details_instructors01.jpg" alt="img">
                            </div>
                            <div class="content">
                                <h4 class="title">John Due</h4>
                                <div class="review__wrap review__wrap-two">
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <span>(15 Reviews)</span>
                                </div>
                            </div>
                        </div>
                        <div class="dashboard__instructor-info-right">
                            <a href="#" class="btn btn-two arrow-btn">Create a New Course <img src="assets/img/icons/right_arrow.svg" alt="img" class="injectable"></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3">
                        
                    </div>
                    <div class="col-lg-9">
                        <div class="dashboard__content-wrap dashboard__content-wrap-two mb-60">
                            <div class="dashboard__content-title">
                                <h4 class="title">Dashboard</h4>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-6">
                                    <div class="dashboard__counter-item">
                                        <div class="icon">
                                            <i class="skillgro-book"></i>
                                        </div>
                                        <div class="content">
                                            <span class="count odometer" data-count="30"></span>
                                            <p>ENROLLED COURSES</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6">
                                    <div class="dashboard__counter-item">
                                        <div class="icon">
                                            <i class="skillgro-tutorial"></i>
                                        </div>
                                        <div class="content">
                                            <span class="count odometer" data-count="10"></span>
                                            <p>ACTIVE COURSES</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6">
                                    <div class="dashboard__counter-item">
                                        <div class="icon">
                                            <i class="skillgro-diploma-1"></i>
                                        </div>
                                        <div class="content">
                                            <span class="count odometer" data-count="7"></span>
                                            <p>COMPLETED COURSES</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6">
                                    <div class="dashboard__counter-item">
                                        <div class="icon">
                                            <i class="skillgro-group"></i>
                                        </div>
                                        <div class="content">
                                            <span class="count odometer" data-count="160"></span>
                                            <p>TOTAL STUDENTS</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6">
                                    <div class="dashboard__counter-item">
                                        <div class="icon">
                                            <i class="skillgro-notepad"></i>
                                        </div>
                                        <div class="content">
                                            <span class="count odometer" data-count="30"></span>
                                            <p>TOTAL COURSES</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6">
                                    <div class="dashboard__counter-item">
                                        <div class="icon">
                                            <i class="skillgro-dollar-currency-symbol"></i>
                                        </div>
                                        <div class="content">
                                            <span class="count odometer" data-count="29000"></span>
                                            <p>TOTAL EARNINGS</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="dashboard__content-wrap">
                            <div class="dashboard__content-title">
                                <h4 class="title">My Courses</h4>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="dashboard__review-table">
                                        <table class="table table-borderless">
                                            <thead>
                                                <tr>
                                                    <th>Course Name</th>
                                                    <th>Enrolled</th>
                                                    <th>Rating</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <a href="course-details.html">Accounting</a>
                                                    </td>
                                                    <td>
                                                        <p class="color-black">50</p>
                                                    </td>
                                                    <td>
                                                        <div class="review__wrap">
                                                            <div class="rating">
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="course-details.html">Marketing</a>
                                                    </td>
                                                    <td>
                                                        <p class="color-black">43</p>
                                                    </td>
                                                    <td>
                                                        <div class="review__wrap">
                                                            <div class="rating">
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="course-details.html">Web Design</a>
                                                    </td>
                                                    <td>
                                                        <p class="color-black">36</p>
                                                    </td>
                                                    <td>
                                                        <div class="review__wrap">
                                                            <div class="rating">
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="course-details.html">Graphic</a>
                                                    </td>
                                                    <td>
                                                        <p class="color-black">22</p>
                                                    </td>
                                                    <td>
                                                        <div class="review__wrap">
                                                            <div class="rating">
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="load-more-btn text-center mt-20">
                                <a href="#" class="link-btn">Browse All Course <img src="assets/img/icons/right_arrow.svg" alt="" class="injectable"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- dashboard-area-end -->
        @yield('content')

    </main>
    <!-- main-area-end -->



    <!-- footer-area -->
    @include('includes.user_footer')
    <!-- footer-area-end -->


    <!-- JS here -->
    <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/jquery.odometer.min.js"></script>
    <script src="assets/js/jquery.appear.js"></script>
    <script src="assets/js/tween-max.min.js"></script>
    <script src="assets/js/select2.min.js"></script>
    <script src="assets/js/swiper-bundle.min.js"></script>
    <script src="assets/js/jquery.marquee.min.js"></script>
    <script src="assets/js/tg-cursor.min.js"></script>
    <script src="assets/js/vivus.min.js"></script>
    <script src="assets/js/ajax-form.js"></script>
    <script src="assets/js/svg-inject.min.js"></script>
    <script src="assets/js/jquery.circleType.js"></script>
    <script src="assets/js/jquery.lettering.min.js"></script>
    <script src="assets/js/plyr.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/aos.js"></script>
    <script src="assets/js/main.js"></script>
    <script>
        SVGInject(document.querySelectorAll("img.injectable"));
    </script>
</body>

</html>