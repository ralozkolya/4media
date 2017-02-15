$(function() {
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
});