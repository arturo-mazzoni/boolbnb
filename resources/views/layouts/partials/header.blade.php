<header id="app">
  <div class="wrap">
    <div id="hamburger" v-on:click="display_menu()">
      <span></span>
      <span></span>
      <span></span>
    </div>
    <img src="https://assets.jobs.bg/assets/logo/2014-04-29/b_04743888ac08f85b45b4c476c7941c6f.jpg" style="width:200px;" alt="Logo Airbnb">
    <nav id="menu">
      @guest
          <li class="nav-item"><a class="nav-link" href="#" >Alloggi</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ route('become-host') }}">Diventa un host</a></li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
          </li>
          @if (Route::has('register'))
          <li class="nav-item">
            <a class="nav-link" href="{{ route('register') }}">{{ __('Registrati') }}</a>
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
    </nav>
  </div>
  <div class="header-form">
      <form class="search">
        <ul>
          <li>
            <div class="search-inputs">
              <label for="location">
                <div class="label">Scegli l'alloggio</div>
                <input name="search" id="search" placeholder="Scrivi..." />
              </label>
            </div>
            <button class="button-search">
              <i class="fas fa-search fa-xs"></i>
            </button>
          </li>
        </form>
      </ul>
    </div>
      
</header>
	