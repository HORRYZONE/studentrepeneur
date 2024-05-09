<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registration2;

class Registration2Controller extends Controller
{
    public function registration2Form(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'business_name' => 'required',
            'about_business' => 'required',
            'target_fund' => 'required|numeric',
            'phone_number' => 'required',
            'birth_date' => 'required',
            'brands' => 'nullable|array',
            'brands.*' => 'nullable|string',
        ]);

        // Create a new registration record
        $registration2 = Registration2::create($validatedData);

        // Optionally, you can redirect the user to a success page
        return redirect()->route('registration-success');
    }
}