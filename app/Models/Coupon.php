<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Promozioni;
use App\Models\Aziende;

class Coupon extends Model
{
    protected $table = 'coupon';
    protected $primaryKey = 'couponId';
    public $timestamps = false;

    public function getCouponById($id)
    {
        return $this->find($id);
    }

        // Realazione One-To-One con User
        public function coupUs() {
        return $this->hasOne(User::class, 'userId', 'userId');
    }

        // Realazione One-To-One con Promozioni
        public function coupPr() {
        return $this->hasOne(Promozioni::class, 'promId', 'promId');
    }


}
