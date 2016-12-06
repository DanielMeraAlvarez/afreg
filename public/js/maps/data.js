//Requiere de myUbication.js en el head
//colocar este codigo al final del body

//requiere los input para la latitud y longitud 
//requiere de el div id="map-canvas" para el mapa
//requiere de <input type="text" id="searchmap"> para busquedas

varLatitud=Number(localStorage.getItem('varLatitud'));
varLongitud=Number(localStorage.getItem('varLongitud'));

$( document ).ready(function() {
	$('#txtLatitud').val(varLatitud);
	$('#txtLongitud').val(varLongitud);
});

var map; var marcadores=[];var key;


function actualizarMarcadoresMapa(){
	$.ajax({
		type:'GET',
		url: 'buscarServicios/ubicaciones/0',
		dataType : 'json',
		success:function(data){
			marcadores = [[]];

			$.each(data, function(i, item) {
				marcadores[i] = [];
				marcadores[i][0] = item.title+".";
				marcadores[i][1] = item.latitud;
				marcadores[i][2] = item.longitud;
    			//console.log(item.latitud);
    			//console.log(item);
    		});
		//console.log("id= "+id);
		//console.log("json "+marcadores);
			marcar();
		}
	});
}

function actualizarComentarios(){
	$.ajax({
		type:'GET',
		url: 'buscarServicios/comentarios/0/'+($('#txtLatitud').val())+'/'+($('#txtLongitud').val()),
		dataType : 'json',
		success:function(data){
			$('#mensajes_de_busqueda').empty();
			$.each(data, function(i, item) {
				$('#mensajes_de_busqueda').append('<tr><td width="50%">'+item.strComentario+'</td><td><p style="font-size:80%;color:blue;">'+item.created_at+'</p></td></tr>');
			});
			//$('#mensajes_de_busqueda').append('');			
		    //console.log(data);
		}
	});
	$.ajax({
		type:'GET',
		url: 'solicitarServicios/comentarios/0/'+($('#txtLatitud').val())+'/'+($('#txtLongitud').val()),
		dataType : 'json',
		success:function(data){
			//$('#mensajes_de_busqueda').empty();
			$.each(data, function(i, item) {
				$('#mensajes_de_busqueda').append('<tr><td width="50%">'+item.strOpinion+'</td><td><p style="font-size:80%;color:blue;">'+item.created_at+'</p></td></tr>');
			});
			//$('#mensajes_de_busqueda').append('');			
		    //console.log(data);
		}
	});
}

function initialize() {
		//console.log(marcadores);

		map = new google.maps.Map(document.getElementById('map-canvas'), {
			zoom: 13,
			center: new google.maps.LatLng(varLatitud, varLongitud),
			mapTypeId: google.maps.MapTypeId.ROADMAP
		});

		// actualizar ubicacion del usuario
		map.addListener('center_changed', function() {
			var myCenter=map.getCenter();
			$('#txtLatitud').val(myCenter.lat());
			$('#txtLongitud').val(myCenter.lng());
			actualizarComentarios();
			actualizarMarcadoresMapa();
		});

		var infowindow = new google.maps.InfoWindow();
		var marker, i;
		for (i = 0; i < marcadores.length; i++) {  
			marker = new google.maps.Marker({
				position: new google.maps.LatLng(marcadores[i][1], marcadores[i][2]),
				map: map,
				animation: google.maps.Animation.DROP
			});
			google.maps.event.addListener(marker, 'click', (function(marker, i) {
				return function() {
					infowindow.setContent(marcadores[i][0]);
					infowindow.open(map, marker);
				}
			})(marker, i));
		}
	}
	function marcar(){
		var infowindow = new google.maps.InfoWindow();
		var marker, i;
		for (i = 0; i < marcadores.length; i++) {  
			marker = new google.maps.Marker({
				position: new google.maps.LatLng(marcadores[i][1], marcadores[i][2]),
				map: map
				//animation: google.maps.Animation.DROP
			});
			google.maps.event.addListener(marker, 'click', (function(marker, i) {
				return function() {
					infowindow.setContent(marcadores[i][0]);
					infowindow.open(map, marker);
				}
			})(marker, i));
		}}

	google.maps.event.addDomListener(window, 'load', initialize);


	var searchBox = new google.maps.places.SearchBox(document.getElementById('searchmap'));

	google.maps.event.addListener(searchBox,'places_changed',function(){

		var places = searchBox.getPlaces();
		var bounds = new google.maps.LatLngBounds();
		var i, place;

		for(i=0; place=places[i];i++){
			bounds.extend(place.geometry.location);
  				//marker.setPosition(place.geometry.location); //set marker position new...
  			}
  			map.fitBounds(bounds);
  			map.setZoom(15);
  		});
/*

var map = new google.maps.Map(document.getElementById('map-canvas'),{
	center:{
		lat: varLatitud,
		lng: varLongitud
	},
	zoom:15
});

var marker = new google.maps.Marker({
	position: {
		lat: varLatitud,
		lng: varLongitud
	},
	map: map,
	draggable: true
});

var searchBox = new google.maps.places.SearchBox(document.getElementById('searchmap'));

google.maps.event.addListener(searchBox,'places_changed',function(){

	var places = searchBox.getPlaces();
	var bounds = new google.maps.LatLngBounds();
	var i, place;

	for(i=0; place=places[i];i++){
		bounds.extend(place.geometry.location);
  				marker.setPosition(place.geometry.location); //set marker position new...
  			}

  			map.fitBounds(bounds);
  			map.setZoom(15);

  		});

google.maps.event.addListener(marker,'position_changed',function(){
	var lat = marker.getPosition().lat();
	var lng = marker.getPosition().lng();

	$('#txtLatitud').val(lat);
	$('#txtLongitud').val(lng);
});
*/