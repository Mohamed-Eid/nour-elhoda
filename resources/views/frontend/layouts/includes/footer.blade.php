<!-- START:: FOOTER -->
<footer>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="footer-logo col-6 col-md-2">
                <img src="{{ get_setting_by_key('footer_logo')->image_path ?? asset('frontend/assets/pics/logo.png') }}">
            </div>

            <div class="short-cuts col-6 col-md-3">
                <div>
                    <a href="{{ route('frontend.home') }}">@lang('site.Home')  </a>
                    <a href="{{ route('frontend.about_us') }}"> @lang('site.About Us') </a>
                    <a href="{{ route('frontend.projects.index') }}"> @lang('site.Projects') </a>
                    <a href="{{ route('frontend.gallaries.index') }}"> @lang('site.Gallery') </a>
                </div>

                <div>
                    <a href="{{ route('frontend.products.index') }}"> @lang('site.Products') </a>
                    <a href="{{ route('frontend.articles.index') }}"> @lang('site.News') </a>
                    <a href="{{ route('frontend.videos.index') }}">   @lang('site.Video Liberary') </a>
                    <a href="{{ route('frontend.contact.index') }}">  @lang('site.Contact Us') </a>
                </div>
            </div>

            <div class="follow-us col-12 col-md-4">
                <h5 class="text-center my-3"> @lang('site.Follow Us') </h5>
                <ul class="list-unstyled">
                    <li>
                        <a href="{{ get_setting_by_key('facebook')->one_value}}" class="facebook">
                            <i class="fab fa-facebook-square"></i>
                        </a>
                    </li>

                    <li>
                        <a href="{{ get_setting_by_key('instagram')->one_value}}" class="instagram">
                            <i class="fab fa-instagram-square"></i>
                        </a>
                    </li>

                    <li>
                        <a href="{{ get_setting_by_key('youtube')->one_value}}" class="youtube">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </li>

                    <li>
                        <a href="{{ get_setting_by_key('twitter')->one_value}}" class="twitter">
                            <i class="fab fa-twitter-square"></i>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="get-in-touch col-6 col-md-3 p-0 px-md-2">
                <h5 class="my-3 text-center text-md-left"> @lang('site.Get In Touch With Us') </h5>

                <ul class="list-unstyled">
                    <li>
                        <i class="fas fa-map-marker-alt"></i>
                        <span> {{ get_setting_by_key('footer_location')->value }} </span>
                    </li>

                    <li>
                        <i class="fas fa-mobile-alt"></i>
                        <span>  {{ get_setting_by_key('footer_mobile')->one_value }} </span>
                    </li>

                    <li>
                        <i class="fas fa-envelope"></i>
                        <span>  {{ get_setting_by_key('footer_email')->one_value }} </span>
                    </li>
                </ul>
            </div>

            <div class="copy-rights col-12 d-flex justify-content-between">
                <span> @lang('site.Powered By') <a href="#"> MediaServe </a> </span>
                <span> &copy; 2021 Nourelhooda </span>
            </div>
        </div>
    </div>
</footer>
<!-- END:: FOOTER -->

<!-- START:: INCLUDING JQUERY -->
<script src="{{ asset('frontend/assets/js/jquery.min.js') }}"></script>
<!-- END:: INCLUDING JQUERY -->

<!-- START:: INCLUDING BOOTSTRAP ASSETS FILES -->
<script src="{{ asset('frontend/assets/js/pooper.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/bootstrap.min.js') }}"></script>
<!-- START:: INCLUDING BOOTSTRAP ASSETS FILES -->

<!-- START:: INCLUDING FONTAWESOME SCRIPT FILES -->
<script src="{{ asset('frontend/assets/js/all.min.js') }}"></script>
<!-- END:: INCLUDING FONTAWESOME SCRIPT FILES -->

<!-- START:: INCLUDING OWL CAROUSEL SCRIPT FILES -->
<script src="{{ asset('frontend/assets/js/owl.carousel.min.js') }}"></script>
<!-- END:: INCLUDING OWL CAROUSEL SCRIPT FILES -->

<!-- START:: INLUDING LIGHTBOX SCRIPT FILE -->
<script src="{{ asset('frontend/assets/js/lightbox.js') }}"></script>
<!-- END:: INLUDING LIGHTBOX SCRIPT FILE -->

<!-- START:: INCLUDING MAIN JS FILE -->
<script src="{{ asset('frontend/assets/js/main.js') }}"></script>
<!-- END:: INCLUDING MAIN JS FILE -->

<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

@include('dashboard.layouts.includes.partials._session')

@stack('scripts')
</body>

</html>
