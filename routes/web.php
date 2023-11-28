<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Http\Controllers\UserController;

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

Route::get('/teste', function(){
    return view('tela');
});

Route::get('/variaveis/{id}/{nome}', function($id, $nome){
    return $id." - ".$nome;
});

Route::get('/usuarios', function(){
    //select * from users;
    return view('usuarios', ['usuarios' => User::all()]);
});

Route::get('/usuario/{id}', function($id){
    //select * from users where id=$id
    $usuario = User::find($id);
    return view('usuario', ['batata' => $usuario]);
});


Route::resource('/user', UserController::class);


