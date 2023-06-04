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

Route::get('/', [PublicController::class, 'index', SearchControllerPromozioni::class, 'index',UserController::class, 'index'])->name('home');
Route::get('/lista_aziende', [PublicController::class, 'listaAziende'])->name('lista_aziende');
Route::get('/lista_aziende_search', [SearchControllerAziende::class, 'search'])->name('lista_aziende_search');
Route::get('/lista_promozioni_search', [SearchControllerPromozioni::class, 'search'])->name('lista_promozioni_search');
Route::get('/lista_promozioni', [PublicController::class, 'listaPromozioni'])->name('lista_promozioni');
Route::get('/who', function () {return view('who');})->name('who');
Route::get('/faqs', [FaqController::class, 'index'])->name('faqs');
Route::get('/userpage/{userId}', [UserController::class, 'show'])->name('userpage.show');
Route::get('/staffpage/{userId}', [StaffController::class, 'show'])->name('staffpage.show');
Route::get('/pagina_modifica/{userId}', [UserController::class, 'show1'])->name('pagina_modifica');
Route::put('/userpage_update/{userId}', [UserController::class, 'update'])->name('userpage_update');
Route::get('/azienda/{aziendeId}', [SearchControllerAziende::class, 'show'])->name('aziendapage.show');
Route::get('/promozione/{promId}', [SearchControllerPromozioni::class, 'show'])->name('prompage.show');
Route::get('/coupon/store/{promozioneId}', [CouponController::class, 'store'])->name('coupon.store')->can('isUser');
Route::get('/coupon/{couponId}', [CouponController::class, 'show'])->name('coupon.show')->can('isUser');
Route::post('/aziende', [AdminController::class, 'storeAzienda'])->name('aziende.store');
Route::get('/admin/aziende/create', [AdminController::class, 'create'])->name('aggiunta_azienda')->can('isAdmin');
Route::delete('/admin/aziende/{aziendeId}', [AdminController::class, 'destroy'])->name('admin.aziende.destroy')->can('isAdmin');
Route::post('/admin/staff', [AdminController::class, 'addStaff'])->name('admin.staff.add')->can('isAdmin');
Route::get('/admin/aggiunta_staff', [AdminController::class, 'create2'])->name('aggiunta_staff')->can('isAdmin');


Route::post('/promozioni/{aziendeId}', [StaffController::class, 'storePromozione'])->name('promozione.store')->can('isStaff');
Route::get('/staff/promozioni/create/{aziendeId}', [StaffController::class, 'create'])->name('aggiunta_promozione')->can('isStaff');
Route::delete('/staff/promozioni/{promId}', [StaffController::class, 'destroy'])->name('staff.promozioni.destroy')->can('isStaff');

Route::post('/faqs', [AdminController::class, 'storeFaq'])->name('faq.store');
Route::get('/admin/faqs/create', [AdminController::class, 'createFaq'])->name('aggiunta_faq')->can('isAdmin');
Route::get('/faq_update/{faqId}', [AdminController::class, 'modificaFaq'])->name('faq_update')->can('isAdmin');
Route::put('/faq_update_success/{faqId}', [AdminController::class, 'updateFaq'])->name('faq_update_success')->can('isAdmin');
Route::delete('/admin/faqs/{faqId}', [AdminController::class, 'destroyFaq'])->name('admin.faq.destroy')->can('isAdmin');

Route::get('elenco-utenti', [UserController::class, 'lista'])->name('admin.elencoUtenti');
Route::get('utenti/{userId}', [UserController::class, 'show'])->name('admin.visualizzaUtente');
Route::delete('/admin/utenti/{userId}', [AdminController::class, 'destroyUtenti'])->name('admin.user.destroy')->can('isAdmin');

Route::get('staff/{userId}', [StaffController::class, 'show'])->name('admin.visualizzaStaff')->can('isAdmin');
Route::get('elenco-staff', [StaffController::class, 'lista'])->name('admin.elencoStaff')->can('isAdmin');

Route::get('/elenco_staff_search', [AdminController::class, 'searchStaff'])->name('elenco_staff_search');
Route::get('/elenco_utenti_search', [AdminController::class, 'searchUtenti'])->name('elenco_utenti_search');

Route::get('/pagina_modifica_promozione/{promId}', [StaffController::class, 'show1'])->name('pagina_modifica_promozione');
Route::put('/prompage_update/{promId}', [StaffController::class, 'update'])->name('prompage_update');

Route::get('/pagina_modifica_azienda/{aziendeId}', [AdminController::class, 'show1'])->name('pagina_modifica_azienda');
Route::put('/aziendapage_update/{aziendeId}', [AdminController::class, 'update'])->name('aziendapage_update');








require __DIR__.'/auth.php';
