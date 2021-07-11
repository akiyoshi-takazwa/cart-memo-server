<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\UserProfile;
use Database\Factories\UserProfileFactory;
use Illuminate\Database\Seeder;

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
