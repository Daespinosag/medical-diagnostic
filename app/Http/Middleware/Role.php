<?php

namespace App\Http\Middleware;

use Closure;

class Role
{
    protected $hierarchy = [
        'root'      => 3,
        'admin'     => 2,
        'invited'   => 1,
    ];

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @param $role
     * @return mixed
     */
    public function handle($request, Closure $next,$role)
    {
        if ($this->hierarchy[auth()->user()->role->type] < $this->hierarchy[$role]){
            abort(404);
        }
        return $next($request);
    }
}
