<?php if (!defined('THINK_PATH')) exit();?><html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<link rel="Shortcut Icon" href="http://i3.dpfile.com/s/res/favicon.5ff777c11d7833e57e01c9d192b7e427.ico" type="image/x-icon">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="format-detection" content="telephone=no">
<meta name="format-detection" content="email=no">
<meta name="apple-mobile-web-app-title" content="">

<link rel="apple-touch-icon-precomposed" href="http://m1.s2.dpfile.com/m/img/app/dianping/logoforiphone.18d57124e8e10c79337a27dadabc4314.png">
<link rel="apple-touch-startup-image" href="http://m1.s2.dpfile.com/m/img/app/dianping/iphonesplash.1ec20beb9fdd2d308b5dcd3d43c39e90.png">
<link rel="stylesheet" href="<?php echo ($Theme['P']['root']); ?>/lianmeng/~mod~mobile-download-banner~0.1.10~css~style.css,~mod~app-m-dianping~1.1.3~css~style.css" type="text/css">


<title>微云易WIFI</title>
<meta name="Keywords" content="">
<meta name="Description" content="">
<meta name="location" content="province=河南;city=平顶山">
<script>var G_rtop=+new Date, _hip = [
['_setPageId', 210007],
['_setCityId', 163]
];
window.onload=function() {
	setTimeout(function() {
		if(window.pageYOffset !== 0) return;
		window.scrollTo(0, 1);
	}, 300);
 };
</script>
</head>
<body>
<script>
    _hip.push(['_setPVInitData', {p_render: +(new Date) - G_rtop, module: '0_mshopsearch_queryid', action: 'browse', query_id: '92e6535e-b0ec-4d16-90c1-4a369563cdcf'}]);
</script>
<script>
    var width = window.innerWidth;
    var left = parseInt((width - 48) / 3);
    document.write('<style>.hotarea{width:' + left + 'px;}</style>');
</script><style>.hotarea{width:544px;}</style><style>.hotarea{width:544px;}</style>

<header class="list-head">
        <div class="list-type-cnt">
            <div class="list-type">
                <a href="#" class="on" onclick="" style="border-radius: 5px;width:150px;">商户</a>
                <a href="#" style="display:none;">活动</a>
            </div>
        </div>

</header>


