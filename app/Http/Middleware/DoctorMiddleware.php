<?php

namespace App\Http\Middleware;

use App\Doctor;
use Closure;


class DoctorMiddleware
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
        if(Doctor::doctor()->role_id == 3){
            return $next($request);
        }else{
            return redirect()->route('login');
        }
    }
}
