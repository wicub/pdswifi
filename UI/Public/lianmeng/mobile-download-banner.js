!function(){function o(o,i){for(var n in i)o[n]=i[n];return o}var i="zepto-wepp@~1.1.4",n="openapp@~0.1.1",t="cookie@~0.1.2",e="mobile-download-banner@0.1.10/js/localstorage.js",a="mobile-download-banner@0.1.10/index.js",p={},d=p;define(a,[i,n,t,e],function(o,i,n){var t=o("zepto-wepp"),e=o("openapp"),a=o("cookie"),p=o("./js/localStorage"),d="banner140825",r="hideapp",l=-1!=location.hostname.indexOf("51ping")?".51ping.com":".dianping.com",s=[],c="Hide",m=function(o,i){return Math.floor(Math.random()*(i-o))+o},h={init:function(o){p()&&(this.options=o||{},this.options.key&&(s.push(d),d=this.options.key),"enableHippo"in this.options||!window._hip||(this.options.enableHippo=!0),-1!=location.href.indexOf("hideapp=1")&&(document.cookie="hideapp=1;expires=-1;path=/;domain:"+l),this.showBanner())},initHTML:function(){var o=this.downloadBar=t(".footer-fix");o.length>0&&o.remove();var i='<div class="footer_banner Hide"><div class="footer-fix-inner"><i class="banner_close J_close_banner">x</i><div class="footer-open" id="footer_download"><i class="dp-icon"></i><p class="J_open_app wrap"></p><a class="imm-open J_open_app"></a></div></div></div>';t("body").append(i),this.downloadBar=t(".footer_banner")},showBanner:function(){s.length&&this.removeKey(s),this.isShow()&&1!=localStorage.getItem(d)&&1!=a(r)&&(this.initHTML(this.options),this.configBanner(),t(".J_close_banner").on("click",function(){h.downloadBar.addClass(c),localStorage.setItem(d,1),h.options.enableHippo&&_hip.push(["mv",{module:"index_footer_close",action:"click"}])}),t(".J_open_app").each(function(o,i){var n=t(i),a=h.options.appSchema||n.attr("data-schema")||"dianping://home?utm_=w_mhome_float",p=window.navigator.userAgent,d=p.match(/(ipad).*os\s([\d_]+)/i),r={downloadUrl:h.options.downloadUrl||"http://m.api.dianping.com/downloadlink?redirect=3259",androidDownloadUrl:h.options.androidDownloadUrl||""};d?(a="dianpinghd://homepage?utm_=w_mhome_float",r.iosDownloadUrl=h.options.iosDownloadUrl||"https://itunes.apple.com/cn/app/da-zhong-dian-pinghd-mei-shi/id486691005?mt=8​"):r.iosDownloadUrl=h.options.iosDownloadUrl||"http://itunes.apple.com/cn/app/da-zhong-dian-ping-mei-shi/id351091731?mt=8";var l=function(o){"ios"===o?(h.options.enableHippo&&_hip.push(d?["mv",{module:"m_bottom_downloadipad",action:"click"}]:["mv",{module:"m_bottom_downloadi",action:"click"}]),location.href=r.iosDownloadUrl||r.downloadUrl):"android"===o&&(h.options.enableHippo&&_hip.push(["mv",{module:"m_bottom_downloada",action:"click"}]),location.href=r.androidDownloadUrl||r.downloadUrl)};r.onFail=l,(-1!=location.href.indexOf("m.dianping.com/tuan")||-1!=location.href.indexOf("m.51ping.com/tuan"))&&(r.androidDownloadUrl="http://m.dianping.com/transpage/storeInfo.action?targetKey=android&sourceName=DianPing_msitetoapptest1.apk"),n.on("click",function(){e(a,r)})}))},removeKey:function(o){"string"==typeof o?localStorage.removeItem(o):o instanceof Array&&o.forEach(function(o){localStorage.removeItem(o)})},isShow:function(){var o=location.href,i=-1==o.indexOf("hideapp=1")&&-1==o.indexOf("utm_source=qqbrowsersearch")&&-1==o.indexOf("utm_source=qqmobilebrowser")&&-1==o.indexOf("utm_source=uc_tubiao")&&-1==o.indexOf("source=dpinweixin")&&-1==o.indexOf("source=dpapp");return i},configBanner:function(){var o=this.options.customBanner;if(o){if(o.icon){var i='url("'+o.icon+'") no-repeat 0 0';this.downloadBar.find(".dp-icon").css({background:i,"background-size":"28px 28px"})}this.setDom(o)}else t.when(h.fetchData()).done(function(o){h.chooseRule(o)}).fail(function(){})},fetchData:function(){var o={basic:[{id:"all-time-3",text:"1分钱看电影,APP专享!",button:"立即去抢",url:"http://i2.dpfile.com/download/DianPing_msitetoapp1.apk"}],"time-based":[{id:"time-01",text:"吃早餐,附近哪最靠谱?",startTime:5,endTime:10,url:"http://i2.dpfile.com/download/DianPing_msitetoapp01.apk",button:"立即查看"},{id:"time-02",text:"寻找午餐最佳去处!",startTime:10,endTime:14,url:"http://i2.dpfile.com/download/DianPing_msitetoapp02.apk",button:"立即查看"},{id:"time-03",text:"休息时间,去哪下午茶?",startTime:14,endTime:17,url:"http://i2.dpfile.com/download/DianPing_msitetoapp03.apk",button:"立即查看"},{id:"time-04",text:"吃晚饭了,出门搓一顿!",startTime:17,endTime:21,url:"http://i2.dpfile.com/download/DianPing_msitetoapp04.apk",button:"立即查看"},{id:"time-05",text:"夜深了,去哪吃夜宵?",startTime:21,endTime:29,url:"http://i2.dpfile.com/download/DianPing_msitetoapp05.apk",button:"立即查看"}]},i=t.Deferred();return i.resolve(o),i.promise()},chooseRule:function(o){if(o){var i=Object.keys(o),n=m(0,i.length),t=i[n],e=o[t];if("basic"===t){var a=m(0,e.length);h.setDom(e[a])}else if("time-based"===t){var p=(new Date).getHours();e.forEach(function(o){var i=p>=o.startTime&&p<o.endTime||p+24>=o.startTime&&p+24<o.endTime;i&&h.setDom(o)})}}},setDom:function(o){if(o){var i=t(".footer-open .wrap"),n=t(".footer-open a");if("string"==typeof o.text?i.text(o.text):(t(".footer_banner").addClass("double_line"),i.append('<p class="line1">'+o.text[0]+"</p><p>"+o.text[1]+"</p>")),n.html(o.button),this.downloadBar.removeClass(c),this.options.androidDownloadUrl=o.url,this.options.enableHippo){var e=o.id||o.text;this.setHippo(e)}}},setHippo:function(o){t("#footer_download").on("click",function(){_hip.push(["mv",{module:"m_bottom_float"+o,action:"click"}])}),this.downloadBar.hasClass(c)||_hip.push(["mv",{module:"m_bottom_float"+o,action:"browse"}])}};n.exports=h},{main:!0,map:o({"./js/localStorage":e},d)}),define(e,[],function(o,i,n){var t=function(){var o=!1,i="local_test";try{o=!!window.localStorage&&null!=window.localStorage,localStorage.setItem(i,1),localStorage.removeItem(i)}catch(n){return!1}return o};n.exports=t},{map:d})}();