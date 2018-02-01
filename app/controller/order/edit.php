<?php 
user_access(array(1));
if(is_post()){
	$db_return = update_order(

		array(
			'id' 					=> $_POST['id'],
			'user_id' 				=> $_POST['user_id'],
			'shipping_method_id' 	=> $_POST['shipping_method_id'],
			'total_price'			=> $_POST['total_price'],
			'discount'				=> $_POST['discount'],
			'product_cart' 			=> $_POST['product_cart'],
			'date' 					=> $_POST['date'],
			'comments' 				=> $_POST['comments'],
			
		)
	);

	if($db_return === true) $MESSAGE[] = array('type' => 'success', 'message' => 'Order has been Updated successfully');
		else $MESSAGE[] = array('type' => 'error', 'message' => 'Order could not been Updated.');
}



$get_order 	  =get_order_ById();
$get_shipment = get_shipment_Method();
$get_user 	  = get_user();