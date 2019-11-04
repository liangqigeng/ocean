<?php
    include ('include/config.php');
    $webname = '公司简介';
    $webname1 = 'INTRODUCTION';
    $product = $db->select_all('product','*','1 ORDER BY pro_ord ASC');
    $company = $db->select_one('page','*','page_id = 6');
?>
<?php include('header.php');?>
<script>
$(function(){
	$("#pdv_27100 dt a span").each(function(){
		var p = $(this).parent().position();
		$(this).css(p);
	});
	$("#pdv_27100 .n"+parseInt('2')).addClass("cur");
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

<div id='content' style='width:1200px;height:514px;background:none 0% 0% repeat scroll transparent;margin:0px auto'>


<!-- HTML编辑区 -->

<div id='pdv_26738' class='pdv_class'  title='自定内容' style='width:1200px;height:162px;top:92px;left:0px; z-index:2'>
<div id='spdv_26738' class='pdv_content' style='overflow:visible;width:100%;'>
<div class="pdv_border" style="margin:0;padding:0;height:100%;border:0px  solid;background:;">

<div><?php echo $company['page_content'];?></div>

</div>

</div>
</div>

<!-- HTML编辑区 -->

<div id='pdv_26908' class='pdv_class'  title='自定内容' style='width:1200px;height:44px;top:20px;left:0px; z-index:5'>
<div id='spdv_26908' class='pdv_content' style='overflow:visible;width:100%;'>
<div class="pdv_border" style="margin:0;padding:0;height:100%;border:0px  solid;background:;">

<div style="padding:0px">
<div style="text-align:center;">
	<span style="font-family:'Microsoft YaHei';font-size:24px;line-height:1.5;">
	<p align="center" style="margin-top:0px;margin-bottom:0px;padding:0px;line-height:16.8px;color:#5A5A5A;font-family:Arial, 宋体, Helvetica, sans-serif, Verdana;white-space:normal;background-color:#FFFFFF;">
		<span style="margin:0px;padding:0px;line-height:22.4px;font-family:'Microsoft YaHei';color:#000000;font-size:16px;"><strong><span style="margin:0px;padding:0px;line-height:22.4px;color:#7eb923;"><strong><span style="margin:0px;padding:0px;line-height:22.4px;">-&nbsp;</span></strong></span>公司简介&nbsp;<span style="margin:0px;padding:0px;line-height:22.4px;color:#7eb923;">-</span></strong></span><span style="margin:0px;padding:0px;line-height:22.4px;font-family:'Microsoft YaHei';color:#000000;font-size:16px;"><strong><span style="margin:0px;padding:0px;line-height:19.6px;color:#CC0000;text-transform:uppercase;font-size:14px;"><br />
</span></strong></span>
	</p>
	<p align="center" style="margin-top:0px;margin-bottom:0px;padding:0px;line-height:16.8px;color:#5A5A5A;font-family:Arial, 宋体, Helvetica, sans-serif, Verdana;white-space:normal;background-color:#FFFFFF;">
		<span style="margin:0px;padding:0px;line-height:22.4px;font-family:'Microsoft YaHei';color:#000000;font-size:16px;"><strong><span style="margin:0px;padding:0px;line-height:19.6px;color:#7eb923;text-transform:uppercase;font-size:14px;"><?php echo $webname1;?></span></strong></span>
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

<!-- 自选产品列表 -->

<div id='pdv_27284' class='pdv_class'  title='最新产品' style='width:1200px;height:248px;top:264px;left:0px; z-index:20'>
<div id='spdv_27284' class='pdv_content' style='overflow:hidden;width:100%;height:100%'>
<div class="pdv_border" style="margin:0;padding:0;height:100%;border:0px  solid;background:;">

<div style="padding:0px">

<script>
$(function(){
	var li = $("#pdv_27284 li");
	if( 'right' == 'left' || 'right' == 'right' ) {
		li.parent().height(li.outerHeight(true));
	}
	if("1" == 1)
		$.w.scroll({panelSel: li, "direction": 'right', speed: '0.5', prevSel: '#pdv_27284 .al', nextSel: '#pdv_27284 .ar'});
	else
		$.w.slide({panelSel: li, "direction": 'right', prevSel: '#pdv_27284 .al', nextSel: '#pdv_27284 .ar'});
});
</script>

<link href="../../product/templates/css/wuproductlist.css" tppabs="http://y.hy755.cn/5397/product/templates/css/wuproductlist.css" rel="stylesheet" type="text/css" />
<style>
#pdv_27284 .wuproductlist{background-image: url(); background-position: 0 0; background-repeat: no-repeat;}
#pdv_27284 .al,
#pdv_27284 .ar{position: absolute; display: none; top: 50%; width: 32px; height: 52px; margin-top: -26px; cursor: pointer;
 background: url(../../base/images/sprite.png)/*tpa=http://y.hy755.cn/5397/base/images/sprite.png*/ 0 0; opacity: 0.2; filter: alpha(opacity=20);}
#pdv_27284 .al{left: -37px;}
#pdv_27284 .ar{right: -37px; background-position: right 0;}
#pdv_27284 .wuproductlist-s1 .al,
#pdv_27284 .wuproductlist-s1 .ar{display: block;}
#pdv_27284 ul{ position: relative; }
#pdv_27284 li{margin-right: 15px;margin-bottom: 15px;}
#pdv_27284 li{
	border-width:0;
	border-color:#cccccc;
	padding:10px;
}
#pdv_27284 li:hover{
	border-color:#00bdbb;
}
#pdv_27284 dt a{font-size: 12px; color:#333333;}
#pdv_27284 dt a:hover{color:#333333;}

</style>
<div class="wuproductlist wuproductlist-s0">
<div class="al"></div>
<div class="ar"></div>

<ul>
<?php foreach($product as $v) {?>
    <li>
        <dl>
        <dd style="width:200px;height:200px">
            <div class="picFit" style="width:200px;height:200px">
            <a href="proinfo.php?pro_id=<?php echo $v['pro_id'];?>"  target="_self" ><img src="upload/<?php echo $v['pro_img1'];?>"  style="width:200px;height:200px" border="0" /></a>
            </div>
        </dd>
        <dt style="width:200px;"><a href="proinfo.php?pro_id=<?php echo $v['pro_id'];?>"  target="_self"   ><?php echo $v['pro_name'];?></a></dt>
        </dl>
    </li>
<?php }?>
</ul>
</div>
<script>
$(function() {
$().picFit("auto");
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
