<?php

namespace Packages\Infrastructure\EloquentModels;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CubicCentimeter extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];
}
