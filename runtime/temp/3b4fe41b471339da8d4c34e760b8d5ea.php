<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:88:"F:\xampp\htdocs\tp5\thinkphp_5.0.10\public/../application/admin\view\user\user_list.html";i:1533401932;s:87:"F:\xampp\htdocs\tp5\thinkphp_5.0.10\public/../application/admin\view\templet\_meta.html";i:1534870695;s:89:"F:\xampp\htdocs\tp5\thinkphp_5.0.10\public/../application/admin\view\templet\_footer.html";i:1535286274;}*/ ?>
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
<title>用户管理</title>
</head>
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 用户中心 <span class="c-gray en">&gt;</span> 用户管理 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="page-container">
	<div class="cl pd-5 bg-1 bk-gray mt-20"> <span class="l"><a href="javascript:;" onclick="datadel()" class="btn btn-danger radius"><i class="Hui-iconfont">&#xe6e2;</i> 批量删除</a> <a href="javascript:;" onclick="member_add('添加用户','user_add.html','','510')" class="btn btn-primary radius"><i class="Hui-iconfont">&#xe600;</i> 添加用户</a></span> <span class="r">共有数据：<strong><?php echo $count; ?></strong> 条</span> </div>
	<div class="mt-20">
	<table class="table table-border table-bordered table-hover table-bg table-sort">
		<thead>
			<tr class="text-c">
				<th width="25"><input type="checkbox" name="" value=""></th>
				<th width="60">登录名</th>
				<th width="100">头像</th>
				<th width="40">性别</th>
				<th width="100">手机</th>
				<th width="100">邮箱</th>
				<th width="100">上次登录时间</th>
				<th width="30">登录数</th>
				<th width="40">状态</th>
				<th width="50">操作</th>
			</tr>
		</thead>
		<tbody>
		<?php if(is_array($u) || $u instanceof \think\Collection || $u instanceof \think\Paginator): $i = 0; $__LIST__ = $u;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$usr): $mod = ($i % 2 );++$i;?>
			<tr class="text-c">
				<td><input type="checkbox" value="1" name=""></td>
				<td><u style="cursor:pointer" class="text-primary" onclick="member_show('<?php echo $usr['user_login']; ?>','member_show.html','10001','360','400')"><?php echo $usr['user_login']; ?></u></td>
				<td>头像</td>
				<td><?php echo $usr['sex']; ?></td>
				<td><?php echo $usr['mobile']; ?></td>
				<td><?php echo $usr['user_email']; ?></td>
				<td><?php echo date("Y-m-d H:i:s" ,$usr['last_login_time']); ?></td>
				<td><?php echo $usr['count']; ?></td>
				<?php if($usr['user_state'] == '1'): ?>
				<td class="td-status"><span class="label label-success radius">已启用</span></td>
				<?php else: ?>
				<td class="td-status"><span class="label label-defaunt radius">已停用</span></td>
				<?php endif; ?>
				<td class="td-manage">
				<?php if($usr['user_state'] == '1'): ?>
				<a style="text-decoration:none" onclick="user_stop(this,'<?php echo $usr['id']; ?>')" href="javascript:;" title="停用"><i class="Hui-iconfont">&#xe631;</i></a> 
				<?php endif; if($usr['user_state'] == '2'): ?>
				<a style="text-decoration:none" onclick="user_start(this,'<?php echo $usr['id']; ?>')" href="javascript:;" title="启用"><i class="Hui-iconfont">&#xe615;</i></a> 
				<?php endif; ?>
				<a title="编辑" href="javascript:;" onclick="member_edit('编辑','user_edit.html?id=<?php echo $usr['id']; ?>','','510')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6df;</i></a> 
				<a style="text-decoration:none" class="ml-5" onClick="change_password('<?php echo $usr['id']; ?>')" href="javascript:;" title="修改密码"><i class="Hui-iconfont">&#xe63f;</i></a> <a title="删除" href="javascript:;" onclick="user_del(this,'<?php echo $usr['id']; ?>')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a></td>
			</tr>
		<?php endforeach; endif; else: echo "" ;endif; ?>
		</tbody>
	</table>
	</div>
</div>

