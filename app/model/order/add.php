<?php

	function add_order(array $data){
		global $db_connection;
		$table_name = get_table_name('orders');
		$SQL = "INSERT INTO {$table_name}(user_id,shipping_method_id,total_price,discount,product_cart,date,comments) VALUES('{$data['user_id']}', '{$data['shipping_method_id']}', '{$data['total_price']}','{$data['discount']}','{$data['product_cart']}','{$data['date']}','{$data['comments']}')";	
		return $db_connection->query($SQL);	

}
function get_shipment_Method(){
	global $db_connection;
	$table_name = get_table_name('shipment');
    $SQL= "SELECT * FROM {$table_name}";
    return $db_connection->query($SQL);
    
}
function get_user(){
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