
/*--------------------------------------------------------------
Draggable
alternative to jQuery UI’s draggable
based on comments from: http://css-tricks.com/snippets/jquery/draggable-without-jquery-ui/
usage example: $('.post-thumbnail, article header').draggable();
--------------------------------------------------------------*/
(function($) {
	if (!jQuery().draggable) {
		$.fn.draggable = function() {
			this
				.css('cursor', 'move')
				.on('mousedown touchstart', function(e) {
					var $dragged = $(this);

					var x = $dragged.offset().left - e.pageX;
						

					
					$(window)
						.on('mousemove.draggable touchmove.draggable', function(e) {
							$dragged
								.css({ 'transition': 'transform .3s', 'bottom': 'auto', 'right': 'auto'})
								.offset({
									left: x + e.pageX,
								})
								.find('a').one('click.draggable', function(e) {
									e.preventDefault();
								});

							e.preventDefault();
						})
						.one('mouseup touchend touchcancel', function() {
							$(this).off('mousemove.draggable touchmove.draggable click.draggable');
							$.fn.draggable.stack++;
						});

					e.preventDefault();
				});
			return this;
		};
	}
})(jQuery);