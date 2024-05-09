<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registration;

class RegistrationController extends Controller
{
    public function registrationForm(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'full_name' => 'required',
            'matric_number' => 'required',
            'gender' => 'required',
            'address1' => 'required',
            'address2' => 'required',
            'country' => 'required',
            'city' => 'required',
            'region' => 'required',
            'postal_code' => 'required|integer',
        ]);

        // Create a new registration record
        $registration = Registration::create($validatedData);

        // Optionally, you can redirect the user to a success page
        return redirect()->route('registration-2');
    }
}