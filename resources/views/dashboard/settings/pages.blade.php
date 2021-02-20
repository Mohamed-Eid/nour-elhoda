@extends('dashboard.layouts.app')

@section('content')

<div class="kt-portlet">
    <div class="kt-portlet__head">
        <div class="kt-portlet__head-label">
            <h3 class="kt-portlet__head-title">
                إعدادات هيدر الصفحات
            </h3>
        </div>
    </div>
    <div class="kt-portlet__body">
        <ul class="nav nav-tabs  nav-tabs-line" role="tablist">

            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#kt_tabs_1_1" role="tab">المشروعات</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#kt_tabs_1_2" role="tab">المنتجات</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#kt_tabs_1_3" role="tab">الاخبار</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#kt_tabs_1_4" role="tab">مكتبة الفيديوهات</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#kt_tabs_1_5" role="tab">معرض الصور</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#kt_tabs_1_6" role="tab">تواصل معنا</a>
            </li>
        </ul>
        <div class="tab-content">

            <div class="tab-pane active" id="kt_tabs_1_1" role="tabpanel">
                <form class="kt-form p-3 " method="POST" action="{{ route('settings.update') }}" enctype="multipart/form-data">
                    <div class="row">
                        @csrf
                        @method('PUT')

                        <div class="form-group col-12 col-md-6">
                            <div class="row">
                                <label class="col-form-label col-12">الصورة</label>
                                <div class="input-group-prepend col-12">
                                    <span class="input-group-text"> <i class="la la-pencil" style="font-size: 18px"></i>
                                    </span>
                                    <input type="file" name="{{ get_setting_by_key('projects_header')->id }}[one_value]" onchange="changeImagePreview(event);" class="form-control d-block" placeholder="Image" >
                                </div>
                                <div class="border mt-2">
                                    <img  width="150px" height="100px" src="{{ get_setting_by_key('projects_header')->image_path ?? '' }}" alt="your image" />
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

            <div class="tab-pane" id="kt_tabs_1_2" role="tabpanel">
                <form class="kt-form p-3 " method="POST" action="{{ route('settings.update') }}" enctype="multipart/form-data">
                    <div class="row">
                        @csrf
                        @method('PUT')

                        <div class="form-group col-12 col-md-6">
                            <div class="row">
                                <label class="col-form-label col-12">الصورة</label>
                                <div class="input-group-prepend col-12">
                                    <span class="input-group-text"> <i class="la la-pencil" style="font-size: 18px"></i>
                                    </span>
                                    <input type="file" name="{{ get_setting_by_key('products_header')->id }}[one_value]" onchange="changeImagePreview(event);" class="form-control d-block" placeholder="Image" >
                                </div>
                                <div class="border mt-2">
                                    <img  width="150px" height="100px" src="{{ get_setting_by_key('products_header')->image_path ?? '' }}" alt="your image" />
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

                <form class="kt-form p-3 " method="POST" action="{{ route('settings.update') }}" enctype="multipart/form-data">
                    <div class="row">
                        @csrf
                        @method('PUT')

                        

                        <div class="form-group col-12 col-md-6">
                            <div class="row">
                                <label class="col-form-label col-12">الصورة</label>
                                <div class="input-group-prepend col-12">
                                    <span class="input-group-text"> <i class="la la-pencil" style="font-size: 18px"></i>
                                    </span>
                                    <input type="file" name="{{ get_setting_by_key('articles_header')->id }}[one_value]" onchange="changeImagePreview(event);" class="form-control d-block" placeholder="Image" >
                                </div>
                                <div class="border mt-2">
                                    <img  width="150px" height="100px" src="{{ get_setting_by_key('articles_header')->image_path ?? '' }}" alt="your image" />
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
            <div class="tab-pane" id="kt_tabs_1_4" role="tabpanel">

                <form class="kt-form p-3 " method="POST" action="{{ route('settings.update') }}" enctype="multipart/form-data">
                    <div class="row">
                        @csrf
                        @method('PUT')

                        

                        <div class="form-group col-12 col-md-6">
                            <div class="row">
                                <label class="col-form-label col-12">الصورة</label>
                                <div class="input-group-prepend col-12">
                                    <span class="input-group-text"> <i class="la la-pencil" style="font-size: 18px"></i>
                                    </span>
                                    <input type="file" name="{{ get_setting_by_key('videos_header')->id }}[one_value]" onchange="changeImagePreview(event);" class="form-control d-block" placeholder="Image" >
                                </div>
                                <div class="border mt-2">
                                    <img  width="150px" height="100px" src="{{ get_setting_by_key('videos_header')->image_path ?? '' }}" alt="your image" />
                                </div>
                            </div>
                        </div>




                        <div class="form-group col-12">
                            <div class="row">
                                <label class="col-form-label col-12"> الوصف باللغة العربية </label>
                                <div class="input-group-prepend col-12">
                                    
                                <textarea class="default-ar" name="{{ get_setting_by_key('videos_header')->id }}[ar][value]">{!! get_setting_by_key('videos_header')->translate('ar')->value ?? '' !!}</textarea>

                                </div>

                            </div>
                        </div>

                        <div class="form-group col-12">
                            <div class="row">
                                <label class="col-form-label col-12"> الوصف باللغة الانجليزية </label>
                                <div class="input-group-prepend col-12">
                                    <textarea class="default-en" name="{{ get_setting_by_key('videos_header')->id }}[en][value]">{!! get_setting_by_key('videos_header')->translate('en')->value ?? '' !!}</textarea>
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
            <div class="tab-pane" id="kt_tabs_1_5" role="tabpanel">

                <form class="kt-form p-3 " method="POST" action="{{ route('settings.update') }}" enctype="multipart/form-data">
                    <div class="row">
                        @csrf
                        @method('PUT')

                        

                        <div class="form-group col-12 col-md-6">
                            <div class="row">
                                <label class="col-form-label col-12">الصورة</label>
                                <div class="input-group-prepend col-12">
                                    <span class="input-group-text"> <i class="la la-pencil" style="font-size: 18px"></i>
                                    </span>
                                    <input type="file" name="{{ get_setting_by_key('gallaries_header')->id }}[one_value]" onchange="changeImagePreview(event);" class="form-control d-block" placeholder="Image" >
                                </div>
                                <div class="border mt-2">
                                    <img  width="150px" height="100px" src="{{ get_setting_by_key('gallaries_header')->image_path ?? '' }}" alt="your image" />
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
            <div class="tab-pane" id="kt_tabs_1_6" role="tabpanel">

                <form class="kt-form p-3 " method="POST" action="{{ route('settings.update') }}" enctype="multipart/form-data">
                    <div class="row">
                        @csrf
                        @method('PUT')

                        

                        <div class="form-group col-12 col-md-6">
                            <div class="row">
                                <label class="col-form-label col-12">الصورة</label>
                                <div class="input-group-prepend col-12">
                                    <span class="input-group-text"> <i class="la la-pencil" style="font-size: 18px"></i>
                                    </span>
                                    <input type="file" name="{{ get_setting_by_key('contact_header')->id }}[one_value]" onchange="changeImagePreview(event);" class="form-control d-block" placeholder="Image" >
                                </div>
                                <div class="border mt-2">
                                    <img  width="150px" height="100px" src="{{ get_setting_by_key('contact_header')->image_path ?? '' }}" alt="your image" />
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
        </div>
    </div>
</div>


@endsection

@push('scripts')
<script>
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
</script>

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
