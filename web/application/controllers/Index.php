<?php
class IndexController extends BaseController {

	public function indexAction() {  
		$page=new stdClass;
		$page->title="页面";
		$this->getView()->page =$page;
		$this->getView()->content = "1st page";
	}
}
