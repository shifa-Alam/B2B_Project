/*
This is a custom script file
*/

(function($){$(document).ready(function(){

$('#seach-bar').on('keyup', function(){
	$.get(
		'index?c=product&a=search&ajax&' + $('#seach-bar').val(),
		function (data){
			alert(data);
		}
	);
});

});})(jQuery);