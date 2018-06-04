<div class="main-im">
  <div id="open_im" class="open-im">&nbsp;</div>  
  <div class="im_main" id="im_main">
    <div id="close_im" class="close-im"><a href="javascript:void(0);" title="点击关闭">&nbsp;</a></div>
    <a href="http://wpa.qq.com/msgrd?v=3&amp;uin=800025939&amp;site=qq&amp;menu=yes" target="_blank" class="im-qq qq-a" title="在线QQ客服">
        <div class="qq-container"></div>
        <div class="qq-hover-c"><img class="img-qq" src="<?php $this->options->themeUrl('/images/qq.png'); ?>"></div>
        <span>QQ在线咨询</span>
    </a>
    <div class="im-tel">
      <dt>售前咨询热线</dt>
      <dt class="tel-num">028-86285555</dt>
      <dt>售后服务热线</dt>
      <dt class="tel-num">4006-39-4008</dt>
    </div>
    <div class="im-footer" style="position:relative">
      <div class="weixing-container">
        <div class="weixing-show">
          <div class="weixing-txt">微信扫一扫<br>关注公众号<br>获取最新优惠</div>
          <img class="weixing-ma" src="<?php $this->options->themeUrl('/images/weixin.jpg'); ?>">
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
</script>