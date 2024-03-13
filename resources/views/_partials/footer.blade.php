<footer>
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Company</h4>
                    <a class="btn btn-link" href="{{route('about')}}">About Us</a>
                    <a class="btn btn-link" href="{{route('contact')}}">Contact Us</a>
                    <a class="btn btn-link" href="{{route('booking')}}">Reservation</a>
                    <a class="btn btn-link" href="{{route('privacy')}}">Privacy Policy</a>
                    <a class="btn btn-link" href="{{route('terms')}}">Terms & Condition</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Contact</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>123 Gousso , Yaounde,Cameroun </p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+237 698 04 30 44</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>lucchuala@gmail.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i
                                class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Opening</h4>
                    <h5 class="text-light fw-normal">Monday - Saturday</h5>
                    <p>09AM - 09PM</p>
                    <h5 class="text-light fw-normal">Sunday</h5>
                    <p>10AM - 08PM</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Newsletter</h4>
                    <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <input class="form-control border-primary w-100 py-3 ps-4 pe-5" type="text"
                            placeholder="Your email">
                        <button type="button"
                            class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">Restaurant </a>, All Right Reserved.

                        Designed By <a class="border-bottom" href="#!">Nguemoue Luc</a><br><br>
                        Distributed By <a class="border-bottom" href="#!"
                            target="_blank">SIMAGRO Sarl</a>
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <div class="footer-menu">
                            <a data-toggle="tooltip" title="Acceuil" href="">Home</a>
                            <a href="">Cookies</a>
                            <a href="">Help</a>
                            <a href="">FAQS</a>
									@guest("web")
										<a class="btn btn-success btn-sm rounded px-2" href="{{route('login')}}"><i class="fa fa-user-alt"></i> Se Connecter</a>
									@endguest
									@auth("web")
										<a class="btn btn-success btn-sm rounded-3 px-2" href="{{route('dashboard')}}"><i class="fa fa-user-alt mx-1"></i>Mon Compte</a>
									@endauth
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</footer>
