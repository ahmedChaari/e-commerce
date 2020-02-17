<?php

namespace App\Http\Middleware;
use Session;
use App\Category;

use Closure;

class VerifyCategoriesCount
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
        if(Category::all()->count() == 0 ){

            toastr()->error('Il faut ajouter un catégorie avant de remplir un post!');
            return redirect(route('categories.create'));
        }
        return $next($request);
    }
}
