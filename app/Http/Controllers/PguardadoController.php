<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\PguardadoController;
use App\Models\User;
use App\Models\publicacion;
use Auth;
use App\Models\pguardado;


class PguardadoController extends Controller
{
    public function mostrarG(){
        $id = Auth::id();
        $datosUser = user::where("id",$id)->get();
        $dguardado = pguardado::get();
        return view("pguardado", ["dguardado"=>$dguardado],["datosUser"=>$datosUser]);
    }

    public function crearG(Request $data){
        
        $id = Auth::id(); 
         
   
        
        $pguardado = new pguardado();
        $pguardado->fecha = $data["fecha"];
        $pguardado->hora = $data["hora"];
        $pguardado->titulo_g = $data["titulo_p"];
        $pguardado->img_g = $data["img_publi"];
        $pguardado->descripcion_g = $data["descripcion_p"];
        $pguardado->f_id_g = $data["id"];
        $pguardado->save();
        $dguardado = pguardado::get();
        $mensaje = "Registrado con éxito";
        $datosUser = user::where("id",$id)->get();                 
        return view("pguardado", ["mensaje"=>$mensaje,'datosUser'=>$datosUser], ["dguardado"=>$dguardado]);
            
    }

}
