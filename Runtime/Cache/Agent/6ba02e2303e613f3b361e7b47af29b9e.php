<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo C('sitename');?>--代理商平台</title>
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
<script src="<?php echo ($Theme['P']['root']); ?>/matrix/js/jquery.min.js"></script> 
</head>
<body>
 <link href="<?php echo ($Theme['P']['root']); ?>/css/qq/css/contact.css" rel="stylesheet" type="text/css" />

<!--Header-part-->
<div id="header">
  <h1><a href="#"></a></h1>
</div>
<!--close-Header-part--> 
<!--top-Header-menu-->

<div id="user-nav" class="navbar navbar-inverse">

  <ul class="nav">
    <li  class="dropdown" id="profile-messages" ><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user"></i>登录帐号:(<?php echo (session('account')); ?>)</a>
      <ul class="dropdown-menu">
        <li><a href="<?php echo U('index/pwd');?>"><i class="icon-user"></i> 修改密码</a></li>
        <li class="divider"></li>
        <li><a href="<?php echo U('index/index/alogout');?>"><i class="icon-key"></i>退出</a></li>
      </ul>
    </li>
	
  <li class=""><a title="" href="<?php echo U('index/index/alogout');?>"><i class="icon icon-share-alt"></i> <span class="text">退出</span></a></li>
    </ul>
     
</div>

<!--close-top-Header-menu-->

<!--sidebar-menu-->
<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
  <ul>
    <li class="<?php if(($nav['a'] == 'index')): ?>active"<?php endif; ?>"><a href="<?php echo U('Index/index');?>"><i class="icon icon-home"></i> <span>首页</span></a> </li>
    <li class="<?php if(($nav['a'] == 'account')): ?>active"<?php endif; ?>"><a href="<?php echo U('Index/account');?>"><i class="icon icon-group"></i> <span>账户管理</span></a> </li>
	<li class="<?php if(($nav['a'] == 'lianmeng')): ?>active"<?php endif; ?>"><a href="<?php echo U('Index/lianmeng');?>"><i class="icon icon-group"></i> <span>联盟管理</span></a> </li>
    <li class="submenu <?php if(($nav['a'] == 'shop')): ?>active"<?php endif; ?>"><a href="#" id="shop"><i class="icon icon-user"></i> <span>商户管理</span></a>
   	  <ul>
        <li><a href="<?php echo U('Index/shoplist');?>">商户列表</a></li>
        <li><a href="<?php echo U('Index/shopadd');?>">添加商户</a></li>
      </ul>
    </li>
    <li class="submenu <?php if(($nav['a'] == 'adman')): ?>active"<?php endif; ?>"><a href="#" id="adman"><i class="icon icon-cloud"></i> <span>广告管理</span></a>
      <ul>
        <li><a href="<?php echo U('Admanage/shopad');?>">广告列表</a></li>
        <li><a href="<?php echo U('Admanage/adrpt');?>">广告统计</a></li>
      </ul>
    </li>
    <li class="submenu <?php if(($nav['a'] == 'pushadv')): ?>active"<?php endif; ?>"><a href="#" id="pushadv"><i class="icon icon-th-large"></i> <span>广告推送管理</span></a>
      <ul>
        <li><a href="<?php echo U('pushadv/set');?>">推送设置</a></li>
        <li><a href="<?php echo U('pushadv/index');?>">广告列表</a></li>
        <li><a href="<?php echo U('pushadv/add');?>">投放广告</a></li>
        <li><a href="<?php echo U('pushadv/rpt');?>">投放统计</a></li>
      </ul>
    </li>
    <li class="<?php if(($nav['a'] == 'report')): ?>active"<?php endif; ?>"><a href="<?php echo U('Index/report');?>"><i class="icon icon-envelope-alt"></i> <span>资金报表</span></a> </li>
  </ul>
