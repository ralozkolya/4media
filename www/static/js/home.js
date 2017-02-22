var scrolling = false;
var openOverlay = false;

$(function() {

	$('body').scrollspy({target: '#navigation-container'});

	$('.nav a').click(function(e) {
		
		e.preventDefault();

		var target = $($(this).attr('href'));

		scrollTo(target);

		toggleMenu();
	});

	$('.projects-pagination-arrow').click(function(e) {

		e.preventDefault();

		var offset = $('.projects').scrollLeft();

		if($(this).hasClass('left')) {
			offset -= $('.project').outerWidth();
		}

		else {
			offset += $('.project').outerWidth();
		}

		$('.projects').stop().animate({
			scrollLeft: offset,
		});
	});

	$('.type-button').click(function() {

		$('.type-button').removeClass('active');

		var type = $(this).addClass('active').attr('data-type');

		if(type === 'all') {
			$('.project').show();
		} else {
			$('.project').hide();
			$('.project[data-type='+type+']').show();
		}
	});

	$('.overlay-type-button').click(function() {

		$('.overlay-type-button').removeClass('active');

		var type = $(this).addClass('active').attr('data-type');

		if(type === 'all') {
			$('.overlay-project').show();
		} else {
			$('.overlay-project').hide();
			$('.overlay-project[data-type='+type+']').show();
		}
	});

	$('.open-overlay').click(function(e) {

		e.preventDefault();

		closeOverlay();

		openOverlay = true;

		var target = $(this).attr('data-opens');

		history.pushState(null, null, '#'+target.substring(1));

		$(target).show();
		$('body').css('overflow-y', 'hidden');

		setTimeout(function() {
			$(target).addClass('active');
		}, 0);
	});

	$('.overlay-page .menu-close').click(closeOverlay);

	$('.scrollpane').nanoScroller({
		iOSNativeScrolling: false
	});

	$(window).on('popstate', closeOverlay);


	$(document).on('wheel', function(e) {

		if(!openOverlay && !e.ctrlKey) {

			e.preventDefault();

			var delta = e.originalEvent.deltaY;
			var linkElement;

			if(delta > 0) {
				linkElement = $('.navigation .active').next().children('a');
			} else {
				linkElement = $('.navigation .active').prev().children('a');
			}

			if(linkElement.length) {
				scrollTo($($(linkElement).attr('href')));
			}
		}
	});
});

function closeOverlay(page) {

	openOverlay = false;

	history.pushState(null, null, '#');

	var parent = $('.overlay-page.active');
	$('body').css('overflow-y', 'auto');

	parent.removeClass('active');

	setTimeout(function() {
		parent.hide();
	}, 500);
}

function scrollTo(target) {

	if(scrolling) return;

	scrolling = true;

	$('html, body').stop().animate({
		scrollTop: target.offset().top,
	}, 500, function() {
		scrolling = false;
	});
}
