<?php
function del_product_ById($id){

	global $db_connection, $PARAMETERS;
	$table_name = get_table_name('products');
	
	$SQL="DELETE  FROM {$table_name} WHERE id='{$id}'";
	return $db_connection->query($SQL);

}

function view_product(){
	
	global $db_connection;
	$table_name = get_table_name('products');
	$SQL = "SELECT * FROM {$table_name}";
	
	return $db_connection->query($SQL);	
}
