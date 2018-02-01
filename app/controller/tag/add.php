<?php
user_access(array(1));

// Saving the data
if(is_post()){
	$db_return = add_tag(

		array(
			'title' => $_POST['title'],
			'description' => $_POST['description'],
		)
	
	);

	if($db_return === true) $MESSAGE[] = array('type' => 'success', 'message' => 'Tag has been saved successfully');
		else $MESSAGE[] = array('type' => 'error', 'message' => 'Tag could not been saved.');
}