<?php
user_access(array(1));


// Saving the data
if(is_post()){

	$title			= get_string($_POST['title']);
	$description	= get_string($_POST['description']);
	
	if($title == false || $description == false ){
		$MESSAGE[] = array('type' => 'error', 'message' => 'Invalid field Requirement.');
	}
	elseif(empty($title) || empty($description) ){
		$MESSAGE[] = array('type' => 'error', 'message' => 'Field Must not be empty!.');
	}
	else{
	$db_return = add_category(
		array(
			'title'			=> $title,
			'description' 	=> $description,
		)	
	);

	if($db_return === true) $MESSAGE[] = array('type' => 'success', 'message' => 'Category has been saved successfully');
		else $MESSAGE[] = array('type' => 'error', 'message' => 'Category could not been saved.');
	}
}