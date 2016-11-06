<?php
function Dscandir($path){
	$dirs=scandir($path);
	array_shift($dirs);
	array_shift($dirs);
	if(is_array($dirs)){
		foreach($dirs as $dir){
			if(is_dir($path.'/'.$dir)){
				Dscandir($path.'/'.$dir);
			}else{
				echo $path.'/'.$dir."\n";
			}
		}
	}else{
		echo $path.'/'.$dir."\n";
	}
}
Dscandir('./version');
