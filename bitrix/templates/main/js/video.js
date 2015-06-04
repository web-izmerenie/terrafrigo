$(function () {
	'use strict';
	
	function PlayVideo(){
		var play = $('.production-video > img');
		var target = $('.production-video > iframe');
		$(target).attr('src', $(target, parent).attr('src'));
        
		play.click(function(){
			$(play).css({'opacity': 0,
                        'z-index': 0});
			$(target).attr('src', $(target, parent).attr('src') + '?autoplay=1').css('z-index', 1); 
		});
	}
	
	PlayVideo();
});