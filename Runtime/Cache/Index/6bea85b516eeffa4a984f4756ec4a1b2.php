<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo C('sitename');?>--联盟设置</title>
<meta name="keywords" content="<?php echo C('keyword');?>"/>
<meta name="description" content="<?php echo C('content');?>"/>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="<?php echo ($Theme['P']['root']); ?>/matrix/css/bootstrap.min.css" />
<link rel="stylesheet" href="<?php echo ($Theme['P']['root']); ?>/matrix/css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="<?php echo ($Theme['P']['root']); ?>/matrix/css/matrix-style.css" />
<link rel="stylesheet" href="<?php echo ($Theme['P']['root']); ?>/matrix/css/matrix-media.css" />
<link href="<?php echo ($Theme['P']['root']); ?>/matrix/font-awesome/css/font-awesome.css" rel="stylesheet" />
<link href="<?php echo ($Theme['P']['root']); ?>/font/googlefont.css" rel="stylesheet" />
<link rel="stylesheet" href="<?php echo ($Theme['P']['root']); ?>/matrix/css/uniform.css" />
<link rel="stylesheet" href="<?php echo ($Theme['P']['root']); ?>/matrix/css/select2.css" />
</head>
<body>
   <!--Header-part-->
<div id="header">
  <h1><a href="#"></a></h1>
</div>
<!--close-Header-part--> 
<!--top-Header-menu-->

<div id="user-nav" class="navbar navbar-inverse">

  <ul class="nav">
   <li  class="dropdown" id="profile-messages" ><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user"></i>  <span class="text">欢迎光临</span><b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a href="<?php echo U('User/account');?>"><i class="icon-user"></i> 修改密码</a></li>
        <li class="divider"></li>
        <li><a href="<?php echo U('User/logout');?>"><i class="icon-key"></i>退出</a></li>
      </ul>
    </li>
	
  <li class=""><a title="" href="<?php echo U('User/logout');?>"><i class="icon icon-share-alt"></i> <span class="text">退出</span></a></li>

     </ul>
     
</div>

<!--close-top-Header-menu-->

   <!--sidebar-menu-->
<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
  <ul>
    <li class="<?php if(($a == 'index')): ?>active"<?php endif; ?>" ><a href="<?php echo U('User/index');?>"><i class="icon icon-home"></i> <span>首页</span></a> </li>
     <li class="<?php if(($a == 'info')): ?>active"<?php endif; ?>"> <a href="<?php echo U('User/info');?>"><i class="icon icon-group"></i> <span>商户信息</span></a> </li>
	 <li class="<?php if(($a == 'lianmeng')): ?>active"<?php endif; ?>"> <a href="<?php echo U('User/lianmengset');?>"><i class="icon icon-group"></i> <span>联盟设置</span></a> </li>
    <li class="<?php if(($a == 'application')): ?>active"<?php endif; ?>"> <a href="<?php echo U('User/application');?>"><i class="icon icon-cogs"></i> <span>应用设置</span></a> </li>
           <li class="<?php if(($a == 'routemap')): ?>active"<?php endif; ?>"> <a href="<?php echo U('User/routemap');?>"><i class="icon icon-group"></i> <span>路由管理</span></a> </li>
      <li class="<?php if(($a == 'authtplset')): ?>active"<?php endif; ?>"> <a href="<?php echo U('Authset/tplset');?>"><i class="icon icon-th"></i> <span>认证页面</span></a> </li>
     
     
     <li class="submenu <?php if(($a == 'adv')): ?>active"<?php endif; ?>"> <a href="#" id="adv"><i class="icon icon-cloud"></i> <span>广告管理</span></a>
   	 <ul>
        <li><a href="<?php echo U('User/adv');?>">广告管理</a></li>
        
         <li><a href="<?php echo U('User/advrpt');?>">广告统计</a></li>
		
      </ul>
   </li>
   
           <li class="submenu <?php if(($a == 'web3g')): ?>active"<?php endif; ?>"> <a href="#" id="web3g"><i class="icon icon-th-large"></i> <span>手机网站</span></a>
      <ul>
        <li><a href="<?php echo U('index/web/index');?>">网站设置</a></li>
        
         <li><a href="<?php echo U('web/catelog');?>">网站分类</a></li>
		 <li><a href="<?php echo U('web/arts');?>">文章管理</a></li>
		  <li><a href="<?php echo U('web/tempset');?>">模板管理</a></li>
		  <li><a target="_blank" href="http://www.wyywifi.com/index.php/api/wap/index/sid/<?php echo (session('uid')); ?>.html">网站预览</a></li>
      </ul>
    </li>
     <li class="<?php if(($a == 'comment')): ?>active"<?php endif; ?>"> <a href="<?php echo U('User/comment');?>"><i class="icon icon-envelope-alt"></i> <span>客户留言</span></a> </li>
         <li class="submenu <?php if(($a == 'report')): ?>active"<?php endif; ?>" > <a href="#" id="urpt"><i class="icon icon-user"></i> <span>用户统计</span></a>
      <ul>
        <li><a href="<?php echo U('User/userchart');?>">统计报表</a></li>
        <li><a href="<?php echo U('User/report');?>">用户列表</a></li>
       

      </ul>
    </li>
    <li class="<?php if(($a == 'online')): ?>active"<?php endif; ?>"> <a href="<?php echo U('User/rpt');?>"><i class="icon icon-signal"></i> <span>上网统计</span></a> </li>
   <li class="submenu <?php if(($a == 'advfun')): ?>active"<?php endif; ?>" > <a href="#" id="sale"><i class="icon icon-dashboard"></i> <span>营销管理</span></a>
      <ul>
        <li><a href="<?php echo U('index/Adv/phonelist');?>">手机号码管理</a></li>
         <li><a href="<?php echo U('adv/set');?>">短信帐号管理</a></li>
        <li><a href="<?php echo U('adv/sms');?>">短信群发</a></li>
      	<li><a href="<?php echo U('adv/smslist');?>">短信发送列表</a></li>
      </ul>
    </li>
  
  </ul>
