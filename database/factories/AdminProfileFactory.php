<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Package\Infrastructure\EloquentModels\AdminProfile;

class AdminProfileFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = AdminProfile::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => 'admin-taka',
            'profile_photo_path' => 'http://test.test'
        ];
    }
}
