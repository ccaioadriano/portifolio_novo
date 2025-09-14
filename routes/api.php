<?php

use App\Models\About;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/projetos', function () {
    return Project::with('stacks')->get();
});

Route::get('/sobre', function () {
    return About::first();
});

Route::get('/experiencias', function () {
    return Experience::get();
});

Route::get('/educacao', function () {
    return Education::get();
});
