<!-- Navigation & Logo-->
<div class="mainmenu-wrapper">
    <div class="container">
        <div class="menuextras">
            <div class="extras">
                <ul>
                    @auth
                        <li class="shopping-cart-items"><i class="glyphicon glyphicon-shopping-cart icon-white"></i> <a href="page-shopping-cart.html"><b>3 items</b></a>
                        </li>
                    @endauth
                    <li>
                        <div class="dropdown choose-country">
                            <a class="#" data-toggle="dropdown" href="#"><img src="{{ asset('img/flags/rs.png') }}" alt="Srbija"> SRB</a>
                            <ul class="dropdown-menu" role="menu">
                                <li role="menuitem"><a href="#"><img src="{{ asset('img/flags/de.png') }}" alt="Germany"> DE</a></li>
                                <li role="menuitem"><a href="#"><img src="{{ asset('img/flags/es.png') }}" alt="Spain"> ES</a></li>
                            </ul>
                        </div>
                    </li>
                    @guest
                        <li><a href="{{ route('login') }}">Login</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->first_name}} {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="{{ url('/cart/history') .'/'.Auth::user()->id }}">
                                        Prethodne kupovine
                                    </a>                                                                
                                </li>
                                <li>
                                    <a href="{{ url('/logout') }}"
                                        onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>

                            </ul>
                        </li>
                    @endauth
                </ul>
            </div>
        </div>
        <nav id="mainmenu" class="mainmenu">
            <ul>
                <li class="logo-wrapper"><a href="{{ route('home') }}"><img src="{{ asset('img/logo.png') }}" alt="WebShop"></a></li>
                <li class="active">
                    <a href="{{ route('home') }}">Home</a>
                </li>
                <li>
                    <a href="#">Features</a>
                </li>
                <li class="has-submenu">
                    <a href="#">Proizvodi +</a>
                    <div class="mainmenu-submenu">
                        <div class="mainmenu-submenu-inner"> 
                            @foreach ($categories as $category)
                                @if ($loop->first || (fmod($loop->iteration, 5) == 1))
                                <row>
                                <div class="col-xs-4 col-md-3 col-lg-3">
                                @endif
                                <h4>{{ $category->title }}</h4>
                                <ul>
                                    <li><a href="index.html">Homepage (Sample 1)</a></li>
                                    <li><a href="page-homepage-sample.html">Homepage (Sample 2)</a></li>
                                </ul>
                                @if ($loop->last || (fmod($loop->iteration, 5) == 0))
                                </div>
                                </row>
                                @endif
                            @endforeach
                        </div><!-- /mainmenu-submenu-inner -->
                    </div><!-- /mainmenu-submenu -->
                </li>
                <li>
                    <a href="credits.html">Credits</a>
                </li>
            </ul>
        </nav>
    </div>
</div>