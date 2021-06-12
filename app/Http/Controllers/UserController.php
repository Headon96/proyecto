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
}
