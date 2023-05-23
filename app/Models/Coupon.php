<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    protected $_promozioni;
    protected $table = 'coupon';
    protected $primaryKey = 'couponId';
    public $timestamps = false;

        // Realazione One-To-One con User
        public function coupUs() {
        return $this->hasOne(Aziende::class, 'userId', 'userId');
    }

        // Realazione One-To-One con Promozioni
        public function CoupPr() {
        return $this->hasOne(Aziende::class, 'promId', 'promId');
    }


}
