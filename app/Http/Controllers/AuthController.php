<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(Request $request){
        return response()->json([
            'data' => [
                $request->name,
                $request->password,
                $request->email
            ]
        ]);
    }
}
