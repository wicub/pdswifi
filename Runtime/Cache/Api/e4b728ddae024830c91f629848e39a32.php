<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php echo ($nowclass['title']); ?>-- <?php echo ($siteinfo["shopname"]); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=0.5, maximum-scale=2.0, user-scalable=yes" />
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="format-detection" content="telephone=no">

<link href="<?php echo ($Theme['P']['root']); ?>/wap/css/yl/news.css" rel="stylesheet" type="text/css" />
</head>

<script>

window.onload = function ()

{

var oWin = document.getElementById("win");

var oLay = document.getElementById("overlay");	

var oBtn = document.getElementById("popmenu");

var oClose = document.getElementById("close");

oBtn.onclick = function ()

{

oLay.style.display = "block";

oWin.style.display = "block"	

};

oLay.onclick = function ()

{

oLay.style.display = "none";

oWin.style.display = "none"	

}

};

</script>

<body id="listhome1">

<div id="ui-header">

<div class="fixed">

<a class="ui-title" id="popmenu">选择分类</a>

<a class="ui-btn-left_pre" href="javascript:history.go(-1)"></a>

<a class="ui-btn-right" href="/index.php?g=Api&m=Wap&a=lists&&sid=<?php echo ($siteinfo["uid"]); ?>&classid=<?php echo $_GET['classid']; ?>&token=<?php echo ($info['token']); ?>&p=<?php echo ($p); ?>"></a>

</div>

</div>

<div id="overlay"></div>

<div id="win">

<ul class="dropdown"> 

<?php if(is_array($classinfo)): $i = 0; $__LIST__ = $classinfo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="<?php echo showclass_common($vo,$wechaid);?>"><span><?php echo ($vo["title"]); ?></span></a></li><?php endforeach; endif; else: echo "" ;endif; ?> 	

<div class="clr"></div>

</ul>

</div>

<div class="Listpage">

<div class="top46"></div>

    <div id="todayList">

<ul  class="todayList">

   <?php if(is_array($listinfo)): $i = 0; $__LIST__ = $listinfo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$so): $mod = ($i % 2 );++$i;?><li>

<?php if($so['linkurl']): ?><a href="<?php echo ($so['linkurl']); ?>">

<?php else: ?>

<a href="<?php echo U('Wap/info',array('sid'=>$so['uid'],'cid'=>$so['cid'],'id'=>$so['id']));?>"><?php endif; ?>

<div class="img"><img src="<?php echo ($so["newspic"]); ?>"></div>

<h2><?php echo ($so['title']); ?></h2>

<p class="onlyheight"><?php echo ($so['smalltitle']); ?></p>

<div class="commentNum"></div>

</a>

</li><?php endforeach; endif; else: echo "" ;endif; ?>



</ul>

</div>

<section id="Page_wrapper">

<div id="pNavDemo" class="c-pnav-con">

<section class="c-p-sec">

<div class='c-p-pre <?php if(($p) == "1"): ?>c-p-grey<?php endif; ?> '><span class="c-p-p"><em></em></span><a <?php if(($p) == "1"): else: ?>href="<?php echo C('site_url');?>/index.php?g=Api&m=Wap&a=lists&sid=<?php echo ($siteinfo['uid']); ?>&classid=<?php echo $_GET['classid']; ?>&token=<?php echo ($info['token']); ?>&p=<?php echo $p-1; ?>"<?php endif; ?>  >上一页</a></div>

<div class="c-p-cur">

<div class="c-p-arrow c-p-down"><span><?php echo ($p); ?>/<?php echo ($page); ?></span><span></span></div>

	<select class="c-p-select" onchange="dourl('<?php echo C('site_url');?>/index.php?g=Api&m=Wap&a=lists&sid=<?php echo ($siteinfo['uid']); ?>&cid=<?php echo ($wechaid); ?>&classid=<?php echo $_GET['classid']; ?>&token=<?php echo ($info["token"]); ?>&p='+this.value)">

		<?php
 for($i=1;$i<=$page;$i++){ if($i==$p){ echo '<option value="'.$i.'" selected>第'.$i.'页</option>'; }else{ echo '<option value="'.$i.'">第'.$i.'页</option>'; } } ?>

	</select>

</div>

<div class='c-p-next <?php if(($p) == $page): ?>c-p-grey<?php endif; ?>'  >



<?php
 if($p<$page){ echo '<a href="/index.php?g=Api&m=Wap&a=lists&sid='.$siteinfo['uid'].'&cid='.$wechaid.'&classid='.(int)$_GET['classid'].'&token='.$info['token'].'&p='.($p+1).'">'; }else{ echo '<a>'; } ?>

下一页</a><span class="c-p-p"><em></em></span></div>

</section>

</div>

</section>

</div>


<div class="copyright"  >

<?php if(empty($siteinfo["shopname"])): echo ($info['wxname']); else: ?> <?php echo ($siteinfo["shopname"]); endif; ?>

</div>



<script>

function dourl(url){

location.href= url;

}

</script>

<div style="display:none"> </div>


<script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1253016770'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "w.cnzz.com/c.php%3Fid%3D1253016770' type='text/javascript'%3E%3C/script%3E"));</script>
</body>
</html>