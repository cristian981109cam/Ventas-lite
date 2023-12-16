<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Resource\Permissions;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'role_id' => 1,
                'menu_id' => 3,
            ],
            [
                'role_id' => 1,
                'menu_id' => 4,
            ],
            [
                'role_id' => 1,
                'menu_id' => 5,
            ],
            [
                'role_id' => 1,
                'menu_id' => 6,
            ],
            [
                'role_id' => 1,
                'menu_id' => 6,
            ],
            [
                'role_id' => 1,
                'menu_id' => 7,
            ],
            [
                'role_id' => 1,
                'menu_id' => 8,
            ],
            [
                'role_id' => 1,
                'menu_id' => 9,
            ],
            [
                'role_id' => 1,
                'menu_id' => 10,
            ],
            [
                'role_id' => 1,
                'menu_id' => 12,
            ],
            [
                'role_id' => 2,
                'menu_id' => 2,
            ],
        ];
        foreach ($data as $val) {
            Permissions::create($val);
        }
    }
}
