<header>


    {{-- @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/admin') }}">Area amministrativa dell'host</a>
            @else
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div>
    @endif --}}

  <div class="container">
    <div class="header-bar">
      <div class="logo"><a href="#"><img src="img/logo.png" style="width:200px;" alt="Logo Airbnb"></a></div>
      <div class="header-menu">
        <ul>
          <li><a href="#" >Alloggi</a></li>
          <!-- <li><a href="#" >Places to stay</a></li> -->
          <li><a href="#" >Esperienze</a></li>
          <!-- <li><a href="#" >Experiences</a></li> -->
          <li><a href="#" >Esperienze online</a></li>
          <!-- <li><a href="#">Online Experiences</a></li> -->
          <li><a href="{{ route('become-host') }}">Diventa un host</a></li>
        </ul>
      </div>
      <div class="header-right">
        <ul>
          <li>
            <i class="fas fa-globe"></i>
          </li>
          <li>
          @guest
              <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
              </li>
              @if (Route::has('register'))
              <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
              </li>
              @endif
              @else
              <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }}
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                  </a>
                  <a class="dropdown-item" href="{{  route('property.index') }}">Area amministrativa</a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                      @csrf
                  </form>
                </div>
              </li>
            @endguest
          </li>
        </ul>
      </div>

    </div> <!--   fine .header-menu -->
    <div class="header-form">
      <form class="search">
        <ul>
          <li>
            <div class="search-inputs">
              <label for="location">
                <div class="label">Dove</div>
                <!-- <div class="label">Location</div> -->
                <input name="location" id="location" placeholder="Dove vuoi andare?" />
                <!-- <input name="location" id="location" placeholder="Where are you going?" /> -->
              </label>
            </div>
          </li>
          <li>
            <div class="search-inputs">
              <label for="check-in">
                <div class="label">Check in</div>
                <input name="check-in" id="check-in" placeholder="Aggiungi date" />
                <!-- <input name="check-in" id="check-in" placeholder="Add dates" /> -->
              </label>
            </div>
          </li>
          <li>
            <div class="search-inputs">
              <label for="check-out">
                <div class="label">Check out</div>
                <input name="check-out" id="check-out" placeholder="Aggiungi date" />
                <!-- <input name="check-out" id="check-out" placeholder="Add dates" /> -->
              </label>
            </div>
          </li>
          <li>
            <div class="search-inputs">
              <label for="guests">
                <div class="label">Ospiti</div>
                <!-- <div class="label">Guests</div> -->
                <input name="guests" id="guests" placeholder="Aggiungi ospiti" />
                <!-- <input name="guests" id="guests" placeholder="Add guests" /> -->
              </label>
            </div>
            <button class="button-search">
              <i class="fas fa-search fa-xs"></i>
            </button>
          </li>
        </form>
      </ul>
    </div>
  </div> <!--   fine container -->
</header>
