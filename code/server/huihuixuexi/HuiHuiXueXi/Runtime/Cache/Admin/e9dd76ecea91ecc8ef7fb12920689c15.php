<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>汇慧学习</title>
<link href="<?php echo (BOOTSTRAP_URL); ?>css/bootstrap.min.css" rel="stylesheet">
	<!--[if lt IE 9]>
       <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
       <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="body">
	   <table class="table table-bordered table-hover">
	       <tr><td>#</td><td>分类#</td><td>课程名称</td><td>课程简介</td><td>讲师姓名</td><td>讲师简介</td><td>是否开放</td><td>更新</td></tr>
	       <?php if(is_array($result)): $i = 0; $__LIST__ = $result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
	       <td><?php echo ($vo["id"]); ?></td>
	       <td><?php echo ($vo["category_id"]); ?></td>
	       <td><?php echo ($vo["course_name"]); ?></td>
	       <td><?php echo ($vo["course_profile"]); ?></td>
	       <td><?php echo ($vo["teacher_name"]); ?></td>
	       <td><?php echo ($vo["teacher_profile"]); ?></td>
	       <td><?php echo ($vo["is_open"]); ?></td>
	       <td><a href="/index.php/Admin/Course/updateCourse/id/<?php echo ($vo["id"]); ?>">更新</a></td>
	       </tr><?php endforeach; endif; else: echo "" ;endif; ?>
        </table>
</div>
</body>
</html>