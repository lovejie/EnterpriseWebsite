<?php
/**
 * 自定义首页模板
 *
 * @package custom
 */
 if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>
<link rel='stylesheet' href="<?php $this->options->themeUrl('/css/index.css'); ?>" type='text/css'  />
<div class="w mCenter cl slide_container" id="slide">
  <ul id="slider" class="rslides">
    
  </ul>
  <ul class="rslides_tabs rslides1_tabs">
 
  </ul>
  <a href="#" class="rslides_nav rslides1_nav prev"></a><a href="#" class="rslides_nav rslides1_nav next"></a> </div>
<script>

    var bannerUrlList = 'javascript:；|javascript:；|javascript:；|javascript:；|'.split('|');

    for (i = 0; i < bannerUrlList.length; i++) {
        if (bannerUrlList[i] != '') {
            $('#slider').append(' <li  style="background:url(/Host/images/banner0' + (i + 1) + '.jpg) no-repeat top center #FFF;"><a href="' + bannerUrlList[i] + '" target="_blank">&nbsp&nbsp</a>');
            $('.rslides_tabs').append('<li><a href="#" ></a></li>');
        }
    }

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
    <dl class="webico">
      <dt> <a href="/cdcolo.html">
        <h3>服务器托管</h3>
        <img src="<?php $this->options->themeUrl('/images/webico.png'); ?>" />
         </a></dt>
      <dd><a href="/cdcolo.html">了解详情</a></dd>
    </dl>
    <dl>
      <dt><a href="/antiddos.html" >
        <h3>高防服务器租用</h3>
        <img src="<?php $this->options->themeUrl('/images/Safeico.png'); ?>" />
         </a></dt>
 
      </dt>
      <dd><a href="/antiddos.html" >立即租用</a></dd>
    </dl>
    <dl>
      <dt><a href="/cdzy.html">
        <h3>成都服务器租用</h3>
        <img src="<?php $this->options->themeUrl('/images/eleico.png'); ?>" />
         </a></dt>
      
      </dt>
      <dd><a href="/cdzy.html">立即租用</a></dd>
    </dl>
    <dl>
      <dt><a href="/gzzy.html">
        <h3>贵州服务器租用</h3>
        <img src="<?php $this->options->themeUrl('/images/severico.png'); ?>" />
         </a></dt>
 
      </dt>
      <dd><a href="/gzzy.html">立即租用</a></dd>
    </dl>
    <dl>
      <dt><a href="/uszqzy.html">
        <h3>站群服务器租用</h3>
        <img src="<?php $this->options->themeUrl('/images/appico.png'); ?>" />
         </a></dt>
 
      </dt>
      <dd><a href="/uszqzy.html">立即租用</a></dd>
    </dl>
  </div>
  
   <div class="blank20"></div>
  <div class="tab_rec"> 
  <h3><b class="font-unmn">&#x1f3c6;</b>精品推荐</h3> 
   <div class="tab_tit fr"> 
   <a href="javascript:;" class="on">高防服务器</a>
   <a href="javascript:;">成都服务器租用</a>
   <a href="javascript:;">贵州服务器租用</a> 
   <a href="javascript:;">韩国服务器租用</a> 
   <a href="javascript:;">美国站群服务器</a> 
   <a href="javascript:;">香港站群服务器</a> 
   </div>  
  </div>
<div class="blank20"></div>
<div class="cons">
<!--高防服务器---开始-->
<div class="mod_yun" style="display: block">
<dl class="frist">
 <dt>常规云防御[1]型</dt>
<dd class="price"><span>3500</span>元/月</dd>
<dd class="buy"><a href="idcSystem.aspx?c=order&pg=11&ptype=7&pid=42">立即购买</a></dd>
<dd><label>国内规格防御：</label><span>20Gbps/s</span></dd>
<dd><label>国外规格防御：</label><span>20Gbps/s</span></dd>
<dd><label>CC攻击防御：</label><span>无限防御CC攻击</span></dd>
<dd><label>洁净流量：</label><span>10M/秒</span></dd>
<dd><label>防护IP：</label><span>独享IP</span></dd>
<dd><label>防御域名数量：</label><span>不限制</span></dd>
</dl>

