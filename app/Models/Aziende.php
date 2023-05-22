<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Aziende extends Model
{
    protected $_aziende;

    public function __construct()
    {
        $this->_aziende = collect(
            array(
            (object) array(
                'azId' => 1,
                'ragioneSociale' => 'Azienda 1',
                'tipologia' => 'Tipologia 1',
                'descrizione' => 'Descrizione Azienda 1',
                'logo' => 'logo1.png',
                'città' => 'Città 1',
                'via' => 'Via 1',
                'cap' => '12345'
            ),
            (object) array(
                'azId' => 2,
                'ragioneSociale' => 'Azienda 2',
                'tipologia' => 'Tipologia 2',
                'descrizione' => 'Descrizione Azienda 2',
                'logo' => 'logo2.png',
                'città' => 'Città 2',
                'via' => 'Via 2',
                'cap' => '54321'
            ),
            (object) array(
                'azId' => 3,
                'ragioneSociale' => 'Azienda 3',
                'tipologia' => 'Tipologia 3',
                'descrizione' => 'Descrizione Azienda 3',
                'logo' => 'logo3.png',
                'città' => 'Città 3',
                'via' => 'Via 3',
                'cap' => '67890'
            ),
            (object) array(
                'azId' => 4,
                'ragioneSociale' => 'Azienda 4',
                'tipologia' => 'Tipologia 2',
                'descrizione' => 'Descrizione Azienda 2',
                'logo' => 'logo2.png',
                'città' => 'Città 2',
                'via' => 'Via 2',
                'cap' => '54321'
            ),
            (object) array(
                'azId' => 5,
                'ragioneSociale' => 'Azienda 5',
                'tipologia' => 'Tipologia 2',
                'descrizione' => 'Descrizione Azienda 2',
                'logo' => 'logo2.png',
                'città' => 'Città 2',
                'via' => 'Via 2',
                'cap' => '54321'
            )
        ));
    }

    public function getAziende()
    {
        return $this->_aziende;
    }

    public function getAziendaById($id)
    {
        return $this->_aziende->firstWhere('azId', $id);
    }
}
