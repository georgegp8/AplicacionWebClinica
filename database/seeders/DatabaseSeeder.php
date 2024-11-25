<?php

namespace Database\Seeders;

use App\Models\Secretaria;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Middleware\RoleMiddleware;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([RoleSeeder::class,]);

        User::create([
            'name'=>'Administrador',
            'email'=>'admin@tecsup.edu.pe',
            'password'=>Hash::make('Tecsup2024')
        ])->assignRole('admin');

        User::create([
            'name'=>'Secretaria',
            'email'=>'secretaria@tecsup.edu.pe',
            'password'=>Hash::make('Tecsup2024')
        ])->assignRole('secretaria');

        Secretaria::create([
            'nombres'=>'Secretaria',
            'apellidos'=>'1',
            'dni' => '77700022',
            'celular' => '911345222',
            'fecha_nacimiento'=>'10/10/2000',
            'direccion'=> 'Cercado Arequipa',
            'user_id'=>'2',
        ]);

        User::create([
            'name'=>'Doctor1',
            'email'=>'doctor1@tecsup.edu.pe',
            'password'=>Hash::make('Tecsup2024')
        ])->assignRole('doctor');

        User::create([
            'name'=>'Paciente1',
            'email'=>'paciente1@tecsup.edu.pe',
            'password'=>Hash::make('Tecsup2024')
        ])->assignRole('paciente');

        User::create([
            'name'=>'Usuario1',
            'email'=>'usuario1@tecsup.edu.pe',
            'password'=>Hash::make('Tecsup2024')
        ])->assignRole('usuario');    
    }
}
