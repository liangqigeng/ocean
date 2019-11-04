<?php
    include ('include/config.php');
    $webname = '首页';
    $new1 = $db->select_all('new','*',"1 ORDER BY new_ord ASC LIMIT 0, 2");
    $new2 = $db->select_all('new','*',"1 ORDER BY new_ord ASC LIMIT 3, 2");
    $about = $db->select_one('page','*','page_id = 5');
    $weixin = $db->select_one('banner','*','banner_id = 1');
    $about2 = $db->select_one('banner','*','banner_id = 8');
    $img1 = $db->select_one('banner','*','banner_id = 9');
    $img2 = $db->select_one('banner','*','banner_id = 10');
    $img3 = $db->select_one('banner','*','banner_id = 11');
    $adv = $db->select_one('page','*','page_id = 1');
    $adv2 = $db->select_one('page','*','page_id = 7');
?>

<?php include('header.php');?>
<link rel="stylesheet" href="css/index.css">
<script>
$(function(){
	$("#pdv_27100 dt a span").each(function(){
		var p = $(this).parent().position();
		$(this).css(p);
	});
	$("#pdv_27100 .n"+parseInt('1')).addClass("cur");
	$("#pdv_27100 dd").css("opacity", '0.9');
	if('0' != 1) return;
	$("#pdv_27100 dd").each(function(){
		if(this.innerHTML == '') $(this).remove();
	});

	if(getCookie("PLUSADMIN")=="SET"){return false}

	var plus = {};
	var tm;
	var cur;
	for(var i in plus) {
		plus[i] = $("#pdv_"+plus[i]).size() ? $("#pdv_"+plus[i]) : $(".pdv_class[title="+plus[i]+"]");
		plus[i].hide().hover(function(){
			clearTimeout(tm);
			cur = this;
		}, hide);
		plus[i].children().removeClass("pdv_top");
	}
	function hide(){
		tm = setTimeout(function(){
			$(cur).hide();
		}, 500);
	}
	$("#pdv_27100 li").hover(function(){
		clearTimeout(tm);
		$(cur).hide();
		var i = $(this).index()+1;
		if(plus[i]) {
			cur = plus[i].show();
			return;
		}
		$("dd", this).show();
	}, function(){
		hide();
		$("dd", this).hide();
	});
})
</script>
<div id='content' style='width:1200px;height:1114px;background:none 0% 0% repeat scroll transparent;margin:0px auto'>


<!-- 全屏背景 -->

<div id='pdv_27372' class='pdv_class'  title='全屏背景' style='width:1200px;height:495px;top:617px;left:0px; z-index:1'>
<div id='spdv_27372' class='pdv_content' style='overflow:visible;width:100%;'>
<div class="pdv_border" style="margin:0;padding:0;height:100%;border:0px  solid;background:;">
<div style="padding:0px">
<div class="wuDiyBG" style="position: relative; min-height: 10px; height: 495px;">
	<div class="bg" style="position: absolute; left:50%; margin-left: -960px;
 width: 1920px; height: 100%;background-image:url(diy/pics/20170712/1499837781.png)/*tpa=http://y.hy755.cn/5397/diy/pics/20170712/1499837781.png*/; background-color:transparent;background-position:left top; background-repeat: no-repeat;"></div>
</div>
</div>
</div>

</div>
</div>

<!-- 全屏背景 -->

<div id='pdv_27370' class='pdv_class'  title='全屏背景' style='width:1200px;height:362px;top:218px;left:0px; z-index:2'>
<div id='spdv_27370' class='pdv_content' style='overflow:visible;width:100%;'>
<div class="pdv_border" style="margin:0;padding:0;height:100%;border:0px  solid;background:;">
<div style="padding:0px">
<div class="wuDiyBG" style="position: relative; min-height: 10px; height: 362px;">
	<div class="bg" style="position: absolute; left:50%; margin-left: -960px;
 width: 1920px; height: 100%;background-image:url(diy/pics/20170712/1499837550.jpg)/*tpa=http://y.hy755.cn/5397/diy/pics/20170712/1499837550.jpg*/; background-color:transparent;background-position:left top; background-repeat: no-repeat;"></div>
</div>
</div>
</div>

</div>
</div>

<!-- 图片/FLASH -->

<div id='pdv_27105' class='pdv_class'  title='图片' style='width:407px;height:168px;top:26px;left:759px; z-index:6'>
<div id='spdv_27105' class='pdv_content' style='overflow:visible;width:100%;'>
<div class="pdv_border" style="margin:0;padding:0;height:100%;border:0px  solid;background:;">
<div style="padding:0px">

