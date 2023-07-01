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

    public function search(Request $request, $paged= 4)
    {
        $query = $request->input('query');

        // Esegue una query per cercare le aziende il cui nome contiene la stringa cercata
        // operatore 'LIKE' per effettuare una corrispondenza parziale
        $aziende = Aziende::where('name', 'LIKE', "%$query%")
            ->paginate($paged);

        return view('lista_aziende_search', compact('aziende', 'query'));

    }

    public function show($id)
    {
        $azienda = Aziende::findOrFail($id);
        return view('aziendapage', compact('azienda'));
    }

}