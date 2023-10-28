<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;

class LocalizationMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $locale = $request->segment(count($request->segments()));
        if(in_array($locale,['en' , 'ar'])){
            app()->setLocale($locale);
        }
        // else{
        //   
        //     $locale = 'en';
        //     app()->setLocale($locale);
        // }
        return $next($request);
    }
}
