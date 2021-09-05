<?php

namespace Database\Seeders;

use Database\Factories\UserProfileFactory;
use Illuminate\Database\Seeder;
use Packages\Infrastructure\EloquentModels\User;
use Packages\Infrastructure\EloquentModels\UserProfile;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserProfile::factory()
            ->count(10)
            ->has(User::factory())
            ->create();
    }
}
