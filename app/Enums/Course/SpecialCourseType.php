<?php

namespace App\Enums\Course;

use MyCLabs\Enum\Enum;

/**
 * @method static SpecialCourseType SKY_GARDEN()
 * @method static SpecialCourseType BORN_DESERT()
 * @method static SpecialCourseType KUPA_CASTLE()
 * @method static SpecialCourseType RAINBOW_ROAD()
 */
class SpecialCourseType extends Enum
{
    private const SKY_GARDEN = 'スカイガーデン';
    private const BORN_DESERT = 'ホネホネさばく';
    private const KUPA_CASTLE = 'クッパキャッスル';
    private const RAINBOW_ROAD = 'レインボーロード';
}
