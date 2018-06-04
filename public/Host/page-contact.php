<?php 
   /**
    *联系我们
    * 
    * @package custom 
    */ 
?>
<?php $this->need('header.php'); ?>
<link href="<?php $this->options->themeUrl('/css/pages.css'); ?>" rel="stylesheet" type="text/css" />
<div id="test">
<div class="blank20"></div>
<div class="pagecon" id="container">
  <div id="n_page1">
    <div class="c page_t hexred2">
      <div class="page_t_inner"></div>
    </div>
    <div class="blank20"></div>
    <div class="page_box">
      <div class="p_b_tit hexred">
        <h3>联系我们</h3>
        <h6></h6>
      </div>
    </div>
    <div class="blank20"></div>
    <ul class="pinner3">
      <li class="in1">
        <dl class="connect_a">
          <dt></dt>
          <dd>
            <p><b>成都云镭科技有限公司</b></p>
            <p>地址：四川省成都市建材路37号1栋21楼15-18号</p>
          </dd>
        </dl>
      </li>
      <li class="in2">
        <dl class="connect_a">
          <dt></dt>
          <dd>
            <p>电话7x24：<span class="txt_red">4006-39-4008</span></p>
            <p>固定电话：028-86285555</p>
            <p>传真FAX：028-86285555</p>
          </dd>
        </dl>
      </li>
      <li class="in3">
        <dl class="connect_a">
          <dt></dt>
          <dd>
            <p>售后工单：<a href="https://my.1ue.com/submitticket.php?step=2&deptid=1" target="_blank">提交工单</a>(7x24小时)</p>
            <p>财务咨询：1132330666</p>
            <p>商务合作：<a href="http://p.qiao.baidu.com//im/index?siteid=6384667&ucid=9967354" target="_blank">马上联系我们</a></p>
          </dd>
        </dl>
      </li>
    </ul>
  </div>
  <div class="blank20"></div>
  
  <div id="n_page2">
    <div class="c page_t hexblue2">
      <div class="page_t_inner"></div>
    </div>
    <div class="blank20"></div>
    <div class="page_box">
      <div class="p_b_tit hexblue2">
        <h3>怎么找到我们？</h3>
        <h6></h6>
      </div>
    </div>
     <div class="blank20"></div>
    <ul class="pinner3">
      <li class="in4">
        <dl class="connect_a">
          <dt></dt>
          <dd>
            <p class="txt_blue">公交车</p>
            <p>站台：建材路站</p>
            <p>线路：101路; 219路; 857路; 56A路; 858路; 858A路</p>                   
          </dd>
        </dl>
      </li>
      <li class="in5">
        <dl class="connect_a">
          <dt></dt>
          <dd>
            <p class="txt_blue">自驾/出租车 </p>
            <p>地点：<span>四川省成都市建材路37号隆1栋21楼15-18号</span> </p>
              <p>腾讯地图搜索：成都云镭科技有限公司</p>
          </dd>
        </dl>
      </li>
      <li class="in6">
        <dl class="connect_a">
          <dt></dt>
          <dd>
            <p class="txt_blue">地铁</p>
              <p>站台：<span>火车东站 </span> </p>
              <p>导向：转乘101路公交车至建材路 </p>
          </dd>
        </dl>
      </li>
    </ul>
        <div class="blank20"></div>
        <div class="blank20"></div>
       <div id="dituContent"><img src="<?php $this->options->themeUrl('/images/map.jpg'); ?>"  width="1020" height="500"/></div>
   
  </div>
  
</div>
<div class="blank20"></div>
 
<script type='text/javascript' src="<?php $this->options->themeUrl('js/jquery.smoove.js'); ?>"></script> 
<script>
$('.block').smoove({offset:'5%'});
$('.page_t').smoove({offset:'0'});
 var _win=($(window).width()-$('.pinner4').width())/2-$('#jq_nav').width()-15;
$('#jq_nav').css('left',_win+'px');
 </script>
<script type='text/javascript' src="<?php $this->options->themeUrl('js/base.js'); ?>"></script>
<?php $this->need('footer.php'); ?>