<dl>
 <dt>常规云防御[2]型</dt>
<dd class="price"><span>6500</span>元/月</dd>
<dd class="buy"><a href="idcSystem.aspx?c=order&pg=11&ptype=7&pid=41">立即购买</a></dd>
<dd><label>国内规格防御：</label><span>40Gbps/s</span></dd>
<dd><label>国外规格防御：</label><span>40Gbps/s</span></dd>
<dd><label>CC攻击防御：</label><span>无限防御CC攻击</span></dd>
<dd><label>洁净流量：</label><span>20M/秒</span></dd>
<dd><label>防护IP：</label><span>独享IP</span></dd>
<dd><label>防御域名数量：</label><span>不限制</span></dd>
</dl>

<dl>
 <dt>常规云防御[3]型</dt>
<dd class="price"><span>9999</span>元/月</dd>
<dd class="buy"><a href="idcSystem.aspx?c=order&pg=11&ptype=7&pid=40">立即购买</a></dd>
<dd><label>国内规格防御：</label><span>80Gbps/s</span></dd>
<dd><label>国外规格防御：</label><span>80Gbps/s</span></dd>
<dd><label>CC攻击防御：</label><span>无限防御CC攻击</span></dd>
<dd><label>洁净流量：</label><span>100M/秒</span></dd>
<dd><label>防护IP：</label><span>独享IP</span></dd>
<dd><label>防御域名数量：</label><span>不限制</span></dd>
</dl>

<dl>
 <dt>超高云防御[1]型</dt>
<dd class="price"><span>19999</span>元/月</dd>
<dd class="buy"><a href="idcSystem.aspx?c=order&pg=11&ptype=7&pid=39">立即购买</a></dd>
<dd><label>国内规格防御：</label><span>150Gbps/s</span></dd>
<dd><label>国外规格防御：</label><span>150Gbps/s</span></dd>
<dd><label>CC攻击防御：</label><span>无限防御CC攻击</span></dd>
<dd><label>洁净流量：</label><span>1000M/秒</span></dd>
<dd><label>防护IP：</label><span>独享IP</span></dd>
<dd><label>防御域名数量：</label><span>不限制</span></dd>
</dl>
 </div> 
 <!--高防服务器租用---结束-->
 
 <!--成都服务器租用---开始-->
<div class="mod_yun">
<dl class="frist">
 <dt>经济型</dt>
<dd class="price"><span>5999</span>元/年</dd>
<dd class="buy"><a href="">立即购买</a></dd>
<dd><label>中央处理器:</label><span>至强 X3450 2.6Ghz</span></dd>
<dd><label>内存大小：</label><span>8G DDR3 ECC</span></dd>
<dd><label>硬盘：</label><span>1TB SATA2</span></dd>
<dd><label>带宽、IP：</label><span>100M共享/免费1IP</span></dd>
<dd><label>支持远程管理，7*24小时服务</label></dd>
</dl>

<dl>
 <dt>企业入门级</dt>
<dd class="price"><span>6999</span>元/年</dd>
<dd class="buy"><a href="">立即购买</a></dd>
<dd><label>中央处理器:</label><span>至强 E3-1230 V2 3.2Ghz</span></dd>
<dd><label>内存大小：</label><span>8G DDR3 ECC</span></dd>
<dd><label>硬盘：</label><span>1TB SATA2企业级硬盘</span></dd>
<dd><label>带宽、IP：</label><span>100M共享/免费1IP</span></dd>
<dd><label>支持远程管理，7*24小时服务</label></dd>
</dl>

<dl>
 <dt>企业高速级</dt>
