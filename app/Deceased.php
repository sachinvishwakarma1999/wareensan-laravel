<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;

class Deceased extends Model implements HasMedia
{
    use HasMediaTrait;

    const STATUS_NOT_VERIFIED = 0;
    const STATUS_VERIFIED = 1;

    protected $table = 'deceaseds';
    protected $dates = ['dod'];

    protected $fillable = [
        'name',
        'plague_name',
        'grave_type',
        'status',
        'relation',
        'phase',
        'block',
        'plot',
        'sub_plot',
        'reason',
        'gender',
        'special_requirement',
        'dod',
		'grave_condition'
    ];

    public static function listStatus()
    {
        return [
            self::STATUS_NOT_VERIFIED    => 'Not Verified',
            self::STATUS_VERIFIED => 'Verified',
        ];
    }

    public function claimant()
    {
        return $this->belongsTo( Claimant::class, 'deceasedable_id' );
    }
}
