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
    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> --}}
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
    <section class="section">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="card">
                    <div class="card-body">
                        <form action="faskes/tambah" method="POST" class="py-3">
                            @csrf
                            <div class="form-group row d-flex justify-content-center">
                                <label for="nama" class="col-form-label col-8">Nama Fasilitas Kesehatan</label>
                                <div class="col-8">
                                    <input id="nama" name="nama" type="text"
                                        class="form-control border border-secondary">
                                </div>
                            </div>
                            <div class="form-group row d-flex justify-content-center">
                                <label for="nama_pengelola" class="col-form-label col-8">Nama Pengelola</label>
                                <div class="col-8">
                                    <input id="nama_pengelola" name="nama_pengelola" type="text"
                                        class="form-control border border-secondary">
                                </div>
                            </div>
                            <div class="form-group row d-flex justify-content-center">
                                <label for="alamat" class="col-form-label col-8">Alamat</label>
                                <div class="col-8">
                                    <input id="alamat" name="alamat" type="text"
                                        class="form-control border border-secondary">
                                </div>
                            </div>
                            <div class="form-group row d-flex justify-content-center">
                                <label for="website" class="col-form-label col-8">Website</label>
                                <div class="col-8">
                                    <input id="website" name="website" type="text"
                                        class="form-control border border-secondary">
                                </div>
                            </div>
                            <div class="form-group row d-flex justify-content-center">
                                <label for="email" class="col-form-label col-8">Email</label>
                                <div class="col-8">
                                    <input id="email" name="email" type="email"
                                        class="form-control border border-secondary">
                                </div>
                            </div>
                            <div class="form-group row d-flex justify-content-center">
                                <label for="kabkota_id" class="form-label col-8">Kabupaten/Kota</label>
                                <div class="col-8">
                                    <select name="kabkota_id" id="kabkota_id"
                                        class="custom-select form-select border border-secondary">
                                        <option value="">Pilih Kabupaten/Kota</option>
                                        @foreach ($kabkota as $kabkota)
                                            <option value="{{ $kabkota->id }}">{{ $kabkota->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row d-flex justify-content-center">
                                <label for="rating" class="col-form-label col-8">Rating</label>
                                <div class="col-8">
                                    <input id="rating" name="rating" type="text"
                                        class="form-control border border-secondary">
                                </div>
                            </div>
                            <div class="form-group row d-flex justify-content-center">
                                <label for="latitude" class="col-form-label col-8">Latitude</label>
                                <div class="col-8">
                                    <input id="latitude" name="latitude" type="text"
                                        class="form-control border border-secondary">
                                </div>
                            </div>
                            <div class="form-group row d-flex justify-content-center">
                                <label for="longitude" class="col-form-label col-8">Longitude</label>
                                <div class="col-8">
                                    <input id="longitude" name="longitude" type="text"
                                        class="form-control border border-secondary">
                                </div>
                            </div>
                            <div class="form-group row d-flex justify-content-center">
                                <label for="jenis_faskes_id" class="col-form-label col-8">Jenis Faskes</label>
                                <div class="col-8">
                                    <select name="jenis_faskes_id" id="jenis_faskes_id"
                                        class="custom-select form-select border border-secondary">
                                        <option value="">Pilih Jenis Faskes</option>
                                        @foreach ($jenis_faskes as $jenis_faskes)
                                            <option value="{{ $jenis_faskes->id }}">{{ $jenis_faskes->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row d-flex justify-content-center">
                                <label for="kategori_id" class="col-form-label col-8">Kategori</label>
                                <div class="col-8">
                                    <select name="kategori_id" id="kategori_id"
                                        class="custom-select form-select border border-secondary">
                                        <option value="">Pilih Kategori</option>
                                        @foreach ($kategoris as $kategori)
                                            <option value="{{ $kategori->id }}">{{ $kategori->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row d-flex justify-content-center">
                                <div class="col-8 d-flex justify-content-center">
                                    <a href="{{ route('faskes') }}"
                                        class="btn btn-danger btn-rounded mr-3">Cancel</a>
                                    <button name="submit" type="submit"
                                        class="btn btn-primary btn-rounded">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
