<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>汇慧学习</title>
<!-- 样式表 -->
<link href="<?php echo (BOOTSTRAP_URL); ?>css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo (CSS_URL); ?>home/course/layout_lessons.css" rel="stylesheet">
	<!--[if lt IE 9]>
       <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
       <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<!-- titleBar -->
<div class="title_bar">
</div>
<!-- 课程信息 -->
<div class="course_box">
<b>id：</b><?php echo ($course["id"]); ?><hr />
<b>课程名称：</b><?php echo ($course["course_name"]); ?><hr />
<b>课程简介：</b><?php echo ($course["course_profile"]); ?><hr />
<b>讲师姓名：</b><?php echo ($course["teacher_name"]); ?><hr />
<b>讲师简介：</b><?php echo ($course["teacher_profile"]); ?><hr />
</div>
<hr />
<hr />
<!-- 课时信息 -->
<div class="lesson_box">
<table class="table table-bordered table-hover">
   <tr><td>#</td><td>课时名称</td><td>课时时长</td><td>课程存储路径</td></tr>
   <?php if(is_array($lessonArr)): $i = 0; $__LIST__ = $lessonArr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
   <td><?php echo ($vo["id"]); ?></td>
   <td><?php echo ($vo["lesson_name"]); ?></td>
   <td><?php echo ($vo["lesson_duration"]); ?></td>
   <td><?php echo ($vo["lesson_video_src"]); ?></td>
   </tr><?php endforeach; endif; else: echo "" ;endif; ?>
</table>
</div>
</body>
</html>