<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function store(Request $request)
    {
      
        // Basic validation
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        // Save to DB
        $contact = Contact::create($request->all());

        return response()->json([
            'success' => true,
            'message' => 'Contact saved successfully!',
            'data' => $contact
        ]);
    }
}

