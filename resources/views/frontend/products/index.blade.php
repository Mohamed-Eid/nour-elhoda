@extends('frontend.layouts.app')

@section('content')

@include('frontend.layouts.includes._pages_header',['image'=>get_setting_by_key('products_header')->image_path])

<!-- START:: PAGE CONTENT -->
<div class="products-page">
    <div class="container">
        <h2 class="sec-heading mt-5"> Our Products </h2>
        <div class="row justify-content-center products">
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
            var url = "{{ route('more_products') }}?page=" + (++count);
            $.ajax({
                url: url,
                success: function (res) {
                    $(document).find('.products').empty();
                    $(document).find('.products').append(res);
                }
            });
        });

    </script>
@endpush

@endsection