<dd class="price"><span>6999</span>元/年</dd>
<dd class="buy"><a href="">立即购买</a></dd>
<dd><label>中央处理器:</label><span>至强 E3-1230 V2 3.2Ghz</span></dd>
<dd><label>内存大小：</label><span>8G DDR3 ECC</span></dd>
<dd><label>硬盘：</label><span>256G 固态硬盘</span></dd>
<dd><label>带宽、IP：</label><span>100M共享/免费1IP</span></dd>
<dd><label>支持远程管理，7*24小时服务</label></dd>
</dl>

<dl>
 <dt>企业性能级</dt>
<dd class="price"><span>17999</span>元/年</dd>
<dd class="buy"><a href="">立即购买</a></dd>
<dd><label>中央处理器:</label><span>两颗 至强 E5-2660</span></dd>
<dd><label>内存大小：</label><span>32G DDR3 RECC</span></dd>
<dd><label>硬盘：</label><span>2块1TB SATA3</span></dd>
<dd><label>带宽、IP：</label><span>20M独享/免费1IP</span></dd>
<dd><label>支持远程管理，7*24小时服务</label></dd>
</dl>
 </div> 
 <!--成都服务器租用---结束-->
 
 
 <!--贵州服务器租用---开始-->
<div class="mod_yun">
<dl class="frist">
 <dt>经济型</dt>
<dd class="price"><span>299</span>元/月</dd>
<dd class="buy"><a href="">立即购买</a></dd>
<dd><label>中央处理器:</label><span>酷睿 I3 2120</span></dd>
<dd><label>内存大小：</label><span>4G DDR3 ECC</span></dd>
<dd><label>硬盘：</label><span>500G SATA2</span></dd>
<dd><label>带宽、IP：</label><span>10M独享/免费1IP</span></dd>
<dd><label>支持远程管理，7*24小时服务</label></dd>
</dl>

<dl>
 <dt>经济型</dt>
<dd class="price"><span>299</span>元/月</dd>
<dd class="buy"><a href="">立即购买</a></dd>
<dd><label>中央处理器:</label><span>酷睿 I3 2120</span></dd>
<dd><label>内存大小：</label><span>4G DDR3 ECC</span></dd>
<dd><label>硬盘：</label><span>120G SSD</span></dd>
<dd><label>带宽、IP：</label><span>10M独享/免费1IP</span></dd>
<dd><label>支持远程管理，7*24小时服务</label></dd>
</dl>

<dl>
 <dt>高性能</dt>
<dd class="price"><span>399</span>元/月</dd>
<dd class="buy"><a href="">立即购买</a></dd>
<dd><label>中央处理器:</label><span>至强E3-1230 V2 3.2Ghz</span></dd>
<dd><label>内存大小：</label><span>8G DDR3 ECC</span></dd>
<dd><label>硬盘：</label><span>500G SATA2</span></dd>
<dd><label>带宽、IP：</label><span>15M独享/免费1IP</span></dd>
<dd><label>支持远程管理，7*24小时服务</label></dd>
</dl>

<dl>
 <dt>高性能</dt>
<dd class="price"><span>399</span>元/月</dd>
<dd class="buy"><a href="">立即购买</a></dd>
<dd><label>中央处理器:</label><span>至强E3-1230 V2 3.2Ghz</span></dd>
<dd><label>内存大小：</label><span>8G DDR3 ECC</span></dd>
<dd><label>硬盘：</label><span>120G SSD</span></dd>
<dd><label>带宽、IP：</label><span>15M独享/免费1IP</span></dd>
<dd><label>支持远程管理，7*24小时服务</label></dd>
</dl>
 </div> 
 <!--贵州服务器租用---结束-->
 
 
 <!--韩国服务器租用---开始-->
<div class="mod_yun">
<dl class="frist">
 <dt>经济型-I</dt>
<dd class="price"><span>799</span>元/月</dd>
<dd class="buy"><a href="">立即购买</a></dd>
<dd><label>中央处理器:</label><span>至强E3-1230 V2 3.2Ghz</span></dd>
<dd><label>内存大小：</label><span>8G DDR3 ECC</span></dd>
<dd><label>硬盘：</label><span>100G SATA3</span></dd>
<dd><label>带宽、IP：</label><span>10M独享/免费1IP</span></dd>
<dd><label>免备案、带宽大、速度快！</label></dd>
</dl>

