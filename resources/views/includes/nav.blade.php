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
                            <a class="#" data-toggle="dropdown" href="#"><img src="img/flags/rs.png" alt="Srbija"> SRB</a>
                            <ul class="dropdown-menu" role="menu">
                                <li role="menuitem"><a href="#"><img src="img/flags/de.png" alt="Germany"> DE</a></li>
                                <li role="menuitem"><a href="#"><img src="img/flags/es.png" alt="Spain"> ES</a></li>
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
                <li class="logo-wrapper"><a href="{{ route('home') }}"><img src="img/mPurpose-logo.png" alt="Multipurpose Twitter Bootstrap Template"></a></li>
                <li class="active">
                    <a href="{{ route('home') }}">Home</a>
                </li>
                <li>
                    <a href="features.html">Features</a>
                </li>
                <li class="has-submenu">
                    <a href="#">Pages +</a>
                    <div class="mainmenu-submenu">
                        <div class="mainmenu-submenu-inner"> 
                            <div>
                                <h4>Homepage</h4>
                                <ul>
                                    <li><a href="index.html">Homepage (Sample 1)</a></li>
                                    <li><a href="page-homepage-sample.html">Homepage (Sample 2)</a></li>
                                </ul>
                                <h4>Services & Pricing</h4>
                                <ul>
                                    <li><a href="page-services-1-column.html">Services/Features (Rows)</a></li>
                                    <li><a href="page-services-3-columns.html">Services/Features (3 Columns)</a></li>
                                    <li><a href="page-services-4-columns.html">Services/Features (4 Columns)</a></li>
                                    <li><a href="page-pricing.html">Pricing Table</a></li>
                                </ul>
                                <h4>Team & Open Vacancies</h4>
                                <ul>
                                    <li><a href="page-team.html">Our Team</a></li>
                                    <li><a href="page-vacancies.html">Open Vacancies (List)</a></li>
                                    <li><a href="page-job-details.html">Open Vacancies (Job Details)</a></li>
                                </ul>
                            </div>
                            <div>
                                <h4>Our Work (Portfolio)</h4>
                                <ul>
                                    <li><a href="page-portfolio-2-columns-1.html">Portfolio (2 Columns, Option 1)</a></li>
                                    <li><a href="page-portfolio-2-columns-2.html">Portfolio (2 Columns, Option 2)</a></li>
                                    <li><a href="page-portfolio-3-columns-1.html">Portfolio (3 Columns, Option 1)</a></li>
                                    <li><a href="page-portfolio-3-columns-2.html">Portfolio (3 Columns, Option 2)</a></li>
                                    <li><a href="page-portfolio-item.html">Portfolio Item (Project) Description</a></li>
                                </ul>
                                <h4>General Pages</h4>
                                <ul>
                                    <li><a href="page-about-us.html">About Us</a></li>
                                    <li><a href="page-contact-us.html">Contact Us</a></li>
                                    <li><a href="page-faq.html">Frequently Asked Questions</a></li>
                                    <li><a href="page-testimonials-clients.html">Testimonials & Clients</a></li>
                                    <li><a href="page-events.html">Events</a></li>
                                    <li><a href="page-404.html">404 Page</a></li>
                                    <li><a href="page-sitemap.html">Sitemap</a></li>
                                    <li><a href="page-login.html">Login</a></li>
                                    <li><a href="page-register.html">Register</a></li>
                                    <li><a href="page-password-reset.html">Password Reset</a></li>
                                    <li><a href="page-terms-privacy.html">Terms & Privacy</a></li>
                                    <li><a href="page-coming-soon.html">Coming Soon</a></li>
                                </ul>
                            </div>
                            <div>
                                <h4>eShop</h4>
                                <ul>
                                    <li><a href="page-products-3-columns.html">Products listing (3 Columns)</a></li>
                                    <li><a href="page-products-4-columns.html">Products listing (4 Columns)</a></li>
                                    <li><a href="page-products-slider.html">Products Slider</a></li>
                                    <li><a href="page-product-details.html">Product Details</a></li>
                                    <li><a href="page-shopping-cart.html">Shopping Cart</a></li>
                                </ul>
                                <h4>Blog</h4>
                                <ul>
                                    <li><a href="page-blog-posts.html">Blog Posts (List)</a></li>
                                    <li><a href="page-blog-post-right-sidebar.html">Blog Single Post (Right Sidebar)</a></li>
                                    <li><a href="page-blog-post-left-sidebar.html">Blog Single Post (Left Sidebar)</a></li>
                                    <li><a href="page-news.html">Latest & Featured News</a></li>
                                </ul>
                            </div>
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