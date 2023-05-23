<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Promozioni extends Model
{
    protected $_promozioni;
    protected $table = 'promozioni';
    protected $primaryKey = 'promId';
    public $timestamps = false;

    
    public function getPromozioni()
    {
        return $promozioni=Promozioni::all();
    }

    public function getPromozioneById($id)
    {
        return $this->_promozioni->firstWhere('id', $id);
    }

       // Realazione One-To-One con Aziende
       public function promAz() {
        return $this->hasOne(Aziende::class, 'aziendeId', 'aziendeId');
    }
}
