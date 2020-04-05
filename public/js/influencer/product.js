jQuery(document).ready(function($) {
	$('.send-request').click(function(event) {
		var _this = $(this);
		var message = _this.parents('.col-12').find('.value-message').val();
		if (message.length < 3) {
			theme.showNotification('top','right','Message must be over 3 characters !',3);
			return false;
		}
		var pid = _this.parents('.col-12').find('.value-message').attr('pid');
		var sid = _this.parents('.col-12').find('.value-message').attr('sid');
		var type = _this.parents('.col-12').find('.value-message').attr('type');
		_this.addClass('evt-stoped');
		$.ajax({
			url: window.base_url+'influencer/request/sample',
			type: 'POST',
			data: {message: message,p_id: pid,s_id: sid,type: type},
		})
		.done(function(data) {
			_this.removeClass('.evt-stoped');
			$('.value-message').val('');
        	setTimeout(function() { $('.modal').modal('hide'); }, 500);
			if (data == 200) {
				theme.showNotification('top','right','Send a sample request successfully',2);
			}else{
				theme.showNotification('top','right','Send a sample request unsuccessful',3);
			}
		})
	});
	
});