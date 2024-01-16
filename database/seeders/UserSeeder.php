<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'cristian castiblanco',
            'phone' => '3015384586',
            'email' => 'cristian@gmail.com',
            'profile' => 'ADMIN',
            'status' => 'ACTIVE',
            'password' => bcrypt('3015384586'),
        ]);
        User::create([
            'name' => 'samuel obando',
            'phone' => '3105646129',
            'email' => 'samuel@gmail.com',
            'profile' => 'ADMIN',
            'status' => 'ACTIVE',
            'password' => bcrypt('3105646129'),
        ]);
        User::create([
            'name' => 'maria alejandra',
            'phone' => '3105646189',
            'email' => 'maria@gmail.com',
            'profile' => 'EMPLOYEE',
            'status' => 'ACTIVE',
            'password' => bcrypt('3105646189'),
        ]);
        User::create([
            'name' => 'sara araujo',
            'phone' => '3105646100',
            'email' => 'sara@gmail.com',
            'profile' => 'EMPLOYEE',
            'status' => 'LOCKED',
            'password' => bcrypt('3105646100'),
        ]);
    }
}
