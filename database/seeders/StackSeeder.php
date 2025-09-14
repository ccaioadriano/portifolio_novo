<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('stacks')->insert([
            [
                'title' => 'Laravel',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Vue.js',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Filament',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'PHP',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'JavaScript',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'MySQL',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'TailwindCSS',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Docker',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
