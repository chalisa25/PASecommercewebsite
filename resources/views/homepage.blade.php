<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <link rel="icon" href="{{ asset('hostit-html/images/fevicon.png') }}" type="image/gif" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Homepage</title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="{{ asset('hostit-html/css/bootstrap.css') }}" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

  <!-- font awesome style -->
  <link href="{{ asset('hostit-html/css/font-awesome.min.css') }}" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="{{ asset('hostit-html/css/style.css') }}" rel="stylesheet" />
  <!-- responsive style -->
  <link href="{{ asset('hostit-html/css/responsive.css') }}" rel="stylesheet" />

</head>

<body>

  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container">
          <a class="navbar-brand" href="index.html">
            <span>Ecommerce Website </span>
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.html"> About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="service.html">Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.html">Contact Us</a>
              </li>
            </ul>
            <div class="quote_btn-container">
              <form class="form-inline">
              </form>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
    <!-- slider section -->
    <section class="slider_section">
      <div id="customCarousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container">
              <div class="row">
                <div class="col-md-6">
                  <div class="detail-box">
                    <h1>
                      Beli Kebutuhan anda disini!!!
                    </h1>
                    <p>
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos nihil neque pariatur, molestias ad id omnis totam blanditiis necessitatibus illum fugiat nulla nisi. Necessitatibus ipsum sapiente odio eius fuga neque.
                    </p>
                    <div class="btn-box">
                      <a href="/login" class="btn-1">
                        Login
                      </a>
                      <a href="/register" class="btn-2">
                        Register
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="row">
                    <div class="col-lg-10 mx-auto">
                      <div class="img-box">
                        <img src="{{ asset('hostit-html/images/slider-img.png') }}" alt="">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end slider section -->
  </div>

  <!-- service section -->
  <section class="service_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Layanan Kami
        </h2>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-lg-4">
          <div class="box">
            <div class="img-box">
              <img src="{{ asset('hostit-html/images/s1.png') }}" alt="">
            </div>
            <div class="detail-box">
              <h4>
                Pembelian Barang
              </h4>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad iusto laborum quod tempore eaque explicabo architecto nulla doloremque fuga! Officia, quis possimus pariatur voluptatibus maxime corrupti eligendi a ipsum? Est.
              </p>
            </div>
          </div>
        </div>
        {{-- <div class="col-md-6 col-lg-4">
          <div class="box">
            <div class="img-box">
              <img src="{{ asset('hostit-html/images/s2.png') }}" alt="">
            </div>
            <div class="detail-box">
              <h4>
                Dedicated Hosting
              </h4>
              <p>
                Generators on the Internet tend to repeat predefined chunks as necessary
              </p>
            </div>
          </div>
        </div> --}}
        {{-- <div class="col-md-6 col-lg-4">
          <div class="box">
            <div class="img-box">
              <img src="{{ asset('hostit-html/images/s3.png') }}" alt="">
            </div>
            <div class="detail-box">
              <h4>
                Cloud Hosting
              </h4>
              <p>
                Generators on the Internet tend to repeat predefined chunks as necessary
              </p>
            </div>
          </div>
        </div> --}}
        {{-- <div class="col-md-6 col-lg-4">
          <div class="box">
            <div class="img-box">
              <img src="{{ asset('hostit-html/images/s4.png') }}" alt="">
            </div>
            <div class="detail-box">
              <h4>
                VPS Hosting
              </h4>
              <p>
                Generators on the Internet tend to repeat predefined chunks as necessary
              </p>
            </div>
          </div>
        </div> --}}
        <div class="col-md-6 col-lg-4">
          <div class="box">
            <div class="img-box">
              <img src="{{ asset('hostit-html/images/s5.png') }}" alt="">
            </div>
            <div class="detail-box">
              <h4>
                Kualitas Barang
              </h4>
              <p>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nesciunt incidunt facere, ex illo dolore quis, at saepe delectus numquam blanditiis labore corporis qui ipsam impedit minus sapiente tempore consectetur id.
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="box">
            <div class="img-box">
              <img src="{{ asset('hostit-html/images/s6.png') }}" alt="">
            </div>
            <div class="detail-box">
              <h4>
                Garansi
              </h4>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id quas ducimus quidem similique doloribus ipsa ut dolorem eaque esse cum repellendus architecto labore unde, error quasi saepe tenetur autem porro.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end service section -->

  <!-- about section -->
  <section class="about_section layout_padding-bottom">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                Tentang Kami
              </h2>
            </div>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto ducimus laudantium tempore. Cum ut in praesentium rerum, voluptatum accusantium eos eum deleniti deserunt obcaecati! Repudiandae commodi reprehenderit est dolor ex!
            </p>
            <a href="">
              Baca Selengkapnya
            </a>
          </div>
        </div>
        <div class="col-md-6">
          <div class="img-box">
            <img src="{{ asset('hostit-html/images/about-img.png') }}" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end about section -->

  <!-- contact section -->
  <section class="contact_section layout_padding-bottom">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Hubungi Kami
        </h2>
      </div>
      <div class="row">
        <div class="col-md-8 col-lg-6 mx-auto">
          <div class="form_container">
            <form action="">
              <div>
                <input type="text" placeholder="Your Name" />
              </div>
              <div>
                <input type="email" placeholder="Your Email" />
              </div>
              <div>
                <input type="text" placeholder="Your Phone" />
              </div>
              <div>
                <input type="text" class="message-box" placeholder="Message" />
              </div>
              <div class="btn_box">
                <button>
                  KIRIM
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end contact section -->

  <!-- info section -->
  <section class="info_section layout_padding2">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="info_contact">
            <h4>
              Address
            </h4>
            <div class="contact_link_box">
              <a href="">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span>
                  Jl DI Panjaitan 128, Purwokerto Selatan, Banyumas, Jawa Tengah
                </span>
              </a>
              <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>
                    +62 821-3865-7032
                </span>
              </a>
              <a href="">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span>
                  nadyachalisasatriani2504@gmail.com
                </span>
              </a>
            </div>
          </div>
          <div class="info_social">
            <a href="">
              <i class="fa fa-facebook" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-twitter" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-linkedin" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-instagram" aria-hidden="true"></i>
            </a>
          </div>
        </div>
        <div class="col-md-3">
          <div class="info_link_box">
            <h4>
              Links
            </h4>
            <div class="info_links">
              <a class="active" href="index.html">
                <img src="{{ asset('hostit-html/images/nav-bullet.png') }}" alt="">
                Home
              </a>
              <a class="" href="about.html">
                <img src="{{ asset('hostit-html/images/nav-bullet.png') }}" alt="">
                About
              </a>
              <a class="" href="service.html">
                <img src="{{ asset('hostit-html/images/nav-bullet.png') }}" alt="">
                Services
              </a>
              <a class="" href="contact.html">
                <img src="{{ asset('hostit-html/images/nav-bullet.png') }}" alt="">
                Contact Us
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="info_detail">
            <h4>
              Info
            </h4>
            <p>
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quod mollitia corrupti animi tempore reiciendis consequatur, iure error nam sint neque quibusdam quae sapiente atque sunt. Voluptatum, enim? Incidunt, totam officiis.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end info section -->

  <!-- footer section -->
  <footer class="footer_section">
    <div class="container">
      <p>
        &copy; <span id="displayYear"></span> All Rights Reserved By
        <a href="">Event Blazer</a>
      </p>
    </div>
  </footer>
  <!-- footer section -->

  <!-- jQery -->
  <script src="{{ asset('hostit-html/js/jquery-3.4.1.min.js') }}"></script>
  <!-- bootstrap js -->
  <script src="{{ asset('hostit-html/js/bootstrap.js') }}"></script>
  <!-- custom js -->
  <script src="{{ asset('hostit-html/js/custom.js') }}"></script>

</body>

</html>
