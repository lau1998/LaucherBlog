<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:92:"F:\xampp\htdocs\tp5\thinkphp_5.0.10\public/../application/admin\view\system\system_base.html";i:1534571928;s:87:"F:\xampp\htdocs\tp5\thinkphp_5.0.10\public/../application/admin\view\templet\_meta.html";i:1534870695;s:89:"F:\xampp\htdocs\tp5\thinkphp_5.0.10\public/../application/admin\view\templet\_footer.html";i:1535286274;}*/ ?>
﻿<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<link rel="Bookmark" href="/favicon.ico" >
<link rel="Shortcut Icon" href="/favicon.ico" />
<!--[if lt IE 9]>
<script type="text/javascript" src="__STATIC__/admin/lib/html5shiv.js"></script>
<script type="text/javascript" src="__STATIC__/admin/lib/respond.min.js"></script>
<![endif]-->

<link rel="stylesheet" type="text/css" href="__STATIC__/admin/static/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="__STATIC__/admin/static/h-ui.admin/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="__STATIC__/admin/lib/Hui-iconfont/1.0.8/iconfont.css" />
<link rel="stylesheet" type="text/css" href="__STATIC__/admin/static/h-ui.admin/skin/default/skin.css" />
<link rel="stylesheet" type="text/css" href="__STATIC__/admin/static/h-ui.admin/css/style.css" />
<!--[if IE 6]>
<script type="text/javascript" src="__STATIC__/admin/lib/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title>基本设置</title>
</head>
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页
	<span class="c-gray en">&gt;</span>
	系统管理
	<span class="c-gray en">&gt;</span>
	基本设置
	<a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a>
