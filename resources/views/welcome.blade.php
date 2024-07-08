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

<body class="main-layout">
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

                <li class="nav-item active">
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
    <div class="full_bg">
        <!-- header inner -->
        <div class="section">
            <!-- carousel code -->
            <div id="banner1" class="carousel slide slider_main">
                <div class="carousel-inner">
                    <!-- first slide -->
                    <div class="carousel-item active">
                        <div class="carousel-caption cuplle">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="photog">
                                            <h1>SENDIRI</h1>
                                            <a class="read_more" href="#about">Read More</a>
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
    <!-- end banner -->
    <!-- about -->
    <div class="about">
        <div class="container_width">
            <div class="row d_flex">
                <div class="col-md-7">
                    <div class="titlepage text_align_left">
                        <h2>About sehat mandiri</h2>
                        <p class="text-justify">Sehat Mandiri bertujuan untuk memberikan akses yang mudah dan praktis
                            kepada masyarakat untuk mendapatkan informasi seputar kesehatan dan gaya hidup sehat. Kami
                            menyediakan konten-konten yang dapat membantu Anda meningkatkan kesehatan secara menyeluruh,
                            mulai dari tips kesehatan, informasi mengenai berbagai jenis penyakit, hingga gaya hidup
                            sehat.
                        </p>
                        <a class="read_more" href="/about">About More</a>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="about_img text_align_center">
                        <figure><img src="{{ asset('covido') }}/assets/images/logoSendiri.png" alt="#" />
                        </figure>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- end about -->
    <!-- coronata -->
    <div class="coronata">
        <div class="container">
            <div class="row d_flex grid">
                <div class="col-md-7">
                    <div class="coronata_img text_align_center">
                        <figure><img src="{{ asset('covido') }}/assets/images/stetoskop.png" alt="#" />
                        </figure>
                    </div>
                </div>
                <div class="col-md-5 oder1">
                    <div class="titlepage text_align_left">
                        <h2>fasilitas Kesehatan</h2>
                        <p class="text-justify">Program berikut merupakan upaya penyajian data Rumah Sakit dan
                            Puskesmas yang berada di Seluruh Indonesia, Sehingga diharapkan dapat memudahkan masyarakat
                            dalam mengetahui dan mengakses berbagai data yang diinginkan terkait pelayanan kesehatan
                            dalam satu buah Landing Page.
                        </p>
                        <a class="read_more" href="#">About More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end coronata -->

    <!-- protect -->
    <div class="protect">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage text_align_center">
                        <h2>Daftar Fasilitas Kesehatan</h2>
                        <p>Ada beberapa daftar fasilitas kesehatan yang umumnya ditemukan di Indonesia.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="protect_bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <!--  Demos -->
                        <div class="owl-carousel owl-theme">
                            <div class="item">
                                <div class="protect_box text_align_center">
                                    <div class="desktop">
                                        <i><img src="{{ asset('covido') }}/assets/images/faskes1.png" alt="#"
                                                width="500px"></i>
                                        <h3>Faskes Tingkat 1</h3>
                                        <span class="text-justify">
                                            Tempat pelayanan kesehatan pertama yang di tangani pasien BPJS yang ingin
                                            berobat, seperti Puskesmas, Klinik, atau Dokter Umum. Disebut juga Faskes
                                            Primer.
                                        </span>
                                    </div>
                                    <a class="read_more" href="/faskes1">See More</a>
                                </div>
                            </div>

                            <div class="item">
                                <div class="protect_box text_align_center">
                                    <div class="desktop">
                                        <i><img src="{{ asset('covido') }}/assets/images/faskes2.png"
                                                alt=""></i>
                                        <h3>Faskes Tingkat 2</h3>
                                        <span class="text-justify">
                                            Tempat pelayanan kesehatan lanjutan setelah menadpatkan rujukan dari Faskes
                                            1 yang spesialistis yang dilakukan dokter spesialis atau dokter spesialis.
                                        </span>
                                    </div>
                                    <a class="read_more" href="/faskes2">See More</a>
                                </div>
                            </div>

                            <div class="item">
                                <div class="protect_box text_align_center">
                                    <div class="desktop">
                                        <i><img src="{{ asset('covido') }}/assets/images/faskes3.png"
                                                alt=""></i>
                                        <h3>Faskes Tingkat Lanjutan</h3>
                                        <span class="text-justify">
                                            Tempat pelayanan kesehatan kanjutan terakhir kalau Faskes 2 tak sanggup
                                            menangani, seperti Klinik Utama, Rumah Sakit Umum, dan Rumah Sakit Khusus.
                                        </span>
                                    </div>
                                    <a class="read_more" href="/faskes3">See More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- end protect -->
    <!-- cases -->
    <div class="cases">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage text_align_center ">
                        <h2>Layanan Unggulan</h2>
                        <p>
                            Bagian ini menyoroti layanan unggulan yang tersedia di setiap tingkatan fasilitas kesehatan.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row d_flex">
                <div class=" col-md-4">
                    <div class="latest text_align_center justify-content-center">
                        <figure><img src="{{ asset('covido') }}/assets/images/gawatdarurat.jpg" alt="#" />
                        </figure>
                        {{-- <a class="read_more" href="cases.html">Read More</a> --}}
                        <div class="nostrud">
                            <h3>Pelayanan Gawat Darurat</h3>
                            <p>
                                Pelayanan gawat darurat adalah layanan kesehatan yang diberikan untuk menangani kondisi
                                medis yang membutuhkan penanganan cepat dan segera. Layanan ini dirancang untuk
                                mengatasi situasi darurat medis yang bisa mengancam nyawa, fungsi organ vital, atau
                                menyebabkan kecacatan permanen jika tidak ditangani segera.
                            </p>
                        </div>
                    </div>
                </div>
                <div class=" col-md-4">
                    <div class="latest text_align_center justify-content-center">
                        <figure><img src="{{ asset('covido') }}/assets/images/layananbedah.jpg" alt="#" />
                        </figure>
                        {{-- <a class="read_more" href="cases.html">Read More</a> --}}
                        <div class="nostrud">
                            <h3>Layanan Bedah</h3>
                            <p>
                                Layanan bedah adalah bagian penting dari sistem kesehatan yang menyediakan perawatan
                                bedah untuk mengatasi berbagai kondisi medis. Layanan ini melibatkan berbagai prosedur
                                bedah untuk mendiagnosis, mengobati, atau mencegah penyakit, serta memperbaiki atau
                                mengubah bagian tubuh tertentu.
                            </p>
                        </div>
                    </div>
                </div>
                <div class=" col-md-4">
                    <div class="latest text_align_center justify-content-center">
                        <figure><img src="{{ asset('covido') }}/assets/images/layananibuanak.png" alt="#" />
                        </figure>
                        {{-- <a class="read_more" href="cases.html">Read More</a> --}}
                        <div class="nostrud">
                            <h3>Pelayanan Kesehatan Ibu Anak</h3>
                            <p>
                                Pelayanan ini mencakup berbagai aspek perawatan kesehatan yang disesuaikan untuk
                                perempuan hamil, pasca melahirkan, bayi, dan anak-anak. Ini mencakup pendidikan
                                kesehatan, pencegahan penyakit, perawatan prenatal, persalinan, perawatan pasca
                                melahirkan, dan pemantauan pertumbuhan serta perkembangan anak.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end cases -->
    <!-- doctors -->
    <div class="doctors">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage text_align_center ">
                        <h2>Testimoni Pasien</h2>
                    </div>
                </div>
            </div>
            <div class="row d_flex">
                <div class=" col-md-6">
                    <div id="ho_efcet" class="reader text_align_center">
                        <i><img src="{{ asset('covido') }}/assets/images/pasiens.png" alt="#" /></i>
                        <h3>Hashimoto Kanna</h3>
                        <p>
                            Pengalaman saya di Rumah Sakit Pendidikan sangat positif. Mahasiswa kedokteran yang sedang
                            praktek sangat teliti dan didampingi oleh dokter-dokter senior yang berpengalaman. Perawatan
                            yang saya terima sangat memuaskan.
                        </p>
                        <span><img src="{{ asset('covido') }}/assets/images/do.png" alt="#" /></span>
                    </div>
                </div>
                <div class=" col-md-6">
                    <div id="ho_efcet" class="reader text_align_center">
                        <i><img src="{{ asset('covido') }}/assets/images/pasiens1.jpg" alt="#" /></i>
                        <h3>Pace Yunus</h3>
                        <p>
                            Klinik Pratama di dekat rumah saya selalu memberikan pelayanan terbaik. Dokter dan bidannya
                            sangat sabar dan menjelaskan setiap prosedur dengan detail. Saya sangat merekomendasikan
                            klinik ini.
                        </p>
                        <span><img src="{{ asset('covido') }}/assets/images/do.png" alt="#" /></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end cases -->

    <!--  footer -->
    <footer>
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="hedingh3 text_align_left">
                            <h3>Resources</h3>
                            <ul class="menu_footer">
                                <li><a href="/">Beranda</a>
                                <li>
                                <li><a href="/about">Profil</a>
                                <li>
                                <li> <a href="javascript:void(0)">Kontak</a>
                                <li>
                            </ul>


                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="hedingh3 text_align_left">
                            <h3>About</h3>
                            <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their
                                default model text, and a search for 'lorem ipsum' will uncover many web sites still in
                                their infancy. Various</p>
                        </div>
                    </div>



                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="hedingh3  text_align_left">
                            <h3>Contact Us</h3>
                            <ul class="top_infomation">
                                <li><i class="fa fa-map-marker" aria-hidden="true"></i>
                                    Making this the first true
                                </li>
                                <li><i class="fa fa-phone" aria-hidden="true"></i>
                                    Call : +01 1234567890
                                </li>
                                <li><i class="fa fa-envelope" aria-hidden="true"></i>
                                    <a href="Javascript:void(0)">Email : demo@gmail.com</a>
                                </li>
                            </ul>


                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="hedingh3 text_align_left">
                            <h3>countrys</h3>
                            <div class="map">
                                <img src="{{ asset('covido') }}/assets/images/map.png" alt="#" />
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 offset-md-2">
                            <p>© 2020 All Rights Reserved. Design by <a href="https://html.design/"> Free html
                                    Templates</a></p>
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
