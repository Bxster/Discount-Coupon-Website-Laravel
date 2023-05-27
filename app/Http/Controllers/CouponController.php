<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Models\Coupon;

class CouponController extends Controller
{
    
    public function show($couponId)
{
    // Ottenere il coupon dal suo ID
    $coupon = Coupon::find($couponId);
    
    if (!$coupon) {
        // Il coupon non è stato trovato, puoi gestire questa situazione come preferisci
        return abort(404);
    }
    
    // Passa il coupon alla vista del coupon per visualizzarlo
    return view('coupon', compact('coupon'));
}


public function store($promozioneId)
{
    
    // Recupera l'ID dell'utente autenticato
    $userId = Auth::id();
    
    // Genera un codice unico per il coupon
    $codiceCoupon = $this->generaCodiceUnico();
    
    // Crea il nuovo coupon
    $coupon = new Coupon();
    $coupon->codice = $codiceCoupon;
    $coupon->promId = $promozioneId;
    $coupon->userId = $userId;
    $coupon->save();
    
    return Redirect::route('coupon.show', ['couponId' => $coupon->couponId]);
}

protected function generaCodiceUnico()
{
    $codiceCoupon = Str::random(6);
    return $codiceCoupon;
}

}
