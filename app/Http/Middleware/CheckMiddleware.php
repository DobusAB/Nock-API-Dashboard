<?php

namespace App\Http\Middleware;

use Closure;
use \Auth;
use App\User;

class CheckMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $token = $request->header("X-Authentication-Token");
        if (isset($token)) {
            if (User::whereToken($token)->exists()) {
                return $next($request);    
            } else {
                return response()->json(["msg" => 'Not authorized.'], 403, [], JSON_NUMERIC_CHECK);    
            }
        } else {
            return response()->json(["msg" => 'Need token.'], 403, [], JSON_NUMERIC_CHECK);
        }        
    }
}