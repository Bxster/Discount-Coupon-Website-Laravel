<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Promozioni;
use Illuminate\Http\Request;

class SearchControllerPromozioni extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        $promozioni = Promozioni::where('nome', 'LIKE', "%$query%")
            ->orWhere('oggetto', 'LIKE', "%$query%")
            ->get();

        return view('lista_promozioni', compact('promozioni', 'query'));
    }
}