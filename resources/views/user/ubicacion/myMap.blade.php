<!-- Se determina y escribe la localizacion -->
<body onload="cargarmap()">
<div id='ubicacion'></div>
<script type="text/javascript">
	if (navigator.geolocation) {
		navigator.geolocation.getCurrentPosition(mostrarUbicacion);
	} else {alert("¡Error! Este navegador no soporta la Geolocalización.");}
function mostrarUbicacion(position) {
    var times = position.timestamp;
	var latitud = position.coords.latitude;
	var longitud = position.coords.longitude;
    var altitud = position.coords.altitude;	
	var exactitud = position.coords.accuracy;	
	var div = document.getElementById("ubicacion");
	div.innerHTML = "Timestamp: " + times + "<br>Latitud: " + latitud + "<br>Longitud: " + longitud + "<br>Altura en metros: " + altitud + "<br>Exactitud: " + exactitud;}	
function refrescarUbicacion() {	
	navigator.geolocation.watchPosition(mostrarUbicacion);}	
</script>

<!-- Se escribe un mapa con la localizacion anterior-->
<div id="demo"></div>
<div id="mapholder"></div>
<script src="http://maps.google.com/maps/api/js?key=AIzaSyAEqR-rCF5W4PPZzRC9UdhN1QaF7AhRRLo&callback=initMap"></script>
<button onclick="cargarmap()">Cargar mapa</button>
<script type="text/javascript">
var x=document.getElementById("demo");
function cargarmap(){
navigator.geolocation.getCurrentPosition(showPosition,showError);
function showPosition(position)
  {
  lat=position.coords.latitude;
  lon=position.coords.longitude;
  latlon=new google.maps.LatLng(lat, lon)
  mapholder=document.getElementById('mapholder')
  mapholder.style.height='50%';
  mapholder.style.width='100%';
  var myOptions={
  center:latlon,zoom:10,
  mapTypeId:google.maps.MapTypeId.ROADMAP,
  mapTypeControl:false,
  navigationControlOptions:{style:google.maps.NavigationControlStyle.SMALL}
  };
  var map=new google.maps.Map(document.getElementById("mapholder"),myOptions);
  var marker=new google.maps.Marker({position:latlon,map:map,title:"You are here!"});
  }
function showError(error)
  {
  switch(error.code) 
    {
    case error.PERMISSION_DENIED:
      x.innerHTML="Denegada la peticion de Geolocalización en el navegador."
      break;
    case error.POSITION_UNAVAILABLE:
      x.innerHTML="La información de la localización no esta disponible."
      break;
    case error.TIMEOUT:
      x.innerHTML="El tiempo de petición ha expirado."
      break;
    case error.UNKNOWN_ERROR:
      x.innerHTML="Ha ocurrido un error desconocido."
      break;
    }
  }}
</script>
