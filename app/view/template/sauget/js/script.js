B2B = {};

(function($){$(document).ready(function(){

B2B['add_to_cart'] = function (product_id){
	
	// Post Ajax Call
	$.post(
		'index.php?c=product&a=front.add-to-cart&ajax=true',
		{
			'product_id': product_id
		},
		function(data){
			alert(data);
		}
	);

}

})})(jQuery);