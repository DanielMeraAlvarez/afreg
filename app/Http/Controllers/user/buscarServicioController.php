<?php

namespace App\Http\Controllers\user;

use Illuminate\Http\Request;
use App\Http\Requests\StoreBuscarServicioRequest;
use App\Http\Controllers\Controller;
use App\ServicioBuscado;
use App\Sector;
use App\Ubicacion;
use App\ServicioSolicitado;
use Auth;

class buscarServicioController extends Controller
{
    public function getUbicaciones($idServicio)
    {
        $arrayUbicaciones=[];
        if($idServicio!=0){
            $serviciosS = ServicioSolicitado::where('servicio_id', '=', $idServicio)->get();
        }else{
            $serviciosS = ServicioSolicitado::All ();
        }
    //dd($serviciosS);
        foreach ($serviciosS as $ss) {
           global $arrayUbicaciones;
           $array = Ubicacion::where('id', ($ss->ubicacion_id))->get();
           $arrayUbicaciones= array_collapse([$arrayUbicaciones,$array]);
        //dd($array);
       }
       return $arrayUbicaciones;
   }
   public function getComentarios($idServicio,$latitud,$longitud)
   {

    $serviciosB=[];

    $rango=0.05;
    $Ubicaciones = Ubicacion::whereBetween('latitud', [($latitud-$rango), ($latitud+$rango)])
    ->whereBetween('longitud', [($longitud-$rango), ($longitud+$rango)])
    ->get();
    if($idServicio!=0){
        foreach ($Ubicaciones as $u) {
           global $serviciosB;
           $array = ServicioBuscado::where('ubicacion_id', '=', ($u->id))
           ->where('servicio_id', '=', $idServicio)
           ->get();
           $serviciosB= array_collapse([$serviciosB,$array]);
       }
   }else{
    foreach ($Ubicaciones as $u) {
       global $serviciosB;
       $array = ServicioBuscado::where('ubicacion_id', '=', ($u->id))
       ->get();
       $serviciosB= array_collapse([$serviciosB,$array]);
   }
}
return $serviciosB;
}
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Sector::pluck('strDescripcion', 'id');
        return view('user.serviciosBuscados.index', compact('items',$items));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBuscarServicioRequest $request)
    {
        //$user = new User($request->all());        
        //$user->save();
        $u=new Ubicacion();
        $u->title = $request-> searchmap;
        $u->latitud = $request-> txtLatitud;
        $u->longitud = $request-> txtLongitud;
        $u->save();

        $ss=new ServicioBuscado();
        $ss->strComentario = $request-> comentario;
        $ss->servicio_id = $request-> servicio;
        $ss->ubicacion_id = $u-> id;
        $ss->user_id = Auth::id();
//$restaurant->admin()->associate($admin);
        if($ss->save()){
            return back()->with('msj','Datos guardados correctamente');
        }else{
            return back()->with('msjerror','Error al guardar datos');
        }

        return redirect()->route('buscarServicios.index');
       //    dd($request);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
