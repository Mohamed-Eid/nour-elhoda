@extends('frontend.layouts.app')

@section('content')

<!-- START:: PAGE CONTENT -->

@include('frontend.layouts.includes._pages_header',['image'=>$project->header_path])

<!-- START:: PAGE CONTENT -->



<!-- START:: DETAILS SECTION -->
<div class="project-details">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6">
                <div class="project-details-img">
                    <img src="{{ $project->image_path }}" alt="Project Details Img" class="img-fluid">
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid mt-4">
        <div class="row">
            <div class="col-12">
                <div class="project-details-text">
                    <h2 class="sec-heading mb-4"> {{ $project->name }} </h2>
                    {!! $project->description  !!}
                </div>
            </div>
        </div>
    </div>
</div>
<!-- START:: DETAILS SECTION -->

<!-- START:: WHY SECTION -->
@if (count($project->investigations) > 0)
<div class="why-sec">
    <div class="container">
        <h2 class="sec-heading text-center mb-5"> Why Invest In Spirulina </h2>
        <div class="row">
            @foreach ($project->investigations as $investigation)
            <div class="col-6 col-md-3 my-3 text-center">
                <img src="{{ $investigation->image_path }}">
                <h4> {{ $investigation->name }} </h4>
            </div>
            @endforeach
        </div>
    </div>
</div>    
@endif
<!-- END:: WHY SECTION -->

<!-- START:: VIDEOS SECTION -->
@if (count($project->videos) > 0)
<div class="videos">
    <div class="container">

        <h2 class="sec-heading mb-5"> Videos </h2>

        <div id="videos-slider" class="owl-carousel owl-theme">
            @foreach ($project->videos as $video)
                
            @endforeach
            <div class="videos-slider-item">
                <iframe src="https://www.youtube.com/embed/{{$video->get_id()}}" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
                <h4 class="text-center"> {{ $video->name }} </h4>
            </div>

        </div>

        <div class="col-12 text-center mt-5">
            @include('frontend.layouts.includes._main_btn',['link'=>'#','title'=>'View More'])
        </div>
    </div>
</div>    
@endif

<!-- START:: VIDEOS SECTION -->

<!-- START:: WHY TO INVEST SECTION -->
<div class="why-to-invest">
    <div class="container-fluid">
        <div class="row d-flex justify-content-between align-items-center">
            <h3 class="mb-0 col-12 col-md-8"> To Invest With Nour El Hooda? Please Contact Us </h3>

            <div class="col-12 col-md-4 text-center mt-4 mt-md-0">
                @include('frontend.layouts.includes._main_btn',['link'=>route('frontend.contact.index'),'title'=>'Contact Us'])
            </div>
        </div>
    </div>
</div>
<!-- END:: WHY TO INVEST SECTION -->

<!-- START:: PAGE CONTENT -->

@endsection
