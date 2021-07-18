<?php

namespace App\Enums\Course;

use MyCLabs\Enum\Enum;

/**
 * @method static ShellCourseType WII_COW_COUNTRY()
 * @method static ShellCourseType GBA_MARIO_CIRCUIT()
 * @method static ShellCourseType DS_CHEEP_CHEEP_BEACH()
 * @method static ShellCourseType N64_KINOPIO_HIGHWAY()
 */
class ShellCourseType extends Enum
{
    private const WII_COW_COUNTRY = 'Wii モーモーカントリー';
    private const GBA_MARIO_CIRCUIT = 'GBA マリオサーキット';
    private const DS_CHEEP_CHEEP_BEACH = 'DS プクプクビーチ';
    private const N64_KINOPIO_HIGHWAY = 'N64 キノピオハイウェイ';
}
