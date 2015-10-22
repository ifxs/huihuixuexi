<?php
namespace Admin\Controller;
use Think\Controller;

class CourseController extends Controller {
	/**
	 * 课程分类管理
	 */
	public function courseCategoryManage(){
		//对象
		$courseCate = M("courseCategory");
		//查询
		$result = $courseCate ->select();
		//注册变量
		$this ->assign('result', $result);
		//显示界面
		$this ->show();
	}
	/**
	 * 添加课程分类
	 */
	public function addCourseCategory(){
		//添加界面
		if(empty($_POST)){
			$this ->show();
		//添加处理
		}else{
			$courseCate = M("courseCategory");
			$data = array(
					'name' =>$_POST['name']
			);
			//执行添加
			$res = $courseCate ->add($data);
			if($res){
				$this ->success('添加成功', 'courseCategoryManage');
			}else{
				$this ->error('添加失败', 'courseCategoryManage');
			}
		}
	}
//=====================================================================================
//=====================================================================================
	/**
	 * 上传课程
	 */
	public function uploadCourse(){
		if(empty($_POST)){
			//课程分类对象
			$collType = M("courseCategory");
			//查询
			$result = $collType ->select();
			//注册变量
			$this ->assign("cateRes",$result);
			$this ->show();
		}else{
			//是否向用户开放
			if(isset($_POST['is_open']) && $_POST['is_open'] == "on"){
				$is_open = 1;
			}else{
				$is_open = 0;
			}
			$data = array(
					'category_id' => $_POST['category_id'],
					'course_name' => $_POST['course_name'],
					'course_profile' => $_POST['course_profile'],
					'teacher_name' => $_POST['teacher_name'],
					'teacher_profile' => $_POST['teacher_profile'],
					'is_open' =>$is_open
			);
			//执行添加操作
			$course = M("course");
			$id = $course ->add($data);
			//添加成功
			if($id){
				$this->success('上传成功,接下来请上传课时', "uploadLesson/id/".$id);
			//添加失败
			}else{
				$this ->error("添加失败,请检查你的输入!");
			}
		}
	}
	/**
	 * 上传课时界面
	 */
	public function uploadLesson() {
		if(empty($_GET)){
			$this ->error("没有选择课程!");
		}else{
			$this ->assign("id",$_GET['id']);
			$this ->show();
		}
	}
	/**
	 * 上传课时处理
	 */
	public function uploadLessonHandle() {
		if(empty($_POST)){
			$this ->error("没有选择课程!");
		}else{
			$lesson = M("lesson");
			$data = array(
				'course_id' =>$_POST['course_id'],	
				'lesson_name' =>$_POST['lesson_name'],	
				'lesson_duration' =>$_POST['lesson_duration'],	
				'lesson_video_src' =>$_POST['lesson_video_src']	
			);
			$id = $lesson ->add($data);
			if($id){
				$this->success('上传成功,可以继续上传和选择完成!');
			}else{
				$this ->error("上传失败,请检查你的输入!");
			}
		}
	}
//=====================================================================================
//=====================================================================================
	/**
	 * 所有课程
	 */
	public function courseManage(){
		$course = M("course");
		$result = $course ->select();
		$this ->assign("result",$result);
		$this->show();
	}
	/**
	 * 更新课程
	 */
	public function updateCourse(){
	if(empty($_GET)){
			$this ->error("没有选择课程!");
		}else{
			//课程信息
			$course = M("course");
			$course = $course ->where("id=%d",$_GET['id']) ->find();
			$this ->assign("course",$course);
			//课时信息
			$lesson = M("lesson");
			$lessonArr = $lesson ->where("course_id=%d",$_GET['id']) ->select();
			$this ->assign("lessonArr",$lessonArr);
			
			$this ->show();
		}
	}
}