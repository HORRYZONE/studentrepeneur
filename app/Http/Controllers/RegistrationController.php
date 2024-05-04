<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function store(Request $request)
    {
        // Process the form data and perform any necessary actions
        
        // Redirect to the next page
        return redirect()->route('registration-2');
    }
}