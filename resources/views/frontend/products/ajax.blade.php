@foreach ($products as $product)
<div class="col-12 col-md-6 col-lg-4 my-3 p-2">
    <div class="card">
        <a href="{{ route('frontend.products.show',$product) }}">
            <img src="{{ $product->image_path }}" class="card-img-top" alt="...">
        </a>
        <div class="card-body d-flex justify-content-between">
            <h4 class="card-title">{{ $product->name }}</h4>

            <a href="{{ route('frontend.products.show',$product) }}" class="btn btn-primary">
                Read More
                <i class="far fa-arrow-alt-circle-right"></i>
            </a>
        </div>
    </div>
</div>                
@endforeach