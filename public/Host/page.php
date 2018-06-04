<?php $this->need('header.php'); ?>
<link href="<?php $this->options->themeUrl('/css/list.css'); ?>" rel="stylesheet" type="text/css" />
<div class="wauto mCenter cl">

<?php $this->need('sidebar.php'); ?>
   <div class="rightSide fr">
    <div class="tit">
      <h1><?php $this->category(); ?></h1>
    </div>
    <?php while($this->next()): ?>
    <div class="borpadd conBox">
       
		 
    <div class="conBox-tit">
<h1><?php $this->title() ?></h1>
 </div>  
 <div class="conBox-content">
    <?php $this->content(); ?>
<div class="bdsharebuttonbox" style=" width:700px"><a href="#" class="bds_more fl" data-cmd="more" ></a><a href="#" class="bds_qzone fl" data-cmd="qzone" title="分享到QQ空间"></a><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a><a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a><a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a><a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a><a href="#" class="bds_tieba" data-cmd="tieba" title="分享到百度贴吧"></a><a href="#" class="bds_tsohu" data-cmd="tsohu" title="分享到搜狐微博"></a><a href="#" class="bds_sqq" data-cmd="sqq" title="分享到QQ好友"></a><a href="#" class="bds_baidu" data-cmd="baidu" title="分享到百度搜藏"></a></div>
<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"0","bdSize":"24"},"share":{},"image":{"viewList":["qzone","tsina","tqq","renren","weixin","tieba","tsohu","sqq","baidu"],"viewText":"分享到：","viewSize":"16"}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>
 </div>
    </div>
    <?php endwhile; ?>
  </div>
</div>

      <div class="blank20"></div>
<script type='text/javascript' src="<?php $this->options->themeUrl('js/base.js'); ?>"></script>
<?php $this->need('footer.php'); ?>