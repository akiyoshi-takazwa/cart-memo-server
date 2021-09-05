<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Packages\Domain\User\UserRepositoryInterface;
use Packages\Domain\UserProfile\UserProfileRepositoryInterface;
use Packages\Infrastructure\Repositories\Frontend\User\UserRepository;
use Packages\Infrastructure\Repositories\Frontend\UserProfile\UserProfileRepository;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(UserRepositoryInterface::class, UserRepository::class);
        $this->app->bind(UserProfileRepositoryInterface::class, UserProfileRepository::class);
    }
}
