<?php

namespace App\Http\Middleware;

use Closure;

class SpecificRole
{

    protected $value =  "Admin-rango-1";

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @param $flag
     * @return mixed
     */
    public function handle($request, Closure $next,$flag)
    {
        if ($flag == "true"){
            if (auth()->user()->role->name == $this->value){
                abort(404);
            }
        }
        return $next($request);
    }
}
