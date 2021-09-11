<?php

namespace Packages\Infrastructure\Repositories\Frontend\Rate;

use Packages\Domain\Rate\RateRepositoryInterface;
use Packages\Infrastructure\EloquentModels\Rate;
use Packages\Infrastructure\EloquentModels\UserRate;

class RateRepository implements RateRepositoryInterface
{
    /**
     * @param array $attributes
     * @return Rate
     */
    public function create(array $attributes): Rate
    {
        $rate = new Rate($attributes);

        $rate->save();

        return $rate->refresh();
    }

    /**
     * @param string $userId
     * @return Rate|null
     */
    public function getLatestRateByUser(string $userId)
    {
        $userRate = UserRate::where('user_id', $userId)
            ->latest()->first();

        if(isset($userRate)){
            return Rate::find($userRate->rate_id);
        }

        return null;
    }


}
