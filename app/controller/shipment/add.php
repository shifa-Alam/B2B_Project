<?php
user_access(array(1));
if(is_post()){
	$name			= get_string($_POST['name']);
	$description	= get_string($_POST['description']);
	
	if($name == false || $description == false ){
		$MESSAGE[] = array('type' => 'error', 'message' => 'Invalid field Requirement.');
	}
	elseif(empty($name) || empty($description) ){
		$MESSAGE[] = array('type' => 'error', 'message' => 'Field Must not be empty!.');
	}
	else{	
		$db_return = add_shipment(

			array(
				'name' => $name,
				'description' => $description,			
			)		
		);
		if($db_return === true) $MESSAGE[] = array('type' => 'success', 'message' => 'Product has been saved successfully');
			else $MESSAGE[] = array('type' => 'error', 'message' => 'Product could not been saved.');
	}
}