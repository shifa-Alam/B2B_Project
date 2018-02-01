<?php
add_log("core.controller.php");

function is_post(){
	if(isset($_POST) && !empty($_POST)) return true;
	else return false;
}

// Working with sessions
function add_session($key, $value){
	if( !isset($_SESSION) ) session_start();
	$_SESSION[$key] = $value;
}