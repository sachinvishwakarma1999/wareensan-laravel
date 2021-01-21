<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Claimant extends Model
{
    const STATUS_E_APPOINTMENT = 8;
    const STATUS_WAITING = 1;
    const STATUS_VERIFICATION_IN_PROGRESS = 2;
    const STATUS_VERIFIED = 3;
    const STATUS_SCHEDULED_FOR_EXHUMATION = 4;
    const STATUS_COMPLETED = 5;
    const STATUS_WALK_IN_ENQUIRIES = 7;
    const STATUS_ABSENT = 6;

    protected $table = 'claimants';

    protected $fillable = [
        'salutation',
        'claimant_name',
        'passport_no',
        // 'country_code',
        'contact_no',
        'email',
        // 'residential',
        'gender',
        'postal_code',
        'block',
        'street',
        'level',
        'unit',
        'remark',
        'status'
    ];

    public static function listStatus()
    {
        return [
            // self::STATUS_E_APPOINTMENT    => 'E-appointment',
            self::STATUS_WAITING => 'Waiting',
            self::STATUS_VERIFICATION_IN_PROGRESS => 'Verification in progress',
            self::STATUS_VERIFIED => 'Verified',
            self::STATUS_SCHEDULED_FOR_EXHUMATION => 'Scheduled For Exhumation',
            self::STATUS_COMPLETED => 'Completed',
            self::STATUS_ABSENT => 'Absent',
            // self::STATUS_WALK_IN_ENQUIRIES => 'Walk In Enquiries',
        ];
    }

    public function deceaseds()
    {
        return $this->morphMany(Deceased::class, 'deceasedable');
    }

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }

    public static function boot() {
        parent::boot();

        static::deleting(function($claimant) {
            $claimant->deceaseds()->delete();
            $claimant->payments()->delete();
        });
    }
}
