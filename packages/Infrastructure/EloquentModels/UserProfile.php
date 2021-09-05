<?php

namespace Packages\Infrastructure\EloquentModels;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    use HasFactory;

    protected $keyType = 'string';
    public $incrementing = false;

    protected $fillable = [
        'id',
        'name',
        'profile_photo_path',
    ];

    public function user()
    {
        return $this->morphOne(User::class, 'profile');
    }
}
