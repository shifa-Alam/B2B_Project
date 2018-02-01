<?php
function del_inventory_ById($id){

	global $db_connection, $PARAMETERS;
	$table_name = get_table_name('inventory');
	$SQL="DELETE  FROM {$table_name} WHERE id='{$id}'";
	if( $db_connection->query($SQL) ) return true;
		else return false;


}
function view_inventory(){
	
	global $db_connection;
	$table_name = get_table_name('inventory');
	$SQL = "SELECT * FROM {$table_name}";
	
	return $db_connection->query($SQL);	
}


