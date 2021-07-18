<?php

namespace App\Enums\Course;

use MyCLabs\Enum\Enum;

/**
 * @method static AnimalCourseType GC_BABY_PARK()
 * @method static AnimalCourseType GBA_CHEESE_LAND()
 * @method static AnimalCourseType NATURE_ROAD()
 * @method static AnimalCourseType ANIMAL_CROSSING()
 */
class AnimalCourseType extends Enum
{
    private const GC_BABY_PARK = 'GC ベビィパーク';
    private const GBA_CHEESE_LAND = 'GBA チーズランド';
    private const NATURE_ROAD = 'ネイチャーロード';
    private const ANIMAL_CROSSING='どうぶつの森';
}
