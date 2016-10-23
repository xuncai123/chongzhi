<?php
namespace Admin\Controller;
use Think\Controller;
use Think\Verify;
class LoginController extends Controller {
	/*
	 * 登录主页面
	 */
	function index() {
		$this->display();
	}
	/*
	 * 检测登录信息
	 */
	function check(){
		$verify=trim(I('post.verify'));
		import("Think.Verify");
		$imageob=new Verify();
		//var_dump($imageob->check($verify));exit;
		if($imageob->check(strtolower($verify))){
			$username=trim($_POST['username']);
			$password=md5((trim($_POST['password'])));
			$row=M('admin')->where("username = '{$username}'and password='{$password}'")->find();
			if($row){
				//将管理员信息存入session
				$_SESSION['amininfo']=$row;
				$this->success("登录成功",U("Order/user_order"));
			}else{
				$this->error("用户名或密码错误，请重登",U("Login/index"));
			}
		}else{
			$this->error("验证码错误",U("Login/index"));
		}
	}
	/*
	 * 生成验证码
	 *
	 */
	function code(){
		import("Think.Verify");
		$imageob=new Verify();
		$imageob->fontSize=20;
		$imageob->useNoise=false;
		$imageob->length=4;
		$imageob->entry();
	}
	/*
	 * 退出登录
	 */
	function logout(){
		unset($_SESSION['admininfo']);
		$this->redirect("Login/index");
	}
}