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
use App\Http\Controllers\MessageController;
use App\Http\Controllers\MezclaController;
use App\Http\Controllers\PostController;
use App\Models\Usuario;
use App\Models\Post;


Route::get('/', function() {
$nombre = "Sergio";
return view('inicio')->with('nombre', $nombre);
})->name('inicio');




Route::get('/contacto', function() {
    return view('posts.contacto');
    })->name('posts.contacto');

Route::get('/noticias', function() {
    return view('posts.noticias');
    })->name('posts.noticias');

Route::get('sabores', [PostController::class, 'index'])->name('posts.index');

Route::get('sabores/marca/{marca}', [PostController::class, 'filtrarMarca'])->name('post.filtrar');

Route::get('sabores/{id}', [PostController::class, 'show'])
->where('id', "[0-9]+")
->name('post.show');


Route::get('sabores/topsabores', [PostController::class, 'topSabores'])->name('posts.topsabores');

Route::get('sabores/locales', [PostController::class, 'locales'])->name('posts.mapa');

Route::get('sabores/logout', [LoginController::class, 'logout'])->name('auth_logout');

Route::get('sabores/store', [PostController::class, 'store'])->name('post.store')->middleware('auth');

Route::put('sabores/update/{id}', [PostController::class, 'update'])->name('posts.update')->middleware('auth');

Route::get('sabores/create', [PostController::class, 'create'])->name('posts_crear')->middleware('auth');

Route::get('sabores/edit/{id}', [PostController::class, 'edit'])->name('posts.edit')->middleware('auth');

Route::get('sabores/editarPrueba/{id}', [PostController::class, 'editarPrueba'])->name('editar_Prueba');

Route::get('sabores/nuevoPrueba', [PostController::class, 'nuevoPrueba'])->name('nuevo_Prueba');

Route::get('sabores/delete/{id}', [PostController::class, 'destroy'])->name('post.destroy')->middleware('auth');

Route::get('sabores/valorar/{id}/{valoracion}', [PostController::class, 'valorar'])->name('post.valorar')->middleware('auth');


// Login

Route::get('login', [LoginController::class, 'loginForm'])->name('auth_login');

Route::post('login', [LoginController::class, 'login'])->name('auth.login');

Route::get('registro', [LoginController::class, 'registro'])->name('auth.registro');

Route::post('registro', [LoginController::class, 'registrarUsuario'])->name('auth.registrarUsuario');

Route::apiResource('posts', PostController::class);


//Routes of the mixings

Route::get('mezclas', [MezclaController::class, 'index'])->name('mezclas.index');

Route::get('mezclas/usuario', [MezclaController::class, 'misMezclas'])->name('mezclas.mismezclas')->middleware('auth');

Route::get('mezclas/create', [MezclaController::class, 'create'])->name('mezclas.crear')->middleware('auth');
Route::get('mezclas/quitar/{id}', [MezclaController::class, 'quitarMezcla'])->name('mezclas.quitar')->middleware('auth');
Route::get('mezclas/store', [MezclaController::class, 'store'])->name('mezclas.store')->middleware('auth');
Route::get('mezclas/añadir/{mezclaA}', [MezclaController::class, 'añadirMezcla'])->name('mezclas.añadir')->middleware('auth');
Route::get('mezclas/destroy/{mezclaA}', [MezclaController::class, 'destroy'])->name('mezclas.destroy')->middleware('auth');
Route::get('mezclas/premium/{userid}', [MezclaController::class, 'hacerPremium'])->name('mezclas.premium')->middleware('auth');
Route::get('mezclas/valorar/{mezclaid}', [MezclaController::class, 'valorar'])->name('mezclas.valorar')->middleware('auth');
Route::put('mezclas/valorarMezcla/{mezclaid}', [MezclaController::class, 'valorarMezcla'])->name('mezclas.valorarMezcla')->middleware('auth');
Route::get('mezclas/quefumohoy/{id}', [MezclaController::class, 'mezclaAleatoria'])->name('mezclas.aleatoria')->middleware('auth');


//Routes of chat

Route::get('chat', [MessageController::class,'index'])->name('msg.index')->middleware('auth');
Route::post('chat/messages', [MessageController::class, 'sentMessage'])->name('msg.sent')->middleware('auth');
Route::get('chat/destroy/{id}', [MessageController::class, 'destroy'])->name('msg.destroy')->middleware('auth');
