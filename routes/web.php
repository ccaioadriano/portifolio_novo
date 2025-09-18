<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Home', [
        'name' => 'Caio Adriano',
        'role' => 'Full Stack Developer'
    ]);
});

Route::get('/sobre', function () {
    return Inertia::render('About', [
        'name' => 'Caio Adriano',
        'role' => 'Full Stack Developer'
    ]);
});

Route::get('/projetos', function () {
    return Inertia::render('Projects', [
        'name' => 'Caio Adriano',
        'role' => 'Full Stack Developer'
    ]);
});
