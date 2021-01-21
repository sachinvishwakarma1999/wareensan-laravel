<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
        'payment_mode',
        'sub_total',
        'total',
        'tax',
        'remark',
        'created_by'

    ];

    public function items()
    {
        return $this->hasMany(PaymentItem::class, 'payment_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'created_by');
    }
}
