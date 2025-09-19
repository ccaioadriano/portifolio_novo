<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('abouts')->insert([
            'name' => 'Caio Adriano Rodrigues dos Santos',
            'headline' => 'Consultor de Soluções Tecnológicas | Fullstack Dev Laravel + Vue',
            'bio' => 'Profissional com 4 anos de experiência em desenvolvimento fullstack, integração de sistemas, sustentação de aplicações críticas e otimização de processos internos. Experiência em saúde, logística e projetos independentes.',
            'profile_picture' => 'perfil/formatura.png',
            'social_links' => json_encode([
                'github' => 'https://github.com/ccaioadriano',
                'linkedin' => 'https://www.linkedin.com/in/caio-adriano',
                'email' => 'caiobhadriano@gmail.com',
            ]),
        ]);
    }
}
