<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Tymon\JWTAuth\Contracts\Providers\Auth;
use Tymon\JWTAuth\Facades\JWTAuth;
use Tymon\JWTAuth\JWT;

class AuthController extends Controller
{
    public function register(Request $request){

        $validated = $request->validate([
            'name' => 'string|required|max:255',
            'password' => 'required|string:255',
            'email' => 'nullable|string:255',
            'role_id' => 'required'
        ]);
        
        $user = User::create([
            'name' => $validated['name'],
            'password' => Hash::make($validated['password']),
            'email' => $validated['email'],
            'role_id' => $validated['role_id']
        ]);

        return response()->json([
            'message' => 'successfully create an user',
        ],201);
    }

    public function login(Request $request){
        $validated = $request->validate([
            'name' => 'required|string',
            'password' => 'required|string'
        ]);

        $user = User::where('name',$validated['name'])->first();

        if (!$user || !Hash::check($validated['password'],$user->password)) {
            return response()->json([
                'msg' => "gagal"
            ],401);
        }

        $user->tokens()->delete();

        $token = $user->createToken('auth_token')->plainTextToken;
        return response()->json([
            'msg' => 'berhasil',
            'token' => $token,
            'token_type' => 'bearer'
        ],200);
    }
}
