<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Home</title>
	<link href="/bootstrap/css/bootstrap.css" rel="stylesheet">
	<link href="/bootstrap/css/ccs_home.css" rel="stylesheet">
	<script src="/bootstrap/js/jquery-2.1.1.min.js"></script>
	<script src="/bootstrap/js/bootstrap.js"></script>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<script type="text/javascript">
		$(function() {
			$("#class-1-1").popover({
				html: true,
				trigger: 'hover',
				placement: 'auto bottom',
				delay: {
					show: 0,
					hide: 1500
				},
				title: function() {
					return $("#popover-title").html();
				},
				content: function() {
					return $("#popover-content").html();
				}
			})
			$("#class-1-2").popover({
				html: true,
				trigger: 'hover',
				placement: 'auto bottom',
				delay: {
					show: 0,
					hide: 1500
				},
				title: function() {
					return $("#popover-title").html();
				},
				content: function() {
					return $("#popover-content").html();
				}
			})
		});
	</script>	
</head>
<body>
	<div class="container" style="width: 800px;margin:0 auto;text-align: center;">
		<div class="row" id="menu-bar">
			<nav class="navbar navbar-default" role="navigation">
				<div>
					<ul class="nav navbar-nav">
						<li><a href="#"><span class="userlink">首页</span></a></li>
						<li><a href="#">|</a></li>
						<li><a href="#"><span class="userlink">资讯</span></a></li>
						<li><a href="#"><span class="userlink">娱乐资源</span></a></li>
						<li><a href="#"><span class="userlink">智能选择</span></a></li>
						<li><a href="#"><span class="userlink">关于我们</span></a></li>
					</ul>
				</div>
				<div>
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#"><span class="userlink">我的订单</span></a></li>
						<li><a href="#"><span class="userlink">登录</span></a></li>
						<li><a href="#"><span class="userlink">注册</span></a></li>
						<li><a href="#"><span class="userlink">联系客服</span></a></li>
					</ul>
				</div>
			</nav>
		</div>
		<!--end of <div class="row" id="menu-bar"> -->
		@yield('section')

		<div class="row" id="footbar" style="background: #555555; color:#FFFFFF;">
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="text-align: left;padding: 50px 50px 50px 50px;">
				<table>
					<tr>
						<td style="padding-right: 10px;"><strong>新手指南</strong></td>
						<td>
							<a class="userlinkfoot" href="#">雇主入门</a>
						</td>
					</tr>
					<tr>
						<td></td>
						<td>
							<a class="userlinkfoot" href="#">服务商入门</a>
						</td>
					</tr>
					<tr>
						<td></td>
						<td>
							<a class="userlinkfoot" href="#">规则中心</a>
						</td>
					</tr>
				</table>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3" style="text-align: left;padding-top: 50px;">
				<table>
					<tr>
						<td style="padding-right: 10px;"><strong>关于</strong></td>
						<td>
							<a class="userlinkfoot" href="#">关于我们</a>
						</td>
					</tr>
					<tr>
						<td></td>
						<td>
							<a class="userlinkfoot" href="#">合作伙伴</a>
						</td>
					</tr>
					<tr>
						<td></td>
						<td>
							<a class="userlinkfoot" href="#">媒体报道</a>
						</td>
					</tr>
					<tr>
						<td></td>
						<td>
							<a class="userlinkfoot" href="#">免责声明</a>
						</td>
					</tr>
				</table>
			</div>
			<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5" style="text-align: left;padding-top: 50px;">
				<table>
					<tr>
						<td style="padding-right: 10px;"><strong>联系我们</strong></td>
						<td>
							电话 010-88888888
						</td>
					</tr>
					<tr>
						<td></td>
						<td>
							邮箱 1234@qq.com
						</td>
					</tr>
				</table>
				<div style="padding-left:80px;padding-top:10px;">
					<a href="#"><img src="/bootstrap/img/4.png" class="img-circle" width="40px" /></a>
					<a href="#"><img src="/bootstrap/img/5.png" class="img-circle" width="40px" /></a>
				</div>
			</div>
		</div>
		<!--end of <div class="row" id="footbar"> -->
	</div>

</body>
