<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rolAdmin = Role::create(['name' => 'Admin']);
        $rolUser = Role::create(['name' => 'User']);

        Permission::create(['name' => 'Ver dashboard']);

        Permission::create(['name' => 'Ver listado de usuarios']);
        Permission::create(['name' => 'Crear usuarios']);
        Permission::create(['name' => 'Editar usuarios']);
        Permission::create(['name' => 'Eliminar usuarios']);
        
    }
}
