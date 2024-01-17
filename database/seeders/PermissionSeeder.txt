<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // Crea los permisos para Category
        Permission::create(['name' => 'Category_Index', 'guard_name' => 'web']);
        Permission::create(['name' => 'Category_Create', 'guard_name' => 'web']);
        Permission::create(['name' => 'Category_Search', 'guard_name' => 'web']);
        Permission::create(['name' => 'Category_Update', 'guard_name' => 'web']);
        Permission::create(['name' => 'Category_Destroy', 'guard_name' => 'web']);

        // Crea los permisos para Product
        Permission::create(['name' => 'Product_Index', 'guard_name' => 'web']);
        Permission::create(['name' => 'Product_Create', 'guard_name' => 'web']);
        Permission::create(['name' => 'Product_Search', 'guard_name' => 'web']);
        Permission::create(['name' => 'Product_Update', 'guard_name' => 'web']);
        Permission::create(['name' => 'Product_Destroy', 'guard_name' => 'web']);

        // Crea los permisos para Pos
        Permission::create(['name' => 'Pos_Index', 'guard_name' => 'web']);

        // Crea los permisos para Role
        Permission::create(['name' => 'Role_Index', 'guard_name' => 'web']);
        Permission::create(['name' => 'Role_Create', 'guard_name' => 'web']);
        Permission::create(['name' => 'Role_Search', 'guard_name' => 'web']);
        Permission::create(['name' => 'Role_Update', 'guard_name' => 'web']);
        Permission::create(['name' => 'Role_Destroy', 'guard_name' => 'web']);

        // Crea los permisos para Permiso
        Permission::create(['name' => 'Permiso_Index', 'guard_name' => 'web']);
        Permission::create(['name' => 'Permiso_Create', 'guard_name' => 'web']);
        Permission::create(['name' => 'Permiso_Search', 'guard_name' => 'web']);
        Permission::create(['name' => 'Permiso_Update', 'guard_name' => 'web']);
        Permission::create(['name' => 'Permiso_Destroy', 'guard_name' => 'web']);

        // Crea los permisos para Asignar
        Permission::create(['name' => 'Asignar_Index', 'guard_name' => 'web']);

        // Crea los permisos para Usuarios
        Permission::create(['name' => 'Usuarios_Index', 'guard_name' => 'web']);
        Permission::create(['name' => 'Usuarios_Create', 'guard_name' => 'web']);
        Permission::create(['name' => 'Usuarios_Search', 'guard_name' => 'web']);
        Permission::create(['name' => 'Usuarios_Update', 'guard_name' => 'web']);
        Permission::create(['name' => 'Usuarios_Destroy', 'guard_name' => 'web']);

        // Crea los permisos para Coin
        Permission::create(['name' => 'Coin_Index', 'guard_name' => 'web']);
        Permission::create(['name' => 'Coin_Create', 'guard_name' => 'web']);
        Permission::create(['name' => 'Coin_Search', 'guard_name' => 'web']);
        Permission::create(['name' => 'Coin_Update', 'guard_name' => 'web']);
        Permission::create(['name' => 'Coin_Destroy', 'guard_name' => 'web']);

        // Crea los permisos para Cashout
        Permission::create(['name' => 'Cashout_Index', 'guard_name' => 'web']);

        // Crea los permisos para Report
        Permission::create(['name' => 'Report_Index', 'guard_name' => 'web']);
    }
}
