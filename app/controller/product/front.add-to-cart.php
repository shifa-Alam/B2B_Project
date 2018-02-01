<?php 
if(is_post()){
	// Filter the Id
	add_to_cart($_POST['product_id']);
}