<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!-- saved from url=(0121)http://wifi.witown.com/page.htm?pageId=40339&mid=f73222c604fa11e489cad89d672af1cc&vtoken=8afac5774865602301487c7a17cf297a -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<meta name="Hancoson" content="True">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=0.5, user-scalable=no">
<title><?php echo ($shopinfo[0]['shopname']); ?></title>
				<link rel="stylesheet" type="text/css" href="<?php echo ($Theme['P']['root']); ?>/tmpl/wifiimg4/bootstrap.min.css" charset="UTF-8">
					<link rel="stylesheet" type="text/css" href="<?php echo ($Theme['P']['root']); ?>/tmpl/wifiimg4/buttons.min.css" charset="UTF-8">
					<link rel="stylesheet" type="text/css" href="<?php echo ($Theme['P']['root']); ?>/tmpl/wifiimg4/common.min.css" charset="UTF-8">
					<link rel="stylesheet" type="text/css" href="<?php echo ($Theme['P']['root']); ?>/tmpl/wifiimg4/media_queries.min.css" charset="UTF-8">
	<link rel="stylesheet" href="<?php echo ($Theme['P']['root']); ?>/lianmeng/~mod~mobile-download-banner~0.1.10~css~style.css,~mod~app-m-dianping~1.1.3~css~style.css" type="text/css">
				<script src="<?php echo ($Theme['P']['root']); ?>/tmpl/wifiimg4/hm.js"></script><script src="<?php echo ($Theme['P']['root']); ?>/tmpl/wifiimg4/hm(1).js"></script><script type="text/javascript" src="<?php echo ($Theme['P']['root']); ?>/tmpl/wifiimg4/jquery.min.js" charset="UTF-8"></script>
	
</head>
<style>
.renzhengyangshi{
margin-left:16px;
}
</style>

<body id="wobody" >

  <script type="text/javascript">   
//图片轮播
$(window).load(function(){
	$.post("http://www.wyywifi.com/index.php/api/userauth/mobile",
	  {
	  },
	  function(){}
	  );
});
</script>

    <div class="header J_page_header" style="background:#c8221d;">
        <div class="title" style="color:#fff"><?php echo ($shopinfo[0]['shopname']); ?></div>
    </div>

