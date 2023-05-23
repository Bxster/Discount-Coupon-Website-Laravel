<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Aziende extends Model
{
    protected $_aziende;
    protected $table = 'aziende';
    protected $primaryKey = 'aziendeId';
    public $timestamps = false;

    public function getAziende()
    {
        return $aziende= Aziende::all();
    }

    public function getAziendaById($id)
    {
        return $this->_aziende->firstWhere('azId', $id);
    }

}