<nav class="list-nav ">
	<script type="text/javascript" src="<?php echo ($Theme['P']['js']); ?>/jquery.js"></script>
	<script>
		var hei = 0;
		function xianshi(id){
			if(id==1){
				$('#xianshi2').addClass('Hide');
				$('#xianshi3').addClass('Hide');
			}else if(id==2){
				$('#xianshi1').addClass('Hide');
				$('#xianshi3').addClass('Hide');
			}else if(id==3){
				$('#xianshi2').addClass('Hide');
				$('#xianshi1').addClass('Hide');
			}
			$('#xianshi'+id).toggleClass('Hide');
			if(hei==id){
				$('#heimu').hide();
				hei = 0;
			}else{
				$('#heimu').show();
				hei = id;
			}
			
		}
		function allhide(){
			$('#xianshi2').addClass('Hide');
			$('#xianshi1').addClass('Hide');
			$('#xianshi3').addClass('Hide');
			$('#heimu').hide();
			hei = 0;
		}
	</script>
    <div class="cat Fix">
        <a href="javascript:void(0)" onclick="xianshi(1);" class="item J_trigger">附近<i class="drop"></i></a>

        <a href="javascript:void(0)" onclick="xianshi(2);" class="item J_trigger">
        类型
            <i class="drop"></i>
        </a>

        <a href="javascript:void(0)" onclick="xianshi(3);" class="item J_trigger">
        消费水平
            <i class="drop"></i>
        </a>
    </div>
    <section class="selector J_selector Hide" id='xianshi1' style="overflow-y: auto;">
        <div class="menu main" style="width:100%;padding-left:100px;">
            <div style="-webkit-transition: 0ms cubic-bezier(0.1, 0.57, 0.1, 1); transition: 0ms cubic-bezier(0.1, 0.57, 0.1, 1); -webkit-transform: translate(0px, 0px) translateZ(0px);">
					<?php foreach($_SESSION['qus'] as $li){ echo '<div><a href="'.U('querydiqu',array('diqu'=>$li['Name'])).'"><p class="item Fix ">'.$li['Name'].'</p></a></div>'; } ?>
            </div>
        <div class="iScrollVerticalScrollbar iScrollLoneScrollbar" style="position: absolute; z-index: 9999; width: 7px; bottom: 2px; top: 2px; right: 1px; pointer-events: none;"><div class="iScrollIndicator" style="box-sizing: border-box; position: absolute; background-color: rgba(0, 0, 0, 0.498039); border: 1px solid rgba(255, 255, 255, 0.901961); border-top-left-radius: 3px; border-top-right-radius: 3px; border-bottom-right-radius: 3px; border-bottom-left-radius: 3px; width: 100%; -webkit-transition: 0ms cubic-bezier(0.1, 0.57, 0.1, 1); transition: 0ms cubic-bezier(0.1, 0.57, 0.1, 1); display: none; height: 8px; -webkit-transform: translate(0px, -8px) translateZ(0px); background-position: initial initial; background-repeat: initial initial;"></div></div></div>
    <div class="menu sub" style="left: 45%; width: 55%;">
                            <div style="display:none;-webkit-transition: 0ms cubic-bezier(0.1, 0.57, 0.1, 1); transition: 0ms cubic-bezier(0.1, 0.57, 0.1, 1); -webkit-transform: translate(0px, 0px) translateZ(0px);">
                                                <a class="item Fix on" onclick="_hip.push(['mv',{module:'2_nav_district',action:'click',title:'附近(智能范围)'}])" href="http://m.dianping.com/shoplist/163/d/1/c/10/s/s_-1">附近(智能范围)</a>
                                                <a class="item Fix " onclick="_hip.push(['mv',{module:'2_nav_district',action:'click',title:'500m'}])" href="http://m.dianping.com/shoplist/163/d/500/c/10/s/s_-1">500m</a>
                                                <a class="item Fix " onclick="_hip.push(['mv',{module:'2_nav_district',action:'click',title:'1km'}])" href="http://m.dianping.com/shoplist/163/d/1000/c/10/s/s_-1">1km</a>
                                                <a class="item Fix " onclick="_hip.push(['mv',{module:'2_nav_district',action:'click',title:'2km'}])" href="http://m.dianping.com/shoplist/163/d/2000/c/10/s/s_-1">2km</a>
                                                <a class="item Fix " onclick="_hip.push(['mv',{module:'2_nav_district',action:'click',title:'5km'}])" href="http://m.dianping.com/shoplist/163/d/5000/c/10/s/s_-1">5km</a>
                            </div>
                        <div class="iScrollVerticalScrollbar iScrollLoneScrollbar" style="position: absolute; z-index: 9999; width: 7px; bottom: 2px; top: 2px; right: 1px; pointer-events: none;"><div class="iScrollIndicator" style="box-sizing: border-box; position: absolute; background-color: rgba(0, 0, 0, 0.498039); border: 1px solid rgba(255, 255, 255, 0.901961); border-top-left-radius: 3px; border-top-right-radius: 3px; border-bottom-right-radius: 3px; border-bottom-left-radius: 3px; width: 100%; -webkit-transition: 0ms cubic-bezier(0.1, 0.57, 0.1, 1); transition: 0ms cubic-bezier(0.1, 0.57, 0.1, 1); display: none; height: 8px; -webkit-transform: translate(0px, -8px) translateZ(0px); background-position: initial initial; background-repeat: initial initial;"></div></div></div><div class="menu sub Hide" style="left: 45%; width: 55%;">
                            <div>
                                                <a class="item Fix " onclick="_hip.push(['mv',{module:'2_nav_district',action:'click',title:'全部商区'}])" href="http://m.dianping.com/shoplist/163/r/0/c/10/s/s_-1">全部商区</a>
                                                <a class="item Fix " onclick="_hip.push(['mv',{module:'2_nav_district',action:'click',title:'步行街/...'}])" href="http://m.dianping.com/shoplist/163/r/15814/c/10/s/s_-1">步行街/...</a>
                                                <a class="item Fix " onclick="_hip.push(['mv',{module:'2_nav_district',action:'click',title:'郏县中心...'}])" href="http://m.dianping.com/shoplist/163/r/24645/c/10/s/s_-1">郏县中心...</a>
                                                <a class="item Fix " onclick="_hip.push(['mv',{module:'2_nav_district',action:'click',title:'鲁山县中...'}])" href="http://m.dianping.com/shoplist/163/r/24644/c/10/s/s_-1">鲁山县中...</a>
                                                <a class="item Fix " onclick="_hip.push(['mv',{module:'2_nav_district',action:'click',title:'汝州市中...'}])" href="http://m.dianping.com/shoplist/163/r/24643/c/10/s/s_-1">汝州市中...</a>
                                                <a class="item Fix " onclick="_hip.push(['mv',{module:'2_nav_district',action:'click',title:'铁山乡'}])" href="http://m.dianping.com/shoplist/163/r/24642/c/10/s/s_-1">铁山乡</a>
                                                <a class="item Fix " onclick="_hip.push(['mv',{module:'2_nav_district',action:'click',title:'卫东区中...'}])" href="http://m.dianping.com/shoplist/163/r/24641/c/10/s/s_-1">卫东区中...</a>
                                                <a class="item Fix " onclick="_hip.push(['mv',{module:'2_nav_district',action:'click',title:'舞钢市中...'}])" href="http://m.dianping.com/shoplist/163/r/24640/c/10/s/s_-1">舞钢市中...</a>
                                                <a class="item Fix " onclick="_hip.push(['mv',{module:'2_nav_district',action:'click',title:'叶县中心...'}])" href="http://m.dianping.com/shoplist/163/r/24639/c/10/s/s_-1">叶县中心...</a>
                                                <a class="item Fix " onclick="_hip.push(['mv',{module:'2_nav_district',action:'click',title:'湛河区中...'}])" href="http://m.dianping.com/shoplist/163/r/24638/c/10/s/s_-1">湛河区中...</a>
                                                <a class="item Fix " onclick="_hip.push(['mv',{module:'2_nav_district',action:'click',title:'鹰城广场'}])" href="http://m.dianping.com/shoplist/163/r/15816/c/10/s/s_-1">鹰城广场</a>
                                                <a class="item Fix " onclick="_hip.push(['mv',{module:'2_nav_district',action:'click',title:'曙光街'}])" href="http://m.dianping.com/shoplist/163/r/15815/c/10/s/s_-1">曙光街</a>
                                                <a class="item Fix " onclick="_hip.push(['mv',{module:'2_nav_district',action:'click',title:'宝丰县中...'}])" href="http://m.dianping.com/shoplist/163/r/24646/c/10/s/s_-1">宝丰县中...</a>
                            </div>
                        </div><div class="menu sub Hide" style="left: 45%; width: 55%;">
                            <div>
                                                <a class="item Fix " onclick="_hip.push(['mv',{module:'2_nav_district',action:'click',title:'新华全境'}])" href="http://m.dianping.com/shoplist/163/r/4496/c/10/s/s_-1">新华全境</a>
                                                <a class="item Fix " onclick="_hip.push(['mv',{module:'2_nav_district',action:'click',title:'步行街/...'}])" href="http://m.dianping.com/shoplist/163/r/15814/c/10/s/s_-1">步行街/...</a>
                                                <a class="item Fix " onclick="_hip.push(['mv',{module:'2_nav_district',action:'click',title:'曙光街'}])" href="http://m.dianping.com/shoplist/163/r/15815/c/10/s/s_-1">曙光街</a>
                                                <a class="item Fix " onclick="_hip.push(['mv',{module:'2_nav_district',action:'click',title:'鹰城广场'}])" href="http://m.dianping.com/shoplist/163/r/15816/c/10/s/s_-1">鹰城广场</a>
                            </div>
                        </div><div class="menu sub Hide" style="left: 45%; width: 55%;">
                            <div>
                                                <a class="item Fix " onclick="_hip.push(['mv',{module:'2_nav_district',action:'click',title:'卫东全境'}])" href="http://m.dianping.com/shoplist/163/r/4497/c/10/s/s_-1">卫东全境</a>
                                                <a class="item Fix " onclick="_hip.push(['mv',{module:'2_nav_district',action:'click',title:'卫东区中...'}])" href="http://m.dianping.com/shoplist/163/r/24641/c/10/s/s_-1">卫东区中...</a>
                            </div>
                        </div><div class="menu sub Hide" style="left: 45%; width: 55%;">
                            <div>
                                                <a class="item Fix " onclick="_hip.push(['mv',{module:'2_nav_district',action:'click',title:'湛河全境'}])" href="http://m.dianping.com/shoplist/163/r/4498/c/10/s/s_-1">湛河全境</a>
                                                <a class="item Fix " onclick="_hip.push(['mv',{module:'2_nav_district',action:'click',title:'湛河区中...'}])" href="http://m.dianping.com/shoplist/163/r/24638/c/10/s/s_-1">湛河区中...</a>
                            </div>
                        </div><div class="menu sub Hide" style="left: 45%; width: 55%;">
                            <div>
                                                <a class="item Fix " onclick="_hip.push(['mv',{module:'2_nav_district',action:'click',title:'舞钢全境'}])" href="http://m.dianping.com/shoplist/163/r/4500/c/10/s/s_-1">舞钢全境</a>
                                                <a class="item Fix " onclick="_hip.push(['mv',{module:'2_nav_district',action:'click',title:'铁山乡'}])" href="http://m.dianping.com/shoplist/163/r/24642/c/10/s/s_-1">铁山乡</a>
                                                <a class="item Fix " onclick="_hip.push(['mv',{module:'2_nav_district',action:'click',title:'舞钢市中...'}])" href="http://m.dianping.com/shoplist/163/r/24640/c/10/s/s_-1">舞钢市中...</a>
                            </div>
                        </div><div class="menu sub Hide" style="left: 45%; width: 55%;">
                            <div>
                                                <a class="item Fix " onclick="_hip.push(['mv',{module:'2_nav_district',action:'click',title:'汝州全境'}])" href="http://m.dianping.com/shoplist/163/r/4501/c/10/s/s_-1">汝州全境</a>
                                                <a class="item Fix " onclick="_hip.push(['mv',{module:'2_nav_district',action:'click',title:'汝州市中...'}])" href="http://m.dianping.com/shoplist/163/r/24643/c/10/s/s_-1">汝州市中...</a>
                            </div>
                        </div><div class="menu sub Hide" style="left: 45%; width: 55%;">
                            <div>
                                                <a class="item Fix " onclick="_hip.push(['mv',{module:'2_nav_district',action:'click',title:'宝丰全境'}])" href="http://m.dianping.com/shoplist/163/r/4502/c/10/s/s_-1">宝丰全境</a>
                                                <a class="item Fix " onclick="_hip.push(['mv',{module:'2_nav_district',action:'click',title:'宝丰县中...'}])" href="http://m.dianping.com/shoplist/163/r/24646/c/10/s/s_-1">宝丰县中...</a>
                            </div>
                        </div><div class="menu sub Hide" style="left: 45%; width: 55%;">
                            <div>
                                                <a class="item Fix " onclick="_hip.push(['mv',{module:'2_nav_district',action:'click',title:'叶县全境'}])" href="http://m.dianping.com/shoplist/163/r/4503/c/10/s/s_-1">叶县全境</a>
                                                <a class="item Fix " onclick="_hip.push(['mv',{module:'2_nav_district',action:'click',title:'叶县中心...'}])" href="http://m.dianping.com/shoplist/163/r/24639/c/10/s/s_-1">叶县中心...</a>
                            </div>
                        </div><div class="menu sub Hide" style="left: 45%; width: 55%;">
                            <div>
                                                <a class="item Fix " onclick="_hip.push(['mv',{module:'2_nav_district',action:'click',title:'鲁山全境'}])" href="http://m.dianping.com/shoplist/163/r/4504/c/10/s/s_-1">鲁山全境</a>
                                                <a class="item Fix " onclick="_hip.push(['mv',{module:'2_nav_district',action:'click',title:'鲁山县中...'}])" href="http://m.dianping.com/shoplist/163/r/24644/c/10/s/s_-1">鲁山县中...</a>
                            </div>
                        </div><div class="menu sub Hide" style="left: 45%; width: 55%;">
                            <div>
                                                <a class="item Fix " onclick="_hip.push(['mv',{module:'2_nav_district',action:'click',title:'郏县全境'}])" href="http://m.dianping.com/shoplist/163/r/4505/c/10/s/s_-1">郏县全境</a>
                                                <a class="item Fix " onclick="_hip.push(['mv',{module:'2_nav_district',action:'click',title:'郏县中心...'}])" href="http://m.dianping.com/shoplist/163/r/24645/c/10/s/s_-1">郏县中心...</a>
                            </div>
                        </div></section>
    <section class="selector J_selector Hide" id='xianshi2' style="overflow-y: auto;">
        <div class="menu main" style="width:100%;">
            <div style="padding-left:100px;">
                    <div>
                        <a href="<?php echo U('querytype',array('type'=>'餐饮'));?>"><p class="item Fix on">餐饮</p></a>
                    </div>
                    <div>
                        <a href="<?php echo U('querytype',array('type'=>'酒店'));?>"><p class="item Fix ">酒店</p></a>
                    </div>
                    <div>
                       <a href="<?php echo U('querytype',array('type'=>'咖啡厅'));?>"> <p class="item Fix ">咖啡厅</p></a>
                    </div>
                    <div>
                        <a href="<?php echo U('querytype',array('type'=>'足浴'));?>"><p class="item Fix ">足浴</p></a>
                    </div>
                    <div>
                        <a href="<?php echo U('querytype',array('type'=>'KTV'));?>"><p class="item Fix ">KTV</p></a>
                    </div>
					<div>
                        <a href="<?php echo U('querytype',array('type'=>'购物商超'));?>"><p class="item Fix ">购物商超</p></a>
                    </div>
					<div>
                        <a href="<?php echo U('querytype',array('type'=>'酒店宾馆'));?>"><p class="item Fix ">酒店宾馆</p></a>
                    </div>
					<div>
                        <a href="<?php echo U('querytype',array('type'=>'休闲娱乐'));?>"><p class="item Fix ">休闲娱乐</p></a>
                    </div>
            </div>
        </div>
    <div class="menu sub " style="left: 45%; width: 55%;display:none;">
                            <div>
                                                <a class="item Fix on" onclick="_hip.push(['mv',{module:'2_nav_category',action:'click',title:'全部美食'}])" href="http://m.dianping.com/shoplist/163/d/1/c/10/s/s_-1">全部美食</a>

                                                <a class="item Fix " onclick="_hip.push(['mv',{module:'2_nav_category',action:'click',title:'川菜'}])" href="http://m.dianping.com/shoplist/163/d/1/c/102/s/s_-1">川菜</a>

                                                <a class="item Fix " onclick="_hip.push(['mv',{module:'2_nav_category',action:'click',title:'烧烤'}])" href="http://m.dianping.com/shoplist/163/d/1/c/508/s/s_-1">烧烤</a>

                                                <a class="item Fix " onclick="_hip.push(['mv',{module:'2_nav_category',action:'click',title:'粤菜'}])" href="http://m.dianping.com/shoplist/163/d/1/c/103/s/s_-1">粤菜</a>

                                                <a class="item Fix " onclick="_hip.push(['mv',{module:'2_nav_category',action:'click',title:'江浙菜'}])" href="http://m.dianping.com/shoplist/163/d/1/c/101/s/s_-1">江浙菜</a>

                                                <a class="item Fix " onclick="_hip.push(['mv',{module:'2_nav_category',action:'click',title:'火锅'}])" href="http://m.dianping.com/shoplist/163/d/1/c/110/s/s_-1">火锅</a>

                                                <a class="item Fix " onclick="_hip.push(['mv',{module:'2_nav_category',action:'click',title:'自助餐'}])" href="http://m.dianping.com/shoplist/163/d/1/c/111/s/s_-1">自助餐</a>

                                                <a class="item Fix " onclick="_hip.push(['mv',{module:'2_nav_category',action:'click',title:'清真菜'}])" href="http://m.dianping.com/shoplist/163/d/1/c/108/s/s_-1">清真菜</a>

                                                <a class="item Fix " onclick="_hip.push(['mv',{module:'2_nav_category',action:'click',title:'东北菜'}])" href="http://m.dianping.com/shoplist/163/d/1/c/106/s/s_-1">东北菜</a>

                                                <a class="item Fix " onclick="_hip.push(['mv',{module:'2_nav_category',action:'click',title:'酒吧'}])" href="http://m.dianping.com/shoplist/163/d/1/c/133/s/s_-1">酒吧</a>

                                                <a class="item Fix " onclick="_hip.push(['mv',{module:'2_nav_category',action:'click',title:'咖啡厅'}])" href="http://m.dianping.com/shoplist/163/d/1/c/132/s/s_-1">咖啡厅</a>

                                                <a class="item Fix " onclick="_hip.push(['mv',{module:'2_nav_category',action:'click',title:'湘菜'}])" href="http://m.dianping.com/shoplist/163/d/1/c/104/s/s_-1">湘菜</a>

                                                <a class="item Fix " onclick="_hip.push(['mv',{module:'2_nav_category',action:'click',title:'茶馆'}])" href="http://m.dianping.com/shoplist/163/d/1/c/134/s/s_-1">茶馆</a>

                                                <a class="item Fix " onclick="_hip.push(['mv',{module:'2_nav_category',action:'click',title:'面包甜点'}])" href="http://m.dianping.com/shoplist/163/d/1/c/117/s/s_-1">面包甜点</a>

                                                <a class="item Fix " onclick="_hip.push(['mv',{module:'2_nav_category',action:'click',title:'豫菜'}])" href="http://m.dianping.com/shoplist/163/d/1/c/1080/s/s_-1">豫菜</a>

                                                <a class="item Fix " onclick="_hip.push(['mv',{module:'2_nav_category',action:'click',title:'西餐'}])" href="http://m.dianping.com/shoplist/163/d/1/c/116/s/s_-1">西餐</a>

                                                <a class="item Fix " onclick="_hip.push(['mv',{module:'2_nav_category',action:'click',title:'韩国料理'}])" href="http://m.dianping.com/shoplist/163/d/1/c/114/s/s_-1">韩国料理</a>

                                                <a class="item Fix " onclick="_hip.push(['mv',{module:'2_nav_category',action:'click',title:'小吃面食'}])" href="http://m.dianping.com/shoplist/163/d/1/c/217/s/s_-1">小吃面食</a>

                                                <a class="item Fix " onclick="_hip.push(['mv',{module:'2_nav_category',action:'click',title:'日本料理'}])" href="http://m.dianping.com/shoplist/163/d/1/c/113/s/s_-1">日本料理</a>

                                                <a class="item Fix " onclick="_hip.push(['mv',{module:'2_nav_category',action:'click',title:'新疆菜'}])" href="http://m.dianping.com/shoplist/163/d/1/c/3243/s/s_-1">新疆菜</a>

                                                <a class="item Fix " onclick="_hip.push(['mv',{module:'2_nav_category',action:'click',title:'快餐简餐'}])" href="http://m.dianping.com/shoplist/163/d/1/c/210/s/s_-1">快餐简餐</a>

                                                <a class="item Fix " onclick="_hip.push(['mv',{module:'2_nav_category',action:'click',title:'其他'}])" href="http://m.dianping.com/shoplist/163/d/1/c/118/s/s_-1">其他</a>

                            </div>
                        </div><div class="menu sub Hide" style="left: 45%; width: 55%;">
                            <div>
                                                <a class="item Fix " onclick="_hip.push(['mv',{module:'2_nav_category',action:'click',title:'全部购物'}])" href="http://m.dianping.com/shoplist/163/d/1/c/20/s/s_-1">全部购物</a>

                                                <a class="item Fix " onclick="_hip.push(['mv',{module:'2_nav_category',action:'click',title:'药店'}])" href="http://m.dianping.com/shoplist/163/d/1/c/235/s/s_-1">药店</a>

                                                <a class="item Fix " onclick="_hip.push(['mv',{module:'2_nav_category',action:'click',title:'办公/文...'}])" href="http://m.dianping.com/shoplist/163/d/1/c/26101/s/s_-1">办公/文...</a>

                                                <a class="item Fix " onclick="_hip.push(['mv',{module:'2_nav_category',action:'click',title:'眼镜店'}])" href="http://m.dianping.com/shoplist/163/d/1/c/128/s/s_-1">眼镜店</a>

                                                <a class="item Fix " onclick="_hip.push(['mv',{module:'2_nav_category',action:'click',title:'综合商场'}])" href="http://m.dianping.com/shoplist/163/d/1/c/119/s/s_-1">综合商场</a>

                                                <a class="item Fix " onclick="_hip.push(['mv',{module:'2_nav_category',action:'click',title:'超市/便...'}])" href="http://m.dianping.com/shoplist/163/d/1/c/187/s/s_-1">超市/便...</a>

                                                <a class="item Fix " onclick="_hip.push(['mv',{module:'2_nav_category',action:'click',title:'食品茶酒'}])" href="http://m.dianping.com/shoplist/163/d/1/c/184/s/s_-1">食品茶酒</a>

                                                <a class="item Fix " onclick="_hip.push(['mv',{module:'2_nav_category',action:'click',title:'花店'}])" href="http://m.dianping.com/shoplist/163/d/1/c/26085/s/s_-1">花店</a>

                                                <a class="item Fix " onclick="_hip.push(['mv',{module:'2_nav_category',action:'click',title:'书店'}])" href="http://m.dianping.com/shoplist/163/d/1/c/127/s/s_-1">书店</a>

                                                <a class="item Fix " onclick="_hip.push(['mv',{module:'2_nav_category',action:'click',title:'家具家居'}])" href="http://m.dianping.com/shoplist/163/d/1/c/126/s/s_-1">家具家居</a>

                                                <a class="item Fix " onclick="_hip.push(['mv',{module:'2_nav_category',action:'click',title:'母婴儿童'}])" href="http://m.dianping.com/shoplist/163/d/1/c/125/s/s_-1">母婴儿童</a>

                                                <a class="item Fix " onclick="_hip.push(['mv',{module:'2_nav_category',action:'click',title:'数码家电'}])" href="http://m.dianping.com/shoplist/163/d/1/c/124/s/s_-1">数码家电</a>

                                                <a class="item Fix " onclick="_hip.push(['mv',{module:'2_nav_category',action:'click',title:'化妆品'}])" href="http://m.dianping.com/shoplist/163/d/1/c/123/s/s_-1">化妆品</a>

                                                <a class="item Fix " onclick="_hip.push(['mv',{module:'2_nav_category',action:'click',title:'珠宝饰品'}])" href="http://m.dianping.com/shoplist/163/d/1/c/122/s/s_-1">珠宝饰品</a>

                                                <a class="item Fix " onclick="_hip.push(['mv',{module:'2_nav_category',action:'click',title:'运动户外'}])" href="http://m.dianping.com/shoplist/163/d/1/c/121/s/s_-1">运动户外</a>

                                                <a class="item Fix " onclick="_hip.push(['mv',{module:'2_nav_category',action:'click',title:'服饰鞋包'}])" href="http://m.dianping.com/shoplist/163/d/1/c/120/s/s_-1">服饰鞋包</a>

                                                <a class="item Fix " onclick="_hip.push(['mv',{module:'2_nav_category',action:'click',title:'更多购物...'}])" href="http://m.dianping.com/shoplist/163/d/1/c/131/s/s_-1">更多购物...</a>

                            </div>
                        </div><div class="menu sub Hide" style="left: 45%; width: 55%;">
                            <div>
                                                <a class="item Fix " onclick="_hip.push(['mv',{module:'2_nav_category',action:'click',title:'全部休闲'}])" href="http://m.dianping.com/shoplist/163/d/1/c/30/s/s_-1">全部休闲</a>

                                                <a class="item Fix " onclick="_hip.push(['mv',{module:'2_nav_category',action:'click',title:'游乐游艺'}])" href="http://m.dianping.com/shoplist/163/d/1/c/137/s/s_-1">游乐游艺</a>

                                                <a class="item Fix " onclick="_hip.push(['mv',{module:'2_nav_category',action:'click',title:'电影院'}])" href="http://m.dianping.com/movie">电影院</a>

                                                <a class="item Fix " onclick="_hip.push(['mv',{module:'2_nav_category',action:'click',title:'景点/郊...'}])" href="http://m.dianping.com/shoplist/163/d/1/c/139/s/s_-1">景点/郊...</a>

                                                <a class="item Fix " onclick="_hip.push(['mv',{module:'2_nav_category',action:'click',title:'公园'}])" href="http://m.dianping.com/shoplist/163/d/1/c/138/s/s_-1">公园</a>

                                                <a class="item Fix " onclick="_hip.push(['mv',{module:'2_nav_category',action:'click',title:'足疗按摩'}])" href="http://m.dianping.com/shoplist/163/d/1/c/141/s/s_-1">足疗按摩</a>

                                                <a class="item Fix " onclick="_hip.push(['mv',{module:'2_nav_category',action:'click',title:'洗浴'}])" href="http://m.dianping.com/shoplist/163/d/1/c/140/s/s_-1">洗浴</a>

                                                <a class="item Fix " onclick="_hip.push(['mv',{module:'2_nav_category',action:'click',title:'文化艺术'}])" href="http://m.dianping.com/shoplist/163/d/1/c/142/s/s_-1">文化艺术</a>

                                                <a class="item Fix " onclick="_hip.push(['mv',{module:'2_nav_category',action:'click',title:'酒吧'}])" href="http://m.dianping.com/shoplist/163/d/1/c/133/s/s_-1">酒吧</a>

                                                <a class="item Fix " onclick="_hip.push(['mv',{module:'2_nav_category',action:'click',title:'咖啡厅'}])" href="http://m.dianping.com/shoplist/163/d/1/c/132/s/s_-1">咖啡厅</a>

                                                <a class="item Fix " onclick="_hip.push(['mv',{module:'2_nav_category',action:'click',title:'KTV'}])" href="http://m.dianping.com/shoplist/163/d/1/c/135/s/s_-1">KTV</a>

                                                <a class="item Fix " onclick="_hip.push(['mv',{module:'2_nav_category',action:'click',title:'茶馆'}])" href="http://m.dianping.com/shoplist/163/d/1/c/134/s/s_-1">茶馆</a>

                                                <a class="item Fix " onclick="_hip.push(['mv',{module:'2_nav_category',action:'click',title:'桌球馆'}])" href="http://m.dianping.com/shoplist/163/d/1/c/156/s/s_-1">桌球馆</a>

                                                <a class="item Fix " onclick="_hip.push(['mv',{module:'2_nav_category',action:'click',title:'温泉'}])" href="http://m.dianping.com/shoplist/163/d/1/c/5672/s/s_-1">温泉</a>

                                                <a class="item Fix " onclick="_hip.push(['mv',{module:'2_nav_category',action:'click',title:'桌面游戏'}])" href="http://m.dianping.com/shoplist/163/d/1/c/6694/s/s_-1">桌面游戏</a>

                                                <a class="item Fix " onclick="_hip.push(['mv',{module:'2_nav_category',action:'click',title:'休闲网吧'}])" href="http://m.dianping.com/shoplist/163/d/1/c/20042/s/s_-1">休闲网吧</a>

                                                <a class="item Fix " onclick="_hip.push(['mv',{module:'2_nav_category',action:'click',title:'采摘/农...'}])" href="http://m.dianping.com/shoplist/163/d/1/c/20038/s/s_-1">采摘/农...</a>

                                                <a class="item Fix " onclick="_hip.push(['mv',{module:'2_nav_category',action:'click',title:'密室'}])" href="http://m.dianping.com/shoplist/163/d/1/c/2754/s/s_-1">密室</a>

                                                <a class="item Fix " onclick="_hip.push(['mv',{module:'2_nav_category',action:'click',title:'运动健身'}])" href="http://m.dianping.com/shoplist/163/d/1/c/2636/s/s_-1">运动健身</a>

                                                <a class="item Fix " onclick="_hip.push(['mv',{module:'2_nav_category',action:'click',title:'更多休闲...'}])" href="http://m.dianping.com/shoplist/163/d/1/c/26490/s/s_-1">更多休闲...</a>

                            </div>
                        </div><div class="menu sub Hide" style="left: 45%; width: 55%;">
                            <div>
                                                <a class="item Fix " onclick="_hip.push(['mv',{module:'2_nav_category',action:'click',title:'全部酒店'}])" href="http://m.dianping.com/shoplist/163/d/1/c/60/s/s_-1">全部酒店</a>

                                                <a class="item Fix " onclick="_hip.push(['mv',{module:'2_nav_category',action:'click',title:'经济型酒...'}])" href="http://m.dianping.com/shoplist/163/d/1/c/171/s/s_-1">经济型酒...</a>

                                                <a class="item Fix " onclick="_hip.push(['mv',{module:'2_nav_category',action:'click',title:'三星级酒...'}])" href="http://m.dianping.com/shoplist/163/d/1/c/170/s/s_-1">三星级酒...</a>

                                                <a class="item Fix " onclick="_hip.push(['mv',{module:'2_nav_category',action:'click',title:'公寓式酒...'}])" href="http://m.dianping.com/shoplist/163/d/1/c/6693/s/s_-1">公寓式酒...</a>

                                                <a class="item Fix " onclick="_hip.push(['mv',{module:'2_nav_category',action:'click',title:'客栈旅舍'}])" href="http://m.dianping.com/shoplist/163/d/1/c/25842/s/s_-1">客栈旅舍</a>

                                                <a class="item Fix " onclick="_hip.push(['mv',{module:'2_nav_category',action:'click',title:'四星级酒...'}])" href="http://m.dianping.com/shoplist/163/d/1/c/169/s/s_-1">四星级酒...</a>

                                                <a class="item Fix " onclick="_hip.push(['mv',{module:'2_nav_category',action:'click',title:'五星级酒...'}])" href="http://m.dianping.com/shoplist/163/d/1/c/168/s/s_-1">五星级酒...</a>

                                                <a class="item Fix " onclick="_hip.push(['mv',{module:'2_nav_category',action:'click',title:'青年旅舍'}])" href="http://m.dianping.com/shoplist/163/d/1/c/172/s/s_-1">青年旅舍</a>

                                                <a class="item Fix " onclick="_hip.push(['mv',{module:'2_nav_category',action:'click',title:'精品酒店'}])" href="http://m.dianping.com/shoplist/163/d/1/c/6714/s/s_-1">精品酒店</a>

                                                <a class="item Fix " onclick="_hip.push(['mv',{module:'2_nav_category',action:'click',title:'更多酒店...'}])" href="http://m.dianping.com/shoplist/163/d/1/c/174/s/s_-1">更多酒店...</a>

                            </div>
                        </div><div class="menu sub Hide" style="left: 45%; width: 55%;">
                            <div>
                                                <a class="item Fix " onclick="_hip.push(['mv',{module:'2_nav_category',action:'click',title:'全部生活'}])" href="http://m.dianping.com/shoplist/163/d/1/c/80/s/s_-1">全部生活</a>

                                                <a class="item Fix " onclick="_hip.push(['mv',{module:'2_nav_category',action:'click',title:'快照/冲...'}])" href="http://m.dianping.com/shoplist/163/d/1/c/4607/s/s_-1">快照/冲...</a>

                                                <a class="item Fix " onclick="_hip.push(['mv',{module:'2_nav_category',action:'click',title:'室内装潢'}])" href="http://m.dianping.com/shoplist/163/d/1/c/4606/s/s_-1">室内装潢</a>

                                                <a class="item Fix " onclick="_hip.push(['mv',{module:'2_nav_category',action:'click',title:'体检中心'}])" href="http://m.dianping.com/shoplist/163/d/1/c/612/s/s_-1">体检中心</a>

                                                <a class="item Fix " onclick="_hip.push(['mv',{module:'2_nav_category',action:'click',title:'摄影'}])" href="http://m.dianping.com/shoplist/163/d/1/c/6032/s/s_-1">摄影</a>

                                                <a class="item Fix " onclick="_hip.push(['mv',{module:'2_nav_category',action:'click',title:'旅行社'}])" href="http://m.dianping.com/shoplist/163/d/1/c/197/s/s_-1">旅行社</a>

                                                <a class="item Fix " onclick="_hip.push(['mv',{module:'2_nav_category',action:'click',title:'小区/商...'}])" href="http://m.dianping.com/shoplist/163/d/1/c/5834/s/s_-1">小区/商...</a>

                                                <a class="item Fix " onclick="_hip.push(['mv',{module:'2_nav_category',action:'click',title:'家政'}])" href="http://m.dianping.com/shoplist/163/d/1/c/195/s/s_-1">家政</a>

                                                <a class="item Fix " onclick="_hip.push(['mv',{module:'2_nav_category',action:'click',title:'宠物'}])" href="http://m.dianping.com/shoplist/163/d/1/c/194/s/s_-1">宠物</a>

                                                <a class="item Fix " onclick="_hip.push(['mv',{module:'2_nav_category',action:'click',title:'汽车服务'}])" href="http://m.dianping.com/shoplist/163/d/1/c/5240/s/s_-1">汽车服务</a>

                                                <a class="item Fix " onclick="_hip.push(['mv',{module:'2_nav_category',action:'click',title:'物流快递'}])" href="http://m.dianping.com/shoplist/163/d/1/c/32742/s/s_-1">物流快递</a>

                                                <a class="item Fix " onclick="_hip.push(['mv',{module:'2_nav_category',action:'click',title:'银行'}])" href="http://m.dianping.com/shoplist/163/d/1/c/237/s/s_-1">银行</a>

                                                <a class="item Fix " onclick="_hip.push(['mv',{module:'2_nav_category',action:'click',title:'加油站'}])" href="http://m.dianping.com/shoplist/163/d/1/c/236/s/s_-1">加油站</a>

                                                <a class="item Fix " onclick="_hip.push(['mv',{module:'2_nav_category',action:'click',title:'公司企业'}])" href="http://m.dianping.com/shoplist/163/d/1/c/979/s/s_-1">公司企业</a>

                                                <a class="item Fix " onclick="_hip.push(['mv',{module:'2_nav_category',action:'click',title:'教育培训'}])" href="http://m.dianping.com/shoplist/163/d/1/c/5804/s/s_-1">教育培训</a>

                                                <a class="item Fix " onclick="_hip.push(['mv',{module:'2_nav_category',action:'click',title:'婚庆'}])" href="http://m.dianping.com/shoplist/163/d/1/c/167/s/s_-1">婚庆</a>

                                                <a class="item Fix " onclick="_hip.push(['mv',{module:'2_nav_category',action:'click',title:'网站'}])" href="http://m.dianping.com/shoplist/163/d/1/c/26119/s/s_-1">网站</a>

                                                <a class="item Fix " onclick="_hip.push(['mv',{module:'2_nav_category',action:'click',title:'居家维修'}])" href="http://m.dianping.com/shoplist/163/d/1/c/26117/s/s_-1">居家维修</a>

                                                <a class="item Fix " onclick="_hip.push(['mv',{module:'2_nav_category',action:'click',title:'电信营业...'}])" href="http://m.dianping.com/shoplist/163/d/1/c/835/s/s_-1">电信营业...</a>

                                                <a class="item Fix " onclick="_hip.push(['mv',{module:'2_nav_category',action:'click',title:'洗衣店'}])" href="http://m.dianping.com/shoplist/163/d/1/c/6120/s/s_-1">洗衣店</a>

                                                <a class="item Fix " onclick="_hip.push(['mv',{module:'2_nav_category',action:'click',title:'交通'}])" href="http://m.dianping.com/shoplist/163/d/1/c/6823/s/s_-1">交通</a>

                                                <a class="item Fix " onclick="_hip.push(['mv',{module:'2_nav_category',action:'click',title:'美容/美...'}])" href="http://m.dianping.com/shoplist/163/d/1/c/5206/s/s_-1">美容/美...</a>

                                                <a class="item Fix " onclick="_hip.push(['mv',{module:'2_nav_category',action:'click',title:'齿科'}])" href="http://m.dianping.com/shoplist/163/d/1/c/182/s/s_-1">齿科</a>

                                                <a class="item Fix " onclick="_hip.push(['mv',{module:'2_nav_category',action:'click',title:'停车场'}])" href="http://m.dianping.com/shoplist/163/d/1/c/180/s/s_-1">停车场</a>

                                                <a class="item Fix " onclick="_hip.push(['mv',{module:'2_nav_category',action:'click',title:'医院'}])" href="http://m.dianping.com/shoplist/163/d/1/c/181/s/s_-1">医院</a>

                                                <a class="item Fix " onclick="_hip.push(['mv',{module:'2_nav_category',action:'click',title:'更多生活...'}])" href="http://m.dianping.com/shoplist/163/d/1/c/26491/s/s_-1">更多生活...</a>

                            </div>
                        </div></section>
    <section class="selector J_selector Hide" id='xianshi3' style="overflow-y: auto;">
        <div class="menu main full" style="padding-left:100px;">
            <div>
                    <div>
                        <a class="item Fix" onclick="" href="<?php echo U('xiaofei',array('xiaofei'=>'低端'));?>">低端</a>
						<a class="item Fix" onclick="" href="<?php echo U('xiaofei',array('xiaofei'=>'工薪'));?>">工薪</a>
						<a class="item Fix" onclick="" href="<?php echo U('xiaofei',array('xiaofei'=>'小资'));?>">小资</a>
						<a class="item Fix" onclick="" href="<?php echo U('xiaofei',array('xiaofei'=>'中高档'));?>">中高档</a>
						<a class="item Fix" onclick="" href="<?php echo U('xiaofei',array('xiaofei'=>'高档'));?>">高档</a>
						<a class="item Fix" onclick="" href="<?php echo U('xiaofei',array('xiaofei'=>'奢华'));?>">奢华</a>
                    </div>
            </div>
        </div>
    </section>
