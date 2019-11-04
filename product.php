<?php
    include ('include/config.php');
    include ('include/Page.class.php');
    $webname = '产品中心';
    $webname1 = 'PRODUCTS CENTER';
    $cat = $db->select_all('cat_pro','*','1 ORDER BY cat_ord ASC');
     //做新闻列表和分类+分页功能
    if (!empty($_GET['page'])) {
        $current = $_GET['page'];
    } else {
        $current = 1;
    }
    $limit = 4;
    $size = 3;
    $con = ($current-1)*$limit;
    if (!empty($_GET['cat_id'])) {
        //如果有分类参数
        $cat_id = $_GET['cat_id'];
        //查有分类情况下的数据
        $count = $db->select_count('product',"cat_id = $cat_id");
        //查有分类情况下的数据
        $product = $db->select_all('product','*',"cat_id = $cat_id ORDER BY pro_ord ASC LIMIT $con, $limit");
    } else {
        //所有数据，没有分类的情况
        //查没有 分类情况下的数据总数情况下的数据
        $count = $db->select_count('product');
        //查没有分类
        $product = $db->select_all('product','*',"1 ORDER BY pro_ord ASC LIMIT $con, $limit");
    }

        $page = new Page($current, $count, $limit, $size,'black2');
        $show = $page->page();
?>

<?php include('header.php');?>
<link rel="stylesheet" href="include/page/css.css" />
<script>
$(function(){
	$("#pdv_27100 dt a span").each(function(){
		var p = $(this).parent().position();
		$(this).css(p);
	});
	$("#pdv_27100 .n"+parseInt('4')).addClass("cur");
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

<div id='content' style='width:1200px;height:762px;background:none 0% 0% repeat scroll transparent;margin:0px auto'>


<!-- 产品分类（列表） -->

<div id='pdv_26395' class='pdv_class'  title='产品分类' style='width:861px;height:50px;top:123px;left:182px; z-index:3'>
<div id='spdv_26395' class='pdv_content' style='overflow:hidden;width:100%;height:100%'>
<div class="pdv_border" style="margin:0;padding:0;height:100%;border:0px  solid;background:;">
<div style="padding:0px">

<style>
#pdv_26395 .wupagelist{
	font-family: "微软雅黑"; position: relative; font-size: 0;
	border-top: 0px solid #ddd; border-bottom: 0px solid #ddd; 
	padding-top:0; padding-bottom:0; text-align: center;}

#pdv_26395 .bg{width: 100%; height: 100%; left: 0; top: 0; position: absolute; background: transparent; }
#pdv_26395 .bg-1{width: 1920px; margin-left: -960px;  left: 50%; }
#pdv_26395 ul{position: relative; overflow: hidden;}
#pdv_26395 li{display: inline-block; *display:inline; *zoom:1; vertical-align: middle;}
#pdv_26395 li a{
	display: block; text-decoration:  none; text-align: center; border: 1px solid #000;
	background-color: #e9e9e9; background-image:url(); color: #0f0f0f; border-radius:0;
	border-width:0; border-color:transparent; font-size: 14px;
	line-height: 45px; width: 140px; margin-right: 0; margin-bottom: 20px;
 }
#pdv_26395 li.cur a,
#pdv_26395 li a:hover{
    background-color: #7eb923; background-image:url(); color: #2b2b2b; border-color:transparent;
}
</style>
<div class="wupagelist">
<div class="bg bg-0"></div>
<ul>
<?php foreach($cat as $v) {?>
    <li class=""><a href="product.php?cat_id=<?php echo $v['cat_id'];?>"  target="_self"><?php echo $v['cat_name'];?></a></li>
<?php }?>
</ul>
</div>

</div>
</div>

</div>
</div>

<!-- HTML编辑区 -->

<div id='pdv_27028' class='pdv_class'  title='自定内容' style='width:1200px;height:44px;top:21px;left:0px; z-index:5'>
<div id='spdv_27028' class='pdv_content' style='overflow:visible;width:100%;'>
<div class="pdv_border" style="margin:0;padding:0;height:100%;border:0px  solid;background:;">
<div style="padding:0px">
<div style="text-align:center;">
	<span style="font-family:'Microsoft YaHei';font-size:24px;line-height:1.5;"> 
	<p align="center" style="margin-top:0px;margin-bottom:0px;padding:0px;line-height:16.8px;color:#5A5A5A;font-family:Arial, 宋体, Helvetica, sans-serif, Verdana;white-space:normal;background-color:#FFFFFF;">
		<span style="margin:0px;padding:0px;line-height:22.4px;font-family:'Microsoft YaHei';color:#000000;font-size:16px;"><strong><span style="margin:0px;padding:0px;line-height:22.4px;color:#7eb923;"><strong><span style="margin:0px;padding:0px;line-height:22.4px;">-&nbsp;</span></strong></span>产品中心&nbsp;<span style="margin:0px;padding:0px;line-height:22.4px;color:#7eb923;">-</span></strong></span><span style="margin:0px;padding:0px;line-height:22.4px;font-family:'Microsoft YaHei';color:#000000;font-size:16px;"><strong><span style="margin:0px;padding:0px;line-height:19.6px;color:#CC0000;text-transform:uppercase;font-size:14px;"><br />
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

<!-- 产品检索搜索 -->

<div id='pdv_27033' class='pdv_class'  title='产品检索' style='width:1161px;height:550px;top:210px;left:39px; z-index:8'>
<div id='spdv_27033' class='pdv_content' style='overflow:visible;width:100%;'>
<div class="pdv_border" style="margin:0;padding:0;height:100%;border:0px #dddddd solid;background:#fff;">
<div style="padding:5px">

<link href="product/templates/css/productquery_6.css"  rel="stylesheet" type="text/css" />

<?php foreach($product as $v) {?>
    <div class="productquery_6">
		<div class="fang" style="width:210px;height:200px">
		<div class="picFit" style="width:210px;height:200px">
		<a href="proinfo.php?pro_id=<?php echo $v['pro_id'];?>"  target="_self" ><img src="upload/<?php echo $v['pro_img1'];?>"  style="width:210px;height:200px" border="0" /></a>
		</div>
		</div>
		<a href="proinfo.php?pro_id=<?php echo $v['pro_id'];?>"  target="_self" class="prodtitle"   ><?php echo $v['pro_name'];?></a>
		<span class="prop">

		</span>
    </div>
<?php }?>

<script>
$(function() {
$().picFit("auto");
});
</script>

<div id="showpages"><?php echo $show;?>
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
