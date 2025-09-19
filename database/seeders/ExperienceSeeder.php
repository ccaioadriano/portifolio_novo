<?php

namespace Database\Seeders;

use App\Models\Experience;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $experiences = [
            [
                'role' => 'Software Developer',
                'company' => 'Oktz',
                'start_date' => '2024-10-01',
                'end_date' => null,
                'description' => 'Atuação em logística: captura de assinaturas, integração ao ERP Sankhya, migração para AWS RDS e versionamento do projeto.',
                'company_logo' => null
            ],
            [
                'role' => 'Analista de Sistemas',
                'company' => 'Fundação Hospitalar de Minas Gerais (FHEMIG)',
                'start_date' => '2024-03-01',
                'end_date' => '2024-10-01',
                'description' => 'Desenvolvi sistema de OS em Laravel e Docker. Normalizei bancos MySQL e realizei treinamentos.',
                'company_logo' => null
            ],
            [
                'role' => 'Programador',
                'company' => 'Fundação Hospitalar de Minas Gerais (FHEMIG)',
                'start_date' => '2023-09-01',
                'end_date' => '2024-03-01',
                'description' => 'Manutenção de sistemas legados em Java e PHP. Documentação e normalização de banco de dados.',
                'company_logo' => null
            ],
            [
                'role' => 'Freelancer',
                'company' => 'Projeto My Business Coin',
                'start_date' => '2025-06-01',
                'end_date' => '2025-08-01',
                'description' => 'Marketplace completo com catálogo, carrinho e checkout seguro. Adição de dark mode e componentização.',
                'company_logo' => null
            ],
            [
                'role' => 'Estagiário',
                'company' => 'PRODEMGE',
                'start_date' => '2021-06-01',
                'end_date' => '2023-06-01',
                'description' => 'Atuação com Java (Spring Boot) e Angular 9. Testes E2E e suporte a sistemas do Governo de MG.',
                'company_logo' => null
            ],
        ];

        DB::table('experiences')->insert($experiences);
    }
}

