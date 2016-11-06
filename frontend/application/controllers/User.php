<?php
class UserController extends BaseController {

	//登录
	public function loginAction() {
		$page=new stdClass;
		$page->title="Login";
		$this->getView()->page =$page;
		$this->getView()->content = "1st page";
	}
	//
	public function dologinAction() {
		$page=new stdClass;
		$page->title="page";
		$this->getView()->page =$page;
		$this->getView()->content = "1st page";
	}
	//注册
	public function signupAction() {
		$page=new stdClass;
		$page->title="Sign";
		$this->getView()->page =$page;
		$this->getView()->content = "1st page";
	}
}
