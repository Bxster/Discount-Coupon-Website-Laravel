<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Aziende;

class AdminController extends Controller
{

    public function create()
{
    return view('aggiunta_azienda');
}

    public function storeAzienda(Request $request)
    {
        // Validazione dei dati inseriti nel form
        $validatedData = $request->validate([
            'ragionesociale' => 'required|string|max:25',
            'tipologia' => 'required|string|max:30',
            'desc' => 'required|string|max:2500',
            'citta' => 'required|string|max:30',
            'via' => 'required|string|max:30',
            'cap' => 'required|string|max:5',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Salvataggio dell'azienda nel database
        $azienda = new Aziende();
        $azienda->ragionesociale = $validatedData['ragionesociale'];
        $azienda->tipologia = $validatedData['tipologia'];
        $azienda->desc = $validatedData['desc'];
        $azienda->citta = $validatedData['citta'];
        $azienda->via = $validatedData['via'];
        $azienda->cap = $validatedData['cap'];

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $azienda->image = $imageName;
        }

        $azienda->save();

        // Reindirizzamento o altra azione dopo il salvataggio dell'azienda
        return redirect()->route('home')->with('success', 'Azienda aggiunta con successo!');
    }

  /*  public function destroy(Aziende $azienda)
    {
        $azienda->delete();

        return redirect()->route('home')->with('success', 'Azienda eliminata con successo');
    } */

        public function destroy($aziendeId)
    {
        // Trova l'azienda da eliminare
        $azienda = Aziende::findOrFail($aziendeId);

        // Elimina l'azienda
        $azienda->delete();

        // Esegui eventuali altre azioni o reindirizzamenti

        // Ad esempio, puoi reindirizzare l'utente a una pagina di conferma
        return redirect()->route('home')->with('success', 'Azienda eliminata con successo.');
    }

}
