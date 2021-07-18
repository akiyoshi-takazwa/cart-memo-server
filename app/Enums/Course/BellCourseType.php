<?php

namespace App\Enums\Course;

use MyCLabs\Enum\Enum;

/**
 * @method static BellCourseType DS_NEO_KUPA_CITY()
 * @method static BellCourseType GBA_RIBBON_ROAD()
 * @method static BellCourseType SUPER_BELL_SUBWAY()
 * @method static BellCourseType BIG_BLUE()
 */
class BellCourseType extends Enum
{
    private const DS_NEO_KUPA_CITY = '3DS ネオクッパシティ';
    private const GBA_RIBBON_ROAD = 'GBA リボンロード';
    private const SUPER_BELL_SUBWAY = 'リンリンメトロ';
    private const BIG_BLUE= 'ビッグブルー';
}
