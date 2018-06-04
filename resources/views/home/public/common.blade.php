<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml">

<!-- Mirrored from www.1ue.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 18 Jun 2017 07:50:08 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8">
    <title>@yield("title")</title>
    <meta name="description" content="@yield("description")" />
    <meta name="keywords" content="@yield("keywords")" />
    <meta name="viewport" content="width=device-width" initial-scale=1.0>
    <meta name="csrf_token" content="{{ csrf_token() }}" />
    <script type='text/javascript' src="{{asset("Host/js/jquery.min.js")}}"></script>
    <script type='text/javascript' src="{{asset("Host/js/jquery.rotate.min.js")}}"></script>
    <script type='text/javascript' src="{{asset("Host/js/jquery.anoslide.js")}}"></script>
    <script src="{{asset("Host/js/jquery.soChange.js")}}" type="text/javascript"></script>
    <!-- 通过自有函数输出HTML头部信息 -->
    <meta name="description" content="The best leading IDC provider!" />
    <meta name="generator" content="Typecho 1.0/14.10.10" />
    <meta name="template" content="Host" />
   {{-- <link rel="pingback" href="action/xmlrpc.html" />
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="action/xmlrpc0db0.html?rsd" />
    <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="action/xmlrpc2ace.html?wlw" />
    <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="feed/index.html" />
    <link rel="alternate" type="application/rdf+xml" title="RSS 1.0" href="feed/rss/index.html" />
    <link rel="alternate" type="application/atom+xml" title="ATOM 1.0" href="feed/atom/index.html" />--}}
</head>
<body>
<!--no-cache-->
<link rel="stylesheet" href="{{asset("Host/css/jquery.ui.min.css")}}" type="text/css"/>
<script type="text/javascript" src="{{asset("Host/js/jquery.ui.min.js")}}"></script>
<script type="text/javascript" src="{{asset("Host/js/common.js")}}"></script>
<script type="text/javascript" src="{{asset("Host/js/process.js")}}"></script>
<script>
    var ctx = "{{url()}}";
</script>
@yield("header_js")
@yield("style")
<div class="w" id="header">
    <div class="wauto mCenter" >
        <div id="logo"><a href="/"></a></div>
        <div class="navbox"><a href="#"></a></div>
        <div id="nav">
            <ul id="menu-topnav" class="navTop">
               {{-- <li class="current-menu-item"><a href="{{url("/")}}"><span>首页</span></a></li>
                <li><a href="annoucement/index.html"><span>新闻动态</span></a>
                    <div class="child-box">
                        <div class="child-box2">
                            <dl class="sub-menut">
                                <dt><a href="annoucement/index.html"><span>公司公告</span></a></dt>
                                <dt><a href="news/index.html"><span>行业新闻</span></a></dt>
                                <dt><a href="helpcenter/index.html"><span>帮助中心</span></a></dt>
                                <dt><a href="specialoffer/index.html"><span>最新活动</span></a></dt>
                            </dl>
                            <div class="blank10"></div>
                        </div>
                    </div>
                </li>
                <li><a href="cdcolo.html"><span>服务器托管</span></a>
                    <div class="child-box">
                        <div class="child-box2">
                            <dl class="sub-menut">
                                <dt><a href="cdcolo.html">成都电信</a></dt>
                                <dt><a href="cdydcolo.html">成都移动</a></dt>
                                <dt><a href="gzcolo.html">贵州电信</a></dt>
                                <dt><a href="sccolo.html">四川电信</a></dt>
                                <dt><a href="scltcolo.html">四川联通</a></dt>
                                <dt><a href="hkcolo.html">香港多线</a></dt>
                                <dt><a href="uscolo.html">美国多线</a></dt>
                            </dl>
                            <div class="blank10"></div>
                        </div>
                    </div>
                </li>
                <li><a href="antiddos.html"><span>高防服务器</span></a> </li>
                <li>
                    <a href="cnzy.html"><span>国内服务器</span></a>
                    <div class="child-box">
                        <div class="child-box2">
                            <dl class="sub-menut">
                                <dt><a href="cdzy.html">成都服务器</a></dt>
                                <dt><a href="gzzy.html">贵州服务器</a></dt>
                            </dl>
                            <div class="blank10"></div>
                        </div>
                    </div>

                </li>
                <li><a href="uszy.html"><span>国外服务器</span></a>

                    <div class="child-box">
                        <div class="child-box2">
                            <dl class="sub-menut">
                                <dt><a href="uszy.html">美国机房</a></dt>
                                <dt><a href="krzy.html">韩国机房</a></dt>
                                <dt><a href="hkzy.html">香港机房</a></dt>
                                <dt><a href="uszqzy.html">美国站群服务器</a></dt>
                                <dt><a href="hkzqzy.html">香港站群服务器</a></dt>
                            </dl>
                            <div class="blank10"></div>
                        </div>
                    </div>
                </li>
                <li><a href="about.html"><span>关于我们</span></a>
                    <div class="child-box">
                        <div class="child-box2">
                            <dl class="sub-menut">
                                <dt><a href="about.html"><span>关于我们</span></a></dt>
                                <dt><a href="pay.html"><span>在线支付</span></a></dt>
                                <dt><a href="hr.html"><span>招贤纳士</span></a></dt>
                                <dt><a href="contact.html"><span>联系我们</span></a></dt>
                                <dt><a href="term.html" target="_blank" rel="nofollow"><span>服务条款</span></a></dt>
                            </dl>
                            <div class="blank10"></div>
                        </div>
                    </div>
                </li>--}}
            </ul>
            <div id="swin" style="display:none"></div>
            <div id="suwin" style="display:none"></div>
            <div id="processing" style="display:none;"></div>
        </div>
    </div>
