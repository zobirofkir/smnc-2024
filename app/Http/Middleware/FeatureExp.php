<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class FeatureExp
{
    /**
     * Handle an incoming request.
     *
     * @param Closure(Request): (Response) $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (env('ABSTRACT_FEATURE_EXPIRED', false)) {
            return redirect()->route('home')->with('message', 'Le délai de soumettre un abstract est expiré');
        }

        return $next($request);
    }
}
