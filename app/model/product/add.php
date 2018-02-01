<?php

function add_product(array $data){
	global $db_connection;
	$table_name = get_table_name('products');
	$SQL = "INSERT INTO {$table_name}(title,Product_code,category_id,description,price,sku,inventory,image) VALUES('{$data['title']}','{$data['Product_code']}','{$data['category_id']}', '{$data['description']}','{$data['price']}','{$data['sku']}','{$data['inventory']}','{$data['image']}')";	
	return $db_connection->query($SQL);	

}


function get_cat(){
	global $db_connection;
	$table_name = get_table_name('category');
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





