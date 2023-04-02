<header id="header" class="header-one">
    <div class="bg-white">
        <div class="container">
            <div class="logo-area">
                <div class="row align-items-center">
                    <div class="logo col-lg-3 text-center text-lg-left mb-3 mb-md-5 mb-lg-0">
                        <a class="d-block" href="{{route('home')}}">
                            <img loading="lazy" src="{{asset('images/logo.png')}}" alt="Constra">de
                        </a>
                    </div><!-- logo end -->

                    <div class="col-lg-9 header-right">
                        <ul class="top-info-box">
                            <li>
                                <div class="info-box">
                                    <div class="info-box-content">
                                        <p class="info-box-title">@lang('call us')</p>
                                        <p class="info-box-subtitle">+237 698043044</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="info-box">
                                    <div class="info-box-content">
                                        <p class="info-box-title">Email Us</p>
                                        <p class="info-box-subtitle">lucchuala@gmail.com</p>
                                    </div>
                                </div>
                            </li>
                            <li class="last">
                                <div class="info-box last">
                                    <div class="info-box-content">
                                        <p class="info-box-title">Cetification globale</p>
                                        <p class="info-box-subtitle">ISO 9001:2017</p>
                                    </div>
                                </div>
                            </li>
                            <li class="header-get-a-quote">
                                <a class="btn btn-primary" href="{{route('contact')}}">Get A Quote</a>
                            </li>
                        </ul><!-- Ul end -->
                    </div><!-- header right end -->
                </div><!-- logo area end -->

            </div><!-- Row end -->
        </div><!-- Container end -->
    </div>

    <div class="site-navigation">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-dark p-0">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div id="navbar-collapse" class="collapse navbar-collapse">
                            <ul class="nav navbar-nav mr-auto">
                                <li @class(["nav-item dropdown","active"=>Route::is("home","home2")])>
                                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Home <i class="fa fa-angle-down"></i></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li @class(["active"=>Route::is("home")])><a href="{{route('home')}}">Home</a></li>
                                        <li @class(["active"=>Route::is("home2")])><a href="{{route('home2')}}">Notre Compagnie</a></li>
                                    </ul>
                                </li>

                                <li @class(["nav-item dropdown","active"=>Route::is("about","team","faq")])>
                                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Company <i class="fa fa-angle-down"></i></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li @class(["active"=>Route::is("about")])><a href="{{route("about")}}">About Us</a></li>
                                        <li @class(["active"=>Route::is("team")])><a href="{{route("team")}}">Our People</a></li>
                                        <li @class(["active"=>Route::is("testimonial")])><a href="{{route("testimonial")}}">Testimonials</a></li>
                                        <li @class(["active"=>Route::is("faq")])><a href="{{route("faq")}}">Faq</a></li>
                                        <li @class(["active"=>Route::is("pricing")])><a href="{{route("pricing")}}">Pricing</a></li>
                                    </ul>
                                </li>

                                <li class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Projects <i class="fa fa-angle-down"></i></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="{{route("project")}}">Projects All</a></li>
                                        <li><a href="{{route("project-single")}}">Projects Single</a></li>
                                    </ul>
                                </li>

                                <li class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Services <i class="fa fa-angle-down"></i></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="{{route("service")}}">Services All</a></li>
                                        <li><a href="{{route("service-single")}}">Services Single</a></li>
                                    </ul>
                                </li>

                                <li class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Features <i class="fa fa-angle-down"></i></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="{{route("typography")}}">Typography</a></li>
                                        <li><a href="404.html">404</a></li>
                                        <li class="dropdown-submenu">
                                            <a href="#!" class="dropdown-toggle" data-toggle="dropdown">Parent Menu</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="#!">Child Menu 1</a></li>
                                                <li><a href="#!">Child Menu 2</a></li>
                                                <li><a href="#!">Child Menu 3</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>

                                <li class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">News <i class="fa fa-angle-down"></i></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="news-left-sidebar.html">News Left Sidebar</a></li>
                                        <li><a href="news-right-sidebar.html">News Right Sidebar</a></li>
                                        <li><a href="news-single.html">News Single</a></li>
                                    </ul>
                                </li>

                                <li  @class(["nav-item","active"=>Route::is("contact")])><a class="nav-link" href="{{route("contact")}}">Contact</a></li>
                                <li  @class(["nav-item","active"=>Route::is("plan")])><a class="nav-link" href="{{route("plan")}}">Notre Plan</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <!--/ Col end -->
            </div>
            <!--/ Row end -->

            <div class="nav-search">
                <span id="search"><i class="fa fa-search"></i></span>
            </div><!-- Search end -->

            <div class="search-block" style="display: none;">
                <label for="search-field" class="w-100 mb-0">
                    <input type="text" class="form-control" id="search-field" placeholder="Type what you want and enter">
                </label>
                <span class="search-close">&times;</span>
            </div><!-- Site search end -->
        </div>
        <!--/ Container end -->

    </div>
    <!--/ Navigation end -->
</header>
