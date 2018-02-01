<?php
if(is_post()){
	$db_return = add_order_product(

		array(
		     	'order_id'       => $_POST['order_id'],
			 	'product_id'     => $_POST['product_id'],
				'product_amount' => $_POST['description'],
			'total_price'		 => $_POST['total_price'],
		)
	
	);

	if($db_return === true) $MESSAGE[] = array('type' => 'success', 'message' => 'Order product has been saved successfully');
		else $MESSAGE[] = array('type' => 'error', 'message' => 'Order product could not been saved.');
}
$getcat =get_cat();
$getpat =get_pat();