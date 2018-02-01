<?php

function add_to_cart($product_id){
	
	if(!session_id()) session_start();
	if(!isset($_SESSION['cart'])) $_SESSION['cart'] = array();
	$_SESSION['cart'] = $product_id;

}

function get_cart_details(){

	global $db_connection;
	
	$cart_details = array(); // Details of the cart will go here.

	// Retriving list of product id
	if(!session_id()) session_start();
	
	if(isset($_SESSION['cart'])){

		$cart_details['status'] = 'has-product'; // empty / has-product is the status codes
		$product_ids = $_SESSION['cart'];

		$total_price = 0;
		// Fetching product details from the database
		foreach ($product_ids as $id) {
			
			$table_name = get_table_name('products');
			$SQL = "SELECT * FROM {$table_name} WHERE id={$id};";
			$result = $db_connection->query($SQL);
			$reslut = $result->fetch_assoc();
			$result['price'] = get_product_price($result['price']);
			$total_price += $reslut['price'];
			$cart_details['products'][] = $reslut;

		}

		$cart_details['total_price'] = $total_price; // Total Price of all the products

	} else{
		$cart_details['status'] = 'empty'; // empty / has-product is the status codes
	}

	return $cart_details;
}

if(function_exists('get_product_price')):

function get_product_price( $price){
	
	$user_data = get_current_user_data();

	if($user_data) {
		
		if($user_data['user_role'] == 1) return $price;
			else return  $price + (  $price / 100 ) *  $user_data['discount'];

	}else return "<a href='index.php?c=user&a=login'>Login for price</a>";

}

endif;