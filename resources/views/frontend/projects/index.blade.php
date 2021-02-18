@extends('frontend.layouts.app')

@section('content')

<!-- START:: PAGE CONTENT -->

@include('frontend.layouts.includes._pages_header',['image'=>get_setting_by_key('about_header_image')->image_path])
<!-- START:: PAGE CONTENT -->
<div class="projects-page">
    <div class="container">
        <h2 class="sec-heading mt-5"> Our Projects </h2>
        <div class="row justify-content-center projects">

            @foreach ($projects as $project)
            <div class="col-12 col-md-6 col-lg-4 my-3 p-2">
                <div class="card">
                    <a href="{{ route('frontend.projects.show',$project) }}">
                        <img src="{{ $project->image_path }}" class="card-img-top" alt="...">
                    </a>
                    <div class="card-body">
                        <h4 class="card-title">{{ $project->name }}</h4>

                        <a href="{{ route('frontend.projects.show',$project) }}" class="btn btn-primary">
                            <i class="fas fa-plus"></i>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
        <div class="col-12 text-center">
            <button id="add_addition" class="hover-effect"> Load More</button>
        </div>
    </div>
</div>
<!-- END:: PAGE CONTENT -->

@push('scripts')
<script>
    var count = 1;
    $(document).on('click', '#add_addition', function(e){
        e.preventDefault();
            // ajax to get the form inputs
            var url ="{{ route('more_projects') }}?page=" + (++count); 
            $.ajax({
                url : url ,
                success : function (res){
                    $(document).find('.projects').empty();
                    $(document).find('.projects').append(res);
                }
            });
    });

</script>
@endpush

@endsection
