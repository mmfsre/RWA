<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class AccesAdmin
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
        if (Gate::allows('is-super-admin')) {

            if (Gate::allows('is-super-admin')) {
                return $next($request);
            }
        }

        if (Gate::allows('is-admin')) {

            if (Gate::allows('is-admin')) {
                return $next($request);
            }
        }

        return redirect('/');
    }
}
