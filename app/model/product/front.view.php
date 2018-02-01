<?php

function view_product(){
	
	global $db_connection;
	$table_name = get_table_name('products');
	$SQL = "SELECT * FROM {$table_name}";
	
	$resource = $db_connection->query($SQL);
	$results = array();
	foreach($resource as $re){
		$re['price'] = get_product_price(  $re['price']);
		$results[] = $re;
	}
	return $results;
}

function get_product_price( $price){
	
	$user_data = get_current_user_data();

	if($user_data) {
		
		if($user_data['user_role'] == 1) return $price;
			else return  $price + (  $price / 100 ) *  $user_data['discount'];

	}else return "<a href='index.php?c=user&a=login'>Login for price</a>";

}