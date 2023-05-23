<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;

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

Route::get('/', [PublicController::class, 'index'])->name('home');
Route::get('/aziende', [PublicController::class, 'listaAziende'])->name('lista_aziende');
Route::get('/promozioni', [PublicController::class, 'listaPromozioni'])->name('lista_promozioni');
Route::get('/who', function () {return view('who');})->name('who');
Route::get('/faq', function () {return view('faq');})->name('faq');
/*
Route::get('/FAQ', function () {
        return view('faq');
       });

Route::get('/login', function () {
        return view('login');
       });

Route::get('/registrazione', function () {
        return view('registrazione');
       });

Route::get('/listazienda', function () {
        return view('listaAzienda');
       });

Route::get('/catalogo', function () {
        return view('catalogo');
       });

Route::get('/homepage1',function () {
        return view('homepage1');
       });*/
require __DIR__.'/auth.php';
