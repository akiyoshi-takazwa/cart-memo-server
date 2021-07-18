<?php

namespace App\Enums\Course;

use MyCLabs\Enum\Enum;

/**
 * @method static KinokoCourseType MARIO_STADIUM()
 * @method static KinokoCourseType WATER_PARK()
 * @method static KinokoCourseType SWEET_CANYON()
 * @method static KinokoCourseType DOSSUN_RUINS()
 */
class KinokoCourseType extends Enum
{
    private const MARIO_STADIUM = 'マリオカートスタジアム';
    private const WATER_PARK = 'ウォーターパーク';
    private const SWEET_CANYON = 'スイーツキャニオン';
    private const DOSSUN_RUINS = 'ドッスンいせき';
}
