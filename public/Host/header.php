<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="<?php $this->options->charset(); ?>">
    <title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?></title>
    <meta name="description" content="<?php if($this->is('index')){ ?><?php $this->options->description(); ?><?php } else if($this->is('post')) {?><?php $this->excerpt(100, '...'); ?><?php } else if($this->is('page')) {?><?php $this->excerpt(100, '...'); ?><?php } ?>" />
    <meta name="keywords" content="<?php if($this->is('index')){ ?><?php $this->options->keywords(); ?><?php } else if($this->is('post')) {?><?php $this->tags('', false, '暂无'); ?><?php } ?>" />
<meta name="viewport" content="width=device-width" initial-scale=1.0>
<script type='text/javascript' src="<?php $this->options->themeUrl('/js/jquery.min.js'); ?>"></script>
<script type='text/javascript' src="<?php $this->options->themeUrl('/js/jquery.rotate.min.js'); ?>"></script>
<script type='text/javascript' src="<?php $this->options->themeUrl('/js/jquery.anoslide.js'); ?>"></script>
<script src="<?php $this->options->themeUrl('/js/jquery.soChange.js'); ?>" type="text/javascript"></script>
<!-- 通过自有函数输出HTML头部信息 -->
<?php $this->header(); ?>
</head>
<body>
<!--no-cache-->
<link rel="stylesheet" href="<?php $this->options->themeUrl('/css/jquery.ui.min.css'); ?>" type="text/css"/>
<script type="text/javascript" src="<?php $this->options->themeUrl('/js/jquery.ui.min.js'); ?>"></script>
<script type="text/javascript" src="<?php $this->options->themeUrl('/js/common.js'); ?>"></script>
<script type="text/javascript" src="<?php $this->options->themeUrl('/js/process.js'); ?>"></script>
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

<div class="w" id="header">
  <div class="wauto mCenter" >
    <div id="logo"><a href="<?php $this->options->siteUrl(); ?>"></a></div>
    <div class="navbox"><a href="#"></a></div>
    <div id="nav">
      <ul id="menu-topnav" class="navTop">
        <li class="current-menu-item"><a href="<?php $this->options->siteUrl(); ?>"><span>首页</span></a></li>
        <li><a href="/annoucement/"><span>新闻动态</span></a>
          <div class="child-box">
            <div class="child-box2">
              <dl class="sub-menut">
                <dt><a href="/annoucement/"><span>公司公告</span></a></dt>
                <dt><a href="/news/"><span>行业新闻</span></a></dt>
                <dt><a href="/helpcenter/"><span>帮助中心</span></a></dt>
                <dt><a href="/specialoffer/"><span>最新活动</span></a></dt>
              </dl>
              <div class="blank10"></div>
            </div>
          </div>
        </li>
        <li><a href="/cdcolo.html"><span>服务器托管</span></a>
         <div class="child-box">
            <div class="child-box2">
            <dl class="sub-menut">
                <dt><a href="/cdcolo.html">成都电信</a></dt>
                <dt><a href="/cdydcolo.html">成都移动</a></dt>
                <dt><a href="/gzcolo.html">贵州电信</a></dt>
                <dt><a href="/sccolo.html">四川电信</a></dt>
                <dt><a href="/scltcolo.html">四川联通</a></dt>
                <dt><a href="/hkcolo.html">香港多线</a></dt>
                <dt><a href="/uscolo.html">美国多线</a></dt>
              </dl>
              <div class="blank10"></div>
            </div>
          </div>
        </li>
        <li><a href="/antiddos.html"><span>高防服务器</span></a> </li>
        <li>
        <a href="/cnzy.html"><span>国内服务器</span></a>
         <div class="child-box">
            <div class="child-box2">
            <dl class="sub-menut">
                <dt><a href="/cdzy.html">成都服务器</a></dt>
                <dt><a href="/gzzy.html">贵州服务器</a></dt>
              </dl>
              <div class="blank10"></div>
            </div>
          </div>
        
        </li>
        <li><a href="/uszy.html"><span>国外服务器</span></a>
        
        <div class="child-box">
            <div class="child-box2">
            <dl class="sub-menut">
                <dt><a href="/uszy.html">美国机房</a></dt>
                <dt><a href="/krzy.html">韩国机房</a></dt>
                <dt><a href="/hkzy.html">香港机房</a></dt>
                <dt><a href="/uszqzy.html">美国站群服务器</a></dt>
                <dt><a href="/hkzqzy.html">香港站群服务器</a></dt>
              </dl>
              <div class="blank10"></div>
            </div>
          </div>
        
        </li>
        <li><a href="/about.html"><span>关于我们</span></a>
          <div class="child-box">
            <div class="child-box2">
              <dl class="sub-menut">
                <dt><a href="/about.html"><span>关于我们</span></a></dt>
                <dt><a href="/pay.html"><span>在线支付</span></a></dt>
                <dt><a href="hr.html"><span>招贤纳士</span></a></dt>
                <dt><a href="/contact.html"><span>联系我们</span></a></dt>
                 <dt><a href="/term.html" target="_blank" rel="nofollow"><span>服务条款</span></a></dt>
              </dl>
              <div class="blank10"></div>
            </div>
          </div>
        </li>
      </ul>
      <div id="swin" style="display:none"></div>
      <div id="suwin" style="display:none"></div>
      <div id="processing" style="display:none;"></div>
      <div class="userTop login" id="topContent">
        <div class="loginTop" > <a href="https://my.1ue.com/clientarea.php">登录</a> <a href="https://my.1ue.com/register.php">马上注册</a> </div>
      </div>
    </div>
  </div>
</div>