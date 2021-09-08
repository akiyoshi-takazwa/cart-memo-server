<?php

namespace Database\Seeders;

use Database\Factories\UserProfileFactory;
use Illuminate\Database\Seeder;
use Packages\Domain\User\UserUuid;
use Packages\Domain\UserProfile\UserProfileUuid;
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
        $usrProfile = UserProfile::create([
            'id'   => UserProfileUuid::make(),
            'name' => 'user',
        ]);

        User::create([
            'id'           => UserUuid::make(),
            'profile_type' => 'user',
            'profile_id'   => $usrProfile->id,
            'username'     => 'user',
            'password'     => '$2y$10$4nAslcyqxo3wtCC2lV.n8OlojWigfRh9JuLbPZ2zy4rZKG3nZ6EcO', // password
        ]);
    }
}
