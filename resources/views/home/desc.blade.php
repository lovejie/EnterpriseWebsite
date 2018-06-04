
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
    <link rel='stylesheet' href="{{asset("Host/css/index.css")}}" type='text/css'  />
    <link href="{{asset("Host/css/tuoguan.css")}}" rel="stylesheet" type="text/css" />
    <div class="wauto mCenter cl">

        <div class="catitme">
            <ul>
                @foreach($servers as $server)
                <li data-pgid='7'><a href="{{url("/vps/desc?mode=$server->id")}}">{{$server->name}}</a></li>
                @endforeach
            </ul>
            <div class="blank20"></div>
        </div>
        <!--中间调用部分开始-->
        {!! $desc->desc !!}
        <!--中间调用部分结束-->
    </div>
    <div class="blank20"></div>
@endsection
@section("footer_js")

@endsection
