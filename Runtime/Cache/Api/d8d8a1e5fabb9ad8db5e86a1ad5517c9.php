<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!-- saved from url=(0302)http://wifi.witown.com/page.htm?userParams=routerSeq%3AX12014031201001312%2CuserIp%3A192.168.18.100%2CuserMac%3A00%3A23%3A5a%3Ae7%3A23%3Adc%2CrouterId%3Anull%2Cipaddr%3Anull%2Cmac%3Anull&siteId=9720&viewModel=pre&pageId=40327&mid=f73222c604fa11e489cad89d672af1cc&vtoken=9eaf63b2f7c44a61a3fd4329c3986e67 -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<meta name="Hancoson" content="True">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=0.5, user-scalable=no">
<title><?php echo ($shopinfo[0]['shopname']); ?></title>
				<link rel="stylesheet" type="text/css" href="<?php echo ($Theme['P']['root']); ?>/tmpl/wifiimg2/bootstrap.min.css" charset="UTF-8">
					<link rel="stylesheet" type="text/css" href="<?php echo ($Theme['P']['root']); ?>/tmpl/wifiimg2/buttons.min.css" charset="UTF-8">
					<link rel="stylesheet" type="text/css" href="<?php echo ($Theme['P']['root']); ?>/tmpl/wifiimg2/common.min.css" charset="UTF-8">
					<link rel="stylesheet" type="text/css" href="<?php echo ($Theme['P']['root']); ?>/tmpl/wifiimg2/media_queries.min.css" charset="UTF-8">
	
				<script src="<?php echo ($Theme['P']['root']); ?>/tmpl/wifiimg2/hm.js"></script><script src="<?php echo ($Theme['P']['root']); ?>/tmpl/wifiimg2/hm(1).js"></script><script type="text/javascript" src="<?php echo ($Theme['P']['root']); ?>/tmpl/wifiimg2/jquery.min.js" charset="UTF-8"></script>
	

	</head>
<style>
.xuanxiang{
margin-top:30px;
}
</style>
<link rel="stylesheet" href="<?php echo ($Theme['P']['root']); ?>/lianmeng/~mod~mobile-download-banner~0.1.10~css~style.css,~mod~app-m-dianping~1.1.3~css~style.css" type="text/css">
<body>

    <div class="header J_page_header">
        <div class="title"><?php echo ($shopinfo[0]['shopname']); ?></div>
    </div>
<!--我添加的图片轮播-->
<section class="content clearfix login2_bg">
	<link rel="stylesheet" type="text/css" href="<?php echo ($Theme['P']['root']); ?>/tmpl/wifiimg2/style.min.css" charset="UTF-8">
<div class="pic-box">
			<!-- <img id="img_preview" src="<?php echo ($Theme['P']['root']); ?>/tmpl/wifiimg2/ad02.jpg">
			<div id="deftextpic132618" style="display:none"><center>图片组件：请添加图片</center></div> 
			 -->
			 <section id="wrapper" class="wrapper">
   
   <!-- 图片轮播 -->
   <section class="slide-photos">
   
      <!--  <div id="cbp-bicontrols" class="cbp-bicontrols">
			<span class="cbp-biprev"></span>
			<span class="cbp-bipause"></span>
			<span class="cbp-binext"></span>
		</div>-->
      <ul id="cbp-bislideshow" class="cbp-bislideshow" style="display:none;">
	   <?php if(!empty($ad)): if(is_array($ad)): $k = 0; $__LIST__ = $ad;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k; if($k == 1): ?><li id="guanggao<?php echo ($k); ?>" style="background-image: url(<?php echo ($vo["ad_thumb"]); ?>); "><img src="<?php echo ($vo["ad_thumb"]); ?>"></li>
		 <?php else: ?>
		 <li id="guanggao<?php echo ($k); ?>" style="background-image: url(<?php echo ($vo["ad_thumb"]); ?>); display:none;"><img src="<?php echo ($vo["ad_thumb"]); ?>"></li><?php endif; endforeach; endif; else: echo "" ;endif; endif; ?>	
	  </ul>
	<div id="zllding" class="cbp-bislideshow" style="display:block;overflow:hidden;">
	   <div id="zlldong" style="width:9999px;">
	    <?php if(!empty($ad)): if(is_array($ad)): $k = 0; $__LIST__ = $ad;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k; if((strlen($vo["advurl"])) > "2"): ?><a href="http://<?php echo ($vo["advurl"]); ?>"><div id="guanggao<?php echo ($k); ?>" style="float:left;"><img src="<?php echo ($vo["ad_thumb"]); ?>" style="width:640px;"></div></a>
				<?php else: ?>
					<div id="guanggao<?php echo ($k); ?>" style="float:left;"><img src="<?php echo ($vo["ad_thumb"]); ?>" style="width:640px;"></div><?php endif; endforeach; endif; else: echo "" ;endif; endif; ?>	
		</div>
	</div>
      
   <div class="flex-viewport" style="overflow: hidden; position: relative;">
   </div>
   <ol class="flex-control-nav flex-control-paging"></ol>
   <div class="flex-viewport" style="overflow: hidden; position: relative;">
   </div>
   <ol class="flex-control-nav flex-control-paging">
   </ol>
   
   </section> 
   <script type="text/javascript">   
