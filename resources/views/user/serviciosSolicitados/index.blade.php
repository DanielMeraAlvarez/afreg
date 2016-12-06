@extends('layouts.app')

@section('title', 'Solicitar servicios')
@section('head')
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCyB6K1CFUQ1RwVJ-nyXxd6W0rfiIBe12Q&libraries=places"
type="text/javascript"></script>

<script src="/js/maps/MyUbication.js" type="text/javascript"></script>

<style>
	#map-canvas{
		position: relative;
		min-width: 100px;
		min-height:  250px;
		width: 100%;
		height: 50%;
	}
</style>
@endsection

@section('content')
<!-- Main -->
<div id="main-wrapper">
	<div id="main" class="container">
		<div class="row">

			<!-- Sidebar -->
			<div id="sidebar" class="4u 12u(mobile)">


				<!-- Highlights -->
				<section>
					<ul class="divided">
						<li>

							<!-- Highlight -->
							<article class="box highlight">
								<header>
									<h3><a href="#">¿Para que solicitar servicios?</a></h3>
								</header>
								<a href="#" class="image left"><img src="/images/solicita.jpg" alt="" /></a>
								<p>Personas que desean instalar su negocio utilizaran esta informacion para poder encontrar sitios que requieran de sus servicios. Ademas si lo solicitas podras recibir informacion por parte de ellos para atenderte</p>
								<ul class="actions">
									<li><a href="#" class="button icon fa-file">Leer más</a></li>
								</ul>
							</article>

						</li>
						<li>

													<!-- Highlight --
														<article class="box highlight">
															<header>
																<h3><a href="#">Something of less note</a></h3>
															</header>
															<a href="#" class="image left"><img src="images/pic07.jpg" alt="" /></a>
															<p>Phasellus  sed laoreet massa id justo mattis pharetra. Fusce suscipit ligula vel quam
															viverra sit amet mollis tortor congue magna lorem ipsum dolor et quisque ut odio facilisis
															convallis. Etiam non nunc vel est suscipit convallis non id orci. Ut interdum tempus
															facilisis convallis. Etiam non nunc vel est suscipit convallis non id orci.</p>
															<ul class="actions">
																<li><a href="#" class="button icon fa-file">Learn More</a></li>
															</ul>
														</article>
													-->
												</li>
											</ul>
										</section>

									</div>

									<!-- Content -->
									<div id="content" class="8u 12u(mobile) important(mobile)">

										<!-- Post -->
										<article class="box post">
											<header>
												<h2>¿No encontraste el servicio que buscas?</h2>
											</header>


											<h3>solicitalo y recibiras una respuesta a lo que necesitas</h3>
											


											{!! Form::open(['route' => 'solicitarServicios.store', 'method' => 'POST', 'files' => true]) !!}

											@if(session()->has('msj'))
											<div class="alert alert-success" role="alert">{{ session('msj')}}</div>
											@endif

											@if(session()->has('msjerror'))
											<div class="alert alert-danger" role="alert">{{ session('msjerror')}}</div>
											@endif


											<div class="form-group">
												<label for="">Ubicacion</label>
												<input type="text" id="searchmap" name="searchmap" placeholder="busca un sitio">
												<div id="map-canvas" class="8u 12u(mobile) important(mobile)"></div>									
												<input type="hidden" class="form-control input-sm" name="txtLongitud" id="txtLongitud">
												<input type="hidden" class="form-control input-sm" name="txtLatitud" id="txtLatitud">
											</div>

											<br>

											@include('errors.errors')
											<div class="form-group">
												{!! Form::label('type', 'Sector') !!}
												{!! Form::select('Sector',  $items, null, ['placeholder' => 'Selecciona un sector', 'class' => 'form-control', 'required']) !!}
											</div>
											<div class="form-group">
												{!! Form::label('type', 'Servicio') !!}
												{!! Form::select('servicio', ['' => 'Selecciona un servicio'], null, ['class' => 'form-control', 'required']) !!}
											</div>
											<div class="form-group">
												{!! Form::label('textarea', 'Dejanos tu opinion sobre que servicio quisieras conseguir') !!}
												{!! Form::text('Opinion', null, ['class' => 'form-control', 'required']) !!}
												<!--{{ Form::textarea('notes', null, ['size' => '10x2']) }}-->
											</div>
											<div class="form-group">
												{!! Form::label('checkbox', '¿Existen servicios similares?') !!}
												{{ Form::radio('serviciosSimilares', 'si') }}si<br>
												{{ Form::radio('serviciosSimilares', 'no', true) }}no
											</div>
											<div class="form-group">
												{!! Form::submit('Solicitar servicio', ['class' => 'btn btn-primary']) !!}
											</div>

	{!! Form::close() !!}
										</article>

									</div>

								</div>
							</div>
						</div>
					</div>
					<script>
						$(document).ready(function(){
							$('select[name=Sector]').change(function(){
								$.get("{{ url('dropdown')}}",
									{ option: $(this).val() },
									function(data) {
										$('select[name=servicio]').empty();
									$.each(data, function(key, element) {
										$('select[name=servicio]').append("<option value='" + key + "'>" + element + "</option>");
									});
								});
							});
						});		
					</script>
					<script src="/js/maps/MyMap.js" type="text/javascript">	</script>
					@endsection