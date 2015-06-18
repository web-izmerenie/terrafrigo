$(function () {
	banner: "'use strict';\n"

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
				$('.additional-text__container').animate({'height':'120px'}, 500);
			} else {
				$button.addClass('active'); 
				$('.additional-text__container').animate({'height':'240px'}, 500);
			}
		});
	}());
    var widthWin = $(document).width();
	if(widthWin >=1240){
       var $newsItem = $('.main-news__item').width();
        $('.main-news__link').height($newsItem * 1.19);
    }
    else{

    }
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
	
	$('.placeholder-8').focusin(function(e) { console.log($(this).val()); if($(this).val() == 'Время звонка'){ $(this).val(''); } });
	$('.placeholder-8').focusout(function(e) { if($(this).val() == ''){ $(this).val('Время звонка'); } });
	
	$('.placeholder-9').focusin(function(e) { console.log($(this).val()); if($(this).val() == 'Компания*'){ $(this).val(''); } });
	$('.placeholder-9').focusout(function(e) { if($(this).val() == ''){ $(this).val('Компания*'); } });
	
	$('.placeholder-10').focusin(function(e) { console.log($(this).val()); if($(this).val() == 'Сообщение *'){ $(this).val(''); } });
	$('.placeholder-10').focusout(function(e) { if($(this).val() == ''){ $(this).val('Сообщение *'); } });
	
	$('.placeholder-11').focusin(function(e) { console.log($(this).val()); if($(this).val() == 'ДРУГОЙ'){ $(this).val(''); } });
	$('.placeholder-11').focusout(function(e) { if($(this).val() == ''){ $(this).val('ДРУГОЙ'); } });
	
	$('.placeholder-12').focusin(function(e) { console.log($(this).val()); if($(this).val() == 'ВХОД'){ $(this).val(''); } });
	$('.placeholder-12').focusout(function(e) { if($(this).val() == ''){ $(this).val('ВХОД'); } });
	
	$('.placeholder-13').focusin(function(e) { console.log($(this).val()); if($(this).val() == 'ВЫХОД'){ $(this).val(''); } });
	$('.placeholder-13').focusout(function(e) { if($(this).val() == ''){ $(this).val('ВЫХОД'); } });
	
	/*Style select*/
	var $select;
	if($(".style-select").length) {
		$(function(){
			/*$('select.style-select').customSelect();*/
		   	$select = $("select.style-select").selectBoxIt().data("selectBox-selectBoxIt");;
		});
	}
	
	/*Popup form*/
	$('.popup-open').click(function(event){
		var $popup = $(this).attr('href');
		$($popup).fadeIn();
		if($($popup).find('.popup-form').height()>$(window).height()) {
			$($popup).addClass('popupAuto');
		}
		event.preventDefault();
		$('body').addClass('overflow-none');
	})
	$(window).resize(function(){
		$('.popup-form').each(function(){
			if($(this).height()>$(window).height()) {
				$(this).parent().addClass('popupAuto');
			}
			else { $(this).parent().removeClass('popupAuto'); }
		})
	})
	
	$('.popup-form .close').click(function(event){
		$(this).parent().parent().fadeOut();		
		$('body').removeClass('overflow-none');
		$(this).parent().find('form').trigger( 'reset' );
		$(this).parent().find('.text-error').remove();
		$(this).parent().find('.error').removeClass('error');
		$select.refresh();
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
	 $('.main-nav__list-item a[href^="#"]').click(function(){
        var el = $(this).attr('href');
		$('.main-nav__list-item a').removeClass('active');
        $(this).addClass('active');
        $('body').animate({
            scrollTop: $(el).offset().top}, 1000);
        return false;
    });
	$('.series-model .series-model-element_img').hover(function(){
		var $modelText = $(this).next('.series-model-element_text');
		$($modelText).find('a').css({'color':'#0c75d7'});
	},
		function(){
			var $modelText = $(this).next('.series-model-element_text');
			$($modelText).find('a').css({'color':'#000'});
		}
	);
	
	/*career list*/
	$('.career-list ul li').click(function(){
		$(this).find('.hid-text').slideToggle();
		$(this).toggleClass('open');
	})
        
     $('.dealers-page .wrap-colum ul li a').click(function () {
      	var id = $(this).attr('data-id');
        google.maps.event.trigger(markers[id], 'click');
        if(!$(this).parent().hasClass('active')){
        	$('.dealers-page .wrap-colum ul li.active').removeClass('active');
        	$(this).parent().addClass('active');
        }
		$('html, body').animate({ scrollTop: 0 }, 'slow');
		return false;
	  });
	
	$('.button .trailers-tab1').click(function(event){
        $('.button .trailers-tab2').removeClass('active');
        $(this).addClass('active');
        $('.table-model').fadeIn();
        $('.table-model-trailers').css({'display':'none'});
        event.preventDefault();
    });
    $('.button .trailers-tab2').click(function(event){
        $('.button .trailers-tab1').removeClass('active');
        $('.table-model').css({'display':'none'});
        $(this).addClass('active');
        $('.table-model-trailers').fadeIn();
        event.preventDefault();
    });

    jQuery(window).load(function(){
        initHeaderPosition();
    })

//header position init
    function initHeaderPosition(){
        var win = jQuery(window);
        var header = jQuery('body.fixed-l .header-line');
        function calcPosition(obj){
            obj.stop().css({left: parseInt(obj.attr('data-top')) - win.scrollLeft()});
            win.scroll(function(){
                obj.stop().css({left: parseInt(obj.attr('data-top')) - win.scrollLeft()});
            })
        }
        if(header.length){
            header.attr('data-top',parseInt(header.css('left')));
            calcPosition(header);
        }
    }
    
    
    /*Valid form*/
    $("form").submit(function() {
    	var $noValid = false;
    	$(this).find('input.valid, textarea.valid, select.valid').each(function(){
    		if($(this).val() == $(this).attr('data-default')) {
    			$noValid = true;
    			$(this).addClass('error');
    			if($(this).hasClass('style-select')) {
    				$(this).next().addClass('error');
    			}
    			if(!$(this).next().hasClass('text-error')) {
    				$(this).after('<label class="text-error">ПОЛЕ ОБЯЗАТЕЛЬНО ДЛЯ ЗАПОЛНЕНИЯ</label>')
    			}
    		}
    		else {
    			$(this).removeClass('error');$(this).after()
    			if($(this).next().hasClass('text-error')) {
    				$(this).next().remove();
    			}
    		}
    	})
    	if($noValid) {
    		return false;
    	}
    	else { 
    		
    		//Validate is OK;
    		//Some next actions;
    		
    		if($('.popup-inner').is(":visible")) {
	    		$(this).parent().parent().parent().hide();
	    		$('#popup-successful').show();
	    		$(this).trigger( 'reset' );
				$(this).find('.text-error').remove();
				$(this).find('.error').removeClass('error');
				$select.refresh();
				return false;
			}
    	}
    });
    $('.valid').focus(function(){
    	if($(this).hasClass('error')) {
    		$(this).removeClass('error');
    		$(this).next().remove();
    	}
    })
    $('.style-select').click(function() {    	
    	if($(this).hasClass('error')) {
    		$(this).removeClass('error');
    		$(this).next().remove();
    		$(this).next().removeClass('error');
    	}
    });
    
    /*Questionnaire_2*/
   	$('.click_unckeck').focus(function(){
   		$(this).parent().prev().find('input[type="radio"]').prop('checked', false);
   		$(".radio-btn").buttonset("refresh");
   	})
   	
   	/*Fixed buttom*/
	var heightBottom = $(window).scrollTop() + $(window).height();
   	if($('.double-button').length || $('.btn-blue').length) {
   		 $(window).scroll(function() {   
		   if($(window).scrollTop() + $(window).height() > $(document).height() - 100) { 
		       $('.double-button').fadeOut();
		       $('.btn-blue').fadeOut();
			    $(this).queue();
				$('.double-button, .btn-blue').stop(true, true);
		   }
		   else {
		   	   $('.double-button').fadeIn();
		       $('.btn-blue').fadeIn();
			    $(this).queue();
				$('.double-button, .btn-blue').stop(true, true);
		   }
		});
   	}
    
});

