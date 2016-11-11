$('.comment-form textarea').on('focus blur', function() {
	$('.comment-form').toggleClass('focused');
});