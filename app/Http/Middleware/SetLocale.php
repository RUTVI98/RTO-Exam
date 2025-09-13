<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SetLocale
{
     public function handle(Request $request, Closure $next)
    {
        if (session()->has('lang')) {
            $lang = session()->get('lang');

        } else {
            $lang = 'eng'; 
            session()->put('lang',$lang);
        }

        app()->setLocale($lang);

        return $next($request);
    }
}
