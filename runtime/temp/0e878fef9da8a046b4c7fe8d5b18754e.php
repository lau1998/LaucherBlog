<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:94:"F:\xampp\htdocs\tp5\thinkphp_5.0.10\public/../application/admin\view\article\article_list.html";i:1535353391;s:87:"F:\xampp\htdocs\tp5\thinkphp_5.0.10\public/../application/admin\view\templet\_meta.html";i:1534870695;s:89:"F:\xampp\htdocs\tp5\thinkphp_5.0.10\public/../application/admin\view\templet\_footer.html";i:1535286274;}*/ ?>
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
<title>文章管理</title>
</head>
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 用户中心 <span class="c-gray en">&gt;</span> 用户管理 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="page-container">
	<div class="cl pd-5 bg-1 bk-gray mt-20"> <span class="l"><a href="javascript:;" onclick="datadel()" class="btn btn-danger radius"><i class="Hui-iconfont">&#xe6e2;</i> 批量删除</a> <a href="javascript:;" onclick="article_add('添加文章','article_add.html','','510')" class="btn btn-primary radius"><i class="Hui-iconfont">&#xe600;</i> 添加文章</a></span> <span class="r">共有数据：<strong><?php echo $count; ?></strong> 条</span> </div>
	<div class="mt-20">
	<table class="table table-border table-bordered table-hover table-bg table-sort">
		<thead>
			<tr class="text-c">
				<th width="3%"><input type="checkbox" name="" value=""></th>
				<th width="5%">ID</th>
				<th >标题</th>
				<th width="10%">所属分类</th>
				<th width="8%">作者</th>
				<th width="5%">评论数</th>
				<th width="5%">点赞数</th>
				<th width="8%">关键字/来源<br>摘要/缩略图</th>
				<th width="12%">更新时间</th>
				<th width="12%">发布时间</th>
				<th width="20%">操作</th>
			</tr>
		</thead>
		<tbody>
		<?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$usr): $mod = ($i % 2 );++$i;?>
			<tr class="text-c">
				<td><input type="checkbox" value="1" name=""></td>
				<td><?php echo $usr['id']; ?></td>
				<td><u style="cursor:pointer" class="text-primary" onclick="article_show('<?php echo $usr['id']; ?>','article_show.html','10001','360','400')"><?php echo $usr['post_title']; ?></u></td>
				<td><?php if(is_array($usr['fenlei']) || $usr['fenlei'] instanceof \think\Collection || $usr['fenlei'] instanceof \think\Paginator): $i = 0; $__LIST__ = $usr['fenlei'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$fl): $mod = ($i % 2 );++$i;?><?php echo $fl; ?>,<?php endforeach; endif; else: echo "" ;endif; ?></td>
				<td><?php echo $usr['user_nickname']; ?></td>
				<td><?php echo $usr['comment_count']; ?></td>
				<td><?php echo $usr['post_like']; ?></td>
				<td><strong>
				<?php if($usr['post_keywords'] != ''): ?>
					<i class="Hui-iconfont">&#xe6a7;</i>&nbsp;
				<?php else: ?>
					<i class="Hui-iconfont">&#xe6a6;</i>&nbsp;
				<?php endif; if($usr['post_source'] != ''): ?>
					<i class="Hui-iconfont">&#xe6a7;</i>&nbsp;
				<?php else: ?>
					<i class="Hui-iconfont">&#xe6a6;</i>&nbsp;
				<?php endif; if($usr['post_excerpt'] != ''): ?>
					<i class="Hui-iconfont">&#xe6a7;</i>&nbsp;
				<?php else: ?>
					<i class="Hui-iconfont">&#xe6a6;</i>&nbsp;
				<?php endif; if($usr['thumbnail'] != ''): ?>
					<i class="Hui-iconfont">&#xe613;</i>&nbsp;
				<?php else: ?>
					<i class="Hui-iconfont">&#xe6a6;</i>&nbsp;
				<?php endif; ?>
					</strong>
				</td>
				<td><?php echo date("Y-m-d H:i:s" ,$usr['up_time']); ?></td>
				<td><?php echo date("Y-m-d H:i:s" ,$usr['published_time']); ?></td>
				<td class="td-status" >
				<?php if($usr['post_status'] == '1'): ?>
				<liu class="a-dfb">
				<a href="javascript:;" onclick="article_fb(this,<?php echo $usr['id']; ?>,<?php echo $usr['post_status']; ?>)" class="btn btn-success radius size-MINI">已发布</a>
				</liu>
				<?php else: ?>
				<liu class="a-fb">
				<a href="javascript:;" onclick="article_dfb(this,<?php echo $usr['id']; ?>,<?php echo $usr['post_status']; ?>)" class="btn btn-default radius size-MINI">未发布</a>
				</liu>
				<?php endif; if($usr['is_top'] == '1'): ?>
				<liu class="a-dzd">
				<a href="javascript:;" onclick="article_zd(this,<?php echo $usr['id']; ?>,<?php echo $usr['is_top']; ?>)" class="btn btn-success radius size-MINI">已置顶</a>
				</liu>
				<?php else: ?>
				<liu class="a-zd">
				<a href="javascript:;" onclick="article_dzd(this,<?php echo $usr['id']; ?>,<?php echo $usr['is_top']; ?>)" class="btn btn-default radius size-MINI">未置顶</a>
				</liu>
				<?php endif; if($usr['recommended'] == '1'): ?>
				<liu class="a-dtc">
				<a href="javascript:;" onclick="article_tc(this,<?php echo $usr['id']; ?>,<?php echo $usr['recommended']; ?>)" class="btn btn-success radius size-MINI">已推存</a>
				</liu>
				<?php else: ?>
				<liu class="a-tc">
				<a href="javascript:;" onclick="article_dtc(this,<?php echo $usr['id']; ?>,<?php echo $usr['recommended']; ?>)" class="btn btn-default radius size-MINI">未推存</a>
				</liu>
				<?php endif; ?>
				<a href="javascript:;" onclick="article_edit('编辑文章','article_edit.html?id=<?php echo $usr['id']; ?>','','510')" class="btn btn-primary radius size-MINI">编辑</a>
				<a href="javascript:;" onclick="article_del(this,'<?php echo $usr['id']; ?>')"  class="btn btn-danger radius size-MINI">回收站</a>
				</td>
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
/*文章-添加*/
function article_add(title,url){
	//弹出即全屏
	var index = layer.open({
	  type: 2,
	  title: title,
	  content: url,
	  maxmin: true,
	  end:function(index){
    	javascript:location.replace(location.href);
  	}
	});
	layer.full(index);
}
/*文章-查看*/
function article_show(title,url,id,w,h){
	layer_show(title,url,w,h);
}
/*文章-发布*/
function article_dfb(obj,id,values){
	layer.confirm('确认要发布吗？',function(index){
		$.ajax({
			type: 'POST',
			data: { id: id ,values:values},
			url: 'article_fb.html',
			dataType: 'json',
			success: function(data){
				if (data=='success') {
					$(obj).parents("tr").find(".a-fb").prepend('<a href="javascript:;" onclick="article_fb(this,<?php echo $usr['id']; ?>,<?php echo $usr['post_status']; ?>)" class="btn btn-success radius size-MINI">已发布</a>');
					$(obj).remove();
					layer.msg('已发布!',{icon: 1,time:1000});
				} else {
					layer.msg('发布失败!',{icon: 5,time:1000});
				}	
			},
		});		
	});

}
/*文章-停用*/
function article_fb(obj,id,values){
	layer.confirm('确认要停用吗？',function(index){
		$.ajax({
			type: 'POST',
			data: { id: id ,values:values},
			url: 'article_fb.html',
			dataType: 'json',
			success: function(data){
				if (data=='success') {
					$(obj).parents("tr").find(".a-dfb").prepend('<a href="javascript:;" onclick="article_dfb(this,<?php echo $usr['id']; ?>,<?php echo $usr['post_status']; ?>)" class="btn btn-default radius size-MINI">未发布</a>');
					$(obj).remove();
					layer.msg('已停用!',{icon: 1,time:1000});
				} else {
					layer.msg('停用失败!',{icon: 5,time:1000});
				}
			},
		});		
	});
}
/*文章-置顶*/
function article_dzd(obj,id,values){
	layer.confirm('确认要置顶吗？',function(index){
		$.ajax({
			type: 'POST',
			data: { id: id ,values:values},
			url: 'article_zd.html',
			dataType: 'json',
			success: function(data){
				if (data=='success') {
					$(obj).parents("tr").find(".a-zd").prepend('<a href="javascript:;" onclick="article_zd(this,<?php echo $usr['id']; ?>,<?php echo $usr['is_top']; ?>)" class="btn btn-success radius size-MINI">已置顶</a>');
					$(obj).remove();
					layer.msg('已置顶!',{icon: 1,time:1000});
				} else {
					layer.msg('置顶失败!',{icon: 5,time:1000});
				}	
			},
		});		
	});

}
/*文章-取消置顶*/
function article_zd(obj,id,values){
	layer.confirm('确认要取消置顶吗？',function(index){
		$.ajax({
			type: 'POST',
			data: { id: id ,values:values},
			url: 'article_zd.html',
			dataType: 'json',
			success: function(data){
				if (data=='success') {
					$(obj).parents("tr").find(".a-dzd").prepend('<a href="javascript:;" onclick="article_dzd(this,<?php echo $usr['id']; ?>,<?php echo $usr['is_top']; ?>)" class="btn btn-default radius size-MINI">未置顶</a>');
					$(obj).remove();
					layer.msg('已取消!',{icon: 1,time:1000});
				} else {
					layer.msg('取消失败!',{icon: 5,time:1000});
				}
			},
		});		
	});
}
/*文章-推存*/
function article_dtc(obj,id,values){
	layer.confirm('确认要推存吗？',function(index){
		$.ajax({
			type: 'POST',
			data: { id: id ,values:values},
			url: 'article_tc.html',
			dataType: 'json',
			success: function(data){
				if (data=='success') {
					$(obj).parents("tr").find(".a-tc").prepend('<a href="javascript:;" onclick="article_tc(this,<?php echo $usr['id']; ?>,{recommended})" class="btn btn-success radius size-MINI">已推存</a>');
					$(obj).remove();
					layer.msg('已推存!',{icon: 1,time:1000});
				} else {
					layer.msg('推存失败!',{icon: 5,time:1000});
				}	
			},
		});		
	});

}
/*文章-取消推存*/
function article_tc(obj,id,values){
	layer.confirm('确认要取消推存吗？',function(index){
		$.ajax({
			type: 'POST',
			data: { id: id ,values:values},
			url: 'article_tc.html',
			dataType: 'json',
			success: function(data){
				if (data=='success') {
					$(obj).parents("tr").find(".a-dtc").prepend('<a href="javascript:;" onclick="article_tc(this,<?php echo $usr['id']; ?>,{recommended})" class="btn btn-default radius size-MINI">未推存</a>');
					$(obj).remove();
					layer.msg('已取消!',{icon: 1,time:1000});
				} else {
					layer.msg('取消失败!',{icon: 5,time:1000});
				}
			},
		});		
	});
}
/*文章-编辑*/
function article_edit(title,url){
	var index = layer.open({
	  type: 2,
	  title: title,
	  content: url,
	  maxmin: true,
	  end:function(index){
    	javascript:location.replace(location.href);
  	}
	});
	layer.full(index);
}

/*文章-回收*/
function article_del(obj,id){
	layer.confirm('确认要移入回收站吗？',function(index){
		$.ajax({
			type: 'GET',
			data:{id:id},
			url: "article_del.html",
			dataType: 'json',
			success: function(data){
				if (data=="success") {
					$(obj).parents("tr").remove();
					layer.msg('已移入!',{icon:1,time:1000});
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