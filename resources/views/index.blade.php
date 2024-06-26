<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <meta name="description" content="" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />


  <title>Assessment task</title>




<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"/>


<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"/>


 
	<link rel="stylesheet" href="assets2/plugins/bootstrap/css/bootstrap.min.css">

	<link rel="stylesheet" href="assets2/plugins/themify/css/themify-icons.css">
	<link rel="stylesheet" href="assets2/plugins/slick-carousel/slick-theme.css">
	<link rel="stylesheet" href="assets2/plugins/slick-carousel/slick.css">

	<link rel="stylesheet" href="assets2/plugins/owl-carousel/owl.carousel.min.css">
	<link rel="stylesheet" href="assets2/plugins/owl-carousel/owl.theme.default.min.css">
	<link rel="stylesheet" href="assets2/plugins/magnific-popup/magnific-popup.css">

	<link rel="stylesheet" href="assets2/css/style.css">


  <link rel="shortcut icon" href="../assets/images/favicon.svg" type="image/svg" />


  <link rel="stylesheet" href="assets/css/bootstrap.min.css" />


  <link rel="stylesheet" href="assets/css/lineicons.css" />


  <link rel="stylesheet" href="assets/css/tiny-slider.css" />


  <link rel="stylesheet" href="assets/css/glightbox.min.css" />

  <link rel="stylesheet" href="style.css" />
</head>

