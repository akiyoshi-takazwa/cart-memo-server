<?php

namespace Database\Seeders;

use App\Enums\CubicCentimeter\CubicCentimeterType;
use App\Models\CubicCentimeter;
use Illuminate\Database\Seeder;

class CubicCentimeterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CubicCentimeter::factory()
            ->create([
                'name' => CubicCentimeterType::NORMAL()->getValue()
            ]);
        CubicCentimeter::factory()
            ->create([
                'name' => CubicCentimeterType::SUPER()->getValue()
            ]);
        CubicCentimeter::factory()
            ->create([
                'name' => CubicCentimeterType::ULTRA()->getValue()
            ]);
        CubicCentimeter::factory()
            ->create([
                'name' => CubicCentimeterType::MIRROR()->getValue()
            ]);
        CubicCentimeter::factory()
            ->create([
                'name' => CubicCentimeterType::HYPER()->getValue()
            ]);
    }
}
