@extends('dashboard.layouts.app')

@section('content')

<div class="kt-portlet">
    <div class="kt-portlet__head">
        <div class="kt-portlet__head-label">
            <h3 class="kt-portlet__head-title">
                إعدادات الصفحة الرئيسية
            </h3>
        </div>
    </div>
    <div class="kt-portlet__body">
        <ul class="nav nav-tabs  nav-tabs-line" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#kt_tabs_1_1" role="tab">هايلايت المستثمرين</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#kt_tabs_1_3" role="tab">Logs</a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane active" id="kt_tabs_1_1" role="tabpanel">
                <form class="kt-form p-3 " method="POST" action="{{ route('settings.update') }}" enctype="multipart/form-data">
                    <div class="row">
                        @csrf
                        @method('PUT')

                        <input type="hidden" name="h_type" value="home">
                        <div class="input-group-prepend col-12 my-2">
                            <span class="input-group-text"> <i class="la la-pencil" style="font-size: 18px"></i>
                            </span>
                            <input type="text" name="{{ get_setting_by_key('home_video')->id }}[one_value]" value="{{ get_setting_by_key('home_video')->one_value }}" class="form-control d-block" placeholder="لينك اليوتويب">
                        </div>
                        @foreach (\App\CompanyHeighlight::where('type','home')->get() as $company_heighlight)
                        <div class="row">
                            <div class="col-4">

                                <div class="form-group ">
                                    <input id="pro_img" name="old_heighlights[{{ $company_heighlight->id }}][image]" type="file" onchange="readURL(this);" />
                                    <img class="image-preview" width="150px" height="100px" src="{{ $company_heighlight->image_path }}" alt="your image" />
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="input-group-prepend col-12 my-2">
                                    <span class="input-group-text"> <i class="la la-pencil" style="font-size: 18px"></i>
                                    </span>
                                    <input type="text" name="old_heighlights[{{ $company_heighlight->id }}][ar_name]" value="{{ $company_heighlight->translate('ar')->name }}" class="form-control d-block" placeholder="الاسم باللغة العربية">
                                </div>

                                <div class="input-group-prepend col-12 my-2">
                                    <span class="input-group-text"> <i class="la la-pencil" style="font-size: 18px"></i>
                                    </span>
                                    <input type="text" name="old_heighlights[{{ $company_heighlight->id }}][en_name]" value="{{ $company_heighlight->translate('en')->name }}" class="form-control d-block" placeholder="الاسم باللغة الانجليزيه">
                                </div>
                            </div>

                            <div class="kt-form__group--inline col-2 mt-2">
                                <a href="{{ route('company_heighlights.destroy',$company_heighlight) }}" class="delete_investigation btn-sm btn btn-label-danger btn-bold">
                                    <i class="la la-trash-o"></i>
                                    حذف
                                </a>
                            </div>
                        </div>
                        @endforeach

                        <div id="kt_repeater_2" class="col-12">
                            <div class="form-group form-group-last" id="kt_repeater_2">
                                <div data-repeater-list="company_heighlights" class="col-12">
                                    <div data-repeater-item class="form-group align-items-center">
                                        <div class="col-12 d-flex" style="display: none;">
                                            <div class="row">
                                                <div class="col-4">

                                                    <div class="form-group ">
                                                        <input id="pro_img" name="image" type="file" onchange="readURL(this);" />
                                                        <img class="image-preview" width="150px" height="100px" src="{{ asset('assets/media/users/300_14.jpg') }}" alt="your image" />
                                                    </div>
                                                </div>

                                                <div class="col-8">
                                                    <div class="input-group-prepend col-12 my-2">
                                                        <span class="input-group-text"> <i class="la la-pencil" style="font-size: 18px"></i>
                                                        </span>
                                                        <input type="text" name="ar_name" class="form-control d-block" placeholder="الاسم باللغة العربية">
                                                    </div>
                
                                                    <div class="input-group-prepend col-12 my-2">
                                                        <span class="input-group-text"> <i class="la la-pencil" style="font-size: 18px"></i>
                                                        </span>
                                                        <input type="text" name="en_name" class="form-control d-block" placeholder="الاسم باللغة الانجليزيه">
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="kt-form__group--inline col-1 mt-2">
                                                <a href="javascript:;" data-repeater-delete="" class="btn-sm btn btn-label-danger btn-bold">
                                                    <i class="la la-trash-o"></i>
                                                    حذف
                                                </a>
                                            </div>

                                            <div class="d-md-none kt-margin-b-10"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group form-group-last">
                                <label class="col-lg-2 col-form-label"></label>
                                <div class="col-lg-4">
                                    <a href="javascript:;" data-repeater-create="" class="btn btn-bold btn-sm btn-label-brand">
                                        <i class="la la-plus"></i> إضافة هايلايت
                                    </a>
                                </div>
                            </div>
                        </div>



                        <div class="form-group col-12 px-4">
                            <div class="input-group">
                                <div class="row">
                                    <button type="submit" class="btn btn-success"
                                        style="background-color:#17b978; border:none;">حفظ</button>
                                </div>
                            </div>
                        </div>

                    </div>
                </form>
            </div>

            <div class="tab-pane" id="kt_tabs_1_3" role="tabpanel">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged
            </div>
        </div>
    </div>
</div>


@endsection

@push('scripts')
{{-- <script>
    ClassicEditor
        .create( document.querySelector( '.default-ar' ) )
        .then( editor => {
            console.log( editor );
        } )
        .catch( error => {
            console.error( error );
    } );
</script>

<script>
    ClassicEditor
        .create( document.querySelector( '.default-en' ) )
        .then( editor => {
            console.log( editor );
        } )
        .catch( error => {
            console.error( error );
    } );
</script>

<script>
    ClassicEditor
        .create( document.querySelector( '.goals-ar' ) )
        .then( editor => {
            console.log( editor );
        } )
        .catch( error => {
            console.error( error );
    } );
</script>

<script>
    ClassicEditor
        .create( document.querySelector( '.goals-en' ) )
        .then( editor => {
            console.log( editor );
        } )
        .catch( error => {
            console.error( error );
    } );
</script> --}}

<script>
    function readURL(input) {
        
        el = 'input[name='+ "'" + input.name + "'" +']';
        $(el).on('change', function () {
            console.log(el + ' - ' +'changed');
            if (this.files && this.files[0]) {
                var reader = new FileReader();
                reader.onload = (e) => {
                    $(el).next('img').attr('src', e.target.result);
                }
                reader.readAsDataURL(this.files[0]);
            };
        });
    }
</script>
<script src="{{ asset('assets/js/pages/crud/file-upload/ktavatar.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/pages/crud/forms/widgets/form-repeater.js') }}" type="text/javascript"></script>


@endpush
