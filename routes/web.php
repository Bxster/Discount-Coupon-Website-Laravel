<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SearchControllerPromozioni;
use App\Http\Controllers\SearchControllerAziende;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\CouponController;


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
Route::get('/lista_aziende', [PublicController::class, 'listaAziende'])->name('lista_aziende');
Route::get('/lista_aziende_search', [SearchControllerAziende::class, 'search'])->name('lista_aziende_search');
Route::get('/lista_promozioni', [PublicController::class, 'listaPromozioni'])->name('lista_promozioni');
Route::get('/lista_promozioni_search', [SearchControllerPromozioni::class, 'search'])->name('lista_promozioni_search');
Route::get('/who', function () { return view('who'); })->name('who');
Route::get('/faqs', [FaqController::class, 'index'])->name('faqs');
Route::get('/azienda/{aziendeId}', [SearchControllerAziende::class, 'show'])->name('aziendapage.show');
Route::get('/promozione/{promId}', [SearchControllerPromozioni::class, 'show'])->name('prompage.show');


Route::middleware('can:isUser')->group(function () {

    Route::get('/userpage/{userId}', [UserController::class, 'show'])->name('userpage.show');
    Route::get('/pagina_modifica/{userId}', [UserController::class, 'show1'])->name('pagina_modifica');
    Route::put('/userpage_update/{userId}', [UserController::class, 'update'])->name('userpage_update');    
    Route::get('/coupon/store/{promozioneId}', [CouponController::class, 'store'])->name('coupon.store');
    Route::get('/coupon/{couponId}', [CouponController::class, 'show'])->name('coupon.show');

});


Route::middleware('can:isStaff')->group(function () {

    Route::get('/staff/promozioni/create/{aziendeId}', [StaffController::class, 'create'])->name('aggiunta_promozione');
    Route::post('/promozioni/{aziendeId}', [StaffController::class, 'storePromozione'])->name('promozione.store');
    Route::delete('/staff/promozioni/{promId}', [StaffController::class, 'destroy'])->name('staff.promozioni.destroy');
    Route::get('/pagina_modifica_promozione/{promId}', [StaffController::class, 'show1'])->name('pagina_modifica_promozione');
    Route::put('/prompage_update/{promId}', [StaffController::class, 'update'])->name('prompage_update');
    Route::get('/staffpage/{userId}', [StaffController::class, 'show'])->name('staffpage.show');

});


// Rotte in cui possono accederci sia gli staff che l'admin
Route::middleware('can:isStaffOrAdmin')->group(function () {

    Route::get('/pagina_modifica_staff/{userId}', [StaffController::class, 'showStaff'])->name('pagina_modifica_staff');
    Route::put('/staffpage_update/{userId}', [StaffController::class, 'updateStaff'])->name('staffpage_update');

});


Route::middleware('can:isAdmin')->group(function () {

    Route::get('/admin/aziende/create', [AdminController::class, 'create'])->name('aggiunta_azienda');
    Route::post('/aziende', [AdminController::class, 'storeAzienda'])->name('aziende.store');
    Route::delete('/admin/aziende/{aziendeId}', [AdminController::class, 'destroy'])->name('admin.aziende.destroy');
    Route::get('/pagina_modifica_azienda/{aziendeId}', [AdminController::class, 'show1'])->name('pagina_modifica_azienda');
    Route::put('/aziendapage_update/{aziendeId}', [AdminController::class, 'update'])->name('aziendapage_update');  

    Route::get('/admin/aggiunta_staff', [AdminController::class, 'create2'])->name('aggiunta_staff');
    Route::post('/admin/staff', [AdminController::class, 'addStaff'])->name('admin.staff.add');

    Route::get('/admin/faqs/create', [AdminController::class, 'createFaq'])->name('aggiunta_faq');
    Route::post('/faqs', [AdminController::class, 'storeFaq'])->name('faq.store');
    Route::get('/faq_update/{faqId}', [AdminController::class, 'modificaFaq'])->name('faq_update');
    Route::put('/faq_update_success/{faqId}', [AdminController::class, 'updateFaq'])->name('faq_update_success');
    Route::delete('/admin/faqs/{faqId}', [AdminController::class, 'destroyFaq'])->name('admin.faq.destroy');
    
    Route::get('elenco_utenti', [UserController::class, 'lista'])->name('admin.elencoUtenti');
    Route::get('utenti/{userId}', [UserController::class, 'show'])->name('admin.visualizzaUtente');
    Route::delete('/admin/utenti/{userId}', [AdminController::class, 'destroyUtenti'])->name('admin.user.destroy');
    Route::get('staff/{userId}', [StaffController::class, 'show'])->name('admin.visualizzaStaff');
    Route::get('elenco_staff', [StaffController::class, 'lista'])->name('admin.elencoStaff');
    
    Route::get('/elenco_staff_search', [AdminController::class, 'searchStaff'])->name('elenco_staff_search');
    Route::get('/elenco_utenti_search', [AdminController::class, 'searchUtenti'])->name('elenco_utenti_search');

});

// include le rotte di breeze scritte in auth
require __DIR__.'/auth.php';
