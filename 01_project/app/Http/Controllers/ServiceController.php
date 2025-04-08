<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Service;

class ServiceController extends Controller
{
    public function index()
    {
        return view('service');
    }

    public function store(Request $request)
    {
        // Validate करें
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric'
        ]);

        // डेटा को डेटाबेस में सेव करें
        Service::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price
        ]);

        // सफलतापूर्वक सेव होने पर मैसेज दिखाएँ
        return redirect('/service')->with('success', 'Service successfully updated ');
    }
}
