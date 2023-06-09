<?php
session_start();
include ('../config/config.php');
$url = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
?>
<!doctype html>
<html dir="rtl" lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>راب موزیک | دانلود اهنگ ،اهنگ شاد،اهنگ خارجی،اهنگ عروسی،اهنگ ایرانی،دانلود اهنگ شاد</title>
    <meta property="og:title" content=" موزیک جدید، دانلود موزیک ،اهنگ شاد،موزیک خارجی،آهنگ عروسی،اهنگ ایرانی،دانلود آهنگ شاد عروسی" />
    <meta property="og:keywords" content=" موزیک جدید، دانلود موزیک ،اهنگ شاد،موزیک خارجی،آهنگ عروسی،اهنگ ایرانی،دانلود آهنگ شاد عروسی" />
    <meta property="og:description" content="دانلود جدید ترین اهنگ های روز دنیا" />
    <meta property="og:url" content="<?php echo $url; ?>" />
    <meta property="og:locale" content="fa" />
    <meta property="og:site_name" content="راب موزیک"/>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.rtl.css"/>
    <link rel="stylesheet" href="../css/index-style.css"/>
    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.js"></script>
    <style>
        #sing
        {
            display: none;
        }
        @media only screen and (max-width : 769px)
        {
            #singer {
                display: none;
            }
        }
        @media only screen and (max-width: 768px){
            #sing
            {
                display: block;
            }
        }
    </style>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">پنل مدیریت | راب موزیک</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#"> پیشخوان </a></li>
                        <li><a href="add-music.php"> افزودن آهنگ ها </a></li>
                        <li><a href="#"> لیست آهنگ ها </a></li>
                        <li><a href="#">  لیست خوانندگان </a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

<div style="overflow: hidden;">
    <svg
        preserveAspectRatio="none"
        viewBox="0 0 1200 120"
        xmlns="http://www.w3.org/2000/svg"
        style="fill: #dbdbdb; width: 100%; height: 340px;"
    >
        <path
            d="M0 0v46.29c47.79 22.2 103.59 32.17 158 28 70.36-5.37 136.33-33.31 206.8-37.5 73.84-4.36 147.54 16.88 218.2 35.26 69.27 18 138.3 24.88 209.4 13.08 36.15-6 69.85-17.84 104.45-29.34C989.49 25 1113-14.29 1200 52.47V0z"
            opacity=".25"
        />
        <path
            d="M0 0v15.81c13 21.11 27.64 41.05 47.69 56.24C99.41 111.27 165 111 224.58 91.58c31.15-10.15 60.09-26.07 89.67-39.8 40.92-19 84.73-46 130.83-49.67 36.26-2.85 70.9 9.42 98.6 31.56 31.77 25.39 62.32 62 103.63 73 40.44 10.79 81.35-6.69 119.13-24.28s75.16-39 116.92-43.05c59.73-5.85 113.28 22.88 168.9 38.84 30.2 8.66 59 6.17 87.09-7.5 22.43-10.89 48-26.93 60.65-49.24V0z"
            opacity=".5"
        />
        <path d="M0 0v5.63C149.93 59 314.09 71.32 475.83 42.57c43-7.64 84.23-20.12 127.61-26.46 59-8.63 112.48 12.24 165.56 35.4C827.93 77.22 886 95.24 951.2 90c86.53-7 172.46-45.71 248.8-84.81V0z" />
    </svg>
</div>
<div class="row">
    <!-- Footer -->
    <footer class="text-center text-lg-start bg-light text-muted">
        <!-- Section: Social media -->
        <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
            <!-- Left -->
            <div class="me-5 d-none d-lg-block">
                <span></span>
            </div>
            <!-- Left -->

            <!-- Right -->
            <div>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-google"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-linkedin"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-github"></i>
                </a>
            </div>
            <!-- Right -->
        </section>
        <!-- Section: Social media -->

        <!-- Section: Links  -->
        <section class="">
            <div class="container text-center text-md-start mt-5">
                <!-- Grid row -->
                <div class="row mt-3">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <!-- Content -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            <i class="fas fa-gem me-3"></i>راب موزیک
                        </h6>
                        <p>
                            راب موزیک فعالیت خود را از سال 1402 اغار کرد و تا به امروز بزرگترین مرجع دانلود اهنگ در ایران بوده است.
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            سبک آهنگ
                        </h6>
                        <p>
                            <a href="#!" class="text-reset">شاد</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">غمگین</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">رپ</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">هیپ هاپ</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            لینک دوستان
                        </h6>
                        <p>
                            <a href="#!" class="text-reset">آپ موزیک</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">رُز موزیک</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">موزیک فا</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">با موزیک</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">آدرس</h6>
                        <p><i class="fas fa-home me-3"></i> کرمان ،شهرستان شهربابک،بنیاد سفلی عدالت 3</p>
                        <p>
                            <i class="fas fa-envelope me-3"></i>
                            info@rabmusic.ir
                        </p>
                        <p><i class="fas fa-phone me-3"></i>09913656657</p>
                        <p><i class="fas fa-print me-3"></i>09913656693</p>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </div>
        </section>
        <!-- Section: Links  -->

        <!-- Copyright -->
        <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
            تمامی حقوق برای راب موزیک محفوظ می باشد.     &nbsp;&copy; <?php echo date('Y');?>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->
</div>
</div>
</body>
</html>