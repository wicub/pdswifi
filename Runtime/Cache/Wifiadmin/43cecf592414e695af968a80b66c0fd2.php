<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title><?php echo C('sitename');?>-管理后台</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<!-- bootstrap -->
    <link href="<?php echo ($Theme['P']['root']); ?>/bootadmin/css/bootstrap/bootstrap.css" rel="stylesheet" />
       <link href="<?php echo ($Theme['P']['root']); ?>/bootadmin/css/bootstrap/bootstrap-responsive.css" rel="stylesheet" />
    <link href="<?php echo ($Theme['P']['root']); ?>/bootadmin/css/bootstrap/bootstrap-overrides.css" type="text/css" rel="stylesheet" />
    <!-- libraries -->
    <link href="<?php echo ($Theme['P']['root']); ?>/bootadmin/css/lib/font-awesome.css" type="text/css" rel="stylesheet" />

    <!-- global styles -->
    <link rel="stylesheet" type="text/css" href="<?php echo ($Theme['P']['root']); ?>/bootadmin/css/layout.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo ($Theme['P']['root']); ?>/bootadmin/css/elements.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo ($Theme['P']['root']); ?>/bootadmin/css/icons.css" />


    <!-- open sans font -->
      <link href='<?php echo ($Theme['P']['root']); ?>/italic.css' rel='stylesheet' type='text/css' />

    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

   
	<!-- libraries -->
<link href="<?php echo ($Theme['P']['root']); ?>/bootadmin/css/compiled/tables.css" type="text/css" rel="stylesheet"  />
<body>


    <!-- navbar -->
    <div class="navbar navbar-inverse">
        <div class="navbar-inner">
            <button type="button" class="btn btn-navbar visible-phone" id="menu-toggler">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            
            <a class="brand" href="<?php echo U('index');?>"><img src="<?php echo ($Theme['P']['img']); ?>/wifilogo-mini.png" /></a>
            

            <ul class="nav pull-right">                
               
                <li class=" hidden-phone">
                    	<a href="javascript:void(0);">登录帐号:(<?php echo (session('adminmame')); ?>)</a>
                </li>
                 <li class=" hidden-phone">
                    	<a href="<?php echo U('Index/pwd');?>">修改密码</a>
                </li>
                <li class="settings hidden-phone">
                    <a href="<?php echo U('login/loginout');?>" role="button">
                        <i class="icon-share-alt"></i>
                    </a>
                </li>
            </ul>            
        </div>
    </div>
    <!-- end navbar -->
     <!-- sidebar -->
    <div id="sidebar-nav">
        <ul id="dashboard-menu">
       <?php if(is_array($nav)): $i = 0; $__LIST__ = $nav;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($vo['pid'] == 1): if(in_array($vo['id'],$navids)): if($vo['single'] == 1): if((strtolower($nownav['m']) == strtolower($vo['m']) ) && strtolower($nownav['a']) == strtolower($vo['a'])): ?><li class="active">
	                <div class="pointer">
	                    <div class="arrow"></div>
	                    <div class="arrow_border"></div>
	                </div>
	        		<?php else: ?>
	        		<li><?php endif; ?>
       			 <a href="<?php echo U(''.$vo['m'].'/'.$vo['a'].'');?>"  >
                    <i class="<?php echo ($vo["ico"]); ?>"></i>
                    <span><?php echo ($vo["title"]); ?></span>
                </a>
            	</li>
       		<?php else: ?>
       	
				<?php if($nownav['a'] == $vo['id']): ?><li class="active">
                <div class="pointer">
                    <div class="arrow"></div>
                    <div class="arrow_border"></div>
                </div>
        		<?php else: ?>
        		<li><?php endif; ?>
       			  <a class="dropdown-toggle" href="#" >
                   <i class="<?php echo ($vo["ico"]); ?>"></i>
                    <span><?php echo ($vo["title"]); ?></span>
                    <i class="icon-chevron-down"></i>
                	</a>
              <?php if($nownav['a'] == $vo['id']): ?><ul class="active submenu">
        		<?php else: ?>
        		<ul class="submenu"><?php endif; ?>
         
        			 <?php if(is_array($nav)): $i = 0; $__LIST__ = $nav;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$sonnode): $mod = ($i % 2 );++$i; if($sonnode['pid'] == $vo['id']): if(in_array($sonnode['id'],$navids)): ?><li>
		                        	<a href="<?php echo U(''.$sonnode['m'].'/'.$sonnode['a'].'');?>"><?php echo ($sonnode['title']); ?></a>
		                    	</li><?php endif; endif; endforeach; endif; else: echo "" ;endif; ?>
                </ul>
                  </li><?php endif; endif; endif; endforeach; endif; else: echo "" ;endif; ?>
        </ul>
    </div>
    <!-- end sidebar -->
     <div style="display: none">
      <script type="text/javascript">
