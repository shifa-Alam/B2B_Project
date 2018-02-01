<?php

function get_shipment_ById(){

	global $db_connection, $PARAMETERS;
	$table_name = get_table_name('shipment');
	$id = $PARAMETERS[0];
	$SQL="SELECT * FROM {$table_name} WHERE id='{$id}'";
	return $db_connection->query($SQL);

}

function update_shipment(array $data){
	
	global $db_connection;
	$table_name = get_table_name('shipment');
	$SQL = "UPDATE {$table_name} SET name='{$data['name']}', description='{$data['description']}' WHERE id ='{$data['id']}'";
	return $db_connection->query($SQL);	

}