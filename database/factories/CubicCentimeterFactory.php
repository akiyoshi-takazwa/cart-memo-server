<?php

namespace Database\Factories;

use App\Enums\Course\CourseType;
use App\Enums\CubicCentimeter\CubicCentimeterType;
use App\Enums\Cup\CupType;
use App\Models\Course;
use App\Models\CubicCentimeter;
use App\Models\Cup;
use Illuminate\Database\Eloquent\Factories\Factory;

class CubicCentimeterFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CubicCentimeter::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->randomElement(CubicCentimeterType::toArray()),
        ];
    }
}
