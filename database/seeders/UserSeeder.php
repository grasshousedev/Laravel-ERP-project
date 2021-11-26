<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Seeder;

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
            'codigo' => 'USU001',
            'name' => 'Gerardo Manuel',
            'apellido' => 'Franco',
            'email' => 'gerardo@gmail.com',
            'dni' => '12345673',
            'password' => bcrypt('12345678'),
            'celular' => '123456731',
            'estado' => 'ACTIVO',
            //'cargo' => 'ADMINISTRACION',
        ])->assignRole('Admin');

        User::create([
            'codigo' => 'USU002',
            'name' => 'Jamir',
            'apellido' => 'Vargas',
            'email' => 'jamir@gmail.com',
            'dni' => '12345678',
            'password' => bcrypt('12345678'),
            'celular' => '123456731',
            'estado' => 'ACTIVO',
            //'cargo' => 'ADMINISTRACION',
        ])->assignRole('Admin');

        User::create([
            'codigo' => 'USU003',
            'name' => 'Diego',
            'apellido' => 'Peña',
            'email' => 'diego@gmail.com',
            'dni' => '12345672',
            'password' => bcrypt('12345678'),
            'celular' => '123456731',
            'estado' => 'ACTIVO',
            //'cargo' => 'ADMINISTRACION',
        ])->assignRole('Admin');

        User::create([
            'codigo' => 'USU004',
            'name' => 'Lorena Caro',
            'apellido' => 'Soria',
            'email' => 'lorena@gmail.com',
            'dni' => '12345671',
            'password' => bcrypt('12345678'),
            'celular' => '123456731',
            'estado' => 'ACTIVO',
            //'cargo' => 'ADMINISTRACION',
        ])->assignRole('Admin');

        User::create([
            'codigo' => 'USU005',
            'name' => 'Logistica',
            'apellido' => 'Log',
            'email' => 'logistica@gmail.com',
            'dni' => '12345615',
            'password' => bcrypt('12345678'),
            'celular' => '123456731',
            'estado' => 'ACTIVO',
            //'cargo' => 'LOGISTICA',
        ])->assignRole('Logistica');

    }
}
