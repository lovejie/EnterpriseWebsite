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
                    <small>不同规格类型服务器的信息配置</small>
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
                                        <span class="caption-subject bold uppercase"> 查询</span>
                                    </div>
                                    <div class="btn btn-primary font-dark pull-right">
                                        <a href="{{url("admin/serverstype/add")}}" style="color: white"> <i class="glyphicon glyphicon-plus"></i>
                                            新增</a>
                                    </div>
                                </div>
                                <form class="form-horizontal" role="form" action="{{url("admin/serverstype")}}" method="post">
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
                                                <label for="mode_add" class="col-sm-4 control-label">机型名称检索</label>
                                                <div class="col-sm-7">
                                                    <input name="name" id="name"  value="{{empty($cdatas["name"])?"":$cdatas["name"]}}" placeholder="机型名称检索" class="form-control"/>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <label for="cpu" class="col-sm-4 control-label">CPU/国内规格防御</label>
                                                <div class="col-sm-7">
                                                    <input name="cpu" id="cpu"  value="{{empty($cdatas["cpu"])?"":$cdatas["cpu"]}}" placeholder="CPU/国内规格防御" class="form-control"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <label for="memory" class="col-sm-4 control-label">内存/国外规格防御</label>
                                                <div class="col-sm-7">
                                                    <input name="memory" id="memory"  value="{{empty($cdatas["memory"])?"":$cdatas["memory"]}}" placeholder="内存/国外规格防御" class="form-control"/>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <label for="harddisk" class="col-sm-4 control-label">硬盘/CC攻击防御</label>
                                                <div class="col-sm-7">
                                                    <input name="harddisk" id="harddisk"  value="{{empty($cdatas["harddisk"])?"":$cdatas["harddisk"]}}" placeholder="硬盘/CC攻击防御"  class="form-control"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <label for="price_min" class="col-sm-4 control-label">价格区间</label>
                                                <div class="col-sm-7">

                                                    <div class="col-md-6 col-sm-6">
                                                        <input name="price_min" id="price_min"  value="{{empty($cdatas["price_min"])?"":$cdatas["price_min"]}}" placeholder="最低价格" class="form-control"/>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6">
                                                        <input name="price_max" id="price_max"  value="{{empty($cdatas["price_max"])?"":$cdatas["price_max"]}}" placeholder="最高价格" class="form-control"/>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <label for="highanti" class="col-sm-4 control-label">高防服务器</label>
                                                <div class="col-sm-7">
                                                    <select name="highanti" id="highanti" class="form-control">
                                                        <option value="">全部</option>
                                                        <option value="0">非高防</option>
                                                        <option value="1">高防</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
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
                                        <span class="caption-subject bold uppercase"> 服务器机型</span>
                                    </div>
                                </div>
                                <div class="portlet-body">

                                    <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                                        <thead>
                                        <tr>
                                            <th> id </th>
                                            <th> 机型名称 </th>
                                            <th> CPU/国内规格防御 </th>
                                            <th> 内存/国外规格防御 </th>
                                            <th> 硬盘/CC攻击防御 </th>
                                            <th> 带宽/流量/洁净流量 </th>
                                            <th> IP/防护IP </th>
                                            {{--<th> 默认服务标准/防御域名数量 </th>--}}
                                            <th> 价格 </th>
                                            <th> 规格 </th>
                                            <th> 分类 </th>
                                            <th> 创建时间 </th>
                                            <th> 操作 </th>
                                        </tr>
                                        </thead>
                                        <tbody id="shuju">
                                        @foreach($datas as $key=>$data)
                                            <tr class="odd gradeX">
                                                <td> {{$data->id}}</td>
                                                <td> {{$data->name}}</td>
                                                <td> {{$data->cpu}}</td>
                                                <td> {{$data->memory}}</td>
                                                <td> {{$data->harddisk}}</td>
                                                <td> {{$data->bandwidth}}</td>
                                                <td> {{$data->ipnum}}</td>
                                                {{--<td> {{$data->stand}}</td>--}}
                                                <td> {{$data->price}}</td>
                                                <td> {{$data->size}}</td>
                                                <td> {{$data->hasOneMenu["name"]}}</td>
                                                <td> {{$data->created_at}}</td>
                                                <td>
                                                    {{--<a href="" class="btn btn-default" data-toggle="modal" data-target="#myModal">查看</a>--}}
                                                    <a href="{{url("admin/serverstype/edit/$data->id")}}" class="btn btn-default">修改</a>
                                                    <a href="{{url("admin/serverstype/del/$data->id")}}" class="btn btn-danger">删除</a>
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

        <!-- 模态框（Modal） -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content" style="width: 680px;">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel">查看活动公告</h4>
                    </div>
                    <div class="modal-body">
                        <form class="form-horizontal" role="form">
                            <div class="form-group">
                                <label for="title_add" class="col-sm-2 control-label">标题</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="title_add" placeholder="请输入标题">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="mode_add" class="col-sm-2 control-label">公告类型</label>
                                <div class="col-sm-10">
                                    <select name="mode" id="mode_add" class="form-control"></select>
                                    {{--<input type="text" class="form-control" id="lastname" placeholder="请输入姓">--}}
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="contents_add" class="col-sm-2 control-label">正文</label>
                                <div class="col-sm-10">
                                    <textarea name="contents" id="contents_add" ></textarea>
                                    {{--<input type="text" class="form-control" id="lastname" placeholder="请输入姓">--}}
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox"> 请记住我
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn btn-default">登录</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                        <button type="button" class="btn btn-primary">提交更改</button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal -->
        </div>
        <!-- END PAGE BASE CONTENT -->
    </div>

@endsection

@section('script')

    <script>
        var highanti = {{empty($cdatas["highanti"])?"":$cdatas["highanti"]}}
        $("#highanti").val(highanti);
        var defaultVal = {{empty($cdatas["mode"])?"":$cdatas["mode"]}}
        fillSelectServer("server","mode",defaultVal,true);
    </script>
    @endsection

