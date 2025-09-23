<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Spatie\Sitemap\SitemapGenerator;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

Artisan::command('sitemap:generate', function () {
    SitemapGenerator::create('https://www.caioadriano.com.br')
        ->writeToFile(public_path('sitemap.xml'));
})->purpose('Gerar o sitemap do site');