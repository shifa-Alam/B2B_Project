<?php
add_log('model/tag/add.php');

function add_tag(array $data){
	
	global $db_connection;
	$table_name = get_table_name('tag');
	$SQL = "INSERT INTO {$table_name}(title, description) VALUES('{$data['title']}', '{$data['description']}');";
	
	return $db_connection->query($SQL);	
}