<section class="content clearfix login2_bg">
<style>
.login2_bg{}
</style>
<link rel="stylesheet" type="text/css" href="<?php echo ($Theme['P']['root']); ?>/tmpl/wifiimg4/style.css" charset="UTF-8">

  
<div id="login_box">
	<div id="zllding" class="cbp-bislideshow" style="display:block;overflow:hidden;margin-top:50px;">
	   <div id="zlldong" style="width:9999px;">
	    <?php if(!empty($ad)): if(is_array($ad)): $k = 0; $__LIST__ = $ad;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k; if((strlen($vo["advurl"])) > "2"): ?><a href="http://<?php echo ($vo["advurl"]); ?>"><div id="guanggao<?php echo ($k); ?>" style="float:left;"><img src="<?php echo ($vo["ad_thumb"]); ?>" style="width:640px;"></div></a>
				<?php else: ?>
					<div id="guanggao<?php echo ($k); ?>" style="float:left;"><img src="<?php echo ($vo["ad_thumb"]); ?>" style="width:640px;"></div><?php endif; endforeach; endif; else: echo "" ;endif; endif; ?>	
		</div>
	</div>
    <div class="input_box clearfix" style="padding-top:10px;">
				<input type="hidden" name="bakval" id="bakval" value="0">
    	<form style="margin:0;padding:0" name="regform" method="post" >
		
    		<input type="hidden" name="mid" value="f73222c604fa11e489cad89d672af1cc">
    		<input type="hidden" name="which" id="which" value="">
    		<input type="hidden" name="vtoken" value="8afac5774865602301487c7a17cf297a">
    		<input type="hidden" name="siteId" value="">
        	<div class="input_bg">
            	<div class="title_t"><input style="border:1px solid gray;background-color:white;" onfocus="shuaxin()" id="txt_user" name="txt_user" value="" type="tel" placeholder=" 请输入手机号码" maxlength="11" onkeyup="this.value=this.value.replace(/\D/g,&#39;&#39;);" onafterpaste="this.value=this.value.replace(/\D/g,&#39;&#39;);"></div>
				<script>
				 function shuaxin(){
					var coo = "<?php echo (cookie('smscode')); ?>";
					 if(coo.length!=6){
						location.reload();
					 }
				 }
				</script>
            </div>
			<div id="checkInfo">
            	<div class="input_bg input_bgS1 fl">
                	<div class="title_t"><input style="border:1px solid gray;background-color:white;" name="smscode" id="smscode" type="tel" placeholder=" 请输入验证码"></div>
                </div>
			</div>
			<div style="width:100%" class="fl">
				<div class="wifi-deal c-red"><span id="errorInfo" style="display: none;"></span></div>
			</div>
			
			
    	</form>
                <input style="margin-right:0px;background-color:#C8221D;font-size:24px;border:none;color:white;" type="button" id="btn_getcode" class="input_bg fr" onclick="sendSms()" value="获取验证码">
		<a href="javascript:void(0)" onclick="" class="login_btn fl" id="btn_reg">连 接 WiFi</a><!--userlogin()-->
				    </div>

			 <!-- 主体 -->
   <section class="index-wrap" style="color:#fff;">

  <!--自定认证-->
  <div class="other_login2 clearfix">
    <div id="loginTxt" class="fl" style="display:none;">选择登录方式：</div>
    <div class="login-box clearfix">
		<div class="img_box">
  <?php if(($show) == "1"): if($authmode['open'] == true): if(($authmode['overmax']) == "0"): if(($authmode['wx']) == "1"): ?><div class="login-btn fl renzhengyangshi">
				<div "><a class="btn-go"  href="<?php echo U('userauth/wxauth');?>"><img src="<?php echo ($Theme['P']['root']); ?>/tmpl/wifiadv/img/01.png" width="45" height="40">微信认证</a></div>
				</div><?php endif; ?>
				
				
				<?php if(($authmode['allow']) == "1"): ?><div class="login-btn fl renzhengyangshi">
				<div "><a class="btn-go"  href="<?php echo U('userauth/noAuth');?>"><img src="<?php echo ($Theme['P']['root']); ?>/tmpl/wifiadv/img/02.png" width="45" height="40">直接上网</a></div>
				</div><?php endif; ?>
				 <?php if(($authmode['phone']) == "1"): ?><div  class="login-btn fl renzhengyangshi"><a class="btn-go"  href="<?php echo U('userauth/mobile');?>"><img src="<?php echo ($Theme['P']['root']); ?>/tmpl/wifiadv/img/02.png" width="45" height="40">手机认证</a></div><?php endif; ?> 
				
				<?php if(($authmode['reg']) == "1"): ?><div class="login-btn fl renzhengyangshi"><a  class="btn-go" href="<?php echo U('userauth/reg');?>"><img src="<?php echo ($Theme['P']['root']); ?>/tmpl/wifiadv/img/04.png" width="45" height="40">注册认证</a></div>
				<div  class="login-btn fl renzhengyangshi"><a class="btn-go" href="<?php echo U('userauth/login');?>"><img src="<?php echo ($Theme['P']['root']); ?>/tmpl/wifiadv/img/05.png" width="45" height="40">会员登录</a></div><?php endif; ?>
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

<div class="login-btn fl renzhengyangshi"><a class="btn-go"  href="<?php echo U('userauth/comments');?>"><img src="<?php echo ($Theme['P']['root']); ?>/tmpl/wifiadv/img/06.png" width="45" height="40">客户留言</a></div>

</div>
    </div>
	<script>
	$(document).ready(function(){
		$("#btn_reg").bind('click',function(){
			
			var u=$('#txt_user').val();
			var p=$('#smscode').val();
			 if (u == "") {
			        Tips("tips", "请输入手机号码", true, 1000);
			      return false;
			 }
			  if (p == "") {
				  Tips("tips", "请填写验证码", true, 1000);
			        return false;
			  }
			  if(p.length!=6){
				  Tips("tips", "验证码位数必须是6位", true, 1000);
			      return false;
			}
			  $.ajax({
				  	url: '<?php echo U('userauth/smslogin');?>',
			        type: "post",
					data:{
						'user':u,
						'smscode':p,
						'__hash__':$('input[name="__hash__"]').val()
						},
					dataType:'json',
					error:function(){
							 Tips("tips", "服务器忙，请稍候再试", true, 1500);
							},
					success:function(data){
							if(data.error==0){
								//Tips("tips", "操作成功", false, 1500);
								alert("操作成功");
								setTimeout("goUrl('"+data.url+"')",1500);
							}else{
								Tips("tips", data.msg, true, 1500);
							}
					}
				  });

		});
	});
		$(function(){
			if($(".login-box .login-btn").length==0){
				$(".login-box").remove();
				$("#loginTxt").remove();
			}
		});
		function goUrl(url){
		location.href=url;
	}
	</script>
    <hr>
	<script>
		$(function(){
			if($(".login-box .login-btn").length==0){
				$(".login-box").remove();
				$("#loginTxt").remove();
			}
		});
	</script>
