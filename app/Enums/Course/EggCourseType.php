<?php

namespace App\Enums\Course;

use MyCLabs\Enum\Enum;

/**
 * @method static EggCourseType GC_YOSHI_CIRCUIT()
 * @method static EggCourseType EXCITE_BIKE()
 * @method static EggCourseType DRAGON_ROAD()
 * @method static EggCourseType MUTE_CITY()
 */
class EggCourseType extends Enum
{
    private const GC_YOSHI_CIRCUIT = 'GC ヨッシーサーキット';
    private const EXCITE_BIKE = 'エキサイトバイク';
    private const DRAGON_ROAD = 'ドラゴンロード';
    private const MUTE_CITY= 'ミュートシティ';
}
