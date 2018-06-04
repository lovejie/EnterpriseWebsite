
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
    {{--<link rel='stylesheet' href="{{asset("Host/css/index.css")}}" type='text/css'  />--}}
    <link href="{{asset("Host/css/server.css")}}" rel="stylesheet" type="text/css" />
    <div class="wauto mCenter cl">

        <div class="catitme">
            <ul>
                @foreach($servers as $s)
                <li data-pgid='7'><a href="{{url("vps?p=$s->pcode&mode=$s->id")}}">{{$s->name}}</a></li>
                @endforeach
            </ul>
            <div class="blank20"></div>
        </div>
        <script>
            // // $('.catitme li:first').addClass('on');
            // $('.catitme li').each(function(i) {
            //     var _gpid=$(this).attr('data-pgid');
            //     if(gpid==_gpid){
            //         $(this).addClass('on').siblings().removeClass('on');
            //     }
            //
            // });
        </script>

        <div class="blank20"></div>
        <div class="desjf">
            <div class="tit tab_tit"> <a href="#" class="on"><b class="font-unmn">&#xe081;</b>机房简介</a> <a href="#jx"><b class="font-unmn">&#xe107;</b>可选机型</a> <a href="#zz"><b class="font-unmn">&#x1f381;</b>增值服务</a> </div>
            <div class="con">
                <dl>
                    <dt>机房介绍</dt>
                    <dd>机房位于波特兰数据中心，拥有240Gbps超大出口，有效保障网络的稳定性和高速性，Juniper MX 240高端交换机路由器支撑IDC内部骨干网络，和多家运营商通过BGP互联，确保联通效率。</dd>
                </dl>
                <dl>
                    <dt>测试IP</dt>
                    <dd>162.218.54.*（为保证高防品质，禁止PING）</dd>
                </dl>

            </div>
        </div>
        <div class="blank20"></div>
        <div class="ctitle" id="jx"><b class="font-unmn">&#xe107;</b>可选机型</div>
        <div class="blank20"></div>
        <div class="goodsbox">
            <div class="tit">
                <ul>
                    <li class="g0">CPU</li>
                    <li>内存</li>
                    <li>硬盘</li>
                    <li>带宽/流量</li>
                    <li>IP</li>
                    <li>DDOS防御</li>
                    <li class="price">价格</li>
                </ul>
            </div>
            <div class="con">

            @foreach($serversType as $item)
                <ul>
                    <li class="g0">{{$item->cpu}}</li>
                    <li class="g1"> <b>内存：{{$item->memory}}</b><b>硬盘：{{$item->harddisk}}</b><b>端口：{{$item->bandwidth}}</b><b>IP地址：{{$item->ipnum}}</b><b>DDOS防御:{{$item->stand}}</b></li>

                    <li class="price">
                        <span>{{$item->price}}</span>{{$item->size}}
                    </li>
                    <li class="buy">  <input type="button" name="hostbuy" value="马上购买" onclick="placeOrder(0, '?c=order&ptype=4&pg=14&pid=128')" /></li>
                </ul>
            @endforeach

            </div>
        </div>
        <div class="blank20"></div>
        <div class="ctitle" id="zz"><b class="font-unmn">&#x1f381;</b>增值服务</div>
        <div class="blank20"></div>
        <div class="desjf">
            <div class="tit tab_tit" id="tab"> <a href="javascript:;" class="on"><b class="font-unmn">&#x57;</b>操作系统</a> <a href="javascript:;"><b class="font-unmn">&#x1f514;</b>注意事项</a> <a href="javascript:;"><b class="font-unmn">&#xe821;</b>增加IP地址 </a> <a href="javascript:;"><b class="font-unmn">&#xe7a2;</b>内存与硬盘</a> <a href="javascript:;"><b class="font-unmn">&#xf0ed;</b>带宽与流量</a> <a href="javascript:;"><b class="font-unmn">&#xf132;</b>硬件/防火墙</a> </div>
            <div class="cons">
                <div class="tab_con" style="display:block">
                    <ul>
                        <li class="g0">Centos 6/7</li>
                        <li>免费提供</li>
                    </ul>
                    <ul>
                        <li class="g0">Debian系列</li>
                        <li>免费提供</li>
                    </ul>
                    <ul>
                        <li class="g0">其他开源Linux系统</li>
                        <li>免费提供</li>
                    </ul>
                    <ul>
                        <li class="g0">Windows 2008R2/2012R2企业版</li>
                        <li>人民币240元/月</li>
                    </ul>
                </div>
                <div class="tab_con" >
                    <div class="blank20"></div>
                    <div class="x1a_t">
                        <p class="exo" style="color:#cc0000;">上架时间：</p>
                        <p class="emo" style="color:#cc0000;"><a href="server/A_frd_ST.html">成都服务器</a>的上架时间为24小时，超过72小时免费一个月时长。</p>
                    </div>
                    <div class="x1a_t">
                        <p class="exo">业务续费：</p>
                        <p class="emo">本公司所有服务器须提前两天完成续费</p>
                    </div>
                    <div class="x1a_t">
                        <p class="exo">机房IP段：</p>
                        <p class="emo">162.218.54.*</p>
                    </div>
                    <div class="x1a_t">
                        <p class="exo">测试IP：</p>
                        <p class="emo">162.218.54.1</p>
                    </div>
                    <div class="x1a_t">
                        <p class="exo">价格注意事项：</p>
                        <p class="emo">以上列表中的均是成都电信服务器租用默认配置价格，如有增加配置则另行收费</p>
                    </div>
                    <div class="x1a_t">
                        <p class="exo">禁止说明：</p>
                        <p class="emo">本站所有<a href="index.html">服务器</a>均谢绝放置垃圾邮件(SPAM)、政治、色情、诈骗、赌博类内容，如发现立即中止服务器租用合同，余款不退。</p>
                    </div>
                    <div class="x1a_t">
                        <p class="exo">特别提示：</p>
                        <p class="emo">我公司遵从严格保密和对客户尊重原则，对我司所有服务器租用产品，请客户自行定期备份数据，以免造成不可挽回的损失。</p>
                    </div>
                    <div class="blank20"></div>
                </div>


                <div class="tab_con">
                    <ul>
                        <li class="g0">额外增加1个IP</li>
                        <li>1200元/月</li>
                    </ul>

                    <ul>
                        <li class="g0">额外增加2个IP</li>
                        <li>2200元/月</li>
                    </ul>


                    <ul>
                        <li class="g0">额外增加3个IP</li>
                        <li>3000元/月</li>
                    </ul>


                    <ul>
                        <li class="g0">额外增加4个IP</li>
                        <li>3500元/月</li>
                    </ul>
                </div>



                <div class="tab_con">
                    <ul>
                        <li class="g0">增加8G DDR3 ECC内存</li>
                        <li>150元/月</li>
                    </ul>

                    <ul>
                        <li class="g0">增加1TB企业级硬盘</li>
                        <li>150元/月</li>
                    </ul>


                    <ul>
                        <li class="g0">增加256G 企业级SSD</li>
                        <li>180元/月</li>
                    </ul>


                    <ul>
                        <li class="g0">增加4TB企业级硬盘</li>
                        <li>240元/月</li>
                    </ul>
                </div>


                <div class="tab_con">
                    <ul>
                        <li class="g0">升级为300M独享</li>
                        <li>2000元/月</li>
                    </ul>

                    <ul>
                        <li class="g0">额外增加100M骨干带宽</li>
                        <li>4000元/月</li>
                    </ul>


                    <ul>
                        <li class="g0">额外增加500M骨干带宽</li>
                        <li>18000元/月</li>
                    </ul>


                    <ul>
                        <li class="g0">额外增加100M骨干带宽/li>
                        <li>电询</li>
                    </ul>
                </div>


                <div class="tab_con">
                    <ul>
                        <li class="g0">1Gbps独享硬件防火墙</li>
                        <li>10000元/年</li>
                    </ul>

                    <ul>
                        <li class="g0">2Gbps独享硬件防火墙</li>
                        <li>15000元/年</li>
                    </ul>


                    <ul>
                        <li class="g0">10Gbps独享硬件防火墙</li>
                        <li>50000元/年</li>
                    </ul>


                    <ul>
                        <li class="g0">50G集群黑洞防护</li>
                        <li>70000元/年</li>
                    </ul>
                </div>

                <div class="blank20"></div>
            </div>
        </div>
    <script type="text/javascript">

        $('#tab a').click(function(){
            var _index=$(this).index();

            $(this).addClass('on').siblings().removeClass('on');
            $('.cons .tab_con').eq(_index).fadeIn(200).siblings().hide();
        });

    </script>
    </div>
    <div class="blank20"></div>
@endsection
@section("footer_js")

@endsection
