<?php

//
function env($str){

}
//
function part($part,$page=[]){
 	include PART.$part.'.phtml';
	return $content;
}
//
function layout($content,$page=[],$master="master"){
 	include LAYOUT.$master.'.phtml';
	return $content;
}
//
function url($path){
	return  $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['SERVER_NAME'].$path;
}
//
function url_js($path){
	return  $_SERVER['REQUEST_SCHEME'].'://static.'.$_SERVER['SERVER_NAME'].$path;
}
//
function url_img($path){
	return  $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['SERVER_NAME'].$path;
}
//
function url_css($path){
	return  $_SERVER['REQUEST_SCHEME'].'://static.'.$_SERVER['SERVER_NAME'].$path;
}
//
function style(){

}
//
function script(){

}
