<?php

function get_user_ById(){

	global $db_connection, $PARAMETERS;
	$table_name = get_table_name('users');
	$id = $PARAMETERS[0];
	$SQL="SELECT * FROM {$table_name} WHERE id='{$id}'";
	return $db_connection->query($SQL);

}


function update_user(array $data){
	
	global $db_connection;
	$table_name = get_table_name('users');
	$SQL = "UPDATE {$table_name} SET user_name='{$data['user_name']}', email='{$data['email']}', full_name='{$data['full_name']}', company_name='{$data['company_name']}', address='{$data['address']}', contact_no='{$data['contact_no']}', discount='{$data['discount']}' WHERE id ='{$data['id']}'";
	return $db_connection->query($SQL);	

}