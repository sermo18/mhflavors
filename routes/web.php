<?php

use Illuminate\Support\Facades\Route;

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
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MezclaController;
use App\Http\Controllers\PostController;
use App\Models\Usuario;
use App\Models\Post;


Route::get('/', function() {
$nombre = "Sergio";
return view('inicio')->with('nombre', $nombre);
})->name('inicio');




Route::get('/posts/contacto', function() {
    return view('posts.contacto');
    })->name('posts.contacto');
    
Route::get('posts', [PostController::class, 'index'])->name('posts.index');

Route::get('posts/marca/{marca}', [PostController::class, 'filtrarMarca'])->name('post.filtrar');

Route::get('posts/{id}', [PostController::class, 'show'])
->where('id', "[0-9]+")
->name('post.show');


Route::get('posts/topsabores', [PostController::class, 'topSabores'])->name('posts.topsabores');

Route::get('posts/locales', [PostController::class, 'locales'])->name('posts.mapa');


Route::get('posts/logout', [LoginController::class, 'logout'])->name('auth_logout');


Route::get('posts/store', [PostController::class, 'store'])->name('posts.store');

Route::put('posts/update/{id}', [PostController::class, 'update'])->name('posts.update');

Route::get('posts/create', [PostController::class, 'create'])->name('posts_crear');

Route::get('posts/edit/{id}', [PostController::class, 'edit'])->name('posts.edit');

Route::get('posts/editarPrueba/{id}', [PostController::class, 'editarPrueba'])->name('editar_Prueba');

Route::get('posts/nuevoPrueba', [PostController::class, 'nuevoPrueba'])->name('nuevo_Prueba');

Route::delete('posts/{id}', [PostController::class, 'destroy'])->name('post.destroy')->middleware('auth');

Route::delete('posts/valorar/{id}/{valoracion}', [PostController::class, 'valorar'])->name('post.valorar');


// Login

Route::get('login', [LoginController::class, 'loginForm'])->name('auth_login');

Route::post('login', [LoginController::class, 'login'])->name('auth.login');

Route::get('registro', [LoginController::class, 'registro'])->name('auth.registro');

Route::post('registro', [LoginController::class, 'registrarUsuario'])->name('auth.registrarUsuario');

Route::apiResource('posts', PostController::class);


//Mezclas

Route::get('mezclas', [MezclaController::class, 'index'])->name('mezclas.index');

Route::get('mezclas/usuario', [MezclaController::class, 'misMezclas'])->name('mezclas.mismezclas');

Route::get('mezclas/create', [MezclaController::class, 'create'])->name('mezclas.crear');

Route::get('mezclas/store', [MezclaController::class, 'store'])->name('mezclas.store');
Route::get('mezclas/añadir/{mezclaA}', [MezclaController::class, 'añadirMezcla'])->name('mezclas.añadir');
Route::get('mezclas/destroy/{mezclaA}', [MezclaController::class, 'destroy'])->name('mezclas.destroy');
Route::get('mezclas/premium/{userid}', [MezclaController::class, 'hacerPremium'])->name('mezclas.premium');
Route::get('mezclas/valorar/{mezclaid}', [MezclaController::class, 'valorar'])->name('mezclas.valorar');
Route::put('mezclas/valorarMezcla/{mezclaid}', [MezclaController::class, 'valorarMezcla'])->name('mezclas.valorarMezcla');
Route::get('mezclas/quefumohoy/{id}', [MezclaController::class, 'mezclaAleatoria'])->name('mezclas.aleatoria');
