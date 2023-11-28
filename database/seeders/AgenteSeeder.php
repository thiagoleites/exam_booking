<?php

namespace Database\Seeders;

use App\Models\Agente;
use Illuminate\Database\Seeder;

class AgenteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Agente::factory()->create([
            'nome'       => 'MARLENE SANTOS SILVA SAMPAIO',
            'cpf'        => '58428372420',
            'micro_area' => '01',
            'ubs_id'     => 1,
            'status'     => true,
        ]);

        Agente::factory()->create([
            'nome'       => 'JOSE GILVAN TENORIO DOS SANTOS',
            'cpf'        => '04464553427',
            'micro_area' => '02',
            'ubs_id'     => 1,
            'status'     => true,
        ]);

        Agente::factory()->create([
            'nome'       => 'MARIA ELIANE DA SILVA SANTOS',
            'cpf'        => '85956201487',
            'micro_area' => '03',
            'ubs_id'     => 1,
            'status'     => true,
        ]);

        Agente::factory()->create([
            'nome'       => 'LUIZ EDMUNDO OLIVEIRA COSTA',
            'cpf'        => '00901171409',
            'micro_area' => '04',
            'ubs_id'     => 1,
            'status'     => true,
        ]);

        Agente::factory()->create([
            'nome'       => 'GLEIDSON FERNANDES DOS SANTOS',
            'cpf'        => '07608345470',
            'micro_area' => '05',
            'ubs_id'     => 1,
            'status'     => true,
        ]);

        Agente::factory()->create([
            'nome'       => 'MARIA JOSE PEREIRA DOS SANTOS',
            'cpf'        => '04542669440',
            'micro_area' => '06',
            'ubs_id'     => 1,
            'status'     => true,
        ]);

        //Aurélio Gomes
        Agente::factory()->create([
            'nome'       => 'FRANCISCA MARIA PEREIRA DA SILVA',
            'cpf'        => '07175332475',
            'micro_area' => '01',
            'ubs_id'     => 2,
            'status'     => true,
        ]);

        Agente::factory()->create([
            'nome'       => 'ELIANE DA CONCEIÇÃO SANTOS',
            'cpf'        => '95543678487',
            'micro_area' => '02',
            'ubs_id'     => 2,
            'status'     => true,
        ]);

        Agente::factory()->create([
            'nome'       => 'SANDRO JORGE DOS SANTOS SILVA',
            'cpf'        => '04002991431',
            'micro_area' => '03',
            'ubs_id'     => 2,
            'status'     => true,
        ]);

        Agente::factory()->create([
            'nome'       => 'MARIA APARECIDA RODRIGUES DA SILVA',
            'cpf'        => '06316272430',
            'micro_area' => '04',
            'ubs_id'     => 2,
            'status'     => true,
        ]);

        Agente::factory()->create([
            'nome'       => 'VICTOR LEONARDO BARBOSA TENORIO',
            'cpf'        => '07196364422',
            'micro_area' => '05',
            'ubs_id'     => 2,
            'status'     => true,
        ]);

        //Bernadete Leite
        Agente::factory()->create([
            'nome'       => 'ELAINE JULIANA TEIXEIRA DE ARAUJO',
            'cpf'        => '06970205410',
            'micro_area' => '01',
            'ubs_id'     => 3,
            'status'     => true,
        ]);

        Agente::factory()->create([
            'nome'       => 'MARIA MATIAS MARINHO',
            'cpf'        => '04437040406',
            'micro_area' => '02',
            'ubs_id'     => 3,
            'status'     => true,
        ]);

        Agente::factory()->create([
            'nome'       => 'ROZENILDA PIMENTEL DA SILVA',
            'cpf'        => '90290801400',
            'micro_area' => '03',
            'ubs_id'     => 3,
            'status'     => true,
        ]);

        Agente::factory()->create([
            'nome'       => 'RITA MARIA DE SOUZA DA SILVA',
            'cpf'        => '72478063468',
            'micro_area' => '04',
            'ubs_id'     => 3,
            'status'     => true,
        ]);

        Agente::factory()->create([
            'nome'       => 'ADEILDO BERNALDO DA SILVA',
            'cpf'        => '03244676480',
            'micro_area' => '05',
            'ubs_id'     => 3,
            'status'     => true,
        ]);

        Agente::factory()->create([
            'nome'       => 'ELISSANDRA MATIAS MARINHO',
            'cpf'        => '04437041470',
            'micro_area' => '06',
            'ubs_id'     => 3,
            'status'     => true,
        ]);

        Agente::factory()->create([
            'nome'       => 'GIVANILDA RIBEIRO DA SILVA',
            'cpf'        => '05286753469',
            'micro_area' => '07',
            'ubs_id'     => 3,
            'status'     => true,
        ]);

        Agente::factory()->create([
            'nome'       => 'MILENA RENATA PEIXOTO DA SILVA',
            'cpf'        => '09957830473',
            'micro_area' => '08',
            'ubs_id'     => 3,
            'status'     => true,
        ]);

        //Claúdio Régis
        Agente::factory()->create([
            'nome'       => 'SENI LOPES COSTA',
            'cpf'        => '05292092410',
            'micro_area' => '01',
            'ubs_id'     => 4,
            'status'     => true,
        ]);

        Agente::factory()->create([
            'nome'       => 'DAVID TELES DA SILVA',
            'cpf'        => '05121618441',
            'micro_area' => '02',
            'ubs_id'     => 4,
            'status'     => true,
        ]);

        Agente::factory()->create([
            'nome'       => 'ANGELA MARIA DA CONCEICAO',
            'cpf'        => '04121259432',
            'micro_area' => '03',
            'ubs_id'     => 4,
            'status'     => true,
        ]);

        Agente::factory()->create([
            'nome'       => 'FRANCINE DOS SANTOS DUARTE',
            'cpf'        => '03201041416',
            'micro_area' => '04',
            'ubs_id'     => 4,
            'status'     => true,
        ]);

        Agente::factory()->create([
            'nome'       => 'MARIA DA PIEDADE DOS SANTOS DE LIMA',
            'cpf'        => '03066141462',
            'micro_area' => '05',
            'ubs_id'     => 4,
            'status'     => true,
        ]);

        Agente::factory()->create([
            'nome'       => 'IRACI DA SILVA OLIVEIRA',
            'cpf'        => '09957830473',
            'micro_area' => '06',
            'ubs_id'     => 4,
            'status'     => true,
        ]);

        //José Palmeira Filho
        Agente::factory()->create([
            'nome'       => 'MARIA JANIETE ROCHA CESARIO',
            'cpf'        => '04234601454',
            'micro_area' => '01',
            'ubs_id'     => 5,
            'status'     => true,
        ]);

        Agente::factory()->create([
            'nome'       => 'GILSON DA SILVA FRANCISCO',
            'cpf'        => '01167055403',
            'micro_area' => '02',
            'ubs_id'     => 5,
            'status'     => true,
        ]);

        Agente::factory()->create([
            'nome'       => 'MARLI GOMES DA SILVA LOPES',
            'cpf'        => '89421400410',
            'micro_area' => '03',
            'ubs_id'     => 5,
            'status'     => true,
        ]);

        Agente::factory()->create([
            'nome'       => 'RITA MARIA DA SILVA OLIVEIRA',
            'cpf'        => '80360556434',
            'micro_area' => '04',
            'ubs_id'     => 5,
            'status'     => true,
        ]);

        Agente::factory()->create([
            'nome'       => 'MARIA DE FATIMA SANTANA SANTOS',
            'cpf'        => '49593102434',
            'micro_area' => '05',
            'ubs_id'     => 5,
            'status'     => true,
        ]);

        Agente::factory()->create([
            'nome'       => 'ROZENALDO JOSE DE MORAES',
            'cpf'        => '05308546436',
            'micro_area' => '06',
            'ubs_id'     => 5,
            'status'     => true,
        ]);

        Agente::factory()->create([
            'nome'       => 'JULIANA DA SILVA MACEDO',
            'cpf'        => '05173204443',
            'micro_area' => '07',
            'ubs_id'     => 5,
            'status'     => true,
        ]);

        //Josefa Barros
        Agente::factory()->create([
            'nome'       => 'MARIA QUITERIA DOS SANTOS',
            'cpf'        => '67785336415',
            'micro_area' => '01',
            'ubs_id'     => 6,
            'status'     => true,
        ]);

        Agente::factory()->create([
            'nome'       => 'RONALDO OLINTO PEREIRA',
            'cpf'        => '04021414401',
            'micro_area' => '02',
            'ubs_id'     => 6,
            'status'     => true,
        ]);

        Agente::factory()->create([
            'nome'       => 'SAMUEL GOMES DA SILVA',
            'cpf'        => '05300809403',
            'micro_area' => '03',
            'ubs_id'     => 6,
            'status'     => true,
        ]);

        Agente::factory()->create([
            'nome'       => 'ADRIANO JOSE DOS SANTOS',
            'cpf'        => '04454008469',
            'micro_area' => '04',
            'ubs_id'     => 6,
            'status'     => true,
        ]);

    }
}
