<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Visitor
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
        if (empty($request->input('Email')) || empty($request->input('Password'))) {
            // return redirect()->route('')->with('error', 'Please enter your email and password.');
            // return redirect('/');
        }

        return $next($request);
    }
}
