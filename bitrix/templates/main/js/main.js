$(function () {
	'use strict';

	$('.js-imgLiquidFill').imgLiquid({
		fill: true,
		horizontalAlign: 'center',
		verticalAlign: 'center'
	});

	(function () {
		$('.js-main-slider').bxSlider({
			mode: 'fade',
			controls: false,
			auto: true
		});
	}());
    $('a').click(function(){
        $(this).css({'textDecoration':'none'});
    });
	// go to top
	$('.js-to-top').click(function () {
		$('html, body').animate({ scrollTop: 0 }, 'slow');
		return false;
	});

	(function () {
		var $button = $('.additional-text__button'),
			$container = $('.additional-text__container');

		$button.on('click', function () {
			if ($button.hasClass('active')) {
				$button.removeClass('active');
				$container.stop(true).slideUp();
			} else {
				$button.addClass('active');
				$container.stop(true).slideDown();
			}
		});
	}());
    var widthWin = $(document).width();
    if(widthWin >=1600){
       var $newsItem = $('.main-news__item').width();
        $('.main-news__link').height($newsItem * 1.19);
    }
    else{

    }
    $(window).resize(function(){
        if($(document).width() >=1600){
            var $newsItem = $('.main-news__item').width();
            $('.main-news__link').height($newsItem * 1.2);

        }else{

        }
    });
    if(widthWin <= 1600){
        var $newsItem = $('.main-news__item').width();
        $('.main-news__link').height($newsItem * 1.145);
    }
    else{

    }
    $(window).resize(function(){
        if($(document).width() <= 1600){
            var $newsItem = $('.main-news__item').width();
            $('.main-news__link').height($newsItem *1.145);

        }else{

        }
    });
    
    /*Inside left menu*/
   	if($('.fixed-left-menu').length) {
   		$('body').addClass('fixed-l');
		$('.fixed-left-menu').hover(function(){
			$(this).removeClass('close');
		},function(){
			$(this).addClass('close');
		})
	}
	
	/*Bubl production*/
	$('.production-map .marker a.span').click(function(event){
		if(!$(this).hasClass('active')) {			
			$('.production-map .marker a.span').removeClass('active');
			$('.production-map .marker .bubl').hide()
			$(this).next().fadeToggle();	
			$(this).toggleClass('active');	
		}
		else {
			$('.production-map .marker .bubl').hide();
			$('.production-map .marker a.span').removeClass('active');
		}
		event.preventDefault();
	})
	$('.production-map .marker .bubl .close').click(function(event){
		$('.production-map .marker a.span').removeClass('active');
		$(this).parent().fadeOut();
		event.preventDefault();
	})
    
    /*Placeholder*/
  	if (!window.console){ console = {log: function() {}} };
  	$('.placeholder-1').focusin(function(e) { console.log($(this).val()); if($(this).val() == 'Телефон *'){ $(this).val(''); } });
	$('.placeholder-1').focusout(function(e) { if($(this).val() == ''){ $(this).val('Телефон *'); } });
	
	$('.placeholder-2').focusin(function(e) { console.log($(this).val()); if($(this).val() == 'Фио*'){ $(this).val(''); } });
	$('.placeholder-2').focusout(function(e) { if($(this).val() == ''){ $(this).val('Фио*'); } });
	
	$('.placeholder-3').focusin(function(e) { console.log($(this).val()); if($(this).val() == 'E-mail *'){ $(this).val(''); } });
	$('.placeholder-3').focusout(function(e) { if($(this).val() == ''){ $(this).val('E-mail *'); } });
	
	/*Style select*/
	if($(".style-select").length) {
		$(function(){
			/*$('select.style-select').customSelect();*/
			$("select.style-select").selectBoxIt();
		});
	}
	
	$('.popup-open').click(function(event){
		var $popup = $(this).attr('href');
		$($popup).fadeIn();
		event.preventDefault();
		$('body').addClass('overflow-none');
	})
	$('.popup-form .close').click(function(event){
		$(this).parent().parent().fadeOut();		
		$('body').removeClass('overflow-none');
		event.preventDefault();
	})
	
});

