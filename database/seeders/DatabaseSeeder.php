<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name'=>'Administrador',
            'email'=>'admin@tecsup.edu.pe',
            'password'=>Hash::make('Tecsup2024')
        ]);

        User::create([
            'name'=>'Secretaria',
            'email'=>'secretaria@tecsup.edu.pe',
            'password'=>Hash::make('Tecsup2024')
        ]);

        User::create([
            'name'=>'Doctor1',
            'email'=>'doctor1@tecsup.edu.pe',
            'password'=>Hash::make('Tecsup2024')
        ]);

        User::create([
            'name'=>'Paciente1',
            'email'=>'paciente1@tecsup.edu.pe',
            'password'=>Hash::make('Tecsup2024')
        ]);
    }
}