<dl>
 <dt>经济型-II</dt>
<dd class="price"><span>1199</span>元/月</dd>
<dd class="buy"><a href="">立即购买</a></dd>
<dd><label>中央处理器:</label><span>2颗 至强L5630</span></dd>
<dd><label>内存大小：</label><span>8G DDR3 ECC</span></dd>
<dd><label>硬盘：</label><span>100G SATA3*2</span></dd>
<dd><label>带宽、IP：</label><span>10M独享/免费1IP</span></dd>
<dd><label>免备案、带宽大、速度快！</label></dd>
</dl>

<dl>
 <dt>高性能-I</dt>
<dd class="price"><span>1399</span>元/月</dd>
<dd class="buy"><a href="">立即购买</a></dd>
<dd><label>中央处理器:</label><span>2颗 至强X5650</span></dd>
<dd><label>内存大小：</label><span>16G DDR3 ECC</span></dd>
<dd><label>硬盘：</label><span>300G SAS</span></dd>
<dd><label>带宽、IP：</label><span>10M独享/免费1IP</span></dd>
<dd><label>免备案、带宽大、速度快！</label></dd>
</dl>
</dl>

<dl>
 <dt>高性能-II</dt>
<dd class="price"><span>2299</span>元/月</dd>
<dd class="buy"><a href="">立即购买</a></dd>
<dd><label>中央处理器:</label><span>2颗 至强E5-2660</span></dd>
<dd><label>内存大小：</label><span>16G DDR3 ECC</span></dd>
<dd><label>硬盘：</label><span>1000G SATA3企业级</span></dd>
<dd><label>带宽、IP：</label><span>10M独享/免费1IP</span></dd>
<dd><label>免备案、带宽大、速度快！</label></dd>
</dl>
</dl>
 </div> 
 <!--韩国服务器租用---结束-->
 
 <!--美国站群服务器---开始-->
<div class="mod_yun">
<dl class="frist">
 <dt>经济型-I</dt>
<dd class="price"><span>999</span>元/月</dd>
<dd class="buy"><a href="">立即购买</a></dd>
<dd><label>中央处理器:</label><span>E3-1230 V2</span></dd>
<dd><label>内存大小：</label><span>16G DDR3 ECC</span></dd>
<dd><label>硬盘：</label><span>1000G SATA3企业级</span></dd>
<dd><label>带宽、IP：</label><span>100M独享/免费258IP</span></dd>
<dd><label>免备案、带宽大、同C段258个IP！</label></dd>
</dl>

<dl>
 <dt>经济型-II</dt>
<dd class="price"><span>1200</span>元/月</dd>
<dd class="buy"><a href="">立即购买</a></dd>
<dd><label>中央处理器:</label><span>E3-1230 V2</span></dd>
<dd><label>内存大小：</label><span>16G DDR3 ECC</span></dd>
<dd><label>硬盘：</label><span>1000G SATA3企业级</span></dd>
<dd><label>带宽、IP：</label><span>100M独享/免费249IP</span></dd>
<dd><label>免备案、带宽大、5个不同C段！</label></dd>
</dl>

<dl>
 <dt>进阶型-I</dt>
<dd class="price"><span>1499</span>元/月</dd>
<dd class="buy"><a href="">立即购买</a></dd>
<dd><label>中央处理器:</label><span>E3-1230 V2</span></dd>
<dd><label>内存大小：</label><span>16G DDR3 ECC</span></dd>
<dd><label>硬盘：</label><span>1000G SATA3企业级</span></dd>
<dd><label>带宽、IP：</label><span>100M独享/免费213IP</span></dd>
<dd><label>免备案、带宽大、17个不同C段！</label></dd>
</dl>

<dl>
 <dt>进阶型-II</dt>
