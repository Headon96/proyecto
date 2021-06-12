<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $id = Auth::id();
        $datosUser = user::where("id",$id)->get();
        return view('home',["datosUser"=>$datosUser]);
    }
    public function mostrarHome(){
        $id = session('id');
        $datosUser = user::get();
        return view("home", ["dhome"=>$dhome]);
    }
}
