<head>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCyB6K1CFUQ1RwVJ-nyXxd6W0rfiIBe12Q&libraries=places"
	type="text/javascript"></script>
	<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>

	<script src="js/maps/MyUbication.js" type="text/javascript"></script>
</head>
<body>
	<style>
		#map-canvas{
			width: 100%;
			height: 50%;
		}
	</style>


	<div class="container">
		<div class="col-sm-4">
			<h1>Add Vendor, Location</h1>
			{{Form::open(array('url'=>'/vendor/add', 'files'=>true))}}
			<div class="form-group">
				<label for="">Title</label>
				<input type="text" class="form-control input-sm" name="title">
			</div>

			<div class="form-group">
				<label for="">Mapa</label>
				<input type="text" id="searchmap">
				<div id="map-canvas"></div>
			</div>

			<div class="form-group">
				<label for="">Lat</label>
				<input type="text" class="form-control input-sm" name="txtLatitud" id="txtLatitud">
			</div>

			<div class="form-group">
				<label for="">Lng</label>
				<input type="text" class="form-control input-sm" name="txtLongitud" id="txtLongitud">
			</div>

			<button class="btn btn-sm btn-danger">Save</button>
			{{Form::close()}}
		</div>
	</div>

	<script src="js/maps/MyMap.js" type="text/javascript">	</script>