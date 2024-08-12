    <style>
        .user-section {
  position: relative;
  height: 100%;
  display: flex;
  align-items: center;
  justify-content: flex-end;
  padding: 0 76%;
  text-align: right;
  margin: auto; 
  font-family: "Audrey";
  font-weight: 200;
  font-size: 15px;
  letter-spacing: 2.9px;
  color: #fff;
  text-transform: uppercase;
}

    </style>
    <!-- Header -->
    <header id="header_main" class="header style-3 style-absolute">
        <div class="container">
            <div id="site-header-inner">
                <div class="header__logo">
                    <a href="/"><img src="{{url('assets/images/logo/logo-03.png')}}" alt=""></a>
                </div>
                <nav id="main-nav" class="main-nav">
                    <ul id="menu-primary-menu" class="menu">
                        <li class="menu-item menu-item-has-children  current-menu-item">
                            <a href="/">Home</a>
                        </li>
                        <li class="menu-item menu-item-has-children">
                            <a href="{{url('blog')}}">Blog</a>
                        </li>
                        <li class="menu-item menu-item-has-children">
                            <a href="{{url('contact')}}">Contact</a>
                        </li>
                        @auth
                        <li class="menu-item menu-item-has-children">
                            <a href="{{ url('/') }}">Post</a>
                        </li>
                        <li class="menu-item menu-item-has-children">
                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Logout
                        </a>
                        </li>
                        <p class="user-section">{{ getAuthUserName() }}</p>
                    @endauth
                    </ul>
                </nav><!-- /#main-nav -->
                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
                @guest
                <a href="{{url('register')}}" class="tf-button style1 register">REGISTER</a>
                <a href="{{ route('login') }}" class="tf-button style1">LOGIN</a>
                @endguest
            </div>
        </div>
    </header>
    <!-- end Header -->