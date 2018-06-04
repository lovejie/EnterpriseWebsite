<!DOCTYPE html>
<!--
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.6
Version: 4.5.5
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->

<head>
    <meta charset="utf-8" />
    <title>杭州虎牛科技有限公司</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/global/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <link href="{{asset('assets/global/plugins/morris/morris.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/global/plugins/fullcalendar/fullcalendar.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN THEME GLOBAL STYLES -->
    <link href="{{asset('assets/global/css/components.min.css')}}" rel="stylesheet" id="style_components" type="text/css" />
    <link href="{{asset('assets/global/css/plugins.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- END THEME GLOBAL STYLES -->
    <!-- BEGIN THEME LAYOUT STYLES -->
    <link href="{{asset('assets/layouts/layout4/css/layout.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/layouts/layout4/css/themes/light.min.css')}}" rel="stylesheet" type="text/css" id="style_color" />
    <link href="{{asset('assets/layouts/layout4/css/custom.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- END THEME LAYOUT STYLES -->
    <link rel="shortcut icon" href="favicon.ico" /> </head>
    <script>
        var ctx = "{{url()}}";
    </script>
<!-- END HEAD -->

<body class="page-container-bg-solid page-header-fixed page-sidebar-closed-hide-logo">
<!-- BEGIN HEADER -->
<div class="page-header navbar navbar-fixed-top">
    <!-- BEGIN HEADER INNER -->
    <div class="page-header-inner ">
        <!-- BEGIN LOGO -->
        <div class="page-logo">
            {{-- <a href="#">
                <img src="{{asset('Host/images/logo.png')}}" alt="logo" class="logo-default"  /> </a>--}}
            {{--<div class="menu-toggler sidebar-toggler">--}}
                {{--<!-- DOC: Remove the above "hide" to enable the sidebar toggler button on header -->--}}
            {{--</div>--}}
        </div>

        <!-- END LOGO -->
        <div class="page-top">
            <!-- BEGIN HEADER SEARCH BOX -->
            <!-- DOC: Apply "search-form-expanded" right after the "search-form" class to have half expanded search box -->
           {{-- <form class="search-form" action="page_general_search_2.html" method="GET">
                <div class="input-group">
                    <input type="text" class="form-control input-sm" placeholder="Search..." name="query">
                            <span class="input-group-btn">
                                <a href="javascript:;" class="btn submit">
                                    <i class="icon-magnifier"></i>
                                </a></span>
                </div>
            </form>--}}
            <!-- END HEADER SEARCH BOX -->
            <!-- BEGIN TOP NAVIGATION MENU -->
            <div class="top-menu" style="margin-top: 10px">
                <a href="{{url("admin/logout")}}" class="btn btn-primary">退出</a>
            </div>
            <div class="top-menu">
                <ul class="nav navbar-nav pull-right">

                    <li class="separator hide"> </li>

                </ul>
            </div>
            <!-- END TOP NAVIGATION MENU -->
        </div>
        <!-- END PAGE TOP -->
    </div>
    <!-- END HEADER INNER -->
