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
	
	/*Google Maps*/
	function GMapsInit(){
		if($('#gomap').length) {
		  var mapMarkers= {}; // создаю объект, в который буду добавлять маркеры по айди
		  var map = new GMaps({
			div: '#gomap',
			zoom: 4,
			lat: 55.02480160288231,
			lng: 82.92944544445794,
			scrollwheel: false,
			mapTypeControl: false,
			panControl: false,
			streetViewControl: false,
			zoomControl: true,
			zoomControlOptions: {
			style: google.maps.ZoomControlStyle.SMALL,
			position: google.maps.ControlPosition.RIGHT_BOTTOM
			},
		  });

		  $('.dealers-map .point li').each(function(){
			var coordinat = $(this).data('coordinat');
			var urlPath = $(this).data('url');
			var name = $(this).data('name');
			var idItem = $(this).data('id');
			var arrCoordinat = coordinat.split(',');
			var itemArr = [];

			$(this).find('p').each(function(){
			  var item = $(this).text();

			  itemArr.push('<p>'+item+'</p>');
			});
			var items = itemArr.join('');

			// создаю маркер, сохраняю ссылку в переменную
			var marker = map.addMarker({
			  lat: arrCoordinat[0],
			  lng: arrCoordinat[1],
			  title: 'bx-id-'+idItem,
			  icon: '/bitrix/templates/main/img/icon-marker.png',
			  infoWindow: {
				content: '<div id="bx-id-'+idItem+'" class="baloon-innr"><h3>'+name+'</h3>'+items+'<a href="'+urlPath+'">Контактная информация</a></div>'
			  }
			});

			 // добавляю маркер на карту
			 map.addMarker(marker);

			 // добавляю ссылку на маркер в объект
			 mapMarkers[idItem ] = marker;
		  });

		  $('.contact-city_wrap a').click(function(){
			  var link = $(this).data('id');
			  // беру маркер по айди
			  var marker = mapMarkers[link];
			  // если такой есть - показываю
			  if (marker) {
				   google.maps.event.trigger(marker, "click");
			  }
		  });

		}
	}
	
	function toggleTable(){
		var link = $('.button a');
		var target = $('.table-model');
        
        link.click(function(e){
            var mainLink = $(this).attr('href');
            e.preventDefault();
            
            if(!$(this).hasClass('active')){
                link.removeClass();
                $(this).addClass('active');

                target.slideUp();
                $(mainLink).slideDown();
            }
        });
	}
	
	function mapsContact(){
        var image = new google.maps.MarkerImage( '/bitrix/templates/main/img/marker.png', // иконка
                new google.maps.Size(52,73), // размеры иконок
                new google.maps.Point(0,0),
                new google.maps.Point(42,56)
        );
        
        $('.adress-map').each(function(){
            var map;
            var coordinat = $(this).data('coordinat');
			var arrCoordinat = coordinat.split(',');
            var mapSelect = $(this).find('.gomap').attr('id');
            
            map = new GMaps({
                div: '#'+mapSelect,
                scrollwheel: false,
                lat: arrCoordinat[0],
                lng: arrCoordinat[1]
            });
			
            map.addMarker({
                lat: arrCoordinat[0],
                lng: arrCoordinat[1],
                icon: image,
            });
        });
	}
    
    function filterTabs(){
        var link = $('.filter_selection .tabs');
        
        link.click(function(){
            var target = $(this).data('target');
            
            if(target != $('.tabs-target:visible').attr('id')){
                $('.tabs-target').hide();
                $('#'+target).fadeIn();
            }
        });
    }
    
    function tabsBlockFilter(){
        var mainBlock = $('.tabs-block');
        var radio = mainBlock.find('input[type="radio"]');
        
        radio.click(function(){
			
            var inp=$(this);
			if (inp.is(".theone")) {
				inp.prop("checked",false).removeClass("theone");
				inp.parent().find('label').removeClass('ui-state-active');
			} else {
				$("input:radio[name='"+inp.prop("name")+"'].theone").removeClass("theone");
				inp.addClass("theone");
			}
            
            if(radio.is(':checked')){
				var currentBlock = $(this).closest('.tabs-block');
				
				if($(currentBlock).hasClass('active')){
					return false;
				}else{
					mainBlock.hide();
					currentBlock.fadeIn().addClass('active');
				}
            }else{
                mainBlock.fadeIn().removeClass('active');
            }
            
        });
        
    }
	
    tabsBlockFilter();
    filterTabs();
	toggleTable();
	PlayVideo();
	GMapsInit();
	mapsContact();
});