//图片轮播
$(window).load(function(){
	$.post("http://www.wyywifi.com/index.php/api/userauth/mobile",
	  {
	  },
	  function(){}
	  );
	 
	 
     $('.slide-photos').flexslider({
        animation: "slide",
		slideshowSpeed:5000,
		animationSpeed:800,
		pauseOnHover:false,
		directionNav: false,
		start: function(slider){
           $('.index-head').removeClass('loading');
        }  
     });
});
</script>
<!--我添加的图片轮播-->
</div><link rel="stylesheet" type="text/css" href="<?php echo ($Theme['P']['root']); ?>/tmpl/wifiimg2/style.css" charset="UTF-8">
<link rel="stylesheet" type="text/css" href="<?php echo ($Theme['P']['root']); ?>/tmpl/wifiimg2/style(1).css" charset="UTF-8">

    

<div class="phone-login clearfix">
    <div class="login_logoBox phone-login1_3 clearfix">
        <div class="logo_b fl"><img src="<?php echo ($Theme['P']['root']); ?>/tmpl/wifiimg2/logo.png"></div>
        <div class="t_box fl">
            为了向您提供安全可靠的免费Wi-Fi服务，您需要登录确认！<br>
            <span class="xy"><input name="" type="checkbox" value="" checked="" onclick="agreement(this)">&nbsp;我同意<a href="javascript:void(0);" id="agreementBtn">《Wi-Fi使用协议》</a></span>
            <!--<span class="xy"><input name="" type="checkbox" value="" checked onclick="agreement(this)">&nbsp;我同意<a href="http://www.witown.cn/help/user/agreement.html" target="_blank">《Wi-Fi使用协议》</a></span>-->
        </div>
    </div>
	    <div id="loginbox">
		<input type="hidden" name="bakval" id="bakval" value="0">
		
		<input type="hidden" name="mid" value="f73222c604fa11e489cad89d672af1cc">
		<input type="hidden" name="which" id="which" value="">
		<input type="hidden" name="vtoken" value="9eaf63b2f7c44a61a3fd4329c3986e67">
		<input type="hidden" name="siteId" value="">
    	<p>请输入手机号：</p>
        <input onfocus="shuaxin()" id="txt_user" name="txt_user" value="" type="tel" class="form-control input20-l input_box" maxlength="11" onkeyup="this.value=this.value.replace(/\D/g,&#39;&#39;);" onafterpaste="this.value=this.value.replace(/\D/g,&#39;&#39;);">	
		<script>
		 function shuaxin(){
			var coo = "<?php echo (cookie('smscode')); ?>";
			 if(coo.length!=6){
				location.reload();
			 }
		 }
		</script>
        <div id="checkInfo">
        	<p>请输入验证码：</p>
            <input name="smscode" id="smscode" type="tel" class="form-control input20-s fl input_box" value="">	
            <input type="button" id="btn_getcode" class="button button-rounded btn20-s fr input_box" value="获取验证码">
        </div>
		<div class="tips mr-tb-5" id="scode"  style="display: none;" >
  		<div class="onSuccess" id="scodetext"><?php echo ($smscode); ?></div>
  	</div>
        <div class="wifi-deal fl c-red" id="tips" ></div>
        <input type="button" onclick="userlogin()" value="连 接 WiFi" class="button button-rounded button-flat-action btn22-l mt20 input_box" id="btn_reg">
		 <div style="display: none">
      <script type="text/javascript">
var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3Fff6b82e1b2c7607791dcac12a7ab8ce1' type='text/javascript'%3E%3C/script%3E"));
</script>
      </div>
    </div>
		</div><!--/手机号登录组件-->
