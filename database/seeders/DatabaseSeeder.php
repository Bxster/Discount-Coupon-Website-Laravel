<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder {

    /**
     * Seed the application's database.
     *
     * @return void
     */
  
    public function run() {

        DB::table('users')->insert([
            [
                'name' => 'Mario', 'surname' => 'Rossi', 'cellulare' => '1234567890',
                'email' => 'mario@example.com', 'email_verified_at' => now(), 'username' => 'mario123',
                'password' => Hash::make('password123'), 'role' => 'user', 'genere' => 0, 'dataNascita' => '1990-01-01',
                'remember_token' => Str::random(10), 'created_at' => now(), 'updated_at' => now(),
            ],
            [
                'name' => 'user', 'surname' => 'user', 'cellulare' => '1234567890',
                'email' => 'user@gmail.com.com', 'email_verified_at' => now(), 'username' => 'useruser',
                'password' => Hash::make('JANHw6dq'), 'role' => 'user', 'genere' => 1, 'dataNascita' => '1990-01-01',
                'remember_token' => Str::random(10), 'created_at' => now(), 'updated_at' => now(),
            ],
            [
                'name' => 'Giulia', 'surname' => 'Verdi', 'cellulare' => '9876543210',
                'email' => 'giulia@example.com', 'email_verified_at' => now(), 'username' => 'giulia456',
                'password' => Hash::make('password456'), 'role' => 'staff', 'genere' => 1, 'dataNascita' => '1995-05-10',
                'remember_token' => Str::random(10), 'created_at' => now(), 'updated_at' => now(),
            ],
            [
                'name' => 'staff', 'surname' => 'staff', 'cellulare' => '9876543210',
                'email' => 'staff@gmail.com', 'email_verified_at' => now(), 'username' => 'staffstaff',
                'password' => Hash::make('JANHw6dq'), 'role' => 'staff', 'genere' => 0, 'dataNascita' => '1995-05-10',
                'remember_token' => Str::random(10), 'created_at' => now(), 'updated_at' => now(),
            ],
            [
                'name' => 'admin', 'surname' => 'admin', 'cellulare' => '3333333333',
                'email' => 'admin@example.com', 'email_verified_at' => now(), 'username' => 'adminadmin',
                'password' => Hash::make('JANHw6dq'), 'role' => 'admin', 'genere' => 1, 'dataNascita' => '1980-05-10',
                'remember_token' => Str::random(10), 'created_at' => now(), 'updated_at' => now(),
            ]
        ]);

        DB::table('aziende')->insert([
            [
                
                'name' => 'Booking',
                'tipologia' => 'Viaggi, Voli e Hotel',
                'desc' => 'Indeciso per dove partire per la tua prossima vacanza indimenticabile? Scopri su Booking.com la tua futura meta e prenota facilmente online il tuo viaggio. Infatti, tramite il sito booking.com puoi ricercare e fissare alloggi di ogni tipo come case vacanze, appartamenti, resort, ville, ostelli, bed and breakfast, affittacamere e alberghi, ma anche voli, pacchetti vacanza, treni, autobus e puoi anche o noleggiare un\'auto oppure prenotare il servizio taxi da e per l\'aeroporto che desideri. Solo grazie a Booking.com hai infatti la possibilità di vedere i luoghi più belli nel mondo a prezzi super convenienti. Inoltre Booking.com è anche il portale perfetto per chi viaggia spesso per lavoro e per questo ha necessità di trovare sempre offerte e sconti. Iscriviti quindi a Booking.com e accedi anche a tutte le offerte segrete. Infine, per risparmiare ulteriormente sulle tue vacanze, non dimenticare di ricercare online i codici sconto Booking.com.',
                'citta' => 'Roma',
                'via' => 'Via Terenzio, 35',
                'cap' => '00193',
                'image' => 'booking.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
            
                'name' => 'Amazon',
                'tipologia' => 'e-commerce e streaming',
                'desc' => 'Ami la musica? Acquista su Amazon la musica digitale che vuoi per vivere sempre al ritmo giusto. Ti piacciono le serie TV? Scopri i cofanetti di Amazon. Adori la tecnologia? Sfoglia il catalogo elettronica e informatica su Amazon. Preferisci invece passare del tempo all\'aria aperta o sei uno sportivo? Amazon ti mette a disposizione una lista infinita di prodotti dedicati al giardinaggio e all\'abbigliamento sportivo. Se invece devi fare dei regali speciali, ricercali nelle categorie abbigliamento, scarpe e gioielli. Infine, ti prendi cura della casa e del tuo amico a quattro zampe? Adesso su Amazon trovi anche tutto per gli animali domestici e per la pulizia della casa. Inoltre, per rendere il tuo shopping online ancora più soddisfacente, Amazon mette a disposizione codici promozionali utilizzabili per acquistare i tuoi prodotti preferiti a prezzi ancora più convenienti.',
                'citta' => 'Milano',
                'via' => 'Porta Nuova',
                'cap' => '20121',
                'image' => 'amazon.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                
                'name' => 'Bershka',
                'tipologia' => 'Moda e Accessori',
                'desc' => 'Sei un giovane audace e dinamico, sempre attento a seguire le ultime tendenze? Quello che fa per te è Bershka, lo shop online dedicato all\'abbigliamento trendy, il punto di riferimento per un pubblico esperto ed esigente nel settore della moda. Infatti, visitando il sito bershka.com trovi capi d\'abbigliamento come giacche, cappotti, blazer, pantaloni, jeans, gonne, vestiti, maglioni, felpe, camicie, magliette, top, short, scarpe e molto altro ancora, che il team creativo di Bershka ha realizzando ispirandosi ai più innovativi fashion trend sul mercato. Inoltre, su Bershka trovi anche accessori come cinture, borse, bigiotteria, costumi e cosmetici. Per restare sempre al passo con le mode più in voga, affidati agli stilisti di Bershka visitando il sito bershka.com e scopri i codici sconto Bershka per risparmiare sul tuo look.',
                'citta' => 'Ancona',
                'via' => 'Corso Giuseppe Garibaldi 59',
                'cap' => '60121',
                'image' => 'bershka.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                
                'name' => 'Carrefour',
                'tipologia' => 'Cibi e Bevande',
                'desc' => 'Carrefour è il supermercato di origine francese, che vanta oltre 50 anni di esperienza, più di 20.000 collaboratori, più di 1000 punti vendita nella sola Italia, divisi su 18 regioni. Il nuovo servizio Carrefour ti permette di fare la spesa, con grande risparmio di tempo e fatica.
                Puoi comprare i prodotti che desideri all\'interno del loro ricco assortimento di frutta, verdura, latte, latticini, scatolame, acqua, bibite, alcolici, surgelati, prodotti per bambini e per animali, articoli per la casa e per la cura della persona. 
                Grazie ai nostri codici sconto Carrefour puoi iniziare subito a risparmiare sulla spesa di tutti i giorni.
                Scopri i migliori coupon attivi e sfruttali prima che scadano.
                La spesa da oggi può essere più facile, veloce e leggera!',
                'citta' => 'Jesi',
                'via' => 'Piazzale Anna Ciabotti',
                'cap' => '60035',
                'image' => 'carrefour.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                
                'name' => 'Unieuro',
                'tipologia' => 'Informatica',
                'desc' => 'Quando parliamo di elettronica e informatica, la scelta giusta è Unieuro: la grande catena italiana omnicanale. Per lavoro o per hobby, sei un appassionato di informatica e non puoi fare a meno di avere l\'ultimo modello di computer appena uscito? Ti piace la fotografia e desideri una nuova fotocamera? Hai appena finito di ristrutturare casa e stai cercando dei nuovi elettrodomestici? Da oggi, Unieuro, oltre che con i suoi numerosi punti vendita, ti offre la possibilità anche di acquistare tutti i prodotti di cui necessiti, comodamente da casa. Il catalogo online su unieuro.it è davvero molto ampio e al suo interno puoi trovare anche alcuni prodotti dedicati al tempo libero come, ad esempio, musica, libri, film, biciclette e vari videogiochi (Nintendo, Playstation, Xbox ed altri). Visitando il sito, puoi conoscere anche tutte le offerte esclusive che vengono applicate solo sul servizio web. In fine, Unieuro, abitualmente, mette a disposizione dei suoi clienti online buoni sconto incomparabili.',
                'citta' => 'Ancona',
                'via' => 'Via Scataglini 7',
                'cap' => '60131',
                'image' => 'unieuro.png',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);

        DB::table('faqs')->insert([
            [
                
                'titolo' => 'Come faccio a cercare una promozione?',
                'corpo' => 'Per cercare una promozione devi cliccare nei box di ricerca ed inserire il nome della promozione e/o dell\'azienda che vuoi cercare.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                
                'titolo' => 'Come vedo le aziende presenti nel sito?',
                'corpo' => 'Per vedere le aziende presenti nel sito devi cliccare su "Vedi tutte le aziende" scorrendo la homepage.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                
                'titolo' => 'Come faccio a contattarvi?',
                'corpo' => 'Nella sezione in basso trovi un email e cliccandola puoi inviarcene una.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                
                'titolo' => 'Qual è la validità delle promozioni?',
                'corpo' => 'La validità delle promozioni varia a seconda dell\'offerta; ogni promozione avrà una data di scadenza specificata.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                
                'titolo' => 'Posso generare più coupon da una singola promozione?',
                'corpo' => 'No, è possibile generare un solo coupon per ogni promozione.',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);

        DB::table('promozioni')->insert([
            [
                
                'nome' => '10% Sconto Giovani',
                'oggetto' => '10% sconto giovani hotel',
                'modalita' => 'Aggiungere il codice del buono in fase di acquisizione della stanza d\'hotel e/o dell\'appartamento',
                'tempi_fruizione' => '2031-08-11',
                'luoghi_fruizione' => 'Sito Booking',
                'aziendeId' => 1, // 'azienId' => '1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                
                'nome' => 'Amazon Music - 3 mesi',
                'oggetto' => 'Amazon Music - 3 mesi gratis',
                'modalita' => 'Aggiungere il codice del buono in fase di iscrizione ad Amazon Music',
                'tempi_fruizione' => '2031-08-11',
                'luoghi_fruizione' => 'Sito Amazon',
                'aziendeId' => 2, // 'azienId' => '2
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                
                'nome' => '10% Sconto Abiti',
                'oggetto' => '10% Sconto Berskha',
                'modalita' => 'Presentare il codice del buono alla cassa al momento del pagamento',
                'tempi_fruizione' => '2022-08-11',
                'luoghi_fruizione' => 'Berskha',
                'aziendeId' => 3, // 'azienId' => '3
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                
                'nome' => 'Sconto Prodotti Casa',
                'oggetto' => 'Sconto Prodotti Casa Carrefour',
                'modalita' => 'Presentare il codice del buono alla cassa al momento del pagamento',
                'tempi_fruizione' => '2031-08-11',
                'luoghi_fruizione' => 'Carrefour',
                'aziendeId' => 4, // 'azienId' => '4
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                
                'nome' => '8% Sconto Tv',
                'oggetto' => '8% Sconto Tv Unieuro',
                'modalita' => 'Presentare il codice del buono alla cassa al momento del pagamento',
                'tempi_fruizione' => '2031-08-11',
                'luoghi_fruizione' => 'Unieuro',
                'aziendeId' => 5, // 'azienId' => '5
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                
                'nome' => '3x2 Camera',
                'oggetto' => '3x2 camera hotel',
                'modalita' => 'Aggiungere il codice del buono in fase di acquisizione della stanza d\'hotel',
                'tempi_fruizione' => '2022-08-11',
                'luoghi_fruizione' => 'Sito Booking',
                'aziendeId' => 1, 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                
                'nome' => '15% Sconto Amazon',
                'oggetto' => '15% Sconto Prodotti Amazon',
                'modalita' => 'Aggiungere il codice del buono in fase di pagamento di un prodotto su amazon',
                'tempi_fruizione' => '2031-08-11',
                'luoghi_fruizione' => 'Sito Amazon',
                'aziendeId' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                
                'nome' => '15% Sconto Donna',
                'oggetto' => '15% Sconto Berskha',
                'modalita' => 'Presentare il codice del buono alla cassa al momento del pagamento',
                'tempi_fruizione' => '2031-08-11',
                'luoghi_fruizione' => 'Berskha',
                'aziendeId' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ] 
        ]);

    }

}