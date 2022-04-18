@extends('main')

@section('title', 'sofosrobotics')
    
@section('content')

<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>Daya Angkut Details</h2>
        <ol>
          <li><a href="{{ url('home')}}">Home</a></li>
          <li>Daya Angkut Details</li>
        </ol>
      </div>

    </div>
  </section><!-- End Breadcrumbs -->

  <!-- ======= Portfolio Details Section ======= -->
  <section id="portfolio-details" class="portfolio-details">
    <div class="container">
        
      {{-- Kepala --}}
      <div class="row gy-4">
        <div class="col-lg-8 col-md-10">
          {{-- <div class="portfolio-details-slider swiper" data-aos="fade-up" data-aos-delay="100"> --}}
          <div class="portfolio-details-slider swiper">
            <div class="swiper-wrapper align-items-center">

              <div class="swiper-slide">
                <div class="col-lg-8 col-md-12 offset-2">
                  <img src="{{ asset('assets/landing/img/robot/robot1.png')}}" width="100%" alt="">
                </div>
              </div>

              <div class="swiper-slide">
                <div class="col-lg-6 col-md-12 offset-3">
                  <img src="{{ asset('assets/landing/img/robot/robot2.png')}}" width="100%" alt="">
                </div>
              </div>

              <div class="swiper-slide">
                <div class="col-lg-6 col-md-12 offset-3">
                  <img src="{{ asset('assets/landing/img/robot/robot3.png')}}" width="100%" alt="">
                </div>
              </div>

              <div class="swiper-slide">
                <div class="col-lg-6 col-md-12 offset-3">
                  <img src="{{ asset('assets/landing/img/robot/robot4.png')}}" width="100%" alt="">
                </div>
              </div>

              <div class="swiper-slide">
                <div class="col-lg-6 col-md-12 offset-3">
                  <img src="{{ asset('assets/landing/img/robot/robot5.png')}}" width="100%" alt="">
                </div>
              </div>

            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="portfolio-info">
            <h3>Robot Details</h3>
            <ul>
                <li><strong>Category</strong>:  Daya Angkut</li>
                <li><strong>Product</strong>: Dian Nuswantoro University</li>
                <li><strong>Duration Project</strong>: 1 Month</li>
            </ul>
          </div><br>
          <div class="portfolio-description">
            <ul>
              <li data-aos="fade-up" data-aos="fade-up" data-aos-delay="100">
                <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#portfolio-description-1">Non consectetur a erat nam at lectus urna duis? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="portfolio-description-1" class="collapse show" data-bs-parent=".portfolio-description">
                  <p>
                    Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                  </p>
                </div>
              </li>
    
              <li data-aos="fade-up" data-aos-delay="200">
                <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#portfolio-description-2" class="collapsed">Feugiat scelerisque varius morbi enim nunc? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="portfolio-description-2" class="collapse" data-bs-parent=".portfolio-description">
                  <p>
                    Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                  </p>
                </div>
              </li>
    
              <li data-aos="fade-up" data-aos-delay="300">
                <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#portfolio-description-3" class="collapsed">Dolor sit amet consectetur adipiscing elit? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="portfolio-description-3" class="collapse" data-bs-parent=".portfolio-description">
                  <p>
                    Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                  </p>
                </div>
              </li>
    
              <li data-aos="fade-up" data-aos-delay="400">
                <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#portfolio-description-4" class="collapsed">Tempus quam pellentesque nec nam aliquam sem et tortor consequat? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="portfolio-description-4" class="collapse" data-bs-parent=".portfolio-description">
                  <p>
                    Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in.
                  </p>
                </div>
              </li>
    
              <li data-aos="fade-up" data-aos-delay="500">
                <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#portfolio-description-5" class="collapsed">Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="portfolio-description-5" class="collapse" data-bs-parent=".portfolio-description">
                  <p>
                    Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque.
                  </p>
                </div>
              </li>
            </ul>
          </div>
          <div class="btn-wrap">
            <a href="#" class="btn-buy">Download RAB</a>
          </div>
        </div>
      </div>
      <h3 style="text-align: center">Fitur</h3>
      <div class="col-lg-12 d-flex justify-content-center">
          <ul id="portfolio-flters">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-app">Mekanik</li>
            <li data-filter=".filter-card">Software</li>
            <li data-filter=".filter-web">Fitur</li>
          </ul>
      </div>
    </div>
    <div class="row portfolio-container">

      <div class="col-lg-4 col-md-6 portfolio-item filter-app">
        <div class="portfolio-wrap">
          <img src="{{ asset('assets/landing/img/robot/mekanik1.png')}}" width="80%" class="img-fluid" alt="">
          <div class="portfolio-inpo">
            <h4>Daya Angkut</h4>
            <p>Mekanik</p><br>
              <div class="portfolio-links">
                <a href="{{ asset('assets/landing/img/robot/mekanik1.png')}}" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                <div class="btn btn-select"><a href="#popup">Select</a></div>
                <div id="popup">
                  <div class="window">
                    <a href="#" class="close-button" title="Close">X</a>
                    <h3>Apakah Anda yakin Menambahkan Fitur ini?</h3>
                    <a href="#" class="yes-button" title="Ya">Ya</a>
                    <a href="#" class="no-button" title="Tidak">Tidak</a>
                  </div>
                </div>
              </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-app">
        <div class="portfolio-wrap">
          <img src="{{ asset('assets/landing/img/robot/mekanik2.png')}}" width="50%" class="img-fluid" alt="">
          <div class="portfolio-inpo">
            <h4>Daya Angkut</h4>
            <p>Mekanik</p><br>
              <div class="portfolio-links">
                <a href="{{ asset('assets/landing/img/robot/mekanik2.png')}}" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                <div class="btn btn-select"><a href="#popup">Select</a></div>
                <div id="popup">
                  <div class="window">
                    <a href="#" class="close-button" title="Close">X</a>
                    <h3>Apakah Anda yakin Menambahkan Fitur ini?</h3>
                    <a href="#" class="yes-button" title="Ya">Ya</a>
                    <a href="#" class="no-button" title="Tidak">Tidak</a>
                  </div>
                </div>
              </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-app">
        <div class="portfolio-wrap">
          <img src="{{ asset('assets/landing/img/robot/mekanik3.png')}}" width="80%" class="img-fluid" alt="">
          <div class="portfolio-inpo">
            <h4>Daya Angkut</h4>
            <p>Mekanik</p><br>
              <div class="portfolio-links">
                <a href="{{ asset('assets/landing/img/robot/mekanik3.png')}}" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                <div class="btn btn-select"><a href="#popup">Select</a></div>
                <div id="popup">
                  <div class="window">
                    <a href="#" class="close-button" title="Close">X</a>
                    <h3>Apakah Anda yakin Menambahkan Fitur ini?</h3>
                    <a href="#" class="yes-button" title="Ya">Ya</a>
                    <a href="#" class="no-button" title="Tidak">Tidak</a>
                  </div>
                </div>
              </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-card">
        <div class="portfolio-wrap">
          <img src="{{ asset('assets/landing/img/robot/database.png')}}" class="img-fluid" alt="">
          <div class="portfolio-inpo">
              <h4>Database</h4>
              <p>Software</p><br>
              <div class="portfolio-links">
                <a href="{{ asset('assets/landing/img/robot/database.png')}}" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                <div class="btn btn-select"><a href="#popup">Select</a></div>
                <div id="popup">
                  <div class="window">
                    <a href="#" class="close-button" title="Close">X</a>
                    <h3>Apakah Anda yakin Menambahkan Fitur ini?</h3>
                    <a href="#" class="yes-button" title="Ya">Ya</a>
                    <a href="#" class="no-button" title="Tidak">Tidak</a>
                  </div>
                </div>
              </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-card">
        <div class="portfolio-wrap">
          <img src="{{ asset('assets/landing/img/robot/webbased.png')}}" class="img-fluid" alt="">
          <div class="portfolio-inpo">
            <h4>Web Based</h4>
            <p>Software</p><br>
            <div class="portfolio-links">
              <a href="{{ asset('assets/landing/img/robot/webbased.png')}}" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
              <div class="btn btn-select"><a href="#popup">Select</a></div>
              <div id="popup">
                <div class="window">
                  <a href="#" class="close-button" title="Close">X</a>
                  <h3>Apakah Anda yakin Menambahkan Fitur ini?</h3>
                  <a href="#" class="yes-button" title="Ya">Ya</a>
                  <a href="#" class="no-button" title="Tidak">Tidak</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-card">
        <div class="portfolio-wrap">
          <img src="{{ asset('assets/landing/img/robot/mobilebased.png')}}" class="img-fluid" alt="">
          <div class="portfolio-inpo">
            <h4>Mobile Based</h4>
            <p>Software</p><br>
            <div class="portfolio-links">
              <a href="{{ asset('assets/landing/img/robot/mobilebased.png')}}" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
              <div class="btn btn-select"><a href="#popup">Select</a></div>
              <div id="popup">
                <div class="window">
                  <a href="#" class="close-button" title="Close">X</a>
                  <h3>Apakah Anda yakin Menambahkan Fitur ini?</h3>
                  <a href="#" class="yes-button" title="Ya">Ya</a>
                  <a href="#" class="no-button" title="Tidak">Tidak</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-card">
        <div class="portfolio-wrap">
          <img src="{{ asset('assets/landing/img/robot/bluetoothaccess.png')}}" class="img-fluid" alt="">
          <div class="portfolio-inpo">
            <h4>Bluetooth Access</h4>
            <p>Software</p><br>
            <div class="portfolio-links">
              <a href="{{ asset('assets/landing/img/robot/bluetoothaccess.png')}}" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
              <div class="btn btn-select"><a href="#popup">Select</a></div>
              <div id="popup">
                <div class="window">
                  <a href="#" class="close-button" title="Close">X</a>
                  <h3>Apakah Anda yakin Menambahkan Fitur ini?</h3>
                  <a href="#" class="yes-button" title="Ya">Ya</a>
                  <a href="#" class="no-button" title="Tidak">Tidak</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-card">
        <div class="portfolio-wrap">
          <img src="{{ asset('assets/landing/img/robot/remoteaccess.png')}}" class="img-fluid" alt="">
          <div class="portfolio-inpo">
            <h4>Remote Access</h4>
            <p>Software</p><br>
            <div class="portfolio-links">
              <a href="{{ asset('assets/landing/img/robot/remoteaccess.png')}}" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
              <div class="btn btn-select"><a href="#popup">Select</a></div>
              <div id="popup">
                <div class="window">
                  <a href="#" class="close-button" title="Close">X</a>
                  <h3>Apakah Anda yakin Menambahkan Fitur ini?</h3>
                  <a href="#" class="yes-button" title="Ya">Ya</a>
                  <a href="#" class="no-button" title="Tidak">Tidak</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-web">
        <div class="portfolio-wrap">
          <img src="{{ asset('assets/landing/img/robot/linetracking.png')}}" class="img-fluid" alt="">
          <div class="portfolio-inpo">
            <h4>Line Tracking</h4>
            <p>Fitur</p><br>
            <div class="portfolio-links">
              <a href="{{ asset('assets/landing/img/robot/linetracking.png')}}" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
              <div class="btn btn-select"><a href="#popup">Select</a></div>
              <div id="popup">
                <div class="window">
                  <a href="#" class="close-button" title="Close">X</a>
                  <h3>Apakah Anda yakin Menambahkan Fitur ini?</h3>
                  <a href="#" class="yes-button" title="Ya">Ya</a>
                  <a href="#" class="no-button" title="Tidak">Tidak</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-web">
        <div class="portfolio-wrap">
          <img src="{{ asset('assets/landing/img/robot/walltracking.png')}}" class="img-fluid" alt="">
          <div class="portfolio-inpo">
            <h4>Wall Tracking</h4>
            <p>Fitur</p><br>
            <div class="portfolio-links">
              <a href="{{ asset('assets/landing/img/robot/walltracking.png')}}" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
              <div class="btn btn-select"><a href="#popup">Select</a></div>
              <div id="popup">
                <div class="window">
                  <a href="#" class="close-button" title="Close">X</a>
                  <h3>Apakah Anda yakin Menambahkan Fitur ini?</h3>
                  <a href="#" class="yes-button" title="Ya">Ya</a>
                  <a href="#" class="no-button" title="Tidak">Tidak</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-web">
        <div class="portfolio-wrap">
          <img src="{{ asset('assets/landing/img/robot/cameratracking.png')}}" class="img-fluid" alt="">
          <div class="portfolio-inpo">
            <h4>Camera Tracking</h4>
            <p>Fitur</p><br>
            <div class="portfolio-links">
              <a href="{{ asset('assets/landing/img/robot/cameratracking.png')}}" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
              <div class="btn btn-select"><a href="#popup">Select</a></div>
              <div id="popup">
                <div class="window">
                  <a href="#" class="close-button" title="Close">X</a>
                  <h3>Apakah Anda yakin Menambahkan Fitur ini?</h3>
                  <a href="#" class="yes-button" title="Ya">Ya</a>
                  <a href="#" class="no-button" title="Tidak">Tidak</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-web">
        <div class="portfolio-wrap">
          <img src="{{ asset('assets/landing/img/robot/gpstracking.png')}}" class="img-fluid" alt="">
          <div class="portfolio-inpo">
            <h4>GPS Tracking</h4>
            <p>Fitur</p><br>
            <div class="portfolio-links">
              <a href="{{ asset('assets/landing/img/robot/gpstracking.png')}}" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
              <div class="btn btn-select"><a href="#popup">Select</a></div>
              <div id="popup">
                <div class="window">
                  <a href="#" class="close-button" title="Close">X</a>
                  <h3>Apakah Anda yakin Menambahkan Fitur ini?</h3>
                  <a href="#" class="yes-button" title="Ya">Ya</a>
                  <a href="#" class="no-button" title="Tidak">Tidak</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-web">
        <div class="portfolio-wrap">
          <img src="{{ asset('assets/landing/img/robot/lidar.png')}}" class="img-fluid" alt="">
          <div class="portfolio-inpo">
            <h4>Lidar</h4>
            <p>Fitur</p><br>
            <div class="portfolio-links">
              <a href="{{ asset('assets/landing/img/robot/lidar.png')}}" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
              <div class="btn btn-select"><a href="#popup">Select</a></div>
              <div id="popup">
                <div class="window">
                  <a href="#" class="close-button" title="Close">X</a>
                  <h3>Apakah Anda yakin Menambahkan Fitur ini?</h3>
                  <a href="#" class="yes-button" title="Ya">Ya</a>
                  <a href="#" class="no-button" title="Tidak">Tidak</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-web">
        <div class="portfolio-wrap">
          <img src="{{ asset('assets/landing/img/robot/rfid.png')}}" class="img-fluid" alt="">
          <div class="portfolio-inpo">
            <h4>Rfid</h4>
            <p>Fitur</p><br>
            <div class="portfolio-links">
              <a href="{{ asset('assets/landing/img/robot/rfid.png')}}" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
              <div class="btn btn-select"><a href="#popup">Select</a></div>
              <div id="popup">
                <div class="window">
                  <a href="#" class="close-button" title="Close">X</a>
                  <h3>Apakah Anda yakin Menambahkan Fitur ini?</h3>
                  <a href="#" class="yes-button" title="Ya">Ya</a>
                  <a href="#" class="no-button" title="Tidak">Tidak</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-web">
        <div class="portfolio-wrap">
          <img src="{{ asset('assets/landing/img/robot/kompas.png')}}" class="img-fluid" alt="">
          <div class="portfolio-inpo">
            <h4>Kompas</h4>
            <p>Fitur</p><br>
            <div class="portfolio-links">
              <a href="{{ asset('assets/landing/img/robot/kompas.png')}}" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
              <div class="btn btn-select"><a href="#popup">Select</a></div>
              <div id="popup">
                <div class="window">
                  <a href="#" class="close-button" title="Close">X</a>
                  <h3>Apakah Anda yakin Menambahkan Fitur ini?</h3>
                  <a href="#" class="yes-button" title="Ya">Ya</a>
                  <a href="#" class="no-button" title="Tidak">Tidak</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-web">
        <div class="portfolio-wrap">
          <img src="{{ asset('assets/landing/img/robot/gyro.png')}}" class="img-fluid" alt="">
          <div class="portfolio-inpo">
            <h4>Gyro + Accelero</h4>
            <p>Fitur</p><br>
            <div class="portfolio-links">
              <a href="{{ asset('assets/landing/img/robot/gyro.png')}}" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
              <div class="btn btn-select"><a href="#popup">Select</a></div>
              <div id="popup">
                <div class="window">
                  <a href="#" class="close-button" title="Close">X</a>
                  <h3>Apakah Anda yakin Menambahkan Fitur ini?</h3>
                  <a href="#" class="yes-button" title="Ya">Ya</a>
                  <a href="#" class="no-button" title="Tidak">Tidak</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-web">
        <div class="portfolio-wrap">
          <img src="{{ asset('assets/landing/img/robot/rotaryencoder.png')}}" class="img-fluid" alt="">
          <div class="portfolio-inpo">
            <h4>Rotary Encoder</h4>
            <p>Fitur</p><br>
            <div class="portfolio-links">
              <a href="{{ asset('assets/landing/img/robot/rotaryencoder.png')}}" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
              <div class="btn btn-select"><a href="#popup">Select</a></div>
              <div id="popup">
                <div class="window">
                  <a href="#" class="close-button" title="Close">X</a>
                  <h3>Apakah Anda yakin Menambahkan Fitur ini?</h3>
                  <a href="#" class="yes-button" title="Ya">Ya</a>
                  <a href="#" class="no-button" title="Tidak">Tidak</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-web">
        <div class="portfolio-wrap">
          <img src="{{ asset('assets/landing/img/robot/voicerecognition.png')}}" class="img-fluid" alt="">
          <div class="portfolio-inpo">
            <h4>Voice Recognition</h4>
            <p>Fitur</p><br>
            <div class="portfolio-links">
              <a href="{{ asset('assets/landing/img/robot/voicerecognition.png')}}" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
              <div class="btn btn-select"><a href="#popup">Select</a></div>
              <div id="popup">
                <div class="window">
                  <a href="#" class="close-button" title="Close">X</a>
                  <h3>Apakah Anda yakin Menambahkan Fitur ini?</h3>
                  <a href="#" class="yes-button" title="Ya">Ya</a>
                  <a href="#" class="no-button" title="Tidak">Tidak</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-web">
        <div class="portfolio-wrap">
          <img src="{{ asset('assets/landing/img/robot/sound.png')}}" class="img-fluid" alt="">
          <div class="portfolio-inpo">
            <h4>Sound</h4>
            <p>Fitur</p><br>
            <div class="portfolio-links">
              <a href="{{ asset('assets/landing/img/robot/sound.png')}}" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
              <div class="btn btn-select"><a href="#popup">Select</a></div>
              <div id="popup">
                <div class="window">
                  <a href="#" class="close-button" title="Close">X</a>
                  <h3>Apakah Anda yakin Menambahkan Fitur ini?</h3>
                  <a href="#" class="yes-button" title="Ya">Ya</a>
                  <a href="#" class="no-button" title="Tidak">Tidak</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section><!-- End Portfolio Details Section -->

</main><!-- End #main -->
    
@endsection