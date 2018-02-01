<?php
user_access(array(1));
if(is_post()){

	$check_title		= get_string($_POST['title']);
	$check_proCode		= get_string($_POST['Product_code']);
	$check_catId		= get_number($_POST['category_id']);
	$check_desc			= get_string($_POST['description']);
	$check_price		= get_number($_POST['price']);
	$check_sku			= get_number($_POST['sku']);
	$check_inventory	= get_number($_POST['inventory']);

	if($check_title == false || $check_proCode == false || $check_catId == false ||$check_desc == false || $check_price == false || $check_sku == false ||$check_inventory == false){
		$MESSAGE[] = array('type' => 'error', 'message' => 'Invalid field Requirement.');
	}
	elseif($check_title == NULL || $check_proCode == NULL || $check_catId == NULL ||$check_desc == NULL || $check_price == NULL|| $check_sku == NULL ||$check_inventory == NULL){
		$MESSAGE[] = array('type' => 'error', 'message' => 'Field Must not be empty!.');
	}
	else{
		$db_return = add_product(

		array(
			'title'			=> $check_title,
			'Product_code'	=> $check_proCode,
			'category_id'	=> $check_catId,
			'description'	=> $check_desc,
			'price'		 	=> $check_price,
			'sku'		  	=> $check_sku,
			'inventory'	 	=> $check_inventory,
			'image'	     	=> $_POST['image'],
			
		)
	
	);

	if($db_return === true) $MESSAGE[] = array('type' => 'success', 'message' => 'Product has been saved successfully');
		else $MESSAGE[] = array('type' => 'error', 'message' => 'Product could not been saved.');
	
	}

}
$getcat =get_cat();


