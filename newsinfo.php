<?php
    include ('include/config.php');
    $new_id = $_GET['new_id'];
    $webname = '新闻详情';
    $webname1 = 'NEWS';
    $cat = $db->select_all('cat_new','*','1 ORDER BY cat_ord ASC');
    $data = $db->select_one('new','*',"new_id = $new_id");
?>
<?php include('header.php');?>
<script>
$(function(){
	$("##pdv_27100 dt a span").each(function(){
		var p = $(this).parent().position();
		$(this).css(p);
	});
	$("##pdv_27100 .n"+parseInt('3')).addClass("cur");
	$("##pdv_27100 dd").css("opacity", '0.9');
	if('0' != 1) return;
	$("##pdv_27100 dd").each(function(){
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
	$("##pdv_27100 li").hover(function(){
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

<div id='content' style='width:1200px;height:725px;background:none 0% 0% repeat scroll transparent;margin:0px auto'>


<!-- 文章一级分类 -->

<div id='pdv_27161' class='pdv_class'  title='文章分类' style='width:314px;height:65px;top:128px;left:437px; z-index:2'>
<div id='spdv_27161' class='pdv_content' style='overflow:visible;width:100%;'>
<div class="pdv_border" style="margin:0;padding:0;height:100%;border:0px  solid;background:;">
<div style="padding:0px">

<style>
#pdv_27161 .wupagelist{
	font-family: "微软雅黑"; position: relative; font-size: 0;
	border-top: 0px solid #ddd; border-bottom: 0px solid #ddd;
	padding-top:0; padding-bottom:0; text-align: center;}

#pdv_27161 .bg{width: 100%; height: 100%; left: 0; top: 0; position: absolute; background: transparent; }
#pdv_27161 .bg-1{width: 1920px; margin-left: -960px;  left: 50%; }
#pdv_27161 ul{position: relative; overflow: hidden;}
#pdv_27161 li{display: inline-block; *display:inline; *zoom:1; vertical-align: middle;}
#pdv_27161 li a{
	display: block; text-decoration:  none; text-align: center; border: 1px solid #000;
	background-color: #e9e9e9; background-image:url(); color: #000000; border-radius:0;
	border-width:0; border-color:transparent; font-size: 14px;
	line-height: 45px; width: 140px; margin-right: 0; margin-bottom: 20px;
 }

#pdv_27161 li.cur a,
#pdv_27161 li a:hover{
    background-color: #7eb923; background-image:url(); color: #212121; border-color:transparent;
}
</style>
<div class="wupagelist">
<div class="bg bg-0"></div>
<ul>
<?php foreach($cat as $v) {?>
    <li ><a href="news.php?cat_id=<?php echo $v['cat_id'];?>"  target="_self"><?php echo $v['cat_name'];?></a></li>
<?php }?>

</ul>
</div>

</div>
</div>

</div>
</div>

<!-- HTML编辑区 -->

<div id='pdv_27162' class='pdv_class'  title='自定内容' style='width:1200px;height:44px;top:30px;left:0px; z-index:5'>
<div id='spdv_27162' class='pdv_content' style='overflow:visible;width:100%;'>
<div class="pdv_border" style="margin:0;padding:0;height:100%;border:0px  solid;background:;">
<div style="padding:0px">
<div style="text-align:center;">
	<span style="font-family:'Microsoft YaHei';font-size:24px;line-height:1.5;">
	<p align="center" style="margin-top:0px;margin-bottom:0px;padding:0px;line-height:16.8px;color:#5A5A5A;font-family:Arial, 宋体, Helvetica, sans-serif, Verdana;white-space:normal;background-color:#FFFFFF;">
		<span style="margin:0px;padding:0px;line-height:22.4px;font-family:'Microsoft YaHei';color:#000000;font-size:16px;"><strong><span style="margin:0px;padding:0px;line-height:22.4px;color:#7eb923;"><strong><span style="margin:0px;padding:0px;line-height:22.4px;">-&nbsp;</span></strong></span>新闻资讯&nbsp;<span style="margin:0px;padding:0px;line-height:22.4px;color:#7eb923;">-</span></strong></span><span style="margin:0px;padding:0px;line-height:22.4px;font-family:'Microsoft YaHei';color:#000000;font-size:16px;"><strong><span style="margin:0px;padding:0px;line-height:19.6px;color:#CC0000;text-transform:uppercase;font-size:14px;"><br />
</span></strong></span>
	</p>
	<p align="center" style="margin-top:0px;margin-bottom:0px;padding:0px;line-height:16.8px;color:#5A5A5A;font-family:Arial, 宋体, Helvetica, sans-serif, Verdana;white-space:normal;background-color:#FFFFFF;">
		<span style="margin:0px;padding:0px;line-height:22.4px;font-family:'Microsoft YaHei';color:#000000;font-size:16px;"><strong><span style="margin:0px;padding:0px;line-height:19.6px;color:#7eb923;text-transform:uppercase;font-size:14px;">NEWS</span></strong></span>
	</p>
</span>
</div>
<span style="line-height:1;font-size:18px;color:#E53333;">
<div style="text-align:center;">
	<span style="line-height:1;"></span>
</div>
</span>
</div>
</div>

</div>
</div>

<!-- 上下页 -->

<div id='pdv_27169' class='pdv_class'  title='' style='width:650px;height:90px;top:633px;left:0px; z-index:8'>
<div id='spdv_27169' class='pdv_content' style='overflow:visible;width:100%;'>
<div class="pdv_border" style="margin:0;padding:0;height:100%;border:0px  solid;background:;">
	<div style="height:25px;margin:1px;display:none;background:;">
		<div style="float:left;margin-left:12px;line-height:25px;font-weight:bold;color:">

		</div>
		<div style="float:right;margin-right:10px;display:none">
		<a href="javascript:if(confirm(%27http://y.hy755.cn/5397/news/html/-1  \n\nThis file was not retrieved by Teleport Ultra, because the server reports that this file cannot be found.  \n\nDo you want to open it from the server?%27))window.location=%27http://y.hy755.cn/5397/news/html/-1%27"  style="line-height:25px;color:">更多</a>
		</div>
	</div>
<div style="padding:0px">
<style>
#pdv_27169 .wunewsnext{font-family: 微软雅黑; line-height: 25px;
	padding-top:20px; font-size: 14px; color: #333333;
	padding-bottom:20px;
}
#pdv_27169 a{ text-decoration: none; color: #333333;}
#pdv_27169 a:hover{ color: #33a3d6;}
</style>

</div>
</div>

</div>
</div>

<!-- 文章正文 -->

<div id='pdv_27168' class='pdv_class'  title='文章正文' style='width:1200px;height:418px;top:210px;left:0px; z-index:9'>
<div id='spdv_27168' class='pdv_content' style='overflow:visible;width:100%;'>
<div class="pdv_border" style="margin:0;padding:0;height:100%;border:0px  solid;background:;">
	<div style="height:25px;margin:1px;display:none;background:;">
		<div style="float:left;margin-left:12px;line-height:25px;font-weight:bold;color:">
		文章正文
		</div>
		<div style="float:right;margin-right:10px;display:none">
		<a href="javascript:if(confirm(%27http://y.hy755.cn/5397/news/html/-1  \n\nThis file was not retrieved by Teleport Ultra, because the server reports that this file cannot be found.  \n\nDo you want to open it from the server?%27))window.location=%27http://y.hy755.cn/5397/news/html/-1%27"  style="line-height:25px;color:">更多</a>
		</div>
	</div>
<div style="padding:0px">

<link href="news/templates/css/newscontent.css"  rel="stylesheet" type="text/css" />
<script type=text/javascript src="news/js/newscontent.js" ></script>
<div id="newscontent">
    <div class="newstitle"><?php echo $data['new_title'];?></div>
    <div class="info">作者：<?php echo $data['new_author'];?>&nbsp;&nbsp; 发布于：<?php echo date('Y-m-d',$data['new_addtime']);?>&nbsp;&nbsp; 文字：【<a  href="javascript:fontZoom(16)">大</a>】【<a  href="javascript:fontZoom(14)">中</a>】【<a   href="javascript:fontZoom(12)">小</a>】</div>
    <div id="memo" class="memo" style="display:block"><span style="color:#ff6600">摘要：</span><?php echo $data['new_summary'];?></div>
    <div id="con" class="con"><?php echo $data['new_content'];?></div>
</div>
<script>
$(function(){
$().contentPages('456');
});

</script>

</div>
</div>

</div>
</div>
</div>
<!--底部-->
<?php include('bottom.php');?>

</body>
</html>
