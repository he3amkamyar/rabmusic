<?php
session_start();
include ('config/config.php');
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
    <link rel="stylesheet" href="bootstrap/css/bootstrap.rtl.css"/>
    <link rel="stylesheet" href="css/index-style.css"/>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
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
                        <a class="navbar-brand" href="#">راب موزیک</a>
                    </div>
                    <div class="collapse navbar-collapse" id="myNavbar">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="#"><span class="glyphicon glyphicon-home"></span> صفحه اصلی </a></li>
                            <li><a href="#"><span class="glyphicon glyphicon-envelope"></span> تماس با ما </a></li>
                            <li><a href="#"><span class="glyphicon glyphicon-bookmark"></span>  درباره ما</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="#"><span class="glyphicon glyphicon-pushpin"></span> تبلیغات </a></li>
                            <li>
                                <form class="navbar-form navbar-left" action="/action_page.php">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="جستجوی آهنگ یا هنرمند...">
                                    </div>
                                    <button type="submit" class="btn btn-default"><span class=" 	glyphicon glyphicon-search"></span></button>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div class="row">
            <div class="panel panel-default col-sm-3" id="singer">
                <div class="panel-heading">
                    <h3 id="new-musics" class="text-center">
                        <span class="glyphicon glyphicon-user"></span>
                        لیست خوانندگان
                    </h3>
                </div>                <div class="panel-body">
                    <div class="list-group">

                        <?php
                        $conn = mysqli_connect("$host","$user","$pass","$db");
                        @$singer = $_GET['singer'];
                        @$musicname = $_GET['name'];
                        $sql = "SELECT DISTINCT msinger FROM music";
                        $query = mysqli_query($conn,$sql);
                        while ($row = mysqli_fetch_array($query)):
                            ?>
                        <?php
                            $r = $row['msinger'];
                            $sql_new = "SELECT COUNT(msinger) FROM music where msinger = '$r'";
                            $query_new = mysqli_query($conn,$sql_new);
                            while($new_row = mysqli_fetch_array($query_new)):?>
                        <a href="index.php?singer=<?php echo $row['msinger'];?>" class="list-group-item">
                            <span class="badge"><?php echo $new_row[0];endwhile;?></span>
                            <?php echo $row['msinger'];?>
                        </a>
                        <?php endwhile;?>
                    </div>
                </div>
            </div>
            <div class="panel panel-default col-sm-6">
                <div class="panel-heading">
                    <h1 id="list-singers" class="text-center"><b>راب موزیک</b> | دانلود جدید ترین اهنگ های روز دنیا</h1>
                </div>
                <?php
                $conn = mysqli_connect("$host","$user","$pass","$db");
                if(!isset($_GET['singer']))
                {
                    $sql = "SELECT * FROM music";
                }
                else
                {

                    $sql = "SELECT * FROM music WHERE msinger = '$singer'";
                }
                $query = mysqli_query($conn,$sql);
                while($row = mysqli_fetch_array($query)):
                ?>
                <div class="panel-body">
                    <h4 class="alert alert-warning text-center">دانلود آهنگ <?php echo $row['mname'];?>&nbsp;(<?php echo ' تولید سال '.$row['myear'].' ) ';?></h4>
                    <p style="color: darkorchid;">دانلود آهنگ جدید <?php echo $row['mname'];?>

                        با راب موزیک همراه شوید با ♫ دانلود اهنگ <?php echo $row['mname'];?> با صدای <?php echo $row['msinger'];?> به همراه تکست و بهترین کیفیت. ♫</p>
                    <p class="col-sm-12">
                        <img id="img-music" class="img-responsive img-thumbnail" src="<?php echo 'cover/'.$row['mcover'];?>" alt="">
                    </p>
                    <p class="col-sm-12">
                        <audio class="col-sm-12" id="audio" controls src="<?php echo 'musics/'.$row['mmusic'];?>"></audio>
                    </p>
                    <p class="col-sm-12">
                        <a download="" href="<?php echo 'musics/'.$row['mmusic'];?>">
                            <button id="btn-download" class="btn btn-danger btn-lg col-sm-12" type="button"> دانلود آهنگ  <?php echo $row['mname'];?> - <?php echo $row['msinger'];?></button>
                        </a>
                    </p>
                </div>
                <?php endwhile;?>
            </div>
            <div class="panel panel-default col-sm-3">
                <div class="panel-heading">
                    <h3 id="list-singers" class="text-center">
                        <span class="glyphicon glyphicon-music"></span>
                        جدید ترین اهنگ ها
                    </h3>
                </div>
                <div class="panel-body">
                    <div class="list-group">
                        <?php
                        $conn = mysqli_connect("$host","$user","$pass","$db");
                            $sql = "SELECT * FROM music";
                        $query = mysqli_query($conn,$sql);
                        while ($row1 = mysqli_fetch_array($query)):
                        ?>
                        <a href="musics.php?name=<?php echo $row1['mname'];?>" class="list-group-item"><?php echo $row1['mname'];?>
                            <span class="label label-default"> <?php echo $row1['myear'];?> </span>
                        </a>
                    <?php endwhile; ?>
                    </div>
                </div>
            </div>
            <div class="panel panel-default col-sm-3" id="sing"">
                <div class="panel-heading">
                    <h3 id="new-musics" class="text-center">
                        <span class="glyphicon glyphicon-user"></span>
                        لیست خوانندگان
                    </h3>
                </div>                <div class="panel-body">
                    <div class="list-group">
                        <?php
                        @$singer = $_GET['singer'];
                        @$musicname = $_GET['name'];
                        $conn = mysqli_connect("$host","$user","$pass","$db");
                        $sql = "SELECT DISTINCT msinger FROM music";
                        $query = mysqli_query($conn,$sql);
                        while ($row = mysqli_fetch_array($query)):
                            ?>
                            <a href="index.php?singer=<?php echo $row['msinger'];?>" class="list-group-item">
                                <span class="badge">2</span></span>
                                <?php echo $row['msinger'];?>
                            </a>
                        <?php endwhile;?>
                    </div>
                </div>
            </div>
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