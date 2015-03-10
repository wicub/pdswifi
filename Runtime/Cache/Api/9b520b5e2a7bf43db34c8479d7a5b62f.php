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
</head>
<body>
<div class="topbar">
	<div class="headtitle font18"><?php echo ($shopinfo[0]['shopname']); ?></div>
</div>

<div class="mainbox bgform clearfix">
<div class="formbox">
<form name="regform">
	<label class="lb_title mr-tb-5" for="txt_user">用户名:</label>
	<div class="iptbox corner-all-4 mr-tb-5 ">
		<input class="ipt" type="text" name="txt_user" id="txt_user" placeholder="请输入用户名" value="" maxlength="20">
	</div>
 <label class="lb_title mr-tb-5"  for="password">密码:</label>
	<div class="iptbox corner-all-4 mr-tb-5 ">
	<input class="ipt" type="password" name="password" id="password"  placeholder="请输入密码" value="" autocomplete="off">
</div>
   <label  class="lb_title mr-tb-5"  for="phone">手机号码:</label>
	<div class="iptbox corner-all-4 mr-tb-5 ">

	<input class="ipt" type="tel" name="phone" id="phone" value="" placeholder="请输入手机号码" autocomplete="off" maxlength="11">
	
</div>
 	<label class="lb_title mr-tb-5" for="qq">QQ:</label>
	<div class="iptbox corner-all-4 mr-tb-5 ">
  
	<input class="ipt" type="tel" name="qq" id="qq" value="" placeholder="请输入QQ号码" autocomplete="off" maxlength="15">
	
</div>
<div class="tips  mr-tb-10" id="tips"></div>
<a  class="btn_base corner-all-10 t-wh c-wifiadv uba mr-tb-10" href="javascript:void(0);" id="btn_reg">会员注册</a>
<a  class="btn_base corner-all-10 c-eee  t-333  uba b-wh " href="javascript:void(0);" id="btn_back">返回首页</a>

	</form>
</div>
<div class="blockdiv"></div>
</div>

<script type="text/javascript" src="<?php echo ($Theme['P']['js']); ?>/jquery.js"></script>
<script type="text/javascript" src="<?php echo ($Theme['T']['js']); ?>/api.js"></script>
<script>
	var bajax=false;
	  $(function(){
		  $("input").each(function(){
				$(this).bind("focusin",function(){
				
					$(this).parent().addClass('us-input-focus');
				});
				$(this).bind("focusout",function(){
					$(this).parent().removeClass('us-input-focus');
				
				});
			  });
		$("#btn_reg").bind('click',function(){
			var u=$('#txt_user').val();
			var p=$('#password').val();
			var m=$('#phone').val();
			var q=$('#qq').val();
			 if (u == "") {
				 
			        Tips("tips", "请输入用户名", true, 1000);
			    	
			        return false;
			 }
			  if (p == "") {
				
				  Tips("tips", "请输入密码", true, 1000);
			        return false;
			  }
			  if (m == "") {
				 
				  Tips("tips", "请填写有效的11位手机号码", true, 1000);
			        return false;
			  }
			  if (q == "") {
				 
				  Tips("tips", "请输入QQ号码", true, 1000);
			        return false;
			  }
			  if(m.length!=11){
				
				  Tips("tips", "输入的手机号码位数不正确", true, 1000);
			        return false;
			   }
			  if(q.length<5){
				  
				  Tips("tips", "请填写有效的QQ号码", true, 1000);
			        return false;
			   }
			   if(bajax){
				   Tips("tips", "正在注册中，请耐心等待几秒..", true, 1000);
			        return false;
				  }
			  bajax=true;
			  $.ajax({
				  	url: '<?php echo U('userauth/regu');?>',
			        type: "post",
					data:{
						'user':u,
						'password':p,
						'phone':m,
						'qq':q,
						'__hash__':$('input[name="__hash__"]').val()
						},
					dataType:'json',
					error:function(){
							bajax=false;
							 Tips("tips", "服务器忙，请稍候再试", true, 1500);
							},
					success:function(data){
								bajax=false;
							if(data.error==0){
								Tips("tips", "注册成功", false, 1500);
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
<script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1253016770'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "w.cnzz.com/c.php%3Fid%3D1253016770' type='text/javascript'%3E%3C/script%3E"));</script>
</body>
</html>