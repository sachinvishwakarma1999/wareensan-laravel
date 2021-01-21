<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaymentItem extends Model
{
    protected $fillable = [
        'payment_id',
        'deceased_id',
        'price'
    ];

    public function deceased()
    {
        return $this->belongsTo(Deceased::class, 'deceased_id');
    }
}
