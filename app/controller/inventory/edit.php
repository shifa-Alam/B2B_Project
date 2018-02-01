<?php 
user_access(array(1));
if(is_post()){
	$db_return = update_inventory(

		array(
			'id' 					=> $_POST['id'],
			'product_id' 			=> $_POST['product_id'],
			'user_id' 				=> $_POST['user_id'],
			'date'					=> $_POST['date'],
			'amount'				=> $_POST['amount'],
			'title' 				=> $_POST['title'],
			'description' 			=> $_POST['description'],
			
			
		)
	);

	if($db_return === true) $MESSAGE[] = array('type' => 'success', 'message' => 'Inventory has been Updated successfully');
		else $MESSAGE[] = array('type' => 'error', 'message' => 'Inventory could not been Updated.');
}



$get_inventory  = get_inventory_ById();
$get_product 	= get_product_id();
$get_user 	    = get_user_id();