</div>
@yield("content")
<script type='text/javascript' src="{{asset("Host/js/base.js")}}"></script>
<script type='text/javascript' src="{{asset("Host/js/index.js")}}"></script>
<div class="w" id="footer">
    <div class="wauto mCenter">
        <dl>
            <dt>关注我们</dt>
            <dd><a href="about.html" rel="nofollow">关于我们</a></dd>
            <dd><a href="partner.html" rel="nofollow">合作伙伴</a></dd>
            <dd><a href="hr.html" rel="nofollow">加入我们</a></dd>
            <dd><a href="pay.html" rel="nofollow">在线支付</a></dd>
            <dd><a href="contact.html" rel="nofollow">联系我们</a></dd>
        </dl>
        <dl>
            <dt>推荐产品</dt>
            <dd><a href="cdzy.html">成都服务器租用</a></dd>
            <dd><a href="antiddos.html">高防服务器租用</a></dd>
            <dd><a href="hkzy.html" >香港服务器租用</a></dd>
            <dd><a href="uszqzy.html">美国站群服务器</a></dd>
            <dd><a href="hkzqzy.html">香港站群服务器</a></dd>

        </dl>
        <dl>
            <dt>管理中心</dt>
            <dd><a href="https://my.1ue.com/" target="_blank" rel="nofollow">客户中心</a></dd>
            <dd><a href="http://beian.cloudradium.com/" target="_blank" rel="nofollow">备案系统</a></dd>
            <dd><a href="helpcenter/index.html" target="_blank" rel="nofollow">帮助中心</a></dd>


        </dl>
        <dl class="contactText">
            <dt>联系我们</dt>
            <dd>地址：成都市建材路37号隆鑫玖熙3期1栋21楼15-18号</dd>
            <dd>7x24小时：4006-39-4008 028-86285555</dd>
            <dd>投诉建议：advise^1ue.com(请将^换成@)</dd>
            <dd class="follow">
                <div class="qz_bubble" id="wechat_like" style="display: none;">
                    <div class="bubble_i"> <img src="{{asset("Host/images/erweima.jpg")}}"> </div>
                    <b class="bubble_trig ui_trigbox ui_trigbox_b"> <b class="ui_trig"></b> <b class="ui_trig ui_trig_up"></b> </b> </div>
                <a href="javascript:void(0);" onclick="return false;" onmouseover="document.getElementById('wechat_like').style.display='block';" onmouseout="document.getElementById('wechat_like').style.display='none';" class="ico-wechat"></a> <a href="#" target="_blank" rel="nofollow" title="云镭腾讯微博" class="ico-weibo"></a> <a href="#" rel="nofollow" target="_blank" title="云镭新浪微博" class="ico-sina"></a>
                <div class="bdsharebuttonbox"><a href="#" rel="nofollow" target="_blank" title="云镭百度贴吧" class="bds_more" data-cmd="more"></a></div>

            </dd>
        </dl>
        <div class="cl"></div>
    </div>
