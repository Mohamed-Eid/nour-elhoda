@extends('frontend.layouts.app')

@section('content')

@include('frontend.layouts.includes._pages_header',['image'=>get_setting_by_key('videos_header')->image_path])

<!-- START:: PAGE CONTENT -->
<div class="videos-liberary">
    <div class="container">
        <h2 class="sec-heading mt-5"> @lang('site.Videos Liberary') </h2>
        <div class="mb-5 mt-3"> {!! get_setting_by_key('videos_header')->value !!} </div>

        <!-- START:: TABS -->
        <ul class="nav nav-pills d-flex justify-content-center my-4" id="pills-tab" role="tablist">
            <li class="nav-item mx-3" role="presentation">
                <a class="nav-link active" id="pills-all-videos-tab" data-toggle="pill" href="#pills-all-videos"
                    role="tab" aria-controls="pills-all-videos" aria-selected="true">@lang('site.All')</a>
            </li>

            <li class="nav-item mx-3" role="presentation">
                <a class="nav-link" id="pills-projects-tab" data-toggle="pill" href="#pills-projects" role="tab"
                    aria-controls="pills-projects" aria-selected="false">@lang('site.Projects Videos')</a>
            </li>

            <li class="nav-item mx-3" role="presentation">
                <a class="nav-link" id="pills-interviews-tab" data-toggle="pill" href="#pills-interviews" role="tab"
                    aria-controls="pills-interviews" aria-selected="false">@lang('site.Eng. Hatem Interviews')</a>
            </li>
        </ul>
        <!-- START:: TABS -->

        <!-- START:: TABS CONTENT -->
        <div class="tab-content" id="pills-tabContent">

            <!-- START:: TAB CONTENT SHEET -->
            <div class="tab-pane fade show active" id="pills-all-videos" role="tabpanel"
                aria-labelledby="pills-all-videos-tab">
                <div class="row justify-content-center">

                    @foreach ($videos as $video)
                    <div class="col-12 col-md-6 col-lg-4 my-3 p-2">
                        <iframe src="https://www.youtube.com/embed/{{$video->get_id()}}" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                        <h4 class="text-center"> {{$video->name}} </h4>
                    </div>
                    @endforeach
                </div>
            </div>
            <!-- END:: TAB CONTENT SHEET -->

            <!-- START:: TAB CONTENT SHEET -->
            <div class="tab-pane fade" id="pills-projects" role="tabpanel" aria-labelledby="pills-projects-tab">
                <div class="row justify-content-center">

                    @foreach ($videos->where('videoable_type',"App\Project") as $video)
                    <div class="col-12 col-md-6 col-lg-4 my-3 p-2">
                        <iframe src="https://www.youtube.com/embed/{{$video->get_id()}}" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                        <h4 class="text-center"> {{$video->name}} </h4>
                    </div>
                    @endforeach

                </div>
            </div>
            <!-- END:: TAB CONTENT SHEET -->

            <!-- START:: TAB CONTENT SHEET -->
            <div class="tab-pane fade" id="pills-interviews" role="tabpanel" aria-labelledby="pills-interviews-tab">
                <div class="row justify-content-center">

                    @foreach ($videos->where('videoable_type',null) as $video)
                    <div class="col-12 col-md-6 col-lg-4 my-3 p-2">
                        <iframe src="https://www.youtube.com/embed/{{$video->get_id()}}" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                        <h4 class="text-center"> {{ $video->name }} </h4>
                    </div>
                    @endforeach
                </div>
            </div>

            <div class="col-12 text-center">
                <a href="{{ route('frontend.videos.index') }}?page={{ $page + 1 }}" class="hover-effect">Load More Videos</a>
            </div>
            <!-- END:: TAB CONTENT SHEET -->
        </div>
        <!-- END:: TABS CONTENT -->

    </div>
</div>

@push('scripts')
    <script>
        var count = 1;
        $(document).on('click', '#add_addition', function (e) {
            e.preventDefault();
            // ajax to get the form inputs
            var url = "{{ route('more_articles') }}?page=" + (++count);
            $.ajax({
                url: url,
                success: function (res) {
                    $(document).find('.articles').empty();
                    $(document).find('.articles').append(res);
                }
            });
        });

    </script>
@endpush

@endsection
