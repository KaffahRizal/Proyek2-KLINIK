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
    <title>SENDIRI</title>
    <link
        rel="icon"
        href="{{asset('kaiadmin')}}/assets/img/kaiadmin/favicon.ico"
        type="image/x-icon"
        />
    
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{ asset('covido') }}/assets/css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="{{ asset('covido') }}/assets/css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="{{ asset('covido') }}/assets/css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="{{ asset('covido') }}/assets/images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="{{ asset('covido') }}/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
        media="screen">
    <link rel="stylesheet" href="https://rawgit.com/LeshikJanz/libraries/master/Bootstrap/baguetteBox.min.css">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout inner_page">
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="{{ asset('covido') }}/assets/images/loading.gif" alt="#" /></div>
    </div>
    <!-- end loader -->
    <!-- top -->
    <!-- header -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light p-3">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('covido') }}/assets/images/logoSendiri.png" alt="#" width="45px">
            <span class="sendiri">SENDIRI</span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Cari" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Cari</button>
        </form>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">

                <li class="nav-item  active">
                    <a class="nav-link" href="/">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/profil">Profil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/kontak">Kontak</a>
                </li>

                @if (Route::has('login'))    
                @auth
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/admin/dashboard') }}">Dashboard</a>
                </li>
                @else
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">Masuk</a>
                </li>
                    @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">Daftar</a>
                    </li>
                    @endif
                @endauth
                @endif
            </ul>
        </div>
    </nav>
    <!-- end header -->
    <!-- contact -->
    <div class="faskes">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage text_align_left">
                        <h2>Fasilitas Kesehatan Tingkat 2</h2>
                        <p class="text-justify">
                            Fasilitas kesehatan tingkat 2 menyediakan pelayanan kesehatan yang lebih kompleks
                            dibandingkan tingkat 1. Faskes tingkat 2 meliputi rumah sakit umum daerah (RSUD) kelas C dan
                            D yang menyediakan layanan medis dengan beberapa spesialis dasar seperti penyakit dalam,
                            bedah, anak, dan kebidanan serta kandungan dengan fasilitas rawat inap, ruang operasi, dan
                            laboratorium yang lebih lengkap dibandingkan faskes tingkat 1; rumah sakit swasta kelas C
                            dan D yang memiliki fasilitas dan layanan serupa dengan RSUD kelas C dan D tetapi dikelola
                            oleh pihak swasta; serta klinik utama yang menyediakan layanan spesialis dengan fasilitas
                            rawat inap dan biasanya memiliki lebih banyak spesialis dibandingkan klinik pratama.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <a href="#">
                            <div class="artikel-small">
                                <div class="artikel-small-img">
                                    <div class="image-box">
                                        <img src="{{ asset('covido') }}/assets/images/rumahsakit.png" alt="">
                                    </div>
                                </div>
                                <div class="artikel-small-content">
                                    <h3 class="font-weight-bold">RSUD Kelas C dan D</h3>
                                    <span class="text-justify">
                                        Menyediakan layanan medis dengan beberapa spesialis dasar seperti...
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <a href="#">
                            <div class="artikel-small">
                                <div class="artikel-small-img">
                                    <div class="image-box">
                                        <img src="{{ asset('covido') }}/assets/images/klinik.png" alt="">
                                    </div>
                                </div>
                                <div class="artikel-small-content">
                                    <h3 class="font-weight-bold">Klinik Utama</h3>
                                    <span class="text-justify">
                                        Klinik yang menyediakan layanan spesialis dengan fasilitas rawat inap...
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end contact -->
    <!--  footer -->
    <footer>
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="hedingh3 text_align_left">
                            <h3>Sumber</h3>
                            <ul class="menu_footer">
                                <li><a href="/">Beranda</a>
                                <li>
                                <li><a href="/profil">Profil</a>
                                <li>
                                <li> <a href="/kontak">Kontak</a>
                                <li>
                            </ul>


                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="hedingh3 text_align_left">
                            <h3>PROFIL</h3>
                            <p>
                                Sehat Mandiri bertujuan untuk memberikan akses yang mudah dan praktis
                                kepada masyarakat untuk mendapatkan informasi seputar kesehatan dan gaya hidup sehat.
                            </p>
                        </div>
                    </div>



                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="hedingh3  text_align_left">
                            <h3>Hubungi Kami</h3>
                            <ul class="top_infomation">
                                <li><i class="fa fa-map-marker" aria-hidden="true"></i>
                                    INDONESIA
                                </li>
                                <li><i class="fa fa-phone" aria-hidden="true"></i>
                                    +62 1234567890
                                </li>
                                <li><i class="fa fa-envelope" aria-hidden="true"></i>
                                    <a href="Javascript:void(0)">sendiri@gmail.com</a>
                                </li>
                            </ul>


                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="hedingh3 text_align_left">
                            <h3>Negara</h3>
                            <div class="map">
                                <img src="{{ asset('covido') }}/assets/images/indo11.png" alt="#" />
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 offset-md-2">
                            <p>© 2020 All Rights Reserved. Design by <a href="https://html.design/">Sehat Mandiri</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end footer -->
    <!-- Javascript files-->
    <script src="{{ asset('covido') }}/assets/js/jquery.min.js"></script>
    <script src="{{ asset('covido') }}/assets/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
    <script src="{{ asset('covido') }}/assets/js/owl.carousel.min.js"></script>
    <script src="{{ asset('covido') }}/assets/js/custom.js"></script>
</body>

</html>
