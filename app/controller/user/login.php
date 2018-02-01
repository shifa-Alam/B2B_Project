<?php 
$APP_LAYOUT = 'sauget';


if(is_post()){
	
	$username = $_POST['username-email'];
	$password = sha1($_POST['password']);

	$SQL = "SELECT * FROM users WHERE (users.user_name = '{$username}' OR users.email = '{$username}') AND password = '{$password}'";

	global $db_connection;
	$result = $db_connection->query($SQL);
	$result = $result->fetch_assoc();
	
	if($result){
		add_session('user', $result);
		if($result['user_role'] == 1) header("Location: index.php?c=user&a=view");
			else header("Location: index.php?c=product&a=front.view");
		exit;
	}
	
}