<style>
#pdv_27105 .wupic img{display: block;}
#pdv_27105 .wupic .hoverimg{display: none;}
#pdv_27105 .wupic:hover .hoverimg{display: block; position: absolute; top: 0; left: 0; z-index: 5;}
</style>
<script>
$(function(){
	if(!1) return;
	animate("#spdv_27105", {direction: '左', opacity: '1', distance: '950'
		, rotation: '不旋转', scale: '不变化', delay: '0', duration: '600', easing: 'swing'});
})
</script>
<div class="wupic">


<img src="upload/<?php echo $img3['banner_path'];?>"  border="0" width="100%" />

</div>

</div>
</div>

</div>
</div>

<!-- 图片/FLASH -->

<div id='pdv_27103' class='pdv_class'  title='图片' style='width:407px;height:168px;top:26px;left:23px; z-index:7'>
<div id='spdv_27103' class='pdv_content' style='overflow:visible;width:100%;'>
<div class="pdv_border" style="margin:0;padding:0;height:100%;border:0px  solid;background:;">

<div style="padding:0px">

<style>
#pdv_27103 .wupic img{display: block;}
#pdv_27103 .wupic .hoverimg{display: none;}
#pdv_27103 .wupic:hover .hoverimg{display: block; position: absolute; top: 0; left: 0; z-index: 5;}
</style>
<script>
$(function(){
	if(!1) return;
	animate("#spdv_27103", {direction: '左', opacity: '1', distance: '650'
		, rotation: '不旋转', scale: '不变化', delay: '0', duration: '600', easing: 'swing'});
})
</script>
<div class="wupic">


<img src="upload/<?php echo $img1['banner_path'];?>"  border="0" width="100%" />

</div>

</div>
</div>

</div>
</div>

<!-- 图片/FLASH -->

<div id='pdv_27104' class='pdv_class'  title='图片' style='width:407px;height:168px;top:26px;left:391px; z-index:8'>
<div id='spdv_27104' class='pdv_content' style='overflow:visible;width:100%;'>
<div class="pdv_border" style="margin:0;padding:0;height:100%;border:0px  solid;background:;">
<div style="padding:0px">

<style>
#pdv_27104 .wupic img{display: block;}
#pdv_27104 .wupic .hoverimg{display: none;}
#pdv_27104 .wupic:hover .hoverimg{display: block; position: absolute; top: 0; left: 0; z-index: 5;}
</style>
<script>
$(function(){
	if(!1) return;
	animate("#spdv_27104", {direction: '右', opacity: '1', distance: '850'
		, rotation: '不旋转', scale: '不变化', delay: '0', duration: '600', easing: 'swing'});
})
</script>
<div class="wupic">


<img src="upload/<?php echo $img2['banner_path'];?>"  border="0" width="100%" />

</div>

</div>
</div>

</div>
</div>

<!-- HTML编辑区 -->

<div id='pdv_26705' class='pdv_class'  title='自定内容' style='width:186px;height:82px;top:62px;left:222px; z-index:13'>
<div id='spdv_26705' class='pdv_content' style='overflow:hidden;width:100%;height:100%'>
<div class="pdv_border" style="margin:0;padding:0;height:100%;border:0px  solid;background:;">
<div style="padding:0px">
<style>
#pdv_26705 .wuedit{overflow: hidden; position:relative; height: 82px;}
#pdv_26705 .bg{position: absolute; height: 100%; width: 100%; left: 0; top: 0; background: transparent;}
#pdv_26705 .con{position: relative; padding: 10px 10px;}
</style>
<script>
$(function(){
	$("#pdv_26705 .bg").css("opacity", '1');
	
	if(!1) return;
	animate("#spdv_26705", {direction: '右', opacity: '1', distance: '800'
		, rotation: '不旋转', scale: '不变化', delay: '0', duration: '600', easing: 'swing'});
});
</script>
<div class="wuedit">
	<div class="bg"></div>
	<div class="con"><p>
	<span style="font-family:'Microsoft YaHei';font-size:24px;color:#648f9e;"><strong><?php echo $img1['banner_title'];?>&nbsp;</strong></span>
</p>
<p>
	<span style="font-family:'Microsoft YaHei';font-size:14px;color:#648f9e;"><?php echo $img1['banner_url'];?></span>
