<?php

use Illuminate\Support\Facades\Route;
use App\Models\livro;

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

Route::get('/cadastrarlivro', function(){   
    $livrJava = new livro();
    $livrJava->titulo = "Programacao Java";
    $livrJava->isbn = "123456";
    $livrJava->genero = "programacao";
    $livrJava->save();
    return livro::all();
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
