@extends('admin.public.comm')
{{--<link rel="stylesheet" type="text/css" href="{{asset('table/css/main.css')}}" />--}}
@section('menu')
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
                                    <form class="form-horizontal" role="form" action="{{url("admin/menu/update")}}" method="post">
                                        {!! csrf_field() !!}
                                        <input type="hidden" name="id" value="{{$datas->id}}">
                                        <div class="form-group">
                                            <label for="code_edit" class="col-sm-1 control-label">code</label>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control" id="code_edit"  name="code" value="{{$datas->code}}" placeholder="请输入code" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="name_edit" class="col-sm-1 control-label">显示名称</label>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control" id="name_edit"  name="name" value="{{$datas->name}}"placeholder="请输入显示名称" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="pcode_edit" class="col-sm-1 control-label">上级code</label>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control" id="pcode_edit"  name="pcode" value="{{$datas->pcode}}" placeholder="请输入上级code" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="href_edit" class="col-sm-1 control-label">跳转链接</label>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control" id="href_edit"  name="href" value="{{$datas->href}}" placeholder="请输入跳转链接" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="mode_edit" class="col-sm-1 control-label">分类</label>
                                            <div class="col-sm-7">
                                                <select name="mode" id="mode_edit" class="form-control"></select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="remark_edit" class="col-sm-1 control-label">备注</label>
                                            <div class="col-sm-7">
                                                <textarea name="remark" id="remark_edit"  style="width: 100%;height: 200px" required>{{$datas->remark}}</textarea>
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
    <script>
        var defaultVal = {{empty($datas["mode"])?"":$datas["mode"]}}
        fillSelectServer("all","mode_edit",defaultVal,true);
    </script>
    @endsection

