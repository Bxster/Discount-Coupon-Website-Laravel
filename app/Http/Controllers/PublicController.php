<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use App\Models\Promozioni;
use App\Models\Aziende;


class PublicController extends Controller
{
    public function index()
    {
        $aziende = new Aziende;
        $promozioni = new Promozioni;

        return view('home')
            ->with('aziende', $aziende)
            ->with('promozioni', $promozioni);
    }

//porcoddeddioooooooooo

    public function listaAziende()
    {
        $aziende = Aziende::all();

        return view('lista_aziende')
            ->with('aziende', $aziende);
    }

    public function listaPromozioni()
    {
    $promozioni = Promozioni::all();

    return view('lista_promozioni')
        ->with('promozioni', $promozioni);
    }

}
