<?php
function del_shipment_ById($id){

	global $db_connection, $PARAMETERS;
	$table_name = get_table_name('shipment');
	$SQL="DELETE  FROM {$table_name} WHERE id='{$id}'";
	return $db_connection->query($SQL);

}
function view_shipment(){
	
	global $db_connection;
	$table_name = get_table_name('shipment');
	$SQL = "SELECT * FROM {$table_name}";
	
	return $db_connection->query($SQL);	
}
