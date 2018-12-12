<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:87:"F:\xampp\htdocs\tp5\thinkphp_5.0.10\public/../application/admin\view\index\welcome.html";i:1533095070;s:87:"F:\xampp\htdocs\tp5\thinkphp_5.0.10\public/../application/admin\view\templet\_meta.html";i:1534870695;s:89:"F:\xampp\htdocs\tp5\thinkphp_5.0.10\public/../application/admin\view\templet\_footer.html";i:1535286274;}*/ ?>
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
<title>我的桌面</title>
</head>
<body>
<div class="page-container">
	<p class="f-20 text-success">LAUCHER-FASSS<span class="f-14">HELLO WORLD!</span></p>
	<p>登录次数：<?php echo $a; ?></p>
	<p>上次登录IP：<?php echo \think\Request::instance()->ip(); ?>  上次登录时间：<?php echo date("Y-m-d H:i:s",\think\Session::get('user_info.last_login_time')); ?></p>
	<table class="table table-border table-bordered table-bg">
		<thead>
			<tr>
				<th colspan="7" scope="col">信息统计</th>
			</tr>
			<tr class="text-c">
				<th>统计</th>
				<th>资讯库</th>
				<th>图片库</th>
				<th>产品库</th>
				<th>用户</th>
				<th>管理员</th>
			</tr>
		</thead>
		<tbody>
			<tr class="text-c">
				<td>总数</td>
				<td>92</td>
				<td>9</td>
				<td>0</td>
				<td><?php echo $count; ?></td>
				<td><?php echo $count2; ?></td>
			</tr>
			<tr class="text-c">
				<td>今日</td>
				<td>0</td>
				<td>0</td>
				<td>0</td>
				<td>0</td>
				<td>0</td>
			</tr>
			<tr class="text-c">
				<td>昨日</td>
				<td>0</td>
				<td>0</td>
				<td>0</td>
				<td>0</td>
				<td>0</td>
			</tr>
			<tr class="text-c">
				<td>本周</td>
				<td>2</td>
				<td>0</td>
				<td>0</td>
				<td>0</td>
				<td>0</td>
			</tr>
			<tr class="text-c">
				<td>本月</td>
				<td>2</td>
				<td>0</td>
				<td>0</td>
				<td>0</td>
				<td>0</td>
			</tr>
		</tbody>
	</table>
	<table class="table table-border table-bordered table-bg mt-20">
		<thead>
			<tr>
				<th colspan="2" scope="col">服务器信息</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<th width="30%">服务器计算机名</th>
				<td><span id="lbServerName"><?php echo \think\Request::instance()->host(); ?></span></td>
			</tr>
			<tr>
				<td>服务器IP地址</td>
				<td><?php echo \think\Request::instance()->ip(); ?></td>
			</tr>
			<tr>
				<td>服务器域名</td>
				<td><?php echo \think\Request::instance()->domain(); ?></td>
			</tr>
			<!--<tr>
				<td>服务器端口 </td>
				<td>80</td>
			</tr> -->
			<tr>
				<td>当前PHP版本 </td>
				<td><?php echo PHP_VERSION; ?></td>
			</tr> 
			<tr>
				<td>服务器版本 </td>
				<td><?php echo PHP_OS; ?></td>
			</tr> 
			<!-- <tr>
				<td>本文件所在文件夹 </td>
				<td>D:\WebSite\HanXiPuTai.com\XinYiCMS.Web\</td>
			</tr> -->
			<!-- <tr>
				<td>系统所在文件夹 </td>
				<td>C:\WINDOWS\system32</td>
			</tr> -->
			<!-- <tr>
				<td>服务器脚本超时时间 </td>
				<td>30000秒</td>
			</tr> -->
			<tr>
				<td>服务器的语言种类 </td>
				<td>Chinese (People's Republic of China)</td>
			</tr>
			<!-- <tr>
				<td>.NET Framework 版本 </td>
				<td>2.050727.3655</td>
			</tr> -->
			<tr>
				<td>服务器当前时间 </td>
				<td><?php echo $time; ?></td>
			</tr>
			<!-- <tr>
				<td>服务器IE版本 </td>
				<td>6.0000</td>
			</tr> -->
			<!-- <tr>
				<td>服务器上次启动到现在已运行 </td>
				<td>7210分钟</td>
			</tr> -->
			<!-- <tr>
				<td>逻辑驱动器 </td>
				<td>C:\D:\</td>
			</tr> -->
			<!-- <tr>
				<td>CPU 总数 </td>
				<td>4</td>
			</tr> -->
			<!-- <tr>
				<td>CPU 类型 </td>
				<td>x86 Family 6 Model 42 Stepping 1, GenuineIntel</td>
			</tr> -->
			<!-- <tr>
				<td>虚拟内存 </td>
				<td>52480M</td>
			</tr> -->
			<!-- <tr>
				<td>当前程序占用内存 </td>
				<td>3.29M</td>
			</tr> -->
			<!-- <tr>
				<td>Asp.net所占内存 </td>
				<td>51.46M</td>
			</tr> -->
			<tr>
				<td>当前Session数量 </td>
				<td><?php echo count($_SESSION); ?></td>
			</tr>
			<tr>
				<td>当前SessionID </td>
				<td><?php echo session_id(); ?></td>
			</tr>
			<!-- <tr>
				<td>当前系统用户名 </td>
				<td>NETWORK SERVICE</td>
			</tr> -->
		</tbody>
	</table>
</div>
<footer class="footer mt-20">
	<div class="container">
		<p><!-- 感谢jQuery、layer、laypage、Validform、UEditor、My97DatePicker、iconfont、Datatables、WebUploaded、icheck、highcharts、bootstrap-Switch --><br>
			Copyright &copy;2015-2018 LAUCHER-FASSS All Rights Reserved.<br>
		</p>
	</div>
</footer>

<script type="text/javascript" src="__STATIC__/admin/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="__STATIC__/admin/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="__STATIC__/admin/static/h-ui/js/H-ui.min.js"></script>
<script type="text/javascript" src="__STATIC__/admin/static/h-ui.admin/js/H-ui.admin.js"></script> 
</body>
</html>