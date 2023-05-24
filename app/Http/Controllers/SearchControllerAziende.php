<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Aziende;
use Illuminate\Http\Request;

class SearchControllerAziende extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        $aziende = Aziende::where('ragionesociale', 'LIKE', "%$query%")
            ->get();

        return view('lista_aziende_search', compact('aziende', 'query'));
    }
}