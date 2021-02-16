@extends('frontend.layouts.app')

@section('content')

<!-- START:: PAGE CONTENT -->

@include('frontend.layouts.includes._pages_header', [ 'image' => get_setting_by_key('about_header_image')->image_path] )

<!-- START:: ABOUT US DESCRIPTION SECTION -->
<div class="about-us-desc">
    <div class="container">
        <div class="row">

            <div class="about-img col-12 col-md-6">
                <img class="img-fluid" src="{{ get_setting_by_key('about_image')->image_path }}" alt="About Page Img">
            </div>

            <div class="about-text col-12 col-md-6 d-flex flex-column justify-content-center align-items-center">
                <h2 class="text-center mt-3"> About Nour El Hooda </h2>
                <div class="my-4">{!! get_setting_by_key('about_description')->value !!}</div>
            </div>

        </div>
    </div>
</div>
<!-- START:: ABOUT US DESCRIPTION SECTION -->

<!-- START:: OUR GOALS SECTIONS -->
<div class="goals">
    <div class="container">
        <h2 class="sec-heading text-center mt-3"> Our Goals </h2>
        <div class="my-4">{!! get_setting_by_key('about_goals')->value !!}</div>
    </div>
</div>
<!-- START:: OUR GOALS SECTIONS -->

<!-- START:: COMPANY HIEGHLIGHT SECTION -->
<div class="comp-heighlight">
    <div class="container">
        <h2 class="sec-heading text-center mb-5"> Company Heighlight </h2>
        <div class="row">
            @foreach (\App\CompanyHeighlight::where('type',NULL)->get() as $company_heighlight)
            <div class="col-6 col-md-3 my-3 text-center">
                <img src="{{ $company_heighlight->image_path }}">
                <h4> {{ $company_heighlight->name }} </h4>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- START:: COMPANY HIEGHLIGHT SECTION -->

<!-- END:: PAGE CONTENT -->

@endsection
