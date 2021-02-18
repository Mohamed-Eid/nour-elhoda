@extends('frontend.layouts.app')

@section('content')

@include('frontend.layouts.includes._pages_header',['image'=>get_setting_by_key('about_header_image')->image_path])


<!-- START:: PAGE CONTENT -->
<div class="contact-us-page">
    <div class="container">
        <h2 class="sec-heading mt-5"> Our Farms Addresses </h2>

        <!-- START:: FARMS ADRESSES SECTION -->
        <div class="row justify-content-center mb-5">

            @if (get_setting_by_key('address_1_active')->one_value == "1")
            <div class="col-12 col-md-6 col-lg-4 my-3 p-2">
                <div class="card p-3">
                    <h4 class="card-title text-center"> {{ get_setting_by_key('address_1')->one_value }} </h4>

                    <ul class="card-list container list-unstyled">
                        <li>
                            <i class="fas fa-map-marker-alt"></i>
                            <span> {{ get_setting_by_key('address_1_address')->one_value }} </span>
                        </li>

                        <li>
                            <i class="fas fa-mobile-alt"></i>
                            <span> {{ get_setting_by_key('address_1_phone')->one_value }} </span>
                        </li>

                        <li>
                            <i class="fas fa-envelope"></i>
                            <span> {{ get_setting_by_key('address_1_email')->one_value}} </span>
                        </li>
                    </ul>
                </div>
            </div>
            @endif

            @if (get_setting_by_key('address_2_active')->one_value == "1")
            <div class="col-12 col-md-6 col-lg-4 my-3 p-2">
                <div class="card p-3">
                    <h4 class="card-title text-center"> {{ get_setting_by_key('address_2')->one_value }} </h4>

                    <ul class="card-list container list-unstyled">
                        <li>
                            <i class="fas fa-map-marker-alt"></i>
                            <span> {{ get_setting_by_key('address_2_address')->one_value }} </span>
                        </li>

                        <li>
                            <i class="fas fa-mobile-alt"></i>
                            <span> {{ get_setting_by_key('address_2_phone')->one_value }} </span>
                        </li>

                        <li>
                            <i class="fas fa-envelope"></i>
                            <span> {{ get_setting_by_key('address_2_email')->one_value}} </span>
                        </li>
                    </ul>
                </div>
            </div>
            @endif

            @if (get_setting_by_key('address_3_active')->one_value == "1")
            <div class="col-12 col-md-6 col-lg-4 my-3 p-2">
                <div class="card p-3">
                    <h4 class="card-title text-center"> {{ get_setting_by_key('address_3')->one_value }} </h4>

                    <ul class="card-list container list-unstyled">
                        <li>
                            <i class="fas fa-map-marker-alt"></i>
                            <span> {{ get_setting_by_key('address_3_address')->one_value }} </span>
                        </li>

                        <li>
                            <i class="fas fa-mobile-alt"></i>
                            <span> {{ get_setting_by_key('address_3_phone')->one_value }} </span>
                        </li>

                        <li>
                            <i class="fas fa-envelope"></i>
                            <span> {{ get_setting_by_key('address_3_email')->one_value}} </span>
                        </li>
                    </ul>
                </div>
            </div>
            @endif

            




        </div>
        <!-- END:: FARMS ADRESSES SECTION -->

        <!-- START:: CONTACT INFO SECTION -->
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                {!! get_setting_by_key('map')->one_value !!}
            </div>

            <div class="col-12 col-md-6">
                <h4 class="small-sec-heading text-center my-3"> Write Us A Message </h4>
                <form action="{{ route('frontend.contact.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-12 col-md-6 p-2">
                            <input type="text" placeholder="Your Name" name="name">
                        </div>

                        <div class="col-12 col-md-6 p-2">
                            <input type="email" placeholder="Email Address" name="email">
                        </div>

                        <div class="col-12 col-md-6 p-2">
                            <input type="tele" placeholder="Phone Number" name="phone">
                        </div>

                        <div class="col-12 col-md-6 p-2">
                            <input type="text" placeholder="Subject" name="subject">
                        </div>

                        <div class="col-12 p-2">
                            <textarea placeholder="Write Message" name="message"></textarea>
                        </div>

                        <div class="col-12 text-center p-2">
                            <button type="submit" class="hover-effect"> Send Message </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- START:: CONTACT INFO SECTION -->
    </div>
</div>
<!-- END:: PAGE CONTENT -->

@endsection
