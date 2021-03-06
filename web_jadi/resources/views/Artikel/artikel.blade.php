<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>KeepHealthy</title>
    <link href="/css/media_query.css" rel="stylesheet" />
    <link href="/css/bootstrap.css" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="/css/animate.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <link href="/css/owl.carousel.css" rel="stylesheet" />
    <link href="/css/owl.theme.default.css" rel="stylesheet" />
    <!-- Bootstrap CSS -->
    <link href="/css/style_Artikel.css" rel="stylesheet" />

    <link rel="icon" href="/images/fevicon.png" type="/image/gif" />
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

        <!-- page -->
        <link href="/assets_page/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font CSS -->
    <link href="/assets_page/css/boxicon.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
    <!-- Load Tempalte CSS -->
    <link rel="stylesheet" href="/assets_page/css/templatemo.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="/assets_page/css/custom.css">


    
    <!-- Additional CSS Files -->
    


    <!-- Modernizr JS -->
    <script src="/js/modernizr-3.5.0.min.js"></script>
</head>

<body>
    <!-- Header -->
    <div class="loader_bg">
        <div class="loader"><img src="/images/loading.gif" alt="#" /></div>
    </div>

    <header>
        <!-- header inner -->
        <div class="header-top-artikel">
            <div class="header" style="background-color: #0BF7C8;">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-3 col logo_section">
                            <div class="full">
                                <div class="center-desk">
                                    <div class="logo">
                                        <a href="{{ url('/home') }}"><img src="/images/logo.png" alt="#" /></a>
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
                                            <li> <a href="/layouts/katalog">Layanan</a> </li>
                                            <li> <a href="/mitra/register">Menjadi Mitra</a> </li>
                                            <!-- <li> <a href="/Artikel/artikel">Artikel </a> </li> -->
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
    </header>


    <div class="container-fluid paddding mb-5" style="padding-top: 84px;">
        <div class="row mx-0">
            @foreach ($dataterbaruleft as $item)
            <?php
                $isiartikel = substr($item->isiartikel, 100, 100);?>
            <div class="col-md-6 col-12 paddding animate-box" data-animate-effect="fadeIn">
                <div class="fh5co_suceefh5co_height"><img src="{{ asset('artikel/'. $item->upload_foto ) }}"
                        alt="img" />
                    <div class="fh5co_suceefh5co_height_position_absolute"></div>
                    <div class="fh5co_suceefh5co_height_position_absolute_font">
                        <div><a href="#" class="color_fff"> <i
                                    class="fa fa-clock-o"></i>&nbsp;&nbsp;{{$item['tanggal_upload']}} </a></div>
                        <div><a href="{{ url('/single', $item->namaartikel) }}" class="fh5co_good_font_2">
                                {{$item['namaartikel']}} </a></div>
                        <div class="fh5co_consectetur" style="color: white;  ">
                            {!!$isiartikel!!}
                            <a href="{{ url('/single', $item->namaartikel) }}" style="color:aqua;">Readmore
                            </a>

                        </div>

                    </div>
                </div>
            </div>
            @endforeach
            <div class="col-md-6">
                <div class="row">
                    @foreach ($dataterbaruright as $item)
                    <?php
                $isiartikel = substr($item->isiartikel, 100, 100);?>
                    <div class="col-md-6 col-6 paddding animate-box" data-animate-effect="fadeIn">
                        <div class="fh5co_suceefh5co_height_2"><img src="{{ asset('artikel/'. $item->upload_foto ) }}"
                                alt="" />
                            <div class="fh5co_suceefh5co_height_position_absolute"></div>
                            <div class="fh5co_suceefh5co_height_position_absolute_font_2">
                                <div style="position:relative; top:-150px;"><a href="#" class="color_fff"> <i
                                            class="fa fa-clock-o"></i>&nbsp;&nbsp;{{$item['tanggal_upload']}} </a></div>
                                <div style="position:relative; top:-140px;"><a
                                        href="{{ url('/single', $item->namaartikel) }}" class="fh5co_good_font_2">
                                        {{$item['namaartikel']}} </a></div>
                                <div class="fh5co_consectetur" style="color: white; position:relative; top:-138px; ">
                                    {!!$isiartikel!!}
                                    <a href="{{ url('/single', $item->namaartikel) }}" style="color:aqua;">Readmore
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- <div class="container-fluid pt-3">
    <div class="container animate-box" data-animate-effect="fadeIn">
        <div>
            <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Trending</div>
        </div>
        <div class="owl-carousel owl-theme js" id="slider1">
            <div class="item px-2">
                <div class="fh5co_latest_trading_img_position_relative">
                    <div class="fh5co_latest_trading_img"><img src="/imagess/allef-vinicius-108153.jpg" alt=""
                                                           class="fh5co_img_special_relative"/></div>
                    <div class="fh5co_latest_trading_img_position_absolute"></div>
                    <div class="fh5co_latest_trading_img_position_absolute_1">
                        <a href="single.html" class="text-white"> Here's a new way to take better photos for instagram </a>
                        <div class="fh5co_latest_trading_date_and_name_color"> Walter Johson - March 7,2017</div>
                    </div>
                </div>
            </div>
            <div class="item px-2">
                <div class="fh5co_latest_trading_img_position_relative">
                    <div class="fh5co_latest_trading_img"><img src="/imagess/abigail-keenan-65477.jpg" alt="" class="fh5co_img_special_relative"/></div>
                    <div class="fh5co_latest_trading_img_position_absolute"></div>
                    <div class="fh5co_latest_trading_img_position_absolute_1">
                        <a href="single.html" class="text-white"> Here's a new way to take better photos for instagram </a>
                        <div class="fh5co_latest_trading_date_and_name_color"> Walter Johson - March 7,2017</div>
                    </div>
                </div>
            </div>
            <div class="item px-2">
                <div class="fh5co_latest_trading_img_position_relative">
                    <div class="fh5co_latest_trading_img"><img src="/imagess/ryan-moreno-98837.jpg" alt="" class="fh5co_img_special_relative"/></div>
                    <div class="fh5co_latest_trading_img_position_absolute"></div>
                    <div class="fh5co_latest_trading_img_position_absolute_1">
                        <a href="single.html" class="text-white"> Here's a new way to take better photos for instagram </a>
                        <div class="fh5co_latest_trading_date_and_name_color"> Walter Johson - March 7,2017</div>
                    </div>
                </div>
            </div>
            <div class="item px-2">
                <div class="fh5co_latest_trading_img_position_relative">
                    <div class="fh5co_latest_trading_img"><img src="/imagess/science-578x362.jpg" alt="" class="fh5co_img_special_relative"/></div>
                    <div class="fh5co_latest_trading_img_position_absolute"></div>
                    <div class="fh5co_latest_trading_img_position_absolute_1">
                        <a href="single.html" class="text-white"> Here's a new way to take better photos for instagram </a>
                        <div class="fh5co_latest_trading_date_and_name_color"> Walter Johson - March 7,2017</div>
                    </div>
                </div>
            </div>
            <div class="item px-2">
                <div class="fh5co_latest_trading_img_position_relative">
                    <div class="fh5co_latest_trading_img"><img src="/imagess/nick-karvounis-78711.jpg" alt="" class="fh5co_img_special_relative"/></div>
                    <div class="fh5co_latest_trading_img_position_absolute"></div>
                    <div class="fh5co_latest_trading_img_position_absolute_1">
                        <a href="single.html" class="text-white"> Here's a new way to take better photos for instagram </a>
                        <div class="fh5co_latest_trading_date_and_name_color"> Walter Johson - March 7,2017</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->

    <div class="container-fluid pb-4 pt-5">
        <div class="container animate-box">
            <div>
                <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">News</div>
            </div>
            <div class="owl-carousel owl-theme" id="slider2">
                @foreach ($dataterbarunews as $item)
                <div class="item px-2">
                    <div class="fh5co_hover_news_img">
                        <div class="fh5co_news_img"><img src="{{ asset('artikel/'. $item->upload_foto ) }}" alt="" />
                        </div>
                        <div>
                            <a href="{{ url('/single', $item->namaartikel) }}"
                                class="d-block fh5co_small_post_heading"><span
                                    class="">{{$item['namaartikel']}}</span></a>
                            <div class="c_g"><i class="fa fa-clock-o"></i>{{$item['tanggal_upload']}}</div>
                            <a href="{{ url('/single', $item->namaartikel) }}" style="color:aqua;">Readmore
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="container-fluid pb-4 pt-4 paddding">
        <div class="container paddding">
            <div class="row mx-0">
                <div class="col-md-8 animate-box" data-animate-effect="fadeInLeft">
                    <div>
                        <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">News</div>
                    </div>
                    @foreach ($semuaartikel as $item)
                    <?php
                $isiartikel = substr($item->isiartikel,100,100);?>


                    <div class="row pb-4">
                        <div class="col-md-5">
                            <div class="fh5co_hover_news_img">
                                <div class="fh5co_news_img"><img src="{{ asset('artikel/'. $item->upload_foto ) }}"
                                        alt="" /></div>

                            </div>
                        </div>
                        <div class="col-md-7 animate-box">
                            <a href="{{ url('/single', $item->namaartikel) }}" class="fh5co_magna py-2">
                                {{$item['namaartikel']}}</a>
                            <p class="fh5co_mini_time py-3"> {{$item['tanggal_upload']}} </p>
                            <p class="fh5co_consectetur"> {!!($isiartikel)!!} </p>
                            <a href="{{ url('/single', $item->namaartikel)}}" style="color: aqua;">Readmore </a>
                        </div>
                    </div>
                    @endforeach
                </div>
                <!-- <div class="col-md-3 animate-box" data-animate-effect="fadeInRight">
                <div>
                    <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Tags</div>
                </div>
                <div class="clearfix"></div>
                <div class="fh5co_tags_all">
                    <a href="#" class="fh5co_tagg">Business</a>
                    <a href="#" class="fh5co_tagg">Technology</a>
                    <a href="#" class="fh5co_tagg">Sport</a>
                    <a href="#" class="fh5co_tagg">Art</a>
                    <a href="#" class="fh5co_tagg">Lifestyle</a>
                    <a href="#" class="fh5co_tagg">Three</a>
                    <a href="#" class="fh5co_tagg">Photography</a>
                    <a href="#" class="fh5co_tagg">Lifestyle</a>
                    <a href="#" class="fh5co_tagg">Art</a>
                    <a href="#" class="fh5co_tagg">Education</a>
                    <a href="#" class="fh5co_tagg">Social</a>
                    <a href="#" class="fh5co_tagg">Three</a>
                </div>
                <div>
                    <div class="fh5co_heading fh5co_heading_border_bottom pt-3 py-2 mb-4">Most Popular</div>
                </div>
                <div class="row pb-3">
                    <div class="col-5 align-self-center">
                        <img src="/imagess/download (1).jpg" alt="img" class="fh5co_most_trading"/>
                    </div>
                    <div class="col-7 paddding">
                        <div class="most_fh5co_treding_font"> Magna aliqua ut enim ad minim veniam quis nostrud.</div>
                        <div class="most_fh5co_treding_font_123"> April 18, 2016</div>
                    </div>
                </div>
                <div class="row pb-3">
                    <div class="col-5 align-self-center">
                        <img src="/imagess/allef-vinicius-108153.jpg" alt="img" class="fh5co_most_trading"/>
                    </div>
                    <div class="col-7 paddding">
                        <div class="most_fh5co_treding_font"> Enim ad minim veniam nostrud xercitation ullamco.</div>
                        <div class="most_fh5co_treding_font_123"> April 18, 2016</div>
                    </div>
                </div>
                <div class="row pb-3">
                    <div class="col-5 align-self-center">
                        <img src="/imagess/download (2).jpg" alt="img" class="fh5co_most_trading"/>
                    </div>
                    <div class="col-7 paddding">
                        <div class="most_fh5co_treding_font"> Magna aliqua ut enim ad minim veniam quis nostrud.</div>
                        <div class="most_fh5co_treding_font_123"> April 18, 2016</div>
                    </div>
                </div>
                <div class="row pb-3">
                    <div class="col-5 align-self-center"><img src="/imagess/seth-doyle-133175.jpg" alt="img"
                                                              class="fh5co_most_trading"/></div>
                    <div class="col-7 paddding">
                        <div class="most_fh5co_treding_font"> Magna aliqua ut enim ad minim veniam quis nostrud.</div>
                        <div class="most_fh5co_treding_font_123"> April 18, 2016</div>
                    </div>
                </div>
            </div> -->
            </div>
        
            @include('pagination.default', ['paginator' => $semuaartikel])
        
            <!-- <ul class="pagination justify-content-center mb-10">
                {{ $semuaartikel->links() }}
            </ul> -->

        </div>
    </div>


    <div class="gototop js-top">
        <a href="#" class="js-gotop"><i class="fa fa-arrow-up"></i></a>
    </div>
    <!-- Footer -->
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
                                                <a href="#"><img src="/icon/loc.png" alt="#" /></a>Jember

                                            <li>

                                                <a href="https://api.whatsapp.com/send?phone=6287761675825"><img src="/icon/call.png" alt="#" /></a>+6287761675825
                                            </li>
                                            <li>
                                                <a href="#"><img src="/icon/email.png" alt="#" /></a>rifqierdiansyah@gmail.com
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
    <!-- Akhir Footer -->
    



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="/js/owl.carousel.min.js"></script>
    <!--<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"
        integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"
        integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous">
    </script>
    <!-- Waypoints -->
    <script src="/js/jquery.waypoints.min.js"></script>
    <!-- Main -->
    <script src="/js/main.js"></script>


    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.bundle.min.js"></script>
    <script src="/js/jquery-3.0.0.min.js"></script>
    <script src="/js/plugin.js"></script>
    <!-- sidebar -->
    <script src="/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="/js/custom.js"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>

</body>

</html>