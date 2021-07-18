<?php

namespace Database\Seeders;

use App\Enums\Course\AnimalCourseType;
use App\Enums\Course\BellCourseType;
use App\Enums\Course\EggCourseType;
use App\Enums\Course\FlowerCourseType;
use App\Enums\Course\KinokoCourseType;
use App\Enums\Course\LeafCourseType;
use App\Enums\Course\ShellCourseType;
use App\Enums\Course\SpecialCourseType;
use App\Enums\Course\StarCourseType;
use App\Enums\Course\ThunderCourseType;
use App\Enums\Course\ZeldaCourseType;
use App\Enums\Cup\CupType;
use App\Models\Course;
use App\Models\Cup;
use Illuminate\Database\Seeder;

class CourseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Cups = Cup::all();
        $kinokoId = $Cups->firstWhere('name', CupType::KINOKO()->getValue())->id;
        $flowerId = $Cups->firstWhere('name', CupType::FLOWER()->getValue())->id;
        $starId = $Cups->firstWhere('name', CupType::STAR()->getValue())->id;
        $specialId = $Cups->firstWhere('name', CupType::SPECIAL()->getValue())->id;
        $shellId = $Cups->firstWhere('name', CupType::SHELL()->getValue())->id;
        $bananaId = $Cups->firstWhere('name', CupType::BANANA()->getValue())->id;
        $leafId = $Cups->firstWhere('name', CupType::LEAF()->getValue())->id;
        $thunderId = $Cups->firstWhere('name', CupType::THUNDER()->getValue())->id;
        $eggId = $Cups->firstWhere('name', CupType::EGG()->getValue())->id;
        $zeldaId = $Cups->firstWhere('name', CupType::ZELDA()->getValue())->id;
        $animalId = $Cups->firstWhere('name', CupType::ANIMAL()->getValue())->id;
        $bellId = $Cups->firstWhere('name', CupType::BELL()->getValue())->id;

        // キノコ
        Course::factory()
            ->create([
                'cup_id' => $kinokoId,
                'name'   => KinokoCourseType::MARIO_STADIUM(),
            ]);
        Course::factory()
            ->create([
                'cup_id' => $kinokoId,
                'name'   => KinokoCourseType::WATER_PARK(),
            ]);
        Course::factory()
            ->create([
                'cup_id' => $kinokoId,
                'name'   => KinokoCourseType::SWEET_CANYON(),
            ]);
        Course::factory()
            ->create([
                'cup_id' => $kinokoId,
                'name'   => KinokoCourseType::DOSSUN_RUINS(),
            ]);

        // フラワー
        Course::factory()
            ->create([
                'cup_id' => $flowerId,
                'name'   => FlowerCourseType::MARIO_CIRCUIT(),
            ]);
        Course::factory()
            ->create([
                'cup_id' => $flowerId,
                'name'   => FlowerCourseType::KINOPIO_HARBOR(),
            ]);
        Course::factory()
            ->create([
                'cup_id' => $flowerId,
                'name'   => FlowerCourseType::TWISTED_MANSION(),
            ]);
        Course::factory()
            ->create([
                'cup_id' => $flowerId,
                'name'   => FlowerCourseType::HEIHO_MINE(),
            ]);

        // スター
        Course::factory()
            ->create([
                'cup_id' => $starId,
                'name'   => StarCourseType::SUNSHINE_AIRPORT(),
            ]);
        Course::factory()
            ->create([
                'cup_id' => $starId,
                'name'   => StarCourseType::DOLPHIN_MISAKI(),
            ]);
        Course::factory()
            ->create([
                'cup_id' => $starId,
                'name'   => StarCourseType::ELECTRO_DREAM(),
            ]);
        Course::factory()
            ->create([
                'cup_id' => $starId,
                'name'   => StarCourseType::WARIO_SNOW_MOUNTAIN(),
            ]);

        // スペシャル
        Course::factory()
            ->create([
                'cup_id' => $specialId,
                'name'   => SpecialCourseType::SKY_GARDEN(),
            ]);
        Course::factory()
            ->create([
                'cup_id' => $specialId,
                'name'   => SpecialCourseType::BORN_DESERT(),
            ]);
        Course::factory()
            ->create([
                'cup_id' => $specialId,
                'name'   => SpecialCourseType::KUPA_CASTLE(),
            ]);
        Course::factory()
            ->create([
                'cup_id' => $specialId,
                'name'   => SpecialCourseType::RAINBOW_ROAD(),
            ]);

        // こうら
        Course::factory()
            ->create([
                'cup_id' => $shellId,
                'name'   => ShellCourseType::WII_COW_COUNTRY(),
            ]);
        Course::factory()
            ->create([
                'cup_id' => $shellId,
                'name'   => ShellCourseType::GBA_MARIO_CIRCUIT(),
            ]);
        Course::factory()
            ->create([
                'cup_id' => $shellId,
                'name'   => ShellCourseType::DS_CHEEP_CHEEP_BEACH(),
            ]);
        Course::factory()
            ->create([
                'cup_id' => $shellId,
                'name'   => ShellCourseType::N64_KINOPIO_HIGHWAY(),
            ]);

        // バナナ
        Course::factory()
            ->create([
                'cup_id' => $bananaId,
                'name'   => ShellCourseType::WII_COW_COUNTRY(),
            ]);
        Course::factory()
            ->create([
                'cup_id' => $bananaId,
                'name'   => ShellCourseType::GBA_MARIO_CIRCUIT(),
            ]);
        Course::factory()
            ->create([
                'cup_id' => $bananaId,
                'name'   => ShellCourseType::DS_CHEEP_CHEEP_BEACH(),
            ]);
        Course::factory()
            ->create([
                'cup_id' => $bananaId,
                'name'   => ShellCourseType::N64_KINOPIO_HIGHWAY(),
            ]);

        // このは
        Course::factory()
            ->create([
                'cup_id' => $leafId,
                'name'   => LeafCourseType::DS_WARIO_STADIUM(),
            ]);
        Course::factory()
            ->create([
                'cup_id' => $leafId,
                'name'   => LeafCourseType::GC_SHERBET_LAND(),
            ]);
        Course::factory()
            ->create([
                'cup_id' => $leafId,
                'name'   => LeafCourseType::DS_MUSIC_PARK(),
            ]);
        Course::factory()
            ->create([
                'cup_id' => $leafId,
                'name'   => LeafCourseType::N64_YOSHI_VALLEY(),
            ]);

        // サンダー
        Course::factory()
            ->create([
                'cup_id' => $thunderId,
                'name'   => ThunderCourseType::DS_TICKTOCK_CLOCK(),
            ]);
        Course::factory()
            ->create([
                'cup_id' => $thunderId,
                'name'   => ThunderCourseType::DS_PIRANHA_PLANT_SLIDER(),
            ]);
        Course::factory()
            ->create([
                'cup_id' => $thunderId,
                'name'   => ThunderCourseType::WII_GRUMBLE_VOLCANO(),
            ]);
        Course::factory()
            ->create([
                'cup_id' => $thunderId,
                'name'   => ThunderCourseType::N64_RAINBOW_ROAD(),
            ]);

        // たまご
        Course::factory()
            ->create([
                'cup_id' => $eggId,
                'name'   => EggCourseType::GC_YOSHI_CIRCUIT(),
            ]);
        Course::factory()
            ->create([
                'cup_id' => $eggId,
                'name'   => EggCourseType::EXCITE_BIKE(),
            ]);
        Course::factory()
            ->create([
                'cup_id' => $eggId,
                'name'   => EggCourseType::DRAGON_ROAD(),
            ]);
        Course::factory()
            ->create([
                'cup_id' => $eggId,
                'name'   => EggCourseType::MUTE_CITY(),
            ]);

        // ゼルダ
        Course::factory()
            ->create([
                'cup_id' => $zeldaId,
                'name'   => ZeldaCourseType::WII_WARIO_MINE(),
            ]);
        Course::factory()
            ->create([
                'cup_id' => $zeldaId,
                'name'   => ZeldaCourseType::SFC_RAINBOW_ROAD(),
            ]);
        Course::factory()
            ->create([
                'cup_id' => $zeldaId,
                'name'   => ZeldaCourseType::ICE_ICE_OUTPOST(),
            ]);
        Course::factory()
            ->create([
                'cup_id' => $zeldaId,
                'name'   => ZeldaCourseType::HYRULE_CIRCUIT(),
            ]);

        // どうぶつ
        Course::factory()
            ->create([
                'cup_id' => $animalId,
                'name'   => AnimalCourseType::GC_BABY_PARK(),
            ]);
        Course::factory()
            ->create([
                'cup_id' => $animalId,
                'name'   => AnimalCourseType::GBA_CHEESE_LAND(),
            ]);
        Course::factory()
            ->create([
                'cup_id' => $animalId,
                'name'   => AnimalCourseType::NATURE_ROAD(),
            ]);
        Course::factory()
            ->create([
                'cup_id' => $animalId,
                'name'   => AnimalCourseType::ANIMAL_CROSSING(),
            ]);

        // ベル
        Course::factory()
            ->create([
                'cup_id' => $bellId,
                'name'   => BellCourseType::DS_NEO_KUPA_CITY(),
            ]);
        Course::factory()
            ->create([
                'cup_id' => $bellId,
                'name'   => BellCourseType::GBA_RIBBON_ROAD(),
            ]);
        Course::factory()
            ->create([
                'cup_id' => $bellId,
                'name'   => BellCourseType::SUPER_BELL_SUBWAY(),
            ]);
        Course::factory()
            ->create([
                'cup_id' => $bellId,
                'name'   => BellCourseType::BIG_BLUE(),
            ]);

    }
}
