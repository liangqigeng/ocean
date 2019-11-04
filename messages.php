<?php
    include ('include/config.php');
    $webname = '客户留言';
    $webname1 = 'GUESTBOOK';
    $message = $db->select_one('page','*','page_id = 3');
     if ($_POST) {
         if (strtolower($_SESSION['imgcode']) == strtolower($_POST['verify'])) {
            $data = array(
                'gue_title' => $_POST['gue_title'],
                'gue_name' => $_POST['gue_name'],
                'gue_phone' => $_POST['gue_phone'],
                'gue_email' => $_POST['gue_email'],
                'gue_content' => $_POST['gue_content'],
                'gue_addtime' => time()
            );
           $res = $db->add('guestbook', $data);
            if ($res) {
                show_msg('添加成功', 'messages.php');
            } else {
                show_msg('数据有误，请重试...');
            }
         } else if ($_POST['verify'] == '') {
            show_msg('验证码不能为空');
        } else {
            show_msg('验证码输入错误');
        }
     }
?>
<?php include('header.php');?>
<style type="text/css">
    .input2{
        height:100px;
    }
</style>
<script>
$(function(){
	$("#pdv_27100 dt a span").each(function(){
		var p = $(this).parent().position();
		$(this).css(p);
	});
	$("#pdv_27100 .n"+parseInt('5')).addClass("cur");
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


<div id='content' style='width:1200px;height:567px;background:none 0% 0% repeat scroll transparent;margin:0px auto'>


<!-- 全站留言表单 -->

<div id='pdv_23861' class='pdv_class'  title='给我留言' style='width:584px;height:546px;top:119px;left:431px; z-index:4'>
<div id='spdv_23861' class='pdv_content' style='overflow:hidden;width:100%;height:100%'>
<div class="pdv_border" style="margin:0;padding:0;height:100%;border:0px  solid;background:;">

<div style="padding:10px">

<link href="feedback/templates/css/wufeedback.css"  rel="stylesheet" type="text/css" />
<script language="javascript" src="js/feedback.js" ></script>
<div id="notice" class="noticediv"></div>
<form class="wufeedback" id="feedbacksmallform" method="post" action="" name="gform">

<dl> 
	<dt>反馈主题：</dt>
	<dd> 
        <input type="text" name="gue_title" value="" class="input" />
	</dd>
</dl>

<dl> 
	<dt>联 系 人：</dt>
	<dd> 
        <input type="text" name="gue_name" value="" class="input" />
	</dd>
</dl>

<dl> 
	<dt>联系电话：</dt>
	<dd> 
        <input type="text" name="gue_phone" value="" class="input" />
	</dd>
</dl>

<dl> 
	<dt>电子邮件：</dt>
	<dd> 
        <input type="text" name="gue_email" value="" class="input" />
	</dd>
</dl>
<dl>
	<dt>留言内容：</dt>
	<dd>
        <textarea name="gue_content" id="" cols="80"  class="input input2"></textarea>
	</dd>
</dl>

    <dl>
      <dd>验 证 码：<input type="text" name="verify" style="width:55px; padding: 1px;" autocomplete="off" class="input" />
		<img  src="include/imgcode.php"  onclick="this.src='include/imgcode.php';"  style="width:60px;height:22px;border:1px #dddddd solid;vertical-align: middle;" title="点击更换验证码">
      </dd>
  </dl>
<dl>
<dd>
        <input type="submit" name="Submit" value="提交" class="submit">
        <input type='hidden' name='act' value='formsend'>
        <input name='groupid' type='hidden' id="groupid" value='1'>
</dd>
</dl>
</form>


</div>
</div>

</div>
</div>

<!-- HTML编辑区 -->

<div id='pdv_23863' class='pdv_class'  title='自定内容' style='width:410px;height:179px;top:226px;left:19px; z-index:5'>
<div id='spdv_23863' class='pdv_content' style='overflow:visible;width:100%;'>
<div class="pdv_border" style="margin:0;padding:0;height:100%;border:0px  solid;">

	<div><?php echo $message['page_content'];?></div>

</div>

</div>
</div>

<!-- HTML编辑区 -->

<div id='pdv_27071' class='pdv_class'  title='自定内容' style='width:1200px;height:44px;top:30px;left:0px; z-index:8'>
<div id='spdv_27071' class='pdv_content' style='overflow:visible;width:100%;'>
<div class="pdv_border" style="margin:0;padding:0;height:100%;border:0px  solid;background:;">
	<div style="height:25px;margin:1px;display:none;background:;">
		<div style="float:left;margin-left:12px;line-height:25px;font-weight:bold;color:">
		自定内容
		</div>
		<div style="float:right;margin-right:10px;display:none"></div>
	</div>
<div style="padding:0px">
<div style="text-align:center;">
	<span style="font-family:'Microsoft YaHei';font-size:24px;line-height:1.5;"> 
	<p align="center" style="margin-top:0px;margin-bottom:0px;padding:0px;line-height:16.8px;color:#5A5A5A;font-family:Arial, 宋体, Helvetica, sans-serif, Verdana;white-space:normal;background-color:#FFFFFF;">
		<span style="margin:0px;padding:0px;line-height:22.4px;font-family:'Microsoft YaHei';color:#000000;font-size:16px;"><strong><span style="margin:0px;padding:0px;line-height:22.4px;color:#7eb923;"><strong><span style="margin:0px;padding:0px;line-height:22.4px;">-&nbsp;</span></strong></span>客户留言&nbsp;<span style="margin:0px;padding:0px;line-height:22.4px;color:#7eb923;">-</span></strong></span><span style="margin:0px;padding:0px;line-height:22.4px;font-family:'Microsoft YaHei';color:#000000;font-size:16px;"><strong><span style="margin:0px;padding:0px;line-height:19.6px;color:#CC0000;text-transform:uppercase;font-size:14px;"><br />
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
</div>
<!--底部-->
<?php include('bottom.php');?>

</body>
</html>
