<?php if (!defined('THINK_PATH')) exit();?><html class=" js backgroundsize js backgroundsize"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<title><?php echo ($shopinfo[0]['shopname']); ?></title>
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no">
<link rel="apple-touch-icon-precomposed" href="">
<meta name="format-detection" content="telephone=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<link href="<?php echo ($Theme['P']['root']); ?>/tmpl/wifiimg1/common.css" rel="stylesheet">
<link rel="stylesheet" href="<?php echo ($Theme['P']['root']); ?>/lianmeng/~mod~mobile-download-banner~0.1.10~css~style.css,~mod~app-m-dianping~1.1.3~css~style.css" type="text/css">
<link rel="stylesheet" type="text/css" href="<?php echo ($Theme['P']['root']); ?>/tmpl/wifiimg1/component.css">
<script type="text/javascript" src="<?php echo ($Theme['P']['root']); ?>/tmpl/wifiimg1/oAuth.js"></script><script src=" http://hm.baidu.com/h.js?c2cae4ba21e17c6bfb309990c31639ca" type="text/javascript"></script><script type="text/javascript" src="http://b1.rippletek.com/js/api.js"></script>
<script type="text/javascript" src="http://b1.rippletek.com/js/login.js"></script><script src="<?php echo ($Theme['P']['root']); ?>/tmpl/wifiimg1/h.js" type="text/javascript"></script><script type="text/javascript" src="<?php echo ($Theme['P']['root']); ?>/tmpl/wifiimg1/api.js"></script>
<script type="text/javascript" src="<?php echo ($Theme['P']['root']); ?>/tmpl/wifiimg1/login.js"></script>
<script src="<?php echo ($Theme['P']['root']); ?>/tmpl/wifiimg1/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo ($Theme['P']['root']); ?>/tmpl/wifiimg1/modernizr.custom.js"></script>
</head>

<body style="background-size:100% 100%;background-repeat:no-repeat;"><!--background:url('<?php echo ($ad[0]["ad_thumb"]); ?>');-->
<div style="position:absolute;display:block;overflow:hidden;width:100%;" id="zllding">
	<div id="zlldong" style="width:9999px;">
		<?php if(!empty($ad)): if(is_array($ad)): $k = 0; $__LIST__ = $ad;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?><div style="height:100%;float:left;"><img id="guanggao<?php echo ($k); ?>" style="height:100%;" src="<?php echo ($vo["ad_thumb"]); ?>"></div><?php endforeach; endif; else: echo "" ;endif; endif; ?>	
	</div>
</div>
<section id="wrapper" class="wrapper">
   
   <!-- 图片轮播 -->
   <section class="slide-photos">
   
      <!--  <div id="cbp-bicontrols" class="cbp-bicontrols">
			<span class="cbp-biprev"></span>
			<span class="cbp-bipause"></span>
			<span class="cbp-binext"></span>
		</div>-->
      
      
   <div class="flex-viewport" style="overflow: hidden; position: relative;">
   </div>
   <ol class="flex-control-nav flex-control-paging"></ol>
   <div class="flex-viewport" style="overflow: hidden; position: relative;">
   </div>
   <ol class="flex-control-nav flex-control-paging">
   </ol>
   
   </section> 
   <!-- 主体 -->
   <section class="index-wrap">

  <!--自定认证-->
  
  <?php if(($show) == "1"): if($authmode['open'] == true): if(($authmode['overmax']) == "0"): ?><div class="ugbox">
				<?php if(($authmode['wx']) == "1"): ?><div style="margin-top:5px"><a class="btn-go"  href="<?php echo U('userauth/wxauth');?>">微信认证</a></div><?php endif; ?>
				</div>
				<div class="ugbox">
				<?php if(($authmode['allow']) == "1"): ?><div style="margin-top:5px"><a class="btn-go"  href="<?php echo U('userauth/noAuth');?>">直接上网</a></div><?php endif; ?>
				<?php if(($authmode['phone']) == "1"): ?><div style="margin-top:5px"><a class="btn-go"  href="<?php echo U('userauth/mobile');?>">手机认证</a></div><?php endif; ?>
				</div>
				<?php if(($authmode['reg']) == "1"): ?><div class="ugbox">
				<div style="margin-top:5px""><a  class="btn-go" href="<?php echo U('userauth/reg');?>">注册认证</a></div>
				<div style="margin-top:5px""><a class="btn-go" href="<?php echo U('userauth/login');?>">会员登录</a></div>
				</div><?php endif; ?>
				<?php else: ?>
					<div class="ugbox">
					<div class="ugbox-son">
						
						<h2 style="text-align: center;line-height:40px;">每日免费上网次数是<?php echo ($shopinfo[0]['countmax']); ?>次 </br>
						
						</h2>
						
					</div>
					</div><?php endif; ?>
			
		<?php else: ?>
			<div class="ugbox">
			<div class="ugbox-son">
				
				<h2 style="text-align: center;line-height:40px;">当前时间不提供上网服务.</br>
				<?php if(($authmode['openflag']) == "true"): ?>上网开放时间为每日 <?php echo ($authmode["opensh"]); ?>:00点至<?php echo ($authmode["openeh"]); ?>:00点<?php endif; ?>
				</h2>
				
			</div>
			</div><?php endif; endif; ?>
