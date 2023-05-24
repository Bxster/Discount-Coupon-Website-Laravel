<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SearchControllerPromozioni;
use App\Http\Controllers\FaqController;

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

Route::get('/', [PublicController::class, 'index', SearchControllerPromozioni::class, 'index'])->name('home');
Route::get('/lista_aziende', [PublicController::class, 'listaAziende'])->name('lista_aziende');
Route::post('/lista_promozioni_search', [SearchControllerPromozioni::class, 'search'])->name('lista_promozioni_search');
Route::get('/lista_promozioni', [PublicController::class, 'listaPromozioni'])->name('lista_promozioni');
Route::get('/who', function () {return view('who');})->name('who');
Route::get('/faqs', [FaqController::class, 'index'])->name('faqs');
Route::get('/user', [PublicController::class, 'index',UserController::class, 'index'])
        ->name('user')->middleware('can:isUser');
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