<script type="text/javascript" src="__STATIC__/admin/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="__STATIC__/admin/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="__STATIC__/admin/static/h-ui/js/H-ui.min.js"></script>
<script type="text/javascript" src="__STATIC__/admin/static/h-ui.admin/js/H-ui.admin.js"></script>

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="__STATIC__/admin/lib/My97DatePicker/4.8/WdatePicker.js"></script> 
<script type="text/javascript" src="__STATIC__/admin/lib/datatables/1.10.0/jquery.dataTables.min.js"></script> 
<script type="text/javascript" src="__STATIC__/admin/lib/laypage/1.2/laypage.js"></script>
<script type="text/javascript">
$(function(){
	$('.table-sort').dataTable({
		"aaSorting": [[ 1, "desc" ]],//默认第几个排序
		"bStateSave": true,//状态保存
		"aoColumnDefs": [
		  //{"bVisible": false, "aTargets": [ 3 ]} //控制列的隐藏显示
		  {"orderable":false,"aTargets":[0,8,9]}// 制定列不参与排序
		]
	});
	
});
/*用户-添加*/
function member_add(title,url,w,h){
	layer_show(title,url,w,h);
}
/*用户-查看*/
function member_show(title,url,id,w,h){
	layer_show(title,url,w,h);
}
/*管理员-停用*/
function user_stop(obj,id){
	layer.confirm('确认要停用吗？',function(index){
		//此处请求后台程序，下方是成功后的前台处理……
		$.ajax({
			type: 'POST',
			data: { id: id },
			url: 'user_stop.html',
			dataType: 'json',
			success: function(data){
				$(obj).parents("tr").find(".td-manage").prepend('<a onClick="admin_start(this,<?php echo $usr['id']; ?>)" href="javascript:;" title="启用" style="text-decoration:none"><i class="Hui-iconfont">&#xe615;</i></a>');
				$(obj).parents("tr").find(".td-status").html('<span class="label label-defaunt radius">已停用</span>');
				$(obj).remove();
					layer.msg('已停用!',{icon: 5,time:1000});
			},
		});		
	});
}

/*管理员-启用*/
function user_start(obj,id){
	layer.confirm('确认要启用吗？',function(index){
		//此处请求后台程序，下方是成功后的前台处理……
		$.ajax({
			type: 'POST',
			data: { id: id },
			url: 'user_stop.html',
			dataType: 'json',
			success: function(data){
				$(obj).parents("tr").find(".td-manage").prepend('<a onClick="admin_stop(this,<?php echo $usr['id']; ?>)" href="javascript:;" title="停用" style="text-decoration:none"><i class="Hui-iconfont">&#xe631;</i></a>');
				$(obj).parents("tr").find(".td-status").html('<span class="label label-success radius">已启用</span>');
				$(obj).remove();
					layer.msg('已启用!',{icon: 6,time:1000});
			},
		});	
	});
}
/*用户-编辑*/
function member_edit(title,url,w,h){
	layer_show(title,url,w,h);
}
/*密码-修改*/
function change_password(id){
    layer.prompt({title: '填写需要修改的密码，并确认', formType: 3}, function(text, index){
    	layer.close(index);
   		  $.ajax({
			type: 'POST',
			url: "<?php echo url('user_change_pwd'); ?>",
			data:{'id':id,'pwd':text},
			success: function(data){ 
				if (data=="success") {
					$(data).parents("tr").remove();
					layer.msg('用户密码已修改!',{icon:1,time:1000,
					end:function (){
						location.reload();
					}
				});
				} else {
					layer.msg('修改失败',{icon:2,time:1000,
					end:function (){
						location.reload();
					}
				});
				}
				
			},
			error:function(data) {
				console.log(data.msg);
			},
		});	
   });
}
/*管理员-删除*/
function user_del(obj,id){
	layer.confirm('确认要删除吗？',function(index){
		$.ajax({
			type: 'get',
			data:{id:id},
			url: "<?php echo url('user_del_exe'); ?>",
			dataType: 'json',
			success: function(data){
				if (data=="success") {
					$(obj).parents("tr").remove();
					layer.msg('已删除!',{icon:1,time:1000});
		}},
			error:function(data) {
				console.log(data.msg);
			},
		});		
	});
}
</script> 
</body>
</html>