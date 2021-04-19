<?php

namespace App\Http\Middleware;
use Illuminate\Support\Str;
use Closure;

class ApiToken
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
        $api_token=$request->header('authorization');
        
        $api_token=substr($api_token,7);
        $token_acces="cmYIsL9C64Xxn9NR6ZkAaGiSCSYZWdlyyEfF4Yc5IgmHkcsi28";
    

        // if($api_token!=$token_acces){
        //     return response()->json([
        //         'success'=>false,
        //         'error'=>'non sei autorizzato'    
        //     ]);
        // }


        return $next($request);
    }
}
