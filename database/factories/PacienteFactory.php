<?php

namespace Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Paciente>
 */
class PacienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombres'=>$this->faker->name,
            'apellidos'=>$this->faker->lastName,
            'dni'=>$this->faker->unique()->numerify('########'),
            'ruc'=>$this->faker->unique()->numerify('###########'),
            'fecha_nacimiento'=>$this->faker->date('Y-m-d',max:'2024-12-31'),
            'genero'=>$this->faker->randomElement(['M','F']),
            'celular'=>$this->faker->unique()->numerify('9########'),
            'correo'=>$this->faker->unique()->safeEmail,
            'direccion'=>$this->faker->address,
            'grupo_sanguineo'=>$this->faker->randomElement(['A+','A-','B+','B-','O+','O-']),
            'alergias' => $this->faker->sentence(3),
            'contacto_emergencia'=>$this->faker->phoneNumber,
            'observaciones' => $this->faker->sentence(3),
        ];
    }
}
