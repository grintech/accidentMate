<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Accident Mate B2C</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('accident_mate/assets/img/favicon.png')}}" rel="icon">
  <link href="{{asset('accident_mate/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
  <!-- Vendor CSS Files -->
  <link href="{{asset('accident_mate/assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('accident_mate/assets/vendor/bootstrap/css/bootstrap.css')}}" rel="stylesheet">
  <link href="{{asset('accident_mate/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('accident_mate/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('accident_mate/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('accident_mate/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('accident_mate/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link href="{{asset('accident_mate/assets/css/style.css')}}" rel="stylesheet">
</head>
<body>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex align-items-center justify-content-between">
      <div class="logo">
        <a href="index.html"><img src="{{asset('accident_mate/assets/img/logo.png')}}" alt="accident mate" class="img-fluid"></a>
        <!-- <h1><a href="index.html"><span>Bootslander</span></a></h1> -->
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>
      <nav id="navbar" class="navbar">
        <ul>
          <!-- <li><a class="nav-link scrollto active" href="#hero">Home</a></li> -->
          <li><a class="nav-link scrollto" href="#">About Us</a></li>
          <li class="dropdown"><a href="#"><span>Solutions</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Doctors</a></li>
              <li><a href="#">Attorney</a></li>
              <li><a href="#">Body Shop</a></li>
              <li><a href="#">Towing</a></li>
              <li><a href="#">Network</a></li>
              <li><a href="#">Artist</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#">News</a></li>          
          <li><a class="nav-link scrollto" href="#">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
        <div class="login-btn"><a href="{{route('login')}}">Login</a> / <a href="{{route('registeration')}}">Register</a></div>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" style="background: url(accident_mate/assets/img/header-bg.jpg) no-repeat center center / cover;">
    <div class="container">
      <div class="row justify-content-between">
        <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center">
          <div data-aos="zoom-out">
            <h1>Had an accident?<br> Need help?</h1>
            <p>Search for chiropractors, doctors, attorneys, <br>
              body shops, towing and many more services.</p>
            <!-- <div class="text-center text-lg-start">
              <a href="#about" class="btn-get-started scrollto">Get Started</a>
            </div> -->
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="300">
          <img src="{{asset('accident_mate/assets/img/header-inner-img.png')}}" class="img-fluid " alt="hero image">
        </div>
      </div>
    </div>
  </section><!-- End Hero -->

  <!-- Search Section Start-->
  <section id="search-box" class="search-box" data-aos="fade-down">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <div class="search-inner p-4">
            <div class="input-group p-3">
              <div class="input-group-btn search-panel">
                <select class="selectpicker" data-live-search="true">
                  <option value="1">Select City</option>
                  <optgroup label="California">
                    <option value="Anaheim">Anaheim, CA</option>
                    <option value="Costa Mesa">Costa Mesa, CA</option>
                    <option value="Dana Point">Dana Point, CA</option>
                    <option value="Huntington Beach">Huntington Beach, CA</option>
                    <option value="Irvine">Irvine, CA</option>
                    <option value="Mission Viejo">Mission Viejo, CA</option>
                    <option value="Newport Beach">Newport Beach, CA</option>
                    <option value="Riverside">Riverside, CA</option>
                    <option value="Santa Ana">Santa Ana, CA</option>
                    <option value="Tustin">Tustin, CA</option>
                  </optgroup>
                </select>
              </div>   
              <input type="text" class="form-control" name="x" placeholder="Doctor, Attorney, Body Shop, Towing ...">
              <span class="input-group-btn">
                  <button class="btn btn-primary toggle" type="button">Search</button>
              </span>
            </div> 
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Search Section End-->

  <!-- Search Result Section Start-->
  <section id="search-result" class="search-result pt-0">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center" data-aos="fade-down">
          <h2 class="fw-semibold">6 Doctors Available in this Location</h2>
          <p><i class="bi bi-info-circle fs-5"></i> Book appointments with minimum wait-time & verified doctor details</p>
        </div>
      </div>
      <div class="row pt-4">
        <div class="col-lg-4 col-md-4 mb-4">
          <div class="icon-box" data-aos="zoom-in" data-aos-delay="50">
            <img src="{{asset('accident_mate/assets/img/avataar.png')}}" class="img-fluid " alt="image">
            <div class="text-area"> 
              <h3>Dr. Name</h3>
              <p class="mb-0"><small>General Physician</small></p>
              <p class="mb-3"><small>30 years experience overall</small></p>
              <address class="mb-0">
                <i class="bi bi-geo-alt"></i> 12 Street, Block B, XYZ, 160001<br>
                <i class="bi bi-telephone"></i> 1-XXX-XXX-XX82<br>
                <i class="bi bi-envelope"></i> dxxxxxx@gmail.com<br>
              </address>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 mb-4">
          <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
            <img src="{{asset('accident_mate/assets/img/avataar.png')}}" class="img-fluid " alt="image">
            <div class="text-area"> 
              <h3>Dr. Name</h3>
              <p class="mb-0"><small>General Physician</small></p>
              <p class="mb-3"><small>30 years experience overall</small></p>
              <address class="mb-0">
                <i class="bi bi-geo-alt"></i> 12 Street, Block B, XYZ, 160001<br>
                <i class="bi bi-telephone"></i> 1-XXX-XXX-XX82<br>
                <i class="bi bi-envelope"></i> dxxxxxx@gmail.com<br>
              </address>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 mb-4">
          <div class="icon-box" data-aos="zoom-in" data-aos-delay="150">
            <img src="{{asset('accident_mate/assets/img/avataar.png')}}" class="img-fluid " alt="image">
            <div class="text-area"> 
              <h3>Dr. Name</h3>
              <p class="mb-0"><small>General Physician</small></p>
              <p class="mb-3"><small>30 years experience overall</small></p>
              <address class="mb-0">
                <i class="bi bi-geo-alt"></i> 12 Street, Block B, XYZ, 160001<br>
                <i class="bi bi-telephone"></i> 1-XXX-XXX-XX82<br>
                <i class="bi bi-envelope"></i> dxxxxxx@gmail.com<br>
              </address>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 mb-4">
          <div class="icon-box" data-aos="zoom-in" data-aos-delay="200">
            <img src="{{asset('accident_mate/assets/img/avataar.png')}}" class="img-fluid " alt="image">
            <div class="text-area"> 
              <h3>Dr. Name</h3>
              <p class="mb-0"><small>General Physician</small></p>
              <p class="mb-3"><small>30 years experience overall</small></p>
              <address class="mb-0">
                <i class="bi bi-geo-alt"></i> 12 Street, Block B, XYZ, 160001<br>
                <i class="bi bi-telephone"></i> 1-XXX-XXX-XX82<br>
                <i class="bi bi-envelope"></i> dxxxxxx@gmail.com<br>
              </address>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 mb-4">
          <div class="icon-box" data-aos="zoom-in" data-aos-delay="250">
            <img src="{{asset('accident_mate/assets/img/avataar.png')}}" class="img-fluid " alt="image">
            <div class="text-area"> 
              <h3>Dr. Name</h3>
              <p class="mb-0"><small>General Physician</small></p>
              <p class="mb-3"><small>30 years experience overall</small></p>
              <address class="mb-0">
                <i class="bi bi-geo-alt"></i> 12 Street, Block B, XYZ, 160001<br>
                <i class="bi bi-telephone"></i> 1-XXX-XXX-XX82<br>
                <i class="bi bi-envelope"></i> dxxxxxx@gmail.com<br>
              </address>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 mb-4">
          <div class="icon-box" data-aos="zoom-in" data-aos-delay="300">
            <img src="{{asset('accident_mate/assets/img/avataar.png')}}" class="img-fluid " alt="image">
            <div class="text-area"> 
              <h3>Dr. Name</h3>
              <p class="mb-0"><small>General Physician</small></p>
              <p class="mb-3"><small>30 years experience overall</small></p>
              <address class="mb-0">
                <i class="bi bi-geo-alt"></i> 12 Street, Block B, XYZ, 160001<br>
                <i class="bi bi-telephone"></i> 1-XXX-XXX-XX82<br>
                <i class="bi bi-envelope"></i> dxxxxxx@gmail.com<br>
              </address>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Search Result Section End-->

  <main id="main" class="home-main">
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">
        <div class="row">
          <div class="col-xl-6 col-lg-6 icon-boxes d-flex flex-column justify-content-center py-5" data-aos="fade-left">
            <h2 class="fw-semibold">Our Primary Concern</h2>
            <div class="row">
              <div class="col-lg-6 col-md-4">
                <div class="icon-box d-flex flex-column align-items-center" data-aos="zoom-in" data-aos-delay="100">
                  <div class="icon"><img src="{{asset('accident_mate/assets/img/icons/icon1.png')}}" class="img-fluid" alt="image"></div>
                  <h4 class="title">Experienced</h4>
                  <p class="description">Lorem ipsum dolor sit amet consectetur adipiscing elit.</p>
                </div>
              </div>
              <div class="col-lg-6 col-md-4">
                <div class="icon-box d-flex flex-column align-items-center" data-aos="zoom-in" data-aos-delay="200">
                  <div class="icon"><img src="{{asset('accident_mate/assets/img/icons/icon2.png')}}" class="img-fluid" alt="image"></div>
                  <h4 class="title">Focused on you</h4>
                  <p class="description">Lorem ipsum dolor sit amet consectetur adipiscing elit.</p>
                </div>
              </div>
              <div class="col-lg-6 col-md-4">
                <div class="icon-box d-flex flex-column align-items-center" data-aos="zoom-in" data-aos-delay="300">
                  <div class="icon"><img src="{{asset('accident_mate/assets/img/icons/icon3.png')}}" class="img-fluid" alt="image"></div>
                  <h4 class="title">Reputation</h4>
                  <p class="description">Lorem ipsum dolor sit amet consectetur adipiscing elit.</p>
                </div>
              </div>
              <div class="col-lg-6 col-md-4">
                <div class="icon-box d-flex flex-column align-items-center" data-aos="zoom-in" data-aos-delay="400">
                  <div class="icon"><img src="{{asset('accident_mate/assets/img/icons/icon4.png')}}" class="img-fluid" alt="image"></div>
                  <h4 class="title">Grow your Network</h4>
                  <p class="description">Lorem ipsum dolor sit amet consectetur adipiscing elit.</p>
                </div>
              </div>
              <div class="col-lg-6 col-md-4">
                <div class="icon-box d-flex flex-column align-items-center" data-aos="zoom-in" data-aos-delay="500">
                  <div class="icon"><img src="{{asset('accident_mate/assets/img/icons/icon5.png')}}" class="img-fluid" alt="image"></div>
                  <h4 class="title">Increase Referrals</h4>
                  <p class="description">Lorem ipsum dolor sit amet consectetur adipiscing elit.</p>
                </div>
              </div>
              <div class="col-lg-6 col-md-4">
                <div class="icon-box d-flex flex-column align-items-center" data-aos="zoom-in" data-aos-delay="600">
                  <div class="icon"><img src="{{asset('accident_mate/assets/img/icons/icon6.png')}}" class="img-fluid" alt="image"></div>
                  <h4 class="title">HIPAA Compliant</h4>
                  <p class="description">Lorem ipsum dolor sit amet consectetur adipiscing elit.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-6 col-lg-6 video-box d-flex justify-content-center align-items-center" data-aos="fade-right">
            <img src="{{asset('accident_mate/assets/img/mobile-demo.png')}}" class="img-fluid " alt="mobile">
          </div>
        </div>

      </div>
    </section><!-- End About Section -->


    <!-- ======= Business Provider Section ======= -->
    <section id="services" class="services">
      <div class="container">
        <div class="text-center" data-aos="fade-down">
          <h2 class="fw-semibold text-center">Top Business Providers</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
        <div class="row" data-aos="fade-left">
          <div class="swiper-container swiper-initialize" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="icon-box" data-aos="zoom-in" data-aos-delay="50">
                  <div class="img-frame">
                    <img src="{{asset('accident_mate/assets/img/gallery/p1.png')}}" alt="medical" class="img-fluid"/>
                    <a href="#"><span class="heart-bg"><i class="bi bi-heart"></i></span></a>
                  </div>
                  <small>Doctor, Attorney, Body Shop</small>
                  <h3>Join our Medical Network</h3>
                  <p class="mb-2">Washington</p>
                  <div class="rating-box">
                    <div class="stars">
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                    </div>
                  </div>
                  <a href="#" class="btn mb-2"><span><i class="bi bi-telephone"></i></span> Call</a>
                  <a href="#" class="btn"><span><i class="bi bi-camera-video"></i></span>Video Call</a>
                </div>
              </div>

              <div class="swiper-slide">
                <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
                  <div class="img-frame">
                    <img src="{{asset('accident_mate/assets/img/gallery/p2.png')}}" alt="attorney" class="img-fluid"/>
                    <a href="#"><span class="heart-bg"><i class="bi bi-heart"></i></span></a>
                  </div>
                  <small>Doctor, Attorney, Body Shop</small>
                  <h3>Join our Attorney Network</h3>
                  <p class="mb-2">Washington</p>
                  <div class="rating-box">
                    <div class="stars">
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                    </div>
                  </div>
                  <a href="#" class="btn mb-2"><span><i class="bi bi-telephone"></i></span> Call</a>
                  <a href="#" class="btn"><span><i class="bi bi-camera-video"></i></span>Video Call</a>
                </div>
              </div>

              <div class="swiper-slide">
                <div class="icon-box" data-aos="zoom-in" data-aos-delay="150">
                  <div class="img-frame">
                    <img src="{{asset('accident_mate/assets/img/gallery/p3.png')}}" alt="network" class="img-fluid"/>
                    <a href="#"><span class="heart-bg"><i class="bi bi-heart"></i></span></a>
                  </div>
                  <small>Doctor, Attorney, Body Shop</small>
                  <h3>Support Services Network</h3>
                  <p class="mb-2">Washington</p>
                  <div class="rating-box">
                    <div class="stars">
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                    </div>
                  </div>
                  <a href="#" class="btn mb-2"><span><i class="bi bi-telephone"></i></span> Call</a>
                  <a href="#" class="btn"><span><i class="bi bi-camera-video"></i></span>Video Call</a>
                </div>
              </div>

              <div class="swiper-slide">
                <div class="icon-box" data-aos="zoom-in" data-aos-delay="200">
                  <div class="img-frame">
                    <img src="{{asset('accident_mate/assets/img/gallery/p4.png')}}" alt="body shop" class="img-fluid"/>
                    <a href="#"><span class="heart-bg"><i class="bi bi-heart"></i></span></a>
                  </div>
                  <small>Doctor, Attorney, Body Shop</small>
                  <h3>Body Shop Network</h3>
                  <p class="mb-2">Washington</p>
                  <div class="rating-box">
                    <div class="stars">
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                    </div>
                  </div>
                  <a href="#" class="btn mb-2"><span><i class="bi bi-telephone"></i></span> Call</a>
                  <a href="#" class="btn"><span><i class="bi bi-camera-video"></i></span>Video Call</a>
                </div>
              </div>

              <div class="swiper-slide">
                <div class="icon-box" data-aos="zoom-in" data-aos-delay="250">
                  <div class="img-frame">
                    <img src="{{asset('accident_mate/assets/img/gallery/p1.png')}}" alt="medical" class="img-fluid"/>
                    <a href="#"><span class="heart-bg"><i class="bi bi-heart"></i></span></a>
                  </div>
                  <small>Doctor, Attorney, Body Shop</small>
                  <h3>Join our Medical Network</h3>
                  <p class="mb-2">Washington</p>
                  <div class="rating-box">
                    <div class="stars">
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                    </div>
                  </div>
                  <a href="#" class="btn mb-2"><span><i class="bi bi-telephone"></i></span> Call</a>
                  <a href="#" class="btn"><span><i class="bi bi-camera-video"></i></span>Video Call</a>
                </div>
              </div>

              <div class="swiper-slide">
                <div class="icon-box" data-aos="zoom-in" data-aos-delay="300">
                  <div class="img-frame">
                    <img src="{{asset('accident_mate/assets/img/gallery/p2.png')}}" alt="attorney" class="img-fluid"/>
                    <a href="#"><span class="heart-bg"><i class="bi bi-heart"></i></span></a>
                  </div>
                  <small>Doctor, Attorney, Body Shop</small>
                  <h3>Join our Attorney Network</h3>
                  <p class="mb-2">Washington</p>
                  <div class="rating-box">
                    <div class="stars">
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                    </div>
                  </div>
                  <a href="#" class="btn mb-2"><span><i class="bi bi-telephone"></i></span> Call</a>
                  <a href="#" class="btn"><span><i class="bi bi-camera-video"></i></span>Video Call</a>
                </div>
              </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <!-- <div class="swiper-pagination"></div> -->
          </div> 
        </div>

      </div>
    </section>
    <!-- Business Provider Section End -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container">
        <div class="text-center" data-aos="fade-down">
          <h2 class="fw-semibold text-center mb-4">What Our Client Says?</h2>
          <i class="bx bxs-quote-alt-right quote-icon-right text-center mb-3"></i>
        </div>
        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                </p>
                <div class="d-flex align-items-center justify-content-center">
                  <img src="{{asset('accident_mate/assets/img/testimonials/testimonials-1.jpg')}}" class="testimonial-img" alt="">
                  <h3 class="ps-3">Saul Goodman</h3>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                </p>
                <div class="d-flex align-items-center justify-content-center">
                  <img src="{{asset('accident_mate/assets/img/testimonials/testimonials-2.jpg')}}" class="testimonial-img" alt="">
                  <h3 class="ps-3">Sara Wilsson</h3>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                </p>
                <div class="d-flex align-items-center justify-content-center">
                  <img src="{{asset('accident_mate/assets/img/testimonials/testimonials-3.jpg')}}" class="testimonial-img" alt="">
                  <h3 class="ps-3">Jena Karlis</h3>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                </p>
                <div class="d-flex align-items-center justify-content-center">
                  <img src="{{asset('accident_mate/assets/img/testimonials/testimonials-4.jpg')}}" class="testimonial-img" alt="">
                  <h3 class="ps-3">Matt Brandon</h3>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
          <!-- <div class="swiper-pagination"></div> -->
        </div>
      </div>
    </section>
    <!-- End Testimonials Section -->

    <!-- ======= Featured Content Section ======= -->
    <section id="featured" class="featured">
      <div class="container">
        <div class="text-center" data-aos="fade-down">
          <h2 class="fw-semibold text-center mb-4">Featured Content</h2>
        </div>
        <div class="row" data-aos="fade-left">
          <div class="col-lg-4 col-md-4">
            <div class="top-head">Webinar</div>
            <div class="member" data-aos="zoom-in" data-aos-delay="100">
              <div class="pic"><img src="{{asset('accident_mate/assets/img/team/f1.png')}}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Lorem Ipsum is simply dummy 
                  text of the printing and typesetting 
                  industry.</h4>
                <a href="#">Read More <i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-4">
            <div class="top-head">Blogs</div>
            <div class="member" data-aos="zoom-in" data-aos-delay="200">
              <div class="pic"><img src="{{asset('accident_mate/assets/img/team/f2.png')}}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Lorem Ipsum is simply dummy 
                  text of the printing and typesetting 
                  industry.</h4>
                <a href="#">Read More <i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-4">
            <div class="top-head">Resources</div>
            <div class="member" data-aos="zoom-in" data-aos-delay="300">
              <div class="pic"><img src="{{asset('accident_mate/assets/img/team/f3.png')}}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Lorem Ipsum is simply dummy 
                  text of the printing and typesetting 
                  industry.</h4>
                <a href="#">Read More <i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> 
    <!-- Featured Content Section End -->

    <!-- ======= Contact Section ======= -->
   <section id="contact" class="contact">
      <div class="container">

        <div class="text-center" data-aos="fade-down">
          <h2 class="fw-semibold text-center">Join our Premier Personal Injury Network!</h2>
          <h4 class="fw-semibold ">Want us to connect with you?</h4>
          <p>Complete this form and we will get back to you in 24 hours.</p>
        </div>
        <div class="row mx-auto mt-0 mt-md-5">
          <div class="col-lg-8 mx-auto mt-5 mt-lg-0" data-aos="fade-left" data-aos-delay="200">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-4 form-group">
                  <label for="name" class="fw-semibold">Full Name</label>
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-4 form-group mt-3 mt-md-0">
                  <label for="phone" class="fw-semibold">Phone Number</label>
                  <input type="tel" class="form-control" name="phone" id="phone" placeholder="Your Phone" required>
                </div>
                <div class="col-md-4 form-group mt-3 mt-md-0">
                  <label for="email" class="fw-semibold">Email</label>
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <label for="message" class="fw-semibold">Message</label>
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button class="btn btn-primary" type="submit">Send Message</button></div>
            </form>
          </div>
        </div>
      </div>
    </section> 
    <!-- End Contact Section -->

    <!-- ======= Instagram Post Section ======= -->
    <section id="insta-post" class="insta-post">
      <div class="container">
        <div class="text-center" data-aos="fade-down">
          <h2 class="fw-semibold text-center"><span class="text-danger">@</span> accidentmate</h2>
          <p>Follow us on instagram</p>
        </div>
        <div class="row mt-5" data-aos="fade-left">
          <div class="col-lg-3 col-md-3">
            <div class="member" data-aos="zoom-in" data-aos-delay="100">
              <div class="pic"><img src="{{asset('accident_mate/assets/img/insta/f1.png')}}" class="img-fluid" alt=""></div>
            </div>
          </div>

          <div class="col-lg-3 col-md-3">
            <div class="member" data-aos="zoom-in" data-aos-delay="200">
              <div class="pic"><img src="{{asset('accident_mate/assets/img/insta/f2.png')}}" class="img-fluid" alt=""></div>
            </div>
          </div>

          <div class="col-lg-3 col-md-3">
            <div class="member" data-aos="zoom-in" data-aos-delay="300">
              <div class="pic"><img src="{{asset('accident_mate/assets/img/insta/f3.png')}}" class="img-fluid" alt=""></div>
            </div>
          </div>

          <div class="col-lg-3 col-md-3">
            <div class="member" data-aos="zoom-in" data-aos-delay="400">
              <div class="pic"><img src="{{asset('accident_mate/assets/img/insta/f4.png')}}" class="img-fluid" alt=""></div>
            </div>
          </div>
        </div>
      </div>
    </section> 
    <!-- Instagram Post Section End -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" style="background: url(accident_mate/assets/img/footer-bg.png) no-repeat center center / cover;">
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-6">
            <a href="index.html"><img src="{{asset('accident_mate/assets/img/logo.png')}}" alt="accident mate" class="img-fluid"></a>
          </div>
          <div class="col-lg-6 col-md-6">
            <p class="t-right"><i class="bi bi-info-circle fs-5"></i> AccidentMATE is not a Legal or Medical website.</p>
          </div>
        </div>
        <div class="row pt-4">
          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h4>Let's keep in touch!</h4>
              <p class="pb-3">Find us on any of these platforms, we respond 1-2 business days.</p>
              <div class="social-links">
                <a href="#" class="twitter"><img src="{{asset('accident_mate/assets/img/icons/twitter.png')}}" alt="twitter" class="img-fluid"></a>
                <a href="#" class="facebook"><img src="{{asset('accident_mate/assets/img/icons/facebook.png')}}" alt="twitter" class="img-fluid"></a>
                <a href="#" class="youtube"><img src="{{asset('accident_mate/assets/img/icons/you-tube.png')}}" alt="twitter" class="img-fluid"></a>
                <a href="#" class="linkedin"><img src="{{asset('accident_mate/assets/img/icons/linkedin.png')}}" alt="twitter" class="img-fluid"></a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Solutions</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">News</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Contact</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Other Resources</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Articles</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Free Trial</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6">
            <h4>Address</h4>
            <p class="a-info">
              <i class="bi bi-geo-alt"></i> 2160 Barranca Parkway, 
             # 1014, Irvine, CA 92606.<br>
              <i class="bi bi-telephone"></i> 1-888-982-1882<br>
              <i class="bi bi-envelope"></i> info@example.com<br>
            </p>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        Copyright &copy; 2023 AccidentMate. All Rights Reserved
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"></script>
  <!-- Vendor JS Files -->
  <script src="{{asset('accident_mate/assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
  <script src="{{asset('accident_mate/assets/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('accident_mate/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('accident_mate/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('accident_mate/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('accident_mate/assets/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('accident_mate/assets/js/main.js')}}"></script>
  <script>
    //Toggle div on click//
    $('.toggle').click(function() {
        $('#search-result').toggle('slow');
    });
  </script>
</body>

</html>