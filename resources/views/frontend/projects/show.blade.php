@extends('frontend.layouts.app')

@section('content')

<!-- START:: PAGE CONTENT -->

@include('frontend.layouts.includes._pages_header',['image'=>get_setting_by_key('about_header_image')->image_path])

<!-- START:: PAGE CONTENT -->



<!-- START:: DETAILS SECTION -->
<div class="project-details">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6">
                <div class="project-details-img">
                    <img src="assets/pics/pic5.jpg" alt="Project Details Img" class="img-fluid">
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid mt-4">
        <div class="row">
            <div class="col-12">
                <div class="project-details-text">
                    <h2 class="sec-heading mb-4"> Spirulina Project </h2>
                    <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta neque, facere quae cum quis
                        explicabo delectus velit ut? Reiciendis facilis adipisci dolorum aspernatur modi corporis quod
                        fugit ullam asperiores quisquam.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta neque, facere quae cum quis
                        explicabo delectus velit ut? Reiciendis facilis adipisci dolorum aspernatur modi corporis quod
                        fugit ullam asperiores quisquam.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta neque, facere quae cum quis
                        explicabo delectus velit ut? Reiciendis facilis adipisci dolorum aspernatur modi corporis quod
                        fugit ullam asperiores quisquam.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- START:: DETAILS SECTION -->

<!-- START:: WHY SECTION -->
<div class="why-sec">
    <div class="container">
        <h2 class="sec-heading text-center mb-5"> Why Invest In Spirulina </h2>
        <div class="row">
            <div class="col-6 col-md-3 my-3 text-center">
                <img src="assets/pics/icons/financ.png">
                <h4> Title </h4>
            </div>

            <div class="col-6 col-md-3 my-3 text-center">
                <img src="assets/pics/icons/team.png">
                <h4> Title </h4>
            </div>

            <div class="col-6 col-md-3 my-3 text-center">
                <img src="assets/pics/icons/chart.png">
                <h4> Title </h4>
            </div>

            <div class="col-6 col-md-3 my-3 text-center">
                <img src="assets/pics/icons/contract.png">
                <h4> Title </h4>
            </div>
        </div>
    </div>
</div>
<!-- END:: WHY SECTION -->

<!-- START:: VIDEOS SECTION -->
<div class="videos">
    <div class="container">

        <h2 class="sec-heading mb-5"> Videos </h2>

        <div id="videos-slider" class="owl-carousel owl-theme">
            <div class="videos-slider-item">
                <iframe src="https://www.youtube.com/embed/-jwSrDCd-vM" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
                <h4 class="text-center"> Video Title </h4>
            </div>

            <div class="videos-slider-item">
                <iframe src="https://www.youtube.com/embed/-jwSrDCd-vM" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
                <h4 class="text-center"> Video Title </h4>
            </div>

            <div class="videos-slider-item">
                <iframe src="https://www.youtube.com/embed/-jwSrDCd-vM" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
                <h4 class="text-center"> Video Title </h4>
            </div>

            <div class="videos-slider-item">
                <iframe src="https://www.youtube.com/embed/-jwSrDCd-vM" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
                <h4 class="text-center"> Video Title </h4>
            </div>

            <div class="videos-slider-item">
                <iframe src="https://www.youtube.com/embed/-jwSrDCd-vM" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
                <h4 class="text-center"> Video Title </h4>
            </div>

            <div class="videos-slider-item">
                <iframe src="https://www.youtube.com/embed/-jwSrDCd-vM" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
                <h4 class="text-center"> Video Title </h4>
            </div>

            <div class="videos-slider-item">
                <iframe src="https://www.youtube.com/embed/-jwSrDCd-vM" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
                <h4 class="text-center"> Video Title </h4>
            </div>
        </div>

        <div class="col-12 text-center mt-5">
            <?php $link = 'VideosLiberary.php'; $title = 'View More' ?>
            <?php include(INC.'/ui/MainBtn.php')?>
        </div>
    </div>
</div>
<!-- START:: VIDEOS SECTION -->

<!-- START:: WHY TO INVEST SECTION -->
<div class="why-to-invest">
    <div class="container-fluid">
        <div class="row d-flex justify-content-between align-items-center">
            <h3 class="mb-0 col-12 col-md-8"> To Invest With Nour El Hooda? Please Contact Us </h3>

            <div class="col-12 col-md-4 text-center mt-4 mt-md-0">
                <?php $link = 'ContactUs.php'; $title = 'Contact Us' ?>
                <?php include(INC.'/ui/MainBtn.php')?>
            </div>
        </div>
    </div>
</div>
<!-- END:: WHY TO INVEST SECTION -->

<!-- START:: PAGE CONTENT -->

@endsection
