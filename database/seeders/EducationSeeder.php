<?php

namespace Database\Seeders;

use App\Models\Education;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EducationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $education = [
            [
                'course' => 'Pós-Graduação em Arquitetura de Software Distribuído',
                'institution' => 'PUC Minas',
                'start_date' => '2023-01-01',
                'end_date' => '2024-12-01',
                'description' => 'Ênfase em arquitetura distribuída, microsserviços e sistemas escaláveis.'
            ],
            [
                'course' => 'Bacharelado em Sistemas de Informação',
                'institution' => 'UNA',
                'start_date' => '2019-01-01',
                'end_date' => '2023-12-01',
                'description' => 'Formação sólida em desenvolvimento de software, banco de dados e infraestrutura.'
            ],
            [
                'course' => 'Administração de Banco de Dados',
                'institution' => 'UFV',
                'start_date' => '2020-01-01',
                'end_date' => '2020-12-01',
                'description' => 'Curso de extensão em modelagem, tuning e manutenção de bancos de dados relacionais.'
            ]
        ];

        DB::table('education')->insert($education);
    }

}
