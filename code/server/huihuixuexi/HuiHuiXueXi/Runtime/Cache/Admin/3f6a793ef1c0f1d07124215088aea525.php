<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>汇慧学习</title>
<!-- 样式表 -->
<link href="<?php echo (BOOTSTRAP_URL); ?>css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo (CSS_URL); ?>admin/course/layout_upload_course.css" rel="stylesheet">
	<!--[if lt IE 9]>
       <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
       <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<!-- titleBar -->
<div class="title_bar">
</div>
<div class="content_box">
<form class="form-horizontal" role="form" method="post">
	<div class="form-group has-success">
		<label class="col-sm-2 control-label">分类：</label>
		<div class="col-sm-4">
			<select name="category_id" class="form-control">
			    <?php if(is_array($cateRes)): $i = 0; $__LIST__ = $cateRes;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value ="<?php echo ($vo["id"]); ?>"><?php echo ($vo["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
			</select>
		</div>
	</div>
	<div class="form-group has-success">
		<label class="col-sm-2 control-label">课程名称：</label>
		<div class="col-sm-4">
			<input type="text" name="course_name" class="form-control"/>
		</div>
	</div>
	<div class="form-group has-success">
		<label class="col-sm-2 control-label">课程简介：</label>
		<div class="col-sm-4">
			<input type="text" name="course_profile" class="form-control"/>
		</div>
	</div>
	<div class="form-group has-success">
		<label class="col-sm-2 control-label">讲师姓名：</label>
		<div class="col-sm-4">
			<input type="text" name="teacher_name" class="form-control"/>
		</div>
	</div>
	<div class="form-group has-success">
		<label class="col-sm-2 control-label">讲师简介：</label>
		<div class="col-sm-4">
			<input type="text" name="teacher_profile" class="form-control"/>
		</div>
	</div>
	<div class="form-group has-success">
		<label class="col-sm-2 control-label">向用户开放：</label>
		<div class="col-sm-4">
			<input type="checkbox" name="is_open" />
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-4">
			<button class="btn btn-success" type="submit">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;添&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;加&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
		</div>
	</div>
</form>
</div>
</body>
</html>