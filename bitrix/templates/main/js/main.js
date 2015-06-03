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
    /*---------------------------*/
    var $square = $('.certificares-block li, .benefit-block ul li, .benefit-block ul li span').width();
    $('.certificares-block li, .benefit-block ul li, .benefit-block ul li span').height($square);

    $(window).resize(function(){
        var $square = $('.certificares-block li, .benefit-block ul li, .benefit-block ul li span').width();
        $('.certificares-block li, .benefit-block ul li, .benefit-block ul li span').height($square);
    });
    /*--------------------------*/
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
	
	/*Google Maps*/
	if($('#gomap').length) {
		
	$("#gomap").gmap3({
          marker:{
          	values:[
		      { latLng: [55.02480160288231, 82.92944544445794], 
		      	data:'<div class="baloon-innr"><h3>Москва</h3><p>ООО «Автовариант» и ООО «Автохолод»</p><p>ООО «Горизонт»</p><p>«Холодильные Технологии»</p><p>ООО «СпеЦ-Авто»</p><p>ООО «Висма»</p><a href="#">Контактная информация</a></div>'
		      },
		      { latLng: [55.75399400, 37.62209300], 
		      	data:'<div class="baloon-innr"><h3>Москва</h3><p>ООО «Автовариант» и ООО «Автохолод»</p><p>ООО «Горизонт»</p><p>«Холодильные Технологии»</p><p>ООО «СпеЦ-Авто»</p><p>ООО «Висма»</p><a href="#">Контактная информация</a></div>'
		      },
		      { latLng: [56.97048954, 35.72145823], 
		      	data:'<div class="baloon-innr"><h3>Москва</h3><p>ООО «Автовариант» и ООО «Автохолод»</p><p>ООО «Горизонт»</p><p>«Холодильные Технологии»</p><p>ООО «СпеЦ-Авто»</p><p>ООО «Висма»</p><a href="#">Контактная информация</a></div>'
		      },
		      { latLng: [54.79760329, 37.65505198], 
		      	data:'<div class="baloon-innr"><h3>Москва</h3><p>ООО «Автовариант» и ООО «Автохолод»</p><p>ООО «Горизонт»</p><p>«Холодильные Технологии»</p><p>ООО «СпеЦ-Авто»</p><p>ООО «Висма»</p><a href="#">Контактная информация</a></div>'
		      },
		    ],
          	
          	options:{
              draggable:false,
              icon: new google.maps.MarkerImage("img/icon-marker.png", new google.maps.Size(12, 13, "px", "px")),
            },
            events:{
            	click: function(marker, event, context){
		        var map = $(this).gmap3("get"),
		          infowindow = $(this).gmap3({get:{name:"infowindow"}});
		        if (infowindow){
		          infowindow.open(map, marker);
		          infowindow.setContent(context.data);
		        } else {
		          $(this).gmap3({
		            infowindow:{
		              anchor:marker, 
		              options:{content: context.data}
		            }
		          });
		        }
		      },
      
            },
            
          },
          map:{
            options:{
              center:[55.02480160288231, 82.92944544445794],
              zoom: 4,
              scrollwheel: false,
              mapTypeControl: false,
              panControl: false,
              streetViewControl: false,
              zoomControl: true,
			  zoomControlOptions: {
			  	style: google.maps.ZoomControlStyle.SMALL,
			   	position: google.maps.ControlPosition.RIGHT_BOTTOM
			 },
            }
          }
        });
        
      }
      
      $('.dealers-page .wrap-colum ul li a').click(function () {
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
});

