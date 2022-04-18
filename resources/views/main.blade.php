
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
                <svg class="Path_1" viewBox="13 9 58.331 64.637">
                    <path id="Path_1" d="M 71.33123779296875 10.5765209197998 L 71.33123779296875 13.72956085205078 L 61.87211990356445 13.72956085205078 C 61.00503540039062 13.72956085205078 60.29560089111328 14.43899440765381 60.29560089111328 15.30607986450195 L 60.29560089111328 23.18868064880371 C 60.29560089111328 24.05576705932617 61.00503540039062 24.76519966125488 61.87211990356445 24.76519966125488 L 71.33123779296875 24.76519966125488 L 71.33123779296875 27.91823959350586 C 71.33123779296875 28.78532409667969 70.62180328369141 29.49476051330566 69.75471496582031 29.49476051330566 L 54.38364791870117 29.49476051330566 L 55.17190933227539 20.9027271270752 C 55.5660400390625 17.04025268554688 54.22600173950195 13.17777824401855 51.62474060058594 10.34004306793213 C 51.15178298950195 9.867086410522461 50.67882537841797 9.394130706787109 50.20587158203125 9.000000953674316 L 69.75471496582031 9.000000953674316 C 70.62180328369141 9 71.33123779296875 9.709433555603027 71.33123779296875 10.5765209197998 Z M 30.73584938049316 20.6662483215332 C 30.42054557800293 17.67086029052734 31.44528579711914 14.75429821014404 33.49475860595703 12.46834373474121 C 35.54423522949219 10.26121711730957 38.38197326660156 9 41.37736129760742 9 C 44.37274551391602 9 47.21048355102539 10.26121711730957 49.25996017456055 12.46834373474121 C 51.30943298339844 14.67547130584717 52.25534820556641 17.59203338623047 52.01887130737305 20.6662483215332 L 49.25996017456055 50.69895172119141 C 49.18113327026367 51.64486694335938 48.94465637207031 52.59077835083008 48.47169876098633 53.45786285400391 C 47.68344116210938 53.30021286010742 46.89517974853516 53.22138214111328 46.10691833496094 53.22138214111328 C 42.71740341186523 53.22138214111328 39.6431884765625 54.64025115966797 37.51488494873047 56.92620086669922 C 35.30775833129883 55.66498565673828 33.73123550415039 53.45785522460938 33.49475860595703 50.69894790649414 L 30.73584938049316 20.6662483215332 Z M 42.95388031005859 34.22431945800781 C 42.95388031005859 33.35723495483398 42.24444580078125 32.64780044555664 41.37736129760742 32.64780044555664 C 40.51027679443359 32.64780044555664 39.80083847045898 33.35723495483398 39.80083847045898 34.22431945800781 L 39.80083847045898 46.83647918701172 C 39.80083847045898 47.70356369018555 40.51027679443359 48.41299819946289 41.37736129760742 48.41299819946289 C 42.24444580078125 48.41299819946289 42.95388031005859 47.70356369018555 42.95388031005859 46.83647918701172 L 42.95388031005859 34.22431945800781 Z M 34.28302001953125 20.82390022277832 C 34.28302001953125 24.76519966125488 37.43606185913086 27.91823959350586 41.37736129760742 27.91823959350586 C 45.31866073608398 27.91823959350586 48.47169876098633 24.76519966125488 48.47169876098633 20.82390022277832 C 48.47169876098633 16.88260078430176 45.31866073608398 13.72956085205078 41.37736129760742 13.72956085205078 C 37.43606185913086 13.72956085205078 34.28302001953125 16.88260078430176 34.28302001953125 20.82390022277832 Z M 15.36478042602539 68.90776062011719 C 14.02473831176758 68.90776062011719 13 69.93250274658203 13 71.27254486083984 C 13 72.53375244140625 14.02473831176758 73.63732147216797 15.36478042602539 73.63732147216797 L 38.06666564941406 73.63732147216797 C 36.64780044555664 72.37610626220703 35.62306213378906 70.72076416015625 34.91362762451172 68.90776062011719 L 15.36478042602539 68.90776062011719 Z M 41.37736129760742 24.76519966125488 C 43.58448791503906 24.76519966125488 45.31866073608398 23.03102684020996 45.31866073608398 20.82390022277832 C 45.31866073608398 18.61677360534668 43.58448791503906 16.88260078430176 41.37736129760742 16.88260078430176 C 39.17023086547852 16.88260078430176 37.43606185913086 18.61677360534668 37.43606185913086 20.82390022277832 C 37.43606185913086 23.03102684020996 39.17023086547852 24.76519966125488 41.37736129760742 24.76519966125488 Z M 46.10691833496094 56.29559707641602 C 41.29853439331055 56.29559707641602 37.43606185913086 60.15807342529297 37.43606185913086 64.96646118164062 C 37.43606185913086 69.77484893798828 41.29853439331055 73.63732147216797 46.10691833496094 73.63732147216797 C 50.91530609130859 73.63732147216797 54.77777862548828 69.77484893798828 54.77777862548828 64.96646118164062 C 54.77777862548828 60.15807342529297 50.91530609130859 56.29559707641602 46.10691833496094 56.29559707641602 Z M 63.44863891601562 21.61215972900391 L 71.33123779296875 21.61215972900391 L 71.33123779296875 16.88260078430176 L 63.44863891601562 16.88260078430176 L 63.44863891601562 21.61215972900391 Z">
                    </path>
		        </svg>
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