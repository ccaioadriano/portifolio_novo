<?php

namespace Database\Seeders;

use App\Models\Experience;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Experience::create([
            'role' => 'Full Stack Developer',
            'company' => 'Oktz',
            'start_date' => '2022-01-15',
            'end_date' => null, // Ainda trabalhando
            'description' => 'Desenvolvimento de sistemas web usando Laravel + Filament para painéis administrativos e Vue.js para interfaces de usuário. Responsável por arquitetura de software, integração de APIs e implementação de regras de negócio complexas.',
            'company_logo' => 'companies/oktz-logo.png',
        ]);

        Experience::create([
            'role' => 'Desenvolvedor PHP',
            'company' => 'TechSolutions',
            'start_date' => '2020-06-01',
            'end_date' => '2021-12-30',
            'description' => 'Desenvolvimento e manutenção de sistemas legados em PHP, migração para Laravel, criação de APIs REST e integração com sistemas terceiros.',
            'company_logo' => 'companies/techsolutions-logo.png',
        ]);

        Experience::create([
            'role' => 'Estagiário de Desenvolvimento',
            'company' => 'StartupXYZ',
            'start_date' => '2019-08-01',
            'end_date' => '2020-05-30',
            'description' => 'Primeiro contato profissional com desenvolvimento web. Participação em projetos usando HTML, CSS, JavaScript e PHP básico. Aprendizado de versionamento com Git e metodologias ágeis.',
            'company_logo' => 'companies/startupxyz-logo.png',
        ]);
    }
}

