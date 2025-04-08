<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    
    public function register(Request $request){
        $validatedData = $request->validate([
            "name"=> 'required|string|max:255',
            "email"=> 'required|string|email|max:255',
            'password'=> 'required|string|min:8|confirmed',
        ]);

        $user = User::create([
            'name'=> $validatedData['name'],
            'email'=> $validatedData['email'],
            'password'=> bcrypt($validatedData['password'])
        ]);
        $token = auth()->guard('api')->login($user);
        return $this->respondWithToken($token);
    }
    public function login()
    {
        $credentials = request(['email', 'password']);

        if (! $token = auth('api')->attempt($credentials)) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        return $this->respondWithToken($token);
    }

  
    public function me()
    {
        return response()->json(auth('api')->user());
    }

  
    public function logout()
    {
        auth()->logout();

        return response()->json(['message' => 'Successfully logged out']);
    }

    
    public function refresh()
    {
        return $this->respondWithToken(auth()->guard('api')->refresh());
    }

    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->guard('api')->factory()->getTTL() * 60
        ]);
    }
}
