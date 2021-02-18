@extends('frontend.layouts.app')

@section('content')
<!-- START:: PAGE CONTENT -->

<!-- START:: SLIDER SECTION -->
<div id="header-slider" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        @foreach (\App\Slider::all() as $index => $slide_img)
        <li data-target="#header-slider" data-slide-to="{{ $index }}" class="{{ $index == 0 ? 'active' : '' }}"></li>
        @endforeach
    </ol>
    <div class="carousel-inner">
        @foreach (\App\Slider::all() as $index => $slide_img)
        <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
            <img src="{{ $slide_img->image_path }}" class="d-block w-100" alt="First Slide Img">
        </div>
        @endforeach

    </div>
    <a class="carousel-control-prev" href="#header-slider" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#header-slider" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<!-- END:: SLIDER SECTION -->

<!-- START:: WELCOME SECTION -->
<div class="welcome-sec">
    <div class="container">
        <div class="row">

            <div class="welcome-img col-12 col-md-6">
                <img class="img-fluid" src="{{ get_setting_by_key('brief')->image_path ?? '' }}" alt="Welcome Section Img">
            </div>

            <div class="welcome-text col-12 col-md-6 d-flex flex-column justify-content-center align-items-center">
                <h2 class="text-center mt-3"> Welcome To Nour El Hooda </h2>
                <p class="my-4"> 
                    {!! get_setting_by_key('brief')->translate('ar')->value ?? '' !!}
                </p>

                <!-- BTN NAME: LEARN MORE -->
                @include('frontend.layouts.includes._main_btn',['link'=>route('frontend.about_us'),'title'=>'Learn More'])
            </div>

        </div>
    </div>
</div>
<!-- END:: WELCOME SECTION -->

<!-- START:: INVESTOR HIGHLIGHT SECTION -->
<div class="investor">
    <div class="container">
        <div class="row">

            <div class="investor-info d-flex align-items-center col-12 col-md-7 mb-5">
                <div class="row align-items-center">

                    <h2 class="small-sec-heading text-center mb-5 col-12"> Our Investor Heighlights </h2>
                    @foreach (\App\CompanyHeighlight::where('type','home')->get() as $company_heighlight)
                    <div class="info-icon col-4 text-center">
                        <img src="{{ $company_heighlight->image_path }}" alt="">
                        <h4 class="my-2"> {{ $company_heighlight->name }} </h4>
                    </div>
                    @endforeach

                </div>
            </div>

            <div class="investor-video col-12 col-md-5 text-center">

                <iframe src="https://www.youtube.com/embed/{{ get_video_id(get_setting_by_key('home_video')->one_value ) }}" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>

                <div class="text-center">
                    <h4 class="text-center my-4"> {{ get_setting_by_key('home_video')->value }}</h4>

                    <!-- BTN NAME: VIEW MORE VIDEOS -->
                    @include('frontend.layouts.includes._main_btn',['link'=>route('frontend.videos.index'),'title'=>'View More Videos'])

                </div>
            </div>

        </div>
    </div>
</div>
<!-- END:: INVESTOR HIGHLIGHT SECTION -->

<!-- START:: OUR PROJECTS SECTION -->
<div class="projects">
    <div class="container">
        <h2 class="sec-heading mt-5"> Our Projects </h2>
        <div class="row justify-content-center">
            @foreach (\App\Project::take(3)->get() as $project)
            <div class="col-12 col-md-6 col-lg-4 my-3 p-2">
                <div class="card">
                    <a href="ProjectDetails.php">
                        <img src="{{ $project->image_path }}" class="card-img-top" alt="...">
                    </a>
                    <div class="card-body">
                        <h4 class="card-title">{{ $project->name }}</h4>
                        <a href="ProjectDetails.php" class="btn btn-primary">
                            <i class="fas fa-plus"></i>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach


            <div class="col-12 text-center mt-2">
                @include('frontend.layouts.includes._main_btn',['link'=>route('frontend.projects.index'),'title'=>'More Projects'])
            </div>

        </div>
    </div>
</div>
<!-- END:: OUR PROJECTS SECTION -->

<!-- START:: GALLERY SECTION -->
<div class="gallery">
    <div class="container">

        <h2 class="sec-heading mb-5"> Gallery </h2>

        <div id="gallery-slider" class="owl-carousel owl-theme">
            @foreach (\App\Gallary::take(5)->get() as $gallary)
            <div class="gallery-slider-item">
                <img src="{{ $gallary->image_path }}">
            </div>
            @endforeach
        </div>

        <div class="col-12 text-center mt-5">
            @include('frontend.layouts.includes._main_btn',['link'=>route('frontend.gallaries.index'),'title'=>'View More'])
        </div>
    </div>
</div>
<!-- END:: GALLERY SECTION -->

<!-- START:: OUR PRODUCTS SECTION -->
<div class="products">
    <div class="container">
        <h2 class="sec-heading mt-5"> Our Products </h2>
        <div class="row justify-content-center">
            @foreach (\App\Product::take(3)->get() as $product)
            <div class="col-12 col-md-6 col-lg-4 my-3 p-2">
                <div class="card">
                    <a href="ProductsDetails.php">
                        <img src="{{ $product->image_path }}" class="card-img-top" alt="...">
                    </a>
                    <div class="card-body d-flex justify-content-between">
                        <h4 class="card-title">{{ $product->name }}</h4>
                        <a href="ProductsDetails.php" class="btn btn-primary">
                            Read More
                            <i class="far fa-arrow-alt-circle-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach


            <div class="col-12 text-center mt-2">
                @include('frontend.layouts.includes._main_btn',['link'=>route('frontend.products.index'),'title'=>'More Products'])
            </div>

        </div>
    </div>
</div>
<!-- END:: OUR PRODUCTS SECTION -->

<!-- START:: NEWS SECTION -->
<div class="news">
    <div class="container">
        <h2 class="sec-heading mt-5"> News </h2>
        <div class="row justify-content-center">

            @foreach (\App\Article::take(3)->get() as $article)
            <div class="col-12 col-md-6 col-lg-4 my-3 p-2">
                <div class="card">
                    <span class="badge">
                        <span class="inner-badge"> {{ $article->formated_date() }} </span>
                    </span>
                    <a href="ArticleDetails.php">
                        <img src="{{  $article->image_path }}" class="card-img-top" alt="...">
                    </a>
                    <div class="card-body text-center">
                        <h4 class="card-title mb-3 mt-2">{{  $article->name }}</h4>
                        <p class="card-text mb-4"> {!! $article->words(20)  !!} </p>

                        <!-- ArticleDetails.php -->
                        @include('frontend.layouts.includes._main_btn',['link'=>route('frontend.articles.show',$article),'title'=>'More Details'])
                    </div>
                </div>
            </div>                
            @endforeach

            <div class="col-12 text-center mt-5">
                <!-- AllNews.php -->
                @include('frontend.layouts.includes._main_btn',['link'=>route('frontend.articles.index'),'title'=>'View More Articles'])

            </div>

        </div>
    </div>
</div>
<!-- END:: NEWS SECTION -->

<!-- END:: PAGE CONTENT -->

@endsection
