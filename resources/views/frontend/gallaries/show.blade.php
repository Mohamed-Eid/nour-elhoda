@extends('frontend.layouts.app')

@section('content')

@include('frontend.layouts.includes._pages_header',['image'=>get_setting_by_key('about_header_image')->image_path])

<!-- START:: PAGE CONTENT -->
<div class="gallery-page">
    <div class="container">
        <h2 class="sec-heading mt-5"> Our Gallery </h2>
        <div class="row justify-content-center">
            @foreach ($gallary->images as $image)
            <div class="col-12 col-md-6 col-lg-4 my-3 p-2">
                <div class="card">
                    <a href="{{ $image->image_path }}" data-lightbox="gallery">
                        <img src="{{ $image->image_path }}" class="card-img-top" alt="...">
                    </a>
                </div>
            </div>                
            @endforeach


        </div>
    </div>
</div>
<!-- END:: PAGE CONTENT -->

@endsection
