<?php

namespace Database\Seeders;

use App\Models\Exame;
use Illuminate\Database\Seeder;

class ExameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Exame::factory()
            ->count(45)
            ->create();
    }
}
