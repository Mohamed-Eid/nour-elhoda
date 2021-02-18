@extends('frontend.layouts.app')

@section('content')


@include('frontend.layouts.includes._pages_header',['image'=>$article->header_path])

<!-- START:: DETAILS SECTION -->
<div class="article-details">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6">
                <div class="article-details-img">
                    <span class="badge">
                        <span class="inner-badge"> {{ $article->formated_date() }} </span>
                    </span>
                    <img src="{{ $article->image_path }}" alt="Product Details Img" class="img-fluid">
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid mt-4">
        <div class="row">
            <div class="col-12">
                <div class="article-details-text">
                    <h2 class="sec-heading mb-4"> {{ $article->name }} </h2>
                    {!! $article->description !!}
                </div>
            </div>
        </div>
    </div>
</div>
<!-- START:: DETAILS SECTION -->

<!-- START:: VIDEOS SECTION -->
@if (count($article->videos ) > 0)
<div class="rel-videos">
    <div class="container">

        <h2 class="sec-heading mb-5"> Related Videos </h2>

        <div id="videos-slider" class="owl-carousel owl-theme">
            @foreach ($article->videos as $video)
            <div class="videos-slider-item">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/{{ $video->get_id() }}" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
                <h4 class="text-center"> {{ $video->name }} </h4>
            </div>                
            @endforeach
        </div>

        <div class="col-12 text-center mt-5">
            @include('frontend.layouts.includes._main_btn',['link'=>route('frontend.videos.index'),'title'=>'View More'])
        </div>
    </div>
</div>   
@endif

<!-- START:: VIDEOS SECTION -->

@endsection
