<?php

namespace Packages\Domain\UserProfile;

use Illuminate\Support\Str;

class UserProfileUuid
{
    /**
     * @return string
     */
    public static function make() :string
    {
        return Str::uuid()->toString();
    }
}
