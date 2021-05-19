<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AuthCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(session()->has('username') )
        {
            if(session('username')=='admin')
            {
                if($request->path()!='ah' && $request->path()!='ai' && $request->path()!='editevent/{id}' && $request->path()!='editfood/{id}'&& $request->path()!='editstage/{id}'&& $request->path()!='deleteevent/{eid}'&& $request->path()!='deletefood/{fid}'&& $request->path()!='deletestage/{sid}'&& $request->path()!='userview')
                {
                    return back();
                }

            }
            else
            {
                if($request->path()!='uh' && $request->path()!='uc'&& $request->path()!='ug'&& $request->path()!='ub'&& $request->path()!='odelete/{id}'&& $request->path()!='finalorders'&& $request->path()!='uo')
                {
                    return back();
                }

            }

        }
        else
        {
            if($request->path()!='/' && $request->path()!='reg' && $request->path()!='l' && $request->path()!='cc' && $request->path()!='cg' && $request->path()!='cv' )
            {
                return redirect('l')->with ('fail','You must be logged in');
            }

        }



        return $next($request)->header('cache-control','no-cache,no-store,max-age=0,must-revalidate')
        ->header('pragma','no-cache')
        ->header('Expires','sat 01 Jan 1990 00:00:00 GMT');
    }

    
}
