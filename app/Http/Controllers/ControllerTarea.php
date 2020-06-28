<?php

namespace App\Http\Controllers;

use App\Tarea;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ControllerTarea extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    
    public function index()
    {
        //
        return Tarea::where('user_id', auth()->id())->get();
    }

    
    public function store(Request $request)
    {
        // separamos la cadena en dos ,
        $separaCadena = explode(',', $request->imagen);
        $base64Img = base64_decode($separaCadena[1]);

        //guardar en el server
        $nombre_imagen_guardar = Carbon::now()->format('H_i_s') . $request->nombre_imagen;
        $ruta_a_guardar = public_path() . '\\imagenes\\' . $nombre_imagen_guardar;
        file_put_contents($ruta_a_guardar, $base64Img);

        // guardar en la base de datos
        $newtarea = new Tarea();
        $newtarea->titulo = $request->titulo;
        $newtarea->descripcion = $request->descripcion;
        $newtarea->imagen = $nombre_imagen_guardar;
        $newtarea->user_id = auth()->id();
        $newtarea->save();

        return $newtarea;
    }

    
    public function show($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }

   
    public function destroy($id)
    {
        //
    }
}
