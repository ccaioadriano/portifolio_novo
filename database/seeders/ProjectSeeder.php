<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projects = [
            [
                'title' => 'Sistema de Gestão Empresarial',
                'slug' => 'sistema-de-gestao',
                'short_description' => 'Sistema completo para gestão de empresas com painel administrativo.',
                'long_description' => 'Implementação de fluxo completo de módulos administrativos integrados a bancos de dados.',
                'cover_image' => null,
                'gallery' => json_encode([]),
                'project_url' => 'https://demo-gestao.com',
                'repository_url' => 'https://github.com/usuario/sistema-gestao',
            ],
            [
                'title' => 'Projeto My Business Coin',
                'slug' => 'my-business-coin',
                'short_description' => 'Marketplace com catálogo, carrinho e checkout seguro.',
                'long_description' => 'Projeto independente de e-commerce com dark mode, componentização e alta performance.',
                'cover_image' => null,
                'gallery' => json_encode([]),
                'project_url' => null,
                'repository_url' => null,
            ]
        ];

        DB::table('projects')->insert($projects);

        // Relacionamento via project_stacks
        DB::table('project_stacks')->insert([
            ['project_id' => 1, 'stack_id' => 2], // Laravel
            ['project_id' => 1, 'stack_id' => 3], // MySQL
            ['project_id' => 2, 'stack_id' => 4], // React
            ['project_id' => 2, 'stack_id' => 5], // React Native
        ]);
    }
}

