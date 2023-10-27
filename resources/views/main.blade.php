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
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@500&family=Roboto:ital@1&family=Space+Grotesk:wght@500&display=swap"
            rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
        <title>@yield('title')</title>
    </head>
    <body>
        <nav>
            <div class="menu-bar">
                @if ($user)
                <a href="{{ route('profile.home') }}"><img src="{{ asset('assets/images/tazkarti.svg') }}" alt></a>
                @endif
                <ul>
                    
                    @if ($user->type == 'admin')
                        
                    <li><a href="{{ route('dashboard.index') }}">Dashboard</a></li>
                    @endif
                    @if ($user)
                    
                    <li><a href="{{ route('profile.info' , $user->id) }}">Update Information</a></li>
                    <li><a href="#">Languages <i class="fas fa-caret-down"></i></a>

                        <div class="dropdown-menu">
                            <ul>
                                <li><a href="#"><img
                                            style="padding-right: 10px;"
                                            src="{{ asset('assets/images/lang-flag3-egy.svg') }}">العربية</a></li>
                                <li><a href="#"><img
                                            style="padding-right: 10px;"
                                            src="{{ asset('assets/images/lang-flag1-eng.svg') }}">English</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button class="navbar-button" type="submit">Sign out</button>
                        </form>
                        
                    </li>
                    @endif

                </ul>
            </div>
        </nav>

    <div class="hero">
 <!-- profile bar -->
 <div class="profile-bar">
    <img src="{{ !empty(Auth::user()->image) ?
        asset('assets/images/users/' . Auth::user()->image)
        :
        asset('assets/images/users/defaultUser.jpg') }}" alt>
    <p>{{ Auth::user()->name }}</p>
    <p>Email:</p>
    <p>{{ Auth::user()->email }}</p>
    <ul>
        <li><a href="{{ route('profile.home') }}">Home</a></li>
        <li><a href="{{ route('match.home') }}">Matches</a></li>
        <li><a href="{{ route('event.home') }}">Events</a>
            <li><a href="{{ route('userTicket.home') }}">My Tickets</a>

                </li>

            </ul>
        </div>
        <marquee behavior="sliding" hspace="50px" vspace="30px">Tazkarti
            ID is your pass to stadiums. It is an
            effective method to achieve the safety of fans Allowing
            identifying them in the stadium. Tazkarti is also a
            ticketing provider and event organizer that plans and
            hosts its own events all around Egypt.</marquee>
        <!-- profile bar -->
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
            <li><a href="https://www.facebook.com/Karim362002/"><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
            <li><a href="https://www.linkedin.com/in/karim-hossam-b43967202/"><i class="fab fa-linkedin-in"></i></a></li>
            <li><a href="https://github.com/KarimHossam362002"><i class="fab fa-github"></i></a></li>
        </ul>
        <ul class="menu">
          <li><a href="{{ route('home.guest') }}">Home</a></li>
          <li><a href="{{ route('stadium.home') }}">Stadium Locations</a></li>
          <li><a href="{{ route('store.home') }}">Our Stores</a></li>
          <li><a href="{{ route('faq.home') }}">FAQ</a></li>
          <li><a href="{{ route('about.home') }}">About Tazkarti</a></li>
          <li><a href="{{ route('contact.home') }}">Contact US</a></li>
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

