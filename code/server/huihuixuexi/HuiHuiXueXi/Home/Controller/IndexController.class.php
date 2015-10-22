<?php
namespace Home\Controller;
use Think\Controller;

class IndexController extends Controller {
	/**
	 * 首页 展示的是选项卡界面
	 */
    public function index(){
//     	//对象
//     	$courseCate = M("courseCategory");
//     	//查询
// //     	$result = $courseCate ->select();
//     	$result = $courseCate ->find();
//     	//注册变量
//     	$this ->assign('result', $result);
    	//显示界面
    	$this ->show();
    }
}