<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Package\Infrastructure\EloquentModels\AdminProfile;
use packages\Infrastructure\EloquentModels\User;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AdminProfile::factory()
            ->has(User::factory([
                'email' => 'admin@test.jp'
            ]))
            ->create();

        AdminProfile::factory()
            ->count(5)
            ->has(User::factory())
            ->create();
    }
}
