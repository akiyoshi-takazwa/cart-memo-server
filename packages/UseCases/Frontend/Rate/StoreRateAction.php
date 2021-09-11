<?php


namespace Packages\UseCases\Frontend\Rate;

use Illuminate\Support\Facades\Auth;
use Packages\Domain\Rate\Rate;
use Packages\Domain\Rate\RateRepositoryInterface;
use Packages\Domain\UserRate\UserRate;
use Packages\Domain\UserRate\UserRateRepositoryInterface;
use Packages\Infrastructure\EloquentModels\Rate as RateModel;

class StoreRateAction
{
    /**
     * @var RateRepositoryInterface
     */
    private $rateRepositoryInterface;
    /**
     * @var UserRateRepositoryInterface
     */
    private $userRateRepository;

    public function __construct()
    {
        $this->rateRepositoryInterface = app(RateRepositoryInterface::class);
        $this->userRateRepository = app(UserRateRepositoryInterface::class);
    }

    /**
     * @param array $attributes
     */
    public function execute(array $attributes)
    {
        $rateDomain = new Rate(
            $attributes['rate']
        );

        $rate = $this->rateRepositoryInterface
            ->create($rateDomain->toArray());

        $userRate = new UserRate(
            Auth::id(),
            $rate->id,
        );

        $this->userRateRepository
            ->create($userRate->toArray());
    }
}
