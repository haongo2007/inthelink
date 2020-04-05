jQuery(document).ready(function($) {
	$('.add-cart').click(function(event) {
		var qty = $('input[name="quantity"]').val()
		var pid = $(this).attr('id');
		$.ajax({
			url: window.base_url+'cart/add',
			type: 'POST',
			data: {qty: qty, pid: pid},
		})
		.done(function(data) {
			console.log(data);
			console.log("success");
		})
		.fail(function() {
			console.log("error");
		})
		
	});
});