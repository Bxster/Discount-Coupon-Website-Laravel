<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SearchControllerPromozioni;
use App\Http\Controllers\SearchControllerAziende;
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

Route::get('/', [PublicController::class, 'index', SearchControllerPromozioni::class, 'index',UserController::class, 'index'])->name('home');
Route::get('/lista_aziende', [PublicController::class, 'listaAziende'])->name('lista_aziende');
Route::get('/lista_aziende_search', [SearchControllerAziende::class, 'search'])->name('lista_aziende_search');
Route::get('/lista_promozioni_search', [SearchControllerPromozioni::class, 'search'])->name('lista_promozioni_search');
Route::get('/lista_promozioni', [PublicController::class, 'listaPromozioni'])->name('lista_promozioni');
Route::get('/who', function () {return view('who');})->name('who');
Route::get('/faqs', [FaqController::class, 'index'])->name('faqs');
Route::get('/userpage/{userId}', [UserController::class, 'show'])->name('userpage.show');
Route::get('/pagina_modifica/{userId}', [UserController::class, 'show1'])->name('pagina_modifica');
Route::put('/userpage_update', [UserController::class, 'update'])->name('userpage_update');
Route::get('/azienda/{aziendeId}', [SearchControllerAziende::class, 'show'])->name('aziendapage.show');
Route::get('/promozione/{promId}', [SearchControllerPromozioni::class, 'show'])->name('prompage.show');





require __DIR__.'/auth.php';
