<?php 
user_access(array(1));
if(is_post()){
	$db_return = update_shipment(

		array(
			'id' => $_POST['id'],
			'name' => $_POST['name'],
			'description' => $_POST['description'],
		)
	);

	if($db_return === true) $MESSAGE[] = array('type' => 'success', 'message' => 'Shipment method has been Updated successfully');
		else $MESSAGE[] = array('type' => 'error', 'message' => 'Shipment method could not been Updated.');
}

$getShipment = get_shipment_ById();