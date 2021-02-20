<?php

namespace App\Http\Middleware;

use Closure;

class change_lang
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
        if(session()->has('locale')){
            app()->setLocale(session()->get('locale'));
        }else{
            app()->setLocale('en');
        }

        return $next($request);
    }
}
