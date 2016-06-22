<?php

namespace App\Http\Middleware;

use Closure;

class RedirectIfNotAuthor
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
        //ako korisnikot ne e author
        //ne dozvoluvaj pristap do pobaranoto url
        //redirektiraj do articles url
        if(!$request->user()->isAuthor()){
            redirect('/articles');
        }
        return $next($request);
    }
}