</p></div>
</div>
</div>
</div>

</div>
</div>

<!-- HTML编辑区 -->

<div id='pdv_27107' class='pdv_class'  title='自定内容' style='width:128px;height:72px;top:62px;left:992px; z-index:14'>
<div id='spdv_27107' class='pdv_content' style='overflow:hidden;width:100%;height:100%'>
<div class="pdv_border" style="margin:0;padding:0;height:100%;border:0px  solid;background:;">
<div style="padding:0px">
<style>
#pdv_27107 .wuedit{overflow: hidden; position:relative; height: 72px;}
#pdv_27107 .bg{position: absolute; height: 100%; width: 100%; left: 0; top: 0; background: transparent;}
#pdv_27107 .con{position: relative; padding: 10px 10px;}
</style>
<script>
$(function(){
	$("#pdv_27107 .bg").css("opacity", '1');
	
	if(!1) return;
	animate("#spdv_27107", {direction: '左', opacity: '1', distance: '900'
		, rotation: '不旋转', scale: '不变化', delay: '0', duration: '600', easing: 'swing'});
});
</script>
<div class="wuedit">
	<div class="bg"></div>
	<div class="con"><p>
	<span style="font-family:'Microsoft YaHei';font-size:24px;color:#7e6b5b;"><strong><?php echo $img3['banner_title'];?>&nbsp;</strong></span>
</p>
<p>
	<span style="font-family:'Microsoft YaHei';font-size:14px;color:#7e6b5b;"><?php echo $img3['banner_url'];?></span>
</p></div>
</div>
</div>
</div>

</div>
</div>

<!-- HTML编辑区 -->

<div id='pdv_27106' class='pdv_class'  title='自定内容' style='width:188px;height:86px;top:62px;left:565px; z-index:15'>
<div id='spdv_27106' class='pdv_content' style='overflow:hidden;width:100%;height:100%'>
<div class="pdv_border" style="margin:0;padding:0;height:100%;border:0px  solid;background:;">

<div style="padding:0px">
<style>
#pdv_27106 .wuedit{overflow: hidden; position:relative; height: 86px;}
#pdv_27106 .bg{position: absolute; height: 100%; width: 100%; left: 0; top: 0; background: transparent;}
#pdv_27106 .con{position: relative; padding: 10px 10px;}
</style>
<script>
$(function(){
	$("#pdv_27106 .bg").css("opacity", '1');
	
	if(!1) return;
	animate("#spdv_27106", {direction: '下', opacity: '1', distance: '700'
		, rotation: '不旋转', scale: '不变化', delay: '0', duration: '600', easing: 'swing'});
});
</script>
<div class="wuedit">
	<div class="bg"></div>
	<div class="con"><p>
	<span style="font-family:'Microsoft YaHei';font-size:24px;color:#d38989;"><strong><?php echo $img2['banner_title'];?></strong></span>
</p>
<p>
	<span style="font-family:'Microsoft YaHei';font-size:14px;color:#d38989;"><?php echo $img2['banner_url'];?></span>
</p></div>
</div>
</div>
</div>

</div>
</div>

<!-- 图片/FLASH -->

<div id='pdv_27108' class='pdv_class'  title='图片' style='width:471px;height:264px;top:254px;left:23px; z-index:16'>
<div id='spdv_27108' class='pdv_content' style='overflow:visible;width:100%;'>
<div class="pdv_border" style="margin:0;padding:0;height:100%;border:0px  solid;background:;">
<div style="padding:0px">

<style>
#pdv_27108 .wupic img{display: block;}
#pdv_27108 .wupic .hoverimg{display: none;}
#pdv_27108 .wupic:hover .hoverimg{display: block; position: absolute; top: 0; left: 0; z-index: 5;}
</style>
<script>
$(function(){
	if(!1) return;
	animate("#spdv_27108", {direction: '左', opacity: '1', distance: '900'
		, rotation: '不旋转', scale: '小变大', delay: '0', duration: '600', easing: 'swing'});
})
</script>
<div class="wupic">


<img src="upload/<?php echo $about2['banner_path'];?>"  border="0" width="100%" />

</div>

</div>
</div>

</div>
</div>

<!-- HTML编辑区 -->

