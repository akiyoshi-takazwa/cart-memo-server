<?php

namespace Database\Seeders;

use App\Enums\Cup\CupType;
use App\Models\Cup;
use App\Models\User;
use App\Models\UserProfile;
use Database\Factories\UserProfileFactory;
use Illuminate\Database\Seeder;

class CupTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cup::factory()
            ->create([
                'name' => CupType::KINOKO()->getValue()
            ]);
        Cup::factory()
            ->create([
                'name' => CupType::FLOWER()->getValue()
            ]);
        Cup::factory()
            ->create([
                'name' => CupType::STAR()->getValue()
            ]);
        Cup::factory()
            ->create([
                'name' => CupType::SPECIAL()->getValue()
            ]);
        Cup::factory()
            ->create([
                'name' => CupType::SHELL()->getValue()
            ]);
        Cup::factory()
            ->create([
                'name' => CupType::BANANA()->getValue()
            ]);
        Cup::factory()
            ->create([
                'name' => CupType::LEAF()->getValue()
            ]);
        Cup::factory()
            ->create([
                'name' => CupType::THUNDER()->getValue()
            ]);
        Cup::factory()
            ->create([
                'name' => CupType::EGG()->getValue()
            ]);
        Cup::factory()
            ->create([
                'name' => CupType::ZELDA()->getValue()
            ]);
        Cup::factory()
            ->create([
                'name' => CupType::ANIMAL()->getValue()
            ]);
        Cup::factory()
            ->create([
                'name' => CupType::BELL()->getValue()
            ]);
    }
}