<body>

  <section class="navbar-area navbar-nine">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <nav class="navbar navbar-expand-lg">
           
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNine"
              aria-controls="navbarNine" aria-expanded="false" aria-label="Toggle navigation">
              <span class="toggler-icon"></span>
              <span class="toggler-icon"></span>
              <span class="toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse sub-menu-bar" id="navbarNine">
              <ul class="navbar-nav me-auto">
                <li class="nav-item">
                  <a class="page-scroll active" href="#hero-area">Home</a>
                </li>
                <li class="nav-item">
                  <a class="page-scroll" href="#services">Properties</a>
                </li>

                <li class="nav-item">
                  <a class="page-scroll" href="#pricing">Pricing</a>
                </li>
                <li class="nav-item">
                  <a class="page-scroll" href="#contact">Contact</a>
                </li>
              </ul>
            </div>

          </nav>
  
        </div>
      </div>
   
    </div>

  </section>


  <div class="overlay-left"></div>


  <section id="hero-area" class="header-area header-eight">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 col-md-12 col-12">
          <div class="header-content">

            <h1>
              {{ \App\Models\Title::where('id', 1)->value('title') }}
          </h1>
           
          </div>
        </div>
        <div class="col-lg-6 col-md-12 col-12">
          <div class="header-image">
            <img src="assetshome/images/header/hero-image.jpg" alt="#" />
          </div>
        </div>
      </div>
    </div>
  </section>
  

  <section class="slider mt-4">
    <div class="container-fluid">
        <div class="row no-gutters">
            <div class="col-lg-12 col-sm-12 col-md-12 slider-wrap">
                @foreach ($properties as $property)
                    <div class="slider-item">
                        <div class="slider-item-content">
                            <div class="post-thumb mb-4">
                                <a href="blog-single.html">
                                    <img src="{{ $property->image }}" alt="" class="img-fluid" style="width: 640px; height: 480px; object-fit: cover;">
                                </a>
                            </div>

                            <div class="slider-post-content">
                                <span class="cat-name text-color font-sm font-extra text-uppercase letter-spacing">{{ $property->name }}</span>
                                <h3 class="post-title mt-1"><a href="blog-single.html">{{ $property->location }}</a></h3>
                                <span class="text-muted text-capitalize">{{ $property->price }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>



  <section id="services" class="services-area services-eight">

    <div class="section-title-five">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="content">
              <h6>Properties</h6>
 
            </div>
          </div>
        </div>

      </div>

    </div>

    <div class="container">
      <div class="row">

        @foreach ($properties as $property)
        <div class="col-lg-4 col-md-6">
          <div class="single-services">
              <div class="service-icon">
                  <img src="assets2/images/slider/slider3.jpg" alt="House Icon" class="house-icon">
              </div>
              <div class="service-content">
                  <h4>{{ $property->name}}</h4>
            <p>
              {{ $property->name}}
            </p>
          </div>
        </div>
      </div>
        @endforeach

      </div>
    </div>
  </section>

  <section id="pricing" class="pricing-area pricing-fourteen">

    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6 col-12">
          <div class="pricing-style-fourteen">
            <div class="table-head">
              <h6 class="title">Starter</h4>
                <p>{{ \App\Models\Title::where('id', 3)->value('title') }}</p>
              
            </div>

            <div class="light-rounded-buttons">
              <a href="javascript:void(0)" class="btn primary-btn-outline">
                {{ \App\Models\Title::where('id', 3)->value('title') }}
              </a>
            </div>

          </div>
        </div>

        <div class="col-lg-4 col-md-6 col-12">
          <div class="pricing-style-fourteen">
            <div class="table-head">
              <h6 class="title">Starter</h4>
                <p>{{ \App\Models\Title::where('id', 3)->value('title') }}</p>
              
            </div>

            <div class="light-rounded-buttons">
              <a href="javascript:void(0)" class="btn primary-btn-outline">
                {{ \App\Models\Title::where('id', 3)->value('title') }}
              </a>
            </div>

          </div>
        </div>

        <div class="col-lg-4 col-md-6 col-12">
          <div class="pricing-style-fourteen">
            <div class="table-head">
              <h6 class="title">Starter</h4>
                <p>{{ \App\Models\Title::where('id', 3)->value('title') }}</p>
              
            </div>

            <div class="light-rounded-buttons">
              <a href="javascript:void(0)" class="btn primary-btn-outline">
                {{ \App\Models\Title::where('id', 3)->value('title') }}
              </a>
            </div>

          </div>
        </div>
   
   
      </div>
    </div>
  </section>

  <section id="call-action" class="call-action">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xxl-6 col-xl-7 col-lg-8 col-md-9">
          <div class="inner-content">
            <h2> Property Book</h2>
            <p>
              Task 1
            </p>
            <div class="light-rounded-buttons">
              <a href="javascript:void(0)" class="btn primary-btn-outline">Get Started</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div id="blog" class="latest-news-area section">

    <div class="section-title-five">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="content">
              <h6>Team</h6>
              <h2 class="fw-bold">Team Members</h2>
            
            </div>
          </div>
        </div>

      </div>

    </div>

    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6 col-12">
          <!-- Single News -->
          <div class="single-news">
            <div class="image">
              <a href="javascript:void(0)"><img class="thumb" src="assetshome/images/blog/3.jpg" alt="Blog" /></a>
              <div class="meta-details">
                      <img src="assetshome/images/header/hero-image.jpg" alt="#" />
                <span>{{ \App\Models\Title::where('id', 3)->value('title') }}</span>
              </div>
            </div>
            <div class="content-body">
              <h4 class="title">
                <a href="javascript:void(0)"> ta </a>
              </h4>
             
            </div>
          </div>

        </div>
        <div class="col-lg-4 col-md-6 col-12">

          <div class="single-news">
            <div class="image">
              <a href="javascript:void(0)"><img class="thumb" src="assetshome/images/blog/3.jpg" alt="Blog" /></a>
              <div class="meta-details">
                <img class="thumb" src="assetshome/images/blog/3.jpg" alt="Author" />
                <span>BY Gladman Gee</span>
              </div>
            </div>
            <div class="content-body">
              <h4 class="title">
                <a href="javascript:void(0)">
                  
                </a>
              </h4>
             
            </div>
          </div>
 
        </div>
        <div class="col-lg-4 col-md-6 col-12">
      
          <div class="single-news">
            <div class="image">
              <a href="javascript:void(0)"><img class="thumb" src="assetshome/images/blog/3.jpg" alt="Blog" /></a>
              <div class="meta-details">
                <img class="thumb" src="assetshome/images/blog/3.jpg" alt="Author" />
                <span>BY Enock</span>
              </div>
            </div>
            <div class="content-body">
              <h4 class="title">
                <a href="javascript:void(0)">
            
                </a>
              </h4>
              <p>
                
              </p>
            </div>
          </div>
        
        </div>
      </div>
    </div>
  </div>


  <footer class="footer-area footer-eleven">

    <div class="footer-top">
      <div class="container">
        <div class="inner-content">
          <div class="row">
            <div class="col-lg-4 col-md-6 col-12">
           
              <div class="footer-widget f-about">
             
                <p>
                  Laravel is the Best
                </p>
               
              </div>
     
            </div>
            <div class="col-lg-2 col-md-6 col-12">
  
           
            </div>
            <div class="col-lg-2 col-md-6 col-12">
           
              <div class="footer-widget f-link">
                <h5>Property Book</h5>
                <ul>
                  <li><a href="javascript:void(0)">Home</a></li>
                  <li><a href="javascript:void(0)">Address</a></li>
                  <li><a href="javascript:void(0)">Team</a></li>
                  <li><a href="javascript:void(0)">Net Worth</a></li>
                </ul>
              </div>
       
            </div>
            <div class="col-lg-4 col-md-6 col-12">
              <!-- Single Widget -->
              <div class="footer-widget newsletter">
                <h5>Subscribe</h5>
                <p>Subscribe to our newsletter for the latest updates</p>
                <form action="#" method="get" target="_blank" class="newsletter-form">
                  <input name="EMAIL" placeholder="Email address" required="required" type="email" />
                  <div class="button">
                    <button class="sub-btn">
                      <i class="lni lni-envelope"></i>
                    </button>
                  </div>
                </form>
              </div>
         
            </div>
          </div>
        </div>
      </div>
    </div>

  </footer>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>


	<script src="assets2/plugins/jquery/jquery.js"></script>

	<script src="assets2/plugins/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets2/plugins/bootstrap/js/popper.min.js"></script>

	<script src="assets2/plugins/owl-carousel/owl.carousel.min.js"></script>
	<script src="assets2/plugins/slick-carousel/slick.min.js"></script>
	<script src="assets2/plugins/magnific-popup/magnific-popup.js"></script>

	<script src="assets2/plugins/instafeed-js/instafeed.min.js"></script>

	<script src="assets2/https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
	<script src="assets2/plugins/google-map/gmap.js"></script>

	<script src="assets2/js/custom.js"></script>


  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/glightbox.min.js"></script>
  <script src="assets/js/main.js"></script>
  <script src="assets/js/tiny-slider.js"></script>

  <script type="text/javascript">
    $(document).ready(function(){
        $('.slider-wrap').slick({
            slidesToShow: 4,        // Number of slides to show
            slidesToScroll: 1,      // Number of slides to scroll
            autoplay: true,         // Enable auto play
            autoplaySpeed: 3000,    // Auto play speed (3 seconds)
            infinite: true,         // Infinite looping
            arrows: true,           // Show navigation arrows
            dots: true,             // Show navigation dots
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1,
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    }
                }
            ]
        });
    });
