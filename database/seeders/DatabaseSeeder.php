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
        $this->call(tipo_impresoras::class);
        $this->call(estado_impresoras::class);
        $this->call(area_provee_clientes::class);
        $this->call(EstadoProducto_servicios::class);
        $this->call(Clientes::class);
        $this->call(estado_occProveedor::class);
        $this->call(Proveedores::class);
        $this->call(AlmaceneSeeder::class);
        $this->call(ModeloSeeder::class);
        $this->call(UnidadMedidaSeeder::class);
        $this->call(FabricanteSeeder::class);
        $this->call(CategoriaSeeder::class);
        $this->call(LoteSeeder::class);
        $this->call(IngresosSeeder::class);
    }
    
}
