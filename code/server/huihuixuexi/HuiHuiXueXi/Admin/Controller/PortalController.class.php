<?php
namespace Admin\Controller;
use Think\Controller;

class PortalController extends Controller {
	/**
	 * 管理员登录
	 */
    public function adminLogin(){
    	if(empty($_POST)){
       		$this ->show();
    	}else{
    		//判断验证码是否正确
    		$codeRes = $this ->checkVerifyCode($_POST['checkcode']);
    		if($codeRes){
    			/*
    			//admin对象
    			$admin = M("Admin");
    			//验证用户名和密码
    			$pwd = md5($_POST['password']);
    			$result = $admin ->field("id") ->where("admin_name='%s' and password='%s'", array($_POST['admin_name'], $pwd)) ->find();
    			//登录成功
    			if($result){
    				//保存会话
    				$_SESSION['id'] = $result['id'];
    				$_SESSION['admin_name'] = $_POST['admin_name'];
    				$this ->success ( '登录成功', 'adminIndex', 3 );
    			//用户名或密码错误
    			}else{
    				$this ->error('用户名或密码错误', 'adminLogin', 3);
    			}
    			*/
    			
    			$this ->success ( '登录成功', 'adminIndex', 3 );
    			
    		//验证码错误
    		}else{
    			$this ->error('验证码错误', 'adminLogin', 3);
    		}
    		
    	}
    }
    /**
	 * 验证码生成函数，返回的是图片
	 */
	public function verifyCode(){
		$config = array( 
					'fontSize' => 20,    // 验证码字体大小  
					'useCurve' =>false,
					'length' => 2,     // 验证码位数 
					'useNoise'  => false // 关闭验证码杂点
			  		);
		$Verify = new \Think\Verify($config);
		echo $Verify ->entry();
	}
	/**
	 * 验证输入的验证码是否正确
	 * @param $code 用户输入的验证码字符串
	 */
	public function checkVerifyCode($code, $id = ''){
		$verify = new \Think\Verify();
		return $verify ->check($code, $id);
	}
	/**
	 * 退出登录
	 */
	public function adminLogout(){
		$_SESSION = array();  //置为空数组
	
		//删除系统定义的session id(既是PHPSESSID)，由于默认是基于
		//cookie的，所有要使用setcookie(xxx)删除包含session id的cookie。
		if(isset($_COOKIE["PHPSESSID"])){
			//从跟目录开始，马上过期
			setcookie("PHPSESSID","",time()-1,"/");
		}
		session_destroy();
		// 退出成功
		$this ->success ( '退出成功', 'adminLogin', 3 );
	}
//=====================================================================================
//=====================================================================================
	/**
	 * 管理员首页
	 */
	public function adminIndex(){
		//if(empty($_SESSION['id'])){
		//	$this ->error('会话已过期,请重新登陆', 'adminLogin', 3);
		//}else{
			$this ->show();
		//}
	}
}