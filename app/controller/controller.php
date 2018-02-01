<?php
add_log("controller.php") ;

// Checking user access
function user_access( 
	array $roles, // List of user role id who can access this page.
	array $denied_users_id = array() // List user id who can't access this page.
){	
	if ( ! session_id() ) session_start();
	
	if(!isset($_SESSION['user'])){
		header("Location: index.php?c=user&a=login");
		exit;
	}

	// print_r($_SESSION);
	if( in_array($_SESSION['user']['user_role'], $roles) && !in_array($_SESSION['user']['id'], $denied_users_id)) return true;
		else {
			header("Location: index.php?c=user&a=login");
			exit;
		}
}


function get_current_user_data(){
	if( !isset($_SESSION) ) session_start();
	if( isset($_SESSION['user']) ) return $_SESSION['user'];
		else return false;
}