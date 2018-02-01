<?php


global $LOG_MESSAGES;
$LOG_MESSAGES = array();

function add_log($message){
	
	global $LOG_MESSAGES;
	
	$debug = debug_backtrace();

	$LOG_MESSAGES[] = array(
		'message' => $message,
		'file' => $debug[0]['file'],
		'line' => $debug[0]['line'],
	);
}

function print_log(){

	global $LOG_MESSAGES;

	foreach ($LOG_MESSAGES as $key => $value) {
		echo "<pre>";
		print_r($value);
		echo "</pre>";
	}

}