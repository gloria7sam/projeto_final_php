<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/* Rota que já vem por defeito */
Route::get('/', function () {
    return view('welcome');
});


/* Rota para fallback */
Route::fallback(function (){
    return "<h1>Página não encontrada!</h1>";
});


/* Rota para indicar que o registo foi efetuado com sucesso */
Route::get('/sucesso', [UserController::class,
'sucessoUser'])->name('sucesso_users');


/* Rota da página inicial */
Route::get('/index', [UserController::class,
'indexPage'])->name('index_page');


/* Rota da página - Login */
Route::get('/login', [UserController::class,
'loginUser'] )->name('login_users');


/* Rota da página - Registo */
Route::get('/registo', [UserController::class,
'registo'])-> name('registo_users');


/* Rota da página - bandas */
Route::get('/bandas', [UserController::class,
'bandasController'])->name('bandas_page');


/* Rota da página - albuns */
Route::get('/albuns', [UserController::class,
'albunsController'])->name('albuns_page');


/* Rota da página - criar álbum */

/* Route::get('/criar_album_page', [UserController::class,
'criarAlbumPage'])->name('criar_album'); */

Route::get('/criar_album_page', [UserController::class,
'criarAlbumPage'])->name('criar_album');

Route::post('criar_album_page', [UserController::class,
'createAlbumController'])->name('criar_album');;


/* Rota da página - atualizar álbum */
Route::post('/atualizar_album_page', [UserController::class,
'atualizarAlbumPage'])->name('atualizar_album');


/* Rota da página - eliminar álbum */
Route::post('/eliminar_album_page', [UserController::class,
'eliminarAlbumPage'])->name('eliminar_album');
