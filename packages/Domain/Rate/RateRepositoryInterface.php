<?php

namespace Packages\Domain\Rate;

interface RateRepositoryInterface
{
    /**
     * create user.
     *
     * @param array $attributes
     * @return mixed
     */
    public function create(array $attributes);

    /**
     *
     * @param string $userId
     * @return mixed
     */
    public function getLatestRateByUser(string $userId);

    /**
     *
     * @param string $userId
     * @return mixed
     */
    public function getThreeMonthlyRateByUser(string $userId);
}
