<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!-- saved from url=(0302)http://wifi.witown.com/page.htm?userParams=routerSeq%3AX12014031201001312%2CuserIp%3A192.168.18.100%2CuserMac%3A00%3A23%3A5a%3Ae7%3A23%3Adc%2CrouterId%3Anull%2Cipaddr%3Anull%2Cmac%3Anull&siteId=9743&viewModel=pre&pageId=40420&mid=f73222c604fa11e489cad89d672af1cc&vtoken=90ce184748ac44979f998ef6be3444eb -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<meta name="Hancoson" content="True">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=0.5, user-scalable=no">
<title>免费WIFI</title>
				<link rel="stylesheet" type="text/css" href="<?php echo ($Theme['P']['root']); ?>/tmpl/wifiimg3/buttons.min.css" charset="UTF-8">
					<link rel="stylesheet" type="text/css" href="<?php echo ($Theme['P']['root']); ?>/tmpl/wifiimg3/common.min.css" charset="UTF-8">
					<link rel="stylesheet" type="text/css" href="<?php echo ($Theme['P']['root']); ?>/tmpl/wifiimg3/media_queries.min.css" charset="UTF-8">
	<link rel="stylesheet" href="<?php echo ($Theme['P']['root']); ?>/lianmeng/~mod~mobile-download-banner~0.1.10~css~style.css,~mod~app-m-dianping~1.1.3~css~style.css" type="text/css">
				<script src="<?php echo ($Theme['P']['root']); ?>/tmpl/wifiimg3/hm.js"></script><script src="<?php echo ($Theme['P']['root']); ?>/tmpl/wifiimg3/hm(1).js"></script><script type="text/javascript" src="<?php echo ($Theme['P']['root']); ?>/tmpl/wifiimg3/jquery.min.js" charset="UTF-8"></script>
	
</head>


<body style="overflow: hidden;">

    <div class="header J_page_header">
        <div class="title">免费WIFI</div>
    </div>

<section class="content clearfix login2_bg">
	<link rel="stylesheet" type="text/css" href="<?php echo ($Theme['P']['root']); ?>/tmpl/wifiimg3/style.css">
<link rel="stylesheet" type="text/css" href="<?php echo ($Theme['P']['root']); ?>/tmpl/wifiimg3/style(1).css">
<script src="<?php echo ($Theme['P']['root']); ?>/tmpl/wifiimg3/idangerous.swiper.min.js"></script>

<section class="content clearfix">
    <div id="swiper_132973" class="swiper-container" style="max-width: 500px; max-height: 750px;">
    	<div id="deftextslide132973" style="display:none"><center>引导图组件：请添加图片</center></div> 
        <div class="swiper-wrapper" style="width: 500px; height: 750px;overflow:hidden;" id="zllding">
    		    <div id="zlldong" class="swiper-slide lead5_pic swiper-slide-visible swiper-slide-active" style="width: 9999px; height: 750px;">
    				<!--<img src="<?php echo ($Theme['P']['root']); ?>/tmpl/wifiimg3/bg1.jpg" style="max-width: 500px; max-height: 750px;">-->
					<?php if(!empty($ad)): if(is_array($ad)): $k = 0; $__LIST__ = $ad;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k; if((strlen($vo["advurl"])) > "2"): ?><a href="http://<?php echo ($vo["advurl"]); ?>"><div style="float:left;"><img id="guanggao<?php echo ($k); ?>"  style="max-width: 500px; max-height: 750px;" src="<?php echo ($vo["ad_thumb"]); ?>"></div></a>
							<?php else: ?>
								<div style="float:left;"><img id="guanggao<?php echo ($k); ?>"  style="max-width: 500px; max-height: 750px;" src="<?php echo ($vo["ad_thumb"]); ?>"></div><?php endif; endforeach; endif; else: echo "" ;endif; endif; ?>	
    			</div>
    	</div>
        <div id="pagination_132973" class="pagination" style="width: 500px;"><span class="swiper-pagination-switch swiper-visible-switch swiper-active-switch"></span></div>
    </div>
</section>
<script>
$(function(){
        //document.body.addEventListener('touchmove', function (event) { event.preventDefault();}, false);
        var $leadPic = ($(".lead5_pic").length-1)*2500+100;
        setTimeout(function() { 
            $("#X_leadBtn").show();
        }, $leadPic);
});

var mySwiper_132973;

function initSwiper(){
	mySwiper_132973 = new Swiper('#swiper_132973',{
        pagination: '#pagination_132973',
        paginationClickable: true,
        moveStartThreshold: 100,
    	autoplay:2500
      })
}
function getSwiper132973(){
	return mySwiper_132973;
}

function insertImg(mySwiper,src){
	var imgHtml = '<div class="swiper-slide lead5_pic"><img  src="';
    			imgHtml =  imgHtml+src;
    			imgHtml =  imgHtml+ '"/></div>';
	mySwiper.appendSlide(imgHtml)  ;

}
function removeImg(mySwiper,num){
	
	mySwiper.removeSlide(num);  

}

initSwiper();
</script>




		</section>


<footer>
	<div style="display:none;" id="hostname">AY14072014213879272aZ</div>
	        <div class="footer_lead">
        	<link rel="stylesheet" type="text/css" href="<?php echo ($Theme['P']['root']); ?>/tmpl/wifiimg3/style.min.css" charset="UTF-8">
