<!DOCTYPE html>
<html lang="en">

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
                    <a href="{{ route('frontend.home') }}" class="active"> Home </a>
                </li>

                <li class="menu-item mx-3">
                    <a href="{{ route('frontend.about_us') }}"> About Us </a>
                </li>

                <li class="menu-item mx-3">
                    <a href="Projects.php"> Projects </a>
                </li>

                <li class="menu-item mx-3">
                    <a href="Products.php"> Products </a>
                </li>

                <li class="menu-item mx-3">
                    <a href="AllNews.php"> News </a>
                </li>

                <li class="menu-item mx-3">
                    <a href="VideosLiberary.php"> Video Liberary </a>
                </li>

                <li class="menu-item mx-3">
                    <a href="Gallery.php"> Gallery </a>
                </li>

                <li class="menu-item mx-3">
                    <a href="ContactUs.php"> Contact Us </a>
                </li>
            </ul>
        </div>

        <div class="lang-btn d-flex align-items-center">
            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Change Language">
                <i class="fas fa-language"></i>
            </a>
        </div>
    </nav>
    <!-- END:: NAVBAR -->
