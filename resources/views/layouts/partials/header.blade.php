<header id="header">
  <div class="wrap">
    <div id="hamburger" v-on:click="display_menu()">
      <span></span>
      <span></span>
      <span></span>
    </div>
    <img src="https://assets.jobs.bg/assets/logo/2014-04-29/b_04743888ac08f85b45b4c476c7941c6f.jpg" style="width:200px;" alt="Logo Airbnb">
    <nav id="menu">
      @guest
          <li class="nav-item"><a class="nav-link" href="{{ route('search-apartment') }}" >Alloggi</a></li>
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
            <a style="background:none" id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }}
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a style="background:none" class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
              </a>
              <a style="background:none" class="dropdown-item" href="{{  route('property.index') }}">Area amministrativa</a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
              </form>
            </div>
          </li>
        @endguest
    </nav>
  </div>
      <form class="bottone-speciale" action="#">
        <label :data-state="state" for="search">
          <input type="text" placeholder="Ricerca.." @click="state = 'opan'" @blur="state='close'"/>
          <i class="fa fa-search" @click="" aria-hidden="true"></i>
        </label>
      </form>
</header>
	