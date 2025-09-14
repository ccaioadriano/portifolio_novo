<?php

namespace Database\Seeders;

use App\Models\Education;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EducationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Education::create([
            'course' => 'Bacharelado em Sistemas de Informação',
            'institution' => 'Universidade UNA',
            'start_date' => '2018-02-01',
            'end_date' => '2021-12-15',
            'description' => 'Formação completa em desenvolvimento de sistemas, banco de dados, engenharia de software e gestão de projetos de TI.',
        ]);

        Education::create([
            'course' => 'Curso Laravel Avançado',
            'institution' => 'Plataforma Online',
            'start_date' => '2022-03-01',
            'end_date' => '2022-06-30',
            'description' => 'Especialização em Laravel com foco em APIs, testes automatizados e arquitetura de software.',
        ]);

        Education::create([
            'course' => 'Certificação Vue.js',
            'institution' => 'Vue School',
            'start_date' => '2023-01-15',
            'end_date' => '2023-04-20',
            'description' => 'Certificação oficial em Vue.js 3, Composition API, Pinia e desenvolvimento de SPAs modernas.',
        ]);
    }

}
