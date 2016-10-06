<?php
namespace Home\Controller;
use Think\Controller;
class OtherController extends Controller {
    public function index(){
    $this->display('Common:header');
	$this->display();
	$this->display('Common:bottom');
    }
}