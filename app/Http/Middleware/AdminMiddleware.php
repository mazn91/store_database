<?php

namespace App\Http\Middleware;

use Closure;
use App\User;
use Auth;

class AdminMiddleware
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

        $user_id = Auth::user()->id;

        $user = User::find($user_id);

        
        if (!$user->isAdmin()){

            return redirect('/');
        
        }


        return $next($request);
    }
}
