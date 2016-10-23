<?php
namespace Admin\Widget;
use Think\Controller;
class CommonWidget extends Controller{
	public function test(){
		$abc='aa';
		$this->assign("abc",$abc);
		$this->display('Common:test');
	}
}

