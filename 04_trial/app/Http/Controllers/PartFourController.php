<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PartFour;

class PartFourController extends Controller
{
    public function index()
    {
        // Fetch all part_four records
        $partFours = PartFour::latest()->get(); 
        // Pass partFours to the welcome view
        return view('welcome', compact('partFours'));
    }
}
