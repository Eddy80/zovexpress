<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class MemberMiddleware
{

    public function handle($request, Closure $next)
    {
        if ( Auth::check()  )
        {
            return $next($request);
        }
        else {
            return redirect('/');

        }

        abort(404);

    }
}

