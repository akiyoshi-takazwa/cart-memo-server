<?php

namespace Database\Seeders;

use App\Enums\Cup\CupType;
use Illuminate\Database\Seeder;
use Packages\Infrastructure\EloquentModels\Cup;

class CupTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cup::create([
                'name' => CupType::KINOKO()->getValue()
            ]);
        Cup::create([
                'name' => CupType::FLOWER()->getValue()
            ]);
        Cup::create([
                'name' => CupType::STAR()->getValue()
            ]);
        Cup::create([
                'name' => CupType::SPECIAL()->getValue()
            ]);
        Cup::create([
                'name' => CupType::SHELL()->getValue()
            ]);
        Cup::create([
                'name' => CupType::BANANA()->getValue()
            ]);
        Cup::create([
                'name' => CupType::LEAF()->getValue()
            ]);
        Cup::create([
                'name' => CupType::THUNDER()->getValue()
            ]);
        Cup::create([
                'name' => CupType::EGG()->getValue()
            ]);
        Cup::create([
                'name' => CupType::ZELDA()->getValue()
            ]);
        Cup::create([
                'name' => CupType::ANIMAL()->getValue()
            ]);
        Cup::create([
                'name' => CupType::BELL()->getValue()
            ]);
    }
}
