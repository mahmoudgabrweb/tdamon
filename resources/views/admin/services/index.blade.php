@extends('admin.app')
@section('title', ' | كل الخدمات')

@section('styles')
{!! HTML::style('assets/global/plugins/datatables/datatables.min.css') !!}
{!! HTML::style('assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap-rtl.css') !!}
{!! HTML::style('assets/global/css/components-rtl.min.css') !!}
{!! HTML::style('assets/global/css/plugins-rtl.min.css') !!}
{!! HTML::style('assets/global/plugins/bootstrap-toastr/toastr-rtl.min.css') !!}
@stop


@section('content')
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption font-dark">
                    <i class="icon-settings font-dark"></i>
                    <span class="caption-subject bold uppercase"> كل الخدمات</span>
                </div>

            </div>
            <div class="portlet-body">
                <div class="table-toolbar">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="btn-group">
                                <a href="{!! url('/admin/services/add') !!}" class="btn sbold green" id="sample_1_new">
                                    إضافة جديد
                                    <i class="fa fa-plus"></i>
                                </a>

                            </div>
                        </div>

                    </div>
                </div>
                <table class="table table-striped table-hover table-bordered" id="sample_editable_1">
                    <thead>
                        <tr>

                            <th> # </th>
                            <th> العنوان </th>
                            <th> الصورة </th>
                            <th> العمليات </th>
                        </tr>
                    </thead>
                    <tbody>

                        @php($i = 1)
                        @foreach($services as $one)
                        <tr class="odd gradeX tr_{{ $one->id }}">
                            <td> {{ $i }} </td>
                            <td> {{ $one->title_ar }} </td>
                            <td> <img src="{{ asset($one->image) }}" style="width: 80px;height: 80px;" /> </td>
                            <!--<td> <img src="{{}}" style="width: 80px;height: 80px;" /> </td>-->
                            <td>
                                <div class="btn-group">
                                    <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> عمليات
                                        <i class="fa fa-angle-down"></i>
                                    </button>
                                    <ul class="dropdown-menu pull-left" role="menu">
                                        <li>
                                            <a href="{!! url('/admin/services/edit/'.$one->id) !!}">
                                                <i class="icon-docs"></i> تعديل </a>
                                        </li>
                                        <li>
                                            <a class="delete_link" data-id="{!! $one->id !!}" href="{!! url('/admin/services/delete/'.$one->id) !!}">
                                                <i class="icon-tag"></i> حذف </a>
                                        </li>
                                        <!--                                        <li class="divider"> </li>
                                                                                <li>
                                                                                    <a    href="{!! url('/admin/services/slider/'.$one->id) !!}">
                                                                                        <i class="icon-flag"></i> السلايدر </a>
                                                                                </li>-->

                                    </ul>
                                </div>
                            </td>
                        </tr>
                        @php($i++)
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <!-- END EXAMPLE TABLE PORTLET-->
    </div>
</div>
@stop


@section('plugins')
{!! HTML::script('assets/global/scripts/datatable.js') !!}
{!! HTML::script('assets/global/plugins/datatables/datatables.min.js') !!}
{!! HTML::script('assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js') !!}
{!! HTML::script('assets/global/plugins/bootstrap-toastr/toastr.min.js') !!}
@stop
@section('scripts')
{!! HTML::script('assets/pages/scripts/table-datatables-editable.min.js') !!}
{!! HTML::script('assets/pages/scripts/files/general.js') !!}
{!! HTML::script('assets/pages/scripts/ui-toastr.min.js') !!}
@stop




