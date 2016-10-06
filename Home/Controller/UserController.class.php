<?php
namespace Home\Controller;
use Think\Controller;
class UserController extends Controller {
    public function main(){
    $this->display('Common:header');
	$this->display();
	$this->display('Common:bottom');
    }
}