<div id='pdv_27109' class='pdv_class'  title='自定内容' style='width:801px;height:197px;top:338px;left:398px; z-index:17'>
<div id='spdv_27109' class='pdv_content' style='overflow:hidden;width:100%;height:100%'>
<div class="pdv_border" style="margin:0;padding:0;height:100%;border:0px  solid;background:;">
<div style="padding:0px">
<style>
#pdv_27109 .wuedit{overflow: hidden; position:relative; height: 197px;}
#pdv_27109 .bg{position: absolute; height: 100%; width: 100%; left: 0; top: 0; background: transparent;}
#pdv_27109 .con{position: relative; padding: 10px 10px;}
</style>
<script>
$(function(){
	$("#pdv_27109 .bg").css("opacity", '1');
	
	if(!1) return;
	animate("#spdv_27109", {direction: '右', opacity: '1', distance: '800'
		, rotation: '不旋转', scale: '不变化', delay: '0', duration: '600', easing: 'swing'});
});
</script>
<div class="hh">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $about['page_content'];?></div>

</div>
</div>

</div>
</div>

<!-- 文章列表 -->

<div id='pdv_27118' class='pdv_class'  title='最新文章' style='width:580px;height:317px;top:720px;left:0px; z-index:19'>
<div id='spdv_27118' class='pdv_content' style='overflow:hidden;width:100%;height:100%'>
<div class="pdv_border" style="margin:0;padding:0;height:100%;border:0px  solid;background:;">
<div style="padding:0px">

<link href="news/templates/css/wunewslist2.css"  rel="stylesheet" type="text/css" />


<div class="wunewslist2">
<div class="bg"></div>
<ul>
<?php foreach($new1 as $v) {?>
    <li>
    <div class="lc"><img src="upload/<?php echo $v['new_photo'];?>"  width="140" height="130" /></div>
    <div class="con">
    <div class="title" ><a href="newsinfo.php?new_id=<?php echo $v['new_id'];?>"  target="_self"   ><?php echo $v['new_title'];?></a></div>
    <div class="time"><?php echo date('Y-m-d',$v['new_addtime']);?></div>
    <div class="memo"><?php echo $v['new_summary'];?></div>
    </div>
    </li>
<?php }?>

</ul>
</div>
</div>
</div>

</div>
</div>

<!-- 文章列表 -->

<div id='pdv_27119' class='pdv_class'  title='最新文章' style='width:580px;height:318px;top:720px;left:620px; z-index:20'>
<div id='spdv_27119' class='pdv_content' style='overflow:hidden;width:100%;height:100%'>
<div class="pdv_border" style="margin:0;padding:0;height:100%;border:0px  solid;background:;">
<div style="padding:0px">

<link href="news/templates/css/wunewslist2.css"  rel="stylesheet" type="text/css" />

<div class="wunewslist2">
<div class="bg"></div>
<ul>

<?php foreach($new2 as $v) {?>
    <li>
    <div class="lc"><img src="upload/<?php echo $v['new_photo'];?>"  width="140" height="130" /></div>
    <div class="con">
    <div class="title" ><a href="newsinfo.php?new_id=<?php echo $v['new_id'];?>"  target="_self"   ><?php echo $v['new_title'];?></a></div>
    <div class="time"><?php echo date('Y-m-d',$v['new_addtime']);?></div>
    <div class="memo"><?php echo $v['new_summary'];?></div>
    </div>
    </li>
<?php }?>

</ul>
</div>
<script>
$(function(){
	if('0' != 1) return;
	animate("#spdv_27119", {direction: '', opacity: 'http://y.hy755.cn/5397/0.35', distance: ''
		, rotation: '', scale: '', delay: '', duration: '', easing: ''});
})
</script>
</div>
</div>

</div>
</div>

<!-- HTML编辑区 -->

<div id='pdv_27373' class='pdv_class'  title='自定内容' style='width:218px;height:46px;top:652px;left:0px; z-index:30'>
<div id='spdv_27373' class='pdv_content' style='overflow:visible;width:100%;'>
<div class="pdv_border" style="margin:0;padding:0;height:100%;border:0px  solid;background:;">
<div style="padding:0px">
<p>
	<span style="font-family:'Arial Black';font-size:32px;line-height:1;color:#000000;">NEWS</span>
</p>
<p>
	<span style="color:#000000;"><span style="font-size:14px;line-height:1;color:#000000;">新闻中心</span></span> 
</p>
</div>
</div>

</div>
</div>

<!-- HTML编辑区 -->

