<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Tymon\JWTAuth\Facades\JWTAuth;

use Illuminate\Http\Request;
use Tymon\JWTAuth\Http\Middleware\RefreshToken;

class AuthController extends Controller
{
    public function login(LoginRequest $request){
        $credentials=$request->only('email','password');

        $token=auth('api')->attempt($credentials);

        if(!$token){

            return response()->json(['message'=> "unathorized access!"],401);
        }

            return response()->json([
                'access_token'=>$token,
                'expires_in'=>auth('api')->factory()->getTTL() * 60,


            ]);
        }
        public function refresh(){
                $refreshToken=auth('api')->refresh();
                return response()->json([
                    'refresh_Token'=>$refreshToken,
                    'expires_in'=>auth('api')->factory()->getTTL() * 60
                ]);
        }

        public function me(){
            $user=auth('api')->user();

            return response()->json($user);
        }
        public function logout(){
            auth('api')->logout(true);


            return response(["message"=> "logged out successfully"]);
        }
    }

