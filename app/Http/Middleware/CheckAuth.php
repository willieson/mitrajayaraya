<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Tymon\JWTAuth\Facades\JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;

class CheckAuth
{
    public function handle(Request $request, Closure $next)
    {
        $token = $request->header('Authorization') ? str_replace('Bearer ', '', $request->header('Authorization')) : null;

        if (!$token) {
            $token = session('jwt_token');
        }

        if (!$token) {
            return redirect('/login');
        }

        try {
            JWTAuth::setToken($token)->checkOrFail();
        } catch (JWTException $e) {
            return redirect('/login');
        }

        return $next($request);
    }
}
