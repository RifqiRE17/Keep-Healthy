<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">

    <title>LAYANAN SERVICE</title>

    <!-- Bootstrap core CSS -->
    <link href="/vendor_katalog/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!--
  header
  

TemplateMo 546 Sixteen Clothing

https://templatemo.com/tm-546-sixteen-clothing

-->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="/assets_katalog/css/fontawesome.css">
    <link rel="stylesheet" href="/assets_katalog/css/templatemo-sixteen.css">
    <link rel="stylesheet" href="/assets_katalog/css/owl.css">
    <!-- header Head Awal -->

    <!-- Header Awal -->
    <link rel="icon" href="/images/fevicon.png" type="image/gif" />
    <!-- bootstrap css -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="/css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="/css/responsive.css">
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="/css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
        media="screen">


    <!-- Modernizr JS -->
    <script src="/js/modernizr-3.5.0.min.js"></script>
    <!-- Header Head Akhir -->

</head>

<body>
    <!-- Body Header Awal -->
    <header>
        <!-- header inner -->
        <div class="header-top-katalog">
            <div class="header">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-3 col logo_section">
                            <div class="full">
                                <div class="center-desk">
                                    <div class="logo">
                                        <a href="index.html"><img src="/images/logo.png" alt="#" /></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-10 col-lg-10 col-md-10 col-sm-9">

                            <div class="menu-area">
                                <div class="limit-box">
                                    <nav class="main-menu ">
                                        <ul class="menu-area-main">
                                            <li> <a href="{{ url('/home') }}">Halaman Awal</a> </li>
                                            <!-- <li> <a href="/layouts/katalog">Layanan</a> </li> -->
                                            <li> <a href="/mitra/register">Menjadi Mitra</a> </li>
                                            <li> <a href="/Artikel/artikel">Artikel </a> </li>
                                            <!-- <li>

                                                <a href="{{ route('login') }}" class="text-center">Login</a>

                                            </li> -->
                                            <li>
                                                <!-- <li> <a href="concerts.html">Artikel </a> </li> -->
                                            </li>
                                            <li class="nav-item dropdown">
                                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#"
                                                    role="button" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false" v-pre>
                                                    {{ Auth::user()->name }}
                                                </a>

                                                <div class="dropdown-menu dropdown-menu-right"
                                                    aria-labelledby="navbarDropdown">
                                                    <a class="dropdown-item" style="background-color: aqua;"
                                                        href="{{ url('profile') }}">
                                                        Profil
                                                    </a>
                                                    <br>
                                                    <a class="dropdown-item" style="background-color: aqua;"
                                                        href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                        {{ __('Logout') }}
                                                    </a>




                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                        class="d-none">
                                                        @csrf
                                                    </form>
                                                </div>
                                            </li>



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
                                                        src="/icon/playstore.png" alt="#" />Dapatkan DI Google Play</a>
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
                                                        src="/icon/playstore.png" alt="#" />Dapatkan DI Google Play</a>
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
                                                        src="/icon/playstore.png" alt="#" />Dapatkan DI Google Play</a>
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

    <!-- Body Header Akhir -->

    <!-- ***** Preloader Start ***** -->
    <!-- <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>   -->
    <div class="loader_bg">
        <div class="loader"><img src="/images/loading.gif" alt="#" /></div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- Header -->

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="header-top">
        <div class="header">
            <div class="container">
                <div class="row">
                    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-3 col logo_section">
                        <div class="full">
                            <div class="center-desk">
                                <div class="logo">
                                    <a href="index.html"><img src="/images/logo.png" alt="#" /></a>
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
                                                        <p>Dengan aplikasi kami anda daoat menyewa jasa pembersihan
                                                            rumah dengan
                                                            mudah dan
                                                            cepat hanya dengan melakukan beberapa klik pada smartphone
                                                            anda.
                                                            Maka kami akan
                                                            siap datang kerumah anda dengan segera</p>
                                                        <a href="#"><img style=" width: 50px; height: 50px;"
                                                                src="/icon/playstore.png" alt="#" />Dapatkan DI Google
                                                            Play</a>
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
                                                        <p>Dengan aplikasi kami anda daoat menyewa jasa pembersihan
                                                            rumah dengan
                                                            mudah dan
                                                            cepat hanya dengan melakukan beberapa klik pada smartphone
                                                            anda.
                                                            Maka kami akan
                                                            siap datang kerumah anda dengan segera</p>
                                                        <a href="#"><img style=" width: 50px; height: 50px;"
                                                                src="/icon/playstore.png" alt="#" />Dapatkan DI Google
                                                            Play</a>
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
                                                        <p>Dengan aplikasi kami anda daoat menyewa jasa pembersihan
                                                            rumah dengan
                                                            mudah dan
                                                            cepat hanya dengan melakukan beberapa klik pada smartphone
                                                            anda.
                                                            Maka kami akan
                                                            siap datang kerumah anda dengan segera</p>
                                                        <a href="#"><img style=" width: 50px; height: 50px;"
                                                                src="/icon/playstore.png" alt="#" />Dapatkan DI Google
                                                            Play</a>
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
                <!-- Banner Ends Here -->

                

                <div class="latest-products">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="section-heading">
                                    <h2>List Layanan</h2>
                                    <div class="col-md-4">
                            <form action="{{ url('layouts/katalog') }}" method="get">
                                <div class="input-group custom-search-form">
                                    <input type="text" name="keyword" class="form-control" placeholder="search">
                                    <span class="input-group-btn">
                                        <button type="submit" class="btn btn-primary">Pencarian</button>
                                    </span>
                                </div>
                            </form>
                        </div>
                                    <a href="products.html"><i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                            @foreach ($katalog as $item)
                            <div class="col-md-4">

                                <div class="product-item">

                                    <a href="#"><img src="{{ asset('user/'. $item->foto ) }}" alt=""></a>
                                    <div class="down-content">

                                        <h4> {{$item['nama']}}</h4>

                                        <p>{{$item['layanan_servis']}}</p>
                                        <a href="https://api.whatsapp.com/send?phone=62{{$item['nomor']}}">
                                            <span>{{$item['nomor']}}</span></a>


                                        @foreach ($data as $item)
                                        <h6>{{$item['harga_servis']}}</h6>
                                        @endforeach







                                    </div>
                                </div>
                            </div>
                            @endforeach

                         
                        </div>
                    </div>
                </div>
                <ul class="pagination justify-content-center mb-10">
                    {{ $katalog->links() }}
                </ul>

                <div id="gallery" class="Gallery">
                    <div class="container">
                        <div class="row display_boxflex">
                            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 margi_bott">
                                        <div class="Gallery_img">
                                            <figure><img src="/images/Gallery1.jpg" alt="#" /></figure>
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
                                            <figure><img src="/images/Gallery2.jpg" alt="#" /></figure>
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
                                            <figure><img src="/images/Gallery3.jpg" alt="#" /></figure>
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
                                            <figure><img src="/images/Gallery4.jpg" alt="#" /></figure>
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




                <!-- <div class="call-to-action">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <div class="row">
                <div class="col-md-8">
                  <h4>Creative &amp; Unique <em>Sixteen</em> Products</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque corporis amet elite author nulla.</p>
                </div>
                <div class="col-md-4">
                  <a href="#" class="filled-button">Purchase Now</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> -->


                <!-- <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <p>Copyright &copy; 2020 Sixteen Clothing Co., Ltd.
            
            - Design: <a rel="nofollow noopener" href="https://templatemo.com" target="_blank">TemplateMo</a></p>
            </div>
          </div>
        </div>
      </div>
    </footer> -->

                <!-- Footer Awal -->
                <footr>
                    <div class="footer">
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
                                                            <a href="#"><img src="/icon/loc.png" alt="#" /></a>Jember

                                                        <li>

                                                            <a href="#"><img src="/icon/call.png"
                                                                    alt="#" /></a>+6287761675825
                                                        </li>
                                                        <li>
                                                            <a href="#"><img src="/icon/email.png"
                                                                    alt="#" /></a>demo@gmail.com
                                                        </li>
                                                    </ul>


                                                </div>
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 ">
                                                <ul class="social_link">
                                                    <li><a href="#"><i class="fa fa-facebook"
                                                                aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-linkedin-square"
                                                                aria-hidden="true"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-instagram"
                                                                aria-hidden="true"></i></a></li>
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
                <!-- Footer Akhir -->


                <!-- Bootstrap core JavaScript -->
                <script src="/vendor_katalog/jquery/jquery.min.js"></script>
                <script src="/vendor_katalog/bootstrap/js/bootstrap.bundle.min.js"></script>




                <!-- Additional Scripts -->
                <script src="/assets_katalog/js/custom.js"></script>
                <script src="/assets_katalog/js/owl.js"></script>
                <script src="/assets_katalog/js/slick.js"></script>
                <script src="/assets_katalog/js/isotope.js"></script>
                <script src="/assets_katalog/js/accordions.js"></script>


                <script src="/js/popper.min.js"></script>
                <script src="/js/bootstrap.bundle.min.js"></script>
                <script src="/js/jquery-3.0.0.min.js"></script>
                <script src="/js/plugin.js"></script>
                <!-- sidebar -->
                <script src="/js/jquery.mCustomScrollbar.concat.min.js"></script>
                <script src="/js/custom.js"></script>
                <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>


                <script language="text/Javascript">
                cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
                function clearField(t) { //declaring the array outside of the
                    if (!cleared[t.id]) { // function makes it static and global
                        cleared[t.id] = 1; // you could use true and false, but that's more typing
                        t.value = ''; // with more chance of typos
                        t.style.color = '#fff';
                    }
                }
                </script>


</body>

</html>