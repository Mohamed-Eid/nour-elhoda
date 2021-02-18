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