</div>
<div class="w" id="footerB">
    <div class="wauto mCenter">
        <div class="footsafe"><a href="#" target="_blank" rel="nofollow"><img src="{{asset("Host/images/gs.png")}}" /></a>&nbsp;<a href="#" target="_blank" rel="nofollow"><img src="{{asset("Host/images/buliang.png")}}" /></a>&nbsp;
            <a href="#" target="_blank" rel="nofollow"><img src="{{asset("Host/images/12321.png")}}" /></a>&nbsp;
            <a href="#" target="_blank"><img src="{{asset("Host/images/icpba.png")}}" /></a></div>
        <p class="copy">杭州虎牛科技有限公司 版权所有   <a href="http://www.miitbeian.gov.cn/" target="_blank" rel="nofollow">蜀ICP备15005025号</a></p>
        <p class="copy"><a href="{{asset("Host/images/isp.jpg")}}" target="_blank" rel="nofollow">中国人民共和国电信增值业务许可证 川B1.B2-2015001</a></p>
        <p class="copy">Copyright &copy; 2015 虎牛科技 1ue.com , All Rights Reserved</p>
        <p class="copy">虎牛供应商：<a href="#" target="_blank">Arbor防火墙</a> － <a href="#" target="_blank">金盾防火墙</a> － <a href="#" target="_blank">戴尔DCS</a> － <a href="#" target="_blank">VEDNS</a>  安全软件推荐： <a href="#" target="_blank">服务器安全狗</a></p>
    </div>
</div>
<div class="main-im">
    <div id="open_im" class="open-im">&nbsp;</div>
    <div class="im_main" id="im_main">
        <div id="close_im" class="close-im"><a href="javascript:void(0);" title="点击关闭">&nbsp;</a></div>
        <a href="http://wpa.qq.com/msgrd?v=3&amp;uin=3001635180&amp;site=qq&amp;menu=yes" target="_blank" class="im-qq qq-a" title="在线QQ客服">
            <div class="qq-container"></div>
            <div class="qq-hover-c"><img class="img-qq" src="{{asset("Host/images/qq.png")}}"></div>
            <span>QQ在线咨询</span>
        </a>
        <div class="im-tel">
            <dt>售前咨询热线</dt>
            <dt class="tel-num">028-86285555</dt>
            <dt>售后服务热线</dt>
            <dt class="tel-num">028-61563898</dt>
        </div>
        <div class="im-footer" style="position:relative">
            <div class="weixing-container">
                <div class="weixing-show">
                    <div class="weixing-txt">微信扫一扫<br>关注公众号<br>获取最新优惠</div>
                    <img class="weixing-ma" src="{{asset("Host/images/weixin.jpg")}}">
                    <div class="weixing-sanjiao"></div>
                    <div class="weixing-sanjiao-big"></div>
                </div>
            </div>
            <div class="go-top"><a href="javascript:;" title="返回顶部"></a> </div>
            <div style="clear:both"></div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $('#close_im').bind('click',function(){
        $('#main-im').css("height","0");
        $('#im_main').hide();
        $('#open_im').show();
    });
    $('#open_im').bind('click',function(e){
        $('#main-im').css("height","272");
        $('#im_main').show();
        $(this).hide();
    });
    $('.go-top').bind('click',function(){
        $(window).scrollTop(0);
    });
    $(".weixing-container").bind('mouseenter',function(){
        $('.weixing-show').show();
    })
    $(".weixing-container").bind('mouseleave',function(){
        $('.weixing-show').hide();
    });
</script><!-- 通过自有函数输出HTML底部信息 -->
<script src="{{asset("huniu/common.js")}}"></script>
@yield("footer_js")
</body>

<!-- Mirrored from www.1ue.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 18 Jun 2017 07:51:14 GMT -->
</html>