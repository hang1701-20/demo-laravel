<?php

namespace App\Http\Middleware;

use Closure;

class Openhour
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
        echo date("d/m/Y H:i:s");
        $hour = date("H");
        if($hour<8 || $hour>=7) {
            return redirect('/dong-cua');
        }
        return $next($request);
    }
    public function handle1($request, Closure $next)

    {
        $input = $request->all();
        $age = $input["age"];
        $age;
        if($age>=0&&$age<=18){
            return redirect('/khong-duoc-phep');
        }
        else{
            return redirect('/duoc-phep');
        }

    }
}
