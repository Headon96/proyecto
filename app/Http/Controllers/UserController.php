<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Auth;

class UserController extends Controller
{
    public function mostrarUser(){
        $id = Auth::id();
        $datosUser = user::where("id",$id)->get();
        return view("usuarios", ["datosUser"=>$datosUser]);
    }

    public function mostrarAdm(){
        $id = Auth::id();
        $datosUser = user::where("id",$id)->get();
        $datosUserAdm = user::get();
        return view("adm", ["datosUser"=>$datosUser,"datosUserAdm"=>$datosUserAdm]);
    }

    public function Inactivo(Request $data){
        $usuario = user::find($data->id);
        $usuario->estado = 'Inactivo';
        $usuario->save();
        return redirect("/adm_user");
    }
    public function Activo(Request $data){
        $usuario = user::find($data->id);
        $usuario->estado = 'Activo';
        $usuario->save();
        return redirect("/adm_user");
    }
}
