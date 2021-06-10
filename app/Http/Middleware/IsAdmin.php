<?php

namespace App\Http\Middleware;

use Closure;
use App\Role;
use Illuminate\Support\Facades\Auth;
class IsAdmin
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
        $currentUserRole = Auth::user()->role_id; 
        //dd($currentUserRole);
        if ($currentUserRole==Role::ADMIN_ROLE) {
            return $next($request);  
        }
        return redirect()->back();
    }
}
