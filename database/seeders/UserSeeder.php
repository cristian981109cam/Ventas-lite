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
            'name' => 'andres camilo',
            'phone' => '3015384586',
            'email' => 'andresn@gmail.com',
            'profile' => 'ADMIN',
            'status' => 'ACTIVE',
            'password' => bcrypt('3015384586'),
        ]);
        User::create([
            'name' => 'maria alejandra',
            'phone' => '3105646129',
            'email' => 'maria@gmail.com',
            'profile' => 'EMPLOYEE',
            'status' => 'ACTIVE',
            'password' => bcrypt('3015384586'),
        ]);
    }
}
