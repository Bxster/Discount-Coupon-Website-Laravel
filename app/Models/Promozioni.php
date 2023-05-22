<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Promozioni extends Model
{
    protected $_promozioni;

    public function __construct()
    {
        $this->_promozioni = collect(
            array (
            (object) array(
                'promId' => 1,
                'nome' => 'Promozione 1',
                'oggetto' => 'Descrizione Promozione 1',
                'modalità' => 'Devi presnerare il codice alla cassa',
                'tempi di fruizione' => 'Scadenza per il giorno ',
                'luoghi di fruizione' => 'Supermercato'

            ),
            (object) array(
                'promId' => 2,
                'titolo' => 'Promozione 2',
                'descrizione' => 'Descrizione Promozione 2',
                'modalità' => 'Devi presnerare il codice alla cassa',
                'tempi di fruizione' => 'Scadenza per il giorno ',
                'luoghi di fruizione' => 'Supermercato'
            ),
            (object) array(
                'promId' => 3,
                'titolo' => 'Promozione 3',
                'descrizione' => 'Descrizione Promozione 3',
                'modalità' => 'Devi presnerare il codice alla cassa',
                'tempi di fruizione' => 'Scadenza per il giorno ',
                'luoghi di fruizione' => 'Supermercato'
            ),
            (object) array(
                'promId' => 4,
                'titolo' => 'Promozione 3',
                'descrizione' => 'Descrizione Promozione 3',
                'modalità' => 'Devi presnerare il codice alla cassa',
                'tempi di fruizione' => 'Scadenza per il giorno ',
                'luoghi di fruizione' => 'Supermercato'
            ),
            (object) array(
                'promId' => 5,
                'titolo' => 'Promozione 3',
                'descrizione' => 'Descrizione Promozione 3',
                'modalità' => 'Devi presnerare il codice alla cassa',
                'tempi di fruizione' => 'Scadenza per il giorno ',
                'luoghi di fruizione' => 'Supermercato'
            ),
            (object) array(
                'promId' => 6,
                'titolo' => 'Promozione 3',
                'descrizione' => 'Descrizione Promozione 3',
                'modalità' => 'Devi presnerare il codice alla cassa',
                'tempi di fruizione' => 'Scadenza per il giorno ',
                'luoghi di fruizione' => 'Supermercato'
            ),
            (object) array(
                'promId' => 7,
                'titolo' => 'Promozione 3',
                'descrizione' => 'Descrizione Promozione 3',
                'modalità' => 'Devi presnerare il codice alla cassa',
                'tempi di fruizione' => 'Scadenza per il giorno ',
                'luoghi di fruizione' => 'Supermercato'
            )
        ));
    }

    public function getPromozioni()
    {
        return $this->_promozioni;
    }

    public function getPromozioneById($id)
    {
        return $this->_promozioni->firstWhere('id', $id);
    }
}
