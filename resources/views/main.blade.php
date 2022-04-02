
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        <title>@yield('title')</title>
        <meta content="" name="description">
        <meta content="" name="keywords">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

        <!-- Vendor CSS Files -->
        <link href="{{ asset('assets/landing/vendor/aos/aos.css')}}" rel="stylesheet">
        <link href="{{ asset('assets/landing/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{ asset('assets/landing/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
        <link href="{{ asset('assets/landing/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
        <link href="{{ asset('assets/landing/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
        <link href="{{ asset('assets/landing/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js">
        <link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js">
        <link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css">

        <!-- Template Main CSS File -->
        <link href="{{ asset('assets/landing/css/style.css')}}" rel="stylesheet">

    </head>

    <body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top header-inner-pages ">
        <div class="container d-flex align-items-center justify-content-between">
            <div id="Logo_Sofosrobotics">
                <div id="Sofosrobotics">
                    <span>Sofosrobotics</span>
                </div>
                <div id="Robotics_And_Automation">
                    <span>Robotics And Automation</span>
                </div>
            </div>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="{{ url('home')}}">Home</a></li>
                    <li><a class="nav-link scrollto" href="#about">Aplication</a></li>
                    <li><a class="nav-link scrollto" href="#features">Resources</a></li>
                    <li><a class="nav-link scrollto " href="#pricing">Model </a></li>
                    <li><a class="nav-link scrollto " href="#faq">FAQ</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Contact Us</a></li>
                    <li><a class="getstarted scrollto" href="{{ url('login')}}">Login</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    @yield('content')

    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-4 col-md-6 footer-contact">
                        <div id="Sofosrobotics">
                            <span>Sofosrobotics</span>
                        </div>
                        <div id="Robotics_And_Automation">
                            <span>Robotics And Automation</span>
                        </div><br><br>

                        <div class="col-lg-6 col-md-6 footer-links">
                            <h4>Jl. Nakula I No. 5-11 Semarang</h4>
                        </div>

                    </div>

                    <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{ url('home')}}">Home</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#about">Aplication</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#features">Resources</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#pricing">Model</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#faq">FAQ</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#contact">Contact Us</a></li>
                    </ul>
                    </div>

                    <div class="col-lg-2 col-md-3 footer-links">
                        <h4>Robot Models</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="{{ url('detail1')}}">Kaki Dua</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="{{ url('detail3')}}">Kaki Roda</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-newsletter">
                        <h4>Join Our Newsletter</h4>
                        <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
                        <form action="" method="post">
                            <input type="email" name="email"><input type="submit" value="Subscribe">
                        </form>
                    </div>

                </div>
            </div>
        </div>

        <div class="container">

            <div class="copyright-wrap d-md-flex py-4">
                <div class="me-md-auto text-center text-md-start">
                    <div class="copyright">
                        Copyright 2022 © Sofosrobotics by FT UDINUS
                    </div>
                    <div class="credits">
                    <!-- All the links in the footer should remain intact. -->
                    <!-- You can delete the links only if you purchased the pro version. -->
                    <!-- Licensing information: https://bootstrapmade.com/license/ -->
                    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/techie-free-skin-bootstrap-3/ -->
                    Designed by <a href="#">Sofosrobotics</a>
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

        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/landing/vendor/purecounter/purecounter.js')}}"></script>
    <script src="{{ asset('assets/landing/vendor/aos/aos.js')}}"></script>
    <script src="{{ asset('assets/landing/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('assets/landing/vendor/glightbox/js/glightbox.min.js')}}"></script>
    <script src="{{ asset('assets/landing/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
    <script src="{{ asset('assets/landing/vendor/swiper/swiper-bundle.min.js')}}"></script>
    <script src="{{ asset('assets/landing/vendor/php-email-form/validate.js')}}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/landing/js/main.js')}}"></script>

    </body>

</html>

<div id="select1" class="modal fade">
    <div class="modal-dialog">
     <div class="modal-content">
      <div class="modal-header">
       <button type="button" class="close" data-dismiss="modal">&times;</button>
       <h4 class="modal-title">Input Data Dengan Menggunakan Modal Bootstrap</h4>
      </div>
      <div class="modal-body">
       <form method="post" id="insert_form">
        <label>Nama Karyawan</label>
        <input type="text" name="nama" id="nama" class="form-control" />
        <br />
        <label>Alamat Karyawan</label>
        <textarea name="alamat" id="alamat" class="form-control"></textarea>
        <br />
        <label>Jenis Kelamin</label>
        <select name="gender" id="gender" class="form-control">
         <option value="Laki-laki">Laki-laki</option>  
         <option value="Perempuan">Perempuan</option>
        </select>
        <br />  
        <label>Umur</label>
        <input type="text" name="umur" id="umur" class="form-control" />
        <br />
        <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-success" />
   
       </form>
      </div>
      <div class="modal-footer">
       <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
     </div>
    </div>
</div>