</div>
<!--sidebar-menu-->
<!--main-container-part-->
<div id="content">
  <!--breadcrumbs-->
    <div id="content-header">
        <div id="breadcrumb">
            <a href="<?php echo U('index/index');?>" title="返回首页" class="tip-bottom"><i class="icon-home"></i>首页</a>
            <a href="#" class="current">编辑联盟</a>
        </div>
        <h1>编辑联盟</h1>
    </div>
    <!--End-breadcrumbs-->
    <div class="container-fluid" >
        <hr>
        <div class="row-fluid">
            <div class="span8">
                <div class="widget-box">
                    <div class="widget-title">
                        <span class="icon"><i class="icon-align-justify"></i></span>
                        <h5>编辑联盟</h5>
                    </div>
                    <div class="widget-content nopadding">
                        <form name='' class="form-horizontal">
                            <div class="control-group">
                                <div class="alert span9" style="display: none;margin: 10px 0 10px 150px;">
                                    <span id="alertmsg"></span>
                                </div>
                            </div>    
                            <div class="control-group">
                                <label class="control-label">联盟链接:</label>
                                <div class="controls">
                                    <input type="text" class="span11" data-placement="right" name="lmurl" id="lmurl" value="<?php echo ($info["lmurl"]); ?>"/>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">图片地址:</label>
                                <div class="controls">
                                    <input type="text" class="span11" data-placement="right" name="lmimgurl" id="lmimgurl" value="<?php echo ($info["lmimgurl"]); ?>"/>
                                </div>
                            </div>
                            <div class="control-group">　
                                <input type="button" class="btn btn-success" id="btn_save" value="确认编辑" style="margin: 20px;">
                            </div>
                        </form>
                    </div>
                    <div class="span4 column pull-right">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal  hide fade" id="myModal">
    <div class="modal-header">
        <a class="close" data-dismiss="modal">×</a>
        <h3>提示信息</h3>
    </div>
    <div class="modal-body">
        <p>内容</p>
    </div>
    <div class="modal-footer">
        <a href="#" class="btn"  data-dismiss="modal">关闭</a>
    </div>
</div>
<script type="text/javascript">
  // This function is called from the pop-up menus to transfer to
  // a different page. Ignore if the value returned is a null string:
  function goPage (newURL) {

      // if url is empty, skip the menu dividers and reset the menu selection to default
      if (newURL != "") {
      
          // if url is "-", it is this page -- reset the menu:
          if (newURL == "-" ) {
              resetMenu();            
          } 
          // else, send page to designated URL            
          else {  
            document.location.href = newURL;
          }
      }
  }

// resets the menu selection upon entry to this page:
function resetMenu() {
   document.gomenu.selector.selectedIndex = 2;
}

function shownotice(t,obj){
    $('#notice-title').text(t);
    $('#notice-info').html($(obj).parent().next().html());
    $('#noticebox').modal({backdrop:false,show:true});
}
</script>

<script src="<?php echo ($Theme['P']['root']); ?>/matrix/js/jquery.ui.custom.js"></script> 
<script src="<?php echo ($Theme['P']['root']); ?>/matrix/js/matrix.js"></script> 
<script src="<?php echo ($Theme['P']['js']); ?>/jquery.js"></script>
<script src="<?php echo ($Theme['P']['root']); ?>/bootadmin/js/bootstrap.min.js"></script>
<script src="<?php echo ($Theme['P']['root']); ?>/bootadmin/js/theme.js"></script>
<script src="<?php echo ($Theme['P']['root']); ?>/bootadmin/js/jquery.uniform.min.js"></script>
<script src="<?php echo ($Theme['P']['root']); ?>/bootadmin/js/common.js"></script>
<script src="<?php echo ($Theme['P']['js']); ?>/region_select.js"></script>
    <script type="text/javascript">
        new PCAS('province', 'city', 'area', '<?php echo ($info['province']); ?>', '<?php echo ($info["city"]); ?>', '<?php echo ($info["area"]); ?>');
    </script>
<!-- call this page plugins -->
<script type="text/javascript">
    $(function () {
        // add uniform plugin styles to html elements
        $("input:checkbox, input:radio").uniform();
        
        //$(".alert").alert('close');
        $('#btn_save').bind('click',function(){

            var lmurl=$('#lmurl').val();
			var lmimgurl=$('#lmimgurl').val();
            

             
              $.ajax({
                    url: '<?php echo U('');?>',
                    type: "post",
                    data:{
                        'lmurl':lmurl,
                        'lmimgurl':lmimgurl
                        },
                    dataType:'json',
                    error:function(){
        
                            AlertTips("服务器忙，请稍候再试",1500);
                            },
                    success:function(data){
                            if(data.error==0){
                                $(".modal-body").html("<p>保存成功</p>");
                                $('#myModal').modal('show');
                            }else{
                                AlertTips(data.msg,1500);
                            }
                    }
                  });
            });
    });
</script>
</body>
</html>