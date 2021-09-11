<?php

namespace Packages\Domain\UserRate;

interface UserRateRepositoryInterface
{
    /**
     * create user.
     *
     * @param array $attributes
     * @return mixed
     */
    public function create(array $attributes);
}
