<?php

$server= new Swoole\Http\Server('0.0.0.0',8080);

$server->on('Request',function($request,$response){
	$response->end("hello ApiGateWay");
});

$server->start();


