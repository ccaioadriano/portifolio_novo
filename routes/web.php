<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Home', [
        'name' => 'Caio Adriano',
        'role' => 'Full Stack Developer'
    ]);
})->name('home');

Route::get('/sobre', [AboutController::class, 'index'])->name('about');

Route::get('/projetos', [ProjectController::class, 'index'])->name('projects');

Route::post('/validate-contact', [ContactController::class, 'validateContact']);
