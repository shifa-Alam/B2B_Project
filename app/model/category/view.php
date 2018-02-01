<?php
function del_category_ById($id){

	global $db_connection, $PARAMETERS;
	$table_name = get_table_name('category');
	$SQL="DELETE  FROM {$table_name} WHERE id='{$id}'";
	return $db_connection->query($SQL);

}



function view_category(){
	
	global $db_connection;
	$table_name = get_table_name('category');
	$SQL = "SELECT * FROM {$table_name}";
	
	return $db_connection->query($SQL);	
}