<div class="hide" id="X_leadBtn" style="display: block;">
 <a href="#" id="">
<div class="login-btn c-white" style="width: 150px; height: 150px; font-size: 20px; line-height: 150px; background: url(<?php echo ($Theme['P']['root']); ?>/tmpl/wifiimg3/btn_150.png) 50% 50% no-repeat;" onclick="$('#renzhengtype').fadeToggle();">免费上网</div>
</a>
				
</div>
<div id="renzhengtype"style="margin-top:-400px;font-size:20px;display:none" >
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
						
						<p style="text-align: center;line-height:40px;">每日免费上网次数是<?php echo ($shopinfo[0]['countmax']); ?>次 </br>
						
						</p>
						
					</div>
					</div><?php endif; ?>
			
		<?php else: ?>
			<div class="ugbox">
			<div class="ugbox-son">
				
				<p style="text-align: center;line-height:40px;">当前时间不提供上网服务.</br>
				<?php if(($authmode['openflag']) == "true"): ?>上网开放时间为每日 <?php echo ($authmode["opensh"]); ?>:00点至<?php echo ($authmode["openeh"]); ?>:00点<?php endif; ?>
				</p>
				
			</div>
			</div><?php endif; endif; ?>
<div class="ugbox">
<div class="ugbox-son"><a class="btn-go"  href="<?php echo U('userauth/comments');?>">客户留言</a></div>
</div>
		<!--如果有倒计时-->
		
</div>


								<!--<div class="powered c-back" style="font-size: 14px;">技术支持&nbsp;&nbsp;风讯云</span></div>-->
          
				        </div>
		
	</footer>

<script>
 $(function(){
      if($(window).height()<800){
          $(".login-btn").css({"background":"url(<?php echo ($Theme['P']['root']); ?>/tmpl/wifiimg3/btn_150.png) no-repeat center center","width":"150px","height":"150px","font-size":"20px","line-height":"150px"});
          $(".footer_lead img").css({"margin-top":"-145px"});
          $(".swiper-container,.swiper-slide img").css({"max-width":"580px","max-height":"870px"});
          $(".pagination").css({"width":"580px"});
          }
      if($(window).height()<700){
          $(".footer_lead .powered").css("font-size","14px");
          
          $(".swiper-container,.swiper-slide img").css({"max-width":"500px","max-height":"750px"});
          $(".pagination").css({"width":"500px"});
          }
      if($(window).height()<600){
          $(".footer_lead .powered").css("font-size","12px");
          $(".login-btn").css({"background":"url(<?php echo ($Theme['P']['root']); ?>/tmpl/wifiimg3/btn_120.png) no-repeat center center","width":"130px","height":"130px","font-size":"20px","line-height":"130px"});
          $(".footer_lead img").css({"margin-top":"-120px"});
          
          $(".swiper-container,.swiper-slide img").css({"max-width":"400px","max-height":"600px"});
          $(".pagination").css({"width":"100%","max-width":"400px"});
          }
      if($(window).height()<300){
          $(".footer_lead .powered").css("font-size","10px");
          }
  });
</script>
<!--[if lt IE 9]>
<script src="<?php echo ($Theme['P']['root']); ?>/tmpl/wifiimg3/html5.js"></script>
<script src="<?php echo ($Theme['P']['root']); ?>/tmpl/wifiimg3/css3-mediaqueries.min.js"></script>
<![endif]-->

<script>
var kuan=500;
	$("#zlldong").css("width","9999px");
$(document).ready(function() 
{
	//获得窗口宽度高度
	kuan = $("#zllding").css("width");
	//alert($("#zlldong").find('img').length);
	$("#zlldong").find('img').css("width",kuan);
	//alert(kuan);
})
var num = $("#zlldong").find('img').length;

var jishi = 1;
setInterval("gundong()",3000);
function gundong(){
	jishi++;
	if(jishi > num){
		jishi=1;
		$("#zlldong").animate({marginLeft:"0px"});
	}else{
		$("#zlldong").animate({marginLeft:"-="+kuan});
	}
	$("#zlldong").css("width","9999px");
	kuan = $("#zllding").css("width");
}
window.onresize=function(){  
	kuan = $("#zllding").css("width");
	$("#zllding").find('img').css("width",kuan);
	$("#zlldong").css("width","9999px");
} 
</script>
 <?php if($islm == '1'): ?><div class="footer_banner" id="zfooter"><div class="footer-fix-inner"><i class="banner_close J_close_banner" onclick="$('#zfooter').hide();">x</i><div class="footer-open" id="footer_download"><i class="dp-icon" style="display:none;"></i><a href="<?php echo U('lianmeng/index','shopid='.$shopid);?>"><p class="J_open_app wrap" style="color:white;">商家联盟</p></a><a class="imm-open J_open_app" href="<?php echo U('lianmeng/index','shopid='.$shopid);?>">立即查看</a></div></div></div><?php endif; ?>
<script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1253016770'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "w.cnzz.com/c.php%3Fid%3D1253016770' type='text/javascript'%3E%3C/script%3E"));</script>
</body></html>