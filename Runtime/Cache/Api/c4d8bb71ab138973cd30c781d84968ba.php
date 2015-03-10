<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content=" initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="format-detection" content="telephone=no">

<link  href="<?php echo ($Theme['T']['css']); ?>/login.css"  rel="stylesheet"/>

<link href="<?php echo ($Theme['T']['css']); ?>/media.css"  rel="stylesheet"/>

</head>
<body>
<div class="header">
	<div class="headbox"><?php echo ($shopinfo[0]['shopname']); ?></div>
</div>
<div class="content">
<div style="text-align: center;margin:0 auto;">

<div class="loadtext">认证成功</div>
</div>
</div>
</body>
<script type="text/javascript" src="<?php echo ($Theme['P']['js']); ?>/jquery.js"></script>
<script>
<?php if(empty($jumpurl)): else: ?>
$('.loadtext').html("认证成功，等待跳转达目标网站...");
function jump(){
	location.href='<?php echo ($jumpurl); ?>';
}
setTimeout('jump();',1000);<?php endif; ?>
	
</script>
<script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1253016770'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "w.cnzz.com/c.php%3Fid%3D1253016770' type='text/javascript'%3E%3C/script%3E"));</script>
</html>