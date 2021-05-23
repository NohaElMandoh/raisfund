<nav class="navbar mainmenu-area menu2" data-spy="affix" data-offset-top="200">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mainmenu">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html"><img src="{{ Voyager::image(setting('site.logo')) }}" alt=""></a>
        </div>
        <div class="collapse navbar-collapse" id="mainmenu">
            <div class="navbar-header navbar-right hidden visible-lg padding-left-50">

                {{-- @if (Route::has('login'))
                    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                        @auth
                            <a href="{{ url('/home') }}" class="bttn-1">Home</a>
                        @else
                            <a href="{{ route('login') }}" class="bttn-1">Log in</a>


                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="bttn-1">{{ __('home.Join Us') }}</a>

                            @endif
                        @endauth
                    </div>
                @endif --}}

                @if (Route::has('login'))
            
                @auth
                    <form method="POST" action="{{ route('logout') }}">
                        {{ csrf_field() }}

                        <button type="submit" class=bttn-1>
                            Logout</button>
                    </form>
                @else
                <a href="{{ route('register') }}" class="bttn-1">{{ __('home.Join Us') }}</a>
                
                @endauth
           
        @endif


            </div>
            <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="{{route('home')}}">{{ __('home.Home') }}</a></li>
                <li><a href="#service-page">{{ __('home.Services') }}</a></li>
                <li><a href="#feature-page">{{ __('home.Features') }}</a></li>
                <li><a href="#price-page">{{ __('home.Pricing') }}</a></li>
                <li><a href="#team-page">{{ __('home.Team') }}</a></li>
                <li><a href="#contact-page">{{ __('home.Contact') }}</a></li>
            </ul>
        </div>
    </div>
</nav>
