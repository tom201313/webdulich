<?php namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminLoginMiddleware {

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
	    if (Auth::check()) {
	        echo "Đã vào"; die();
            //$employee = Auth::employee();
	        //if ($employee ->level==1 )
            return $next($request);
	        //else
                //return redirect('admin/login');
        }
        else
            return redirect('admin/login');
	}

}
