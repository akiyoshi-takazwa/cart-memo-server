<?php

namespace App\Enums\CubicCentimeter;

use MyCLabs\Enum\Enum;

/**
 * @method static CubicCentimeterType NORMAL()
 * @method static CubicCentimeterType SUPER()
 * @method static CubicCentimeterType ULTRA()
 * @method static CubicCentimeterType MIRROR()
 * @method static CubicCentimeterType HYPER()
 */
class CubicCentimeterType extends Enum
{
    private const NORMAL = '50';
    private const SUPER = '100';
    private const ULTRA = '150';
    private const MIRROR = 'ミラー';
    private const HYPER = '200';
}
