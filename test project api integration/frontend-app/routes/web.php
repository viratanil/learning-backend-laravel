<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;


Route::view('/', 'home');           // Home Page
Route::view('/contact', 'contact'); // Contact Page
Route::view('/register', 'signup');   // Signup Page
Route::view('/login', 'login');     // Login Page
Route::view('/dashboard', 'dashboard'); // Dashboard


Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/contact', function () {
    return view('contact');
})->name('contact.form');

Route::post('/contact', function () {
    $response = Http::post('http://127.0.0.1:8001/api/contact', [ // Backend API URL
        'name' => request('name'),
        'email' => request('email'),
        'message' => request('message'),
    ]);

    if ($response->successful()) {
        return back()->with('success', 'Message sent successfully!');
    }

    return back()->with('error', 'Something went wrong!');
})->name('contact.submit');

