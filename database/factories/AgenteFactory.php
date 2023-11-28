<?php

namespace Database\Factories;

use App\Models\Unidade;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Agente>
 */
class AgenteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $ubs    = Unidade::all()->random();
        $ubs_id = $ubs->id;

        return [
            'nome'       => $this->faker->name,
            'cpf'        => $this->faker->randomNumber(9),
            'micro_area' => $this->faker->randomElement(['01', '02', '03', '04', '05', '06', '07', '08']),
            'ubs_id'     => $ubs_id,
            'status'     => true,
        ];
    }
}
