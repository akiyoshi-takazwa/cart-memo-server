<?php

namespace App\Enums\Course;

use MyCLabs\Enum\Enum;

/**
 * @method static LeafCourseType DS_WARIO_STADIUM()
 * @method static LeafCourseType GC_SHERBET_LAND()
 * @method static LeafCourseType DS_MUSIC_PARK()
 * @method static LeafCourseType N64_YOSHI_VALLEY()
 */
class LeafCourseType extends Enum
{
    private const DS_WARIO_STADIUM = 'DS ワリオスタジアム';
    private const GC_SHERBET_LAND = 'GC シャーベットランド';
    private const DS_MUSIC_PARK = '3DS ミュージックパーク';
    private const N64_YOSHI_VALLEY= 'N64 ヨッシーバレー';
}
