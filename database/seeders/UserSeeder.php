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
            'password' => bcrypt('12345678'),
            'rol' => 'Admin'
        ])->assignRole('Admin');

        User::factory(20)->create();
    }
}
