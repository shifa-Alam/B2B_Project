<?php

	function add_user(array $data){
		global $db_connection;
		$table_name = get_table_name('users');
		$SQL = "INSERT INTO {$table_name}(user_role,user_name,email,password,full_name,company_name,address,contact_no,discount	) VALUES('{$data['user_role']}', '{$data['user_name']}', '{$data['email']}','{$data['password']}','{$data['full_name']}','{$data['company_name']}','{$data['address']}','{$data['contact_no']}','{$data['discount']}')";	
		return $db_connection->query($SQL);	

}
function get_string($value){
	// global $db_connection;
	// $check_string=mysqli_real_escape_string($db_connection,$value);	
	$value = trim($value);
  	$value = stripslashes($value);
  	$value = htmlspecialchars($value);
	return is_string($value) ? $value : false;
}
function get_number($value){
	$value = trim($value);
  	$value = stripslashes($value);
  	$value = htmlspecialchars($value);

	return is_numeric($value) ? $value : false;		
}