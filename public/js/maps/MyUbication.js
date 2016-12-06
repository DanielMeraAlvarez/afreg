//colocar en el <head>

if (navigator.geolocation) {
	navigator.geolocation.getCurrentPosition(mostrarUbicacion);
} else {alert("¡Error! Este navegador no soporta la Geolocalización.");}
function mostrarUbicacion(position) {
	//var times = position.timestamp;
	var latitud = position.coords.latitude;
	var  longitud = position.coords.longitude;
			//var altitud = position.coords.altitude;	
			//var exactitud = position.coords.accuracy;
			//alert(longitud);
	localStorage.setItem('varLatitud', latitud);
	localStorage.setItem('varLongitud', longitud);
}