<?php 
user_access(array(1));

if(is_post()){
	$db_return = edit_category(

		array(
			'id' => $_POST['id'],
			'title' => $_POST['title'],
			'description' => $_POST['description'],
		)
	);

	if($db_return === true) $MESSAGE[] = array('type' => 'success', 'message' => 'Category has been Updated successfully');
		else $MESSAGE[] = array('type' => 'error', 'message' => 'Category could not been Updated.');
}

$getcat = get_category_ById();