<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;
use Think\Controller;
class TestController extends Controller {
    public function test(){
    // $this->display('Common:test');
	// $this->display();
    	//echo APP_PUBLIC;

    }
    function verify(){
		//think.class.php
		$config=array(
		'imageH'    =>  30,               
        'fontSize'  => 	15,	
		'fontttf'   =>  '4.ttf',
		'length'    =>  4, 
		'useCurve'  =>  false,
		);
		$verify = new \Think\Verify($config);
	    $verify->entry();
		
	}
}