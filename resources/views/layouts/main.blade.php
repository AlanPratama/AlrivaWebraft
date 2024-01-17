<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Jasa Pembuatan Website Terjangkau! Alriva WebCraft, Pembuat Website Profesional Dengan Harga Terjangkau!"/>
  <meta name="csrf-token" content="{{ csrf_token() }}">


  <title>Jasa Pembuatan Website | Alriva WebCraft</title>

  <!--
    - favicon
  -->
  <link rel="shortcut icon" href="{{ asset('assets/images/logo/2.png') }}" type="image/svg+xml">

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


  <!-- TAILWINDCSS -->
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

  {{-- SWEETALERT 2 --}}
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  {{-- AXIOS --}}
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

  <style>
    .animated {
        -webkit-animation-duration: 1s;
        animation-duration: 1s;
        -webkit-animation-fill-mode: both;
        animation-fill-mode: both;
    }

    .animated.faster {
        -webkit-animation-duration: 500ms;
        animation-duration: 500ms;
    }

    .fadeIn {
        -webkit-animation-name: fadeIn;
        animation-name: fadeIn;
    }

    .fadeOut {
        -webkit-animation-name: fadeOut;
        animation-name: fadeOut;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    @keyframes fadeOut {
        from {
            opacity: 1;
        }

        to {
            opacity: 0;
        }
    }
</style>
</head>

<body id="top">

  <!--
    - #HEADER
  -->

  <header class="header" data-header>
    <div class="container">

      <h1 style="display: flex; justify-content: start; align-items: center; gap: 1;">
        <img src="{{ asset('assets/images/logo/0.png') }}" alt="alriva webcraft" style="width: 55px;">
        <a href="{{ url('https://www.instagram.com/alrivawebcraft') }}" class="logo">ALRIVA <span class="md:inline hidden">WEBCRAFT</span></a>
      </h1>

      <nav class="navbar" data-navbar>

        <div class="navbar-top">
          <a href="{{ url('https://www.instagram.com/alrivawebcraft') }}" class="logo">ALRIVA WEBCRAFT</a>

          <button class="nav-close-btn" aria-label="Close menu" data-nav-toggler>
            <ion-icon name="close-outline"></ion-icon>
          </button>
        </div>

        <ul class="navbar-list">

          <li class="navbar-item">
            <a href="{{ url('/#home') }}" class="navbar-link" data-nav-toggler>Home</a>
          </li>

          <li class="navbar-item">
            <a href="{{ url('/#harga') }}" class="navbar-link" data-nav-toggler>Harga</a>
          </li>

          <li class="navbar-item">
            <a href="{{ url('/#website') }}" class="navbar-link" data-nav-toggler>Website</a>
          </li>

          <li class="navbar-item">
            <a href="{{ url('/#portofolio') }}" class="navbar-link" data-nav-toggler>Portofolio</a>
          </li>

          <li class="navbar-item">
            <a href="{{ url('/#contact') }}" class="navbar-link" data-nav-toggler>Contact</a>
          </li>

        </ul>

      </nav>

      <div class="header-actions">

        @if (Auth::user())
        <a href="{{ url('/wish-list') }}">
            <button class="header-action-btn">
                <ion-icon name="cart-outline"></ion-icon>
            </button>
        </a>
        @else
        <a href="{{ url('/login') }}">
            <button class="header-action-btn">
                <ion-icon name="cart-outline"></ion-icon>
            </button>
        </a>
        @endif

        @if (Auth::user())
        <button onclick="openModal()" class='header-action-btn'><ion-icon name="person-circle-outline"></ion-icon></button>
        <a href="/logout" class="header-action-btn login-btn">
            <ion-icon name="log-out-outline" aria-hidden="true"></ion-icon>
            <!-- <ion-icon name="walk-outline" aria-hidden="true"></ion-icon> -->
            <span class="span">Logout</span>
          </a>
        @else
        <a href="{{ url('/auth/login') }}" class="header-action-btn login-btn">
            <ion-icon name="log-in-outline" aria-hidden="true"></ion-icon>
            <!-- <ion-icon name="walk-outline" aria-hidden="true"></ion-icon> -->
            <span class="span">Login / Register</span>
          </a>
        @endif



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

  @if (Auth::user())

  <div class="main-modal fixed w-full p-8 h-100 inset-0 z-50 overflow-hidden flex justify-center items-center animated fadeIn faster"
  style="background: rgba(0,0,0,.7);">
  <div
      class="border border-teal-500 shadow-lg modal-container bg-white md:w-1/2  w-full mx-auto rounded shadow-lg z-50 overflow-y-auto">
      <div class="modal-content py-4 text-left px-6">
          <!--Title-->
          <div class="flex justify-between items-center pb-3">
              <p class="text-2xl font-bold">Menu</p>
              <div class="modal-close cursor-pointer z-50">
                  <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                      viewBox="0 0 18 18">
                      <path
                          d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z">
                      </path>
                  </svg>
              </div>
          </div>
          <!--Body-->
          <div class="my-5">
              <div class="flex flex-wrap justify-between items-center gap-4">
                  <a href="{{ url('/akun') }}" style="width: 48%; font-size: 20px; color: #535ce0e9;" class="shadow py-12 flex flex-col justify-center items-center hover:bg-gray-100">
                      <ion-icon name="person-outline"></ion-icon>
                      <p>Akun</p>
                  </a>

                  <a href="{{ url('/transaksi') }}" style="width: 48%; font-size: 20px; color: #535ce0e9;" class="shadow py-12 flex flex-col justify-center items-center hover:bg-gray-100">
                    <ion-icon name="albums-outline"></ion-icon>
                      <p>Histori</p>
                  </a>
              </div>
          </div>

      </div>
  </div>
</div>

<script>
  const modal = document.querySelector('.main-modal');
  const closeButton = document.querySelectorAll('.modal-close');

  const modalClose = () => {
      modal.classList.remove('fadeIn');
      modal.classList.add('fadeOut');
      setTimeout(() => {
          modal.style.display = 'none';
      }, 500);
  }

  const openModal = () => {
      modal.classList.remove('fadeOut');
      modal.classList.add('fadeIn');
      modal.style.display = 'flex';
  }

  for (let i = 0; i < closeButton.length; i++) {

      const elements = closeButton[i];

      elements.onclick = (e) => modalClose();

      modal.style.display = 'none';

      window.onclick = function (event) {
          if (event.target == modal) modalClose();
      }
  }
</script>
  @endif
</body>

</html>
