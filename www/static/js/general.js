$(function() {
	
	$('.menu-toggle, .menu-close').click(toggleMenu);

	$('body').scrollspy({target: '#navigation-container'});

	$('.nav a').click(function(e) {
		
		e.preventDefault();

		var target = $($(this).attr('href'));

		$('html, body').stop().animate({
			scrollTop: target.offset().top,
		}, 500);
	});

	$('.wrapper').click(function() {

		if($('.menu').hasClass('shifted-menu')) {
			toggleMenu();
		}
	});

});

function toggleMenu() {
	$('.wrapper').toggleClass('shifted-wrapper');
	$('.menu').toggleClass('shifted-menu');
	$('.menu-button').toggleClass('gone');
}