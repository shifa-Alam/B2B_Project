<?php
function get_order_ById(){

	global $db_connection, $PARAMETERS;
	$table_name = get_table_name('orders');
	$id = $PARAMETERS[0];
	$SQL="SELECT * FROM {$table_name} WHERE id='{$id}'";
	return $db_connection->query($SQL);

}
function update_order(array $data){
	
	global $db_connection;
	$table_name = get_table_name('orders');
	$SQL = "UPDATE {$table_name} SET user_id ='{$data['user_id']}', shipping_method_id ='{$data['shipping_method_id']}', total_price ='{$data['total_price']}', discount ='{$data['discount']}', product_cart ='{$data['product_cart']}', date ='{$data['date']}', comments ='{$data['comments']}' WHERE id ='{$data['id']}'";
	
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