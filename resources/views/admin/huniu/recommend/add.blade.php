@extends('admin.public.comm')
{{--<link rel="stylesheet" type="text/css" href="{{asset('table/css/main.css')}}" />--}}
@section('recommend')
    active
@endsection
@section('content')
    <div class="page-content">
        <!-- BEGIN PAGE HEAD-->
        <div class="page-head">
            <!-- BEGIN PAGE TITLE -->
            <div class="page-title">
                <h1>首页推荐
                    <small>首页推荐</small>
                </h1>
            </div>
            <!-- END PAGE TITLE -->
            <!-- BEGIN PAGE TOOLBAR -->
            <div class="page-toolbar">

                <!-- BEGIN THEME PANEL -->

                <!-- END THEME PANEL -->
            </div>
            <!-- END PAGE TOOLBAR -->
        </div>
        <!-- END PAGE HEAD-->
        <!-- BEGIN PAGE BREADCRUMB -->
        <ul class="page-breadcrumb breadcrumb pull-left">
            <li>
                <a href="{{url('/admin')}}">首页</a>
                <i class="fa fa-circle"></i>
            </li>
            <li>
                <span class="active">首页推荐</span>
            </li>
        </ul>
        <!-- END PAGE BREADCRUMB -->
        <!-- BEGIN PAGE BASE CONTENT -->

        <div class="row">
            <div class="col-md-12 col-sm-6">

                <div class="portlet-body">
                    <div class="tab-content">
                        <div class="tab-pane active" id="portlet_comments_1">
                            <!-- BEGIN: Comments -->
                            <div class="portlet light bordered">
                                <div class="portlet-title">
                                    <div class="caption font-dark">
                                        <i class="icon-settings font-dark"></i>
                                        <span class="caption-subject bold uppercase"> 首页推荐</span>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <form class="form-horizontal" role="form" action="{{url("admin/recommend/store")}}" enctype="multipart/form-data" method="post">
                                        {!! csrf_field() !!}
                                        <div class="form-group">
                                            <label for="mode_add" class="col-sm-1 control-label">选择服务器</label>
                                            <div class="col-sm-7">
                                                <select name="bizid" id="mode_add" class="form-control"></select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="title_add" class="col-sm-1 control-label">CODE</label>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control" id="code_add"  name="code" placeholder="CODE" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="title_add" class="col-sm-1 control-label">跳转链接</label>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control" id="href_add"  name="href" placeholder="跳转链接">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="title_add" class="col-sm-1 control-label">图片</label>
                                            <div class="col-sm-7">
                                                <input type="file" class="form-control" id="img_add"  name="img" placeholder="图片">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="remark_add" class="col-sm-1 control-label">备注信息</label>
                                            <div class="col-sm-7">
                                                <textarea  class="form-control" id="remark_add"  name="remark" style="width: 100%; height: 200px"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-offset-7 col-sm-5 pull-right">
                                                <button type="submit" class="btn btn-primary">提交</button>
                                                <button type="reset" class="btn btn-danger">重置</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- END: Comments -->
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- END PAGE BASE CONTENT -->
    </div>

@endsection

@section('script')
    <script src="{!! asset('public/laravel-ueditor/ueditor.config.js') !!}"></script>
    <script src="{!! asset('public/laravel-ueditor/ueditor.all.min.js') !!}"></script>
    {{-- 载入语言文件,根据laravel的语言设置自动载入 --}}
    <script src="{!! asset($UeditorLangFile) !!}"></script>
    <script>
        fillSelectServer("server","mode_add");
    </script>
    @endsection

