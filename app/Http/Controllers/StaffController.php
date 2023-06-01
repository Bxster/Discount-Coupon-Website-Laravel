<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aziende;
use App\Models\Promozioni;
use App\Models\User;
use Carbon\Carbon;


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

            $oggi = Carbon::now();
            // Validazione dei dati inseriti nel form
            $validatedData = $request->validate([
                'nome' => 'required|string|max:25',
                'oggetto' => 'required|string|max:30',
                'modalita' => 'required|string|max:2500',
                'luoghi_fruizione' => 'required|string|max:30',
                'tempi_fruizione' => 'required|date|after_or_equal:'.$oggi,
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
    
            public function destroy($promId)
        {
            // Trova l'promozione da eliminare
            $promozione = Promozioni::findOrFail($promId);
    
            // Elimina l'promozione
            $promozione->delete();
    
            // Esegui eventuali altre azioni o reindirizzamenti
    
            // Ad esempio, puoi reindirizzare l'utente a una pagina di conferma
            return redirect()->route('home')->with('success', 'Promozione eliminata con successo.');
        }

        public function show($userId)
        {
            $user = User::findOrFail($userId);
            return view('staffpage', compact('user'));
        }

        public function lista()
        {
            $user = User::where('role', 'staff')->get();
            return view('elenco_staff', ['users' => $user]);
        }

        public function show1($promId) {
            $promozione = Promozioni::find($promId);
        
            if (!$promozione) {
                abort(404);
            }
        
            return view('pagina_modifica_promozione', compact('promozione'));
            }
    
            public function update(Request $request, $promId)
    {
        $oggi = Carbon::now();

        

        $request->validate([
            'nome' => ['required', 'string', 'max:25'],
            'oggetto' => ['required', 'string', 'max:30'],
            'modalita' => ['required', 'string', 'max:2500'],
            'luoghi_fruizione' => ['required', 'string', 'max:30'],
            'tempi_fruizione' => ['required', 'string', 'after_or_equal:'.$oggi],
        ]);

        $promozione = Promozioni::find($promId);

        $promozione->nome = $request['nome'];
        $promozione->oggetto = $request['oggetto'];
        $promozione->modalita = $request['modalita'];
        $promozione->luoghi_fruizione = $request['luoghi_fruizione'];
        $promozione->tempi_fruizione = $request['tempi_fruizione'];
        //$promozione->update($request->all());
        $promozione->update();
    
        return redirect()->route('home')->with('success', 'Promozione aggiornata con successo.');
    }
    
    
}
