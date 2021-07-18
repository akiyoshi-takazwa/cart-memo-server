<?php

namespace App\Enums\Course;

use MyCLabs\Enum\Enum;

/**
 * @method static ThunderCourseType DS_TICKTOCK_CLOCK()
 * @method static ThunderCourseType DS_PIRANHA_PLANT_SLIDER()
 * @method static ThunderCourseType WII_GRUMBLE_VOLCANO()
 * @method static ThunderCourseType N64_RAINBOW_ROAD()
 */
class ThunderCourseType extends Enum
{
    private const DS_TICKTOCK_CLOCK = 'DS チクタクロック';
    private const DS_PIRANHA_PLANT_SLIDER = '3DS パックンスライダー';
    private const WII_GRUMBLE_VOLCANO = 'Wii グラグラかざん';
    private const N64_RAINBOW_ROAD= 'N64 レインボーロード';
}
