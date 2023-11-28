<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name'     => 'Test User',
            'email'    => 'teste@example.com',
            'password' => bcrypt('123456'),
        ]);

        $this->call([
            UnidadeSeeder::class,
            AgenteSeeder::class,
            PessoaSeeder::class,
            ExameSeeder::class,
        ]);
    }
}
