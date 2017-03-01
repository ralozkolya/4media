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

		if($(this).hasClass('left')) {
			$('.projects').slick('slickPrev');
		}

		else {
			$('.projects').slick('slickNext');
		}
	});

	$('.type-button').click(function() {

		$('.type-button').removeClass('active');

		var type = $(this).addClass('active').attr('data-type');
		
		$('.projects').slick('slickUnfilter');
		
		if(type !== 'all') {
			$('.projects').slick('slickFilter', '[data-type='+type+']');
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

		var overlayImage = $(target + ' .overlay-image');
		overlayImage.attr('src', overlayImage.attr('data-src'));

		setTimeout(function() {
			$(target).addClass('active');
		}, 0);
	});

	$('.overlay-page .menu-close').click(closeOverlay);

	$('.scrollpane').nanoScroller({
		iOSNativeScrolling: false
	});

	$(window).on('popstate', closeOverlay);


	$('.wrapper').on('wheel', function(e) {

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

	$('.projects').slick({
		autoplay: true,
		infinite: true,
		slidesToShow: 3,
		slidesToScroll: 3,
		nextArrow: false,
		prevArrow: false,
		responsive: [
			{
				breakpoint: 767,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 2,
				}
			},
			{
				breakpoint: 460,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1,
				}
			}
		]
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
