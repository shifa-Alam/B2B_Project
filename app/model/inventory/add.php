<?php

	function add_inventory(array $data){
		global $db_connection;
		$table_name = get_table_name('inventory');
		$SQL = "INSERT INTO {$table_name}(product_id,user_id,title,date,amount,description) VALUES('{$data['product_id']}', '{$data['user_id']}','{$data['title']}', '{$data['date']}','{$data['amount']}','{$data['description']}')";	
		return $db_connection->query($SQL);	

}
function get_product_id(){
	global $db_connection;
	$table_name = get_table_name('products');
    $SQL= "SELECT * FROM {$table_name}";
    return $db_connection->query($SQL);
    
}
function get_user_id(){
	global $db_connection;
	$table_name = get_table_name('users');
    $SQL= "SELECT * FROM {$table_name}";
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