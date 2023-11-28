<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Exame>
 */
class ExameFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nome'      => $this->faker->name,
            'descricao' => $this->faker->text,
            'contraste' => $this->faker->randomElement(['Sim', 'Não']),
            'status'    => true,
        ];
    }
}
