<?php

namespace App\Enums\Course;

use MyCLabs\Enum\Enum;

/**
 * @method static ZeldaCourseType WII_WARIO_MINE()
 * @method static ZeldaCourseType SFC_RAINBOW_ROAD()
 * @method static ZeldaCourseType ICE_ICE_OUTPOST()
 * @method static ZeldaCourseType HYRULE_CIRCUIT()
 */
class ZeldaCourseType extends Enum
{
    private const WII_WARIO_MINE = 'Wii ワリオこうざん';
    private const SFC_RAINBOW_ROAD = 'SFC レインボーロード';
    private const ICE_ICE_OUTPOST = 'ツルツルツイスター';
    private const HYRULE_CIRCUIT= 'ハイラルサーキット';
}
