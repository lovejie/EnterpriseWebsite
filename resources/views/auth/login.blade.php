<!DOCTYPE html>
<html>
<head>

	<!-- /.website title -->
	<title>杭州虎牛科技有限公司</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

	<!-- CSS Files -->
	<link href="{{asset('login/css/bootstrap.min.css')}}" rel="stylesheet" media="screen">
	<link href="{{asset('login/css/font-awesome.min.css')}}" rel="stylesheet">
	<link href="{{asset('login/fonts/icon-7-stroke/css/pe-icon-7-stroke.css')}}" rel="stylesheet">
	<link href="{{asset('login/css/animate.css')}}" rel="stylesheet" media="screen">
	<link href="{{asset('login/css/owl.theme.css')}}" rel="stylesheet">
	<link href="{{asset('login/css/owl.carousel.css')}}" rel="stylesheet">

	<!-- Colors -->
	<link href="{{asset('login/css/css-index.css')}}" rel="stylesheet" media="screen">


</head>

<body data-spy="scroll" data-target="#navbar-scroll">

<!-- /.preloader -->
<div id="preloader"></div>
<div id="top"></div>

<!-- /.parallax full screen background image -->
<div class="fullscreen landing parallax" style="background-image:url('{{asset('login/images/bg.jpg')}}');" data-img-width="2000" data-img-height="1333" data-diff="100">

	<div class="overlay">
		<div class="container">
			<div class="row">
				<div class="col-md-7">

					<!-- /.logo -->
					<div class="logo wow fadeInDown">
						{{--<a href=""><img src="{{asset('login/images/logo.png')}}" alt="logo"></a>--}}
					</div>

					<!-- /.main title -->
					<h1 class="wow fadeInLeft">
						杭州虎牛科技有限公司
					</h1>

					<!-- /.header paragraph -->
					<div class="landing-text wow fadeInUp">
						<p>
							杭州虎牛科技有限公司管理后台</p>
					</div>

					<!-- /.header button -->
					<div class="head-btn wow fadeInLeft">
						{{--<a href="#feature" class="btn-primary">Features</a>--}}
						{{--<a href="#download" class="btn-default">Download</a>--}}
					</div>
				</div>

				<!-- /.signup form -->
				<div class="col-md-5">

					<div class="signup-header wow fadeInUp">
						<h3 class="form-title text-center">管理后台</h3>
						<form class="form-header" action="{{url('admin/login')}}" role="form" method="POST" id="#">

							<div class="form-group">
								<input class="form-control input-lg" name="name" id="name" type="text" placeholder="请输入用户名" required>
							</div>
							<div class="form-group">
								<input class="form-control input-lg" name="password"  type="password" placeholder="请输入密码" required>
							</div>
							<div class="form-group last">
								<input type="submit" class="btn btn-warning btn-block btn-lg" value="登录">
							</div>
							<p class="privacy text-center">
								{{--We will not share your email. Read our <a href="privacy.html">privacy policy</a>.--}}
							</p>
						</form>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>

<!-- NAVIGATION -->
<div id="menu">
	<nav class="navbar-wrapper navbar-default" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-backyard">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				{{--<a class="navbar-brand site-name" href="#top"><img src="{{asset('login/images/logo2.png')}}" alt="logo"></a>--}}
			</div>

			<div id="navbar-scroll" class="collapse navbar-collapse navbar-backyard navbar-right">

			</div>
		</div>
	</nav>
</div>

<!-- /.intro section -->

<!-- /.feature section -->


<!-- /.contact section -->

<!-- /.footer -->
<footer id="footer">
	<div class="container">
		<div class="col-sm-4 col-sm-offset-4">
			<!-- /.social links -->
			<div class="social text-center">
				<ul>
					{{--<li><a class="wow fadeInUp" href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>--}}
					{{--<li><a class="wow fadeInUp" href="https://www.facebook.com/" data-wow-delay="0.2s"><i class="fa fa-facebook"></i></a></li>--}}
					{{--<li><a class="wow fadeInUp" href="https://plus.google.com/" data-wow-delay="0.4s"><i class="fa fa-google-plus"></i></a></li>--}}
					{{--<li><a class="wow fadeInUp" href="https://instagram.com/" data-wow-delay="0.6s"><i class="fa fa-instagram"></i></a></li>--}}
				</ul>
			</div>
			<div class="text-center wow fadeInUp" style="font-size: 14px;">Copyright Backyard 2015 - More Templates
				{{--<a href="http://www.cssmoban.com/" target="_blank" title="模板之家">模板之家</a> - Collect from <a href="http://www.cssmoban.com/" title="网页模板" target="_blank">网页模板</a>--}}
			</div>
			<a href="#" class="scrollToTop"><i class="pe-7s-up-arrow pe-va"></i></a>
		</div>
	</div>
</footer>

<!-- /.javascript files -->
<script src="{{asset('login/js/jquery.js')}}"></script>
<script src="{{asset('login/js/bootstrap.min.js')}}"></script>
<script src="{{asset('login/js/custom.js')}}"></script>
<script src="{{asset('login/js/jquery.sticky.js')}}"></script>
<script src="{{asset('login/js/wow.min.js')}}"></script>
<script src="{{asset('login/js/owl.carousel.min.js')}}"></script>
<script>
	new WOW().init();
</script>
</body>
</html>