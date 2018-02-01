<?php 
user_access(array(1));
if(is_post()){
	$db_return = update_user(

		array(
			'id' 			=> $_POST['id'],
			'user_name' 	=> $_POST['user_name'],
			'email' 		=> $_POST['email'],
			'full_name'		=> $_POST['full_name'],
			'company_name'	=> $_POST['company_name'],
			'address'		=> $_POST['address'],
			'contact_no'	=> $_POST['contact_no'],
			'discount'		=> $_POST['discount'],
			
		)
	);

	if($db_return === true) $MESSAGE[] = array('type' => 'success', 'message' => 'User Info has been Updated successfully');
		else $MESSAGE[] = array('type' => 'error', 'message' => 'User Info could not been Updated.');
}

$getUser = get_user_ById();