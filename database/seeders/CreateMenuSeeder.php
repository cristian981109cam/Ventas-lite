<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\menus;
class CreateMenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        menus::create([
            'id_parent' => 0,
            'name' => 'Dashboard',
            'icon' => 'fas fa-house',
            'url' => '#dashboard',
            'status' => 1
        ]);
    }
}
