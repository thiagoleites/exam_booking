<?php

namespace Database\Seeders;

use App\Models\{Pessoa, Unidade};
use Illuminate\Database\Seeder;

function contaFamilias()
{
    return Unidade::sum('total_familias');
}
class PessoaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pessoa::factory()
            ->count(contaFamilias())
            ->create();
    }
}
