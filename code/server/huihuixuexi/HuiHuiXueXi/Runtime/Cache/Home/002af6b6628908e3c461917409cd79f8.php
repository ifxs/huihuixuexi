<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>汇慧学习</title>
<!-- 样式表 -->
<link href="<?php echo (BOOTSTRAP_URL); ?>css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo (CSS_URL); ?>home/index/layout_index.css" rel="stylesheet">
	<!--[if lt IE 9]>
       <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
       <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<!-- titleBar -->
<div class="title_bar">
</div>
<!-- 选项卡 -->
<div class="tab_left  tab_style">
<br />
<br />
<!-- <a href="/index.php/Home/Course/courses/id/<?php echo ($result["id"]); ?>"><?php echo ($result["name"]); ?></a> -->
<a href="/index.php/Home/Course/courses/c_id/1">nginx</a>
</div>
<div class="tab_left tab_style">
<a href="/index.php/Home/Course/courses/c_id/2">Java</a>
</div>
<div class="clear_float"></div>
</body>
</html>