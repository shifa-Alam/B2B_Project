<?php

	function add_shipment(array $data){
		global $db_connection;
		$table_name = get_table_name('shipment');
		$SQL = "INSERT INTO {$table_name}(name,description) VALUES('{$data['name']}','{$data['description']}')";	
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
