<?php

namespace Packages\Infrastructure\EloquentModels;

use Illuminate\Database\Eloquent\Model;

class UserRate extends Model
{
    protected $fillable = [
        'user_id',
        'rate_id',
    ];
}
