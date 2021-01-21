<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MailAddress extends Model
{
    protected $table = 'mail_addresses';

    protected $fillable = [
        'postal_code',
        'block',
        'street',
        'level',
        'unit',
    ];

    public function getMailAddressFullAttribute()
    {
        return "{$this->block} {$this->street} #{$this->level}-{$this->unit}";
    }
}
