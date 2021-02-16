@extends('frontend.layouts.app')

@section('content')

<!-- START:: PAGE CONTENT -->

@include('frontend.layouts.includes._pages_header',['image'=>get_setting_by_key('about_header_image')->image_path])
<!-- START:: PAGE CONTENT -->
<div class="projects-page">
    <div class="container">
        <h2 class="sec-heading mt-5"> Our Projects </h2>
        <div class="row justify-content-center">

            @foreach ($projects as $project)
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

            <div class="col-12 text-center">

                <a href="#" class="hover-effect"> 'Load More</a>
            </div>

        </div>
    </div>
</div>
<!-- END:: PAGE CONTENT -->

@endsection
