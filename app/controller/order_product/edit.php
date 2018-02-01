<?php 
if(is_post()){
	$db_return = update_product(

		array(
			'id' 			=> $_POST['id'],
			'title' 		=> $_POST['title'],
			'category_id' 	=> $_POST['category_id'],
			'description'	=> $_POST['description'],
			'price'			=> $_POST['price'],
			'sku' 			=> $_POST['sku'],
			'inventory' 	=> $_POST['inventory'],
			'image' 		=> $_POST['image'],
			
		)
	);

	if($db_return === true) $MESSAGE[] = array('type' => 'success', 'message' => 'Product has been Updated successfully');
		else $MESSAGE[] = array('type' => 'error', 'message' => 'Product could not been Updated.');
}

$getProduct = get_product_ById();
$getcat =get_cat();