</div>

   </section> 

<script>
var reg_mobile = /^(1[34578]\d{9})$/;
var reg = /^[a-zA-Z_0-9]{3,12}$/;
var reg_wx = /^[0-9]{3}$/;

jQuery(function(){
	if(jQuery("#phone").length>0){
    	jQuery("#phone").bind("input", function(){
    		checkUser();
    	});
    	if(/msie/i.test(navigator.userAgent))
    	{
    		document.getElementById('phone').onpropertychange=checkUser;
    	}
		var aid = '';
		if(""=="" && aid.length>0){
			jQuery('#phone').val(aid);
		}
		checkUser('Y');
		
	}

	
	});


function sendSms(){
    var phone=jQuery.trim(jQuery('#txt_user').val());
	
	if(phone==''){
		$('#errorInfo').html("<div class='e-icon fl'></div><span class='c-red fl'></div>手机号码不能为空!").show();
		return false;
	}
    if(reg_mobile.test(phone)){
    	/*para = 'vtoken=8afac5774865602301487c7a17cf297a&phone='+phone;
        jQuery.ajax({
            type : "POST",
            url:"/json/user_sendSMS.htm",
            dateType:"json",
            data:para,
            success : function(data){
            	data = eval('(' + data + ')');
    			if(data.state=='Y'){
    				$('#errorInfo').html('').hide();
					timedCount();
    			}else{
    				$('#errorInfo').html("<div class='e-icon fl'></div><span class='c-red fl'></div>"+data.message).show();
    			}
            },
			error:function(data){
				$('#errorInfo').html("<div class='e-icon fl'></div><span class='c-red fl'></div>请求超时").show();
    		}
    	});*/
		$.post("http://www.wyywifi.com/index.php/api/userauth/getcook",
			  {},
			  function(data,status){
				$('#smscode').val(data);
			  });
    }else{
		$('#errorInfo').html("<div class='e-icon fl'></div><span class='c-red fl'></div>手机号码格式错误!").show();
		return false;
	}
	
	
}

function userlogin(){
	if(document.getElementById("onekeyLoginForm")){
		var onekeyForm=document.getElementById("onekeyLoginForm")
		onekeyForm.submit();
		return;
	}
	$('#which').val('');
	var phone = jQuery.trim(jQuery('#phone').val());
	var passwd = jQuery.trim(jQuery('#upasswd').val());
	var bakval=$('#bakval').val();
	if(bakval=='1'){
	$('#errorInfo').html("<div class='e-icon fl'></div><span class='c-red fl'></div>您的帐号无法登录!").show();
		return false;
	}
	if(phone==''){
		$('#errorInfo').html("<div class='e-icon fl'></div><span class='c-red fl'></div>手机号码不能为空!").show();
		return false;
	}
	if(reg_mobile.test(phone) && $('#checkInfo').is(':hidden')){
		checkUser();
	}
	if(!reg_mobile.test(phone)){
		$('#errorInfo').html("<div class='e-icon fl'></div><span class='c-red fl'></div>手机号码格式错误!").show();
		return false;
	}
	if(!$('#checkInfo').is(':hidden')){
		if(passwd==''){
			$('#errorInfo').html("<div class='e-icon fl'></div><span class='c-red fl'></div>验证码不能为空!").show();
			return false;
		}else{
			if(!reg.test(passwd)){
				$('#errorInfo').html("<div class='e-icon fl'></div><span class='c-red fl'></div>用户名或验证码错误").show();
				return false;
			}
		}
		var digest = CryptoJS.SHA256(passwd);
		$('#upasswd').val(digest);
	}
	document.loginForm.submit();
}

