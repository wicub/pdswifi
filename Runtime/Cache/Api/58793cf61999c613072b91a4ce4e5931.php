<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<title>微云易公交WIFI</title>
		<meta name="description" content="Wobbly slideshow effect using Snap.svg" />
		<meta name="keywords" content="slideshow, wobbly, jelly, effect, svg, snap.svg, web design" />
		<meta name="author" content="Codrops" />
		<link href='http://fonts.googleapis.com/css?family=Flamenco' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="http://www.wyywifi.com/UI/Api/default/style/gongjiaologin/css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="http://www.wyywifi.com/UI/Api/default/style/gongjiaologin/css/demo.css" />
		<link rel="stylesheet" type="text/css" href="http://www.wyywifi.com/UI/Api/default/style/gongjiaologin/css/slideshow.css" />
		<script src="http://www.wyywifi.com/UI/Api/default/style/gongjiaologin/js/snap.svg-min.js"></script>
		<script src="http://www.wyywifi.com/UI/Api/default/style/gongjiaologin/js/modernizr.custom.js"></script>
	</head>
	<body>
	
		<div class="container">
			<div id="slideshow" class="slideshow">
			
				<ul>
					<li>
						<div class="slide">
							
							<img class="icon" src="http://www.wyywifi.com/UI/Api/default/style/gongjiaologin/img/icons/wifilogo.png" alt="Browser Icon"/>
							<h1 style="font-size: 49px;">微云易</h1>
							<p>公交WIFI
							
							</p>
						</div>
					</li>
					<li>
						<div class="slide">
							<img class="icon" src="http://www.wyywifi.com/UI/Api/default/style/gongjiaologin/img/icons/liaotian.png" alt="Heart Icon"/>
							<blockquote>
								<p>上网 聊天 看新闻无所不能.</p>
							</blockquote>
							<p>微云易公交WIFI</p>
							
						</div>
					</li>
					<li>
						<div class="slide">
							<img class="icon" src="http://www.wyywifi.com/UI/Api/default/style/gongjiaologin/img/icons/mianfei.png" alt="Letter Icon"/>
							<blockquote>
								<p>流量时间无限制完全免费.</p>
							</blockquote>
							<p>微云易公交WIFI</p>
							
						</div>
					</li>
					<li>
						<div class="slide">
							<img class="icon" src="http://www.wyywifi.com/UI/Api/default/style/gongjiaologin/img/icons/wuliao.png" alt="Football Icon"/>
							<blockquote>
								<p>上下班公交车上不在无聊.</p>
							</blockquote>
							<p>微云易公交WIFI</p>
							
						</div>
					</li>
					<li>
						<div class="slide">
							<img class="icon" src="http://www.wyywifi.com/UI/Api/default/style/gongjiaologin/img/icons/hezuo.png" alt="Match Icon"/>
							<blockquote>
								<p>如需安装及广告合作请联系我们.</blockquote>
							<p>微云易公交WIFI</p>
							
						</div>
					</li>
					<li>
						<div class="slide">
							<img class="icon" src="http://www.wyywifi.com/UI/Api/default/style/gongjiaologin/img/icons/lianxi.png" alt="Watch Icon"/>
							<blockquote>
								<p>TEL:15837561185</blockquote>
							<p>微云易公交WIFI</p>
							
						</div>
					</li>
					
				</ul>
				
				<div style="bottom: 100px;position: fixed;width: 200px;left: 16%;right: 16%;margin: 0 auto;">
							<div class="btn" style="text-align: center;"type="button" ><a href="<?php echo U('userauth/noAuth');?>" style="color:#fff">开始上网</a></div>
			</div>
			</div>
			
			</div>
			
		</div><!-- /container -->
		<script src="http://www.wyywifi.com/UI/Api/default/style/gongjiaologin/js/classie.js"></script>
		<script src="http://www.wyywifi.com/UI/Api/default/style/gongjiaologin/js/sliderFx.js"></script>
		<script>
			(function() {
				new SliderFx( document.getElementById('slideshow'), {
					easing : 'cubic-bezier(.8,0,.2,1)'
				} );
			})();
			
		</script>
		
	</body>
</html>