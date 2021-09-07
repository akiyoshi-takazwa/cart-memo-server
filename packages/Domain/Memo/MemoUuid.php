<?php

namespace Packages\Domain\Memo;

use Illuminate\Support\Str;

class MemoUuid
{
    /**
     * @return string
     */
    public static function make() :string
    {
        return Str::uuid()->toString();
    }
}
