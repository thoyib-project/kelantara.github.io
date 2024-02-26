<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Kelantara</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('frontend/assets/img/favicon.png')}}" rel="icon">
  <link href="{{asset('frontend/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('frontend/assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/vendor/slick/slick.css')}}"/>

  <!-- Template Main CSS File -->
  <link href="{{asset('frontend/assets/css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Arsha
  * Updated: Jan 09 2024 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <script type="text/javascript" src="{{asset('frontend/assets/vendor/jquery/jquery-3.7.1.min.js')}}"></script>
  <!-- <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script> -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top " style="background-color: white;">
    <div class="container d-flex align-items-center">

      <!-- <h1 class="logo me-auto"><a href="#">Kelantara.id</a></h1> -->
      <!-- Uncomment below if you prefer to use an image logo -->
      <a href="#" class="logo me-auto"><img src="{{asset('frontend/assets/img/logo.png')}}" alt="" class="img-fluid"></a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#">Home</a></li>
          <li><a class="nav-link scrollto" href="#portfolio">Galery</a></li>
          <li><a class="nav-link scrollto" href="#about">About Us</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto" href="#blog">Blog</a></li>
          <li><a class="nav-link scrollto" href="#testimoni">Testimoni</a></li>
          <!-- <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li> -->
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <!-- <li><a class="getstarted scrollto" href="#about">Get Started</a></li> -->
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-12 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1 text-center" data-aos="fade-up" data-aos-delay="200">
          <img src="{{asset('frontend/assets/img/logo.png')}}" alt="" class="img-fluid align-self-center" style="max-width: 40%;">
          <h2>Tour & Travel Organize</h2>
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients section-bg">
      <div class="container">

        <div class="row animated-client" data-aos="zoom-in">
          @foreach($client as $img)
          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="{{asset('img/'.$img->image)}}" class="img-fluid" alt="">
          </div>
          @endforeach
        </div>

      </div>
    </section><!-- End Cliens Section -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About Us</h2>
        </div>

        <div class="row content">
          <div class="col-lg-6">
            <p>
              Why choose us?.
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
              <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit</li>
              <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
            </ul>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
              velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
              culpa qui officia deserunt mollit anim id est laborum.
            </p>
            <a href="#" class="btn-learn-more">Learn More</a>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Special Services Section ======= -->
    <section id="special-services" class="services section-bg">
      <div class="container mb-5" data-aos="fade-up">

        <div class="section-title">
          <h2>Special Services</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">
          @foreach($ss->take(3) as $item)
          <div class="col-xl-4 col-md-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon ">
                @foreach($item->img->take(1) as $img)
                <img src="{{asset('img/'.$img->image)}}" class="img-fluid" alt="" srcset="">
                @endforeach
              </div>
              <h4><a href="{{url('/special-service/'.$item->slug)}}">{{$item->title}}</a></h4>
              <p>{!!$item->description!!}</p>
            </div>
          </div>
          @endforeach

        </div>

      </div>
    </section>
    <!-- End Services Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="row">
          <div class="col-lg-9 text-center text-lg-start">
            <h3>Call To Action</h3>
            <p>Free consultation for further discussion.</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="https://api.whatsapp.com/send?phone=6282111111466&text=Hai%20saya%20ingin%20berkonsultasi%20mengenai%20rencana%20liburan%20saya" target="_blank">Call To Action</a>
          </div>
        </div>

      </div>
    </section><!-- End Cta Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container mt-5" data-aos="fade-up">

        <div class="section-title">
          <h2>Services</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>
        <div class="row">
          @foreach($service as $serv)
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <h4><a href="#">{{$serv->title}}</a></h4>
              <p>{!!$serv->description!!}</p>
            </div>
          </div>
          @endforeach

        </div>

      </div>
    </section>

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Instagram Post</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
          <li data-filter="*" class="filter-active">All</li>
          @foreach($portoType as $type)
          <li data-filter=".filter-{{$type->id}}">{{$type->name}}</li>
          @endforeach
        </ul>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

        @foreach($porto as $port)
          <div class="col-lg-4 col-md-6 portfolio-item filter-{{$port->type_id}}">
            <div class="portfolio-img">
              @foreach($port->img->take(1) as $img)
              <img src="{{asset('img/'.$img->image)}}" class="img-fluid" alt="">
              @endforeach
            </div>
            <div class="portfolio-info">
              <h4>{{$port->title}}</h4>
              <p>{{$port->type->name}}</p>
              @foreach($port->img->take(1) as $img)
              <a href="{{asset('img/'.$img->image)}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="{{$port->title}}"><i class="bx bx-plus"></i></a>
              @endforeach
              <a href="{{url('/porto/'.$port->slug)}}" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
        @endforeach

        </div>

      </div>
    </section>
    <!-- End Portfolio Section -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="team section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Blog</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">
          @foreach($blog->take(4) as $bl)
          <div class="col-lg-6 mt-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="member d-flex align-items-center">
              <div class="pic"><a href="{{url('/'.$bl->slug)}}" class="text-dark"><img src="{{asset('img/'.$bl->image)}}" style="height: 18vh;" class="img-fluid" alt=""></a></div>
              <div class="member-info">
                  <a href="{{url('/blog/'.$bl->slug)}}" class="text-dark">
                    <h4>{{$bl->title}}</h4>
                    <!-- <span>Chief Executive Officer</span> -->
                    <p>{!!$bl->description!!}</p>
                  </a>
                </div>
            </div>
          </div>
          @endforeach

        </div>
        <div class="mt-5 text-center">
          <a class="align-middle btn btn-info text-white" href="/list-blog">See More</a>
        </div>
      </div>
    </section>
    <!-- End Blog Section -->

    <!-- <section id="testimoni" class="pricing team">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Testimoni</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">
          @foreach($testi as $test)
          <div class="col-lg-6 mt-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="member d-flex align-items-center">
              <div class="pic"><a href="#" class="text-dark"><img src="{{asset('img/'.$test->image)}}" style="height: 18vh;" class="img-fluid" alt=""></a></div>
                <div class="member-info">
                  <a href="#" class="text-dark">
                    <h4>{{$test->name}}</h4>
                    <p>{!!$test->testimoni!!}</p>
                  </a>
                </div>
            </div>
          </div>
          @endforeach

        </div>

      </div>
    </section> -->

    <section id="testimoni" class="pricing team">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Testimoni</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">
          <div class="col-lg-6 mt-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="member d-flex align-items-start">
              <div class="pic"><a href="#" class="text-dark"><img src="{{asset('/frontend/assets/img/team/team-1.jpg')}}" class="img-fluid" alt=""></a></div>
              <div class="member-info">
                  <a href="#" class="text-dark">
                    <h4>Walter White</h4>
                    <!-- <span>Chief Executive Officer</span> -->
                    <p>Explicabo voluptatem mollitia et repellat qui dolorum quasi</p>
                  </a>
                </div>
            </div>
          </div>
          <div class="col-lg-6 mt-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="member d-flex align-items-start">
              <div class="pic"><a href="#" class="text-dark"><img src="{{asset('/frontend/assets/img/team/team-2.jpg')}}" class="img-fluid" alt=""></a></div>
              <div class="member-info">
                  <a href="#" class="text-dark">
                    <h4>Walter White</h4>
                    <!-- <span>Chief Executive Officer</span> -->
                    <p>Explicabo voluptatem mollitia et repellat qui dolorum quasi</p>
                  </a>
                </div>
            </div>
          </div>
          <div class="col-lg-6 mt-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="member d-flex align-items-start">
              <div class="pic"><a href="#" class="text-dark"><img src="{{asset('/frontend/assets/img/team/team-3.jpg')}}" class="img-fluid" alt=""></a></div>
              <div class="member-info">
                  <a href="#" class="text-dark">
                    <h4>Walter White</h4>
                    <!-- <span>Chief Executive Officer</span> -->
                    <p>Explicabo voluptatem mollitia et repellat qui dolorum quasi</p>
                  </a>
                </div>
            </div>
          </div>
          <div class="col-lg-6 mt-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="member d-flex align-items-start">
              <div class="pic"><a href="#" class="text-dark"><img src="{{asset('/frontend/assets/img/team/team-4.jpg')}}" class="img-fluid" alt=""></a></div>
              <div class="member-info">
                  <a href="#" class="text-dark">
                    <h4>Walter White</h4>
                    <!-- <span>Chief Executive Officer</span> -->
                    <p>Explicabo voluptatem mollitia et repellat qui dolorum quasi</p>
                  </a>
                </div>
            </div>
          </div>

        </div>

      </div>
    </section>
    <!-- End Pricing Section -->


    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="row">
          <div class="col-lg-9 text-center text-lg-start">
            <h3>Still don't believe the testimony?</h3>
            <p>Free consultation for further discussion.</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="https://api.whatsapp.com/send?phone=6282111111466&text=Hai%20saya%20ingin%20berkonsultasi%20mengenai%20rencana%20liburan%20saya" target="_blank">Free Consultation</a>
          </div>
        </div>

      </div>
    </section>
    <!-- End Cta Section -->
    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg d-none">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Frequently Asked Questions</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="faq-list">
          <ul>
            <li data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">Non consectetur a erat nam at lectus urna duis? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                <p>
                  Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">Feugiat scelerisque varius morbi enim nunc? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="300">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">Dolor sit amet consectetur adipiscing elit? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">Tempus quam pellentesque nec nam aliquam sem et tortor consequat? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="500">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed">Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque.
                </p>
              </div>
            </li>

          </ul>
        </div>

      </div>
    </section>
    <!-- End Frequently Asked Questions Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">

          <div class="col-lg-12 d-flex align-items-stretch">
            <div class="info">
              <div class="row">
                <div class="address col-lg-4">
                  <i class="bi bi-geo-alt"></i>
                  <h4>Location:</h4>
                  <a href="https://www.google.co.id/maps/dir/-6.1632441,106.6087387/Kelantara.id,+Jl.+Merta+Agung+No.53,+Kerobokan+Kelod,+Kuta+Utara,+Badung+Regency,+Bali+80361/@-7.3814239,105.5872563,6z/data=!4m8!4m7!1m0!1m5!1m1!1s0x2dd247921d0117ad:0x63940473bcd59190!2m2!1d115.16688!2d-8.6678046?entry=ttu" target="_blank" rel="noopener noreferrer">
                    <p>Jl. Merta Agung No.53, Kerobokan Kelod, Kec. Kuta Utara, Kabupaten Badung, Bali 80361</p>
                  </a>
                </div>

                <div class="email col-lg-4">
                  <i class="bi bi-envelope"></i>
                  <h4>Email:</h4>
                  <a href="mailto:info@example.com">
                    <p>info@example.com</p>
                  </a>
                </div>

                <div class="phone col-lg-4">
                  <i class="bi bi-phone"></i>
                  <h4>Call:</h4>
                  <a href="tel:+6282111111466">
                    <p>+62 82111111466</p>
                  </a>
                </div>
              </div>
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.2495701581747!2d115.16430507576175!3d-8.667799288222856!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd247921d0117ad%3A0x63940473bcd59190!2sKelantara.id!5e0!3m2!1sid!2sid!4v1706151440908!5m2!1sid!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6 footer-contact">
            <!-- <h3>Arsha</h3> -->
            <img src="{{asset('frontend/assets/img/logo.png')}}" alt="" class="img-fluid align-self-center" style="max-width: 40%;">
            <p>
              Jl. Merta Agung No.53, <br>
              Kerobokan Kelod, Kec. Kuta Utara, <br>
              Kabupaten Badung, Bali 80361 <br><br>
              <strong>Phone:</strong> <a href="tel:+6282111111466" class="text-dark">+62 8211 1111 466</a><br>
              <strong>Email:</strong> <a href="mailto:info@example.com" class="text-dark">info@example.com</a><br>
            </p>
          </div>

          <div class="col-lg-4 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-12 footer-links">
            <h4>Our Social Networks</h4>
            <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright Kelana Nusantara <strong><span>PT Kelana Artaka Travelindo</span></strong>
      </div>
      <div class="credits">
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('frontend/assets/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/waypoints/noframework.waypoints.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/php-email-form/validate.js')}}"></script>
  <script type="text/javascript" src="{{asset('frontend/assets/vendor/slick/slick.min.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('frontend/assets/js/main.js')}}"></script>
  <script>
    $('.animated-client').slick({
      arrows: false,
      slidesToShow: 4,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 2000,
    });
  </script>
</body>

</html>