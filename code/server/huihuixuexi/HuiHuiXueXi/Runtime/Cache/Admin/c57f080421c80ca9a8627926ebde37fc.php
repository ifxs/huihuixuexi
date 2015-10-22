<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>汇慧学习</title>
<!-- 样式表 -->
<link href="<?php echo (BOOTSTRAP_URL); ?>css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo (CSS_URL); ?>admin/portal/layout_login.css" rel="stylesheet">
	<!--[if lt IE 9]>
       <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
       <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
	<!-- 顶部 -->
	<div class="header">
		<div class="logoBar">
			<div class="logo">
			</div>
		</div>
	</div>
	<!-- 顶部结束 -->
	
	<!-- 主体 -->
	<div class="body">
			<div class="center-block">
			<h3>后台管理员登录</h3><hr /><hr />
				<form class="form-horizontal" role="form" method="post">
					<div class="form-group has-success">
						<div class="col-sm-4">
							<input type="text" name="admin_name" class="form-control" placeholder="管理员账号" />
						</div>
					</div>
					<div class="form-group has-success">
						<div class="col-sm-4">
							<input type="password" name="password" class="form-control" placeholder="管理员密码" />
						</div>
					</div>
					<div class="form-group has-success">
						<div class="col-sm-4">
							<input type="text" id="checkcode" name="checkcode" class="form-control" placeholder="验证码"/>
						</div>
					</div>
					<div class="form-group">
							<div class="col-sm-8">
					    	<img id="validcode" src="/index.php/Admin/Portal/verifyCode" />&nbsp;&nbsp;&nbsp;<a href="javascript:void(0)" onclick="javascript:document.getElementById('validcode').src='/index.php/Admin/Portal/verifyCode/random/'+Math.random()">换1张</a>
					    	</div>
					</div>
					<div class="form-group">
						<div class="col-sm-offset-1 col-sm-4">
							<button class="btn btn-success" name="adminLogin" type="submit">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;登&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;录&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
						</div>
					</div>
				</form>
			</div>
	</div>
</body>
</html>