<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=no" />
<meta name="viewport" content=" initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="format-detection" content="telephone=no">
<title><?php echo ($shopinfo[0]['shopname']); ?></title>
<link href="<?php echo ($Theme['T']['css']); ?>/ui-base.css"  rel="stylesheet" />
<link href="<?php echo ($Theme['T']['css']); ?>/ui-color.css"  rel="stylesheet"/>
<link href="<?php echo ($Theme['T']['css']); ?>/login.css"  rel="stylesheet"/>
<link href="<?php echo ($Theme['T']['css']); ?>/media.css"  rel="stylesheet"/>
<!--
下面一句js引用请勿修改，oAuth.js保留使用服务器的版本，以便于及时获取到更新的文件，如您将此js下载到本地，可能在后续平台升级过程中遇到问题。
		-->
		<script type="text/javascript" src="http://service.rippletek.com/ext/js/oAuth.js"></script>
		<!--
		上面一句js引用请勿修改，oAuth.js保留使用服务器的版本，以便于及时获取到更新的文件，如您将此js下载到本地，可能在后续平台升级过程中遇到问题。
		-->
</head>
<body>
<script type="text/javascript">
function onKeyPress(e)
	    {
	        var keyCode = null;
	        if(e.which)
	            keyCode = e.which;
	        else if(e.keyCode) 
	            keyCode = e.keyCode;
	            
	        if(keyCode == 13) 
	        {
	            rptk_weixin_submit('loginkey');
	            return false;
	        }
	        return true;
	    }
		function rptk_is_ios() {
		    var u = window.navigator.userAgent;
		    var device_types = ["iPhone", "iPod", "iPad"];
		    for (var i in device_types) {
		        var dt = device_types[i];
		        if (u.indexOf(dt) >= 0) {
		            return true;
		        }
		    }
		    return false;
		}
		function rptk_display() {
			if (rptk_is_ios())
			{
				document.getElementById("ios_button").style.display="block";
				document.getElementById("not_ios").style.display="none";
			}
			else
			{
				document.getElementById("not_ios").style.display="block";
				document.getElementById("ios_button").style.display="none";
			}
		}
</script>
<div class="header">
	<div class="headbox"><?php echo ($shopinfo[0]['shopname']); ?></div>
</div>
<div class="content">
<div class="formbox">

<form name="regform">
<div class="tips" id="tips"></div>
 <label class="lb_title mr-tb-5" >第一步:&nbsp;&nbsp;关注微信号:&nbsp;&nbsp;<?php echo ($wxname); ?></br></br>第二步:&nbsp;&nbsp;回复关键词"上网"<br></br>第三步:&nbsp;&nbsp;点击链接,开始上网<br></label>
<div class="">
</div>
 <!--<label class="lb_title mr-tb-5"  for="password">上网密码:</label>
	<div class="iptbox corner-all-6 mr-tb-5 us-input">
	<input class="ipt" type="password" name="password" id="password"  placeholder="请输入微信验证密码" value="" autocomplete="off">
</div>-->
   <div class="tips  mr-tb-5" id="tips"></div>
  <!--  <div class="tryonline wx-button" id="ios_button" style="display:block">
				<a href="http://weixin.qq.com/r/bHV9ZRzEoEHfrVgG9yB_" class="try-on2">去微信认证</a>
			</div> -->
<a  class="btn_base corner-all-10 c-m2 c-bla t-wh us uba b-gra mr-tb-5" href="http://weixin.qq.com/r/bHV9ZRzEoEHfrVgG9yB_" id="btn_reg">打开微信关注</a>
<p style="text-align:center" id="wolegequ">仅限苹果手机点击可以打开微信,安卓请自己打开微信</p>
<a  class="btn_base corner-all-10 c-ml-f1 c-eee  t-bla us uba b-wh " href="javascript:void(0);" id="btn_back">返回首页</a>
</div>


	</form>
</div>
</div>
<script type="text/javascript" src="<?php echo ($Theme['P']['js']); ?>/jquery.js"></script>
<script type="text/javascript">
/*
* 智能机浏览器版本信息:
*
*/
  var browser={
    versions:function(){ 
           var u = navigator.userAgent, app = navigator.appVersion; 
           return {//移动终端浏览器版本信息 
                trident: u.indexOf('Trident') > -1, //IE内核
                presto: u.indexOf('Presto') > -1, //opera内核
                webKit: u.indexOf('AppleWebKit') > -1, //苹果、谷歌内核
                gecko: u.indexOf('Gecko') > -1 && u.indexOf('KHTML') == -1, //火狐内核
                mobile: !!u.match(/AppleWebKit.*Mobile.*/)||!!u.match(/AppleWebKit/), //是否为移动终端
                ios: !!u.match(/\(i[^;]+;( U;)? CPU.+Mac OS X/), //ios终端
                android: u.indexOf('Android') > -1 || u.indexOf('Linux') > -1, //android终端或者uc浏览器
                iPhone: u.indexOf('iPhone') > -1 || u.indexOf('Mac') > -1, //是否为iPhone或者QQHD浏览器
                iPad: u.indexOf('iPad') > -1, //是否iPad
                webApp: u.indexOf('Safari') == -1 //是否web应该程序，没有头部与底部
            };
         }(),
         language:(navigator.browserLanguage || navigator.language).toLowerCase()
}
//document.getElementById('btn_reg').style.display = "none";

if(browser.versions.android){
	$("#btn_reg").hide();
	$("#wolegequ").hide();
}
</script>

<script type="text/javascript" src="<?php echo ($Theme['T']['js']); ?>/api.js"></script>
<script>
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
		$("#btn_reg").bind('click',function(){
		
			var p=$('#password').val();
			 
			  if (p == "") {
				  Tips("tips", "请填写认证密码", true, 1000);
			        return false;
			  }
			  $.ajax({
				  	url: '<?php echo U('userauth/dowxauth');?>',
			        type: "post",
					data:{
					
						'password':p,
						
						},
					dataType:'json',
					error:function(){
							 Tips("tips", "服务器忙，请稍候再试", true, 1500);
							
							},
					success:function(data){
							if(data.error==0){
								Tips("tips", "认证成功", false, 1500);
								setTimeout("goUrl('"+data.url+"')",1500);
							}else{
								Tips("tips", data.msg, true, 2000);
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
<script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1253016770'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "w.cnzz.com/c.php%3Fid%3D1253016770' type='text/javascript'%3E%3C/script%3E"));</script>
</body>
</html>