var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3Fff6b82e1b2c7607791dcac12a7ab8ce1' type='text/javascript'%3E%3C/script%3E"));
</script>
      </div>

	<!-- main container -->
    <div class="content" style="height: 100%;">
  	
  
  
      <div id="pad-wrapper">
      	<div class="row head">
                    <div class="col-md-12">
                        <h4>商户列表</h4>
                    </div>
                </div>
        <div class="row-fluid form-wrapper">
        <form method="post">
        	
        		<div class="span6 column">
        				<div>
        					<div class="span6 field-box">
                                <label class="span4">商户名称:</label>
                                <input class="span8" type="text" name="sname">
                            </div>
	                         <div class="span6 field-box">
	                                  <label class="span4">登录帐号:</label>
	                                <input class="span8" type="text" name="slogin">
	                         </div>
        				</div>
        				<div>
        					<div class="span6 field-box">
                                <label class="span4">联系电话:</label>
                                <input class="span8" type="text" name="phone">
                            </div>
	                         <div class="span6 field-box">
	                                  <label class="span4">代理商:</label>
	                                <input class="span8" type="text" name="agent">
	                         </div>
        				</div>			
                         <div class="filter-block">
                 
                  <input type="submit" class="btn-flat success " value="查询">
                    
                </div>

        		</div>
        	
        	
        
                </form>
        </div>
      </div>
      <div id="pad-wrapper">
          <!-- orders table -->
            <div class="table-wrapper orders-table section">
               	

               

                <div class="">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th class="col-md-1">
                                   		 编号
                                </th>
                                <th class="col-md-2">
                                    <span class="line"></span>
                                   	添加日期
                                </th>
                                  <th class="col-md-2">
                                    <span class="line"></span>
                                    	登录帐号
                                </th>
                                <th class="col-md-2">
                                    <span class="line"></span>
                                    	商户名称
                                </th>
                                <th class="col-md-1">
                                    <span class="line"></span>
                                   		注册上限
                                </th>
                                <th class="col-md-1">
                                    <span class="line"></span>
                                   	联系人
                                </th>
                                <th class="col-md-2">
                                    <span class="line"></span>
                                   		 联系电话
                                </th>
                                <th >
                                    <span class="line"></span>
                                   		代理商
                                </th>
                                <th class="col-md-1">
                                    <span class="line"></span>
                                    		操作
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                        	<?php if(is_array($lists)): $i = 0; $__LIST__ = $lists;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><!-- row -->
                            <tr class="<?php if(($i) == "1"): ?>first<?php endif; ?>">
                                <td>
                                   <?php echo ($i); ?>
                                </td>
                                <td>
                                   <?php echo (date('Y-m-d ',$vo["add_time"])); ?>
                                </td>
                                  <td>
                                   <?php echo ($vo["account"]); ?>
                                </td>
                                <td>
                                    <?php echo ($vo["shopname"]); ?>
                                </td>
                                  <td>
                                     <?php if(($vo['linkflag']) == "0"): echo ($vo["maxcount"]); else: ?>不限<?php endif; ?>
                                </td>
                                <td>
                                     <?php echo ($vo["linker"]); ?>
                                </td>
                                <td>
                                    <?php echo ($vo["phone"]); ?>
                                </td>
                                <td>
                                    <?php echo ($vo["agname"]); ?>
                                </td>
                                <td>
                                  <a href="<?php echo U('editshop',array('id'=>$vo['id']));?>">编辑</a>|
                                   <a href="<?php echo U('routelist',array('id'=>$vo['id']));?>">路由管理</a>|
                                  <a href="<?php echo U('addroute',array('id'=>$vo['id']));?>">添加路由</a>
                                </td>
                            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                           
                        </tbody>
                    </table>
                </div>
            
            	<div class="pagination pull-right">
            		<?php echo ($page); ?>
            	</div>
            </div>
            <!-- end orders table -->
          </div>
    </div>


	<!-- scripts -->
 <script src="<?php echo ($Theme['P']['js']); ?>/jquery.js"></script>
    <script src="<?php echo ($Theme['P']['root']); ?>/bootadmin/js/bootstrap.min.js"></script>
    <script src="<?php echo ($Theme['P']['root']); ?>/bootadmin/js/theme.js"></script>
  <script src="<?php echo ($Theme['P']['root']); ?>/bootadmin/js/jquery.uniform.min.js"></script>
  <script src="<?php echo ($Theme['P']['root']); ?>/bootadmin/js/common.js"></script>
  <script type="text/javascript">
                     

                        $(function () {
                        	
                            // add uniform plugin styles to html elements
                            $("input:checkbox, input:radio").uniform();

                        });
                    </script>
</body>
</html>