<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Weather;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        \App\Models\User::factory(5)->create();

        Category::factory(10)->create();

        Weather::factory(50)->create();

    }

    // ejecutar seeder
    // php artisan db:seed

}
