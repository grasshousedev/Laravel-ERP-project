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
            'name' => 'Gerardo Manuel',
            'email' => 'gerardo@gmail.com',
            'password' => bcrypt('12345678')
        ])->assignRole('Admin');

        User::create([
            'name' => 'Jamir Vargas',
            'email' => 'jamir@gmail.com',
            'password' => bcrypt('12345678')
        ])->assignRole('Admin');

        User::create([
            'name' => 'Diego Peña',
            'email' => 'diego@gmail.com',
            'password' => bcrypt('12345678')
        ])->assignRole('Admin');

        User::create([
            'name' => 'Lorena Caro',
            'email' => 'lorena@gmail.com',
            'password' => bcrypt('12345678')
        ])->assignRole('Admin');

        User::factory(10)->create();
    }
}
