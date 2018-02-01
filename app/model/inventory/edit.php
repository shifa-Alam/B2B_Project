<?php
function get_inventory_ById(){

	global $db_connection, $PARAMETERS;
	$table_name = get_table_name('inventory');
	$id = $PARAMETERS[0];
	$SQL="SELECT * FROM {$table_name} WHERE id='{$id}'";
	return $db_connection->query($SQL);

}
function update_inventory(array $data){
	
	global $db_connection;
	$table_name = get_table_name('inventory');
	$SQL = "UPDATE {$table_name} SET product_id	='{$data['product_id']}', user_id ='{$data['user_id']}', date ='{$data['date']}', amount ='{$data['amount']}', title ='{$data['title']}', description ='{$data['description']}' WHERE id ='{$data['id']}'";
	
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