<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aziende;
use App\Models\Promozioni;

class StaffController extends Controller
{

    public function create($aziendeId)
    {
        $azienda = Aziende::find($aziendeId);
        return view('aggiunta_promozione')
            ->with('azienda',$azienda);
    }
    
        public function storePromozione(Request $request, $aziendeId)
        {

            // Validazione dei dati inseriti nel form
            $validatedData = $request->validate([
                'nome' => 'required|string|max:25',
                'oggetto' => 'required|string|max:30',
                'modalita' => 'required|string|max:2500',
                'luoghi_fruizione' => 'required|string|max:30',
                'tempi_fruizione' => 'required|date',
            ]);
    
            // Salvataggio della promozione nel database
            $promozione= new Promozioni();
            $promozione->nome = $validatedData['nome'];
            $promozione->oggetto = $validatedData['oggetto'];
            $promozione->modalita = $validatedData['modalita'];
            $promozione->aziendeId = $aziendeId;
            $promozione->luoghi_fruizione = $validatedData['luoghi_fruizione'];
            $promozione->tempi_fruizione = $validatedData['tempi_fruizione'];
    
    
            $promozione->save();
    
            // Reindirizzamento o altra azione dopo il salvataggio dell'promozione
            return redirect()->route('home')->with('success', 'Promozione aggiunta con successo!');
        }
    
      /*  public function destroy(Aziende $promozione)
        {
            $promozione->delete();
    
            return redirect()->route('home')->with('success', 'Promozione eliminata con successo');
        } */
    
            public function destroy($promId)
        {
            // Trova l'promozione da eliminare
            $promozione = Promozione::findOrFail($promId);
    
            // Elimina l'promozione
            $promozione->delete();
    
            // Esegui eventuali altre azioni o reindirizzamenti
    
            // Ad esempio, puoi reindirizzare l'utente a una pagina di conferma
            return redirect()->route('home')->with('success', 'Promozione eliminata con successo.');
        }
    
}
