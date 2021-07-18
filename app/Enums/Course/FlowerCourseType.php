<?php

namespace App\Enums\Course;

use MyCLabs\Enum\Enum;

/**
 * @method static FlowerCourseType MARIO_CIRCUIT()
 * @method static FlowerCourseType KINOPIO_HARBOR()
 * @method static FlowerCourseType TWISTED_MANSION()
 * @method static FlowerCourseType HEIHO_MINE()
 */
class FlowerCourseType extends Enum
{
    private const MARIO_CIRCUIT = 'マリオサーキット';
    private const KINOPIO_HARBOR = 'キノピオハーバー';
    private const TWISTED_MANSION = 'ねじれマンション';
    private const HEIHO_MINE = 'ヘイホーこうざん';
}