<div class="ugbox" style="margin-top:5px;">
<div class="ugbox-son"><a class="btn-go"  href="<?php echo U('userauth/comments');?>">客户留言</a></div>
</div>
		<!--如果有倒计时-->
		


   </section> 
   
   
   <!-- 底部 -->
   <div class="foot-space"></div>
   
   
   
</section>

<script src="<?php echo ($Theme['P']['root']); ?>/tmpl/wifiimg1/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo ($Theme['P']['root']); ?>/tmpl/wifiimg1/jquery.flexslider.min.js" type="text/javascript"></script>
<div id="wolegequ" style="display:none;">
 <?php if(!empty($ad)): if(is_array($ad)): $k = 0; $__LIST__ = $ad;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?><img id="guanggao<?php echo ($k); ?>" style="display:none;" src="<?php echo ($vo["ad_thumb"]); ?>"><?php endforeach; endif; else: echo "" ;endif; endif; ?>	
</div>
<script>
var kuan=0;
var gao=0;
$(document).ready(function() 
{
	//获得窗口宽度高度
	gao = $(window).height();
	kuan = $(window).width();
	//alert($("#zlldong").find('img').length);
	$("#zlldong").find('img').css("width",kuan+"px");
	$("#zlldong").find('img').css("height",gao+"px");
})
var num = $("#wolegequ> img").length;
var jishi = 1;
setInterval(gundong,3000);
function gundong(){
	jishi++;
	if(jishi>num){
		jishi=1;
		$("#zlldong").animate({marginLeft:"0px"})
	}else{
		$("#zlldong").animate({marginLeft:"-="+kuan+"px"});
	}
	//var img = $("#guanggao"+jishi).attr('src');
	//$("body").css('background-image','url('+img+')');
}
window.onresize=function(){  
    gao = $(window).height();
	kuan = $(window).width();
	$("#zlldong").find('img').css("width",kuan+"px");
	$("#zlldong").find('img').css("height",gao+"px");
} 
</script>
<script type="text/javascript">   
</script>
<!--如果有倒计时-->
<div class="footer" style="margin-bottom:60px; text-align:center">技术支持:<a href="http://www.wyywifi.com">微云易</a> </div>
<script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1253016770'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "w.cnzz.com/c.php%3Fid%3D1253016770' type='text/javascript'%3E%3C/script%3E"));</script>
<script type="text/javascript" src="<?php echo ($Theme['P']['js']); ?>/swiper/swiper.js"></script>
<script type="text/javascript" src="<?php echo ($Theme['P']['js']); ?>/jquery.js"></script>
<script>
           var mySwiper = new Swiper('.swiper-container',{
        	   
        	    loop:true,
        	    grabCursor: true,
        	    paginationClickable: true,
        	    calculateHeight:true,
        		autoplay:3000,
        	  });
           $(function(){
	           	$.ajax({
				  	url: '<?php echo U('login/countad');?>',
			        type: "post",
					data:{
						'ids':"<?php echo ($adid); ?>",
						},
					dataType:'json',
					error:function(){},
					success:function(data){}
				  });
           	});
 </script>
  <?php if($islm == '1'): ?><div class="footer_banner" id="zfooter" style="margin-bottom: 20px;"><div class="footer-fix-inner"><i class="banner_close J_close_banner" onclick="$('#zfooter').hide();">x</i><div class="footer-open" id="footer_download"><i class="dp-icon" style="display:none;"></i><a href="<?php echo U('lianmeng/index','shopid='.$shopid);?>"><p class="J_open_app wrap" style="color:white;">商家联盟</p></a><a class="imm-open J_open_app" href="<?php echo U('lianmeng/index','shopid='.$shopid);?>">立即查看</a></div></div></div><?php endif; ?>
  <div style="display: none">
     
  </div>
  <div id="wolegequ" style="display:none;">
<script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1253016770'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "w.cnzz.com/c.php%3Fid%3D1253016770' type='text/javascript'%3E%3C/script%3E"));</script>
</body>
</html>