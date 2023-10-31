<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Resource\Role;
class RoleTableSeeder extends Seeder
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
                'name' => 'Super Administrador',
                'Descripcion' => 'Este es un rol para el superadminitrador, que tendra acceso a todos los permisos',
            ],
            [
                'name' => 'Auxilia',
                'Descripcion' => 'Rol de prueba ',
            ],
        ];
        foreach ($data as $val) {
            Role::create($val);
        }
    }
}
