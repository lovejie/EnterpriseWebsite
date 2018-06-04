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
                <h1>菜单管理
                    <small>菜单管理</small>
                </h1>
            </div>
            <!-- END PAGE TITLE -->
            <!-- BEGIN PAGE TOOLBAR -->
            <div class="page-toolbar">
                {{--<div id="dashboard-report-range" class="pull-right tooltips btn btn-fit-height green" data-placement="top" data-original-title="Change dashboard date range">--}}
                    {{--<i class="icon-calendar"></i>&nbsp;--}}
                    {{--<span class="thin uppercase hidden-xs"></span>&nbsp;--}}
                    {{--<i class="fa fa-angle-down"></i>--}}
                {{--</div>--}}
                <!-- BEGIN THEME PANEL -->

                <!-- END THEME PANEL -->
            </div>
            <!-- END PAGE TOOLBAR -->
        </div>
        <!-- END PAGE HEAD-->
        <!-- BEGIN PAGE BREADCRUMB -->
        <ul class="page-breadcrumb breadcrumb pull-left">
            <li>
                <a href="{{url('/index')}}">首页</a>
                <i class="fa fa-circle"></i>
            </li>
            <li>
                <span class="active">菜单管理</span>
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
                                        <span class="caption-subject bold uppercase"> 查询</span>
                                    </div>
                                    <div class="btn btn-primary font-dark pull-right">
                                        <a href="{{url("admin/menu/add")}}" style="color: white">
                                            <i class="glyphicon glyphicon-plus"></i>新增</a>
                                    </div>
                                </div>
                                <form class="form-horizontal" role="form" action="{{url("admin/menu")}}" method="post">
                                    {!! csrf_field() !!}
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <label for="mode_add" class="col-sm-4 control-label">选择分类</label>
                                                <div class="col-sm-7">
                                                    <select name="mode" id="mode"  class="form-control"></select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <label for="name" class="col-sm-4 control-label">显示名称检索</label>
                                                <div class="col-sm-7">
                                                    <input name="name" id="name"  value="{{empty($cdatas["name"])?"":$cdatas["name"]}}" placeholder="显示名称检索" class="form-control"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <label for="code" class="col-sm-4 control-label">CODE检索</label>
                                                <div class="col-sm-7">
                                                    <input name="code" id="code"  value="{{empty($cdatas["code"])?"":$cdatas["code"]}}" placeholder="CODE检索" class="form-control"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <label for="pcode" class="col-sm-4 control-label">上级Code检索</label>
                                                <div class="col-sm-7">
                                                    <input name="pcode" id="pcode"  value="{{empty($cdatas["pcode"])?"":$cdatas["pcode"]}}" placeholder="上级Code检索" class="form-control"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <label for="href" class="col-sm-4 control-label">路由</label>
                                                <div class="col-sm-7">
                                                    <input name="href" id="href"  value="{{empty($cdatas["href"])?"":$cdatas["href"]}}"placeholder="路由" class="form-control"/>
                                                </div>
                                            </div>
                                        </div>
                                       {{-- <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <label for="pcode" class="col-sm-4 control-label">上级Code检索</label>
                                                <div class="col-sm-7">
                                                    <input name="pcode" id="pcode"  value="{{empty($cdatas["pcode"])?"":$cdatas["pcode"]}}" class="form-control"/>
                                                </div>
                                            </div>
                                        </div>--}}
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">

                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <div class="col-sm-offset-7 col-sm-4 pull-right">
                                                    <button type="submit" class="btn btn-primary">查询</button>
                                                    <button type="reset" class="btn btn-danger">重置</button>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </form>
                            </div>
                            <!-- END: Comments -->
                        </div>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane active" id="portlet_comments_1">
                            <!-- BEGIN: Comments -->
                            <div class="portlet light bordered">
                                <div class="portlet-title">
                                    <div class="caption font-dark">
                                        <i class="icon-settings font-dark"></i>
                                        <span class="caption-subject bold uppercase"> 菜单管理（menu为根菜单）</span>
                                    </div>
                                    <div class="btn btn-primary font-dark pull-right">
                                        <a href="{{url("admin/menu/add")}}" style="color: white">
                                            <i class="glyphicon glyphicon-plus"></i>新增</a>
                                    </div>
                                </div>

                                <div class="portlet-body">

                                    <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                                        <thead>
                                        <tr>
                                            <th> id </th>
                                            <th> code </th>
                                            <th> 显示名称 </th>
                                            <th> 上级code </th>
                                            <th> 跳转路由（链接） </th>
                                            <th> Mode </th>
                                            <th> 创建时间 </th>
                                            <th> 操作 </th>
                                        </tr>
                                        </thead>
                                        <tbody id="shuju">
                                        @foreach($menus as $key=>$menu)
                                            <tr class="odd gradeX">

                                                <td> {{$menu->id}}</td>
                                                <td> {{$menu->code}}</td>
                                                <td> {{$menu->name}}</td>
                                                <td> {{$menu->pcode}}</td>
                                                <td> {{$menu->href}}</td>
                                                <td> {{$menu->mode}}</td>
                                                <td> {{$menu->created_at}}</td>
                                                <td>
                                                    {{--<a href="" class="btn btn-default" data-toggle="modal" data-target="#myModal">查看</a>--}}
                                                    <a href="{{url("admin/menu/edit/$menu->id")}}" class="btn btn-default">修改</a>
                                                    <a href="{{url("admin/menu/del/$menu->id")}}" class="btn btn-danger">删除</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    {!! $menus->render() !!}
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
        var defaultVal = {{empty($cdatas["mode"])?"":$cdatas["mode"]}}
        fillSelectServer("all","mode",defaultVal,true);
    </script>

    @endsection

