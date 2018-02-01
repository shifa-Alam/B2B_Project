<?php

function update_product(array $data){
	
	global $db_connection;
	$table_name = get_table_name('products');
	$SQL = "UPDATE {$table_name} SET title ='{$data['title']}',product_code ='{$data['product_code']}', category_id ='{$data['category_id']}', description ='{$data['description']}', price ='{$data['price']}', sku ='{$data['sku']}', inventory ='{$data['inventory']}', image ='{$data['image']}' WHERE id ='{$data['id']}'";
	
	return $db_connection->query($SQL);	

}

function get_product_ById(){

	global $db_connection, $PARAMETERS;
	$table_name = get_table_name('products');
	$id = $PARAMETERS[0];
	$SQL="SELECT * FROM {$table_name} WHERE id='{$id}'";
	return $db_connection->query($SQL);

}
function get_cat(){
	global $db_connection;
	$table_name = get_table_name('category');
    $SQL= "SELECT * FROM {$table_name}";
    return $db_connection->query($SQL);
    
}


