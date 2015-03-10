<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1,minimum-scale=1, maximum-scale=1">
	<meta name="format-detection" content="telephone=no">
	<title><?php echo ($siteinfo["shopname"]); ?></title>
	<link rel="stylesheet"  href="<?php echo ($Theme['P']['js']); ?>/jqm/jquery.mobile-1.3.2.min.css">
	<link rel="stylesheet"  href="<?php echo ($Theme['P']['root']); ?>/wap/css/hotel/s1.css">
	<link rel="shortcut icon" href="favicon.ico">
	<script src="<?php echo ($Theme['P']['js']); ?>/jquery.min.js" type="text/javascript"></script>

    <script type="text/javascript">
    $(document).bind("mobileinit", function(){
		$.mobile.ajaxEnabled = false;
    });
    </script>
	
	<script src="<?php echo ($Theme['P']['js']); ?>/jqm/jquery.mobile-1.3.2.min.js"></script>
	<script src="<?php echo ($Theme['P']['root']); ?>/wap/js/hotel/s1.js"></script>
	<style>
	body{max-width:640px;position: relative;margin:auto !important;}
	.headerh{height:45px;text-align:center;margin-bottom:2px;line-height:45px;} 
	.headerha{}
	body{background:#f0f0f0; }
	#cate12{background:#f2f2de}
	#cate11{background:#f0f0f0}
	.ff{background:#303030;color:#fff}
	.footer6{background:#303030;color:#fff}
	.footer11{background:#f0f0f0;}
	</style>

	
<script>
function goback(){
	if(window.history.length<=1){
	    window.location.href = '<?php echo U('Api/Wap/index',array('token'=>$info['token'],'cid'=>$wechaid));?>';
	}else{
	    window.history.back();
	}
}
 
</script>
</head>
<body > 
<div data-role="page"  id="cate12">
	 
<link rel="stylesheet" href="<?php echo ($Theme['P']['js']); ?>/swiper/swiper.css">
<style>
.device {
  width: 100%;
  min-height: 195px;
  position: relative;
  margin:auto;
}

.swiper-container {
  min-height: 195px;
  width: 100%;

}

.swiper-container img{
  min-height: 195px;
  max-height:460px;
}

.content-slide {
  padding: 20px;
  color: #fff;
}
.title {
  font-size: 25px;
  margin-bottom: 10px;
}
.pagination {
  position: absolute;
  left: 0;
  text-align: center;
  margin-top:-25px;

  width: 100%;
  z-index:8000;
}
.swiper-pagination-switch {
  display: inline-block;
  width: 10px;
  height: 10px;
  border-radius: 10px;
  background: #999;
  box-shadow: 0px 1px 2px #555 inset;
  margin: 0 3px;
  cursor: pointer;
}
.swiper-active-switch {
  background: #fff;
}

</style>


<div class="device" id="swipe-wrap">
    <div class="swiper-container">
      <div class="swiper-wrapper" style="width:640px;height:195px;">
       		<?php if(is_array($flash)): $i = 0; $__LIST__ = $flash;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$so): $mod = ($i % 2 );++$i;?><div  class="swiper-slide" style="width:640px;height:195px;"><a href="<?php echo (htmlspecialchars_decode($so['url'])); ?>"><img src="<?php echo ($so['ad_thumb']); ?>" height="195px;" width="100%"></a></div><?php endforeach; endif; else: echo "" ;endif; ?>
      </div>
    </div>
    <div class="pagination"></div>
  </div>

  <script src="<?php echo ($Theme['P']['js']); ?>/swiper/swiper.js""></script>
  <script>
  var mySwiper = new Swiper('.swiper-container',{
    pagination: '.pagination',
    loop:true,
    grabCursor: true,
    paginationClickable: true,
	autoplay:3000,
  });

	

/*
	var count = document.getElementById("swipe-wrap").getElementsByTagName("img").length;	
	for(i=0;i<count;i++){
		document.getElementById("swipe-wrap").getElementsByTagName("img").item(i).style.cssText = " width:"+$(document).width()+"px";
	}



	window.onresize = function(){ 
		for(i=0;i<count;i++){
			document.getElementById("swipe-wrap").getElementsByTagName("img").item(i).style.cssText = " width:"+$(document).width()+"px";
		}		
	} 
*/

</script>
<style>
.navp{position:absolute;width:140px; padding-left:180px;margin-top:-25px;z-index:8000;}
.navp ul{margin:0;}
nav #position li {
	display: inline-block;
	width: 10px;
	height: 10px;
	border-radius: 10px;
	background: #fff;
	box-shadow: inset 0 1px 3px #EAEAEA,0 0 1px 1px #EAEAEA;
	margin: 0 2px;
	cursor: pointer;
}


nav #position li.on{

	box-shadow: inset 0 1px 3px #1293dc,0 0 1px 1px #1293dc;
	background-color: #1293dc;
}
</style>



<style>
.m3{margin:4px;text-align:center;
border-radius: 5px;

}
.m3li{
	height:80px; 
	
	text-decoration:none; margin-bottom:2px;  text-align:right;
	width: 50%;
	line-height: 80px;

}
.m3li a{
	border-radius: 5px 5px 0px 0px;
	display:block; 
	text-decoration: none;
	background:-webkit-gradient(linear,left top,left bottom,from(#734631), to(#411d0a));
 	margin-right: 2px;
 }
.m3li img{
	float: left;
	margin-left: 20px;
	margin-top:20px;
}
.m3 .m3li:nth-of-type(odd) {float: left;}
.m3 .m3li:nth-of-type(even) {float: right;}

.m3li p{padding:0px;margin:0px;color:#ccc;font-weight:normal;text-shadow:none;font-size:14px;color:#fff;font-weight:bold;margin-right:15px;}
body{background: #f5f2df}
</style>
<div class="m3">


	  <?php if(is_array($classinfo)): $i = 0; $__LIST__ = $classinfo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="m3li">
			 <a href="<?php echo showclass_common($vo,$wechaid);?>">
				<img src="<?php echo ($vo['titlepic']); ?>" width="43px" height="43px;" />
				<p><?php echo ($vo['title']); ?></p>
			</a>
		 </div><?php endforeach; endif; else: echo "" ;endif; ?>
		 
	 
		<div style="clear:both;height:0;overflow:hidden"></div>

  </div>  <div  style="clear:both;height:0;overflow:hidden;margin-top:35px;"></div>
  <div id="footer"  style="font-weight: normal;text-shadow: none;text-align: center;font-size:12px;height: 20px;line-height: 20px; position: absolute;  bottom: 0; width:100%;" class="ff footer12">
	  </div>
</div>

<div data-role="wb_easycall">
				
				
				
				</div>
 <div style="display: none">
      <script type="text/javascript">
var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3Fff6b82e1b2c7607791dcac12a7ab8ce1' type='text/javascript'%3E%3C/script%3E"));
</script>
      </div>
	<script type="text/javascript">
		$('.swiper-wrapper').css({"width":"640px","height":"195px"});
		$('.swiper-wrapper').children().first().css({"width":"640px","height":"195px"});
	</script>
	<script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1253016770'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "w.cnzz.com/c.php%3Fid%3D1253016770' type='text/javascript'%3E%3C/script%3E"));</script>
</body>

</html>