<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $password = '123123';

        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make($password),
            'role' => 'admin',
            'image' => 'http://127.0.0.1:8000/image/profile/profile-default.jpg'
        ]);
        User::create([
            'name' => 'tester',
            'email' => 'test@gmail.com',
            'password' => Hash::make($password),
            'role' => 'member',
            'image' => 'http://127.0.0.1:8000/image/profile/profile-default.jpg'
        ]);
    }
}
