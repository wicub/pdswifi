<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<meta name="viewport" content=" initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="format-detection" content="telephone=no">
<title><?php echo ($shopinfo[0]['shopname']); ?></title>
<link rel="stylesheet" type="text/css" href="<?php echo ($Theme['P']['root']); ?>/tmpl/wifiadv/css/css.css"><!--风格-->
<link rel="stylesheet" type="text/css" href="<?php echo ($Theme['P']['root']); ?>/tmpl/wifiadv/css/media.css"><!--自适应-->

<link rel="stylesheet" type="text/css" href="<?php echo ($Theme['P']['root']); ?>/tmpl/wifiadv/css/form.css"><!--自适应-->
<title><?php echo ($shopinfo[0]['shopname']); ?></title>
</head>
<body>
<div class="topbar">
	<div class="headtitle font18"><?php echo ($shopinfo[0]['shopname']); ?></div>
</div>
<div class="mainbox bgform clearfix">
<div class="newsbox">
	<div class="newshead">
		<div class="newtitle"><?php echo ($adinfo["title"]); ?></div>
		<div>日期:<?php echo (date('Y-m-d',$adinfo["add_time"])); ?></div>
	</div>
	<div class="newsinfo">
		<?php echo (htmlspecialchars_decode($adinfo["info"])); ?>
	</div>
	<a class="btn_base corner-all-10 c-eee  t-333  uba b-wh mr-tb-10" href="javascript:void(0);" id="btn_back">返回首页</a>
	
</div>
<div class="blockdiv"></div>
<div class="footer font16">
		技术支持:<a href="http://www.wyywifi.com">微云易</a><script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1253016770'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "w.cnzz.com/c.php%3Fid%3D1253016770' type='text/javascript'%3E%3C/script%3E"));</script>
	</div>
</div>


<script type="text/javascript" src="<?php echo ($Theme['P']['js']); ?>/jquery.js"></script>
<script>

	$(document).ready(function(){
		  
		$('#btn_back').bind('click',function(){
			history.go(-1);
		});
	});

	
</script>
<script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1253016770'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "w.cnzz.com/c.php%3Fid%3D1253016770' type='text/javascript'%3E%3C/script%3E"));</script>
</body>
</html>