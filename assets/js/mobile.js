$('.mobile-menu-btn').on('click', function() {
	if($(this).hasClass('active')) {
		$('.mobile-menu-btn').removeClass('active');
	} else {
		$('.mobile-menu-btn').addClass('active');
	}
});