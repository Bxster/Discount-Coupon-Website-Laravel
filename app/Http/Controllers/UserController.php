<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use App\Models\User;
use App\Models\Aziende;
use App\Models\Promozioni;
use App\Models\Coupon;
use Carbon\Carbon;


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

    $user = User::find($userId);

    $oggi = Carbon::now()->format('Y-m-d');

    $request->validate([
        'name' => ['required', 'string', 'max:255', 'regex:/^[a-zA-Z\s]+$/'],
        'surname' => ['required', 'string', 'max:255', 'regex:/^[a-zA-Z\s]+$/'],
        'cellulare' => ['required', 'numeric', 'digits:10'],
        'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users')->ignore($user)],
        'password' => ['nullable', 'string', 'min:8'],
        'genere' => ['required', 'integer', 'in:0,1'],
        'dataNascita' => ['required', 'date', 'before_or_equal:'.$oggi],
    ]);

    
    $user->name = $request->name;
    $user->surname = $request->surname;
    $user->cellulare = $request->cellulare;
    $user->email = $request->email;
    if ($request->password) {
        $user->password = Hash::make($request->password);
    }
    $user->genere = $request->genere;
    $user->dataNascita = $request->dataNascita;
    $user->update();

    return redirect()->route('home');
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

}
