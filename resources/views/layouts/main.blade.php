<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>EduHome - Education Is About Academic Excellence</title>

  <!--
    - favicon
  -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!--
    - custom css link
  -->
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

  <!--
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Urbanist:wght@400;500;600;700;800&display=swap" rel="stylesheet">

  <!--
    - preload images
  -->
  <link rel="preload" as="image" href="{{ asset('assets/images/hero-banner.png') }}">
  <link rel="preload" as="image" href="{{ asset('assets/images/hero-abs2.png') }}" media="min-width(768px)">
  <link rel="preload" as="image" href="{{ asset('assets/images/hero-abs3.png') }}" media="min-width(768px)">


  <!-- FLOWBITE -->
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

</head>

<body id="top">

  <!--
    - #HEADER
  -->

  <header class="header" data-header>
    <div class="container">

      <h1 style="display: flex; justify-content: start; align-items: center; gap: 1;">
        <img src="{{ asset('assets/images/logo/0.png') }}" alt="alriva webcraft" style="width: 55px;">
        <a href="#" class="logo">ALRIVA <span class="md:inline hidden">WEBCRAFT</span></a>
      </h1>

      <nav class="navbar" data-navbar>

        <div class="navbar-top">
          <a href="#" class="logo">ALRIVA WEBCRAFT</a>

          <button class="nav-close-btn" aria-label="Close menu" data-nav-toggler>
            <ion-icon name="close-outline"></ion-icon>
          </button>
        </div>

        <ul class="navbar-list">

          <li class="navbar-item">
            <a href="#home" class="navbar-link" data-nav-toggler>Home</a>
          </li>

          <li class="navbar-item">
            <a href="#harga" class="navbar-link" data-nav-toggler>Harga</a>
          </li>

          <li class="navbar-item">
            <a href="#website" class="navbar-link" data-nav-toggler>Website</a>
          </li>

          <li class="navbar-item">
            <a href="#portofolio" class="navbar-link" data-nav-toggler>Portofolio</a>
          </li>

          <li class="navbar-item">
            <a href="#contact" class="navbar-link" data-nav-toggler>Contact</a>
          </li>

        </ul>

      </nav>

      <div class="header-actions">

        <button class="header-action-btn">
          <ion-icon name="cart-outline"></ion-icon>
        </button>

        <a href="auth/login.html" class="header-action-btn login-btn">
          <ion-icon name="log-in-outline" aria-hidden="true"></ion-icon>
          <!-- <ion-icon name="walk-outline" aria-hidden="true"></ion-icon> -->
          <span class="span">Login / Register</span>
        </a>

        <button class="header-action-btn nav-open-btn" aria-label="Open menu" data-nav-toggler>
          <ion-icon name="menu-outline"></ion-icon>
        </button>

      </div>

      <div class="overlay" data-nav-toggler data-overlay></div>

    </div>
  </header>


@yield('content')

  <!--
    - #FOOTER
  -->

  <footer class="footer">
    <div class="container">

      <div class="footer-top">

        <div class="footer-brand">

          <a href="#" class="logo">Alriva Webcraft</a>

          <p class="section-text">
            It is a long established fact that a reader will be distracted by the readable content of a page when
            looking at its
            layout. The point of using Lorem Ipsum.
          </p>

          <ul class="social-list">

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-facebook"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-twitter"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-linkedin"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-pinterest"></ion-icon>
              </a>
            </li>

          </ul>

        </div>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Explore</p>
          </li>

          <li>
            <a href="#" class="footer-link">
              <ion-icon name="chevron-forward" aria-hidden="true"></ion-icon>

              <span class="span">About Us</span>
            </a>
          </li>

          <li>
            <a href="#" class="footer-link">
              <ion-icon name="chevron-forward" aria-hidden="true"></ion-icon>

              <span class="span">Upcoming Events</span>
            </a>
          </li>

          <li>
            <a href="#" class="footer-link">
              <ion-icon name="chevron-forward" aria-hidden="true"></ion-icon>

              <span class="span">Blog & News</span>
            </a>
          </li>

          <li>
            <a href="#" class="footer-link">
              <ion-icon name="chevron-forward" aria-hidden="true"></ion-icon>

              <span class="span">FAQ Question</span>
            </a>
          </li>

          <li>
            <a href="#" class="footer-link">
              <ion-icon name="chevron-forward" aria-hidden="true"></ion-icon>

              <span class="span">Testimonial</span>
            </a>
          </li>

          <li>
            <a href="#" class="footer-link">
              <ion-icon name="chevron-forward" aria-hidden="true"></ion-icon>

              <span class="span">Privacy Policy</span>
            </a>
          </li>

        </ul>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Useful Links</p>
          </li>

          <li>
            <a href="#" class="footer-link">
              <ion-icon name="chevron-forward" aria-hidden="true"></ion-icon>

              <span class="span">Contact Us</span>
            </a>
          </li>

          <li>
            <a href="#" class="footer-link">
              <ion-icon name="chevron-forward" aria-hidden="true"></ion-icon>

              <span class="span">Pricing Plan</span>
            </a>
          </li>

          <li>
            <a href="#" class="footer-link">
              <ion-icon name="chevron-forward" aria-hidden="true"></ion-icon>

              <span class="span">Instructor Profile</span>
            </a>
          </li>

          <li>
            <a href="#" class="footer-link">
              <ion-icon name="chevron-forward" aria-hidden="true"></ion-icon>

              <span class="span">FAQ</span>
            </a>
          </li>

          <li>
            <a href="#" class="footer-link">
              <ion-icon name="chevron-forward" aria-hidden="true"></ion-icon>

              <span class="span">Popular Courses</span>
            </a>
          </li>

          <li>
            <a href="#" class="footer-link">
              <ion-icon name="chevron-forward" aria-hidden="true"></ion-icon>

              <span class="span">Terms & Conditions</span>
            </a>
          </li>

        </ul>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Contact Info</p>
          </li>

          <li class="footer-item">
            <ion-icon name="location-outline" aria-hidden="true"></ion-icon>

            <address class="footer-link">
              275 Quadra Street Victoria Road, New York
            </address>
          </li>

          <li class="footer-item">
            <ion-icon name="call" aria-hidden="true"></ion-icon>

            <a href="tel:+13647657839" class="footer-link">+ 1 (364) 765-7839</a>
          </li>

          <li class="footer-item">
            <ion-icon name="call" aria-hidden="true"></ion-icon>

            <a href="tel:+13647657840" class="footer-link">+ 1 (364) 765-7840</a>
          </li>

          <li class="footer-item">
            <ion-icon name="mail-outline" aria-hidden="true"></ion-icon>

            <a href="mailto:contact@eduhome.com" class="footer-link">contact@eduhome.com</a>
          </li>

        </ul>

      </div>

      <div class="footer-bottom">
        <p class="copyright">
          Copyright 2022 EduHome. All Rights Reserved by <a href="#" class="copyright-link">codewithsadee</a>
        </p>
      </div>

    </div>
  </footer>





  <!--
    - #BACK TO TOP
  -->

  <a href="#top" class="back-top-btn" aria-label="Back to top" data-back-top-btn>
    <ion-icon name="arrow-up"></ion-icon>
  </a>





  <!--
    - custom js link
  -->
  <script src="{{ asset('assets/js/script.js') }}" defer></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>

  <!--
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>
