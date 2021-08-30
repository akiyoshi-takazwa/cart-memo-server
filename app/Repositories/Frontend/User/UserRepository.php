<?php

namespace App\Repositories\Frontend\User;

interface UserRepository
{
    /**
     * create user.
     *
     * @param array $attributes
     * @return mixed
     */
    public function create(array $attributes);
}
