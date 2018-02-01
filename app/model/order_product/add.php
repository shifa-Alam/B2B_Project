<?php

function add_order_product(array $data){
	global $db_connection;
	$table_name = get_table_name('order_product');
	$SQL = "INSERT INTO {$table_name}( 	order_id,product_id, product_amount,total_price) VALUES('{$data['order_id']}', '{$data['product_id']}', '{$data['product_amount']}','{$data['total_price']}')";	
	return $db_connection->query($SQL);	

}
function get_cat(){
	global $db_connection;
	$table_name = get_table_name('orders');
    $SQL= "SELECT * FROM {$table_name}";
    return $db_connection->query($SQL);
    
function get_pat(){
	global $db_connection;
	$table_name = get_table_name('products');
    $SQL= "SELECT * FROM {$table_name}";
    return $db_connection->query($SQL);
    
}