</div>
<!-- END HEADER -->
<!-- BEGIN HEADER & CONTENT DIVIDER -->
<div class="clearfix"> </div>
<!-- END HEADER & CONTENT DIVIDER -->
<!-- BEGIN CONTAINER -->
<div class="page-container">
    <!-- BEGIN SIDEBAR -->
    <div class="page-sidebar-wrapper">
        <!-- BEGIN SIDEBAR -->
        <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
        <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
        <div class="page-sidebar navbar-collapse collapse">
            <ul class="page-sidebar-menu   " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
                <li class="nav-item start active open">
                    <a href="javascript:;" class="nav-link nav-toggle">
                        <i class="icon-home"></i>
                        <span class="title">管理后台</span>
                        <span class="selected"></span>
                        <span class="arrow open"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item start @yield('admin') ">
                            <a href="{{url('/admin')}}" class="nav-link ">
                                <i class="icon-bar-chart"></i>
                                <span class="title">首页</span>
                                <span class="selected"></span>
                            </a>
                        </li>
                        <li class="nav-item start @yield('recommend')">
                            <a href="{{url('admin/recommend')}}" class="nav-link ">
                                <i class="icon-pointer"></i>
                                <span class="title">首页推荐 </span>
                                <span class="badge badge-danger"></span>
                            </a>
                        </li>
                        <li class="nav-item start @yield('menu')">
                            <a href="{{url('admin/menu')}}" class="nav-link ">
                                <i class="icon-pointer"></i>
                                <span class="title">菜单管理 </span>
                                <span class="badge badge-danger"></span>
                            </a>
                        </li>
                        <li class="nav-item start @yield('servers')">
                            <a href="{{url('admin/servers')}}" class="nav-link ">
                                <i class="icon-pointer"></i>
                                <span class="title">服务器简介信息 </span>
                                <span class="badge badge-danger"></span>
                            </a>
                        </li>
                        <li class="nav-item start @yield('serverstype')">
                            <a href="{{url('admin/serverstype')}}" class="nav-link ">
                                <i class="icon-pointer"></i>
                                <span class="title">服务器机型 </span>
                                <span class="badge badge-danger"></span>
                            </a>
                        </li>
                        <li class="nav-item start @yield('activity') ">
                            <a href="{{url('admin/news')}}" class="nav-link ">
                                <i class="icon-bulb"></i>
                                <span class="title">活动公告管理</span>
                                <span class="badge badge-success"></span>
                            </a>
                        </li>


                       {{-- <li class="nav-item start ">
                            <a href="{{url('regionalAnalysis')}}" class="nav-link ">
                                <i class="icon-pointer"></i>
                                <span class="title">注册地域分析</span>
                                <span class="badge badge-danger"></span>
                            </a>
                        </li>--}}

                    </ul>
                </li>
            </ul>
            <!-- END SIDEBAR MENU -->
        </div>
        <!-- END SIDEBAR -->
    </div>
    @if(!empty(session('msg')))
    {!! session('msg') !!}
    @endif
    <!-- END SIDEBAR -->
    <!-- BEGIN CONTENT -->
    <div class="page-content-wrapper">
        <!-- BEGIN CONTENT BODY -->
      @yield('content')
        <!-- END CONTENT BODY -->
    </div>
    <!-- END CONTENT -->
    <!-- BEGIN QUICK SIDEBAR -->


    <!-- END QUICK SIDEBAR -->
</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
<div class="page-footer">
    <div class="page-footer-inner">
        {{--2014 &copy; Metronic by keenthemes.--}}
        {{--<a href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes" title="Purchase Metronic just for 27$ and get lifetime updates for free" target="_blank">Purchase Metronic!</a>--}}
    </div>
    <div class="scroll-to-top">
        <i class="icon-arrow-up"></i>
    </div>
</div>
<!-- END FOOTER -->
<!--[if lt IE 9]>
<script src="{{asset('assets/global/plugins/respond.min.js')}}"></script>
<script src="{{asset('assets/global/plugins/excanvas.min.js')}}"></script>
<![endif]-->
<!-- BEGIN CORE PLUGINS -->
<script src="{{asset('assets/global/plugins/jquery.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/global/plugins/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/global/plugins/js.cookie.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/global/plugins/jquery.blockui.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js')}}" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="{{asset('assets/global/plugins/moment.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/global/plugins/morris/morris.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/global/plugins/morris/raphael-min.js')}}" type="text/javascript"></script>

<script src="{{asset('assets/global/plugins/fullcalendar/fullcalendar.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/global/plugins/jquery.sparkline.min.js')}}" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN THEME GLOBAL SCRIPTS -->
<script src="{{asset('assets/global/scripts/app.min.js')}}" type="text/javascript"></script>
<!-- END THEME GLOBAL SCRIPTS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
{{--<script src="{{asset('assets/pages/scripts/dashboard.js')}}" type="text/javascript"></script>--}}
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME LAYOUT SCRIPTS -->
<script src="{{asset('assets/layouts/layout4/scripts/layout.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/layouts/layout4/scripts/demo.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/layouts/global/scripts/quick-sidebar.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/common.js')}}" type="text/javascript"></script>

@yield('script')
<!-- END THEME LAYOUT SCRIPTS -->
</body>

</html>