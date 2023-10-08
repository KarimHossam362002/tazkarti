<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous">
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="icon" href="{{ asset('assets/images/pageLogo.png') }}">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@500&family=Roboto:ital@1&family=Space+Grotesk:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    <title>@yield('title')</title>
  </head>
  <body>

    <nav>
    <div class="menu-bar">
      <a href="index.html"><img src="{{ asset('assets/images/tazkarti.svg') }}" alt></a>
      <ul>
        <li><a href="register.html">Register</a></li>
        <li><a href="login.html">Sign in</a></li>
        <li><a href="#">Languages <i class="fas fa-caret-down"></i></a>

          <div class="dropdown-menu">
            <ul>
              <li><a href="#"><img style="padding-right: 10px;"
                    src="{{ asset('assets/images/lang-flag3-egy.svg') }}">العربية</a></li>
              <li><a href="#"><img style="padding-right: 10px;"
                    src="{{ asset('assets/images/lang-flag1-eng.svg') }}">English</a></li>
            </ul>
          </div>
        </li>
        <li><a href="about.html">About us</a>
        </li>
        <li><a href="contact.html">Contact us</a></li>
      </ul>
    </div>
  </nav>

    <div class="hero">

      &nbsp;

        @yield('content')
      <!-- footer -->
      <footer>
        <div class="waves">
          <div class="wave" id="wave1"></div>
          <div class="wave" id="wave2"></div>
          <div class="wave" id="wave3"></div>
          <div class="wave" id="wave4"></div>
        </div>
        <ul class="social_icon">
          <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
          <li><a href="#"><i class="fab fa-twitter"></i></a></li>
          <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
          <li><a href="#"><i class="fab fa-github"></i></a></li>
        </ul>
        <ul class="menu">
          <li><a href="index.html">Home</a></li>
          <li><a href="stadium.html">Stadium Locations</a></li>
          <li><a href="store.html">Our Stores</a></li>
          <li><a href="faq.html">FAQ</a></li>
          <li><a href="about.html">About Tazkarti</a></li>
          <li><a href="contact.html">Contact US</a></li>
        </ul>
        <p>&copy;2023 Tazkarti Karim | All Rights Reserved</p>
      </footer>
      <!-- footer -->

    </div>

  </body>
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
  <script src="{{ asset('assets/js/main.js') }}"></script>
</html>