<dd class="price"><span>1799</span>元/月</dd>
<dd class="buy"><a href="">立即购买</a></dd>
<dd><label>中央处理器:</label><span>E3-1230 V2</span></dd>
<dd><label>内存大小：</label><span>16G DDR3 ECC</span></dd>
<dd><label>硬盘：</label><span>1000G SATA3企业级</span></dd>
<dd><label>带宽、IP：</label><span>100M独享/免费464IP</span></dd>
<dd><label>免备案、带宽大、17个不同C段！</label></dd>
</dl>
 </div> 
 <!--美国站群服务器---结束-->
 
  <!--香港站群服务器---开始-->
<div class="mod_yun">
<dl class="frist">
 <dt>邮件服务器-I</dt>
<dd class="price"><span>7000</span>元/季</dd>
<dd class="buy"><a href="">立即购买</a></dd>
<dd><label>中央处理器:</label><span>至强X3450</span></dd>
<dd><label>内存大小：</label><span>8G DDR3 ECC</span></dd>
<dd><label>硬盘：</label><span>500G SATA3</span></dd>
<dd><label>带宽、IP：</label><span>5M独享/免费258IP</span></dd>
<dd><label>免备案、可以EDM、254个全新IP！</label></dd>
</dl>

<dl>
 <dt>经济型-I</dt>
<dd class="price"><span>1499</span>元/月</dd>
<dd class="buy"><a href="">立即购买</a></dd>
<dd><label>中央处理器:</label><span>至强X3450</span></dd>
<dd><label>内存大小：</label><span>8G DDR3 ECC</span></dd>
<dd><label>硬盘：</label><span>500G SATA3</span></dd>
<dd><label>带宽、IP：</label><span>5M独享/免费258IP</span></dd>
<dd><label>免备案、25端口关闭、258个IP！</label></dd>
</dl>

<dl>
 <dt>进阶型-I</dt>
<dd class="price"><span>1599</span>元/月</dd>
<dd class="buy"><a href="">立即购买</a></dd>
<dd><label>中央处理器:</label><span>至强E3-1230 v2</span></dd>
<dd><label>内存大小：</label><span>8G DDR3 ECC</span></dd>
<dd><label>硬盘：</label><span>1000G SATA3</span></dd>
<dd><label>带宽、IP：</label><span>5M独享/免费258IP</span></dd>
<dd><label>免备案、25端口关闭、258个IP！</label></dd>
</dl>

<dl>
 <dt>进阶型-II</dt>