</nav>
<div class="page-container">
	<form class="form form-horizontal" id="form-article-add">
		<div id="tab-system" class="HuiTab">
			<div class="tabBar cl">
				<span>基本设置</span>
				<span>安全设置</span>
				<span>邮件设置</span>
				<span>关闭站点</span>
			</div>
			<div class="tabCon">

				<div class="row cl">
					<label class="form-label col-xs-4 col-sm-2">
						<span class="c-red">*</span>
						网站名称：</label>
					<div class="formControls col-xs-8 col-sm-9">
						<input type="text" id="website-title" placeholder="控制在25个字、50个字节以内" value="<?php echo $web['site_name']; ?>" class="input-text" name="site_name">
					</div>
				</div>
				<div class="row cl">
					<label class="form-label col-xs-4 col-sm-2">
						<span class="c-red">*</span>
						关键词：</label>
					<div class="formControls col-xs-8 col-sm-9">
						<input type="text" id="website-Keywords" placeholder="5个左右,8汉字以内,用英文,隔开" value="<?php echo $web['site_seo_keywords']; ?>" class="input-text" name="site_seo_keywords">
					</div>
				</div>
				<div class="row cl">
					<label class="form-label col-xs-4 col-sm-2">
						<span class="c-red">*</span>
						描述：</label>
					<div class="formControls col-xs-8 col-sm-9">
						<input type="text" id="website-description" placeholder="空制在80个汉字，160个字符以内" value="<?php echo $web['site_seo_description']; ?>" class="input-text" name="site_seo_description">
					</div>
				</div>
				<div class="row cl">
					<label class="form-label col-xs-4 col-sm-2">
						<span class="c-red">*</span>
						站长邮箱：</label>
					<div class="formControls col-xs-8 col-sm-9">
						<input type="email" id="website-title" placeholder="admin@czhlove.cn" value="<?php echo $web['site_email']; ?>" class="input-text" name="site_email">
					</div>
				</div>
				<div class="row cl">
					<label class="form-label col-xs-4 col-sm-2">
						<span class="c-red">*</span>
						底部版权信息：</label>
					<div class="formControls col-xs-8 col-sm-9">
						<input type="text" id="website-copyright" placeholder="&copy; 2016 H-ui.net" value="<?php echo $web['site_copyright']; ?>" class="input-text" name="site_copyright">
					</div>
				</div>
				<div class="row cl">
					<label class="form-label col-xs-4 col-sm-2">备案号：</label>
					<div class="formControls col-xs-8 col-sm-9">
						<input type="text" id="website-icp" placeholder="京ICP备00000000号" value="<?php echo $web['site_icp']; ?>" class="input-text" name="site_icp">
					</div>
				</div>
				<div class="row cl">
					<label class="form-label col-xs-4 col-sm-2">统计代码：</label>
					<div class="formControls col-xs-8 col-sm-9">
						<textarea class="textarea" name="site_analytics"><?php echo $web['site_analytics']; ?></textarea>
					</div>
				</div>

			</div>
			<div class="tabCon">
				<div class="row cl">
					<label class="form-label col-xs-4 col-sm-2">允许访问后台的IP列表：</label>
					<div class="formControls col-xs-8 col-sm-9">
						<textarea class="textarea" name="" id=""></textarea>
					</div>
				</div>
				<div class="row cl">
					<label class="form-label col-xs-4 col-sm-2">后台登录失败最大次数：</label>
					<div class="formControls col-xs-8 col-sm-9">
						<input type="text" class="input-text" value="5" id="" name="" >
					</div>
				</div>
			</div>
			<div class="tabCon">
				<div class="row cl">
					<label class="form-label col-xs-4 col-sm-2">发件人：</label>
					<div class="formControls col-xs-8 col-sm-9">
						<input type="text"  class="input-text" value="<?php echo $web['from_name']; ?>" id="" name="from_name">
					</div>
				</div>
				<div class="row cl">
					<label class="form-label col-xs-4 col-sm-2">邮件发送模式：</label>
					<div class="formControls col-xs-8 col-sm-9"> 
					<span class="select-box">
						<select class="select" size="1" name="smtp_secure">
							<option value="ssl" <?php if($web['smtp_secure'] == 'ssl'): ?> selected <?php endif; ?>>ssl（默认）</option>
							<option value="tls" <?php if($web['smtp_secure'] == 'tls'): ?> selected <?php endif; ?>>tls</option>
						</select>
					</span> 
				</div>
				</div>
				<div class="row cl">
					<label class="form-label col-xs-4 col-sm-2">SMTP服务器：</label>
					<div class="formControls col-xs-8 col-sm-9">
						<input type="text" id="" value="<?php echo $web['host']; ?>" class="input-text" name="host">
					</div>
				</div>
				<div class="row cl">
					<label class="form-label col-xs-4 col-sm-2">SMTP 端口：</label>
					<div class="formControls col-xs-8 col-sm-9">
						<input type="text" class="input-text" value="<?php echo $web['port']; ?>" id="" name="port" >
					</div>
				</div>
				<div class="row cl">
					<label class="form-label col-xs-4 col-sm-2">邮箱帐号：</label>
					<div class="formControls col-xs-8 col-sm-9">
						<input type="text" class="input-text" value="<?php echo $web['username']; ?>" id="emailName" name="username" >
					</div>
				</div>
				<div class="row cl">
					<label class="form-label col-xs-4 col-sm-2">邮箱密码：</label>
					<div class="formControls col-xs-8 col-sm-9">
						<input type="text" id="email-password" value="<?php echo $web['password']; ?>" class="input-text" name="password">
					</div>
				</div>
				<div class="row cl">
					<label class="form-label col-xs-4 col-sm-2">收件邮箱地址：</label>
					<div class="formControls col-xs-8 col-sm-9">
						<input type="text" id="email-address" value="<?php echo $web['from']; ?>" class="input-text emailurl" name="from" placeholder="测试发送的邮箱地址">
					</div>
				</div>
				<div class="row cl">
					<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-2">
						<button  onClick="email_send()" class="btn btn-success radius su" type="button" ><i class="Hui-iconfont">&#xe603;</i> &nbsp;&nbsp;发送测试邮箱&nbsp;&nbsp;</button>
					</div>
				</div>
			</div>
			<div class="tabCon">
				<div class="row cl">
					<label class="form-label col-xs-4 col-sm-2">本站：</label>
					<div class="formControls col-xs-8 col-sm-9"> 
					<span class="select-box">
						<select class="select" size="1" name="site_closure">
							<option value="0" <?php if($web['site_closure'] == '0'): ?> selected <?php endif; ?>>已开启（默认）</option>
							<option value="1" <?php if($web['site_closure'] == '1'): ?> selected <?php endif; ?>>已关闭（只关闭前台，后台无影响）</option>
						</select>
					</span> 
				</div>
				</div>
				<?php if($web['site_closure'] == '0'): ?>
				<input class="input-text" id="dateinfo" type="hidden" readonly name="stop_time" >
				<?php endif; if($web['site_closure'] == '1'): ?>
				<div class="row cl">
					<label class="form-label col-xs-4 col-sm-2">开站时间：</label>
					<div class="formControls col-xs-8 col-sm-9"> 
						<input class="input-text" id="dateinfo" type="text" placeholder="请选择"  readonly name="stop_time" value="<?php echo $web['stop_time']; ?>">	
					</div>
				</div>
				<?php endif; ?>
			</div>
		<div class="row cl">
			<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-2">
				<button  onClick="article_save_submit()" class="btn btn-primary radius disabled" type="button" id="submit"><i class="Hui-iconfont">&#xe632;</i> 保存</button>
				<button onClick="layer_close();" class="btn btn-default radius" type="button">&nbsp;&nbsp;取消&nbsp;&nbsp;</button>
			</div>
		</div>
	</form>
