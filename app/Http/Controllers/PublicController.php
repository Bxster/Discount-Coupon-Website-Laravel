<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use App\Models\Promozioni;
use App\Models\Aziende;


class PublicController extends Controller
{
    protected $_aziende;
    protected $_promozioni;
    
    public function __construct()
    {
    $this->_aziende = new Aziende;
    $this->_promozioni = new Promozioni;
    }
    public function index()
    {
        $topAziende = $this->_aziende->getAziende();
        $topPromozioni = $this->_promozioni->getPromozioni();

        return view('home')
            ->with('aziende', $topAziende)
            ->with('promozioni', $topPromozioni);
    }

//porcoddeddioooooooooo

    public function listaAziende()
    {
        $listaAziende = $this->_aziende->getAziende();

        return view('lista_aziende')
             ->with('aziende',$listaAziende);
    }

    public function listaPromozioni()
    {
    $listaPromozioni = $this->_promozioni->getPromozioni();

    return view('lista_promozioni')
        ->with('promozioni', $listaPromozioni);
    }

}
