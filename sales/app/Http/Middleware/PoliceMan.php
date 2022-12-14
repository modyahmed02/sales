<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class PoliceMan
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next,$role)
    {
        // هنا نعمل الفلترة
        //return redirect()->route('user');

        /*     
        if($role=='admin'){
            return redirect()->route('admin');
        }
        if($role=='user'){
            return redirect()->route('user');
        }
        */

        /*

        if($request->route('type')=="admin"){
            return redirect()->route('admin');
        }
        if($request->route('type')=="user"){
            return redirect()->route('user');
        }
        return $next($request);
        */
    }
}
