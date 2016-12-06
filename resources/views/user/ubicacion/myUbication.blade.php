<!-- Se determina y escribe la localizacion -->
@extends('layouts.app')

@section('ubication')
<div id="mostrarUbicacion"></div>
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

    localStorage.setItem('mylatitude',latitud);
    localStorage.setItem('mylongitude',longitud);
	var div = document.getElementById("ubicacion");
  //alert(latitud);
	div.innerHTML = "Timestamp: " + times + "<br>Latitud: " + latitud + "<br>Longitud: " + longitud + "<br>Altura en metros: " + altitud + "<br>Exactitud: " + exactitud;
}	
function refrescarUbicacion() {	
	navigator.geolocation.watchPosition(mostrarUbicacion);
}	
</script>

<script src="http://maps.google.com/maps/api/js?key=AIzaSyAEqR-rCF5W4PPZzRC9UdhN1QaF7AhRRLo"></script>
@endsection