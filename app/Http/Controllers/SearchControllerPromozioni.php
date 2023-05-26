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

    public function search(Request $request, $paged = 3)
    {
        $query = $request->input('query');

        $promozioni = Promozioni::join('aziende', 'promozioni.aziendeId', '=', 'aziende.aziendeId')
            ->select('promozioni.nome', 'promozioni.oggetto', 'aziende.ragionesociale', 'aziende.image AS image_link', 'promozioni.promId AS proId')
            ->where('promozioni.nome', 'LIKE', "%$query%")
            ->orWhere('promozioni.oggetto', 'LIKE', "%$query%")
            ->orWhere('aziende.ragionesociale', 'LIKE', "%$query%")
            ->paginate($paged);


        return view('lista_promozioni_search', compact('promozioni', 'query'));
    }

    public function show($id){
        $promozione = Promozioni::findOrFail($id);

        return view('prompage', compact('promozione'));
    }
}