</nav>

<!--商户list-->
<div class="shop-list J_list">
        <input type="hidden" class="J_query_id" value="92e6535e-b0ec-4d16-90c1-4a369563cdcf">
		<?php if(is_array($shops)): $i = 0; $__LIST__ = $shops;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a class="item" onclick="" href="<?php if(strlen($vo['lianmengurl'])>0){echo 'http://'.$vo['lianmengurl']; }else{echo '#';} ?>">
                <div class="cnt">
                <h3 style='color:#FF8400;'><?php echo ($vo["shopname"]); ?>
                        
                </h3>
                <div class="comment">
                    <span class="star star-40"></span>
					<?php if($vo["zhekou"] == '10'): ?><span class="discount">无优惠</span>
					<?php else: ?>
                        <span class="discount"><?php echo ($vo["zhekou"]); ?>折起</span><?php endif; ?>
                </div>
                <div class="intro Fix">
                    <span><?php echo ($vo["province"]); echo ($vo["city"]); echo ($vo["area"]); echo ($vo["address"]); ?></span>
                    <span class="type"><?php echo ($vo["trade"]); ?></span>					
                    <span class="dis"><?php echo ($vo["juli"]); ?>m</span>
                </div>
            </a>
				<a class="item" href="tel:<?php echo ($vo["tel"]); ?>" style="font-size:16px;"><?php echo ($vo["tel"]); ?></a>
                </div><?php endforeach; endif; else: echo "" ;endif; ?>
    <div class="link-btn-wrap">
	<style>
		.pages a{
			background-color:#FF8400;
			color:white;
			padding:3px 6px;
			border-radius:5px;
			margin:3px;
		}
		.pages span{
			margin:3px;
			background-color:black;
			color:white;
			padding:3px 6px;
			border-radius:5px;
		}
	</style>
	<div style="text-align:center;font-size:16px;margin-top:20px;" class="pages"><?php echo ($page); ?></div>
    <a class="J_view_more link-btn" href="" data-page="2">&nbsp;</a>
    </div>
