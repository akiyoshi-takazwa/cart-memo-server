<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Packages\Infrastructure\EloquentModels\UserProfile;

class UserProfileFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = UserProfile::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'profile_photo_path' => 'http://test.test'
        ];
    }
}
