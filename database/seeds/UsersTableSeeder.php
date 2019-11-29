<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'             => 1,
                'name'           => 'Admin',
                'email'          => 'admin@admin.com',
                'password'       => '$2y$10$Z4BvCu0tNc1JUOrFPK3Gtevz6oMitfXOnYT6SRglZqpv.tGC8KAD.',
                'remember_token' => null,
            ],
        ];

        User::insert($users);
    }
}
