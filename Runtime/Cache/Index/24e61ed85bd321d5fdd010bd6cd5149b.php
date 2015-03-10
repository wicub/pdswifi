<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo C('sitename');?>--会员中心</title>
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
  <div id="breadcrumb"> <a href="<?php echo U('user/index');?>" title="返回首页" class="tip-bottom"><i class="icon-home"></i>首页</a>  <a href="#" class="current">应用设置</a> </div>
  <h1>应用设置</h1>
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
        <form name='form' action="index.php?m=User&a=doapp" method="post" class="form-horizontal">
 		
        	 
       		<div class="control-group">
       		<div class="span1"></div>
       			<div class="alert alert-block span10 hide" id="msgbox"> 
              <h4 class="alert-heading">提示信息</h4>
             <div id="alertmsg"></div>
              </div>
       		</div>
			<div class="control-group">
              <label class="control-label">认证模式:</label>
              <div class="controls">
                <?php if(is_array($authmode)): $i = 0; $__LIST__ = $authmode;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><label>
                  <input type="checkbox" onchange="yincangweixin(this)" value="<?php echo ($vo["key"]); ?>" name="authmode[]" id="xuanxiang<?php echo ($vo["key"]); ?>" <?php echo showauthcheck($vo['key'],$info['authmode']);?>/>
                  <?php echo ($vo["txt"]); ?></label><?php endforeach; endif; else: echo "" ;endif; ?>
               
              </div>
            </div>
            <div class="control-group"  id="wxacc">
              <label class="control-label">微信号 :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="微信号"  name="wx" id="wx" value="<?php echo echojsonkey(showauthdata('3',$info['authmode']),'user');?>" />
              	 <span class="help-block">请输入您想让用户关注的微信名称</span>
              </div>
            </div>
            <div class="control-group" id="wxauth" >
              <label class="control-label">认证方式: </label>
              <div class="controls">
                <input style="display:none;" type="text" class="span11" placeholder="微信认证密码 " name="wxauthpwd" id="wxauthpwd" value="123456"/><!--<?php echo echojsonkey(showauthdata('3',$info['authmode']),'pwd');?>-->
               <span class="help-block" style="display:none;">输入微信认证上网的认证密码</span>
			   <span class="help-block" style="color:red;">设置图文回复,关键词为"上网",外部链接为：http://www.wyywifi.com/index.php/api/wxlogin/index/</span>
			   <p>如使用微信认证,请复制以下白名单地址在路由器中设置:</p>
			        
<pre class="prettyprint linenums " style="width:90%">
<ol class="linenums" id="baimingdan">
qq.com,weixin.com,short.weixin.qq.com,long.weixin.qq.com,szshort.weixin.qq.com,wyywifi.com,apple.com,captive.apple.com</ol></pre>
</div>
            </div>
             <div class="control-group">
              <label class="control-label">上网时段控制 :</label>
              <div class="controls">
                  <select name="sh" id="sh" class="span3" style="float:left">
                  <?php $__FOR_START_16797__=0;$__FOR_END_16797__=24;for($i=$__FOR_START_16797__;$i < $__FOR_END_16797__;$i+=1){ ?><option value="<?php echo ($i); ?>" <?php if(($info['sh']) == $i): ?>selected<?php endif; ?>><?php echo ($i); ?>:00点</option><?php } ?>      
                  </select>
                  <label class="span1">到</label>
                  <select name="eh" id="eh" class="span3">
                  	<?php $__FOR_START_23727__=0;$__FOR_END_23727__=24;for($i=$__FOR_START_23727__;$i < $__FOR_END_23727__;$i+=1){ ?><option value="<?php echo ($i); ?>" <?php if(($info['eh']) == $i): ?>selected<?php endif; ?>><?php echo ($i); ?>:00点</option><?php } ?>
                  </select>
                 
              	<span class="span12 help-block">允许用户上网的时间范围。注:比如 7:00~20:00点</span>
              </div>
            </div>
			 <div class="control-group">
			   <label class="control-label">上网限制 :</label>
              <div class="controls">
                 <label>
                <input type="radio" value="1" name="countflag" <?php if(($info['countflag']) == "1"): ?>checked<?php endif; ?>>启用
                 </label>  
                 <label> 
                  <input type="radio" value="0" name="countflag" <?php if(($info['countflag']) == "0"): ?>checked<?php endif; ?>>停用
    		</label>
              <span class="help-block">上网限制,可有效防止员工长时间占用无线网络</span>
              </div>
			 </div>
			<div class="control-group">
			   <label class="control-label">上网允许认证次数 :</label>
              <div class="controls">
                <input type="text"  class="span11" placeholder="请输入认证次数"  name="countmax" id="countmax" value="<?php echo ($info['countmax']); ?>"/>
              <span class="help-block">本日允许使用wifi的次数（在启用上网限制功能后有效）</span>
              </div>
			 </div>
            <div class="control-group">
              <label class="control-label">上网时间限制 :</label>
              <div class="controls">
                <input type="text"  class="span11" placeholder="请输入时间(单位:分钟)"  name="timelimit" id="timelimit" value="<?php echo ($info['timelimit']); ?>"/>
              <span class="help-block">允许用户上网的时间(单位:分钟)。注:不限制时间请填:0</span>
              </div>
            </div>
			
            <div class="control-group">
              <label class="control-label">认证后行为:</label>
              <div class="controls">
               
              
                <label>
                <input type="radio" value="1" name="authaction" <?php if(($info['authaction']) == "1"): ?>checked<?php endif; ?>>跳转指定网页
                 </label>  
                 <label> 
                  <input type="radio" value="0" name="authaction" <?php if(($info['authaction']) == "0"): ?>checked<?php endif; ?>>不跳转
    		</label>
      				 <label>
      				 <input type="radio" value="2" name="authaction" <?php if(($info['authaction']) == "2"): ?>checked<?php endif; ?>>跳转请求网页
				 </label>       
                <label>
      				 <input type="radio" value="3" name="authaction" <?php if(($info['authaction']) == "3"): ?>checked<?php endif; ?>>跳转到微官网
				 </label>   
				  <span class="help-block">用户通过认证后引导用户行为选择。</span> 
              </div>
            </div>
             
            <div class="control-group">
              <label class="control-label">指定跳转URL :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="跳转网页地址 " name="jumpurl" id="jumpurl" value="<?php echo ($info['jumpurl']); ?>"/>
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