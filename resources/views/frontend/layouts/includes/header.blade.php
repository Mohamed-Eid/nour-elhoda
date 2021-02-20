<!DOCTYPE html>
<html lang="en" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'lrt' }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- START:: INCLUDING GOOGLE FONT -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;700;900&display=swap">
    <!-- END:: INCLUDING GOOGLE FONT -->

    <!-- START:: INCLUDING BOOTSTRAP STYLE FILE -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}">
    <!-- END:: INCLUDING BOOTSTRAP STYLE FILE -->

    <!-- START:: INCLUDING FONT AWESOME STYLE FILE -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/all.min.css') }}">
    <!-- END:: INCLUDING FONT AWESOME STYLE FILE -->

    <!-- START:: OWL CAROUSEL STYLE FILES -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/owl.theme.default.min.css') }}">
    <!-- END:: OWL CAROUSEL STYLE FILES -->

    <!-- START:: INCLUDING LIGHTBOX STYLE FILE  -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/lightbox.css') }}">
    <!-- END:: INCLUDING LIGHTBOX STYLE FILE  -->

    <!-- START:: INCLUDING MAIN STYLE FILE -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">
    <!-- END:: INCLUDING MAIN STYLE FILE -->

    <!-- START:: INCLUDING FAV ICON -->
    <link rel="icon" href="{{ asset('frontend/assets/pics/fav-icon.png') }}">
    <!-- END:: INCLUDING FAV ICON -->
    <title>Nour El Hooda</title>
</head>

<body>

    <!-- START:: NAVBAR -->
    <nav id="navBar" class="d-flex justify-content-between px-3">
        <div class="nav-icon">
            <a href="{{ route('frontend.home') }}">
                <img src="{{ asset('frontend/assets/pics/logo.png') }}">
            </a>
        </div>

        <div class="nav-links">
            <ul class="menu-container list-unstyled d-flex align-items-center ">
                <li class="menu-item mx-3">
                    <a href="{{ route('frontend.home') }}" class="{{ is_active('frontend.home') }}"> @lang('site.Home') </a>
                </li>
 
                <li class="menu-item mx-3">
                    <a href="{{ route('frontend.about_us') }}" class="{{ is_active( 'frontend.about_us') }}"> @lang('site.About Us') </a>
                </li>

                <li class="menu-item mx-3">
                    <a href="{{ route('frontend.projects.index') }}" class="{{ is_active('frontend.projects.index') }}"> @lang('site.Projects') </a>
                </li>

                <li class="menu-item mx-3">
                    <a href="{{ route('frontend.products.index') }}" class="{{ is_active('frontend.products.index') }}"> @lang('site.Products') </a>
                </li>

                <li class="menu-item mx-3">
                    <a href="{{ route('frontend.articles.index') }}" class="{{ is_active('frontend.articles.index') }}"> @lang('site.News') </a>
                </li>

                <li class="menu-item mx-3">
                    <a href="{{ route('frontend.videos.index') }}" class="{{ is_active('frontend.videos.index') }}"> @lang('site.Video Library') </a>
                </li>

                <li class="menu-item mx-3">
                    <a href="{{ route('frontend.gallaries.index') }}" class="{{ is_active('frontend.gallaries.index') }}"> @lang('site.Gallery') </a>
                </li>

                <li class="menu-item mx-3">
                    <a href="{{ route('frontend.contact.index') }}" class="{{ is_active('frontend.contact.index') }}"> @lang('site.Contact Us') </a>
                </li>
            </ul>
        </div>

        <div class="lang-btn d-flex align-items-center">
            @if(app()->getLocale() == 'en')
            <a href="{{ route('change_language','ar') }}" data-toggle="tooltip" data-placement="bottom" title="Change Language">
                <i class="fas fa-language"></i>
            </a>
            @elseif(app()->getLocale() == 'ar')
            <a href="{{ route('change_language','en') }}" data-toggle="tooltip" data-placement="bottom" title="Change Language">
                <i class="fas fa-language"></i>
            </a>
            @endif

        </div>
    </nav>
    <!-- END:: NAVBAR -->