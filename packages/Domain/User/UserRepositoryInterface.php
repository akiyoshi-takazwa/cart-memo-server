<?php

namespace Packages\Domain\User;

interface UserRepositoryInterface
{
    /**
     * create user.
     *
     * @param array $attributes
     * @return mixed
     */
    public function create(array $attributes);
}
