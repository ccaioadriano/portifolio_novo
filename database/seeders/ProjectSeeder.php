<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Stack;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Buscar as stacks para associar aos projetos
        $laravel = Stack::where('title', 'Laravel')->first();
        $vue = Stack::where('title', 'Vue.js')->first();
        $filament = Stack::where('title', 'Filament')->first();
        $mysql = Stack::where('title', 'MySQL')->first();
        $tailwind = Stack::where('title', 'TailwindCSS')->first();

        // Projeto 1
        $project1 = Project::create([
            'title' => 'Sistema de Gestão Empresarial',
            'slug' => 'sistema-gestao-empresarial',
            'short_description' => 'Sistema completo para gestão de empresas com painel administrativo.',
            'long_description' => 'Sistema desenvolvido em Laravel com painel administrativo usando Filament. Inclui gestão de usuários, relatórios, dashboard e módulos personalizados para diferentes tipos de negócio.',
            'cover_image' => 'projects/sistema-gestao-cover.jpg',
            'gallery' => ['projects/sistema-gestao-1.jpg', 'projects/sistema-gestao-2.jpg'],
            'project_url' => 'https://demo-gestao.com',
            'repository_url' => 'https://github.com/usuario/sistema-gestao',
        ]);

        // Associar stacks ao projeto 1
        $project1->stacks()->attach([$laravel->id, $filament->id, $mysql->id, $tailwind->id]);

        // Projeto 2
        $project2 = Project::create([
            'title' => 'E-commerce Moderno',
            'slug' => 'ecommerce-moderno',
            'short_description' => 'Plataforma de e-commerce com frontend em Vue.js e backend Laravel.',
            'long_description' => 'E-commerce completo com carrinho de compras, sistema de pagamento, gestão de produtos e pedidos. Frontend desenvolvido em Vue.js consumindo API REST do Laravel.',
            'cover_image' => 'projects/ecommerce-cover.jpg',
            'gallery' => ['projects/ecommerce-1.jpg', 'projects/ecommerce-2.jpg', 'projects/ecommerce-3.jpg'],
            'project_url' => 'https://loja-demo.com',
            'repository_url' => 'https://github.com/usuario/ecommerce-vue',
        ]);

        // Associar stacks ao projeto 2
        $project2->stacks()->attach([$laravel->id, $vue->id, $mysql->id, $tailwind->id]);

        // Projeto 3
        $project3 = Project::create([
            'title' => 'API de Integração Bancária',
            'slug' => 'api-integracao-bancaria',
            'short_description' => 'API robusta para integração com sistemas bancários e processamento de pagamentos.',
            'long_description' => 'API desenvolvida em Laravel para integração com múltiplos bancos e processadoras de pagamento. Inclui webhooks, validações de segurança e documentação completa.',
            'cover_image' => 'projects/api-bancaria-cover.jpg',
            'gallery' => ['projects/api-bancaria-1.jpg'],
            'project_url' => null,
            'repository_url' => 'https://github.com/usuario/api-bancaria',
        ]);

        // Associar stacks ao projeto 3
        $project3->stacks()->attach([$laravel->id, $mysql->id]);
    }
}

