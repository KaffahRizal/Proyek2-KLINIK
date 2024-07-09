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
    <title>Covido</title>
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

            </ul>

            <ul class="navbar-nav ml-4">
                <li class="nav-item">
                    <a class="nav-link" href="#">Masuk</a>
                </li>
                <li class="nav-item ml-2">
                    <a class="nav-link" href="#">Daftar</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- end header -->
    <!-- contact -->
    <div class="coronata">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage text_align_left">
                        <h2>Fasilitas Kesehatan Tingkat Lanjutan</h2>
                        <p class="text-justify">
                            Fasilitas kesehatan tingkat lanjutan adalah fasilitas yang menyediakan layanan kesehatan yang lebih canggih dan kompleks dengan berbagai sub-spesialisasi medis. Faskes tingkat lanjutan meliputi rumah sakit umum daerah (RSUD) kelas A dan B yang menyediakan layanan medis lengkap dengan berbagai spesialis dan sub-spesialis serta memiliki fasilitas canggih seperti ICU, NICU, PICU, dan peralatan diagnostik mutakhir; rumah sakit swasta kelas A dan B yang menyediakan layanan serupa dengan RSUD kelas A dan B tetapi dikelola oleh pihak swasta; serta rumah sakit pendidikan yang berfungsi sebagai tempat pendidikan bagi mahasiswa kedokteran dan profesi kesehatan lainnya, biasanya terkait dengan fakultas kedokteran suatu universitas. Fasilitas kesehatan tingkat lanjutan juga mencakup rumah sakit khusus yang fokus pada bidang tertentu seperti rumah sakit jantung, rumah sakit kanker, dan rumah sakit mata. Pembagian tingkat fasilitas kesehatan ini bertujuan untuk memastikan bahwa setiap tingkatan memiliki kemampuan dan peralatan yang sesuai dengan kompleksitas kasus yang mereka tangani, sehingga sistem rujukan dapat berjalan dengan efektif dan efisien.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <div class="card">
                        <a href="#">
                            <div class="artikel-small">
                                <div class="artikel-small-img">
                                    <div class="image-box">
                                        <img src="{{ asset('covido') }}/assets/images/rumahsakit.png" alt="">
                                    </div>
                                </div>
                                <div class="artikel-small-content">
                                    <h3 class="font-weight-bold">RSUD Kelas A dan B</h3>
                                    <span class="text-justify">
                                        Menyediakan layanan medis lengkap dengan berbagai spesialis dan...
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="card">
                        <a href="#">
                            <div class="artikel-small">
                                <div class="artikel-small-img">
                                    <div class="image-box">
                                        <img src="{{ asset('covido') }}/assets/images/rumahsakit.png" alt="">
                                    </div>
                                </div>
                                <div class="artikel-small-content">
                                    <h3 class="font-weight-bold">RS Pendidikan</h3>
                                    <span class="text-justify">
                                        Berfungsi sebagai tempat pendidikan bagi mahasiswa kedokteran...
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="card">
                        <a href="#">
                            <div class="artikel-small">
                                <div class="artikel-small-img">
                                    <div class="image-box">
                                        <img src="{{ asset('covido') }}/assets/images/rumahsakit.png" alt="">
                                    </div>
                                </div>
                                <div class="artikel-small-content">
                                    <h3 class="font-weight-bold">RS Khusus</h3>
                                    <span class="text-justify">
                                        Fokus pada bidang tertentu seperti rumah sakit jantung...
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
