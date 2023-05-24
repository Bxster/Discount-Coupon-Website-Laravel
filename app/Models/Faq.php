<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{

    protected $table = 'faqs';
    protected $primaryKey = 'faqId';
    public $timestamps = false;
    use HasFactory;

    public function getFaq($paged = 3,$order=null)
    {
        $query = Faq::query();

        if (!is_null($order)) {
            $query->orderBy('titolo', $order);
        }
    
        return $query->paginate($paged);
    }
}