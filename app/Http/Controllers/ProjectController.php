<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProjectResource;
use App\Models\Project;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ProjectController extends Controller
{

    public function index(Request $request)
    {
        return Inertia::render('Projects', [
            'projects' => ProjectResource::collection(Project::with('stacks')->get()),
        ]);
    }
}
