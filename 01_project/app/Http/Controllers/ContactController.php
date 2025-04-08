<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {

        $contacts = Contact::find(2); // Database se saara data le aayega
        return view('contact', compact('contacts')); // View me bhej raha hai
    }

    public function store(Request $request)
    {
        // Validate करें
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        // डेटा को डेटाबेस में सेव करें
        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message
        ]);

        // सफलतापूर्वक सेव होने पर मैसेज दिखाएँ
        return redirect('/contact')->with('success', 'Contact succesfully updated');
    }
}
