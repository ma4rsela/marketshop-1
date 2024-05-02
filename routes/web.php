<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\User;


Route::get('/home', function () {
    return view('welcome');
});

Route::view('/', 'home');

Route::view('/cria-conta', 'cria-conta');

Route::view('/testedeconteudo', 'teste');

Route::post('/salva-usuario',
function (Request $request) {
    //dd($request);


    $usuario = new User();

    $usuario->name = $request->nome;
    $usuario->email = $request->email;
    $usuario->password = $request->senha;
$usuario->save();
dd("salvo com sucesso!!");


})->name('salva-usuario');