</div>
<footer class="footer">
    <p class="copyright">copyright ©2014 wyywifi.com</p>
</footer>
<script async="" src="<?php echo ($Theme['P']['root']); ?>/lianmeng/app-m-dianping-list.js"></script>
<script async="" src="<?php echo ($Theme['P']['root']); ?>/lianmeng/mobile-download-banner.js"></script>
<script async="" src="<?php echo ($Theme['P']['root']); ?>/lianmeng/mobile-common-search.js"></script>
<script async="" src="<?php echo ($Theme['P']['root']); ?>/lianmeng/~mod~mobile-common~0.1.19~mobile-common.js,~mod~mobile-common~0.1.18~mobile-common.js"></script>
<script async="" src="<?php echo ($Theme['P']['root']); ?>/lianmeng/~mod~app-m-dianping~1.1.3~app-m-dianping.js,~mod~openapp~0.1.2~openapp.js"></script>
<script async="" src="<?php echo ($Theme['P']['root']); ?>/lianmeng/mobile-common-nav.js"></script>
<script async="" src="<?php echo ($Theme['P']['root']); ?>/lianmeng/~mod~hippo~1.2.5~hippo.js,~mod~cookie~0.1.2~cookie.js,~mod~iscroll~5.0.10~iscroll.js"></script>
<script async="" src="<?php echo ($Theme['P']['root']); ?>/lianmeng/~mod~wepp-module-event~0.2.1~wepp-module-event.js,~mod~wepp-module-overlay~0.1.0~wepp-module-overlay.js,~mod~wepp-module-overlay~0.2.0~wepp-module-overlay.js,~mod~wepp-module-toast~0.1.3~wepp-m.js"></script>

