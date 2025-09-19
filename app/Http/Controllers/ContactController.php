<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    //

    public function validateContact(ContactRequest $request){
        Log::info($request->validated());
        return back()->with('success', 'Validação concluída');
    }
}
