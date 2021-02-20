@extends('frontend.layouts.app')

@section('content')

@include('frontend.layouts.includes._pages_header',['image'=>get_setting_by_key('gallaries_header')->image_path])

<!-- START:: PAGE CONTENT -->
<div class="gallery-page">
    <div class="container">
        <h2 class="sec-heading mt-5"> Our Gallery </h2>
        <div class="row justify-content-center">

            @foreach ($gallaries as $gallary)
            <div class="col-12 col-md-6 col-lg-4 my-3 p-2">
                <div class="card">
                    <a href="{{ route('frontend.gallaries.show',$gallary) }}">
                        <img src="{{ $gallary->image_path }}" class="card-img-top" alt="...">
                    </a>
                </div>
            </div>
            @endforeach

            @if (count($gallaries) < count(\App\Gallary::all()) )
            <div class="col-12 mt-4 text-center">
                <a class="hover-effect" href="{{ route('frontend.gallaries.index') }}?page={{ $page + 1 }}"> Load More </a>
            </div>                
            @endif

        </div>
    </div>
</div>

@endsection
