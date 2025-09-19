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
        $stacks = [
            ['title' => 'Java (Spring Boot)', 'icon_path' => 'icons/java.svg'],
            ['title' => 'PHP (Laravel)', 'icon_path' => 'icons/laravel.svg'],
            ['title' => 'MySQL', 'icon_path' => 'icons/mysql.svg'],
            ['title' => 'React', 'icon_path' => 'icons/react.svg'],
            ['title' => 'React Native', 'icon_path' => 'icons/react-native.svg'],
            ['title' => 'Docker', 'icon_path' => 'icons/docker.svg'],
            ['title' => 'AWS RDS', 'icon_path' => 'icons/aws.svg'],
            ['title' => 'HTML/CSS/JS', 'icon_path' => 'icons/html-css-js.svg'],
        ];

        DB::table('stacks')->insert($stacks);
    }
}
