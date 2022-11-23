<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Laravel\Sanctum\PersonalAccessToken;
use App\Models\User;

class AuthController extends Controller
{
    /**
     * Login
     */
    public function login(Request $request) {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string|min:8',
        ]);

        $user = User::where('email', $request->email)->first();

        if($user && Hash::check($request->password, $user->password)) {
            $token = $user->createToken('myapptoken')->plainTextToken;

            return response([
                'token' => $token
            ], 201);
        }

        return response([
            'message' => 'Error'
        ], 401);
    }

    /**
     * Logout
     */
    public function logout(Request $request) {
        $accessToken = $request->bearerToken();

        $token = PersonalAccessToken::findToken($accessToken);
        $token?->delete();

        return response([
            'message' => 'logged out'
        ], 200);
    }
}
