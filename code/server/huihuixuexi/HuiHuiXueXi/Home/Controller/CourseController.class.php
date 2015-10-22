<?php
namespace Home\Controller;
use Think\Controller;

class CourseController extends Controller {
	/**
	 * 某一分类下的所有课程
	 */
	public function courses(){
		if(empty($_GET)){
			$this ->error("请先选择课程类别");
		}else{
			$course = M("course");
			$result = $course ->field("id,course_name,teacher_name") ->where("category_id=%d",$_GET['c_id']) ->select();
			$this ->assign("result",$result);
			$this->show();
		}
	}
	/**
	 * 某一课程的所有课时
	 */
	public function lessons(){
		if(empty($_GET)){
			$this ->error("请先选择课程");
		}else{
			//课程信息
			$course = M("course");
			$course = $course ->where("id=%d",$_GET['c_id']) ->find();
			$this ->assign("course",$course);
			
			//课时信息
			$lesson = M("lesson");
			$lessonArr = $lesson ->where("course_id =%d",$_GET['c_id']) ->select();
			$this ->assign("lessonArr",$lessonArr);
			$this->show();
		}
	}
}