</div>
<!--sidebar-menu-->

<div id="content">
<div id="content-header">
  <div id="breadcrumb"> <a href="<?php echo U('user/index');?>" title="返回首页" class="tip-bottom"><i class="icon-home"></i>首页</a>  <a href="#" class="current">联盟设置</a> </div>
  <h1>联盟设置</h1>
</div>
<div class="container-fluid">
  <hr>
  <div class="row-fluid">
    <div class="span8">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>编辑</h5>
        </div>
        <div class="widget-content nopadding">
        <form name='form' action="index.php?m=User&a=lianmengset" method="post" class="form-horizontal">
 		
        	 
             
            <div class="control-group">
              <label class="control-label">联盟跳转URL : <font color="red">HTTP://</font></label>
              <div class="controls">
               <input type="text" class="span11" placeholder="联盟跳转URL " name="lianmengurl" id="lianmengurl" value="<?php echo ($shop['lianmengurl']); ?>"/>
              </div>
            </div>
       
            <div class="form-actions">
              <input type="submit" class="btn btn-success" name="sub" value="保存"/>
            </div>
          </form>
        </div>
      </div>
      
      
    </div>
    
  </div>
  
</div></div>
   <!--Footer-part-->
<div class="row-fluid">
  <div id="footer" class="span12"> 2014 <a href="http://www.wyywifi.com/">wyywifi.com</a> </div>
</div>
<!--end-Footer-part--> 
<script>

</script>
 <div style="display: none">
     <script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1253016770'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "w.cnzz.com/c.php%3Fid%3D1253016770' type='text/javascript'%3E%3C/script%3E"));</script>
      </div>
<script src="<?php echo ($Theme['P']['root']); ?>/matrix/js/jquery.min.js"></script> 
<script src="<?php echo ($Theme['P']['root']); ?>/matrix/js/jquery.ui.custom.js"></script> 
<script src="<?php echo ($Theme['P']['root']); ?>/matrix/js/bootstrap.min.js"></script> 
<script src="<?php echo ($Theme['P']['root']); ?>/matrix/js/matrix.js"></script> 
<script src="<?php echo ($Theme['P']['root']); ?>/matrix/js/jquery.uniform.js"></script> 
<script src="<?php echo ($Theme['P']['root']); ?>/matrix/js/select2.min.js"></script> 
<script src="<?php echo ($Theme['P']['root']); ?>/matrix/js/common.js"></script> 
<script>
function copyText(obj) 
{ 
$(document).ready(function(){
	$('input[type=checkbox],input[type=radio],input[type=file]').uniform();
	
	$('select').select2();

	$("input[name='authmode[]']").each(function(){
		if($(this).attr('checked')&&$(this).val()==3){
			$('#wxauth').show();
			$('#wxacc').show();
		}
		$(this).bind('click',function(){
				
				if($(this).attr('checked')&&$(this).val()==3){
						$('#wxauth').show();
						$('#wxacc').show();
				}else if(!$(this).attr('checked')&&$(this).val()==3){
						$('#wxauth').hide();
						$('#wxacc').hide();
				}
		});
	});

	$("input[name='sub']").bind('click',function(){
		var rs=true;
		
		
		
		$("input[name='authmode[]']").each(function(){
			if($(this).attr('checked')&&$(this).val()==3){
				
					 var v=$('#wxauthpwd').val();
						
					 if (v == "") {
						
						 AlertTips("请输入微信认证密码",2000);
					        rs= false;
					 }
					 if(!isaccount(v)){
						
						 AlertTips("请输入微信认证密码",2000);
					        rs= false;
					 }
					 var wx=$('#wx').val();
						
					 if (wx == "") {
						
						 AlertTips("请输入微信账号",2000);
					        rs= false;
					 }
				
				}
		});
			
		return rs;
	});
});
</script>

			<script>
				if($('#xuanxiang3').attr('checked')!="checked"){
					$("#wxacc").hide();
					$("#wxauth").hide();
				}
				function yincangweixin(tt){
					if(tt.id=="xuanxiang3"){
							$("#wxacc").toggle();
							$("#wxauth").toggle();
					}
				}
			</script>
</body>
</html>