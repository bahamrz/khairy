<?php

namespace App\Http\Middleware;

use Closure;
use App\Product;
use App\Role;
use App\User;

class CheckUser
{
    // /**
    //  * Handle an incoming request.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  \Closure  $next
    //  * @return mixed
    //  */
    public function handle($request, Closure $next)
    {

            $product=Product::find($request->id);
            if ( $request->user()->id !== $product->user_id && $request->user()->id !== 1 ) {
                return redirect('home');
            }
            // dd($product->user_id);
        return $next($request);
    }
}
