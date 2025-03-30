<footer>
    <div class="border-top space-top-3">
        <div class="border-bottom pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 mb-4">
                        <div class="text-center text-md-left">
                            <a href="{{ url('/') }}" class="d-inline-block mb-4">
                                <img src="{{ $website->getMedia('settings')[0]->getUrl('header') }}" class="img-fluid"
                                    alt="bettani-series-logo">
                            </a>
                            <address class="font-size-2 mb-3">
                                <span class="font-weight-normal text-dark">{!! $website->address !!}</span>
                            </address>
                            <div class="mb-3">
                                <a href="mailto:{{ $website->email }}"
                                    class="d-block text-dark">{{ $website->email }}</a>
                                <a href="tel:{{ $website->phone }}" class="d-block text-dark">{{ $website->phone }}</a>
                            </div>
                            <ul class="list-unstyled d-flex justify-content-center justify-content-md-start">
                                <li class="mr-2"><a href="{{ $website->instagram }}" class="text-dark"><i
                                            class="fab fa-instagram"></i></a></li>
                                <li class="mr-2"><a href="{{ $website->facebook }}" class="text-dark"><i
                                            class="fab fa-facebook-f"></i></a></li>
                                <li class="mr-2"><a href="{{ $website->youtube }}" class="text-dark"><i
                                            class="fab fa-youtube"></i></a></li>
                                <li class="mr-2"><a href="{{ $website->twitter }}" class="text-dark"><i
                                            class="fab fa-twitter"></i></a></li>
                                <li><a href="{{ $website->pinterest }}" class="text-dark"><i
                                            class="fab fa-pinterest"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 mb-4  text-md-left">
                        <h4 class="font-size-3 font-weight-medium mb-3">Explore</h4>
                        <ul class="list-unstyled">
                            <li class="d-flex align-items-center mb-2"><i
                                    class="fas fa-angle-right text-danger mr-2"></i><a href="{{ url('about-us') }}"
                                    class="text-dark">About Us</a></li>
                            <li class="d-flex align-items-center mb-2"><i
                                    class="fas fa-angle-right text-danger mr-2"></i><a href="{{ url('contact-us') }}"
                                    class="text-dark">Contact Us</a></li>
                            <li class="d-flex align-items-center mb-2"><i
                                    class="fas fa-angle-right text-danger mr-2"></i><a href="{{ url('login') }}"
                                    class="text-dark">Sign In / Join</a></li>
                            <li class="d-flex align-items-center mb-2"><i
                                    class="fas fa-angle-right text-danger mr-2"></i><a
                                    href="{{ url('privacy-policy') }}" class="text-dark">Privacy Policy</a></li>
                            <li class="d-flex align-items-center mb-2"><i
                                    class="fas fa-angle-right text-danger mr-2"></i><a
                                    href="{{ url('terms-and-conditions') }}" class="text-dark">Terms & Conditions</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6 mb-4 text-center text-md-left">
                        <h5 class="font-size-7 font-weight-medium">Join Our Newsletter</h5>
                        <p class="text-gray-700">Signup to be the first to hear about exclusive deals, special offers,
                            and upcoming collections.</p>
                        <form class="form-inline d-flex justify-content-center justify-content-md-start">
                            <input type="email" class="form-control px-4 border-dark flex-grow-1 "
                                placeholder="Enter email for weekly newsletter" required>
                            <button type="submit" class="btn btn-dark ml-2 my-3">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>



        <div class="space-1 py-3">
            <div class="container">
                <div
                    class="row align-items-center d-flex flex-column flex-lg-row justify-content-between text-center text-lg-left">
                    <div class="col-lg-6 mb-3 mb-lg-0 text-left">
                        <p class="mb-0 font-size-2">{!! $website->copyright !!}</p>
                    </div>
                    <div class="col-lg-6 text-left text-lg-right">
                        <img class="img-fluid" src="{{ asset('UI/assets/img/324x38/img1.png') }}"
                            alt="Image Description">
                    </div>
                </div>
            </div>
        </div>




    </div>
</footer>


<style>
    .MsoNormal strong {
        font-family: "Inter", "Cerebri Sans", Helvetica, Arial, sans-serif;
        font-weight: 500;
        /* Medium weight */
        font-size: 1.75rem !important;
        /* Bootstrap's font-size-7 (approx. 28px) */
    }


    .MsoNormal strong span {
        font-family: inter, cerebri sans, Helvetica, Arial, sans-serif !important;
        font-weight: 400;
        font-size: .875rem !important;
    }
</style>
