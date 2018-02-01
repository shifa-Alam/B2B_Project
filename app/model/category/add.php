<?php
add_log('model/category/add.php');

function add_category(array $data){
	
	global $db_connection;
	$table_name = get_table_name('category');
	$SQL = "INSERT INTO {$table_name}(title, description) VALUES('{$data['title']}', '{$data['description']}');";
	
	return $db_connection->query($SQL);	
}
function get_string($value){
	global $db_connection;
	// $check_string=mysqli_real_escape_string($db_connection,$value);	

	$value = trim($value);
  	$value = stripslashes($value);
  	$value = htmlspecialchars($value);
  	
  	$value = mysqli_real_escape_string($db_connection,$value);
  	$value = filter_var($value, FILTER_SANITIZE_STRING);
	// return is_string($value) ? $value : false;

	return $value;
}
