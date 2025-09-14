<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            StackSeeder::class,
            ProjectSeeder::class,
            AboutSeeder::class,
            EducationSeeder::class,
            ExperienceSeeder::class,
        ]);
    }
}
