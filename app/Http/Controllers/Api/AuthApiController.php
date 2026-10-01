<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthApiController extends Controller
{
    public function logiclogin(Request $request){
        $request->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]);

        $pengguna = User::where('email',$request->email)->first();

        if(!$pengguna || !Hash::check($request->password,$pengguna->password)){
            return response()->json([
                'message'=>'Email Atau password Salah, Coba lagi'
            ], 401);    
        }

        $pengguna->tokens()->delete();

        $token = $pengguna->createToken('auth_token')->plainTextToken;

        return response()->json([
            'message' => 'Login Berhasil Data di temukan',
            'acces_token' => $token,
            'token_type' => 'Bearer',
            'user' =>[
                'id'=> $pengguna->id,
                'name'=> $pengguna->name,
                'email'=> $pengguna->email
            ]

            ], 200);

    }
}
