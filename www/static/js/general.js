$(function() {
	
	$('.menu-toggle, .menu-close').click(toggleMenu);

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