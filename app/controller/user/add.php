<?php
user_access(array(1));
if(is_post()){
	$user_role		= get_number($_POST['user_role']);
	$user_name		= get_string($_POST['user_name']);
	$email			= get_string($_POST['email']);
	$email 			= filter_var($email, FILTER_VALIDATE_EMAIL);
	$password		= $_POST['password'];
	$full_name		= get_string($_POST['full_name']);
	$company_name	= get_string($_POST['company_name']);
	$address		= get_string($_POST['address']);
	$contact_no		= get_string($_POST['contact_no']);

	$discount		= get_number($_POST['discount']);
	
	if($user_role == false || $user_name == false || $email == false || $password == false )
	{
		$MESSAGE[] = array('type' => 'error', 'message' => 'Invalid field Requirement.');
	}
	elseif(empty($user_role) || empty($user_name)  || empty($email)|| empty($password))
	{
		$MESSAGE[] = array('type' => 'error', 'message' => 'Field Must not be empty!.');
	}
	else{
	
	$db_return = add_user(

		array(
			'user_role'  	=> $user_role,
			'user_name'  	=> $user_name,
			'email'    	 	=> $email,
			'password' 	 	=> sha1($password),
			'full_name' 	=> $full_name,
			'company_name'	=> $company_name,
			'address'   	=> $address,
			'contact_no' 	=> $contact_no,
			'discount'  	=> $discount,
			

			
		)
	
	);

	if($db_return === true) $MESSAGE[] = array('type' => 'success', 'message' => 'User has been saved successfully');
		else $MESSAGE[] = array('type' => 'error', 'message' => 'User could not been saved.');
	}
}