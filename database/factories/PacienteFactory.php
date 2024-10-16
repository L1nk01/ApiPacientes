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
        $nombres = fake()->firstName() . ' ' . fake()->firstName();
        $apellidos = fake()->lastName() . ' ' . fake()->lastName();

        $nombresArray = explode(' ', $nombres);
        $apellidosArray = explode(' ', $apellidos);

        $primerNombre = strtolower($nombresArray[0]);
        $primerApellido = strtolower($apellidosArray[0]);

        return [
            'nombres' => $nombres,
            'apellidos' => $apellidos,
            'edad' => strval(fake()->numberBetween(18, 90)),
            'sexo' => fake()->randomElement(['Masculino', 'Femenino']),
            'cedula' => fake()->regexify("^(402|001)\d{7}[1-3]$"),
            'tipo_sangre' =>  fake()->randomElement(['A+', 'A-', 'B+', 'B-', 'AB+', 'AB-', 'O+', 'O-']),
            'telefono' => fake()->regexify("^(809|829|849)\d{7}$"),
            'correo_electronico' => $primerNombre . "." . $primerApellido . "@micorreo.com",
            'direccion' => fake()->address()
        ];
    }
}
