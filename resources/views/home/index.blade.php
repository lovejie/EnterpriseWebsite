
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
    <div class="w mCenter cl slide_container" id="slide">
        <ul id="slider" class="rslides">
            @foreach($bannar as $b)
                <li  style="background:url({{url("$b->img")}}) no-repeat top center #FFF;">
                    <a href="javascript:" target="_blank">&nbsp&nbsp</a>'
            @endforeach
        </ul>
        <ul class="rslides_tabs rslides1_tabs">

        </ul>
        <a href="#" class="rslides_nav rslides1_nav prev"></a><a href="#" class="rslides_nav rslides1_nav next"></a> </div>
    <script>

      /*  var bannerUrlList = 'javascript:；|javascript:；|javascript:；|javascript:；|'.split('|');

        for (i = 0; i < bannerUrlList.length; i++) {
            if (bannerUrlList[i] != '') {
                $('#slider').append(' <li  style="background:url(Host/images/banner0' + (i + 1) + '.jpg) no-repeat top center #FFF;"><a href="' + bannerUrlList[i] + '" target="_blank">&nbsp&nbsp</a>');
                $('.rslides_tabs').append('<li><a href="#" ></a></li>');
            }
        }*/

        $('.rslides li').soChange({
            thumbObj:'.rslides_tabs li',
            autoChange:true,
            thumbOverEvent:false,
            changeTime:10000,
            slideTime:1800,
            thumbNowClass:'rslides_here',
            botPrev:'#slide .prev',
            botNext:'#slide .next',
        });
    </script>
    <div class="wauto mCenter cl">
        <div class="blank20"></div>
        <div class="Features">
            @foreach($bannardown as $bd)
            <dl class="webico">
                <dt> <a href="cdcolo.html">
                        <h3>{{$bd->hasOneMenu['name']}}</h3>
                        <img src="{{asset("$bd->img")}}" />
                    </a></dt>
                <dd><a href="cdcolo.html">立即租用</a></dd>
            </dl>
            @endforeach

        </div>

        <div class="blank20"></div>
        <div class="tab_rec">
            <h3><b class="font-unmn">&#x1f3c6;</b>精品推荐</h3>
            <div class="tab_tit fr">
                @foreach($recommends as $key => $recommend)
                    <a href="javascript:;" class="{{$key == 0?"on":""}}">{{$recommend->name}}</a>
                @endforeach
            </div>
        </div>
        <div class="blank20"></div>
        <div class="cons">
            @foreach($recommends as $key => $recommend)
                <div class="mod_yun" style="{{$key == 0?"display: block":""}}">
                    @if(!empty($recommend->hasManyType))
                        @foreach($recommend->hasManyType as $key => $type)
                            @if($type->highanti == 1)
                                <dl class="{{$key == 0?"frist":""}}">
                                    <dt>{{$type->name}}</dt>
                                    <dd class="price"><span>{{$type->price}}</span>{{$type->size}}</dd>
                                    <dd class="buy"><a href="idcSystemeb19.html?c=order&amp;pg=11&amp;ptype=7&amp;pid=39">立即购买</a></dd>
                                    <dd><label>国内规格防御：</label><span>{{$type->cpu}}</span></dd>
                                    <dd><label>国外规格防御：</label><span>{{$type->memory}}</span></dd>
                                    <dd><label>CC攻击防御：</label><span>{{$type->harddisk}}</span></dd>
                                    <dd><label>洁净流量：</label><span>{{$type->bandwidth}}</span></dd>
                                    <dd><label>防护IP：</label><span>{{$type->ipnum}}</span></dd>
                                    <dd><label>防御域名数量：</label><span>{{$type->stand}}</span></dd>
                                </dl>
                                @else
                                <dl class="{{$key == 0?"frist":""}}">
                                    <dt>{{$type->name}}</dt>
                                    <dd class="price"><span>{{$type->price}}</span>{{$type->size}}</dd>
                                    <dd class="buy"><a href="#">立即购买</a></dd>
                                    <dd><label>中央处理器:</label><span>{{$type->cpu}}</span></dd>
                                    <dd><label>内存大小：</label><span>{{$type->memory}}</span></dd>
                                    <dd><label>硬盘：</label><span>{{$type->harddisk}}</span></dd>
                                    <dd><label>带宽、IP：</label><span>{{$type->bandwidth}}/{{$type->ipnum}}</span></dd>
                                    <dd><label>{{$type->stand}}</label></dd>
                                </dl>
                                @endif

                        @endforeach
                    @endif
                </div>
             @endforeach


        </div>
        <script type="text/javascript">
            $('.tab_tit a').click(function(){
                var _index=$(this).index();

                $(this).addClass('on').siblings().removeClass('on');
                $('.cons .mod_yun').eq(_index).fadeIn(200).siblings().hide();
            });

        </script>
        <div class="blank10"></div>
        <div class="w585 fl">
            <div class="tit">
                <h1><a href="news526a.html?nid=2">优惠活动</a></h1>
            </div>
            <div class="blank10"></div>
            <div class="borpadd sale">
                <ul class="saleCon">
                    <li>
                        <dl>
                            <dt>
                                <h4>2015年12月1日起至12月30日止</h4>
                                <h3><a href="uszy.html">独立服务器买10个月送8个月：</a></h3>
                                <h5>活动内容：</h5>
                                <p>美国洛杉矶E3-1230 V2/16G/1TB/100M/5IP买1年送6个月,折合443元/月[查看详情]</p>
                            </dt>
                            <dd><a href="uszy.html"><img src="Host/images/wKhQMFHbgpOEIPAcAAAAAHAlSoc577.jpg" /></a></dd>
                        </dl>
                    </li>
                    <li>
                        <dl>
                            <dt>
                                <h4>成都电信租用－买3年送1年！</h4>
                                <h3><a href="cdzy.html">企业用户专属：</a></h3>
                                <h5>活动内容：</h5>
                                <p>全部采用企业级戴尔服务器，中国电信骨干带宽，稳定高速之选，助力企业成长.[查看详情]</p>
                            </dt>
                            <dd><a href="cdzy.html"><img src="Host/images/cloud.jpg" /></a></dd>
                        </dl>
                    </li>
                    <li>
                        <dl>
                            <dt>
                                <h4>2015年12月28日起至2016年2月20日止</h4>
                                <h3><a href="vhost.html">购买香港服务器免费赠送IP地址：</a></h3>
                                <h5>活动内容：</h5>
                                <p>原价购买云镭科技香港服务器租用，可以获得免费29个可用IP地址，先代先得，赠完为止。[<a href="hkzy.html">[查看详情]</a></p>
                            </dt>
                            <dd><a href="hkzy.html"><img src="Host/images/01300000242726126335803918547.jpg"/></a></dd>
                        </dl>
                    </li>
                    <li>
                        <dl>
                            <dt>
                                <h4>备案专员让您无忧备案（无需邮寄资料）</h4>
                                <h3><a href="cdzy.html" target="_blank">备案不用愁，云镭成都服务器租用“备多久送多久”：</a></h3>
                                <h5>活动内容：</h5>
                                <p>选购成都电信服务器可以享受安心备案服务，备案期间时间免费赠送！[查看详情]</p>
                            </dt>
                            <dd><a href="cdzy.html" target="_blank"><img src="Host/images/beian.jpg" /></a></dd>
                        </dl>
                    </li>
                </ul>
            </div>
        </div>
        <div class="w585 fr">
            <div class="tit">
                <h1><a href="web.html">建站服务</a></h1>
            </div>
            <div class="blank10"></div>
            <div class="borpadd webServic">
                <ul>
                    <li>
                        <div class="webimg"><A href="#"><img src="Host/images/cx1.gif" /></A></div>
                        <div class="webtxt">绝大部分传统企业网站不能很好的获取搜索引擎排名，盈利模式模糊不清晰，目标客户群不够聚焦，直接导致询盘量极低，无销售业绩，网站做完极少访问量！<br />
                            <Br />
                            我们做的不只是网站，帮您轻松启动您的网络赚钱机器。<a href="#">了解详情>></a></div>
                    </li>
                    <li>
                        <div class="webimg"><A href="index.html#"><img src="Host/images/cx2.gif" /></A></div>
                        <div class="webtxt">根据客户提供网站的风格开发或转制为WordPress、PHPCMS、DISCUZ、ECSHOP、DEDECMS网站主题程序;云镭科技不承担仿制网站导致的任何版权问题和其他纠纷;<br />
                            <Br />
                            提供各大CMS、社区、博客模板定制与销售。<a href="#">了解详情>></a></div>
                    </li>
                    <li>
                        <div class="webimg"><A href="#" target="_blank"><img src="Host/images/cx3.gif" /></A></div>
                        <div class="webtxt">微信拥有5亿庞大的用户群，借助移动终端、天然的社交和位置定位等优势，每个信息都是可以推送的，能够让每个个体都有机会接收到这个信息，继而帮助商家实现点对点精准化营销。<Br />
                            <Br />
                            抓住5亿微信用户与11亿手机用户，您准备好了吗? <a href="#" target="_blank">马上去了解，并且使用>></a></div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="blank10"></div>
        <div class="tit">
            <h1><a href="index.html">经典客户展示</a></h1>
        </div>
        <div class="blank10"></div>
        <div class="borpadd custom">
            <ul>
                <li><a href="#" target="_blank">
                        <div class="hdpic"><img src="{{asset("Host/images/1.jpg")}}"  /></div>
                        <div class="txt">知名户外行业门户网站——装备之都</div>
                    </a></li>
                <li><a href="#" target="_blank">
                        <div class="hdpic"><img src="{{asset("Host/images/2.jpg")}}"  /></div>
                        <div class="txt">海尔文化平台登陆界面UI</div>
                    </a></li>
                <li><a href="#" target="_blank">
                        <div class="hdpic"><img src="{{asset("Host/images/4.jpg")}}"  /></div>
                        <div class="txt">新浪旅游大型专题——企鹅的感动</div>
                    </a></li>
                <li><a href="#" target="_blank">
                        <div class="hdpic"><img src="{{asset("Host/images/5.jpg")}}"  /></div>
                        <div class="txt">革命老前辈夏征农网上纪念馆</div>
                    </a></li>
                <li><a href="#" target="_blank">
                        <div class="hdpic"><img src="{{asset("Host/images/6.jpg")}}"  /></div>
                        <div class="txt">华蓥·好视立官方网站</div>
                    </a></li>
                <li><a href="#" target="_blank">
                        <div class="hdpic"><img src="{{asset("Host/images/7.jpg")}}"  /></div>
                        <div class="txt">B2C网站——盘石有机农场</div>
                    </a></li>
                <li><a href="#" target="_blank">
                        <div class="hdpic"><img src="{{asset("Host/images/8.jpg")}}"  /></div>
                        <div class="txt">B2C网站——MT时尚服装商城</div>
                    </a></li>
            </ul>
            <a  class="nexts"></a> <a  class="previous"></a> </div>
        <div class="blank10"></div>
        <div class="w585 fl">
            <div class="tit">
                <h1><a href="annoucement/index.html" target="_blank">公司动态</a></h1>
            </div>
            <div class="blank10"></div>
            <div class="borpadd articleNews">
                <ul>
                    <!--控制显示网站的最新5篇文章-->
                    <li><span>2016/02/02 22:30:32</span><a href="annoucement/2016newyear.html" title="云镭科技关于2016年春节放假的通知" target="_blank"><label>></label>云镭科技关于2016年春节放假的通知</a></li>
                    <li><span>2015/12/12 21:43:00</span><a href="annoucement/newwebUI.html" title="网站改版中--2015年12月20日" target="_blank"><label>></label>网站改版中--2015年12月20日</a></li>
                </ul>
                <div class="blank10"></div>
            </div>
        </div>
        <div class="w585 fr">
            <div class="tit">
                <h1><a href="#">客户分享</a></h1>
            </div>
            <div class="blank10"></div>
            <div class="borpadd case"> <i class="subT"></i> <i class="subB"></i> <a   class="nexts"></a> <a   class="previous"></a>
                <ul>
                    <li>
                        <div class="text-say">
                            <p class="text">我们把每一个网站、每一个域名、每一个数据都放到云目录。主要是云镭科技的高质量服务，高效快速的服务器，高性价比，让我对云镭科技的每一样产品充满了自信。</p>
                            <p class="text-author">——成都某高校 网站负责人 覃先生</p>
                        </div>
                        <div class="text-show">
                            <p class="text-img"><a href="#"><img src="{{asset("Host/images/222.jpg")}}" /></a></p>
                            <div class="text-sevice">
                                <h3>四川某高校官方网站</h3>
                                <p>使用产品：<a href="web.html">网站制作</a> <a href="#">国内CN域名</a> <a href="cdzy.html">成都服务器租用</a>  </p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="text-say">
                            <p class="text">我们第一次将服务器维护托管出去，但是虎牛科技给了我们稳定的服务，网站的小问题云镭技术人员也给我们解决得很快，从没有怨言。</p>
                            <p class="text-author">——深深频道 网站负责人 付先生</p>
                        </div>
                        <div class="text-show">
                            <p class="text-img"><a href="#"><img src="{{asset("Host/images/222.jpg")}}" /></a></p>
                            <div class="text-sevice">
                                <h3>中国产业信息网－深深频道</h3>
                                <p>使用产品：<a href="hkzy.html">香港服务器</a> <a href="service.html">运维服务</a></p>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="blank10"></div>
            </div>
        </div>
        <div class="blank20"></div>
    </div>
    <script type='text/javascript' src="{{asset("Host/js/base.js")}}"></script>
    <script type='text/javascript' src="{{asset("Host/js/index.js")}}"></script>
@endsection
@section("footer_js")

    @endsection
