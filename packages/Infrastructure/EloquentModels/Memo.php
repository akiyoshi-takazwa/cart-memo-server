<?php

namespace Packages\Infrastructure\EloquentModels;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Memo extends Model
{
    protected $keyType = 'string';
    public $incrementing = false;

    protected $fillable = [
        'id',
        'user_id',
        'course_id',
        'cc_id',
        'play_date',
        'rank',
        'memo',
    ];

    /**
     * @return HasOne
     */
    public function courses()
    {
        return $this->hasOne(
            Course::class,
            'id',
            'course_id'
        );
    }

    /**
     * @return HasOne
     */
    public function cubicCentimeters()
    {
        return $this->hasOne(
            CubicCentimeter::class,
            'id',
            'cc_id'
        );
    }
}
