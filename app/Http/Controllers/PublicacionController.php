<?php

namespace App\Http\Controllers;

use App\Http\Controllers\PublicacionController;
use App\Models\User;
use App\Models\publicacion;
use Illuminate\Http\Request;
use Auth;

class PublicacionController extends Controller
{
    public function mostrarP(){
        $id = Auth::id();
        $datosUser = user::where("id",$id)->get();
        $dpubli = publicacion::get();
        return view("publicaciones", ["dpubli"=>$dpubli],["datosUser"=>$datosUser]);
    }

    public function crearP(Request $data){
        $data->validate(
            [
                'txtName'=>'required | min:3 | max:50',
                'txtMsg'=>'required | min:3 | max:500',
                'img' =>'mimes:jpeg,bmp,png,jpg | max:2048',
            ]
        );
            $userId = Auth::id();
            $publicacion = new publicacion();
            $publicacion->fecha = $data["fecha"];
            $publicacion->hora = $data["hora"];
            $publicacion->titulo_p = $data["txtName"];
            $publicacion->descripcion_p = $data["txtMsg"];
            $publicacion->f_id_user = $userId;
            $publicacion->save();

            $dpubli = publicacion::get();
            $mensaje = "Registrado con éxito";
            return view("publicaciones", ["mensaje"=>$mensaje], ["dpubli"=>$dpubli]);
    }
}