</script>


  <script>

    //===== close navbar-collapse when a  clicked
    let navbarTogglerNine = document.querySelector(
      ".navbar-nine .navbar-toggler"
    );
    navbarTogglerNine.addEventListener("click", function () {
      navbarTogglerNine.classList.toggle("active");
    });

    // ==== left sidebar toggle
    let sidebarLeft = document.querySelector(".sidebar-left");
    let overlayLeft = document.querySelector(".overlay-left");
    let sidebarClose = document.querySelector(".sidebar-close .close");

    overlayLeft.addEventListener("click", function () {
      sidebarLeft.classList.toggle("open");
      overlayLeft.classList.toggle("open");
    });
    sidebarClose.addEventListener("click", function () {
      sidebarLeft.classList.remove("open");
      overlayLeft.classList.remove("open");
    });

    // ===== navbar nine sideMenu
    let sideMenuLeftNine = document.querySelector(".navbar-nine .menu-bar");

    sideMenuLeftNine.addEventListener("click", function () {
      sidebarLeft.classList.add("open");
      overlayLeft.classList.add("open");
    });

    //========= glightbox
    GLightbox({
      'href': 'https://www.youtube.com/watch?v=r44RKWyfcFw&fbclid=IwAR21beSJORalzmzokxDRcGfkZA1AtRTE__l5N4r09HcGS5Y6vOluyouM9EM',
      'type': 'video',
      'source': 'youtube', //vimeo, youtube or local
      'width': 900,
      'autoplayVideos': true,
    });

  </script>
</body>

</html>