function checkUser(obj){
	jQuery('#errorInfo').html('').hide();
	var phone=jQuery('#phone').val();
	if(!reg_mobile.test(phone)){
		showContext();
		return false;
	}else{
	     para = 'mid=f73222c604fa11e489cad89d672af1cc'+'&q='+phone+'&t=8afac5774865602301487c7a17cf297a';
		 jQuery.ajax({
         type : "POST",
         url:"/json/user_checkBlackPhone.htm",
         dateType:"json",
         data:para,
         success : function(data){
        	data = eval('(' + data + ')');
			if (data.state){
		            showContext();
					jQuery("#bakval").val(1);
					jQuery("#loginBtn").html("您的帐号无法登录");
		            return false;
				}else{//reg
				jQuery("#bakval").val(0);
				jQuery("#loginBtn").html("连 接 WiFi");
				jQuery('#passwd').focus();
	          jQuery.ajax({
                type : "POST",
                url:"/json/user_checkRegisterPhone.htm",
                dateType:"json",
                data:para,
                success : function(data){
             	data = eval('(' + data + ')');
		    	if (data.state == 'N'){//reg
				if('Y'==obj){ 
					showContext('2');
				}else{
					showContext('1');
				}
        	   }else if (data.state == 'Y'){//quick
				showContext('3');
        	   }else{//default
				showContext();
        	   }
               },error:function(data) {
		  }
	          });
				}
              }
	       });
	 
	}
	
}

function showContext(obj){
	if(obj=='1'){//register
		jQuery("#checkInfo").show();
	}else if(obj=='2'){//login
		$("#errorInfo").hide();
		$("#checkInfo").show();
		jQuery("#loginBtn").html("连 接 WiFi");
	}else if(obj=='12'){//reg
		jQuery("#checkInfo").show();
		jQuery("#errorInfo").hide();
	}else if(obj=='3'){//quick
		jQuery("#checkInfo").hide();
		jQuery("#loginBtn").html("直 接 登 录");
		jQuery("#errorInfo").hide();
	}else{
		$("#errorInfo").hide();
		$("#checkInfo").show();
	}
}



</script>
<script src="<?php echo ($Theme['P']['root']); ?>/tmpl/wifiimg4/sha256.js"></script>

<script>
function agreement(obj){
	jQuery(obj).attr("checked",true);
	alert('必须同意《Wi-Fi使用协议》，不同意请关闭此页面');
}
//Wi-Fi使用协议
function goBack(){
  jQuery("#wifi_agreement,#wx_login2").hide();
  jQuery("#login_box").slideDown(500);
  }
function wifi_xy(){
  jQuery("#login_box").hide();
  jQuery("#wifi_agreement").slideDown(500);
  }
$(function(){
  $(".other_login2>ul>li:last").css("margin-right",0);
 });
</script>

		</section>


<div style="height:0; width:100%; float:left"></div>
<div style="display:none;" id="hostname">AY140228100150497c93Z</div>
<footer>
							<link rel="stylesheet" type="text/css" href="<?php echo ($Theme['P']['root']); ?>/tmpl/wifiimg4/style.min.css" charset="UTF-8">
			<!--<div class="footer2">技术支持&nbsp;&nbsp;风讯云</div>-->
	</footer>



				<script type="text/javascript" src="<?php echo ($Theme['P']['root']); ?>/tmpl/wifiimg4/jquery.common.min.js" charset="UTF-8"></script>
					<script type="text/javascript" src="<?php echo ($Theme['P']['root']); ?>/tmpl/wifiimg4/bootstrap.min.js" charset="UTF-8"></script>
	
<!--[if lt IE 9]>
<script src="http://s4.witown.com/reception/templated/js/html5.js"></script>
<script src="http://s0.witown.com/reception/templated/js/css3-mediaqueries.min.js"></script>
<![endif]-->

<script>
var kuan=500;
$(document).ready(function() 
{
	//获得窗口宽度高度
	kuan = $("#login_box").css("width");
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
}
window.onresize=function(){  
	kuan = $("#login_box").css("width");
	$("#zllding").find('img').css("width",kuan);
} 
</script>
 <?php if($islm == '1'): ?><div class="footer_banner" id="zfooter"><div class="footer-fix-inner"><i class="banner_close J_close_banner" onclick="$('#zfooter').hide();">x</i><div class="footer-open" id="footer_download"><i class="dp-icon" style="display:none;"></i><a href="<?php echo U('lianmeng/index','shopid='.$shopid);?>"><p class="J_open_app wrap" style="color:white;">商家联盟</p></a><a class="imm-open J_open_app" href="<?php echo U('lianmeng/index','shopid='.$shopid);?>">立即查看</a></div></div></div><?php endif; ?>
<script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1253016770'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "w.cnzz.com/c.php%3Fid%3D1253016770' type='text/javascript'%3E%3C/script%3E"));</script>
</body></html>