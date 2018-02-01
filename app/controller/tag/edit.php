<?php 
user_access(array(1));
if(is_post()){
	$db_return = edit_tag(

		array(
			'id' => $_POST['id'],
			'title' => $_POST['title'],
			'description' => $_POST['description'],
		)
	);

	if($db_return === true) $MESSAGE[] = array('type' => 'success', 'message' => 'Tag has been Updated successfully');
		else $MESSAGE[] = array('type' => 'error', 'message' => ' Tag not been Updated.');
}

$getcat = get_tag_ById();