<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(RolSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(ProductosSeeder::class);
        $this->call(estado::class);
        $this->call(expiracion::class);
        $this->call(forma_pago::class);
        $this->call(moneda::class);
        $this->call(tiempo_entrega::class);
        $this->call(estado_provee_cliente::class);
    }
    
}
