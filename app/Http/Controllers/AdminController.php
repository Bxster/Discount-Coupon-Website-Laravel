<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Aziende;
use App\Models\User;
use App\Models\Faq;
use Illuminate\Support\Facades\Hash;

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
            'tipologia' => 'required|string|max:30|regex:/^[a-zA-Z\s]+$/',
            'desc' => 'required|string|max:2500',
            'citta' => 'required|string|max:30|regex:/^[a-zA-Z\s]+$/',
            'via' => 'required|string|max:30',
            'cap' => 'required|string|numeric|digits:5',
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

    public function create2()
    {
        return view('aggiunta_staff');
    }

        public function addStaff(Request $request)
    {
        // Validazione dei dati del form
        $validatedData = $request->validate([
            'name' => 'required|string|max:255|regex:/^[a-zA-Z\s]+$/',
            'surname' => 'required|string|max:255|regex:/^[a-zA-Z\s]+$/',
            'cellulare' => 'required|numeric|digits:10',
            'email' => 'required|string|email|unique:users',
            'username' => 'required|string|min:8|unique:users',
            'password' => 'required|string|min:8',
            'genere' => 'required|in:0,1',
            'dataNascita' => 'required|date|before_or_equal:oggi',
        ]);

        // Creazione del nuovo utente staff
        $user = new User();
        $user->name = $validatedData['name'];
        $user->surname = $validatedData['surname'];
        $user->cellulare = $validatedData['cellulare'];
        $user->email = $validatedData['email'];
        $user->username = $validatedData['username'];
        $user->password = Hash::make($validatedData['password']);
        $user->role = 'staff'; // Imposta il ruolo come "staff"
        $user->genere = $validatedData['genere'];
        $user->dataNascita = $validatedData['dataNascita'];

        $user->save();

        // Reindirizzamento o visualizzazione di un messaggio di successo
        return redirect()->route('home')->with('success', 'Utente staff aggiunto con successo!');
    }
    public function createFaq()
    {
        return view('aggiunta_faq');
    }

    public function storeFaq(Request $request)
    {
        // Validazione dei dati inseriti nel form
        $validatedData = $request->validate([
            'titolo' => 'required|string|max:200',
            'corpo' => 'required|string|max:2500',
        ]);

        // Salvataggio delle faq nel database
        $faq = new FAQ();
        $faq->titolo = $validatedData['titolo'];
        $faq->corpo = $validatedData['corpo'];

        $faq->save();

        // Reindirizzamento o altra azione dopo il salvataggio delle faq
        return redirect()->route('faqs')->with('success', 'Faq aggiunta con successo!');
    }
    public function modificaFaq($faqId)   
    {
        $faq=FAQ::find($faqId);

        return view('pagina_modifica_faq')
        ->with('faq', $faq);
    }
    public function updateFaq(Request $request, $faqId)
    {  
        $faq=FAQ::find($faqId);
        
        $faq->update($request->all());

        return redirect()->route('faqs')->with('success', 'Faq aggiornate con successo');
    }

    public function destroyFaq($faqId)
    {
        // Trova la faq da eliminare
        $faq = FAQ::findOrFail($faqId);

        // Elimina l'faq$faq
        $faq->delete();

        // Ad esempio, puoi reindirizzare l'utente a una pagina di conferma
        return redirect()->route('faqs')->with('success', 'Faq eliminata con successo.');
    }


    public function destroyUtenti($userId)
    {
        // Trova l'utente da eliminare
        $user = User::findOrFail($userId);

        // Elimina l'utente
        $user->delete();

        // Esegui eventuali altre azioni o reindirizzamenti

        // Ad esempio, puoi reindirizzare l'admin a una pagina di conferma
        return redirect()->route('home')->with('success', 'Utente eliminato con successo.');
    }

    public function searchUtenti(Request $request, $paged = 4)
{
    $query = $request->input('query');
    $user = User::where('role', 'user')
        ->where(function ($queryBuilder) use ($query) {
            $queryBuilder->where('username', 'LIKE', "%$query%")
                ->orWhere('name', 'LIKE', "%$query%")
                ->orWhere('surname', 'LIKE', "%$query%");
        })
        ->paginate($paged);

    return view('elenco_utenti_search', compact('user', 'query'));
}


public function staff()
{
    return view('home');
}

public function searchStaff(Request $request, $paged = 4)
{
    $query = $request->input('query');
    $user = User::where('role', 'staff')
        ->where(function ($queryBuilder) use ($query) {
            $queryBuilder->where('username', 'LIKE', "%$query%")
                ->orWhere('name', 'LIKE', "%$query%")
                ->orWhere('surname', 'LIKE', "%$query%");
        })
        ->paginate($paged);

    return view('elenco_staff_search', compact('user', 'query'));
}    

        public function show1($aziendeId) {
            $azienda = Aziende::find($aziendeId);
        
            if (!$azienda) {
                abort(404);
            }
        
            return view('pagina_modifica_azienda', compact('azienda'));
            }
    
            public function update(Request $request, $aziendeId)
    {
        $azienda = Aziende::find($aziendeId);
        $azienda->ragionesociale = $request['ragionesociale'];
        $azienda->tipologia = $request['tipologia'];
        $azienda->desc = $request['desc'];
        $azienda->citta = $request['citta'];
        $azienda->via = $request['via'];
        $azienda->cap = $request['cap'];
        $azienda->update();
    
        return redirect()->route('home')->with('success', 'Azienda aggiornata con successo.');
    }
    
    

}
