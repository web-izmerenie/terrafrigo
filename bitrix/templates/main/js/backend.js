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
      map = new GMaps({
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
	
	PlayVideo();
	GMapsInit();
});