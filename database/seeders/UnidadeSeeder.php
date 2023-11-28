<?php

namespace Database\Seeders;

use App\Models\Unidade;
use Illuminate\Database\Seeder;

class UnidadeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Unidade::factory()->create([
            'nome'           => 'Ana Maria do Espirito Santo',
            'endereco'       => 'Fazenda Sebastião Luís',
            'total_familias' => 1478,
        ]);

        Unidade::factory()->create([
            'nome'           => 'Aurelio Gomes',
            'endereco'       => 'Povoado Peri Peri',
            'total_familias' => 1287,
        ]);

        Unidade::factory()->create([
            'nome'           => 'Bernadete Leite',
            'endereco'       => 'Rua José Sampaio',
            'total_familias' => 2130,
        ]);

        Unidade::factory()->create([
            'nome'           => 'Claudio Regis',
            'endereco'       => 'Rua Luís G. dos Santos',
            'total_familias' => 1988,
        ]);

        Unidade::factory()->create([
            'nome'           => 'Josefa Barros',
            'endereco'       => 'Povoado Peri Peri',
            'total_familias' => 1908,
        ]);

        Unidade::factory()->create([
            'nome'           => 'Josefa Ferreira',
            'endereco'       => 'Povoado Ouro Branco',
            'total_familias' => 1478,
        ]);

        Unidade::factory()->create([
            'nome'           => 'Jose Palmeira',
            'endereco'       => 'Fazenda Palmeirinha',
            'total_familias' => 1067,
        ]);

        Unidade::factory()->create([
            'nome'           => 'Major Jose Tenorio',
            'endereco'       => 'AL - 105',
            'total_familias' => 1679,
        ]);

        Unidade::factory()->create([
            'nome'           => 'Maria Genura',
            'endereco'       => 'R. Pedro João da Silva',
            'total_familias' => 1911,
        ]);

        Unidade::factory()->create([
            'nome'           => 'Miguel Feliciano',
            'endereco'       => 'Av. Industrial Jorge Tenório Maia',
            'total_familias' => 1723,
        ]);

        Unidade::factory()->create([
            'nome'           => 'Oritenila Batista',
            'endereco'       => 'Av. Antônio Barros Lins',
            'total_familias' => 1778,
        ]);
    }
}
