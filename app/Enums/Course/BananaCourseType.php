<?php

namespace App\Enums\Course;

use MyCLabs\Enum\Enum;

/**
 * @method static BananaCourseType GC_DRY_DRY_DESERT()
 * @method static BananaCourseType SFC_DOUGHNUT_PLAIN()
 * @method static BananaCourseType N64_PEACH_CIRCUIT()
 * @method static BananaCourseType DS_DK_JUNGLE()
 */
class BananaCourseType extends Enum
{
    // バナナ
    private const GC_DRY_DRY_DESERT = 'GC カラカラさばく';
    private const SFC_DOUGHNUT_PLAIN = 'SFC ドーナツへいや';
    private const N64_PEACH_CIRCUIT = 'N64 ピーチサーキット';
    private const DS_DK_JUNGLE= '3DS DKジャングル';
}
