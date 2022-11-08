<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Medico>
 */
class MedicoFactory extends Factory
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
            'telefono' => $this->faker->phoneNumber(),
            'codigo_sanitario' => $this->faker->regexify('([0-9]){8}'),
        ];
    }
}