</div>

<script type="text/javascript" src="__STATIC__/admin/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="__STATIC__/admin/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="__STATIC__/admin/static/h-ui/js/H-ui.min.js"></script>
<script type="text/javascript" src="__STATIC__/admin/static/h-ui.admin/js/H-ui.admin.js"></script>

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="__STATIC__/admin/lib/My97DatePicker/4.8/WdatePicker.js"></script>
<script type="text/javascript" src="__STATIC__/admin/lib/jquery.validation/1.14.0/jquery.validate.js"></script>
<script type="text/javascript" src="__STATIC__/admin/lib/jquery.validation/1.14.0/validate-methods.js"></script>
<script type="text/javascript" src="__STATIC__/admin/lib/jquery.validation/1.14.0/messages_zh.js"></script>
<script type="text/javascript" src="__STATIC__/jeDate/jedate.js"></script>
<script type="text/javascript">
$(function(){
	//防止用户无更新提交
	$("form").children().change(function(){
		$("#submit").removeClass('disabled');
	});
	$('.skin-minimal input').iCheck({
		checkboxClass: 'icheckbox-blue',
		radioClass: 'iradio-blue',
		increaseArea: '20%'
	});
	$("#tab-system").Huitab({
		index:0
	});
});
function article_save_submit(){
	layer.confirm('确定要保存吗？',function(){
		$.ajax({
			type:"GET",
			dataType: 'json',
			data:$("#form-article-add").serializeArray(),
			url:"system_base_exe",
			success: function(data){
				if (data=="success"){
					layer.msg('信息已保存！',{icon: 6,time:1000});
				} else {
					layer.msg('保存失败!',{icon: 6,time:1000});
				}
			},
		});		
	});
}
function email_send(){
	//加载层
	var index = layer.load(0, {shade: false}); //0代表加载的风格，支持0-2
	$.ajax({
		type:"GET",
		dataType: 'json',
		data:{link:$(".emailurl").val()},
		url:"email",
		success: function(data){
			if (data=="1"){
				layer.msg('测试邮箱发送成功！',{icon: 6,time:2000});
				layer.close(index);
			} else {
				layer.msg('测试邮箱发送失败，请检测信息是否填错!',{icon: 2,time:2000});
				layer.close(index);
			}
		},
	});	
}
</script>
<script type="text/javascript">
    //jeDate.skin('gray');
    jeDate({
		dateCell:"#dateinfo",
		format:"YYYY/MM/DD hh:mm:ss",
		isinitVal:true,
		isTime:true, //isClear:false,
		minDate:"2014-09-19 00:00:00",
		okfun:function(val){
			layer.msg(val);
		}

	})

</script>
<!--/请在上方写此页面业务相关的脚本-->
</body>
</html>