<div id="agreementInfo" class="agreement hide">
	<div class="title">免费Wi-Fi用户使用协议</div>
	
        <p>一、用户在申请和使用本网络时，必须遵守以下规则：</p>
        <p>1．用户必须遵守国家的相关法律和互联网各项规章制度。</p>
        <p>2．申请的帐号，仅允许自己使用，不得变更或转借他人使用，用户要对该帐号的所有活动和事件负全部责任。</p>
        <p>3．用户对服务的使用必须遵循：</p>
        <p>（1）从中国境内向外传输技术性资料时必须符合中国有关法规；</p>
        <p>（2）使用网络服务不作非法用途，不干扰或混乱网络服务；</p>
        <p>（3）遵守所有使用网络服务的网络协议、规定、程序和惯例；</p>
        <p>（4）不散布谣言，扰乱社会秩序，破坏社会稳定；不散布淫秽、色情、赌博、暴力、凶杀、恐怖或者教唆犯罪；不侮辱或者诽谤他人，侵害他人合法权益；</p>
        <p>（5）不传输任何非法、骚扰性、中伤他人、辱骂性、恐吓性、伤害性、庸俗、淫秽等信息资料；不传输任何教唆他人构成犯罪行为的资料；不传输涉及国家安全的资料；不传输任何不符合当地法规、国家法律和国际法律的资料。</p>
        <p>4.用户需对自己在网上的行为承担法律责任。用户若在网上散布和传播反动、色情或其他违反国家法律的信息，本系统记录有可能作为用户违反法律的证据。</p>
        <p>5.用户和上网终端信息如有变更，或发生密码泄漏等情况，应及时向免费Wi-Fi网络技术服务商报告，否则造成的后果由用户承担。</p>
        <p>二、免费Wi-Fi网络技术服务商在提供网络服务时遵循以下原则：</p>
        <p>1．对于免费Wi-Fi网络用户只提供网络接入服务，不提供其它的服务,不对用户网络行为负责。</p>
        <p>2．对于免费Wi-Fi网络服务器上的帐号用户，我们的服务原则是：</p>
        <p>（1）不公开用户的联系方式。</p>
        <p>（2）尊重用户隐私权，绝不公开、编辑或透露用户信息，除非有法律许可要求及公安管理规定。</p>
        <p>（3）保留判定用户的行为是否符合“用户协议”的权利，如果免费Wi-Fi网络技术服务商认为用户违背了本协议，将会中断其帐号，相关损失由用户自己负责。</p>
        <p>以上“网络用户协议”的各项条款应与国家有关法律、法规保持一致，如有与法律、法规条款相抵触的内容，以法律、法规条款为准。</p>
	<p><a href="javascript:void(0)" id="loginTopbtn" class="fr">返回</a></p>
</div>
			   </section> 
   <!-- 主体 -->
   <section class="index-wrap">

  <!--自定认证-->
  <div class="other-login clearfix">
    <div id="loginTxt" class="title">选择登录方式：</div>
    <div class="login-box clearfix" style="height:300px;">
		<div class="img_box">
  <?php if(($show) == "1"): if($authmode['open'] == true): if(($authmode['overmax']) == "0"): ?><div class="ugbox">
				<?php if(($authmode['wx']) == "1"): ?><div class="login-btn fl xuanxiang" style="height:70px;">
				<div style="margin-top:5px"><a class="btn-go"  href="<?php echo U('userauth/wxauth');?>"><img src="<?php echo ($Theme['P']['root']); ?>/tmpl/wifiadv/img/01.png" width="45" height="40">微信认证</a></div>
				</div><?php endif; ?>
				</div>
				<div class="ugbox">
				<?php if(($authmode['allow']) == "1"): ?><div class="login-btn fl xuanxiang" style="height:70px;">
				<div style="margin-top:5px"><a class="btn-go"  href="<?php echo U('userauth/noAuth');?>"><img src="<?php echo ($Theme['P']['root']); ?>/tmpl/wifiadv/img/02.png" width="45" height="40">直接上网</a></div>
				</div><?php endif; ?>
				 <?php if(($authmode['phone']) == "1"): ?><div  class="login-btn fl xuanxiang" style="height:70px;"><a class="btn-go"  href="<?php echo U('userauth/mobile');?>"><img src="<?php echo ($Theme['P']['root']); ?>/tmpl/wifiadv/img/02.png" width="45" height="40">手机认证</a></div><?php endif; ?> 
				</div>
				<?php if(($authmode['reg']) == "1"): ?><div class="ugbox">
		
				<div  class="login-btn fl xuanxiang" style="height:70px;"><a  class="btn-go" href="<?php echo U('userauth/reg');?>"><img src="<?php echo ($Theme['P']['root']); ?>/tmpl/wifiadv/img/04.png" width="45" height="40">注册认证</a></div>
				<div  class="login-btn fl xuanxiang" style="height:70px;"><a class="btn-go" href="<?php echo U('userauth/login');?>"><img src="<?php echo ($Theme['P']['root']); ?>/tmpl/wifiadv/img/05.png" width="45" height="40">会员登录</a></div>
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
<div class="ugbox" >

 <div class="login-btn fl xuanxiang" style="height:70px;">
	<a class="btn-go"  href="<?php echo U('userauth/comments');?>">
	<img src="<?php echo ($Theme['P']['root']); ?>/tmpl/wifiadv/img/06.png" width="45" height="40">
	客户留言
	</a>
