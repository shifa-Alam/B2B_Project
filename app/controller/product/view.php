<?php

user_access(array(1));
if(is_post()){
	if( del_product_ById( $_POST['id'] ) ) $MESSAGE[] = array('type' => 'success', 'message' => 'The item has been deleted successfully.');
		else $MESSAGE[] = array('type'=> 'error', 'message' => 'The item could not be deleted.'); 
}
// global $APP_LAYOUT = 'sauget';

$db_return   = view_product();

	