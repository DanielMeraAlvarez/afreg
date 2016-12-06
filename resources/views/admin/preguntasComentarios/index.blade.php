
    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
        <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Personas
<br> 
					<a href="logs" class="btn btn-warning btn-xs">Ver log de errores</a>
                </div>

                <div class="panel-body">
                   <table class="table table-hover">
@if(isset($personas))
	<thead>
		<th>Nombre</th>
		<th>correo</th>
		<th>mensaje</th>
	</thead>
	<tbody>
	{{--{{$personas->total() --}}
		@forelse($personas as $p)
			<tr>
				<td>{{ $p->strNombre}}</td>
				<td>{{ $p->strEmail}}</td>
				<td>{{ $p->strMessage}}</td>
				<!--<td>
					<form method="POST" action="{{ route('preguntasycomentarios.destroy', $p->id) }}">
					<input name="_method" type="hidden" value="DELETE">
					{{csrf_field()}}
					<input type="submit" class="btn btn-danger btn-xs" value="Eliminar"></form>
				</td>-->
			</tr>
			@empty
			<p>no existen registros</p>
		@endforelse
		{!! $personas->links()!!}
	</tbody>
@endif
</table>
                </div>
            </div>
        </div>
    </div>
</div>