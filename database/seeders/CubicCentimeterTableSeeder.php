<?php

namespace Database\Seeders;

use App\Enums\CubicCentimeter\CubicCentimeterType;
use Illuminate\Database\Seeder;
use Packages\Infrastructure\EloquentModels\CubicCentimeter;

class CubicCentimeterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CubicCentimeter::create([
                'name' => CubicCentimeterType::NORMAL()->getValue()
            ]);
        CubicCentimeter::create([
                'name' => CubicCentimeterType::SUPER()->getValue()
            ]);
        CubicCentimeter::create([
                'name' => CubicCentimeterType::ULTRA()->getValue()
            ]);
        CubicCentimeter::create([
                'name' => CubicCentimeterType::MIRROR()->getValue()
            ]);
        CubicCentimeter::create([
                'name' => CubicCentimeterType::HYPER()->getValue()
            ]);
    }
}
