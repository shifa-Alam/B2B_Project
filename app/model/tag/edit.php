<?php

function get_tag_ById(){

	global $db_connection, $PARAMETERS;
	$table_name = get_table_name('tag');
	$id = $PARAMETERS[0];
	$SQL="SELECT * FROM {$table_name} WHERE id='{$id}'";
	return $db_connection->query($SQL);

}


function edit_tag(array $data){
	
	global $db_connection;
	$table_name = get_table_name('tag');
	$SQL = "UPDATE {$table_name} SET title='{$data['title']}', description='{$data['description']}' WHERE id ='{$data['id']}'";
	return $db_connection->query($SQL);	

}