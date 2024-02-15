<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;


class PreventRegisterAccess
{
    public function handle(Request $request, Closure $next)
    {

        if ($request->is('register')) {
            return redirect('/')->with('error', 'Registrering är tillfälligt avaktiverad.');
        }

        dd(session('error'));

        return $next($request);
    }
}
