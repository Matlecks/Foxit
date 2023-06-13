<?php

namespace App\Http\Middleware;

use App\Models\Role;
use Closure;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class RoleValid
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check()) {

            $role_id = Auth::User()->role_id;
            $role = Role::find($role_id);

            if ($role->role == "Admin") {
                return $next($request);
            } else {
                return redirect()->route('main');
            }
        } else {
            return redirect()->route('main');
        }
    }
}
