<?php

use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Home', [
        'name' => 'Caio Adriano',
        'role' => 'Full Stack Developer'
    ]);
})->name('home');

Route::get('/sobre', function () {
    return Inertia::render('About', [
        'name' => 'Caio Adriano',
        'role' => 'Full Stack Developer'
    ]);
})->name('about');

Route::get('/projetos', [ProjectController::class, 'index'])->name('projects');
