<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SkillController;

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
    return view('day.index');
});
Route::get('/portifolio-details', function () {
    return view('day.portifolio-detail');
});


Route::get('/', [SkillController::class, 'index']); // Página inicial, com habilidades

Route::get('/skills', [SkillController::class, 'index']); // Esta é a rota que você está tentando acessar
