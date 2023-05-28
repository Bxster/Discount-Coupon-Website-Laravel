<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Models\Coupon;
use Illuminate\Support\Facades\View;

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
    
    // Controlla se l'utente ha già acquisito un coupon per la promozione corrente
    $existingCoupon = Coupon::where('userId', $userId)
                            ->where('promId', $promozioneId)
                            ->first();
    
    if ($existingCoupon) {
        // L'utente ha già acquisito un coupon per questa promozione, visualizza il messaggio di avviso
        return redirect()->route('home')->with('couponExists', true);
    }
    
    // Genera un codice unico per il coupon
    $codiceCoupon = $this->generaCodiceUnico();
    
    // Crea il nuovo coupon
    $coupon = new Coupon();
    $coupon->codice = $codiceCoupon;
    $coupon->promId = $promozioneId;
    $coupon->userId = $userId;
    $coupon->save();
    
    return redirect()->route('coupon.show', ['couponId' => $coupon->couponId]);
}



protected function generaCodiceUnico()
{
    $codiceCoupon = Str::random(6);

    // Verifica se il codice esiste già nella tabella "coupon"
    $codiceEsistente = Coupon::where('codice', $codiceCoupon)->exists();

    // Se il codice esiste già, genera un nuovo codice unico
    $tentativi = 1;
    while ($codiceEsistente) {
        $codiceCoupon = Str::random(6);
        $codiceEsistente = Coupon::where('codice', $codiceCoupon)->exists();

        // Limita il numero di tentativi per generare un codice unico
        $tentativi++;
        if ($tentativi > 100) {
            // dopo 100 tentativi il codice ritorna null, anche se è improbabile
            // che ci vogliano piu di 100 tentativi per generare un codice non doppione
            return null;
        }
    }

    return $codiceCoupon;
}


}