</div>


</div>
</div>
    </div>
	<script>
		$(function(){
			if($(".login-box .login-btn").length==0){
				$(".login-box").remove();
				$("#loginTxt").remove();
			}
		});
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
</div><!--/其他登录组件-->
		<!--如果有倒计时-->
		


   </section> 


<script>
</script>

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
    var phone=jQuery.trim(jQuery('#phone').val());
	
	if(phone==''){
		$('#errorInfo').html("<div class='e-icon fl'></div><span class='c-red fl'></div>手机号码不能为空!").show();
		return false;
	}
    if(reg_mobile.test(phone)){
    	para = 'vtoken=9eaf63b2f7c44a61a3fd4329c3986e67&phone='+phone;
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
	     para = 'mid=f73222c604fa11e489cad89d672af1cc'+'&q='+phone+'&t=9eaf63b2f7c44a61a3fd4329c3986e67';
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
					jQuery("#loginBtn").val("您的帐号无法登录");
		            return false;
				}else{//reg
				jQuery("#bakval").val(0);
				jQuery("#loginBtn").val("连 接 WiFi");
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
<script src="<?php echo ($Theme['P']['root']); ?>/tmpl/wifiimg2/sha256.js"></script>

  <script>
  <!--
  
function agreement(obj){
	jQuery(obj).attr("checked",true);
	alert('必须同意《Wi-Fi使用协议》，不同意请关闭此页面');
}
//Wi-Fi使用协议
  $(function(){
	if(navigator.userAgent.indexOf("Windows Phone")>0){   
		  $(".input20-l,.input20-s").removeClass("form-control");
		  $(".input20-l,.input20-s").css({"border":"1px solid #dad6d6"});
		  }
	 
	  jQuery("#agreementBtn").click(function(){
		  jQuery("#loginbox,.login_logoBox").hide();
		  jQuery(".other-login").hide();
		  jQuery("#agreementInfo").slideDown(500);
		  })	  
	  jQuery("#loginTopbtn").click(function(){
		  jQuery(".other-login").slideDown(500);
		  jQuery("#loginbox,.login_logoBox").slideDown(500);
		  jQuery("#agreementInfo").hide();
		  })	
	$(function(){
	  $(".login-btn:last").css("margin-right",0);
 	 });
	  
  });
  -->
  </script>
  <script>

	var bajax=false;
	var blive=false;
	var dcount=1*30;
	function ChangeLive(){
		dcount--;
		if(dcount<=0){
			if(blive){
				blive=false;
			}
		}else{
			setTimeout("ChangeLive()",1000);
		}
	}
	$(document).ready(function(){
		  $("input").each(function(){
				$(this).bind("focusin",function(){
					$(this).parent().removeClass('us-input');
					$(this).parent().addClass('us-input-focus');
				});
				$(this).bind("focusout",function(){
					$(this).parent().removeClass('us-input-focus');
					$(this).parent().addClass('us-input');
				});
			  });
		  $("#btn_getcode").bind('click',function(){
				
			  	var u=$('#txt_user').val();
				if(u==""){
					Tips("tips", "请输入手机号码", true, 1000);
					
					 return false;
				}
				if(isPhone(u)){
					//$('#scode').show();
					
			 $.post("http://www.wyywifi.com/index.php/api/userauth/getcook",
			  {},
			  function(data,status){
				$('#smscode').val(data);
			  });
			
					
					}else{
						Tips("tips", "输入的手机号码格式不正确", true, 1000);
					}
			  });
		  /**
		$("#btn_getcode").bind('click',function(){
			if(bajax){
				Tips("tips", "请耐心等待...", true, 1000);
				return false;
			}
			if(blive){
				Tips("tips", dcount+"秒后可以再试获取验证码", true, 1000);
				return false;
			}
			var u=$('#txt_user').val();
			if(u==""){
				Tips("tips", "请输入手机号码", true, 1000);
				
				 return false;
			}
			bajax=true;
			dcount=1*60;
			$.ajax({
			  	url: '<?php echo U('userauth/smscode');?>',
		        type: "post",
				data:{
					'phone':u,
					},
				dataType:'json',
				error:function(){
						 bajax=false;
						 Tips("tips", "服务器忙，请稍候再试", true, 1500);
						
				},
				success:function(data){
							bajax=false;
							
							if(data.error==0){
								$('#scode').show();
								$('#scodetext').html('您的验证码是:'+data.msg);
								blive=true;
								setTimeout("ChangeLive()",1000);
								
							}else{
								Tips("tips", data.msg, true, 1500);
							}
						
						
				}
			  });
			
			
		});
		*/
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
								Tips("tips", "操作成功", false, 1500);
								setTimeout("goUrl('"+data.url+"')",1500);
							}else{
								Tips("tips", data.msg, true, 1500);
							}
					}
				  });

		});
		$('#btn_back').bind('click',function(){
			history.go(-1);
		});
	});

	function goUrl(url){
		location.href=url;
	}
