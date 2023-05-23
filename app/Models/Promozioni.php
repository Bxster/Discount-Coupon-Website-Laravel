<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Promozioni extends Model
{
    protected $_promozioni;
    protected $table = 'promozioni';
    protected $primaryKey = 'promId';
    public $timestamps = false;
    protected $fillable = ['nome', 'oggetto', 'modalità', 'tempi di fruizione', 'luoghi di fruizione'];

    public function getPromozioneById($id)
    {
        return $this->find($id);
    }

    public function getPromozioni()
    {
        return $promozioni=Promozioni::all();
    }
       // Realazione One-To-One con Aziende
      public function promAz() {
        return $this->hasOne(Aziende::class, 'aziendeId', 'aziendeId');
    }
}