<dd class="price"><span>1599</span>元/月</dd>
<dd class="buy"><a href="">立即购买</a></dd>
<dd><label>中央处理器:</label><span>至强E3-1230 v2</span></dd>
<dd><label>内存大小：</label><span>8G DDR3 ECC</span></dd>
<dd><label>硬盘：</label><span>1000G SATA3</span></dd>
<dd><label>带宽、IP：</label><span>5M独享/免费249IP</span></dd>
<dd><label>免备案、25端口关闭、不同C段IP！</label></dd>
</dl>
 </div> 
 <!--香港站群服务器---结束-->
   
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
      <h1><a href="/news.html?nid=2">优惠活动</a></h1>
    </div>
    <div class="blank10"></div>
    <div class="borpadd sale">
      <ul class="saleCon">
        <li>
          <dl>
            <dt>
              <h4>2015年12月1日起至12月30日止</h4>
              <h3><a href="/uszy.html">独立服务器买10个月送8个月：</a></h3>
              <h5>活动内容：</h5>
              <p>美国洛杉矶E3-1230 V2/16G/1TB/100M/5IP买1年送6个月,折合443元/月[查看详情]</p>
            </dt>
            <dd><a href="/uszy.html"><img src="<?php $this->options->themeUrl('/images/wKhQMFHbgpOEIPAcAAAAAHAlSoc577.jpg'); ?>" /></a></dd>
          </dl>
        </li>
        <li>
          <dl>
            <dt>
              <h4>成都电信租用－买3年送1年！</h4>
              <h3><a href="/cdzy.html">企业用户专属：</a></h3>
              <h5>活动内容：</h5>
              <p>全部采用企业级戴尔服务器，中国电信骨干带宽，稳定高速之选，助力企业成长.[查看详情]</p>
            </dt>
            <dd><a href="/cdzy.html"><img src="<?php $this->options->themeUrl('/images/cloud.jpg'); ?>" /></a></dd>
          </dl>
        </li>
        <li>
          <dl>
            <dt>
              <h4>2015年12月28日起至2016年2月20日止</h4>
              <h3><a href="/vhost.html">购买香港服务器免费赠送IP地址：</a></h3>
              <h5>活动内容：</h5>
              <p>原价购买云镭科技香港服务器租用，可以获得免费29个可用IP地址，先代先得，赠完为止。[<a href="/hkzy.html">[查看详情]</a></p>
            </dt>
            <dd><a href="/hkzy.html"><img src="<?php $this->options->themeUrl('/images/01300000242726126335803918547.jpg'); ?>"/></a></dd>
          </dl>
        </li>
        <li>
          <dl>
            <dt>
              <h4>备案专员让您无忧备案（无需邮寄资料）</h4>
              <h3><a href="/cdzy.html" target="_blank">备案不用愁，云镭成都服务器租用“备多久送多久”：</a></h3>
              <h5>活动内容：</h5>
              <p>选购成都电信服务器可以享受安心备案服务，备案期间时间免费赠送！[查看详情]</p>
            </dt>
            <dd><a href="/cdzy.html" target="_blank"><img src="<?php $this->options->themeUrl('/images/beian.jpg'); ?>" /></a></dd>
          </dl>
        </li>
      </ul>
    </div>
  </div>
  <div class="w585 fr">
    <div class="tit">
      <h1><a href="/web.html">建站服务</a></h1>
    </div>
    <div class="blank10"></div>
    <div class="borpadd webServic">
      <ul>
        <li>
          <div class="webimg"><A href="#"><img src="<?php $this->options->themeUrl('/images/cx1.gif'); ?>" /></A></div>
          <div class="webtxt">绝大部分传统企业网站不能很好的获取搜索引擎排名，盈利模式模糊不清晰，目标客户群不够聚焦，直接导致询盘量极低，无销售业绩，网站做完极少访问量！<br />
            <Br />
            我们做的不只是网站，帮您轻松启动您的网络赚钱机器。<a href="#">了解详情>></a></div>
        </li>
        <li>
          <div class="webimg"><A href="/#"><img src="<?php $this->options->themeUrl('/images/cx2.gif'); ?>" /></A></div>
          <div class="webtxt">根据客户提供网站的风格开发或转制为WordPress、PHPCMS、DISCUZ、ECSHOP、DEDECMS网站主题程序;云镭科技不承担仿制网站导致的任何版权问题和其他纠纷;<br />
            <Br />
            提供各大CMS、社区、博客模板定制与销售。<a href="#">了解详情>></a></div>
        </li>
        <li>
          <div class="webimg"><A href="#" target="_blank"><img src="<?php $this->options->themeUrl('/images/cx3.gif'); ?>" /></A></div>
          <div class="webtxt">微信拥有5亿庞大的用户群，借助移动终端、天然的社交和位置定位等优势，每个信息都是可以推送的，能够让每个个体都有机会接收到这个信息，继而帮助商家实现点对点精准化营销。<Br />
            <Br />
            抓住5亿微信用户与11亿手机用户，您准备好了吗? <a href="#" target="_blank">马上去了解，并且使用>></a></div>
        </li>
      </ul>
    </div>
  </div>
  <div class="blank10"></div>
  <div class="tit">
    <h1><a href="/">经典客户展示</a></h1>
  </div>
  <div class="blank10"></div>
  <div class="borpadd custom">
    <ul>
      <li><a href="" target="_blank">
        <div class="hdpic"><img src="<?php $this->options->themeUrl('/images/1.jpg'); ?>"  /></div>
        <div class="txt">知名户外行业门户网站——装备之都</div>
        </a></li>
      <li><a href="" target="_blank">
        <div class="hdpic"><img src="<?php $this->options->themeUrl('/images/2.jpg'); ?>"  /></div>
        <div class="txt">海尔文化平台登陆界面UI</div>
        </a></li>
      <li><a href="" target="_blank">
        <div class="hdpic"><img src="<?php $this->options->themeUrl('/images/4.jpg'); ?>"  /></div>
        <div class="txt">新浪旅游大型专题——企鹅的感动</div>
        </a></li>
      <li><a href="" target="_blank">
        <div class="hdpic"><img src="<?php $this->options->themeUrl('/images/5.jpg'); ?>"  /></div>
        <div class="txt">革命老前辈夏征农网上纪念馆</div>
        </a></li>
      <li><a href="" target="_blank">
        <div class="hdpic"><img src="<?php $this->options->themeUrl('/images/6.jpg'); ?>"  /></div>
        <div class="txt">华蓥·好视立官方网站</div>
        </a></li>
      <li><a href="" target="_blank">
        <div class="hdpic"><img src="<?php $this->options->themeUrl('/images/7.jpg'); ?>"  /></div>
        <div class="txt">B2C网站——盘石有机农场</div>
        </a></li>
      <li><a href="" target="_blank">
        <div class="hdpic"><img src="<?php $this->options->themeUrl('/images/8.jpg'); ?>"  /></div>
        <div class="txt">B2C网站——MT时尚服装商城</div>
        </a></li>
    </ul>
    <a  class="nexts"></a> <a  class="previous"></a> </div>
  <div class="blank10"></div>
  <div class="w585 fl">
    <div class="tit">
      <h1><a href="/annoucement/" target="_blank">公司动态</a></h1>
    </div>
    <div class="blank10"></div>
    <div class="borpadd articleNews">
      <ul>
<!--控制显示网站的最新5篇文章-->
<?php $this->widget('Widget_Archive@index', 'pageSize=5&type=category', 'mid=2')->to($indexpub); ?>
<?php while($indexpub->next()): ?>
<li><span><?php $indexpub->date('Y/m/d H:i:s'); ?></span><a href="<?php $indexpub->permalink() ?>" title="<?php $indexpub->title() ?>" target="_blank"><label>></label><?php $indexpub->title() ?></a></li>
<?php endwhile; ?>
      </ul>
      <div class="blank10"></div>
    </div>
  </div>
  <div class="w585 fr">
    <div class="tit">
      <h1><a href="">客户分享</a></h1>
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
            <p class="text-img"><a href=""><img src="<?php $this->options->themeUrl('/images/222.jpg'); ?>" /></a></p>
            <div class="text-sevice">
              <h3>四川某高校官方网站</h3>
              <p>使用产品：<a href="/web.html">网站制作</a> <a href="#">国内CN域名</a> <a href="/cdzy.html">成都服务器租用</a>  </p>
            </div>
          </div>
        </li>
        <li>
          <div class="text-say">
            <p class="text">我们第一次将服务器维护托管出去，但是云镭科技给了我们稳定的服务，网站的小问题云镭技术人员也给我们解决得很快，从没有怨言。</p>
            <p class="text-author">——深深频道 网站负责人 付先生</p>
          </div>
          <div class="text-show">
            <p class="text-img"><a href=""><img src="<?php $this->options->themeUrl('/images/222.jpg'); ?>" /></a></p>
            <div class="text-sevice">
              <h3>中国产业信息网－深深频道</h3>
              <p>使用产品：<a href="/hkzy.html">香港服务器</a> <a href="/service.html">运维服务</a></p>
            </div>
          </div>
        </li>
      </ul>
      <div class="blank10"></div>
    </div>
  </div>
  <div class="blank20"></div>
</div>
<script type='text/javascript' src="<?php $this->options->themeUrl('js/base.js'); ?>"></script> 
<script type='text/javascript' src="<?php $this->options->themeUrl('/js/index.js'); ?>"></script> 
<?php $this->need('footer.php'); ?>