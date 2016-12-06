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
				</header>
				{!! Form::open(['route' => 'buscarServicios.store', 'method' => 'POST', 'files' => true]) !!}


				<div class="form-group">
					<label for=""> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
					<input type="text" id="searchmap" name="searchmap" placeholder="busca un sitio">
					<div id="map-canvas" class="8u 12u(mobile) important(mobile)"></div>									
					<input type="text" class="form-control input-sm" name="txtLongitud" id="txtLongitud">
					<input type="text" class="form-control input-sm" name="txtLatitud" id="txtLatitud">
				</div>
				<br><br>

							@include('errors.errors')
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<div class="panel panel-default">
							<div class="panel-heading">Servicios solicitados en 10 km de radio
							</div>  
							<div class="panel-body" id="mensajes_de_busqueda"> 
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<div class="panel panel-default">
							<div class="panel-heading">Servicios más solicitados</div>  
							<div class="panel-body" id="servicios_mas_solicitados">  

								<!--<table class="table table-hover">
									@if(isset($buscados))
									<thead>
										<th>servicio</th>
										<th>fecha de peticion</th>
										<th>comentario</th>
										<th></th>
									</thead>
									<tbody>
										{{--{{$buscados->total() --}}
										@forelse($buscados as $b)
										<tr>
											<td>                       </td>
											<td>{{ $b->created_at}}</td>
											<td>{{ $b->strComentario}}</td>

											<td>
												<!--<a href="Persona/{{$b->id}}/edit" class="btn btn-warning btn-xs">Modificar</a>
												<!--<form method="POST" action="{{ route('buscarServicios.destroy', $b->id) }}">
													<input name="_method" type="hidden" value="DELETE">
													{{csrf_field()}}
													<input type="submit" class="btn btn-danger btn-xs" value="Eliminar"></form>--
												</td>
											</tr>
											@empty
											<p>no existen registros</p>
											@endforelse
											{!! $buscados->links()!!}
										</tbody>
										@endif
									</table>-->
								</section>
							</div>
						</div>
					</div>
				</div>


			</article>

		</div>
	</div>
</div>
<script>
		/*$(document).ready(function(){
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
		});	*/	
	</script>
	<script src="/js/maps/data.js" type="text/javascript">	</script>
	@endsection