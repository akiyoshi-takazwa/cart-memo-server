<?php

namespace Packages\Domain\UserProfile;

interface UserProfileRepositoryInterface
{
    /**
     * create user.
     *
     * @param array $attributes
     * @return mixed
     */
    public function create(array $attributes);
}
