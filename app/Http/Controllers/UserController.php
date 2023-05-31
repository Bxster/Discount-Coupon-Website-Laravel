<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Aziende;
use App\Models\Promozioni;
use App\Models\Coupon;


class UserController extends Controller
{
    protected $_userModel;
    protected $_aziende;
    protected $_promozioni;

    

    public function __construct() {
        $this->_userModel = new User;
        $this->_aziende = new Aziende;
        $this->_promozioni = new Promozioni;
    }
    public function index()
    {
        return view('home');
    }

    public function show($userId) {
    
        $user = User::find($userId);
        $coupons = Coupon::where('userId', $user->userId)->get();

        if (!$user) {
            abort(404);
        }

    return view('userpage', compact('user'))->with('coupons', $coupons);
    }

    public function show1($userId) {
        $user = User::find($userId);
    
        if (!$user) {
            abort(404);
        }
    
        return view('pagina_modifica', compact('user'));
        }

    public function update(Request $request, $userId)
{
    $user = User::find($userId); // Recupera l'utente autenticato
    $user->update($request->all());

    return redirect()->route('home')->with('success', 'Dati personali aggiornati con successo.');
}

public function lista()
{
    $users = User::where('role', 'user')->get();
    return view('elenco_utenti', compact('users'));
}
public function utenti()
{
    return view('home');
}


/*public function storicoCoupon()
{
    // Recupera l'ID dell'utente autenticato
    $userId = $user->userId;

    // Recupera i coupon generati dall'utente
    $couponList = Coupon::where('userId', $userId)->get();

    // Passa i dati dei coupon alla vista parziale
    return view('partials.storico_coupon', ['couponList' => $couponList]);
} */

}
