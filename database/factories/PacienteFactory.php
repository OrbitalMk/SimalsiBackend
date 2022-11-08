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
    public function definition()
    {
        return [
            'nombres' => $this->faker->firstName(),
            'apellidos' => $this->faker->lastName(),
            'nacimiento' => $this->faker->date(),
            'inss' => $this->faker->randomNumber(8, true),
            'telefono' => $this->faker->phoneNumber(),
            'sexo' => $this->faker->randomElement(['Femenino', 'Masculino']),
        ];
    }
}
