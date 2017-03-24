$(function() {
	
	$('.menu-toggle, .menu-close').click(toggleMenu);

	$('.wrapper').click(function() {

		if($('.menu').hasClass('shifted-menu')) {
			toggleMenu();
		}
	});


	$('.message-form').submit(function() {

		var btn = $('.btn', this);

		btn[0].disabled = true;
		btn.val(LANG.sending);

		$.ajax({
			url: URL.locale + 'send_mail',
			method: 'post',
			data: $(this).serialize(),
			success: function(r) {
				btn.val(LANG.sent);
			},
			error: function() {
				btn[0].disabled = false;
				btn.val(LANG.send);
			}
		});

		return false;
	});

});

function toggleMenu() {
	$('.wrapper').toggleClass('shifted-wrapper');
	$('.menu').toggleClass('shifted-menu');
	$('.menu-button').toggleClass('gone');
}