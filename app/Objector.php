<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Objector extends Model
{
    protected $table = 'objectors';

    protected $fillable = [
        'salutation',
        'objector_name',
        'passport_no',
        'contact_no',
        'email',
        'gender',
        'postal_code',
        'block',
        'street',
        'level',
        'unit',
        'remark',
        'mail_addresses_id'
    ];

    /**
     * Get the phone record associated with the user.
     */
    public function mail_address()
    {
        return $this->hasOne(MailAddress::class, 'id');
    }

    public function deceaseds()
    {
        return $this->morphMany(Deceased::class, 'deceasedable');
    }

    public function getFullAddressAttribute()
    {
        return "{$this->block} {$this->street} #{$this->level}-{$this->unit}";
    }

    public static function boot() {
        parent::boot();

        static::deleting(function($objector) {
            $objector->deceaseds()->delete();
        });
    }
}
