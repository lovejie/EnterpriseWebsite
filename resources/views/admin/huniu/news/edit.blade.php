@extends('admin.public.comm')
{{--<link rel="stylesheet" type="text/css" href="{{asset('table/css/main.css')}}" />--}}
@section('activity')
    active
@endsection
@section('content')
    <div class="page-content">
        <!-- BEGIN PAGE HEAD-->
        <div class="page-head">
            <!-- BEGIN PAGE TITLE -->
            <div class="page-title">
                <h1>活动公告管理
                    <small>活动公告管理</small>
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
                <span class="active">活动公告管理</span>
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
                                        <span class="caption-subject bold uppercase"> 修改公告</span>
                                    </div>
                                </div>
                                <div class="portlet-body">

                                    <form class="form-horizontal" role="form" action="{{url("admin/news/update")}}" method="post">
                                        {!! csrf_field() !!}
                                        <input type="hidden" name="id" value="{{$news->id}}">
                                        <div class="form-group">
                                            <label for="title_add" class="col-sm-1 control-label">标题</label>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control" id="title_add" value="{{$news->title}}" name="title"  required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="mode_add" class="col-sm-1 control-label">公告类型</label>
                                            <div class="col-sm-7">
                                                <select name="mode" id="mode_add" class="form-control"></select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="contents_add" class="col-sm-1 control-label">正文</label>
                                            <div class="col-sm-7">
                                                <textarea name="contents" id="contents_add"  required>{!! $news->contents !!}</textarea>
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
    <script src="{!! asset('laravel-ueditor/ueditor.config.js') !!}"></script>
    <script src="{!! asset('laravel-ueditor/ueditor.all.min.js') !!}"></script>
    {{-- 载入语言文件,根据laravel的语言设置自动载入 --}}
    <script src="{!! asset($UeditorLangFile) !!}"></script>
    <script>
        fillSelectServer("news","mode_add",{{$news->mode}});
        var ue = UE.getEditor('contents_add', {
            initialFrameWidth : 900,
            initialFrameHeight : 400,
        });
        ue.ready(function() {
            {{--ue.setContent({!! $news->contents !!});--}}
            //此处为支持laravel5 csrf ,根据实际情况修改,目的就是设置 _token 值.
            ue.execCommand('serverparam', '_token', '{{ csrf_token() }}');

        });
    </script>
    @endsection

