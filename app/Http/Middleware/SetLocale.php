<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SetLocale
{
     public function handle(Request $request, Closure $next)
    {
        // Check if lang is in the request, otherwise use session, otherwise default to 'en'
        if ($request->has('lang')) {
            $lang = $request->get('lang');
            session(['locale' => $lang]);  // store in session
        } else {
            $lang = session('locale', 'eng'); // default to 'en'
        }

        app()->setLocale($lang);

        return $next($request);
    }
}
