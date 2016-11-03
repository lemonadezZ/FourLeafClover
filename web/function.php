<?php

function layout($content,$page=[],$master="master"){
 	include LAYOUT.'master.phtml';
	return $content;
}

function url($path){
	return  $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['SERVER_NAME'].$path;
}
