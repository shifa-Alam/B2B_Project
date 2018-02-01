<?php


// App Configuration //
$DEFAULT_URL = array(
	'c' => 'category',
	'a' => 'index',
);

// Default layout
global $APP_LAYOUT;
$APP_LAYOUT = 'default';

// Direct Seperator
$DS = DIRECTORY_SEPARATOR;

// Paramether Variables
global $PARAMETERS;
$PARAMETERS = array();

// Global Message Array
global $MESSAGE;
$MESSAGE = array();

// Database configuration //
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'b2b');
define('DB_PREFIX', '');
