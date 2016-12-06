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

var map = new google.maps.Map(document.getElementById('map-canvas'),{
	center:{
		lat: varLatitud,
		lng: varLongitud
	},
	zoom:15
});
var image = {
    url: '/images/home-pointer-icon2.png',
    // This marker is 20 pixels wide by 32 pixels high.
    size: new google.maps.Size(48, 48),
    // The origin for this image is (0, 0).
    origin: new google.maps.Point(0, 0),
    // The anchor for this image is the base of the flagpole at (0, 32).
    anchor: new google.maps.Point(23, 49)
  };
  //var image = '/images/home-pointer-icon.png';

var marker = new google.maps.Marker({
	position: {
		lat: varLatitud,
		lng: varLongitud
	},
	map: map,
	icon:image,
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
