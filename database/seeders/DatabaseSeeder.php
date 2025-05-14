<?php

namespace Database\Seeders;

use App\Models\Subscriber;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Subscriber::factory(10)->create();

        Subscriber::factory(10)->create();
    }
}
