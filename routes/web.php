<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
use App\Sector;
use App\Servicio;

Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

// user
Route::group(['prefix' => 'user', 'middleware' => 'auth'], function () {
	// idiooma del usuario
	Route::get('/language/{lang}', function ($lang = 'es') {
		App::setLocale($lang);
		session(['lang' => $lang]);
   		return redirect('home');
	});
	// ubicaciones de los servicios
	Route::get('/buscarServicios/ubicaciones/{idServicio}',  'user\buscarServicioController@getUbicaciones');
	// comentarios de los servicios
	Route::get('/buscarServicios/comentarios/{idServicio}/{latitud}/{longitud}',  'user\buscarServicioController@getComentarios');
	Route::get('/solicitarServicios/comentarios/{idServicio}/{latitud}/{longitud}',  'user\solicitarServicioController@getComentarios');
	
	Route::resource('/data', 'user\dataController');	
	Route::resource('/buscarServicios', 'user\buscarServicioController');	
	Route::resource('/solicitarServicios', 'user\solicitarServicioController');	
});


	Route::resource('/preguntasycomentarios', 'preguntasycomentariosController');	

//lista de servicios disponibles
Route::get('dropdown', function(){
	$id = Request::input('option');
	$servicios = Sector::find($id)->servicios;
	return $servicios->pluck('strDescripcion', 'id');
});



//ver registros de las tablas
Route::get('/tabla/{table}', function ($table = 'users') {
	return App\Sector::all();
	});


// administrador
//Route::group(['prefix' => 'admin'], function () {	
Route::get('admin', ['middleware' => 'auth',function(){
	$personas=  App\Preguntas_y_comentarios::paginate(10);
    return view('admin.preguntasComentarios.index')->with(['personas'=>$personas]);
}]);



	//prueba obtener mi ubicacion
	Route::get('/ubicacion', function () {		
   		return view('user.ubicacion.myMap');
	});
	//prueba obtener mi ubicacion
	Route::get('/newUbicacion', function () {		
   		return view('user.ubicacion.newUbication');
	});