<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Tracking Covid 19</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('frontend/assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('frontend/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('frontend/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/vendor/venobox/venobox.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/vendor/aos/aos.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('frontend/assets/css/style.css') }}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: OnePage - v2.2.2
  * Template URL: https://bootstrapmade.com/onepage-multipurpose-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">

            <h1 class="logo mr-auto"><a href="index.html">TrackingCovid</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo mr-auto"><img src="{{ asset('frontend/assets/img/logo.png') }}" alt="" class="img-fluid"></a>-->

            <nav class="nav-menu d-none d-lg-block">
                <ul>
                    <li class="active"><a href="/">Home</a></li>
                    <li><a href="#about">About</a></li>
                </ul>
            </nav><!-- .nav-menu -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-9 text-center">
                    <h1>Tracking Covid - 19</h1>
                    <h2>Coronavirus Global & Indonesia</h2>
                </div>
            </div>
            <div class="text-center">
                <a href="#about" class="btn-get-started scrollto">Get Started</a>
            </div>

            <div class="row icon-boxes">
                <div class="col-lg-4 col-md-6" data-aos="zoom-im" data-aos-delay="100">
                    <div class="icon-box1">
                        <div class="d-flex">
                            <div class="">
                                <h4 class="title1"><a href="">Total Positif</a></h4>
                                <p class="deskripsi-no1">{{ $positif }}</p>
                                <p class="deskripsi">Orang</p>
                            </div>
                            <div class="ml-auto">
                                <div class="icon1"><img src="{{ asset('frontend/assets/img/sad.png') }}" width="70px"
                                        height="70px"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="zoom-im" data-aos-delay="100">
                    <div class="icon-box2">
                        <div class="d-flex">
                            <div class="">
                                <h4 class="title2"><a href="">Total Sembuh</a></h4>
                                <p class="deskripsi-no2">{{ $sembuh }}</p>
                                <p class="deskripsi">Orang</p>
                            </div>
                            <div class="ml-auto">
                                <div class="icon2"><img src="{{ asset('frontend/assets/img/happy.png') }}"
                                        width="70px" height="70px"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="zoom-im" data-aos-delay="100">
                    <div class="icon-box3">
                        <div class="d-flex">
                            <div class="">
                                <h4 class="title3"><a href="">Total Meninggal</a></h4>
                                <p class="deskripsi-no3">{{ $meninggal }}</p>
                                <p class="deskripsi">Orang</p>
                            </div>
                            <div class="ml-auto">
                                <div class="icon3"><img src="{{ asset('frontend/assets/img/emoji.png') }}"
                                        width="70px" height="70px"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="card">
                    <div class="card-header">
                        <b>Data Kasus Coronavirus di Indonesia Berdasarkan Provinsi</b>
                    </div>
                    <div class="card-body">
                        <div style="height:600px;overflow:auto;margin-right:15px;">
                            <div class="table-responsive service ">
                                <table
                                    class="table table-bordered table-striped table-hover mb-0 text-nowrap css-serial">
                                    <thead>
                                        <tr>
                                            <th scope="col">NO</th>
                                            <th scope="col">PROVINSI</th>
                                            <th scope="col">POSITIF</th>
                                            <th scope="col">SEMBUH</th>
                                            <th scope="col">MENINGGAL</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $no=1; @endphp
                                        @foreach ($provinsi as $data)
                                            <tr>
                                                <th>{{ $no++ }}</th>
                                                <th>{{ $data->nama_provinsi }}</th>
                                                <th>{{ number_format($data->positif) }}</th>
                                                <th>{{ number_format($data->sembuh) }}</th>
                                                <th>{{ number_format($data->meninggal) }}</th>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <br><br>

                <?php
                $data = file_get_contents('https://api.kawalcorona.com/');
                $negara = json_decode($data, true);
                ?>
                <div class="card">
                    <div class="card-header">
                        <b>Data Coronavirus Global</b>
                    </div>
                    <div class="card-body">
                        <div style="height:600px;overflow:auto;margin-right:15px;">
                            <div class="table-responsive service ">
                                <table
                                    class="table table-bordered table-striped table-hover mb-0 text-nowrap css-serial">
                                    <thead>
                                        <tr>
                                            <th scope="col">NO</th>
                                            <th scope="col">NEGARA</th>
                                            <th scope="col">POSITIF</th>
                                            <th scope="col">SEMBUH</th>
                                            <th scope="col">MENINGGAL</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $no=1; @endphp
                                        @foreach ($negara as $data)
                                            <tr>
                                                <th>{{ $no++ }}</th>
                                                <th> <?php echo $data['attributes']['Country_Region'];
                                                    ?></th>
                                                <th> <?php echo
                                                    number_format($data['attributes']['Confirmed']); ?>
                                                </th>
                                                <th><?php echo
                                                    number_format($data['attributes']['Recovered']); ?>
                                                </th>
                                                <th><?php echo
                                                    number_format($data['attributes']['Deaths']); ?>
                                                </th>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </section><!-- End About Section -->

        <!-- ======= Counts Section ======= -->
        <!-- End Counts Section -->

        <!-- ======= About Video Section ======= -->
        <!-- End About Video Section -->

        <!-- ======= Clients Section ======= -->
        <!-- End Clients Section -->

        <!-- ======= Testimonials Section ======= -->
        <!-- End Testimonials Section -->

        <!-- ======= Services Section ======= -->
        <!-- End Sevices Section -->

        <!-- ======= Cta Section ======= -->
        <!-- End Cta Section -->

        <!-- ======= Portfolio Section ======= -->
        <!-- End Portfolio Section -->

        <!-- ======= Team Section ======= -->
        <!-- End Team Section -->

        <!-- ======= Pricing Section ======= -->
        <!-- End Pricing Section -->

        <!-- ======= Frequently Asked Questions Section ======= -->
        <!-- End Frequently Asked Questions Section -->

        <!-- ======= Contact Section ======= -->
        <!-- End Contact Section -->

        <!-- End #main -->

        <!-- ======= Footer ======= -->
        <footer id="footer">
            <div class="container d-md-flex py-4">

                <div class="mr-md-auto text-center text-md-left">
                    <div class="copyright">
                        &copy; Copyright <strong><span>OnePage</span></strong>. All Rights Reserved
                    </div>
                    <div class="credits">
                        <!-- All the links in the footer should remain intact. -->
                        <!-- You can delete the links only if you purchased the pro version. -->
                        <!-- Licensing information: https://bootstrapmade.com/license/ -->
                        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/onepage-multipurpose-bootstrap-template/ -->
                        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                    </div>
                </div>
                <div class="social-links text-center text-md-right pt-3 pt-md-0">
                    <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                    <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                    <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                    <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                    <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                </div>
            </div>
        </footer><!-- End Footer -->

        <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
        <div id="preloader"></div>

        <!-- Vendor JS Files -->
        <script src="{{ asset('frontend/assets/vendor/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/vendor/php-email-form/validate.js') }}"></script>
        <script src="{{ asset('frontend/assets/vendor/waypoints/jquery.waypoints.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/vendor/counterup/counterup.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/vendor/venobox/venobox.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/vendor/aos/aos.js') }}"></script>

        <!-- Template Main JS File -->
        <script src="{{ asset('frontend/assets/js/main.js') }}"></script>

</body>

</html>
