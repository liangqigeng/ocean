<?php
    include ('include/config.php');
    $webname = '联系我们';
    $webname1 = 'CONTACT US';
    $banner = $db->select_one('banner','*','banner_id = 7');
    $contact = $db->select_one('page','*','page_id = 2')
?>
<?php include('header.php');?>
<script>
$(function(){
	$("#pdv_27100 dt a span").each(function(){
		var p = $(this).parent().position();
		$(this).css(p);
	});
	$("#pdv_27100 .n"+parseInt('6')).addClass("cur");
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

<div id='content' style='width:1200px;height:396px;background:none 0% 0% repeat scroll transparent;margin:0px auto'>


<!-- HTML编辑区 -->

<div id='pdv_27090' class='pdv_class'  title='自定内容' style='width:1200px;height:44px;top:30px;left:0px; z-index:4'>
<div id='spdv_27090' class='pdv_content' style='overflow:visible;width:100%;'>
<div class="pdv_border" style="margin:0;padding:0;height:100%;border:0px  solid;">
	<div style="height:25px;margin:1px;display:none;background:;">
		<div style="float:left;margin-left:12px;line-height:25px;font-weight:bold;color:">
		自定内容
		</div>
		<div style="float:right;margin-right:10px;display:none">
		</div>
	</div>
<div style="padding:0px">
<div style="text-align:center;">
	<span style="font-family:'Microsoft YaHei';font-size:24px;line-height:1.5;">
	<p align="center" style="margin-top:0px;margin-bottom:0px;padding:0px;line-height:16.8px;color:#5A5A5A;font-family:Arial, 宋体, Helvetica, sans-serif, Verdana;white-space:normal;background-color:#FFFFFF;">
		<span style="margin:0px;padding:0px;line-height:22.4px;font-family:'Microsoft YaHei';color:#000000;font-size:16px;"><strong><span style="margin:0px;padding:0px;line-height:22.4px;color:#7eb923;"><strong><span style="margin:0px;padding:0px;line-height:22.4px;">-&nbsp;</span></strong></span>联系我们&nbsp;<span style="margin:0px;padding:0px;line-height:22.4px;color:#7eb923;">-</span></strong></span><span style="margin:0px;padding:0px;line-height:22.4px;font-family:'Microsoft YaHei';color:#000000;font-size:16px;"><strong><span style="margin:0px;padding:0px;line-height:19.6px;color:#CC0000;text-transform:uppercase;font-size:14px;"><br />
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

<!-- 图片/FLASH -->

<div id='pdv_26835' class='pdv_class'  title='图片' style='width:757px;height:269px;top:125px;left:0px; z-index:6'>
<div id='spdv_26835' class='pdv_content' style='overflow:visible;width:100%;'>
<div class="pdv_border" style="margin:0;padding:0;height:100%;border:0px  solid;background:;">
	<div style="height:25px;margin:1px;display:none;background:;">
		<div style="float:left;margin-left:12px;line-height:25px;font-weight:bold;color:">
		图片
		</div>
		<div style="float:right;margin-right:10px;display:none">
		</div>
	</div>
<div style="padding:0px">


<img src="upload/<?php echo $banner['banner_path'];?>"  border="0" width="100%" />


</div>
</div>

</div>
</div>

<!-- HTML编辑区 -->

<div id='pdv_27098' class='pdv_class'  title='自定内容' style='width:350px;height:204px;top:156px;left:788px; z-index:8'>
<div id='spdv_27098' class='pdv_content' style='overflow:hidden;width:100%;height:100%'>
<div class="pdv_border" style="margin:0;padding:0;height:100%;border:0px #dddddd solid;background:rgb(238, 238, 238);padding-top: 20px;">
	<div style="height:25px;margin:1px;display:none;background:#cccccc;">
		<div style="float:left;margin-left:12px;line-height:25px;font-weight:bold;color:#fff">
		自定内容
		</div>
		<div style="float:right;margin-right:10px;display:none">
		</div>
	</div>
	<div><?php echo $contact['page_content'];?></div>

</div>
</div>

</div>
</div>
</div>
<!--底部-->
<?php include('bottom.php');?>


</body>
</html>
