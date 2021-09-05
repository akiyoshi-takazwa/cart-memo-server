<?php

namespace Packages\Domain\User;

use Illuminate\Support\Str;

class UserUuid
{
    /**
     * @return string
     */
    public static function make() :string
    {
        return Str::uuid()->toString();
    }
}