<div id='pdv_27371' class='pdv_class'  title='自定内容' style='width:218px;height:46px;top:271px;left:730px; z-index:31'>
<div id='spdv_27371' class='pdv_content' style='overflow:visible;width:100%;'>
<div class="pdv_border" style="margin:0;padding:0;height:100%;border:0px  solid;background:;">

<div style="padding:0px">
<p>
	<span style="font-family:'Arial Black';font-size:32px;line-height:1;color:#FFFFFF;"><?php echo $about2['banner_title'];?></span>
</p>
<p>
	<span><span style="font-size:14px;line-height:1;color:#FFFFFF;"><?php echo $about['page_name'];?></span></span>
</p>
</div>
</div>

</div>
</div>
</div>
<!--底部-->
<?php include('bottom.php');?>

<div id='bodyex'>
<style>
        @font-face {
	font-family: 'icomoon';
    src:    url('diy/templates/images/icomoon.eot-qradjf')/*tpa=http://y.hy755.cn/5397/diy/templates/images/icomoon.eot?qradjf*/;
    src:    url('diy/templates/images/icomoon.eot-qradjf#iefix')/*tpa=http://y.hy755.cn/5397/diy/templates/images/icomoon.eot?qradjf#iefix*/ format('embedded-opentype'),
        url('diy/templates/images/icomoon.ttf-qradjf')/*tpa=http://y.hy755.cn/5397/diy/templates/images/icomoon.ttf?qradjf*/ format('truetype'),
        url('diy/templates/images/icomoon.woff-qradjf')/*tpa=http://y.hy755.cn/5397/diy/templates/images/icomoon.woff?qradjf*/ format('woff'),
        url('diy/templates/images/icomoon.svg-qradjf#icomoon')/*tpa=http://y.hy755.cn/5397/diy/templates/images/icomoon.svg?qradjf#icomoon*/ format('svg');
    font-weight: normal;
    font-style: normal;
}
</style>

<!-- 回到顶部 -->

<div id='pdv_21520' class='pdv_class'  title='' style='width:0px;height:0px;top:0px;left:0px; z-index:32'>
<div id='spdv_21520' class='pdv_bodyex' style='overflow:visible;width:100%;'>
<div class="pdv_border" style="margin:0;padding:0;height:100%;border:0px  solid;background:;">

<div style="padding:0px">


<div class="cndns-right">
    <div class="cndns-right-meau meau-sev">
        <a href="javascript:" class="cndns-right-btn">
            <span class="demo-icon">&#xe901;</span>
            <p>在线<br />客服</p>
        </a>
        <div class="cndns-right-box">
            <div class="box-border">
                <div class="sev-t clearfloat">
                    <span class="demo-icon">&#xe901;</span>
                    <p><?php echo $adv['page_name'];?><i><?php echo $adv['page_content'];?></i></p>
                </div>
                <div class="sev-b">
                    <h4>选择下列客服马上在线沟通：</h4>
                    <ul id="zixunUl" class="clearfloat">
						<li><a target="_blank" href="" ></a></li>
                    </ul>
                </div>
                <span class="arrow-right"></span>
            </div>
        </div>
    </div>
    <div class="cndns-right-meau meau-contact">
        <a href="javascript:" class="cndns-right-btn">
            <span class="demo-icon">&#xe902;</span>
            <p>客服<br />热线</p>
        </a>
        <div class="cndns-right-box">
            <div class="box-border">
                <div class="sev-t clearfloat">
                    <span class="demo-icon">&#xe902;</span>
                    <p><?php echo $adv2['page_content'];?><br /><i><?php echo $adv2['page_name'];?></i></p>
                </div>
                <span class="arrow-right"></span>
            </div>
        </div>
    </div>
    <div class="cndns-right-meau meau-code">
        <a href="javascript:" class="cndns-right-btn">
            <span class="demo-icon">&#xe903;</span>
            <p>关注<br />微信</p>
        </a>
        <div class="cndns-right-box">
            <div class="box-border">
                <div class="sev-t">
                    <img src="upload/<?php echo  $weixin['banner_path'];?>"  />
                    <i><?php echo $weixin['banner_title'];?></i>
                </div>
                <span class="arrow-right"></span>
            </div>
        </div>
    </div>
    <div class="cndns-right-meau meau-top" id="top-back">
        <a href="javascript:" class="cndns-right-btn" onclick="topBack()">
            <span class="demo-icon">&#xe904;</span>
            <i>顶部</i>
        </a>
    </div>

</div>

</div>
</div>

</div>
</div>
</div>

</body>
</html>
