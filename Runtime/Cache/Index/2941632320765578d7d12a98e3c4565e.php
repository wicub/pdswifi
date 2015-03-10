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
<script type="text/javascript" src="http://api.map.baidu.com/api?v=1.4"></script>

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
  <div id="breadcrumb"> <a href="<?php echo U('user/index');?>" title="返回首页" class="tip-bottom"><i class="icon-home"></i>首页</a>  <a href="#" class="current">商户信息</a> </div>
  <h1>商户信息</h1>
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
        <form action="/index.php?m=User&a=doindex" method="post" class="form-horizontal" onsubmit="return jiancha()">

            <div class="control-group">
              <label class="control-label">商户名称 :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="商户名称"  name="shopname" id="shopname" value="<?php echo ($info["shopname"]); ?>" />
                <span class="help-block">输入您商铺的名称，该名称将显示在认证页面顶部。</span> 
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">联系人 :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="联系人" name="linker" id="linker" value="<?php echo ($info["linker"]); ?>" maxlength="20"/>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">手机号码 :</label>
              <div class="controls">
                <input type="text"  class="span11" placeholder="手机号码"  name="phone" id="phone" value="<?php echo ($info["phone"]); ?>" maxlength="11"/>
              </div>
            </div>
			<div class="control-group">
              <label class="control-label">消费水平:</label>
              <div class="controls">
              <?php if(is_array($enumdata["shoplevel"])): $i = 0; $__LIST__ = $enumdata["shoplevel"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><label>
                  <input type="checkbox" value="<?php echo ($vo["key"]); ?>" name="shoplevel[]" <?php if(strpos($info['shoplevel'],"#".$vo['key']."#")>-1){echo "checked";} ?>/>
                  <?php echo ($vo["txt"]); ?></label><?php endforeach; endif; else: echo "" ;endif; ?>
               
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">行业类型:</label>
              <div class="controls">
               <?php if(is_array($enumdata["trades"])): $i = 0; $__LIST__ = $enumdata["trades"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><label>
                  <input type="checkbox" value="<?php echo ($vo["key"]); ?>" name="trade[]" <?php if(strpos($info['trade'],"#".$vo['key']."#")>-1){echo "checked";} ?> />
                  <?php echo ($vo["txt"]); ?></label><?php endforeach; endif; else: echo "" ;endif; ?>
            
               <span class="help-block">选择您所处的行业类型，可多选</span> 
              </div>
            </div>
             <div class="control-group">
              <label class="control-label">商圈选择:</label>
              <div class="controls">
              <select name="province" id="province" class="span3"></select>
              <select name="city" id="city" class="span3"></select>
              <select name="area" id="area" class="span3"></select>
                  
              
                
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">店铺地址 :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="店铺地址 " name="address" id="address" value="<?php echo ($info["address"]); ?>"/>
               <span class="help-block">输入店铺的所在地址。</span> 
              </div>
            </div>
			<?php if(1 == 0): ?><!--$info.islm eq 0-->
			<div class="control-group">
			<div class="controls" style="color:red;display:none;">
			新功能“超级广告联盟”，请联系上级代理开通
			</div>
			</div>
			<?php else: ?>
			<div class="control-group">
              <label class="control-label">坐标选择<font color="red"></font> :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="经度 " name="lng" id="lng" value="<?php echo ($info["lng"]); ?>" style="width:180px;"/>&nbsp;&nbsp;
				<input type="text" class="span11" placeholder="纬度 " name="lat" id="lat" value="<?php echo ($info["lat"]); ?>" style="width:180px;"/>
				<br><font style="color:red;">拖拽地图中的图标,获得您所在的坐标</font>
				<div id="container" style="width:500px;height:500px;margin-top:10px;border:1px solid gray;border-radius:5px;"></div>
					<script type="text/javascript">
					var map = new BMap.Map("container");          // 创建地图实例 
					map.addControl(new BMap.NavigationControl()); // 缩放控件
					map.enableScrollWheelZoom();					//启用鼠标滚轮缩放
					var point = new BMap.Point(<?php echo ($info["lng"]); ?>,<?php echo ($info["lat"]); ?>);  // 创建点坐标  
					map.centerAndZoom(point, 18);                 // 初始化地图，设置中心点坐标和地图级别 

					function myFun(result){//定位城市
							var cityName = result.name;
							map.setCenter(cityName);
							//alert("当前定位城市:"+cityName);
						}
						var myCity = new BMap.LocalCity();
						//myCity.get(myFun);


					//自定义标注图标
					var icon = new BMap.Icon('http://wxyxlm.b0.upaiyun.com/moavjc1397790268/2014/10/28/1414461207_a57b0ddc8f30c21c.png', new BMap.Size(40, 50), {  
					anchor: new BMap.Size(10, 30)  
					});
					var mkr =new BMap.Marker(map.getCenter(), {  
					icon: icon  
					}); 
					//修改自定义标注的偏移值					
					var pianyi = new BMap.Size(-12,-18);
					mkr.setOffset(pianyi);
					 
					var marker = new BMap.Marker(point);        // 创建标注 (默认的小标注)   
					map.addOverlay(mkr); 					//添加标注到地图(把这里mkr换成marker就是默认的小图标了)
					mkr.enableDragging();    									//可拖拽的标注(是否可拖拽,要记得更换mkr和marker的值)
					mkr.addEventListener("dragend", function(e){    				//可拖拽的标注
					//alert("当前位置：" + e.point.lng + ", " + e.point.lat);   		//可拖拽的标注 
					$("#lng").val(e.point.lng);
					$("#lat").val(e.point.lat);
					})																//可拖拽的标注



					//加载完成之后,改变标注点坐标,使之和当前定位的城市基本相符
					map.addEventListener("tilesloaded",function(){
						var newpoint = map.getCenter();
						mkr.setPosition(newpoint);
						$("#lng").val(newpoint.lng);
						$("#lat").val(newpoint.lat);
					});

					</script>  
              </div>
					<label class="control-label">是否开启商家联盟:</label>
					<div class="controls">
					<?php if($info['islm2'] == 0): ?><label style="margin-bottom:0px;"><input class="span11" type="radio"  name="islm2" id="islm0" value="0" checked/>关闭</label>
						<label style="margin-bottom:0px;"><input class="span11" type="radio"  name="islm2" id="islm1" value="1"/>开启</label>
					<?php else: ?>
						<label style="margin-bottom:0px;"><input class="span11" type="radio"  name="islm2" id="islm0" value="0"/>关闭</label>
						<label style="margin-bottom:0px;"><input class="span11" type="radio"  name="islm2" id="islm1" value="1" checked/>开启</label><?php endif; ?>
					</div>
					<label class="control-label">折扣:</label>
					<div class="controls">
					<input class="span11" style="width:100px;" maxlength="3" type="text"  name="zhekou" id="zhekou" value="<?php echo ($info["zhekou"]); ?>" />&nbsp;<font color="blue" style="font-size:16px;">折</font>
					<div id="tip" style="color:red;display:none;"></div>
					</div><?php endif; ?>
			
            
            <div class="form-actions">
              <button type="submit" class="btn btn-success">保存</button>
			  
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
  <script src="<?php echo ($Theme['P']['js']); ?>/jsaddress.js"></script>
                    <script type="text/javascript">
                    addressInit('province', 'city', 'area', '<?php echo ($info['province']); ?>', '<?php echo ($info["city"]); ?>', '<?php echo ($info["area"]); ?>');
                    </script>
<script>
$(document).ready(function(){
	$('input[type=checkbox],input[type=radio],input[type=file]').uniform();
	
	$('select').select2();
});
</script>

		  <script>
				function jiancha(){
					var zhekou = $('#zhekou').val();
					var re = new RegExp("^[0-9]([.]{1}[0-9]{1})?$");
					if(re.test(zhekou)){
					
					}else{
					$('#tip').text('折扣只能是正整数或者一位小数，如“9”或者“7.8”');
					$('#tip').show(500);
					setTimeout("yincang()",8000);
						return false;
					}
				}
				function yincang(){
					$('#tip').hide(500);
				}
		</script>
</body>
</html>