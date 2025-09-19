<?php

namespace App\Http\Controllers;

use App\Http\Resources\AboutResource;
use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Inertia\Inertia;

class AboutController extends Controller
{
    public function index(Request $request)
    {
        return Inertia::render('About', [
            'about' => new AboutResource(About::first()),
        ]);
    }
}
