<?php
define("APPLICATION_PATH",  dirname(dirname(__FILE__)));
define("APP",APPLICATION_PATH.'/application/');
define("VIEW",APP.'views/');
define("LAYOUT",VIEW.'layouts/');

include "../function.php";

$app  = new Yaf_Application(APPLICATION_PATH . "/conf/application.ini");

$app->bootstrap()->run();
