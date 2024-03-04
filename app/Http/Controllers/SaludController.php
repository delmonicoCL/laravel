<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaludController extends Controller
{
    public function inicio(){
        return view('formulario');

    }

    public function saludo(Request $request, $comentario){
        	
        $nombre = $request->input('nombre');
        $apellido = $request->input('apellido');

        // $datos['nombre'] = $nombre;
        // $datos['apellido'] = $apellido;
        // return view('saludo', $datos);

return view('saludo',compact('nombre','apellido','comentario'));

    }
}
