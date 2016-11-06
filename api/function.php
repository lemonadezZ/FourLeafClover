<?php

function success($data,$code="200"){
	return _return($data,$code);
}
function _return($data,$code){
	http_response_code($code);
	return json_encode($data);
}
function fail($data,$code=1){
	http_response_code();
	return "";
}

function code(){

}
//请求
function request(){
	$data=[];
	$data['version']=$_REQUEST['version'];
	$data['endpoint']=$_REQUEST['endpoint'];
	$data['content_type']=isset($_REQUEST['content_type'])?$_REQUEST['content_type']:"json";
	return $data;
}
//回复
function response($dispatch){
	echo $dispatch;
}
//调度
function dispatch($request){
	$file_path='version'.'/'.$request['version'].'/'.$request['endpoint'].'.php';
	return include($file_path);
}
//env
function env(){

}
