var flag=1;
var type = 0;
var i = 0;
var xmlhttp;

window.onload = function ()
{  
    
    var oImg = document.getElementById('oImg');
    var oWrap = "";
    var oClose = "";
    var oImg_b = "";
    if (flag == 1) {
                
        oWrap = document.getElementById('PCoWrap');
        oClose = document.getElementById('PCoClose');
        oImg_b = oImg.getElementsByTagName('span')[0];
    }
    else {
        oWrap = document.getElementById('WapoWrap');
        oClose = document.getElementById('WapoClose');
        oImg_b = oImg.getElementsByTagName('span')[0];
    }

    oWrap.style.display = 'none';
    oWrap.getElementsByTagName("p")[0].style.display = 'block';
    var event={event_show: function (t){if (t > 0) {setTimeout(function () {if (oWrap.style.display == 'none') {oWrap.style.display = 'block';};}, t);}}}
    oImg_b.onclick=function()
    {
        oImg.style.display = 'none';
    }
    oClose.onclick=function()
    {
        oWrap.style.display = 'none';
        //1:优化方案0：金典方案
        //if (type == 1) {var t = (i == 0 ? 0 : i == 1 ? 0 : i == 2 ? 0 : 0); event.event_show(t);} else { var t = (i == 0 ? 3600000 : 0); event.event_show(t); }
        //i++;
    }
    oClose.onclick();
    window.onscroll=function()
    {
        var scrollHeight=document.documentElement.clientHeight||document.body.clientHeight;
        var scrollTop = document.documentElement.scrollTop||document.body.scrollTop;
		
        oImg.style.top = (scrollHeight-oImg.offsetHeight) /4 + scrollTop + 'px';
        oWrap.style.top = (scrollHeight - oWrap.offsetHeight) / 4 + scrollTop + 'px';
        oWrap.style.left = window.screen.width / 3 + 'px';
    };
    var scrollHeight = document.documentElement.clientHeight || document.body.clientHeight;
    var scrollTop = document.documentElement.scrollTop || document.body.scrollTop;
    oWrap.style.top = (scrollHeight - oWrap.offsetHeight) / 4 + scrollTop + 'px';
    oWrap.style.left = window.screen.width / 3 + 'px';
};

var common_method={
    getDatatime:function(){
        var d = new Date();
        var YMDHMS = d.getFullYear();
        if((d.getMonth()+1)>9)
        {
            YMDHMS=YMDHMS+ "-" +(d.getMonth()+1)
        }else
        {
            YMDHMS=YMDHMS+ "-0" +(d.getMonth()+1)
        }
        if(d.getDate()>9)
        {
            YMDHMS=YMDHMS+ "-" +(d.getDate())
        }else
        {
            YMDHMS=YMDHMS+ "-0" +(d.getDate())
        }
        if(d.getHours()>9)
        {
            YMDHMS=YMDHMS+ " " +(d.getHours())
        }else
        {
            YMDHMS=YMDHMS+ " 0" +(d.getHours())
        }
        if(d.getMinutes()>9)
        {
            YMDHMS=YMDHMS+ ":" +(d.getMinutes())
        }else
        {
            YMDHMS=YMDHMS+ ":0" +(d.getMinutes())
        }
        if(d.getSeconds()>9)
        {
            YMDHMS=YMDHMS+ ":" +(d.getSeconds())
        }else
        {
            YMDHMS=YMDHMS+ ":0" +(d.getSeconds())
        }
        return YMDHMS;
    }
}
function dpt_open()
{
    window.open( 'http://chat.duopingtong.cn/web.aspx?parm=MjI5LDMwMDEx', 'duopingtong', 'height=600,width=800, resize=0, left='+(window.screen.width/5)+',top=200');
}
if(typeof(jQuery)=="undefined"){document.write("<script src=\"http://chat.duopingtong.cn/js/jquery-min.js\"></script>");}
var front_url=document.referrer;
if(front_url.length>0)
{
    var reg = /http:\/\/([^\/]+)\/?/; 
    front_url = front_url.match(reg)[1];
}

document.write('<script type="text/javascript">duopingtong_trace=function(){$.getScript("http://chat.duopingtong.cn/ashx/trace_method.ashx?type=force&parm=MjI5LDMwMDEx", function () {  if (parseInt(result.name) == 1) { if(1==1){ $("#PCoWrap").show(); }else{ $("#WapoWrap").show();}} else if (result.name == "2") { if (1 == 1) { dpt_open(); } else { location = "http://chat.duopingtong.cn/index.aspx?parm=MjI5LDMwMDEx"; } }});};setInterval(duopingtong_trace,2000); $(document).ready(function(){ $.ajax({url:\'http://chat.duopingtong.cn/ashx/trace_method.ashx?type=trace&json={\"url\":\"'+escape(document.referrer)+'\",\"description\":\"'+escape(front_url)+'\",\"datetime\":\"'+common_method.getDatatime()+'\",\"visit_page\":\"'+escape(document.title)+'\",\"parm\":\"MjI5LDMwMDEx\",\"visit_url\":\"'+document.location.href+'\"}\',dataType:"jsonp",jsonp:"jsonpcallback",success:function(data){}});});</script>');
document.write('<style type="text/css">');  
document.write('.oImg{position:absolute; right:5px; z-index:9999; top:50px;padding:2px 5px 2px 2px;}');
document.write('.oImg img{border:0px}');
document.write('a{ text-decoration:none; }');
document.write('img{border:0px;}');
document.write('.oImg span{display:block; font-size:12px;  color:DimGray; width:28px; height:14px; cursor:pointer; position:absolute; left:130px; top:-10px; }');
document.write('.oWrap{position:absolute;  z-index:9999;}');
document.write('.oWrap p{display:none;}');
document.write('</style>');
//电脑
if (flag == 1) {
    document.write('<div id="PCoWrap" class="oWrap"><p><a title="关闭"  id="PCoClose"  style="position:absolute;  top:0; right:0; width:30px; height:30px;"><span style="position:absolute; border:#fff 15px solid; filter:alpha(opacity=0); -moz-opacity:0;-khtml-opacity:0; opacity:0; text-align:center; cursor:pointer;"></span></a><a  href="javascript:dpt_open()" title=""><img  src="http://files.duopingtong.cn/UpLoadImg//20140507213049004.jpg"></a></p></div>');
    document.write('<div id="oImg" class="oImg"><a href="javascript:;"><span title="关闭">关闭</span></a><a href="javascript:dpt_open()" title="如果您有什么问题,请点击此处进行即时沟通"><img src="http://files.duopingtong.cn/UpLoadImg//20140801123304149.jpg"></a></div>');
}
    //手机
else {
    document.write('<div id="WapoWrap" class="oWrap"><p><a id="WapoClose" style="position:absolute;  top:0; right:0; width:22px; height:22px;"><span style="position:absolute; border:#fff 11px solid; filter:alpha(opacity=0); -moz-opacity:0;-khtml-opacity:0; opacity:0; text-align:center; cursor:pointer;"></span></a><a href="http://chat.duopingtong.cn/index.aspx?parm=MjI5LDMwMDEx"><img id="zixun" src="http://files.duopingtong.cn/UpLoadImg//20140507213049004.jpg" border="0"/></a></p></div>');
    document.write('<div id="oImg" class="oImg"><a href="javascript:;"><span title="关闭">关闭</span></a><a href="http://chat.duopingtong.cn/index.aspx?parm=MjI5LDMwMDEx" title="如果您有什么问题,请点击此处进行即时沟通"><img src="http://files.duopingtong.cn/UpLoadImg//20140801123304149.jpg"></a></div>');
}