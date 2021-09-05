<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Relations\Relation;
use Package\Infrastructure\EloquentModels\AdminProfile;
use packages\Infrastructure\EloquentModels\UserProfile;

class MorphMapProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Relation::morphMap([
            'admin' => AdminProfile::class,
            'user' => UserProfile::class,
        ]);
    }
}
