@extends('admin.public.comm')
@section('admin')
    active
@endsection
@section('content')
    <div class="page-content">
        <!-- BEGIN PAGE HEAD-->
        <div class="page-head">
            <!-- BEGIN PAGE TITLE -->
            <div class="page-title">
                <h1>访问地域分析
                    <small>访问地域分析</small>
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
        <ul class="page-breadcrumb breadcrumb">
            <li>
                <a href="{{url('/index')}}">首页</a>
                <i class="fa fa-circle"></i>
            </li>
            <li>
                <span class="active">首页</span>
            </li>
        </ul>
        <!-- END PAGE BREADCRUMB -->
        <!-- BEGIN PAGE BASE CONTENT -->

        <div class="row">

            <div class="col-md-12 col-sm-6">
                <div class="portlet light bordered">
                    <div class="portlet-title">
                        <div class="caption ">
                            <span class="caption-subject font-dark bold uppercase">首页</span>
                            <span class="caption-helper">首页...</span>
                        </div>

                    </div>
                    <div class="portlet-body">
                        <h1 style="color: #0a6aa1">欢迎来到虎牛科技</h1>
                            {{--<img src="{{asset('assets/global/img/loading.gif')}}" alt="loading" id="loading_id" />--}}
                            {{--<div id="map_china" class="CSSAnimationChart"></div>--}}
                    </div>
                </div>
            </div>
        </div>
       {{-- <div class="row">

            <div class="col-md-12 col-sm-6">
                <div class="portlet light bordered">
                    <div class="portlet-title">
                        <div class="caption ">
                            <span class="caption-subject font-dark bold uppercase">落地页访问地域分布</span>
                            <span class="caption-helper">地域分析...</span>
                        </div>

                    </div>
                    <div class="portlet-body">
                        --}}{{--<img src="{{asset('assets/global/img/loading.gif')}}" alt="loading" id="visit_loading_id" />--}}{{--
                        <div id="visit_map_china" class="CSSAnimationChart"></div>
                    </div>
                </div>
            </div>
        </div>--}}

        <!-- END PAGE BASE CONTENT -->
    </div>

@endsection

@section('script')

@endsection