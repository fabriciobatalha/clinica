<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    use AuthenticatesUsers;

    public function login(Request $request)
    {
        $this->validateLogin($request);
        $credentials = $this->credentials($request);
        $token = \Tymon\JWTAuth\Facades\JWTAuth::attempt($credentials);

        return $this->responseToken($token);
    }

    private function responseToken($token)
    {
        // return $token ? ['token' => $token] :
        //     response()->json([
        //         'error' => \Illuminate\Support\Facades\Lang::get('auth.failed')
        //     ], 400);   
        if ($token) {
            
             echo "<script> const token = localStorage.setItem('token', '$token'); location='http://localhost/drpaulovet/cliente-web/login.html'; </script>";
            // return ['token' => $token];
                //'api/v1/login'
        } else {
            return response()->json([
                'error' => \Illuminate\Support\Facades\Lang::get('auth.failed')
            ], 400);
        }
    }

    public function logout()
    {
        Auth::guard('api')->logout();
        return response()->json([], 204);
    }

    public function refresh()
    {
        $token = Auth::guard('api')->refresh();
        return ['tokeb' => $token];
    }
}