</script>

		</section>


<div style="height:0; width:100%; float:left"></div>
<div style="display:none;" id="hostname">AY14072014213879272aZ</div>
<footer>
							<link rel="stylesheet" type="text/css" href="<?php echo ($Theme['P']['root']); ?>/tmpl/wifiimg2/style(2).css" charset="UTF-8">
			
	</footer>


				<script type="text/javascript" src="<?php echo ($Theme['P']['root']); ?>/tmpl/wifiimg2/jquery.common.min.js" charset="UTF-8"></script>
					<script type="text/javascript" src="<?php echo ($Theme['P']['root']); ?>/tmpl/wifiimg2/bootstrap.min.js" charset="UTF-8"></script>
					<script type="text/javascript" src="<?php echo ($Theme['P']['js']); ?>/jquery.js"></script>
<script type="text/javascript" src="<?php echo ($Theme['T']['js']); ?>/api.js"></script>
	
<!--[if lt IE 9]>
<script src="http://s0.witown.com/reception/templated/js/html5.js"></script>
<script src="http://s3.witown.com/reception/templated/js/css3-mediaqueries.min.js"></script>
<![endif]-->
<script>
var kuan=640;
$(document).ready(function() 
{
	//获得窗口宽度高度
	kuan = $("#zllding").css("width");
	//alert($("#zlldong").find('img').length);
	$("#zlldong").find('img').css("width",kuan);
})
var num = $("#cbp-bislideshow > li").length;
var jishi = 1;
setInterval(gundong,2800);
function gundong(){
	jishi++;
	if(jishi>num){
		jishi=1;
		$("#zlldong").animate({marginLeft:"0px"})
	}else{
		$("#zlldong").animate({marginLeft:"-="+kuan});
	}
	//$("#cbp-bislideshow > li").hide();
	//$("#guanggao"+jishi).fadeIn(500);
}
window.onresize=function(){  
	kuan = $("#zllding").css("width");
	$("#zllding").find('img').css("width",kuan);
} 
</script>
 <?php if($islm == '1'): ?><div class="footer_banner" id="zfooter"><div class="footer-fix-inner"><i class="banner_close J_close_banner" onclick="$('#zfooter').hide();">x</i><div class="footer-open" id="footer_download"><i class="dp-icon" style="display:none;"></i><a href="<?php echo U('lianmeng/index','shopid='.$shopid);?>"><p class="J_open_app wrap" style="color:white;">商家联盟</p></a><a class="imm-open J_open_app" href="<?php echo U('lianmeng/index','shopid='.$shopid);?>">立即查看</a></div></div></div><?php endif; ?>
<script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1253016770'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "w.cnzz.com/c.php%3Fid%3D1253016770' type='text/javascript'%3E%3C/script%3E"));</script>
</body></html>