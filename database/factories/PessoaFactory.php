<?php

namespace Database\Factories;

use App\Models\{Agente, Unidade};
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pessoa>
 */
class PessoaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $agente     = Agente::all()->random();
        $unidade    = Unidade::all()->random();
        $agente_id  = $agente->id;
        $unidade_id = $unidade->id;

        return [
            'agente_id'       => $agente_id,
            'unidade_id'      => $unidade_id,
            'nome'            => $this->faker->name(),
            'cpf'             => $this->faker->randomNumber(9),
            'nome_mae'        => $this->faker->name(),
            'data_nascimento' => $this->faker->date(),
            'telefone'        => $this->faker->phoneNumber(),
            'status'          => true,
        ];
    }
}
