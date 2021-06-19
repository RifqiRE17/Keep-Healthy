<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Entro</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- fevicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
        media="screen">
    <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout">
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="images/loading.gif" alt="#" /></div>
    </div>
    <!-- end loader -->
    <!-- header -->
    <header>
        <!-- header inner -->
        <div class="header-top">
            <div class="header">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-3 col logo_section">
                            <div class="full">
                                <div class="center-desk">
                                    <div class="logo">
                                        <a href="index.html"><img src="images/logo.png" alt="#" /></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-10 col-lg-10 col-md-10 col-sm-9">

                            <div class="menu-area">
                                <div class="limit-box">
                                    <nav class="main-menu ">
                                        <ul class="menu-area-main">
                                            <li> <a href="{{ url('/') }}">Halaman Awal</a> </li>

                                            <li> <a href="/mitra/register">Menjadi Mitra</a> </li>
                                            <li> <a href="Artikel/artikel">Artikel </a> </li>
                                            <li> <a href="{{ route('admin') }}"
                                                    class="text-sm text-gray-700 underline">Log in</a></li>
                                            <li><a href="{{ route('register') }}"
                                                    class="ml-4 text-sm text-gray-700 underline">Register</a>
                                            </li>


                                            <!-- <div
                                                class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
                                                @if (Route::has('login'))
                                                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                                    @auth

                                                    @else
                                                    <li> <a href="{{ route('login') }}"
                                                            class="text-sm text-gray-700 underline">Log in</a></li>

                                                    @if (Route::has('register'))
                                                    <li><a href="{{ route('register') }}"
                                                            class="ml-4 text-sm text-gray-700 underline">Register</a>
                                                    </li>
                                                    @endif
                                                    @endauth

                                                </div>
                                            </div>
                                            @endif -->

                                            <!-- <li>

                                                <a href="{{ route('login') }}" class="text-center">Login</a>

                                            </li> -->

                                            <!-- <li> <a href="concerts.html">Artikel </a> </li> -->


                                            <!-- <li> <a class="last_manu" href="#"><img src="images/search_icon.png"
                                                        alt="#" /></a> </li> -->

                                        </ul>
                                    </nav>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end header inner -->

            <!-- end header -->
            <section class="slider_section">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">

                            <div class="container">
                                <div class="carousel-caption">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="text-bg">
                                                <span>Keep Healthy</span>
                                                <h1>Dengan Hidup Sehat Segala Penyakit Bisa Dicegah</h1>
                                                <p>Dengan aplikasi kami anda daoat menyewa jasa pembersihan rumah dengan
                                                    mudah dan
                                                    cepat hanya dengan melakukan beberapa klik pada smartphone anda.
                                                    Maka kami akan
                                                    siap datang kerumah anda dengan segera</p>
                                                <a href="#"><img style=" width: 50px; height: 50px;"
                                                        src="icon/playstore.png" alt="#" />Dapatkan DI Google Play</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">

                            <div class="container ">
                                <div class="carousel-caption">

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="text-bg">
                                                <span>Keep Healthy</span>
                                                <h1>Dengan Hidup Sehat Segala Penyakit Bisa Dicegah</h1>
                                                <p>Dengan aplikasi kami anda daoat menyewa jasa pembersihan rumah dengan
                                                    mudah dan
                                                    cepat hanya dengan melakukan beberapa klik pada smartphone anda.
                                                    Maka kami akan
                                                    siap datang kerumah anda dengan segera</p>
                                                <a href="#"><img style=" width: 50px; height: 50px;"
                                                        src="icon/playstore.png" alt="#" />Dapatkan DI Google Play</a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>


                        <div class="carousel-item">

                            <div class="container">
                                <div class="carousel-caption ">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="text-bg">
                                                <span>Keep Healthy</span>
                                                <h1>Dengan Hidup Sehat Segala Penyakit Bisa Dicegah</h1>
                                                <p>Dengan aplikasi kami anda daoat menyewa jasa pembersihan rumah dengan
                                                    mudah dan
                                                    cepat hanya dengan melakukan beberapa klik pada smartphone anda.
                                                    Maka kami akan
                                                    siap datang kerumah anda dengan segera</p>
                                                <a href="#"><img style=" width: 50px; height: 50px;"
                                                        src="icon/playstore.png" alt="#" />Dapatkan DI Google Play</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>



            </section>
        </div>
    </header>



    <!-- about  -->
    <div id="about" class="about">
        <div class="container">
            <div class="row display_boxflex">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="about-box">
                        <h2>Membersihkan Halaman Depan</h2>
                        <p>Salah satu layanan kami adalah dapat membersihkan halaman depan anda dan anda dapat memilih
                            layanan ini saat anda membutuhkannya</p>
                        <!-- <a href="Javascript:void(0)">Read More</a> -->
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="about-box">
                        <figure><img src="images/about.png" alt="#" /></figure>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- end abouts -->




    <!-- upcoming -->
    <div id="upcoming" class="upcoming">
        <div class="container-fluid padding_left3">
            <div class="row display_boxflex">
                <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">
                    <div class="box_text">
                        <div class="titlepage">
                            <h2><br>Bersihkan Kamar Mandi</h2>
                        </div>
                        <p>Kami juga memiliki layanan untuk membersihkan kamar mandi di rumah anda sehingga anda juga
                            dapat
                            memilih layanan ini saat anda membutuhkannya</p>
                        <!-- <a href="Javascript:void(0)">Read More</a> -->
                    </div>
                </div>

                <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12 border_right">
                    <div class="upcomimg">
                        <figure><img src="images/kamarmandi.jpg" alt="#" /></figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end upcoming -->

    <!-- upcoming2 -->
    <div id="upcoming" class="upcoming">
        <div class="container-fluid padding_left3">
            <div class="row display_boxflex">
                <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">
                    <div class="box_text">
                        <div class="titlepage">
                            <h2><br>Bersihkan Ruangan Rumah </h2>
                        </div>
                        <p>Dan juga terdapat layanan untuk membersihkan ruangan yang terdapat pada rumah anda sehingga anda juga dapat memilih layanan ini saat anda membutuhkannya</p>
                        <!-- <a href="Javascript:void(0)">Read More</a> -->
                    </div>
                </div>

                <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12 border_right">
                    <div class="upcomimg">
                        <figure><img src="images/up.jpg" alt="#" /></figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end upcoming2 -->



    <!-- Gallery -->


    <div id="gallery" class="Gallery">
        <div class="container">
            <div class="row display_boxflex">
                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 margi_bott">
                            <div class="Gallery_img">
                                <figure><img src="images/Gallery1.jpg" alt="#" /></figure>
                            </div>
                            <div class="hover_box">

                                <ul class="icon_hu">
                                    <h3>Membersihkan Kaca</h3>
                                    <!-- <li><a href="#"><img src="icon/h.png" alt="#" /></a></li>
                                    <li><a href="#"><img src="icon/h.png" alt="#" /></a></li> -->
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 margi_bott">
                            <div class="Gallery_img">
                                <figure><img src="images/Gallery2.jpg" alt="#" /></figure>
                            </div>
                            <div class="hover_box">

                                <ul class="icon_hu">
                                    <h3>Membersihkan Lantai</h3>
                                    <!-- <li><a href="#"><img src="icon/h.png" alt="#" /></a></li>
                                    <li><a href="#"><img src="icon/h.png" alt="#" /></a></li> -->
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 margi_bott1">
                            <div class="Gallery_img">
                                <figure><img src="images/Gallery3.jpg" alt="#" /></figure>
                            </div>
                            <div class="hover_box">

                                <ul class="icon_hu">
                                    <h3>Membersihkan Kamar Mandi</h3>
                                    <!-- <li><a href="#"><img src="icon/h.png" alt="#" /></a></li>
                                    <li><a href="#"><img src="icon/h.png" alt="#" /></a></li> -->
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <div class="Gallery_img">
                                <figure><img src="images/Gallery4.jpg" alt="#" /></figure>
                            </div>
                            <div class="hover_box">

                                <ul class="icon_hu">
                                    <h3>Mencuci Baju</h3>
                                    <!-- <li><a href="#"><img src="icon/h.png" alt="#" /></a></li>
                                    <li><a href="#"><img src="icon/h.png" alt="#" /></a></li> -->
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                    <div class="Gallery_text">
                        <div class="titlepage">
                            <h2>Keep Healthy</h2>
                        </div>
                        <p>Kami akan melakukan pelayanan yang terbaik hingga anda puas</p>
                        <!-- <a href="Javascript:void(0)">Read More</a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- end Gallery -->
    <!--  footer -->
    <footr>
        <div class="footer ">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <form class="contact_bg">
                            <div class="row">
                                <div class="col-md-12">
                                    <!-- <div class="titlepage">
                                        <h2>Contact us</h2>
                                    </div>
                                    <div class="col-md-12">
                                        <input class="contactus" placeholder="Your Name" type="text" name="Your Name">
                                    </div>
                                    <div class="col-md-12">
                                        <input class="contactus" placeholder="Your Email" type="text" name="Your Email">
                                    </div>
                                    <div class="col-md-12">
                                        <input class="contactus" placeholder="Your Phone" type="text" name="Your Phone">
                                    </div>
                                    <div class="col-md-12">
                                        <textarea class="textarea" placeholder="Message" type="text"
                                            name="Message"></textarea>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <button class="send">Send</button>
                                    </div> -->
                                </div>
                            </div>
                        </form>

                    <!-- </div>
                    <div class="col-md-12 border_top">
                        <form class="news">
                            <h3>Newsletter</h3>
                            <input class="newslatter" placeholder="ENTER YOUR MAIL" type="text" name=" ENTER YOUR MAIL">
                            <button class="submit">Subscribe</button>
                        </form>
                    </div> -->
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 ">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 ">
                                <div class="address">
                                    <ul class="loca">
                                        <li>
                                            <a href="#"><img src="icon/loc.png" alt="#" /></a>Jember

                                        <li>

                                            <a href="#"><img src="icon/call.png" alt="#" /></a>+6287761675825
                                        </li>
                                        <li>
                                            <a href="#"><img src="icon/email.png" alt="#" /></a>demo@gmail.com
                                        </li>
                                    </ul>


                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 ">
                                <ul class="social_link">
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <div class="container">
                <div class="copyright">

                    <p>Keep Healthy</p>
                </div>
            </div>
        </div>
    </footr>
    <!-- end footer -->
    <!-- Javascript files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/plugin.js"></script>
    <!-- sidebar -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>




</body>

</html>
