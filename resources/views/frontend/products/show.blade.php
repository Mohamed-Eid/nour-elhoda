@extends('frontend.layouts.app')

@section('content')

<!-- START:: PAGE CONTENT -->

@include('frontend.layouts.includes._pages_header',['image'=>$product->header_path])


<!-- START:: PAGE CONTENT -->

<!-- START:: DETAILS SECTION -->
<div class="product-details">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6">
                <div class="project-details-img">
                    <img src="{{ $product->image_path }}" alt="Product Details Img" class="img-fluid">
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid mt-4">
        <div class="row">
            <div class="col-12">
                <div class="project-details-text">
                    <h2 class="sec-heading mb-4"> {{ $product->name }} </h2>
                    {!! $product->description !!}
                </div>
            </div>
        </div>
    </div>
</div>
<!-- START:: DETAILS SECTION -->
@if (count($product->heighlights) > 0)
<!-- START:: WHY SECTION -->
<div class="heighlights">
    <div class="container">
        <h2 class="sec-heading text-center mb-5"> {{ $product->name }} Heighlights </h2>
        <div class="row">
            @foreach ($product->heighlights as $heighlight)
            <div class="col-6 col-md-3 my-3 text-center">
                <img src="{{ $heighlight->image_path }}">
                <h4> {{ $heighlight->name }} </h4>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- END:: WHY SECTION -->    
@endif


@if (count($product->integrations)>0)
<!-- START:: INTEGERATED SECTION  -->
<div class="integerated">
    <div class="container">
        <h2 class="sec-heading mt-5"> {{ $product->name }} Integerated With </h2>
        <div class="row justify-content-center">
            @foreach ($product->integrations as $integration)
            <div class="col-12 col-md-6 col-lg-4 my-3 p-2">
                <div class="card">
                    <img src="{{ $integration->image_path }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="card-title text-center">{{ $integration->name }}</h4>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>
<!-- END:: INTEGERATED SECTION  -->    
@endif


<!-- START:: WHY TO INVEST SECTION -->
<div class="why-to-invest">
    <div class="container-fluid">
        <div class="row d-flex justify-content-between align-items-center">
            <h3 class="col-12 col-md-8 text-center mb-0"> To Invest With Nour El Hooda? Please Contact Us </h3>

            <div class="col-12 col-md-4 mt-4 mt-md-0 text-center">
                @include('frontend.layouts.includes._main_btn',['link'=>'#','title'=>'Contact Us'])
            </div>
        </div>
    </div>
</div>
<!-- END:: WHY TO INVEST SECTION -->

<!-- START:: PAGE CONTENT -->

@endsection
