<?php
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\publicacion;
use App\Models\comentarios;
use App\Models\pguardado;
use App\Http\Controllers\ComentariosController;
use App\Http\Controllers\PguardadoController;
use App\Http\Controllers\PublicacionController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::view('/usuario', 'usuarios');
route::get('/usuario',[UserController::class,'mostrarUser']);

Route::view('/publicaciones', 'publicaciones');
route::get('/publicaciones',[PublicacionController::class,'mostrarP'])->name('publica');
Route::post('/publicaciones', [PublicacionController::class, "crearP"]);

/*
 guardado de pub
 */

Route::view('/pguardado', 'pguardado');
route::get('/pguardado',[PguardadoController::class,'mostrarG'])->name('guardar');
Route::post('/pguardado', [PguardadoController::class, "crearG"]);


/*
 administrador
 */

 Route::view('/adm_user', 'adm');
 route::get('/adm_user',[UserController::class,'mostrarAdm']);

 Route::post('/pguardado-A', [UserController::class, "Activo"]);
 Route::post('/pguardado-I', [UserController::class, "Inactivo"]);