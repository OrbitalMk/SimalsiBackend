<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        /*\App\Models\User::factory(10)->create();
        \App\Models\Medico::factory(10)->create();*/

        /*\App\Models\Departamento::factory(5)
            ->has(\App\Models\Municipio::factory()
                ->has(\App\Models\Unidad::factory()->count(1), 'unidad')
                ->count(2), 'municipio')
            ->create();*/

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
