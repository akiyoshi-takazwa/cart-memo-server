<?php

namespace Packages\Infrastructure\Repositories\Frontend\UserRate;

use Packages\Domain\UserRate\UserRateRepositoryInterface;
use Packages\Infrastructure\EloquentModels\UserRate;

class UserRateRepository implements UserRateRepositoryInterface
{
    /**
     * @param array $attributes
     * @return UserRate
     */
    public function create(array $attributes): UserRate
    {
        $userRate = new UserRate($attributes);

        $userRate->save();

        return $userRate->refresh();
    }

}
