<?php
user_access(array(1));
$get_product = get_product_id();
$get_user = get_user_id();
if(is_post()){
	$product_id		= get_number($_POST['product_id']);
	$user_id		= get_number($_POST['user_id']);
	$title			= get_string($_POST['title']);
	$date			= $_POST['date'];	
	$amount			= get_number($_POST['amount']);
	$description	= get_string($_POST['description']);
	
	
	if($product_id == false || $user_id == false || $title == false || $date == false || $amount == false|| $description == false){
		$MESSAGE[] = array('type' => 'error', 'message' => 'Invalid field Requirement.');
	}
	elseif(empty($product_id) || empty($user_id)  || empty($title)|| empty($date) || empty($amount) || empty($description)){
		$MESSAGE[] = array('type' => 'error', 'message' => 'Field Must not be empty!.');
	}
	else
	{
		$db_return = add_inventory(

			array(
				'product_id'  => $product_id,
				'user_id'     => $user_id,
				'title' 	  => $title,
				'date'		  => $date,
				'amount'	  => $amount,
				'description' => $description,

			)
		
		);

		if($db_return === true) $MESSAGE[] = array('type' => 'success', 'message' => 'Inventory has been saved successfully');
			else $MESSAGE[] = array('type' => 'error', 'message' => 'Inventory could not been saved.');
	}
}
