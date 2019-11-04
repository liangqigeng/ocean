<?php
    include ('include/config.php');
    $pro_id = $_GET['pro_id'];
    $webname = '产品详情';
    $webname1 = 'PRODUCTS CENTER';
    $cat = $db->select_all('cat_pro','*','1 ORDER BY cat_ord ASC');
    $data = $db->select_one('product','*',"pro_id = $pro_id");
?>
<?php include('header.php');?>
<style type="text/css">
    .rr{
        font-size: 13px;
        padding-bottom: 10px;
    }
</style>
<script>
$(function(){
	lovelygalleryInit({
		id:"#pdv_27214 .con"
		, S: '1'
		, width:1920, height:403
		, showbottomshadow: '0' != '0'
		, arrowstyle: '0' == 0 ? "none" : "mouseover"
	});
	var i = html5zooId-1;
	$(".html5zoo-arrow-left-"+i+", .html5zoo-arrow-right-"+i).css("opacity", 0.5).hover(function(){
		$(this).css("opacity", 0.8)
	}, function(){$(this).css("opacity", 0.5)});
	$(".html5zoo-slider-"+i).css("overflow", "hidden");


	if(getCookie("PLUSADMIN")=="SET"){return false}
	if(document.referrer && document.referrer.match(/\/\/(.*?)\//) && RegExp.$1 == window.location.host) {
		setTimeout(function(){
			var e = $(".html5zoo-slides").closest(".pdv_class");
			$(window).scrollTop(e.offset().top + e.outerHeight());
		}, 0);
	}
})
</script>

<div id='content' style='width:1200px;height:871px;background:none 0% 0% repeat scroll transparent;margin:0px auto'>


<!-- 产品分类（列表） -->

<div id='pdv_27221' class='pdv_class'  title='产品分类' style='width:861px;height:50px;top:123px;left:182px; z-index:3'>
<div id='spdv_27221' class='pdv_content' style='overflow:hidden;width:100%;height:100%'>
<div class="pdv_border" style="margin:0;padding:0;height:100%;border:0px  solid;background:;">

<div style="padding:0px">

<style>
#pdv_27221 .wupagelist{
	font-family: "微软雅黑"; position: relative; font-size: 0;
	border-top: 0px solid #ddd; border-bottom: 0px solid #ddd; 
	padding-top:0; padding-bottom:0; text-align: center;}

#pdv_27221 .bg{width: 100%; height: 100%; left: 0; top: 0; position: absolute; background: transparent; }
#pdv_27221 .bg-1{width: 1920px; margin-left: -960px;  left: 50%; }
#pdv_27221 ul{position: relative; overflow: hidden;}
#pdv_27221 li{display: inline-block; *display:inline; *zoom:1; vertical-align: middle;}
#pdv_27221 li a{
	display: block; text-decoration:  none; text-align: center; border: 1px solid #000;
	background-color: #e9e9e9; background-image:url(); color: #0f0f0f; border-radius:0;
	border-width:0; border-color:transparent; font-size: 14px;
	line-height: 45px; width: 140px; margin-right: 0; margin-bottom: 20px;
 }
#pdv_27221 li.cur a,
#pdv_27221 li a:hover{
    background-color: #ff4242; background-image:url(); color: #2b2b2b; border-color:transparent;
}
</style>
<div class="wupagelist">
<div class="bg bg-0"></div>
<ul>

<?php foreach($cat as $v) {?>
    <li ><a href="product.php?cat_id=<?php echo $v['cat_id'];?>"  target="_self"><?php echo $v['cat_name'];?></a></li>
<?php }?>
</ul>
</div>

</div>
</div>

</div>
</div>

<!-- HTML编辑区 -->

<div id='pdv_27212' class='pdv_class'  title='自定内容' style='width:1200px;height:44px;top:21px;left:0px; z-index:15'>
<div id='spdv_27212' class='pdv_content' style='overflow:visible;width:100%;'>
<div class="pdv_border" style="margin:0;padding:0;height:100%;border:0px  solid;background:;">

<div style="padding:0px">
<div style="text-align:center;">
	<span style="font-family:'Microsoft YaHei';font-size:24px;line-height:1.5;">
	<p align="center" style="margin-top:0px;margin-bottom:0px;padding:0px;line-height:16.8px;color:#5A5A5A;font-family:Arial, 宋体, Helvetica, sans-serif, Verdana;white-space:normal;background-color:#FFFFFF;">
		<span style="margin:0px;padding:0px;line-height:22.4px;font-family:'Microsoft YaHei';color:#000000;font-size:16px;"><strong><span style="margin:0px;padding:0px;line-height:22.4px;color:#E06666;"><strong><span style="margin:0px;padding:0px;line-height:22.4px;">-&nbsp;</span></strong></span>产品中心&nbsp;<span style="margin:0px;padding:0px;line-height:22.4px;color:#E06666;">-</span></strong></span><span style="margin:0px;padding:0px;line-height:22.4px;font-family:'Microsoft YaHei';color:#000000;font-size:16px;"><strong><span style="margin:0px;padding:0px;line-height:19.6px;color:#CC0000;text-transform:uppercase;font-size:14px;"><br />
</span></strong></span>
	</p>
	<p align="center" style="margin-top:0px;margin-bottom:0px;padding:0px;line-height:16.8px;color:#5A5A5A;font-family:Arial, 宋体, Helvetica, sans-serif, Verdana;white-space:normal;background-color:#FFFFFF;">
		<span style="margin:0px;padding:0px;line-height:22.4px;font-family:'Microsoft YaHei';color:#000000;font-size:16px;"><strong><span style="margin:0px;padding:0px;line-height:19.6px;color:#CC0000;text-transform:uppercase;font-size:14px;"><?php echo $webname1;?></span></strong></span>
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

<!-- 产品详情 -->

<div id='pdv_27225' class='pdv_class'  title='产品详情' style='width:1200px;height:451px;top:211px;left:0px; z-index:16'>
<div id='spdv_27225' class='pdv_content' style='overflow:visible;width:100%;'>
<div class="pdv_border" style="margin:0;padding:0;height:100%;border:0px  solid;background:;">

<div style="padding:0px">

<link href="product/templates/css/productcontent.css"  rel="stylesheet" type="text/css" />
<script type=text/javascript src="product/js/productcontent.js" ></script>

<div id="productcontent">
	<div class="productpics">
		<div class="piczone">
			<table align="center" cellpadding="0" cellspacing="0">
			<tr>
			<td align="center">
			<div id="productview">
				<img src="upload/<?php echo $data['pro_img1'];?>"  border="0" id="productloading" class="productloading">
			</div>
			</td>
			</tr>
			</table>
		</div>
		<div id="contentpages"></div>
	</div>

	<div class="introzone">
		<div id="prodtitle">产品名称：<?php echo $data['pro_name'];?></div>
		<div class="rr">产品尺寸：<?php echo $data['pro_size'];?></div>
		<div class="rr">产品配置:<?php echo $data['pro_fitting'];?></div>
		<div class="rr">产品描述：<?php echo $data['pro_describe'];?></div>
	</div>
	<div class="bodyzone"><?php echo $data['pro_name'];?></div>

	<div class="bzone">
	<input type="hidden" id="productid" value="206"> 
	<div id="banzhu" class="banzhu"></div>
	</div>

</div>


</div>
</div>

</div>
</div>
</div>
<!--底部-->
<?php include('bottom.php');?>

</body>
</html>
