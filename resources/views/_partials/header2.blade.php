<header id="header" class="header-two">
    <div class="site-navigation">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light p-0">

                        <div class="logo">
                            <a class="d-block" href="{{route("home2")}}">
                                <img loading="lazy" src="{{asset('images/logo.png')}}" alt="Constra">
                            </a>
                        </div><!-- logo end -->

                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target=".navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false"
                                aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div id="navbar-collapse" class="collapse navbar-collapse">
                            <ul class="nav navbar-nav ml-auto align-items-center">
                                <li class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Home <i
                                                class="fa fa-angle-down"></i></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="{{route("home")}}">Home One</a></li>
                                        <li class=""><a href="{{route('home2')}}">Home Two</a></li>
                                    </ul>
                                </li>

                                <li @class(["nav-item dropdown","active"=>Route::is("about","team","testimonial",'faq','pricing')])>
                                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Company <i
                                                class="fa fa-angle-down"></i></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li @class(["active"=>Route::is("about")]) ><a href="{{route('about')}}">About Us</a></li>
                                        <li><a href="{{route('team')}}">Our People</a></li>
                                        <li><a href="{{route('testimonial')}}">Testimonials</a></li>
                                        <li><a href="{{route('faq')}}">Faq</a></li>
                                        <li><a href="{{route('pricing')}}">Pricing</a></li>
                                    </ul>
                                </li>

                                <li class="nav-item dropdown ">
                                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Projects <i
                                                class="fa fa-angle-down"></i></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="{{route('project')}}">Projects All</a></li>
                                        <li><a href="{{route('project-single')}}">Projects Single</a></li>
                                    </ul>
                                </li>

                                <li class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Services <i
                                                class="fa fa-angle-down"></i></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="{{route('service')}}">Services All</a></li>
                                        <li><a href="{{route('service-single')}}">Services Single</a></li>
                                    </ul>
                                </li>

                                <li class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Features <i
                                                class="fa fa-angle-down"></i></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="{{route('typography')}}">Typography</a></li>
                                        <li><a href="404.html">404</a></li>
                                        <li class="dropdown-submenu">
                                            <a href="#!" class="dropdown-toggle" data-toggle="dropdown">Parent
                                                Menu</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="#!">Child Menu 1</a></li>
                                                <li><a href="#!">Child Menu 2</a></li>
                                                <li><a href="#!">Child Menu 3</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>

                                <li class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">News <i
                                                class="fa fa-angle-down"></i></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="news-left-sidebar.html">News Left Sidebar</a></li>
                                        <li><a href="news-right-sidebar.html">News Right Sidebar</a></li>
                                        <li><a href="news-single.html">News Single</a></li>
                                    </ul>
                                </li>

                                <li class="nav-item"><a class="nav-link" href="{{route('contact')}}">Contact</a></li>

                                <li class="header-get-a-quote">
                                    <a class="btn btn-primary" href="{{route('contact')}}">Get Free Quote</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <!--/ Col end -->
            </div>
            <!--/ Row end -->
        </div>
        <!--/ Container end -->

    </div>
    <!--/ Navigation end -->
</header>
