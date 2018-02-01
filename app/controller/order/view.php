<?php

user_access(array(1));
if(is_post()){
	if( del_order_ByID( $_POST['id'] ) ) $MESSAGE[] = array('type' => 'success', 'message' => 'The item has been deleted successfully.');
		else $MESSAGE[] = array('type'=> 'error', 'message' => 'The item could not be deleted.'); 
}
$db_return = view_order();

	