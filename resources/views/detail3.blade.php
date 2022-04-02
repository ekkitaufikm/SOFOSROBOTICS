@extends('main')

@section('title', 'sofosrobotics')
    
@section('content')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Kaki Roda Details</h2>
          <ol>
            <li><a href="{{ url('home')}}">Home</a></li>
            <li>Kaki Roda Details</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">
          
        {{-- Kepala --}}
        <div class="row">

            <div class="col-lg-8 col-md-13">
                <div class="portfolio-details-slider swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="col-lg-5 col-md-12">
                                <img src="{{ asset('assets/img/kaki roda/Model 2/imageonline-co-split-image (1).png')}}" width="200px" alt="">
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="col-lg-5 col-md-12">
                                <img src="{{ asset('assets/img/kaki roda/Model 1/imageonline-co-split-image (1).png')}}" width="200px" alt="">
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
                            <li><strong>Category</strong>: Kaki Roda</li>
                            <li><strong>Product</strong>: Dian Nuswantoro University</li>
                            <li><strong>Duration Project</strong>: 1 Month</li>
                        </ul>
                    </div>
                    <div class="portfolio-description">
                        <h2>Description</h2>
                        <p>
                            Autem ipsum nam porro corporis rerum. Quis eos dolorem eos itaque inventore commodi labore quia quia. Exercitationem repudiandae officiis neque suscipit non officia eaque itaque enim. Voluptatem officia accusantium nesciunt est omnis tempora consectetur dignissimos. Sequi nulla at esse enim cum deserunt eius.
                        </p>
                    </div>
                    <div class="btn-wrap">
                        <a href="#" class="btn-buy">Download RAB</a>
                    </div>
                </div>

            </div>

        </div>

        {{-- Badan --}}
        <div class="row">

            <div class="col-lg-8 col-md-12">
                <div class="portfolio-details-slider swiper" style="margin: -300px 0 0 80px;" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="col-lg-6 col-md-12">
                                <img src="{{ asset('assets/img/kaki roda/Model 2/imageonline-co-split-image (2).png')}}" width="200px" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="col-lg-6 col-md-12">
                                <img src="{{ asset('assets/img/kaki roda/Model 1/imageonline-co-split-image (4).png')}}" width="200px" alt="">
                            </div>
                        </div>
                
                    </div>
                    <div class="swiper-pagination"></div>
                    </div>
                </div>
        </div>

        {{-- Tangan Kanan --}}
        <div class="row">

            <div class="col-lg-8 col-md-12">
                <div class="portfolio-details-slider swiper" style="margin: -300px 0 0 350px;" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="col-lg-6 col-md-12">
                                <img src="{{ asset('assets/img/kaki roda/Model 2/imageonline-co-split-image (5).png')}}" width="200px" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="col-lg-6 col-md-12">
                                <img src="{{ asset('assets/img/kaki roda/Model 1/imageonline-co-split-image (3).png')}}" width="200px" alt="">
                            </div>
                        </div>
                
                    </div>
                    <div class="swiper-pagination" style="margin: 20px 0 0 100px;"></div>
                    </div>
                </div>
        </div>

        {{-- Tangan Kiri --}}
        <div class="row">

            <div class="col-lg-5 col-md-12">
                <div class="portfolio-details-slider swiper" style="margin: -550px 0 0 -200px;" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="col-lg-6 col-md-12">
                                <img src="{{ asset('assets/img/kaki roda/Model 2/imageonline-co-split-image (4).png')}}" width="200px" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="col-lg-6 col-md-12">
                                <img src="{{ asset('assets/img/kaki roda/Model 1/imageonline-co-split-image (2).png')}}" width="200px" alt="">
                            </div>
                        </div>
                
                    </div>
                    <div class="swiper-pagination" style="margin: -30px 0 0 0px;"></div>
                    </div>
                </div>
        </div>

        {{-- roda --}}
        <div class="row">

            <div class="col-lg-8 col-md-12">
                <div class="portfolio-details-slider swiper" style="margin: 100px 0 0 80px;" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="col-lg-4 col-md-8">
                                <img src="{{ asset('assets/img/kaki roda/Model 2/imageonline-co-split-image.png')}}" height="100%" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="col-lg-4 col-md-8">
                                <img src="{{ asset('assets/img/kaki roda/Model 1/imageonline-co-split-image.png')}}" height="100%" alt="">
                            </div>
                        </div>
                
                    </div>
                    <div class="swiper-pagination" style="margin: 20px 0 0 0;"></div>
                    </div>
                </div>
        </div>
    </section><!-- End Portfolio Details Section -->

</main><!-- End #main -->
    
@endsection