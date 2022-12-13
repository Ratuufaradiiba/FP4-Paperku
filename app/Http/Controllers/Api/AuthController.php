<?php

namespace App\Http\Controllers\Api;

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// tambahan
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $input = [
            "name" => $request->name,
            "password" => Hash::make($request->password),
            "email" => $request->email,
        ];

        $user = User::create($input);

        return response()->json([
            "status" => "success",
            "message" => "Register Success!"
        ]);
    }

    public function login(Request $request)
    {
        $input  = [
            "email" => $request->email,
            "password" => $request->password,
        ];

        $user = User::where("email", $input["email"])->first();

        if (Auth::attempt($input)) {
            $token = $user->createToken("token")->plainTextToken;

            return response()->json([
                "code" => 200,
                "status" => "success",
                "message" => "Login Success",
                "token" => $token
            ]);
        } else {
            return response()->json([
                "code" => 401,
                "status" => "error",
                "message" => "Login Failed"
            ]);
        }
    }
}
