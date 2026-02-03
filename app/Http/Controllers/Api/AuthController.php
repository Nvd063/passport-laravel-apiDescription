<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Http\Request;
use App\Models\User;
class AuthController extends Controller
{
    public function register(Request $req)
    {
        $req->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|max:100',
            'confirm_password' => 'required|same:password'
        ]);

        $user = User::create([
            'name' => $req->name,
            'email' => $req->email,
            'password' => bcrypt($req->password)
        ]);

        $response = [];
        $response['token'] = $user->createToken('api-token')->accessToken;
        $response['name'] = $user->name;
        $response['email'] = $user->email;

        return response()->json([
            'message' => 'Register Successfully',
            'Data' => $response
        ]);
    }

    public function login(Request $req)
    {
        if (Auth::attempt(['email' => $req->email, 'password' => $req->password])) {
            $user = Auth::user();

            $response = [];
            $response['token'] = $user->createToken('api-token')->accessToken;
            $response['name'] = $user->name;
            $response['email'] = $user->email;

            return response()->json([
                'message' => 'Login Successfully',
                'Data' => $response
            ]);
        }
        return response()->json([
            'message' => 'Unauthorized',
        ]);
    }

    public function logout(Request $req){
        $req->user()->accessToken->delete();
        return response()->json([
            'message'=>'Logout Successfully',
            'Token'=>'Token Deleted Successfully'
        ]);
    }
}
