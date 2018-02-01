<?php

function del_order_ById($id){

	global $db_connection, $PARAMETERS;
	$table_name = get_table_name('orders');
	
	$SQL="DELETE  FROM {$table_name} WHERE id='{$id}'";
	return $db_connection->query($SQL);

}
function view_order(){
	
	global $db_connection;
	$table_name = get_table_name('orders');
	$SQL = "SELECT * FROM {$table_name}";
	
	return $db_connection->query($SQL);	
}
