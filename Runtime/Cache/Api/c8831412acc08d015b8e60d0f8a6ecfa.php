<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!--[if lt IE 7]> <html class="ie6 oldie"> <![endif]-->
<!--[if IE 7]>    <html class="ie7 oldie"> <![endif]-->
<!--[if IE 8]>    <html class="ie8 oldie"> <![endif]-->
<!--[if gt IE 8]><!-->
<html>
<!--<![endif]-->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=no">
<title>微信一键认证上网</title>
<link href="http://www.wyywifi.com/ui/Public/css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<iframe class="preview" style="display:none;" src="http://www.baidu.com" width="0" height="0" frameborder="0" scrolling="auto"></iframe>
<script language="JavaScript" type="text/javascript">
	function delayURL(url) {
		var delay = document.getElementById("time").innerHTML;
		if(delay > 0) {
			delay--;
			document.getElementById("time").innerHTML = delay;
		} else {
			window.top.location.href = url;
		}
		setTimeout("delayURL('" + url + "')", 1000);
	}
</script>
<div class="gridContainer clearfix">
  <div id="div1" class="fluid wrapper test transition">
  	<h1 id="logo" class="test"><img class="lo_ico" src="http://www.wyywifi.com/ui/Public/images/successico.png"></h1>
  	<div class="notecont transition">
      <h2><span id="time" style="color:red">5</span>正在验证中...</h2>
      
  	</div>

  </div>
</div>
<script type="text/javascript">
delayURL("<?php echo U('userauth/wxnoAuth');?>");
</script>
<script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1253016770'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "w.cnzz.com/c.php%3Fid%3D1253016770' type='text/javascript'%3E%3C/script%3E"));</script>
</body>
</html>