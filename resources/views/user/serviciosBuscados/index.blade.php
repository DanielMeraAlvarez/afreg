@extends('layouts.app')

@section('title', 'Solicitar servicios')
@section('head')
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCyB6K1CFUQ1RwVJ-nyXxd6W0rfiIBe12Q&libraries=places"
type="text/javascript"></script>

<script src="/js/maps/MyUbication.js" type="text/javascript"></script>
<script>
</script>

<style>
	#map-canvas{
		position: relative;
		min-width: 150px;
		min-height:  400px;
		width: 100%;
		height: 60%;
	}
</style>
@endsection

@section('content')
<!-- Main -->
<div id="main-wrapper">
	<div id="main" class="container">
		<div id="content">

			<!-- Post -->
			<article class="box post">
				<header>
					<h2>Los mejores sitios para emprender tu negocio</h2><br>
				</header>
				{!! Form::open(['route' => 'buscarServicios.store', 'method' => 'POST', 'files' => true]) !!}

				<div class="row">
					<div class="6u 12u(mobile)">
						<section>     								
							<div class="form-group">
								{!! Form::label('type', 'Sector') !!}
								{!! Form::select('Sector',  $items, null, ['placeholder' => 'Selecciona un sector', 'class' => 'form-control', 'required']) !!}
							</div>
						</section>
					</div>
					<div class="6u 12u(mobile)">
						<section>
							<div class="form-group">
								{!! Form::label('type', 'Servicio') !!}
								{!! Form::select('servicio', ['' => 'Selecciona un servicio'], null, [ 'class' => 'form-control','id' => 'servicio_id','required']) !!}
							</div>
						</section>
					</div>
				</div>

				<div class="form-group">
					<label for=""> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
					<input type="text" id="searchmap" name="searchmap" placeholder="busca un sitio">
					<div id="map-canvas" class="8u 12u(mobile) important(mobile)"></div>									
					<input type="hidden" class="form-control input-sm" name="txtLongitud" id="txtLongitud">
					<input type="hidden" class="form-control input-sm" name="txtLatitud" id="txtLatitud">
				</div>
				<br><br>

				<header>
					<h2>Comentarios sobre la busqueda <strong></strong></h2>
					<br>
				</header>

				@include('errors.errors')
				<div class="row">
					<div class="6u 12u(mobile)">
						<section>
							<div class="row 50%">
								<div class="12u">
									<textarea name="comentario" placeholder="Mensaje"></textarea>
								</div>
							</div>
							<div class="row 50%">
								<div class="12u">
									{!! Form::submit('Enviar comentario', ['class' => 'form-button-submit button icon fa-envelope']) !!}
								</div>
							</div>
							{!! Form::close() !!}
						</section>
					</div>
					<div class="6u 12u(mobile)">
						<section>
							<p>Aqui pueder ver los comentarios realizados sobre la busqueda actual.</p>
							<div class="row">
								<div class="6u 12u(mobile)">
									<div>
										<ul class="icons" id="mensajes_de_busqueda">
											
										</ul>
									</div>
								</div>
									<!--<div class="6u 12u(mobile)">
										<ul class="icons">
											<li class="icon fa-twitter">
												<a href="#">@untitled-tld</a>
											</li>
											<li class="icon fa-instagram">
												<a href="#">instagram.com/untitled-tld</a>
											</li>
											<li class="icon fa-dribbble">
												<a href="#">dribbble.com/untitled-tld</a>
											</li>
											<li class="icon fa-facebook">
												<a href="#">facebook.com/untitled-tld</a>
											</li>
										</ul>
									</div>-->
								</div>
							</section>
						</div>
					</div>


				</article>

			</div>
		</div>
	</div>
	<script>
		$(document).ready(function(){
			$('select[name=Sector]').change(function(){
				$.get("{{ url('dropdown')}}",{ 
					option: $(this).val() 
				},
				function(data) {
					$('select[name=servicio]').empty();
					$('select[name=servicio]').append("<option value=''>Selecciona un servicio</option>");
					$.each(data, function(key, element) {
						$('select[name=servicio]').append("<option value='" + key + "'>" + element + "</option>");
					});
				});
			});
			$('select[name=servicio]').change(function(){
				actualizarMarcadoresMapa($(this).val());
				actualizarComentarios();
			});
		});		
	</script>
	<script src="/js/maps/ManyUbications.js" type="text/javascript">	</script>
	@endsection