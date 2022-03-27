<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class MyMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next,	$id)
    {
        //console.log("POR IF ---------------");
        //console.log($request);
        echo "<script>console.log('Console: " . $request . "' );</script>";
        
         
        $sacar = $request->input('id');
        echo "var ".$sacar;
        print 'foo is $sacar';
        $foo = 25;
        print 'foo is $foo';
        echo "var ".$foo;
        echo "var ".$id;
        if	($foo	<	18)	{
        //if	($request->input('id')	<	18)	{
            //catalog/show/{id}
            //return	redirect('getproductos');
            return	redirect('catalog/show/$request');
        }

        return	$next($request);
    }
}
