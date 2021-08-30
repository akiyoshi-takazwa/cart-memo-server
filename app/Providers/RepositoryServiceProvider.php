<?php

namespace App\Providers;

use App\Repositories\Frontend\User\EloquentUserRepository;
use App\Repositories\Frontend\User\UserRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(UserRepository::class, EloquentUserRepository::class);
    }
}
