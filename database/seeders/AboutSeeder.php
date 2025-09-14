<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        About::create([
            'name' => 'Caio Adriano Rodrigues dos Santos',
            'headline' => 'Full Stack Developer | Laravel + Vue.js',
            'bio' => 'Desenvolvedor especializado em Laravel + Filament...',
            'profile_picture' => 'profile/caio.jpg',
            'social_links' => [
                'github' => 'https://github.com/caio',
                'linkedin' => 'https://linkedin.com/in/caio',
                'email' => 'caio.santos@oktz.com.br'
            ]
        ]);
    }
}
