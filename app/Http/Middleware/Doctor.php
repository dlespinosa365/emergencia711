<?php

namespace App\Http\Middleware;

use App\User;
use Closure;
use Illuminate\Support\Facades\Auth;

class Doctor
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (in_array(Auth::user()->role, [User::ROLE_DOCTOR, User::ROLE_ADMIN, User::ROLE_DIRECTIVO]))
            return $next($request);
        flash('No tiene suficiente privilegios para entrar a esta seccion')->error();
        return redirect('portada');
    }
}
