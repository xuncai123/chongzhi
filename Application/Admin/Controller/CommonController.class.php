<?php
namespace Admin\Controller;
use Think\Controller;
class CommonController extends Controller{
	function __initialize(){
		if(!isset($_SESSION['amininfo'])){
			$this->erroe("请先登录！" ,U('Login/index'));
		}
	}
}