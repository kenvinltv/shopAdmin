<?php

namespace App\Http\Middleware;

use Closure;

class Authentication
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
		/**
		* _role: name of permission. <Query table to find access permission>
		* _access : session working of user. <Using code hash deny access multiple account>
		**/
		$user = Auth::user();		
		if(	$user->_role && $user->_access){
			
		}		
        return $next($request);
    }
	
	/**
	* Check role access of account to page, post, or function orther.
	*  
	* @param: _role : group name of permission.
	* @return list allow access function.
	*/
	public function role(){
		
		return _role_access;
	}
}






















