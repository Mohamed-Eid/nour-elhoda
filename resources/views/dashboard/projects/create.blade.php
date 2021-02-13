@extends('dashboard.layouts.app')

@section('content')
<!-- START:: CONTENT -->
<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">

    <div class="row">
        <div class="col-12">

            <div class="kt-portlet">


                <!-- START:: TITLE -->
                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label d-flex justify-content-between w-100">
                        <h3 class="kt-portlet__head-title"> اضافة مشروع جديد </h3>
                    </div>
                </div>
                <!--END:: TITLE-->

                <!--START:: ADD NEW EMPLOYEE FORM-->
                <form class="kt-form p-3 " method="POST" action="{{ route('projects.store') }}" enctype="multipart/form-data">
                    <div class="row">
                        @csrf


                        <div class="form-group col-12 col-md-6">
                            <div class="row">
                                <label class="col-form-label col-12">صورة المشورع</label>
                                <div class="input-group-prepend col-12">
                                    <span class="input-group-text"> <i class="la la-pencil" style="font-size: 18px"></i>
                                    </span>
                                    <input type="file" name="image" onchange="changeImagePreview(event);" class="form-control d-block" placeholder="Image">
                                </div>
                                <div class="border mt-2">
            
                                </div>
                            </div>
                        </div>

                        <div class="form-group col-12 col-md-6">
                            <div class="row">
                                <label class="col-form-label col-12">صورة هيدر المشروع</label>
                                <div class="input-group-prepend col-12">
                                    <span class="input-group-text"> <i class="la la-pencil" style="font-size: 18px"></i>
                                    </span>
                                    <input type="file" name="header" onchange="changeImagePreview(event);" class="form-control" placeholder="Image">
                                </div>
                                <div class="border mt-2">
            
                                </div>
                            </div>
                        </div>

                        <div class="form-group col-12 col-md-6">
                            <div class="row">
                                <label class="col-form-label col-12">اسم المشروع باللغة العربية</label>
                                <div class="input-group-prepend col-12">
                                    <span class="input-group-text"> <i class="la la-pencil" style="font-size: 18px"></i>
                                    </span>
                                    <input type="text" name="ar[name]" class="form-control" placeholder="الإسم">
                                </div>
                            </div>
                        </div>

                        <div class="form-group col-12 col-md-6">
                            <div class="row">
                                <label class="col-form-label col-12">اسم المشروع باللغة الانجليزية</label>
                                <div class="input-group-prepend col-12">
                                    <span class="input-group-text"> <i class="la la-pencil" style="font-size: 18px"></i>
                                    </span>
                                    <input type="text" name="en[name]" class="form-control" placeholder="الإسم">
                                </div>
                            </div>
                        </div>


                        <div class="form-group col-12">
                            <div class="row">
                                <label class="col-form-label col-12"> الوصف باللغة العربية </label>
                                <div class="input-group-prepend col-12">
                                <textarea class="default-ar" name="ar[description]"></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="form-group col-12">
                            <div class="row">
                                <label class="col-form-label col-12"> الوصف باللغة الانجليزية </label>
                                <div class="input-group-prepend col-12">
                                    <textarea class="default-en" name="en[description]"></textarea>
                                </div>
                            </div>
                        </div>

                        <!-- START:: TITLE -->
                        <div class="kt-portlet__head col-12">
                            <div class="kt-portlet__head-label d-flex justify-content-between w-100">
                                <h3 class="kt-portlet__head-title text-center" style="width: 100%">  الاستثمار </h3>
                            </div>
                        </div>
                        <!--END:: TITLE-->

                        @for ($i = 1; $i <= 4; $i++)
                        <div class="col-6 col-md-3 px-3">
                            <div class="form-group">
                                <label class="col-12 col-form-label">Non-outline Style</label>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="kt-avatar" id="kt_user_avatar_{{ $i }}">
                                            <div class="kt-avatar__holder" style="background-image: url({{ asset('assets/media/users/100_2.jpg') }})"></div>
                                            <label class="kt-avatar__upload" data-toggle="kt-tooltip" title="" data-original-title="Change avatar">
                                                <i class="fa fa-pen"></i>
                                                <input type="file" name="investigations[{{ $i }}][image]" accept=".png, .jpg, .jpeg">
                                            </label>
                                            <span class="kt-avatar__cancel" data-toggle="kt-tooltip" title="" data-original-title="Cancel avatar">
                                                <i class="fa fa-times"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="input-group-prepend col-12 my-2">
                                        <span class="input-group-text"> <i class="la la-pencil" style="font-size: 18px"></i>
                                        </span>
                                        <input type="text" name="investigations[{{ $i }}][ar][name]" class="form-control d-block" placeholder="الاسم باللغة العربية">
                                    </div>

                                    <div class="input-group-prepend col-12 my-2">
                                        <span class="input-group-text"> <i class="la la-pencil" style="font-size: 18px"></i>
                                        </span>
                                        <input type="text" name="investigations[{{ $i }}][en][name]" class="form-control d-block" placeholder="الاسم باللغة الانجليزيه">
                                    </div>
                                </div>
                            </div>
                        </div>                            
                        @endfor
                        



                        <div class="kt-portlet__body col-12">

                            <div class="kt-form__section kt-form__section--first">
                                <h3 class="kt-portlet__head-title text-center" style="width: 100%">  الفيديوهات </h3>

                                <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg"></div>
                                <div id="kt_repeater_1" class="col-12">
                                    <div class="form-group form-group-last" id="kt_repeater_1">
                                        <div data-repeater-list="videos" class="col-12">
                                            <div data-repeater-item class="form-group align-items-center">
                                                <div class="col-12 d-flex">

                                                    <div class="kt-form__group--inline col-4">
                                                        <div class="input-group-prepend col-12 my-2">
                                                            <span class="input-group-text"> <i class="la la-pencil" style="font-size: 18px"></i>
                                                            </span>
                                                            <input type="text" name="ar_name" class="form-control d-block" placeholder="إسم الفيديو باللغة العربية">
                                                        </div>
                                                    </div>
                                                    <div class="kt-form__group--inline col-4">
                                                        <div class="input-group-prepend col-12 my-2">
                                                            <span class="input-group-text"> <i class="la la-pencil" style="font-size: 18px"></i>
                                                            </span>
                                                            <input type="text" name="en_name" class="form-control d-block" placeholder="إسم الفيديو باللغة الانجليزيه">
                                                        </div>
                                                    </div>

                                                    <div class="kt-form__group--inline col-3">
                                                        <div class="input-group-prepend col-12 my-2">
                                                            <span class="input-group-text"> <i class="la la-pencil" style="font-size: 18px"></i>
                                                            </span>
                                                            <input type="text" name="url" class="form-control d-block" placeholder="لينك الفيديو">
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
                                                <i class="la la-plus"></i> إضافة فيديو
                                            </a>
                                        </div>
                                    </div>
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
                <!--END::ADD NEW EMPLOYEE FORM-->

            </div>
        </div>

    </div>

    <!-- END:: CONTENT -->
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
		<!--begin::Page Scripts(used by this page) -->

    <script src="{{ asset('assets/js/pages/crud/file-upload/ktavatar.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/pages/crud/forms/widgets/form-repeater.js') }}" type="text/javascript"></script>


@endpush