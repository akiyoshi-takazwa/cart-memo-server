<?php

namespace Database\Factories;

use App\Enums\Course\CourseType;
use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\Factory;

class CourseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Course::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'cup_id' => 1,
            'name' => $this->faker->randomElement(CourseType::toArray()),
        ];
    }
}
