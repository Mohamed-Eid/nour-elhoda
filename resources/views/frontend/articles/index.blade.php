@extends('frontend.layouts.app')

@section('content')

@include('frontend.layouts.includes._pages_header',['image'=>get_setting_by_key('articles_header')->image_path])

<!-- START:: PAGE CONTENT -->
<div class="news-page">
    <div class="container">
        <h2 class="sec-heading mt-5"> Investor News </h2>
        <div class="row justify-content-center articles">

            @foreach ($articles as $article)

            <div class="col-12 col-md-6 col-lg-4 my-3 p-2">
                <div class="card">
                    <span class="badge">
                        <span class="inner-badge"> {{ $article->formated_date() }} </span>
                    </span>
                    <img src="{{  $article->image_path }}" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h4 class="card-title mb-3 mt-2">{{  $article->name }}</h4>
                        <div class="card-text mb-4"> {!! $article->words(20)  !!} </div>

                        <!-- ArticleDetails.php -->
                        @include('frontend.layouts.includes._main_btn',['link'=>route('frontend.articles.show',$article),'title'=>'More Details'])

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
