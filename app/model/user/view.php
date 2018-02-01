<?php
function del_user_ById($id){

	global $db_connection, $PARAMETERS;
	$table_name = get_table_name('users');
	
	$SQL="DELETE  FROM {$table_name} WHERE id='{$id}'";
	return $db_connection->query($SQL);

}


function view_user(){
	
	global $db_connection;
	$table_name = get_table_name('users');
	$SQL = "SELECT * FROM {$table_name}";	
	return $db_connection->query($SQL);	
}