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

        Permission::create(['name' => 'Ver dashboard'])->syncRoles([$rolAdmin, $rolUser]);

        Permission::create(['name' => 'Ver listado de usuarios'])->syncRoles([$rolAdmin, $rolUser]);
        Permission::create(['name' => 'Crear usuarios'])->syncRoles([$rolAdmin]);
        Permission::create(['name' => 'Editar usuarios'])->syncRoles([$rolAdmin]);
        Permission::create(['name' => 'Eliminar usuarios'])->syncRoles([$rolAdmin]);
        
        Permission::create(['name' => 'Ver listado de roles'])->syncRoles([$rolAdmin]);
        Permission::create(['name' => 'Crear roles'])->syncRoles([$rolAdmin]);
        Permission::create(['name' => 'Editar roles'])->syncRoles([$rolAdmin]);
        Permission::create(['name' => 'Eliminar roles'])->syncRoles([$rolAdmin]);

        Permission::create(['name' => 'Ver listado de productos'])->syncRoles([$rolAdmin]);
        Permission::create(['name' => 'Crear productos'])->syncRoles([$rolAdmin]);
        Permission::create(['name' => 'Editar productos'])->syncRoles([$rolAdmin]);
        Permission::create(['name' => 'Eliminar productos'])->syncRoles([$rolAdmin]);
        
    }
}
