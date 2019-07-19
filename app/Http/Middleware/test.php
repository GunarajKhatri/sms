<?php

namespace App\Http\Middleware;

use Closure;
use App\admin;
class test
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next )

    {
         $email=$request->email;
         $role=admin::where('email',$email)->get();
         if(count($role)<1)
          {
            return redirect('/admin-login');
          
        }
      
         foreach ($role as $roles) {
           
            $roll=$roles->role;
         }
        if($roll=='Admin'){
        
         return redirect('/adminpanel');
     }


   

  return $next($request);
} 
}
