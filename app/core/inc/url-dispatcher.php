<?php
 
add_log('url-dispatcher.php');
add_log(serialize($_GET));


foreach($_GET as $key => $value){
	
	if($key == 'a' || $key == 'c' || $key == 'ajax') continue;

	global $PARAMETERS;
	$PARAMETERS[] = $key;
}

add_log(serialize($PARAMETERS));

$model_path = "app" . $DS . "model" . $DS . $_GET['c'] . $DS . $_GET['a'] . ".php";
$controller_path = "app" . $DS . "controller" . $DS . $_GET['c'] . $DS . $_GET['a'] . ".php";

// Checking if ajax template or normal template should be loaded
if( in_array( 'ajax', array_keys( $_GET ) ) ){
	$view_path = "app" . $DS . "view" . $DS . $_GET['c'] . $DS . 'ajax' . $DS . $_GET['a'] . ".php";
	$APP_LAYOUT = 'ajax';
} else $view_path = "app" . $DS . "view" . $DS . $_GET['c'] . $DS . $_GET['a'] . ".php";
