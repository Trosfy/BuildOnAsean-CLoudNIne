<?php

namespace App\Http\Middleware;

use App\Http\Controllers\AssessmentController;
use Closure;
use Illuminate\Support\Facades\Auth;

class CareerMiddleware
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
        if(Auth::user()->api_result == NULL && Auth::check()){
            return redirect()->action([AssessmentController::class,'majorAssessment'])->with("message","Please take the major assessment first!");;
        } else {
            return $next($request);
        }
    }
}
