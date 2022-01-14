<header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-between">
        <h1 class="logo">
            <img src= {{ asset("/images/icons/LaraBlug.png") }} alt="">
            {{-- <a href={{ route('/home') }}>LaraBlug</a> --}}
            <a href="{{ route('home') }}">LaraBlug</a>
        </h1>

        <nav id="navbar" class="navbar">
            @if (Route::has('login'))
            <div class="top-right links">
                @auth
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
                                {{ __('messages.welcome', ['name' => Auth::user()->name])}}<span class="caret"></span>
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
                @else
                    <a href="{{ route('login') }}" class="btn-learn-more scrollto">Login</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="btn-sign-up scrollto">Sign up</a>
                    @endif
                @endauth
            </div>
            @endif
            <li class="dropdown">    
                <a href="#">
                        {{ __('messages.Language') }}
                    {{Config::get('languages')[App::getLocale()]['display'] }}
                </a>
                <ul>
                    @foreach (Config::get('languages') as $lang => $language)
                        @if ($lang != App::getLocale())
                                <a class="dropdown-item" href="{{ route('lang.switch', $lang) }}">
                                    {{$language['display']}}
                                </a>
                        @endif
                    @endforeach
                </ul>
            </li>
        </nav>
    </div>
</header>
