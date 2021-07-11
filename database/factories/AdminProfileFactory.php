<?php

namespace Database\Factories;

use App\Models\AdminProfile;
use Illuminate\Database\Eloquent\Factories\Factory;

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
