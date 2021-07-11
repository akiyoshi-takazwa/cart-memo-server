<?php

namespace Database\Seeders;

use App\Models\AdminProfile;
use App\Models\User;
use Illuminate\Database\Seeder;

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