<script>
facade({entry:"app-m-dianping-list", data: {
lat:"113.3172682",
lng:"113.3172682",
cityId:"163",
queryId:"92e6535e-b0ec-4d16-90c1-4a369563cdcf",
reloadUrlFn:function(cityId,cityEn,cityName){
return "/shoplist/"+cityId+"/c/10"
}
}});
facade({entry:"hippo"});
facade({entry:"app-m-dianping", data: {
        weixin:{
            appid : 'wx841a97238d9e17b2',
            img_url : "http://m1.s1.dpfile.com/sc/2014/mobile_pay5/dp_icon_100.png",
            link : location.href,
            desc : '大众点评网为您找到平顶山,附近附近的美食商户信息。点击查看更多关于平顶山附近附近美食商户电话、地址、价格、评价、排行榜等详情。',
            title : '附近-平顶山美食-大众点评网'
        }
    }});
</script><!--footer end-->
<script type="text/javascript">
</script>
<div class="J_search_container search_container" style="display:none ;">
    <form class="J_form" method="post" action="http://m.dianping.com/shoplist/163/search" onsubmit="var keyword=document.getElementsByClassName('J_search_input')[0].value; _hip.push(['mv', {module:'2_search_item',action:'click',keyword:keyword}]);">
        <header>
            <div class="head_cnt">
                <div class="head_cnt_input">
                    <input type="text" name="keyword" class="search J_search_input" placeholder="搜店铺、找优惠" autocomplete="off">
                    <input type="submit">
                </div>
                <a class="cancel J_cancel" onclick="_hip.push(['mv', {module:'index_keyword_cancel',action:'click'}]);" href="javascript:;">取消</a>
            </div>
        </header>
        <div class="J_key_list key_list Fix">
        </div>
        <div class="J_history_list key_list Fix">

        </div>
        <a class="J_history_clear link-btn" href="javascript:;">清除历史记录</a>
        <ul class="J_suggest_list suggest_list">
        </ul>
    </form>
</div>


<div class="overlay" onclick="allhide();" id='heimu' style="top: 0px; left: 0px; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.6); z-index: 200; position: fixed; display: none; background-position: initial initial; background-repeat: initial initial;"></div>
<div class="overlay" style="top: 0px; left: 0px; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.6); z-index: 9999; position: fixed; display: none; background-position: initial initial; background-repeat: initial initial;"></div><a onclick="window.scrollTo(0,0)" class="top-box Hide"><div class="arrow-ent"></div></a><div class="loc-bar"><div class="loc-place"><?php echo ($_SESSION['shop']['province']); $z = $_SESSION['shop']['province'];if($z!='北京' && $z!='上海' && $z!='重庆' && $z!='天津'){echo $_SESSION['shop']['city'];} echo ($_SESSION['shop']['area']); ?></div><a href="javascript:;" class="loc-refresh-btn" style="display:none;"></a></div>
<style>
.footer_banner{display:none;}
</style>
<script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1253016770'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "w.cnzz.com/c.php%3Fid%3D1253016770' type='text/javascript'%3E%3C/script%3E"));</script>
</body></html>