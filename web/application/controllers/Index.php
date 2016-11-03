<?php
class IndexController extends BaseController {

	public function indexAction() {  
		$page=new stdClass;
		$page->title="page";
		$this->getView()->page =$page;
		$this->getView()->content = "1st page";
	}
}
