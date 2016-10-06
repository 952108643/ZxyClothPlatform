<?php
// 公共的代码区包含页面的头部，底部等其他公共部分，被其他控制器调用
namespace Home\Controller;
use Think\Controller;
class CommonController extends Controller {
	public function header(){
		$this->display();
	}
	public function bottom(){
		$this->display();
	}
    public function test(){
    
	    $this->display();
    }
}