<header class="header">
  <div class="temp">
  <div class="header__wrapper">
  <nav class="navbar-expand-md">
      <a class="header__logo" href="{{ url('/') }}">
        <img alt="logo" src={{asset('images/header/logo.png')}} >
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Left Side Of Navbar -->
        <ul class="header__navigation">
          <li class="header__navigation__item"><a href="#" class="header__link">About</a></li>
          <li class="header__navigation__item"><a href="#" class="header__link">Portfolio</a></li>
          <li class="header__navigation__item"><a href="#" class="header__link">Profit calculator</a></li>
          <li class="header__navigation__item"><a href="#" class="header__link">Team</a></li>
          <li class="header__navigation__item"><a href="#" class="header__link">FAQ</a></li>
        </ul>

        <!-- Right Side Of Navbar -->
            <img  class="enter_symbol" src="{{asset('images/header/enter-marker.png')}}">
        <ul class="reg-list">
          <!-- Authentication Links -->
          @guest
            <li class="reg-list__item">
              <a href="{{ route('login') }}" class="header__link reg-list__item__link"><img src={{asset('images/header/active-button.png')}}></a>
            </li>
            <li class="reg-list__item">
              <a href="{{ route('register') }}" class="header__link
                                                       reg-list__item__link
                                                       reg-list__item__link_signup">{{ __('Sign up') }}</a>
            </li>
          @else
            <li class="nav-item dropdown">
              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                 aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }} <span class="caret"></span>
              </a>

              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
                </form>
              </div>
            </li>
          @endguest
        </ul>
        </div>
  </nav>


  <main class="py-4">
    @yield('content')
  </main>
    </div>
  <div class="header__main-text-block">
    <div class="main-text-block__content">
      <nav class="content__title content__title_main">INVEST IN THE FUTURE</nav>
      <nav class="content__title submain-title_submain">Digital assets management by team of professionals</nav>
      <a href="#" class="main-text-block__content_button"><img alt='more' src="{{asset('images/header/button-more.png')}}"> </a>
    </div>
  </div>
  <div class="header__sochial-block">
    <div class="flex-box">
      <a href="#" class="header__link flex-box-rules" >
        <img class="flex-box-rules__risks" alt="risks" src="{{asset('images/header/risks.png')}}">
      <div>Declaration of risks</div>
      </a>
    </div>
    <div class="flex-box flex-box-sochial">
      <a href="#"><img src="{{asset('images/header/twitter.png')}}"></a>
      <a href="#"><img src="{{asset('images/header/facebook.png')}}"></a>
      <a href="#"><img src="{{asset('images/header/insta.png')}}"></a>
    </div>
  </div>
  </div>
</header>