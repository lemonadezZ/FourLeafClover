<?php
return success([
	'device_id'=>md5(time().$_REQUEST['app_key']),
	'auth_key'=>md5(time().env('app.noise').' '.$_REQUEST['app_key']),
]);
