@extends('admin.app')
@section('title', ' | إضافة رأي عميل')

@section('styles')
{!! HTML::style('assets/global/plugins/select2/css/select2.min.css') !!}
{!! HTML::style('assets/global/plugins/select2/css/select2-bootstrap.min.css') !!}
{!! HTML::style('assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css') !!}
{!! HTML::style('assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5-rtl.css') !!}
{!! HTML::style('assets/global/plugins/bootstrap-markdown/css/bootstrap-markdown.min.css') !!}
{!! HTML::style('assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css') !!}
@stop


@section('content')
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN VALIDATION STATES-->
        <div class="portlet light portlet-fit portlet-form bordered">
            <div class="portlet-title">
                <div class="caption">
                    <i class="icon-bubble font-green"></i>
                    <span class="caption-subject font-green bold uppercase">إضافة رأي عميل</span>
                </div>
            </div>
            <div class="portlet-body">
                <!-- BEGIN FORM-->
                <form action="{!! url('admin/reviews/store') !!}" id="review_form" method="post" class="form-horizontal" enctype="multipart/form-data">
                    <input type="hidden" value="add" id="form_type" />
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-body">
                        <div class="alert alert-danger display-hide">
                            <button class="close" data-close="alert"></button> تأكد من البيانات المدخلة
                        </div>
                        <div class="alert alert-success display-hide">
                            <button class="close" data-close="alert"></button> تم بنجاح
                        </div>

                        <div class="form-group  margin-top-20">
                            <label class="control-label col-md-2">إسم الشركة أو العميل
                                <span class="required"> * </span>
                            </label>
                            <div class="col-md-9">
                                <div class="input-icon right">
                                    <i class="fa"></i>
                                    <input type="text" class="form-control" name="title"   />
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">رأي الشركة بالعربية
                                <span class="required"> * </span>
                            </label>
                            <div class="col-md-9">
                                <div class="input-icon right">
                                    <i class="fa"></i>
                                    <textarea class="form-control" rows='5' name="content_ar"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">رأى الشركة بالإنجليزية
                                <span class="required"> * </span>
                            </label>
                            <div class="col-md-9">
                                <div class="input-icon right">
                                    <i class="fa"></i>
                                    <textarea class="form-control" rows='5' name="content_en"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">رأى الشركة باﻷردية
                                <span class="required"> * </span>
                            </label>
                            <div class="col-md-9">
                                <div class="input-icon right">
                                    <i class="fa"></i>
                                    <textarea class="form-control" rows='5' name="content_ur"></textarea>
                                </div>
                            </div>
                        </div>



                        <div class="form-group ">
                            <label class="control-label col-md-2"> الصورة  <span class="required"> * </span></label>
                            <div class="col-md-9">

                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                    <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;"> </div>
                                    <div>
                                        <span class="btn red btn-outline btn-file">
                                            <span class="fileinput-new"> صورة جديدة </span>
                                            <span class="fileinput-exists"> تغيير </span>
                                            <input type="file" name="image"> </span>
                                        <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> حذف </a>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="form-actions">
                            <div class="row">
                                <div class="col-md-offset-3 col-md-9">
                                    <button type="submit" class="btn green">حفظ</button>
                                </div>
                            </div>
                        </div>

                        <!-- END FORM-->
                    </div>
                </form>
            </div>
            <!-- END VALIDATION STATES-->
        </div>
    </div>
</div>
@stop


@section('plugins')
{!! HTML::script('assets/global/plugins/select2/js/select2.full.min.js') !!}
{!! HTML::script('assets/global/plugins/jquery-validation/js/jquery.validate.min.js') !!}
{!! HTML::script('assets/global/plugins/jquery-validation/js/additional-methods.min.js') !!}
{!! HTML::script('assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') !!}
{!! HTML::script('assets/global/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.js') !!}
{!! HTML::script('assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js') !!}
{!! HTML::script('assets/global/plugins/ckeditor/ckeditor.js') !!}
{!! HTML::script('assets/global/plugins/bootstrap-markdown/lib/markdown.js') !!}
{!! HTML::script('assets/global/plugins/bootstrap-markdown/js/bootstrap-markdown.js') !!}
{!! HTML::script('assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js') !!}
@stop
@section('scripts')
{!! HTML::script('assets/pages/scripts/validation/review.js') !!}
@stop
