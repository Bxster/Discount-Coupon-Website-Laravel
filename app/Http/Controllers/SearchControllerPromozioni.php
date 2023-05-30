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

    public function search(Request $request, $paged = 4)
    {
        $companyQuery = $request->input('companyQuery');
        $promotionQuery = $request->input('promotionQuery');

        $results = Promozioni::join('aziende', 'promozioni.aziendeId', '=', 'aziende.aziendeId')
            ->select('promozioni.nome', 'promozioni.oggetto', 'aziende.ragionesociale', 'aziende.image AS image_link', 'promozioni.promId AS proId')
            ->where('aziende.ragionesociale', 'LIKE', "%$companyQuery%")
            ->where(function ($query) use ($promotionQuery) {
                $query->where('promozioni.nome', 'LIKE', "%$promotionQuery%")
                    ->orWhere('promozioni.oggetto', 'LIKE', "%$promotionQuery%");
            })
            ->paginate($paged);

        return view('lista_promozioni_search', compact('results'));
    }

    public function show($id){
        $promozione = Promozioni::findOrFail($id);

        return view('prompage', compact('promozione'));
    }
}
