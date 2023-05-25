<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aziende;

class AziendaController extends Controller
{
    public function show($id)
    {
        $azienda = Aziende::findOrFail($id);
        return view('aziendapage', compact('azienda'));
    }
}
