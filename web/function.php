<?php

function layout($content,$page=[],$master="master"){
 	include LAYOUT.'master.phtml';
	return $content;
}
