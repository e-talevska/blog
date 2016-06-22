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
        //if the authenticated user is not author
        //do not allow access to the requested url
        //redirect to articles url
           if (!$request->user()->isAuthor()){
           return redirect('/articles');
       }
        return $next($request);
    }
}
