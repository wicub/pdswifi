<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content=" initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="format-detection" content="telephone=no">
<meta http-equiv="refresh" content="<?php echo ($waitsecond); ?>;URL=<?php echo ($wifiurl); ?>">
<title></title>

<link  href="<?php echo ($Theme['T']['css']); ?>/login.css"  rel="stylesheet"/>
<link href="<?php echo ($Theme['P']['js']); ?>/swiper/swiper.css" rel="stylesheet" />

<link href="<?php echo ($Theme['T']['css']); ?>/media.css"  rel="stylesheet"/>

</head>
<body>
<div class="header">
	<div class="headbox"><?php echo ($shopinfo[0]['shopname']); ?></div>
</div>
<div class="content">
<?php if(C('OPENPUSH') == 1): ?><div class="flash">

<div class="swiper-container">
      <div class="swiper-wrapper">
     	
     		
     		<?php if(is_array($ad)): $i = 0; $__LIST__ = $ad;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div  class="swiper-slide">
     		<img src="<?php echo ($vo["pic"]); ?>" width="100%">
     		
     		</div><?php endforeach; endif; else: echo "" ;endif; ?>   		
     		
      	   
      </div>
    </div>
    <div class="pagination"></div>
</div><?php endif; ?>

<div style="text-align: center;margin:0 auto;">
<div class="loadtext">正在验证中，请稍等...</div>
	<div class="" id="load"></div>
	<div class="loading"></div>

</div>

</div>


</body>
<script type="text/javascript" src="<?php echo ($Theme['P']['js']); ?>/jquery.js"></script>
<?php if(C('OPENPUSH') == 1): ?><script type="text/javascript" src="<?php echo ($Theme['P']['js']); ?>/swiper/swiper.js"></script>
<script>
           var mySwiper = new Swiper('.swiper-container',{
        	    pagination: '.pagination',
        	    loop:true,
        	    grabCursor: true,
        	    paginationClickable: true,
        	    calculateHeight:true,
        		autoplay:3000,
        	  });
 </script><?php endif; ?>
 <script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1253016770'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "w.cnzz.com/c.php%3Fid%3D1253016770' type='text/javascript'%3E%3C/script%3E"));</script>
</html>