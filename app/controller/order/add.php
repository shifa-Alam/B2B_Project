<?php
user_access(array(1));
if(is_post()){

	$user_id			= get_number($_POST['user_id']);
	$shipping_method_id	= get_number($_POST['shipping_method_id']);
	$total_price		= get_number($_POST['total_price']);
	$discount			= get_number($_POST['discount']);
	$product_cart		= get_number($_POST['product_cart']);
	$date				= $_POST['date'];
	$comments			= get_string($_POST['comments']);
	
	
	if($user_id == false || $shipping_method_id == false || $total_price == false || $discount == false || $product_cart == false || $date == false || $comments == false ){
		$MESSAGE[] = array('type' => 'error', 'message' => 'Invalid field Requirement.');
	}
	elseif(empty($user_role) || empty($user_name)  || empty($email)|| empty($password)){
		$MESSAGE[] = array('type' => 'error', 'message' => 'Field Must not be empty!.');
	}
	else{
		$db_return = add_order(

			array(
				'user_id'			 => $user_id,
				'shipping_method_id' => $shipping_method_id,
				'total_price'		 => $total_price,
				'discount'		 	 => $discount,
				'product_cart'		 => $product_cart,
				'date'		 		 => $date,
				'comments'		     => $comments,
				
			)
		
		);

		if($db_return === true) $MESSAGE[] = array('type' => 'success', 'message' => 'Order has been saved successfully');
			else $MESSAGE[] = array('type' => 'error', 'message' => 'Order could not been saved.');
	}
}
$get_shipment = get_shipment_Method();
$get_user = get_user();