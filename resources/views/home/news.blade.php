@extends("home.public.common")

@extends("home.public.common")
@section("title")
    杭州虎牛科技有限公司-服务器租用、服务器托管、机柜租用，西南地区最专业的数据中心服务提供商！
@endsection
@section("description")
    杭州虎牛科技有限公司
@endsection
@section("keywords")
    杭州虎牛科技有限公司,成都服务器租用，四川服务器租用，成都服务器托管，四川服务器托管，成都机柜租用
@endsection
@section("header_js")
@endsection
@section("style")
    <style type="text/css">
        div, input {
            font-family: "微软雅黑", "Microsoft Yahei", "Hiragino Sans GB", tahoma, arial, "宋体";
            font-weight: normal
        }
        .ui-dialog {
            padding: 0;
            border: none;
            background: #344157;
            color: #fff
        }
        .ui-dialog a {
            color: #fff
        }
        .ui-widget-header {
        }
        .ui-dialog-titlebar {
            background: #27303F;
            color: #fff;
            border: none;
            font-size: 18px;
            font-weight: normal;
            border-radius: 5px 5px 0 0
        }
        .ui-dialog-titlebar button.ui-dialog-titlebar-close {
            border: none;
            font-weight: normal;
            color: #555;
            width: 16px;
            height: 16px;
            border: none;
            overflow: hidden;
            text-indent: 200px;
            right: 15px;
            top: 25px
        }
        .ui-dialog-buttonpane {
            border: none
        }
        .unmntip {
            background: #fff;
            border: 5px solid #d2d2d2;
        }
        .unmntip .ui-dialog-titlebar {
            background: none;
            border-radius: 0;
            padding: 0
        }
        .unmntip #processing {
            text-align: center;
            clear: both;
            padding: 15px 0;
            overflow: hidden
        }
    </style>
@endsection
@section("content")
    <link rel='stylesheet' href="{{asset("Host/css/list.css")}}" type='text/css'  />
    <div class="wauto mCenter cl">
    <div class="sidebar fl">
        <div class="leftSide">
            <div class="" id="FloatMenu">
                <ul id="menu-about" class="catSide">
                    <li><a href="#"> 活动公告 </a>
                        <ul class="sub-menu" id="news-type">

                        </ul>
                    </li>
                </ul>
                <div class="blank20"></div>
            </div>
        </div>
    </div>
        <div class="rightSide fr">
        <div class="tit">
            <h1><a href="#">{{$menu->name}}</a></h1>
        </div>
            @yield("news_content")
    </div>
    </div>
    <div class="blank20"></div>
    <script type='text/javascript' src="{{asset("Host/js/base.js")}}"></script>
    <script type='text/javascript' src="{{asset("Host/js/index.js")}}"></script>
@endsection
@section("footer_js")
    <script type='text/javascript' src="{{asset("huniu/news.js")}}"></script>
@endsection
