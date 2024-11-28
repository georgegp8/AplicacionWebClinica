<?php

namespace Database\Seeders;

use App\Models\Consultorio;
use App\Models\Doctor;
use App\Models\Horario;
use App\Models\Paciente;
use App\Models\Secretaria;
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

        Doctor::create([
            'nombres'=>'Doctor1',
            'apellidos'=>'Swift',
            'telefono' => '900111951',
            'licencia_medica' => '02225556',
            'especialidad'=>'Rinoplastia',
            'user_id'=>'3',
        ]);
        

        User::create([
            'name'=>'Doctor2',
            'email'=>'doctor2@tecsup.edu.pe',
            'password'=>Hash::make('Tecsup2024')
        ])->assignRole('doctor');

        Doctor::create([
            'nombres'=>'Doctor2',
            'apellidos'=>'Barrientos',
            'telefono' => '900111999',
            'licencia_medica' => '01115556',
            'especialidad'=>'Blefaroplastia',
            'user_id'=>'4',
        ]);


        User::create([
            'name'=>'Doctor3',
            'email'=>'doctor3@tecsup.edu.pe',
            'password'=>Hash::make('Tecsup2024')
        ])->assignRole('doctor');

        Doctor::create([
            'nombres'=>'Doctor3',
            'apellidos'=>'Valdez',
            'telefono' => '900111088',
            'licencia_medica' => '01112226',
            'especialidad'=>'Liposuccion',
            'user_id'=>'5',
        ]);


        Consultorio::create([
            'nombre' => 'CitasTEC-A', 
            'ubicacion' => 'Piso 1',
            'capacidad' => '20',
            'telefono' => '955304200',
            'especialidad' => 'Rinoplastia', 
            'estado' => 'ACTIVO',
        ]);

        Consultorio::create([
            'nombre' => 'CitasTEC-B', 
            'ubicacion' => 'Piso 2',
            'capacidad' => '30',
            'telefono' => '955304211',
            'especialidad' => 'Blefaroplastia', 
            'estado' => 'ACTIVO',
        ]);

        Consultorio::create([
            'nombre' => 'CitasTEC-C', 
            'ubicacion' => 'Piso 3',
            'capacidad' => '15',
            'telefono' => '955304222',
            'especialidad' => 'Liposuccion', 
            'estado' => 'ACTIVO',
        ]);

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

        $this->call([PacienteSeeder::class,]);


        //Creación de horarios
        Horario::create([
            'dia'=>'LUNES',
            'hora_inicio'=>'08:00:00',
            'hora_final'=>'14:00:00',
            'doctor_id'=>'1',
            'consultorio_id'=>'1',

        ]);
    }
}
