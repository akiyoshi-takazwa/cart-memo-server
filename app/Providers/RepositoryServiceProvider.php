<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Packages\Domain\Course\CourseRepositoryInterface;
use Packages\Domain\CubicCentimeter\CubicCentimeterRepositoryInterface;
use Packages\Domain\Memo\MemoRepositoryInterface;
use Packages\Domain\Rate\RateRepositoryInterface;
use Packages\Domain\User\UserRepositoryInterface;
use Packages\Domain\UserProfile\UserProfileRepositoryInterface;
use Packages\Domain\UserRate\UserRateRepositoryInterface;
use Packages\Infrastructure\Repositories\Frontend\Course\CourseRepository;
use Packages\Infrastructure\Repositories\Frontend\CubicCentimeter\CubicCentimeterRepository;
use Packages\Infrastructure\Repositories\Frontend\Memo\MemoRepository;
use Packages\Infrastructure\Repositories\Frontend\Rate\RateRepository;
use Packages\Infrastructure\Repositories\Frontend\User\UserRepository;
use Packages\Infrastructure\Repositories\Frontend\UserProfile\UserProfileRepository;
use Packages\Infrastructure\Repositories\Frontend\UserRate\UserRateRepository;

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
        $this->app->bind(CubicCentimeterRepositoryInterface::class, CubicCentimeterRepository::class);
        $this->app->bind(CourseRepositoryInterface::class, CourseRepository::class);
        $this->app->bind(MemoRepositoryInterface::class, MemoRepository::class);
        $this->app->bind(RateRepositoryInterface::class, RateRepository::class);
        $this->app->bind(UserRateRepositoryInterface::class, UserRateRepository::class);
    }
}
