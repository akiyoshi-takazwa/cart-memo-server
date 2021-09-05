<?php

namespace Packages\Infrastructure\Repositories\Frontend\UserProfile;

use Packages\Domain\UserProfile\UserProfileRepositoryInterface;
use Packages\Infrastructure\EloquentModels\UserProfile;

class UserProfileRepository implements UserProfileRepositoryInterface
{
    /**
     * @param array $attributes
     * @return UserProfile
     */
    public function create(array $attributes): UserProfile
    {
        $userProfile = new UserProfile($attributes);

        $userProfile->save();

        return UserProfile::find($attributes['id']);
    }
}
