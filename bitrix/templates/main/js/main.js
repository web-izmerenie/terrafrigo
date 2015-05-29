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
        $('.production-map .marker .bubl').hide();
        $('.production-map .marker a.span').removeClass('active');
        event.preventDefault();
    });
	$(document).click(function(event){


        if ($(event.target).closest("div.production-map .marker").length) return;

        $('.production-map .marker .bubl').hide();
        $('.production-map .marker a.span').removeClass('active');

        event.stopPropagation();
	})
    
    /*Placeholder*/
  	if (!window.console){ console = {log: function() {}} };
  	$('.placeholder-1').focusin(function(e) { console.log($(this).val()); if($(this).val() == 'Телефон *'){ $(this).val(''); } });
	$('.placeholder-1').focusout(function(e) { if($(this).val() == ''){ $(this).val('Телефон *'); } });
	
	$('.placeholder-2').focusin(function(e) { console.log($(this).val()); if($(this).val() == 'Фио*'){ $(this).val(''); } });
	$('.placeholder-2').focusout(function(e) { if($(this).val() == ''){ $(this).val('Фио*'); } });
	
	$('.placeholder-3').focusin(function(e) { console.log($(this).val()); if($(this).val() == 'E-mail *'){ $(this).val(''); } });
	$('.placeholder-3').focusout(function(e) { if($(this).val() == ''){ $(this).val('E-mail *'); } });
	
	$('.placeholder-4').focusin(function(e) { console.log($(this).val()); if($(this).val() == 'Наименование'){ $(this).val(''); } });
	$('.placeholder-4').focusout(function(e) { if($(this).val() == ''){ $(this).val('Наименование'); } });
	
	$('.placeholder-5').focusin(function(e) { console.log($(this).val()); if($(this).val() == 'Здесь вы можете указать информацию об ограничении габаритов, уровня шума и пр.'){ $(this).val(''); } });
	$('.placeholder-5').focusout(function(e) { if($(this).val() == ''){ $(this).val('Здесь вы можете указать информацию об ограничении габаритов, уровня шума и пр.'); } });
	
	$('.placeholder-6').focusin(function(e) { console.log($(this).val()); if($(this).val() == 'Контактное лицо *'){ $(this).val(''); } });
	$('.placeholder-6').focusout(function(e) { if($(this).val() == ''){ $(this).val('Контактное лицо *'); } });
	
	$('.placeholder-7').focusin(function(e) { console.log($(this).val()); if($(this).val() == 'Название организации *'){ $(this).val(''); } });
	$('.placeholder-7').focusout(function(e) { if($(this).val() == ''){ $(this).val('Название организации *'); } });
	
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
	
	/*UI radiobutton*/
	if($('.radio-btn').length) {
		$( ".radio-btn" ).buttonset();
	}
	
	/*Reviews page*/
	if($('.reviews-innr').length){
		$('.reviews-innr .block').each(function(){
			var $each = $(this).find('.wrapper').height();
			if($each < 210 ) {
				$(this).addClass('non');
			}
		})
		$('.reviews-innr .block').click(function(event){
			if(!$(this).hasClass('non')) {
				$(this).toggleClass('open');
			}
		})
	}
	
	
	/*career list*/
	$('.career-list ul li').click(function(){
		$(this).find('.hid-text').slideToggle();
		$(this).toggleClass('open');
	})
	
});

