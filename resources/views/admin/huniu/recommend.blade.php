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
                <h1>首页推荐{{env("CTX")}}
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
                                        <span class="caption-subject bold uppercase"> 查询</span>
                                    </div>
                                    <div class="btn btn-primary font-dark pull-right">
                                        <a href="{{url("admin/recommend/add")}}" style="color: white"> <i class="glyphicon glyphicon-plus"></i>
                                            新增</a>
                                    </div>
                                </div>
                                <form class="form-horizontal" role="form" action="{{url("admin/recommend")}}" method="post">
                                    {!! csrf_field() !!}
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <label for="mode_add" class="col-sm-4 control-label">选择分类</label>
                                                <div class="col-sm-7">
                                                    <select name="bizid" id="mode"  class="form-control"></select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <label for="name" class="col-sm-4 control-label">CODE检索</label>
                                                <div class="col-sm-7">
                                                    <input name="name" id="name"  value="{{empty($cdatas["code"])?"":$cdatas["code"]}}" placeholder="CODE检索" class="form-control"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <label for="href" class="col-sm-4 control-label">链接</label>
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
                                        <span class="caption-subject bold uppercase"> 首页推荐</span>
                                    </div>
                                </div>
                                <div class="portlet-body">

                                    <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                                        <thead>
                                        <tr>
                                            <th> id </th>
                                            <th> code </th>
                                            <th> 链接 </th>
                                            <th> 图片 </th>
                                            {{--<th> 模型 </th>--}}
                                            <th> 业务id </th>
                                            <th> 推荐服务器名称 </th>
                                            <th> 备注信息 </th>
                                            <th> 创建时间 </th>
                                            <th> 操作 </th>
                                        </tr>
                                        </thead>
                                        <tbody id="shuju">
                                        @foreach($datas as $key=>$data)
                                            <tr class="odd gradeX">
                                                <td> {{$data->id}}</td>
                                                <td> {{$data->code}}</td>
                                                <td> {{$data->href}}</td>
                                                <td>   <img src="{{asset($data->img)}}" alt="" style="width:100px"></td>
                                                <td> {{$data->bizid}}</td>
                                                <td> {{$data->hasOneMenu['name']}}</td>
                                                <td> {{mb_substr($data->remark,0,20)}}</td>
                                                <td> {{$data->created_at}}</td>
                                                <td>
                                                    {{--<a href="" class="btn btn-default" data-toggle="modal" data-target="#myModal">查看</a>--}}
                                                    <a href="{{url("admin/recommend/edit/$data->id")}}" class="btn btn-default">修改</a>
                                                    <a href="{{url("admin/recommend/del/$data->id")}}" class="btn btn-danger">删除</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    {!! $datas->render() !!}
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
        fillSelectServer("server","mode",defaultVal,true);
    </script>

    @endsection

