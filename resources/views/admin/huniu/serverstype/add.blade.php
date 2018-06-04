@extends('admin.public.comm')
{{--<link rel="stylesheet" type="text/css" href="{{asset('table/css/main.css')}}" />--}}
@section('serverstype')
    active
@endsection
@section('content')
    <div class="page-content">
        <!-- BEGIN PAGE HEAD-->
        <div class="page-head">
            <!-- BEGIN PAGE TITLE -->
            <div class="page-title">
                <h1>服务器机型
                    <small>服务器机型</small>
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
                <span class="active">服务器机型</span>
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
                                        <span class="caption-subject bold uppercase"> 新增服务器机型(bannar1980*400)</span>
                                    </div>
                                </div>
                                <div class="portlet-body">

                                    <form class="form-horizontal" role="form" action="{{url("admin/serverstype/store")}}" method="post">
                                        {!! csrf_field() !!}
                                        <div class="form-group">
                                            <label for="mode_add" class="col-sm-1 control-label">选择服务器</label>
                                            <div class="col-sm-7">
                                                <select name="mode" id="mode_add" class="form-control"></select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="mode_add" class="col-sm-1 control-label">高防服务器</label>
                                            <div class="col-sm-7">
                                                <select name="highanti" id="highanti_add" class="form-control">
                                                    <option value="0">非高防</option>
                                                    <option value="1">高防</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="title_add" class="col-sm-1 control-label">型号名称</label>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control" id="name_add"  name="name" placeholder="型号名称" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="title_add" class="col-sm-1 control-label">CPU</label>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control" id="cpu_add"  name="cpu" placeholder="请输入CPU信息" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="title_add" class="col-sm-1 control-label">内存</label>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control" id="memory_add"  name="memory" placeholder="请输入内存信息" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="title_add" class="col-sm-1 control-label">硬盘</label>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control" id="harddisk_add"  name="harddisk" placeholder="请输入硬盘信息" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="title_add" class="col-sm-1 control-label">带宽/流量</label>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control" id="bandwidth_add"  name="bandwidth" placeholder="带宽/流量" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="title_add" class="col-sm-1 control-label">IP支持</label>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control" id="ipnum_add"  name="ipnum" placeholder="IP支持" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="title_add" class="col-sm-1 control-label">服务标准</label>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control" id="stand_add"  name="stand" placeholder="服务标准" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="title_add" class="col-sm-1 control-label">价格</label>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control" id="price_add"  name="price" placeholder="价格" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="title_add" class="col-sm-1 control-label">规格</label>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control" id="size_add"  name="size" placeholder="规格" required>
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

