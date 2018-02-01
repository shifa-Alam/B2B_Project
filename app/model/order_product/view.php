<?php

function view_product(){
	
	global $db_connection;
	$table_name = get_table_name('products');
	$SQL = "SELECT * FROM {$table_name}";
	
	return $db_connection->query($SQL);	
}
function del_product_ById(){

	global $db_connection, $PARAMETERS;
	$table_name = get_table_name('products');
	$id = $PARAMETERS[0];
	$SQL="DELETE  FROM {$table_name} WHERE id='{$id}'";
	return $db_connection->query($SQL);

}