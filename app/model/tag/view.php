<?php

function del_tag_ById($id){

	global $db_connection, $PARAMETERS;
	$table_name = get_table_name('tag');
	
	$SQL="DELETE  FROM {$table_name} WHERE id='{$id}'";
	return $db_connection->query($SQL);

}

function view_tag(){
	
	global $db_connection;
	$table_name = get_table_name('tag');
	$SQL = "SELECT * FROM {$table_name}";
	
	return $db_connection->query($SQL);	
}

