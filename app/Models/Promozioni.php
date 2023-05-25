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

    public function getPromozioni($paged = 6, $order = null)
    {
        $query = Promozioni::query();

        if (!is_null($order)) {
            $query->orderBy('nome', $order);
        }
    
        return $query->paginate($paged);
    }
       // Realazione One-To-One con Aziende
      public function promAz() {
        return $this->hasOne(Aziende::class, 'aziendeId', 'aziendeId'); 
    }
}
