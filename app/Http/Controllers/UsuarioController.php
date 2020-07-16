<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Carbon\Carbon;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    /**
     * Listar registros
    */

    public function listar(){
        /**
         * Recuperar todas los datos
         */
        //return Usuario::all()->values('nombre');
        /**
         * Crear condicionales
         */
        return Usuario::all();
    }

    /**
     * Guardar un registro
     */
    public function guardar() {
        $usuario = new Usuario();
        $usuario->nombre='Alberto';
        $usuario->direccion ='Armenia';
        $usuario->edad=30;
        $usuario->ciudad = 'Valencia';
        $usuario->sueldo =400000;
        $usuario->created_at=Carbon::now()->format('Y-m-d H:i:s');
        if($usuario->save()) {
            echo 'Se creo exitosamente';
        }else {
            echo 'No se pudo crear';
        }
    }
    /**
     * Actualizar un registro
     */
    public function  actualizar() {
        $usuario = Usuario::find(2);
        $usuario->nombre='El nuevo nombre';
        $usuario->save();        
    }
    /**
     * Eliminar un registro
     */
    public function eliminar() {
        $usuario  = Usuario::find(3);
        $usuario->delete();
    }
    /**
     * buscar con where
     */
    public function buscar() {
        return Usuario::where('edad', '<', 30)->get();
    }
    /**
     * Seleccionar solo algunas columnas
     */
    public function algunarcolumnas() {
        return Usuario::where('id','>',2)->select('id','nombre')->get();
    }
}
