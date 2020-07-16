<?php

namespace App\Http\Middleware;

use Closure;

class Admin
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
    	$user = \Auth::user();
    	if($user->is_admin !== true) {
			return redirect()->route('account')
				->with('error', 'Чувак у тебя нет прав на просмотр админки!');
		}


		return $next($request);
    }
}
