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

Route::get('/', function () {
    return view('welcome');
});

Route::fallback(function (){
    return "<h1>Página não encontrada!</h1>";
});

Route::get('/sucesso', [UserController::class,
'sucessoUser'])->name('sucesso_users');

Route::get('/login', [UserController::class,
'loginUser'] )->name('login_users');

Route::get('registo', [UserController::class,
'registo'])-> name('registo_users');
